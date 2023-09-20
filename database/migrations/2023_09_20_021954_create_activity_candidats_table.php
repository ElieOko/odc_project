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
        Schema::create('TActivity_candidats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_candidat');
            $table->foreign('fk_candidat')->references('id')->on('TCandidats');
            $table->unsignedBigInteger('fk_activity');
            $table->foreign('fk_activity')->references('id')->on('TActivities');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TActivity_candidats');
    }
};
