<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\QueryException;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('photographers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('local_id')->unsigned();
            $table->foreign('local_id')->references('id')->on('photographers');
            
            
            $table->String('Fullname');
            $table->String('academic_year');
            $table->String('experience_time');
            $table->String('company_name');
            $table->String('courses');
            $table->String('devices');
            $table->String('email');
            $table->String('contact_number');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photographers');
    }
};
