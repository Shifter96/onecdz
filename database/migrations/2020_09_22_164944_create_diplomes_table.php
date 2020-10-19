<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplomes', function (Blueprint $table) {
            $table->id();
            $table->string('mois');
            $table->integer('annee');
            $table->string('matricule');
            $table->string('branche_id');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_de_naissance');
            $table->integer('wilaya_id')->unsigned();
            $table->foreign('wilaya_id')->references('id')->on('wilayas');
            $table->string('lieux');
            $table->text('adresse');
            $table->integer('num_de_telephone')->nullable();
            $table->string('email')->nullable();
            $table->string('nom_arabe');
            $table->string('prenom_arabe');
            $table->boolean('recu');
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
        Schema::dropIfExists('diplomes');
    }
}
