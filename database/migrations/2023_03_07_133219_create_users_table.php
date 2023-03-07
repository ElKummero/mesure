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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // ID
            $table->tinyText('nom'); // Nom de l'utilisateur
            $table->tinyText('prenom'); // Prénom de l'utilisateur
            $table->tinyText('photo'); // Chemin de la photo de l'utilisateur
            $table->tinyText('email'); // Email de l'utilisateur
            $table->tinyText('password'); // Mot de passe
            $table->tinyText('estAdministrateur'); // Est-il administrateur ?
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
