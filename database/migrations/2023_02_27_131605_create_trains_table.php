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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 30);
            $table->string('starting_station', 50);
            $table->time('starting_time');
            $table->time('destination_time');
            $table->tinyInteger('train_number')->unsigned();
            $table->tinyInteger('wagon_number')->unsigned();
            $table->boolean('is_delay');
            $table->boolean('is_delete');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
