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
        Schema::create('appartements', function (Blueprint $table) {
            $table->integer('NumAppart')->primary();
            $table->string('Rue', 50);
            $table->string('Arrondissement', 50);
            $table->smallInteger('Etage');
            $table->string('TypeAppart', 50);
            $table->integer('PrixLoc');
            $table->integer('PrixCharge');
            $table->string('Ascenseur', 50);
            $table->string('Preavis', 50);
            $table->date('DateLibre');
            $table->string('image_path')->nullable();
            $table->unsignedBigInteger('Proprietaire');
            $table->foreign('Proprietaire')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartements');
    }
};
