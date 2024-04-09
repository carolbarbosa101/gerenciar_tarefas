<?php

namespace Database\Seeders;

use App\Models\Tarefas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TarefasSeeder extends Seeder
{
    public function run(): void
    {
        Tarefas::create([
            'titulo' => 'instalar laravel',
            'descricao' => 'maneira fácil de instalar o laravel'
        ]);
    }
}
