<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'nombres' => 'required|string',
			'apellido_pat' => 'required|string',
			'apellido_mat' => 'required|string',
			'estado_civil' => 'required|string',
			'apellido_casada' => 'string',
			'nacionalidad' => 'required|string',
			'direccion' => 'required|string',
			'fecha_nac' => 'required|string',
			'provincia' => 'required|string',
			'canton' => 'required|string',
			'departamento' => 'required|string',
			'serie_libreta_mil' => 'string',
			'n_libreta_mil' => 'string',
			'nro_matricula' => 'string',
			'tipo_sangre' => 'required|string',
			'ci' => 'required|string',
			'emision' => 'required|string',
			'afp' => 'required|string',
			'n_n_cua' => 'required|string',
			'n_seguro' => 'required|string',
			'telefono' => 'string',
			'celular' => 'required|string',
			'contacto_emer' => 'required|string',
			'email' => 'string',
			'clave' => 'required|string',
			'institucion' => 'required|string',
			'n_cuenta' => 'required|string',
			'titulo' => 'required|string',
			'descripcion' => 'required|string',
			'mes' => 'required|string',
			'gestion' => 'required|string',
			'instituto' => 'required|string',
			'ciudad_pais' => 'required|string',
			'folio_g' => 'string',
			'desde_mes_e' => 'string',
			'desde_gestion_e' => 'string',
			'hasta_mes_e' => 'string',
			'hasta_gestion_e' => 'string',
			'cargo_e' => 'string',
			'nom_empresa_e' => 'string',
			'tel_empresa_e' => 'string',
			'motivo_e' => 'string',
			'folio_e' => 'string',
			'id_categorias' => 'required',
			'id_imagenes' => 'required',
			'id_cursos' => 'required',
        ];
    }
}
