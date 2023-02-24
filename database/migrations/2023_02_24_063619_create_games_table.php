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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('home_team_id');
             $table->foreign('home_team_id')->references('id')->on('teams');
    $table->unsignedBigInteger('away_team_id');
    $table->foreign('away_team_id')->references('id')->on('teams');
    $table->unsignedSmallInteger('home_score')->default(0);
    $table->unsignedSmallInteger('away_score')->default(0);
    $table->dateTime('date_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
