<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoboticsKit;

class RoboticsKitSeeder extends Seeder
{
    public function run(): void
    {
        RoboticsKit::create(['name' => 'StarterKit']);
        RoboticsKit::create(['name' => 'Educational Robotics Kit']);
        RoboticsKit::create(['name' => 'Kit5']);
    }
}