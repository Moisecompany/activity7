<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RoboticsKit;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            // bothify genera letras y números aleatorios, ej: Rob-A8F2
            'course_key' => $this->faker->unique()->bothify('Rob-####'), 
            
            // sentence genera texto tipo título
            'title' => $this->faker->sentence(4), 
            
            // imageUrl genera una URL a una imagen aleatoria
            'cover' => $this->faker->imageUrl(640, 480, 'education'), 
            
            // paragraphs genera texto largo simulando el contenido del curso
            'content' => $this->faker->paragraphs(3, true), 
            
            // Asigna un kit aleatorio de los 3 que creamos en el seeder
            'robotics_kit_id' => RoboticsKit::inRandomOrder()->first()->id ?? 1, 
        ];
    }
}