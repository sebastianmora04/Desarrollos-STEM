<?php

namespace App\Http\Requests;

use Faker\Guesser\Name;
use Illuminate\Foundation\Http\FormRequest;

class StoreBlog extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => 'required',
            'informacion' => 'required',
            'categoria' => 'required'
        ];
    }
    public function attributes()
    {
        return[

        ];
    }
    public function messages()
    {
        return[
            'titulo.required' => 'Debe ingresar un título',
            'informacion.required' => 'Debe ingresar información',
            'categoria.required' => 'Debe ingresar categoría'
        ];
    }
}
