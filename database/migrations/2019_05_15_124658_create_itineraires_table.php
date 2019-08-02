<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItinerairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itineraires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->integer('ville_id_start');
            $table->integer('quartier_id_start');
            $table->integer('ville_id_stop');
            $table->integer('quartier_id_stop');
            $table->integer('phone');
            $table->text('description');
            $table->string('confirm_matricule')->nullable();
            $table->integer('confirm_phone')->nullable();
            $table->integer('transaction_id');
            $table->string('expires')->default(0);
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
        Schema::dropIfExists('itineraires');
    }
}
