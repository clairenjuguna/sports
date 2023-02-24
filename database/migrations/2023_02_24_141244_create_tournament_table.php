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
        Schema::create('tournament', function (Blueprint $table) {
            $table->id();
            $table->string('tournament_name');
            $table->string('type');
            $table->string('sport_name');
            $table->foreignId('sport_id')->constrained('sports');
            $table->string('facilitator_name');
            $table->string('venue');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournament');
    }
};
