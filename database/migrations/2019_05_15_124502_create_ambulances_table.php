<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbulancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambulances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('hopital_id')->index()->unsigned()->nullable();;
            $table->integer('ville_id');
            $table->integer('quartier_id')->index()->unsigned()->nullable();
            $table->string('matricule');
            $table->integer('phone')->index()->unsigned()->nullable();
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
        Schema::dropIfExists('ambulances');
    }
}
