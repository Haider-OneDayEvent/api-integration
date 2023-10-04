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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street_address');
            $table->enum('home', ['own', 'rent']);
            $table->enum('property_type', ['primary', 'landlord']);
            $table->enum('existing_insurer', ['yes', 'no']);
            $table->date('date_of_birth');
            $table->string('current_insurer');
            $table->string('email')->unique();
            $table->string('phone', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
