<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorLibros extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'ISBN' => 'required|numeric|Digits_between:13,num',
            'Titulo' => 'required',
            'Autor' => 'required',
            'Paginas' => 'required|numeric',
            'Editorial' => 'required',
            'Email-Editorial'=> 'required|email'
        ];
    }
}
