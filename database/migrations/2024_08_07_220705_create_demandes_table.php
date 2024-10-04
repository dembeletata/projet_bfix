<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('demandes', function (Blueprint $table) {
        $table->id('id_demande');
        $table->string('nom');
        $table->string('prenom');
        $table->string('nom_service');
        $table->integer('id_service');
        $table->string('email');
        $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
