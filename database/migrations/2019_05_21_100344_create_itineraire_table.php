<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItineraireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itineraire', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ville_id_start');
            $table->integer('quartier_id_start');
            $table->integer('ville_id_stop');
            $table->integer('quartier_id_stop');
            $table->integer('phone')->unique();
            $table->text('description');
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
        Schema::dropIfExists('itineraire');
    }
}
