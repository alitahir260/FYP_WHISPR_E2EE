<?php

namespace App\Services;

use Exception;

class ECCEncryption {
    private $privateKey;
    private $publicKey;
    private $keyResource;

    public function __construct() {

        $this->keyResource = openssl_pkey_new([
            "curve_name" => "prime256v1",
            "private_key_type" => OPENSSL_KEYTYPE_EC
        ]);

        if (!$this->keyResource) {
            throw new Exception("Failed to generate ECC keys");
        }


        openssl_pkey_export($this->keyResource, $this->privateKey);


        $keyDetails = openssl_pkey_get_details($this->keyResource);
        $this->publicKey = base64_encode($keyDetails['key']);
    }

    public function getPublicKey() {
        return $this->publicKey;
    }

    public function encrypt($plaintext, $receiverPublicKeyBase64) {
        $receiverPublicKey = base64_decode($receiverPublicKeyBase64);
        $receiverKeyResource = openssl_pkey_get_public($receiverPublicKey);

        if (!$receiverKeyResource) {
            throw new Exception("Invalid receiver public key");
        }


        $sharedSecret = openssl_pkey_derive($receiverKeyResource, $this->keyResource, 32);
        if (!$sharedSecret) {
            throw new Exception("Failed to derive shared secret");
        }


        $aesKey = hash('sha256', $sharedSecret, true);
        $iv = openssl_random_pseudo_bytes(16);


        $ciphertext = openssl_encrypt($plaintext, 'aes-256-gcm', $aesKey, OPENSSL_RAW_DATA, $iv, $tag);

        return [
            'encryptedData' => base64_encode($ciphertext),
            'iv' => base64_encode($iv),
            'authTag' => base64_encode($tag)
        ];
    }

    public function decrypt($encryptedPackage, $senderPublicKeyBase64) {
        $senderPublicKey = base64_decode($senderPublicKeyBase64);
        $senderKeyResource = openssl_pkey_get_public($senderPublicKey);

        if (!$senderKeyResource) {
            throw new Exception("Invalid sender public key");
        }


        $sharedSecret = openssl_pkey_derive($senderKeyResource, $this->keyResource, 32);
        if (!$sharedSecret) {
            throw new Exception("Failed to derive shared secret");
        }


        $aesKey = hash('sha256', $sharedSecret, true);
        $iv = base64_decode($encryptedPackage['iv']);
        $authTag = base64_decode($encryptedPackage['authTag']);
        $encryptedData = base64_decode($encryptedPackage['encryptedData']);


        $decryptedData = openssl_decrypt($encryptedData, 'aes-256-gcm', $aesKey, OPENSSL_RAW_DATA, $iv, $authTag);

        return $decryptedData;
    }
}


$sender = new ECCEncryption();
$receiver = new ECCEncryption();

echo "Sender Public Key: " . $sender->getPublicKey() . PHP_EOL;
echo "Receiver Public Key: " . $receiver->getPublicKey() . PHP_EOL;

$message = "Oppenhimder is the cake of fusion world";
echo "\nOriginal Message: " . $message . PHP_EOL;

$encrypted = $sender->encrypt($message, $receiver->getPublicKey());
echo "\nEncrypted Package: " . print_r($encrypted, true) . PHP_EOL;

$decrypted = $receiver->decrypt($encrypted, $sender->getPublicKey());
echo "\nDecrypted Message: " . $decrypted . PHP_EOL;

?>
