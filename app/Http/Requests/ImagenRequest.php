<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImagenRequest extends FormRequest
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
			'croquis' => 'required|string',
			'img_funcion' => 'required|string',
			'img_identidad' => 'required|string',
			'img_memo' => 'required|string',
			'img_inicial' => 'required|string',
			'img_recurrente' => 'string',
			'img_otro' => 'string',
        ];
    }
}
