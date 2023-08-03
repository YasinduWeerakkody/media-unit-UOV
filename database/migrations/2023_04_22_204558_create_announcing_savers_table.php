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
        Schema::create('announcing_savers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('localId');
            $table->foreign('localId')->references('id')->on('member_registrations')->onDelte('cascade');
            
            $table->String('title')->nullable();
            $table->String('url')->nullable();
            $table->String('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcing_savers');
    }
};
