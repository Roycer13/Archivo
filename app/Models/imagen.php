<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Imagen
 *
 * @property $id
 * @property $croquis
 * @property $img_funcion
 * @property $img_identidad
 * @property $img_memo
 * @property $img_inicial
 * @property $img_recurrente
 * @property $img_otro
 * @property $created_at
 * @property $updated_at
 *
 * @property Dato[] $datos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Imagen extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['croquis', 'img_funcion', 'img_identidad', 'img_memo', 'img_inicial', 'img_recurrente', 'img_otro'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datos()
    {
        return $this->hasMany(\App\Models\Dato::class, 'id', 'id_imagenes');
    }
    
}
