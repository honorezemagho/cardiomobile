<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedecinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->integer('ville_id');
            $table->integer('quartier_id');
            $table->integer('speciality_id')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('code_id')->nullable();
            $table->integer('hopital_id')->nullable();
            $table->integer('photo_id')->nullable();
            $table->integer('phone');
            $table->integer('status')->default(0);
            $table->string('matricule');
            $table->string('email');
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
        Schema::dropIfExists('medecins');
    }
}
