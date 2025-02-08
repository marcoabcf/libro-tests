<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'title' => 'Introdução ao Laravel',
            'description' => 'Curso básico para aprender Laravel do zero.',
        ]);

        Course::create([
            'title' => 'API REST com Laravel',
            'description' => 'Curso avançado para construir APIs RESTful com Laravel.',
        ]);

        Course::create([
            'title' => 'Curso de Vue.js',
            'description' => 'Domine o Vue.js para criar aplicações dinâmicas.',
        ]);
    }
}
