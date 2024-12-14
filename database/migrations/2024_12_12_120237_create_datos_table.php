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
        Schema::create('datos', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellido_pat');
            $table->string('apellido_mat');
            $table->string('estado_civil');
            $table->string('apellido_casada')->nullable();
            $table->string('nacionalidad');
            $table->string('direccion');
            $table->string('fecha_nac');
            $table->string('provincia');
            $table->string('canton');
            $table->string('departamento');
            $table->string('serie_libreta_mil')->nullable();
            $table->string('n_libreta_mil')->nullable();
            $table->string('nro_matricula')->nullable();
            $table->string('tipo_sangre');
            $table->string('ci');
            $table->string('emision');
            $table->string('afp');
            $table->string('n_n_cua');
            $table->string('n_seguro');
            $table->string('telefono')->nullable();
            $table->string('celular');
            $table->string('contacto_emer');
            $table->string('email')->nullable();
            $table->string('clave');
            //financiera            
            $table->string('institucion');
            $table->string('n_cuenta');
            $table->string('titulo');
            //Grado
            //  'tel_empresa_e','motivo_e','folio_e'

            $table->string('descripcion');
            $table->string('mes');
            $table->string('gestion');
            $table->string('instituto');
            $table->string('ciudad_pais');
            $table->string('folio_g')->nullable();            
            //experiencia
            $table->string('desde_mes_e')->nullable();
            $table->string('desde_gestion_e')->nullable();
            $table->string('hasta_mes_e')->nullable();
            $table->string('hasta_gestion_e')->nullable();
            $table->string('cargo_e')->nullable();
            $table->string('nom_empresa_e')->nullable();
            $table->string('tel_empresa_e')->nullable();
            $table->string('motivo_e')->nullable();
            $table->string('folio_e')->nullable();
            
            
            
            $table->unsignedBigInteger('id_categorias');
            $table->unsignedBigInteger('id_imagenes');
            $table->unsignedBigInteger('id_cursos');
            $table->foreign('id_cursos')->references('id')->on('cursos')->onDelete('cascade');
            $table->foreign('id_categorias')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('id_imagenes')->references('id')->on('imagens')->onDelete('cascade');
            //$table->foreign('id_cursos')->references('id_curso')->on('cursos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos');
    }
};
