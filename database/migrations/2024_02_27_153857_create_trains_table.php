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
            $table->timestamps();
            $table->string('company', 64);
            $table->string('departure_station', 64);
            $table->string('arrival_station', 64);
            $table->date('departure_date');
            $table->date('arrival_date');
            $table->smallInteger('number_of_carriages')->unsigned();
            $table->boolean('in_time');
            $table->boolean('deleted');
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
