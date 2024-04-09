<?php

namespace Database\Seeders;

use App\Models\Step;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StepSeeder extends Seeder
{
    public function run(): void
    {
        Step::create([
            'tarefas_id' => '1',
            'Titulo' => 'passear doguinho',
            'Descricao' => 'ir levar doguinho pra passear'
        ]);

        Step::create([
            'tarefas_id' => '1',
            'Titulo' => 'instalar composer',
            'Descricao' => 'maneira fácil de instalar o composer'
        ]);

        Step::create([
            'tarefas_id' => '1',
            'Titulo' => 'instalar git',
            'Descricao' => 'como usar git'
        ]);
    }
}
