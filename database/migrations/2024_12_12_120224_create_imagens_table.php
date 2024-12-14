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
        Schema::create('imagens', function (Blueprint $table) {
            $table->id();
            $table->string('croquis');
            //Funcion
            $table->string('img_funcion');
            //identidad
            $table->string('img_identidad');
            //memo
            $table->string('img_memo');
            //inicial
            $table->string('img_inicial');
            //recurrente
            $table->string('img_recurrente')->nullable();
            //otro
            $table->string('img_otro')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagens');
    }
};
