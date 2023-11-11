<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoNotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alunos_notas')->insert([[
            'id_alunos' => "1",
            'id_periodos' => "1",
            'id_disciplinas' => "1",
            'nota' => "56",
        ],[
            'id_alunos' => "2",
            'id_periodos' => "1",
            'id_disciplinas' => "1",
            'nota' => "70",
        ],[
            'id_alunos' => "3",
            'id_periodos' => "1",
            'id_disciplinas' => "2",
            'nota' => "98",
        ],]);
    }
}
