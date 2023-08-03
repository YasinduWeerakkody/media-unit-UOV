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
        Schema::create('phography_id_creators', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('photographyID');
            $table->foreign('photographyID')->references('id')->on('photographers');

            $table->unsignedBigInteger('memberId');
            $table->foreign('memberId')->references('id')->on('member_registrations');

            $table->String('NewAdminCreateID');
            $table->String('fullname');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phography_id_creators');
    }
};
