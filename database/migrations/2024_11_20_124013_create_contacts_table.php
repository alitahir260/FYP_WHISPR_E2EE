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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // Contact ID
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // The user who added this contact
            $table->foreignId('contact_user_id')->constrained('users')->onDelete('cascade'); // The contact being added
            $table->string('name'); // Contact's name
            $table->string('phone'); // Contact's phone number
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
