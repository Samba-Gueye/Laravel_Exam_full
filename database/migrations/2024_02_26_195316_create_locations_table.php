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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string("lieu_depart");
            $table->string("lieu_arrive");
            $table->date("date_debut");
            $table->date("date_fin");
            $table->unsignedBigInteger("chauffeur_id")->nullable(); // Clé étrangère
            $table->unsignedBigInteger("vehicule_id")->nullable(); // Clé étrangère
            $table->float("montant");
            $table->timestamps();
            $table->float("distance");
            $table->float("prix_location");

            //Clée etrangéres

            $table->foreign('chauffeur_id')->references('id')->on('chauffeurs')->onDelete('set null');
            $table->foreign('vehicule_id')->references('id')->on('vehicules')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
