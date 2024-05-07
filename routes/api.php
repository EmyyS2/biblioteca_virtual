<?php

use App\Http\Controllers\livrosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('livros/cadastro',[livrosController::class, 'Livros']);

