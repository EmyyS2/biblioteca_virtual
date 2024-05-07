<?php

namespace App\Http\Controllers;

use App\Http\Requests\livrosFormRequest;
use App\Models\livros;
use Illuminate\Http\Request;

class livrosController extends Controller
{
    public function Livros(livrosFormRequest $request)
    {
        $Livros = livros::create([
        'titulo'=>$request->titulo,
        'autor'=>$request->autor,
        'data_de_lancamento'=>$request->data_de_lancamento,
        'editora'=>$request->editora,
        'sinopse'=>$request->sinopse,
        'genero'=>$request->genero,
        'avaliacao'=>$request->avaliacao
        ]);
        return response()->json([
            'success' => true,
            'message' => "Livro cadastrado com sucesso",
            'data' => $Livros
        ], 200);
        }
}
