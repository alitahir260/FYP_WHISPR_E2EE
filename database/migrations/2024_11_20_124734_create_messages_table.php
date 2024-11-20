<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('sender_id')->constrained('users')->onDelete('cascade'); // Foreign key to users table
            $table->foreignId('receiver_id')->constrained('users')->onDelete('cascade'); // Foreign key to users table
            $table->text('content'); // Message content
            $table->boolean('is_encrypted')->default(true); // Encryption status
            $table->boolean('is_read')->default(false); // Read status
            $table->integer('message_timer')->nullable(); // Optional timer for messages
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
