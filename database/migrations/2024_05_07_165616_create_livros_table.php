<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',100)->nullable(false);
            $table->string('autor',50)->nullable(false);
            $table->date('data_de_lancamento')->nullable(false);
            $table->string('editora',50)->nullable(false);
            $table->string('sinopse',1000)->nullable(false);
            $table->string('genero',50)->nullable(false);
            $table->string('avaliacao',1000)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
