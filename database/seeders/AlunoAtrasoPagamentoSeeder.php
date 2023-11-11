<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoAtrasoPagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alunos_atraso_pagamento')->insert([[
            'id_alunos' => "3",
            'mes' => "1",
        ],[
            'id_alunos' => "4",
            'mes' => "2",
        ],[
            'id_alunos' => "5",
            'mes' => "1",
        ],[
            'id_alunos' => "5",
            'mes' => "2",
        ],]);
    }
}
