<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Ejecutar los seeders específicos
        $this->call([
            UserSeeder::class,
            RoboticsKitSeeder::class,
        ]);

        // 2. Generar 100 cursos con el Factory
        Course::factory(100)->create();
    }
}