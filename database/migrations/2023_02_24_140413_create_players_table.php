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
        Schema::create('players', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('second_name');
            $table->string('contact');
            $table->integer('age');
            $table->string('course');
            $table->string('gender');
            $table->string('school_name');
            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')->references('id')->on('school');
            $table->string('sport_name');
            $table->unsignedBigInteger('sport_id');
            $table->foreign('sport_id')->references('id')->on('sports');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
