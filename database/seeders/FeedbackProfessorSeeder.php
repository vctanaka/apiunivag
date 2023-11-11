<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('feedback_professores')->insert([[
            'id_professores' => "1",
            'id_alunos' => "1",
            'estrela' => "4",
            'comentario' => "Legal",
        ],[
            'id_professores' => "2",
            'id_alunos' => "2",
            'estrela' => "4",
            'comentario' => "Muito de..va..gar",
        ],[
            'id_professores' => "3",
            'id_alunos' => "3",
            'estrela' => "3",
            'comentario' => "Nao gostei",
        ],]);
    }
}
