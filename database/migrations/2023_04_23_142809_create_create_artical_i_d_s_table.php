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
        Schema::create('create_artical_i_d_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('articleID');
            $table->foreign('articleID')->references('id')->on('article_writers');

            $table->unsignedBigInteger('memberID');
            $table->foreign('memberID')->references('id')->on('member_registrations');


    
            $table->String('AdminCreateID');
            $table->String('Fullname');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_artical_i_d_s');
    }
};
