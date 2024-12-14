<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
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
			'gestion_mes_ce' => 'string',
			'evento_ce' => 'string',
			'duracion_ce' => 'string',
			'intitucion_ce' => 'string',
			'folio_ce' => 'string',
			'gestion_mes_co' => 'string',
			'evento_co' => 'string',
			'duracion_co' => 'string',
			'intitucion_co' => 'string',
			'folio_co' => 'string',
			'idioma' => 'required|string',
			'institucion_i' => 'string',
			'lectura' => 'string',
			'escritura' => 'string',
			'conversacion' => 'string',
			'folio_i' => 'string',
			'curso_c' => 'string',
			'nivel_cono' => 'string',
			'folio_c' => 'string',
        ];
    }
}
