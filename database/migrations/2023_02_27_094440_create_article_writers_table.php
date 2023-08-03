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
        Schema::create('article_writers', function (Blueprint $table) {
            $table->id();
    
            $table->unsignedBigInteger('local_id');
            $table->foreign('local_id')->references('id')->on('article_writers');

            $table->String('Fullname');
            $table->String('academic_year');
            $table->String('article_name');
            $table->String('experience_time');
            $table->String('digital_post');
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
        Schema::dropIfExists('article_writers');
    }
};
