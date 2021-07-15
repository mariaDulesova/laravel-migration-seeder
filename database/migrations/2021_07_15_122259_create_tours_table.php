<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('location', 100);
            $table->string('hotel_name', 100);
            $table->string('hotel_adress', 100);
            $table->char('hotel_stars', 5);
            $table->string('room-type', 50);
            $table->tinyInteger('nights');
            $table->boolean('all_inclusive');
            $table->float('price_per_night_euro', 7,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
