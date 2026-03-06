<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoboticsKit extends Model
{
    // Un kit tiene muchos cursos
    public function courses() {
        return $this->hasMany(Course::class);
    }
}
