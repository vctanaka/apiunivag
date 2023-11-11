<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alunos;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            TokenSeeder::class,
            AlunoSeeder::class,
            ProfessorSeeder::class,
            DisciplinaSeeder::class,
            PeriodoSeeder::class,
            AulaDiaSeeder::class,
            AlunoFaltaSeeder::class,
            AlunoNotaSeeder::class,
            AlunoAtrasoPagamentoSeeder::class,
            FeedbackConteudoSeeder::class,
            FeedbackFaculdadeSeeder::class,
            FeedbackProfessorSeeder::class,
        ]);


    }
}
