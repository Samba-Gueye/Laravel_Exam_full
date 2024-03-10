<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
{
    Schema::create('vehicules', function (Blueprint $table) {
        $table->id();
        $table->string("marque");
        $table->string("modele");
        $table->string("type");
        $table->string("matricule");
        $table->date("date_achat");
        $table->float("km_defaut");
        $table->float("prix_location");
        $table->string("etat")->nullable();
        $table->string("disponibilite")->nullable();
        $table->string("photo");
        $table->unsignedBigInteger("chauffeur_id")->nullable(); // Clé étrangère
        $table->timestamps();

        // Clé étrangère
        $table->foreign('chauffeur_id')->references('id')->on('chauffeurs')->onDelete('set null');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
