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
        Schema::create('mesures', function (Blueprint $table) {
            $table->id(); // ID
            $table->timestamp('date'); // Date
            $table->integer('sequence'); // Séquence
            $table->float('temperature'); // Température
            $table->float('humidite'); // Humidité
            $table->integer('capteur_id'); // ID capteur
            $table->integer('Salle_id'); // ID salle
            $table->timestamp('created_at'); // Created at
            $table->timestamp('updated_at'); // Update at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mesures');
    }
};
