<?php

use App\Http\Controllers\livrosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('livros/cadastro',[livrosController::class, 'Livros']);
Route::post('livros/pesquisartitulo',[livrosController::class, 'pesquisarPorTitulo']);
Route::put('livros/atualizar',[livrosController::class, 'atualizarLivros']);
Route::get('livros/pesquisar/{id}',[livrosController::class, 'pesquisarPorId']);
Route::get('livros/visualizar', [livrosController::class, 'retornarTodos']);
Route::delete('livros/delete/{id}',[livrosController::class, 'excluir']);