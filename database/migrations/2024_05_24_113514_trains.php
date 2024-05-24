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
            $table->id(); // colonna id primary key unsigned bigint autoincrement
            $table->string('brand', 100);
            $table->string('arrival_station', 50);
            $table->string('departure_station', 50);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 100);
            $table->tinyInteger('number_of_carriages');
            $table->boolean('in_time')->default(true);
            $table->boolean('deleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
