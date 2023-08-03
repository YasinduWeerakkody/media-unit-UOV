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
        Schema::create('request_reservations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('regid');
            $table->foreign('regid')->references('id')->on('register_forms')->onDelte('cascade');

            $table->String('fullname');
            $table->String('regOrstaffNo');
            $table->String('acedamicyr');
            $table->String('faculty');
            $table->String('department');
            $table->String('venue');
            $table->String('email');
            $table->String('eventdate');
            $table->String('contactno');
            $table->json('wanted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_reservations');
    }
};
