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
        Schema::create('Staff', function (Blueprint $table) {
            $table->id();
        
            $table->String('Firstname');
            $table->String('Lastname');
            $table->String('staff_number');
            $table->String('faculty');
            $table->String('department');
            $table->String('email');
            $table->String('mobile_number');
            $table->String('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Staff');
    }
};
