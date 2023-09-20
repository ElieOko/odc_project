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
        Schema::create('TFormateurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_user');
            $table->foreign('fk_user')->references('id')->on('TUsers');
            $table->unsignedBigInteger('fk_specialite');
            $table->foreign('fk_specialite')->references('id')->on('TSpecialites');
            $table->string('nom');
            $table->string('postnom');
            $table->string('prenom');
            $table->string('gender');
            $table->string('country');
            $table->string('experience');
            $table->string('photo');
            $table->string('description');
            $table->date('date_naissance');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TFormateurs');
    }
};
