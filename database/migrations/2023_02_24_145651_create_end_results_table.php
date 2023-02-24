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
        Schema::create('end_results', function (Blueprint $table) {
            $table->id();

            $table->string('tournament_name');
            $table->string('school_name');
            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')->references('id')->on('school');
            $table->string('sport_name');
            $table->unsignedBigInteger('sport_id');
            $table->integer('rank');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('end_results');
    }
};
