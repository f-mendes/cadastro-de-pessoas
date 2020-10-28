<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
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
    public function rules ()
    {
        return [
            'nome' => 'required|min:3',
            'sobrenome' => 'required|min:3',
            'email' => 'required|email:rfc',
            //'telefone'=> 'required|min:10',


        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'nome.min' => 'O campo nome precisa ter pelo menos três caracteres',
            'sobrenome.min' => 'O campo sobrenome precisa ter pelo menos três caracteres',
            //'telefone.min' => 'O campo telefone precisa ter pelo menos 10 digitos',
        ];
    }

}

