<?php

namespace Database\Seeders;

use App\Models\livros;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LivrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        for($i=0; $i< 100; $i++){
            livros::create([
                'titulo'=>'titulo incrivel'. $i,
                'autor'=>'autor incrivel'.$i,
                'data_de_lancamento'=>'2006-11-15',
                'editora'=>'editora incrivel'.$i,
                'sinopse'=>'sinopse incrivel'.$i,
                'genero'=>'genero interessante'.$i,
                'avaliacao'=>'avaliacao fantastica'.$i
            ]);
        }
        }
    }
