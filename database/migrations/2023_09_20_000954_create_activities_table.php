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
        Schema::create('TActivities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_formateur');
            $table->foreign('fk_formateur')->references('id')->on('TFormateurs');
            $table->unsignedBigInteger('fk_departement');
            $table->foreign('fk_departement')->references('id')->on('TDepartements');
            $table->unsignedBigInteger('fk_type_activity');
            $table->foreign('fk_type_activity')->references('id')->on('TType_activities');
            $table->unsignedBigInteger('fk_type_skill');
            $table->foreign('fk_type_skill')->references('id')->on('TType_skills');
            $table->string('nom');
            $table->string('description');
            $table->string('date_debut');
            $table->string('date_fin');
            $table->string('localisation');
            $table->string('mode_apprentissage');
            $table->integer("nombre_place");
            $table->boolean('status')->nullable()->default(false);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TActivities');
    }
};
