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
        Schema::create('tbeventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreevento');
            $table->date('dateevento');
            $table->string('horaevento');
            $table->unsignedInteger('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbeventos');

    }
};
