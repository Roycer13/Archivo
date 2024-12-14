<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dato
 *
 * @property $id
 * @property $nombres
 * @property $apellido_pat
 * @property $apellido_mat
 * @property $estado_civil
 * @property $apellido_casada
 * @property $nacionalidad
 * @property $direccion
 * @property $fecha_nac
 * @property $provincia
 * @property $canton
 * @property $departamento
 * @property $serie_libreta_mil
 * @property $n_libreta_mil
 * @property $nro_matricula
 * @property $tipo_sangre
 * @property $ci
 * @property $emision
 * @property $afp
 * @property $n_n_cua
 * @property $n_seguro
 * @property $telefono
 * @property $celular
 * @property $contacto_emer
 * @property $email
 * @property $clave
 * @property $institucion
 * @property $n_cuenta
 * @property $titulo
 * @property $descripcion
 * @property $mes
 * @property $gestion
 * @property $instituto
 * @property $ciudad_pais
 * @property $folio_g
 * @property $desde_mes_e
 * @property $desde_gestion_e
 * @property $hasta_mes_e
 * @property $hasta_gestion_e
 * @property $cargo_e
 * @property $nom_empresa_e
 * @property $tel_empresa_e
 * @property $motivo_e
 * @property $folio_e
 * @property $id_categorias
 * @property $id_imagenes
 * @property $id_cursos
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Curso $curso
 * @property Imagen $imagen
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dato extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombres', 'apellido_pat', 'apellido_mat', 'estado_civil', 'apellido_casada', 'nacionalidad', 'direccion', 'fecha_nac', 'provincia', 'canton', 'departamento', 'serie_libreta_mil', 'n_libreta_mil', 'nro_matricula', 'tipo_sangre', 'ci', 'emision', 'afp', 'n_n_cua', 'n_seguro', 'telefono', 'celular', 'contacto_emer', 'email', 'clave', 'institucion', 'n_cuenta', 'titulo', 'descripcion', 'mes', 'gestion', 'instituto', 'ciudad_pais', 'folio_g', 'desde_mes_e', 'desde_gestion_e', 'hasta_mes_e', 'hasta_gestion_e', 'cargo_e', 'nom_empresa_e', 'tel_empresa_e', 'motivo_e', 'folio_e', 'id_categorias', 'id_imagenes', 'id_cursos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria()
    {
        return $this->belongsTo(\App\Models\Categoria::class, 'id_categorias', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function curso()
    {
        return $this->belongsTo(\App\Models\Curso::class, 'id_cursos', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function imagen()
    {
        return $this->belongsTo(\App\Models\Imagen::class, 'id_imagenes', 'id');
    }
    
}
