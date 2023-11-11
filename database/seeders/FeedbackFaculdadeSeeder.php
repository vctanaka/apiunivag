<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackFaculdadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('feedback_faculdade')->insert([[
            'id_alunos' => "1",
            'estrela' => "2",
            'comentario' => "Faculdade está caindo aos pedacos",
        ],[
            'id_alunos' => "2",
            'estrela' => "5",
            'comentario' => "Pc novo!",
        ],[
            'id_alunos' => "3",
            'estrela' => "3",
            'comentario' => "Nao gostei",
        ],]);
    }
}
