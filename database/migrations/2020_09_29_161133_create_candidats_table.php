<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_de_naissance');
            $table->string('lieux');
            $table->integer('wilaya_id')->unsigned();
            $table->foreign('wilaya_id')->references('id')->on('wilayas');
            $table->string('prenom_pere');
            $table->string('nom_mere');
            $table->string('prenom_mere');
            $table->integer('region_id')->unsigned();
            $table->foreign('region_id')->references('id')->on('regions');
            $table->integer('wilaya_residence_id')->unsigned();
            $table->foreign('wilaya_residence_id')->references('id')->on('wilayas');
            $table->integer('commune_id')->unsigned();
            $table->foreign('commune_id')->references('id')->on('communes');
            $table->integer('cem_id')->unsigned();
            $table->foreign('cem_id')->references('id')->on('cems');
            $table->string('nom_arabe');
            $table->string('prenom_arabe');
            $table->string('num_piece_identite');
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
        Schema::dropIfExists('candidats');
    }
}
