<?php

namespace App\Http\Requests;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class LivrosFormRequestUpdate extends FormRequest
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
            
            'titulo' => ' required|max:100|min:1',
            'autor' => 'required|max:50|min:1',
            'data_de_lancamento' => 'required|date',
            'editora' => 'required|max:50|min:1',
            'sinopse' => 'required|max:1000|min:1',
            'genero' => 'required|max:50|min:1',
            'avaliacao' => 'max:1000|min:1'
        ];
    }
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    }
    public function messages()
    {
        return [
            'titulo.required' => 'o titulo é obrigatorio',
            'titulo.max' => 'o campo titulo deve contar no maximo 100 caracteres',
            'titulo.min' => 'o campo titulo deve contar no minimo 1 caracteres',
            'autor.required'=> 'o autor é obrigatorio',
            'autor.max'=> 'o campo autor deve contar no maximo 50 caracteres',
            'autor.min'=> 'o campo autor deve contar no minimo 1 caracteres',
            'data_de_lancamento.required'=> 'a data de lançamneto é obrigatorio',
            'data_de_lancamento.date'=> 'O campo data de lançamento deve ter apenas numeros',
            'editora.required'=> 'a editora é obrigatorio',
            'editora.max'=> 'o campo editora deve contar no maximo 50 caracteres',
            'editora.min'=> 'o campo editora deve contar no minimo 1 caracteres',
            'sinopse.required'=> 'a sinopse é obrigatorio',
            'sinopse.max'=> 'o campo sinopse deve contar no maximo 50 caracteres',
            'sinopse.min'=> 'o campo sinopse deve contar no minimo 1 caracteres',
            'genero.required'=> 'o gênero é obrigatorio',
            'genero.max'=> 'o campo genero deve contar no maximo 50 caracteres',
            'genero.min'=> 'o campo genero deve contar no minimo 1 caracteres',
            'avaliacao.max'=> 'o campo avaliacao deve contar no maximo 50 caracteres',
            'avaliacao.min'=> 'o campo avaliacao deve contar no minimo 1 caracteres',

        ];
    }
}

