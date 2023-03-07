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
        Schema::create('capteurs', function (Blueprint $table) {
            $table->id(); // ID
            $table->tinyText('nom'); // Nom de l'utilisateur
            $table->tinyText('logo'); // Logo
            $table->tinyText('code'); // Code
            $table->timestamp('created_at'); // Created At
            $table->timestamp('updated_at'); // Updated At
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capteurs');
    }
};
