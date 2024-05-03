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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('inscpt_code')->unique()->comment("Inscription code");
            $table->unsignedBigInteger('cour_id');
            $table->unsignedBigInteger('etudiant_id');
            $table->date( 'date_inscrit' )->default(now());
            $table->double( 'montant' );
            $table->foreign('cour_id')->references('id')->on('cours')->onDelete('cascade');
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
