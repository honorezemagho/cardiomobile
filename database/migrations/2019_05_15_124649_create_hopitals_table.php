<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHopitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hopitals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('ville_id');
            $table->integer('quartier_id')->index()->unsigned()->nullable();
            $table->integer('structure_id');
            $table->integer('phone');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hopitals');
    }
}
