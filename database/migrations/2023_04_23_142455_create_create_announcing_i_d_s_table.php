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
        Schema::create('create_announcing_i_d_s', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('announcingID');
            $table->foreign('announcingID')->references('id')->on('announcers');

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
        Schema::dropIfExists('create_announcing_i_d_s');
    }
};
