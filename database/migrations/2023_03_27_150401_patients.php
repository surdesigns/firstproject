<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Patients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('patients');

        Schema::create('patients', function (Blueprint $table) {
            $table ->id();
            $table ->string('nom');
            $table ->string('prenom');
            $table ->integer('genre');
            $table ->integer('civilité');
            $table ->date('date_naissance');
            $table ->string('profession')->nullable();
            $table ->integer('situation_familiale');
            $table ->integer('photo_patient')->nullable();
            $table ->unsignedBigInteger('mutuelle_id')->nullable();
            //$table->foreign('mutuelle_id')->references('id')->on('mutuelles');
            $table ->string('gsm');
            $table ->string('gsm_whatsapp')->nullable();
            $table ->string('fix')->nullable();
            $table ->string('fax')->nullable();
            $table ->string('adresse')->nullable();
            $table ->string('ville')->nullable();
            $table ->string('pays')->nullable();
            $table ->text('commentaire')->nullable();
            $table ->string('created_by');
            $table ->softDeletes();
            $table ->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
