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
        Schema::create('TCandidats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_user');
            $table->foreign('fk_user')->references('id')->on('TUsers');
            $table->unsignedBigInteger('fk_profession');
            $table->unsignedBigInteger('fk_university');
            $table->foreign('fk_university')->references('id')->on('TUniversities');
            $table->foreign('fk_profession')->references('id')->on('TProfessions');
            $table->unsignedBigInteger('fk_niveau_etude');
            $table->foreign('fk_niveau_etude')->references('id')->on('TNiveau_etudes');
            $table->string('nom');
            $table->string('prenom');
            $table->string('photo');
            $table->string('gender');
            $table->string('country');
            $table->date('date_naissance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TCandidats');
    }
};
