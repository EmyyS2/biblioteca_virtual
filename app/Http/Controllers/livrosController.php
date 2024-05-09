<?php

namespace App\Http\Controllers;

use App\Http\Requests\livrosFormRequest;
use App\Http\Requests\LivrosFormRequestUpdate;
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
        public function pesquisarPorTitulo(Request $request)
        {
            $Livros =  Livros::where('titulo', 'like', '%' . $request->titulo . '%')->get();
            if (count($Livros) > 0) {
                return response()->json([
                    'status' => true,
                    'data' => $Livros
                ]);
            }
    
            return response()->json([
                'status' => false,
                'message' => 'não existe livros com esse titulo registrado.'
            ]);
        }
        public function retornarTodos()
        {
            $Livros = Livros::all();
            return response()->json([
                'status' => true,
                'data' => $Livros
            ]);
        }
        public function atualizarLivros(LivrosFormRequestUpdate $request)
    {
        $Livros = Livros::find($request->id);

        if (!isset($Livros)) {
            return response()->json([
                'status' => false,
                'message' => "Livros não encontrado"
            ]);
        }

        if (isset($request->titulo)) {
            $Livros->titulo = $request->titulo;
        }
        if (isset($request->autor)) {
            $Livros->autor = $request->autor;
        }
        if (isset($request->data_de_lancamento)) {
            $Livros->data_de_lancamento = $request->data_de_lancamento;
        }
        if (isset($request->editora)) {
            $Livros->editora = $request->editora;
        }
        if (isset($request->sinopse)) {
            $Livros->sinopse = $request->sinopse;
        }
        if (isset($request->genero)) {
            $Livros->genero = $request->genero;
        }
        if (isset($request->avaliacao)) {
            $Livros->avaliacao = $request->avaliacao;
        }
        $Livros->update();

        return response()->json([
            'status' => false,
            'message' => "Livros atualizado"
        ]);  
    
}

public function pesquisarPorId($id)
{
    $Livros = Livros::find($id);
    if ($Livros == null) {
        return response()->json([
            'status' => false,
            'message' => "Id não encontrado"
        ]);
    }
    return response()->json([
        'status' => true,
        'data' => $Livros
    ]);
}
public function excluir($id)
    {
        $Livros = Livros::find($id);
        if (!isset($Livros)) {
            return response()->json([
                'status' => false,
                'message' => "Livro não encontrado"
            ]);
        }
        $Livros->delete();

        return response()->json([
            'status' => false,
            'message' => 'Livro excluido com sucesso'
        ]);
    }

}
