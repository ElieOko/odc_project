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
        Schema::create('TPresences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_activity_candidat');
            $table->foreign('fk_activity_candidat')->references('id')->on('TActivity_candidats');
            $table->boolean('status')->nullable()->default(false);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TPresences');
    }
};
