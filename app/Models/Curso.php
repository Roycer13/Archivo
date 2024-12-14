<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 *
 * @property $id
 * @property $gestion_mes_ce
 * @property $evento_ce
 * @property $duracion_ce
 * @property $intitucion_ce
 * @property $folio_ce
 * @property $gestion_mes_co
 * @property $evento_co
 * @property $duracion_co
 * @property $intitucion_co
 * @property $folio_co
 * @property $idioma
 * @property $institucion_i
 * @property $lectura
 * @property $escritura
 * @property $conversacion
 * @property $folio_i
 * @property $curso_c
 * @property $nivel_cono
 * @property $folio_c
 * @property $created_at
 * @property $updated_at
 *
 * @property Dato[] $datos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Curso extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['gestion_mes_ce', 'evento_ce', 'duracion_ce', 'intitucion_ce', 'folio_ce', 'gestion_mes_co', 'evento_co', 'duracion_co', 'intitucion_co', 'folio_co', 'idioma', 'institucion_i', 'lectura', 'escritura', 'conversacion', 'folio_i', 'curso_c', 'nivel_cono', 'folio_c'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datos()
    {
        return $this->hasMany(\App\Models\Dato::class, 'id', 'id_cursos');
    }
    
}
