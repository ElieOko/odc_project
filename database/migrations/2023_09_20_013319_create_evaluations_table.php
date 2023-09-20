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
        Schema::create('TEvaluations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_user');
            $table->foreign('fk_user')->references('id')->on('TUsers');
            $table->unsignedBigInteger('fk_activity_candidat');
            $table->foreign('fk_activity_candidat')->references('id')->on('TActivity_candidats');
            $table->decimal('evaluation_remote')->nullable();
            $table->decimal('evaluation_local')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TEvaluations');
    }
};
