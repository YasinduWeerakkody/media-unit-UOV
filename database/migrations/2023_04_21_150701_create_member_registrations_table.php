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
        Schema::create('member_registrations', function (Blueprint $table) {
            $table->id();
            $table->String('Firstname');
            $table->String('Lastname');
            $table->String('registration_number');
            $table->String('age');
            $table->String('academic_year');
            $table->String('faculty');
            $table->String('department');
            $table->String('contact_number');
            $table->String('birthdate');
            $table->String('address');
            $table->String('city');
            $table->String('province');
            $table->String('district');
            $table->String('gender');
            $table->String('postal_code');
            $table->String('username');
            $table->String('email');
            $table->String('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_registrations');
    }
};
