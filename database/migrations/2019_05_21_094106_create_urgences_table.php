<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrgencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urgences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('ville_id');
            $table->integer('quartier_id');
            $table->integer('phone');
            $table->timestamp('meeting_datetime');
            $table->text('description');
            $table->string('urgence_type')->nullable();
            $table->string('medecin_matricule')->nullable();
            $table->integer('medecin_phone')->nullable();
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
        Schema::dropIfExists('urgences');
    }
}
