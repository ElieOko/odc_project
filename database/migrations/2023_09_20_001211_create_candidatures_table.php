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
        Schema::create('TCandidatures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_candidat');
            $table->foreign('fk_candidat')->references('id')->on('TCandidats');
            $table->unsignedBigInteger('fk_activity');
            $table->foreign('fk_activity')->references('id')->on('TActivities');
            $table->string('curriculum_vitae')->nullable();
            $table->string("telephone");
            $table->string("description");
            $table->boolean('is_participate')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TCandidatures');
    }
};
