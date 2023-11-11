<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackConteudoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('feedback_conteudos')->insert([[
            'id_aula_dia' => "1",
            'id_alunos' => "1",
            'estrela' => "4",
            'comentario' => "A aula estava ok",
        ],[
            'id_aula_dia' => "2",
            'id_alunos' => "2",
            'estrela' => "2",
            'comentario' => "Foi uma aula ruim",
        ],[
            'id_aula_dia' => "1",
            'id_alunos' => "3",
            'estrela' => "3",
            'comentario' => "Nao gostei",
        ],]);
    }
}
