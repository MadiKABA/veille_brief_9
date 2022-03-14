<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('siege');
            $table->integer('phone')->unique();
            $table->string('siegeSocial');
            $table->string('registre');
            $table->string('siteWeb')->nullable()->unique();
            $table->string('ninea')->unique();
            $table->boolean('contrat')->default(false);
            $table->boolean('dispoFormation')->default(false);
            $table->date('dateCreation');
            $table->unsignedBigInteger('quartier_id');
            $table->foreign('quartier_id')->references('id')->on('quartiers');
            $table->unsignedBigInteger('domaine_id');
            $table->foreign('domaine_id')->references('id')->on('domaines');
            $table->unsignedBigInteger('nbre_employe_id');
            $table->foreign('nbre_employe_id')->references('id')->on('nombre_employes');
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
        Schema::dropIfExists('entreprises');
    }
};
