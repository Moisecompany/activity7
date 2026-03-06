<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // Un curso pertenece a un kit
    public function roboticsKit() {
        return $this->belongsTo(RoboticsKit::class);
    }

    // Un curso pertenece a muchos grupos
    public function groups() {
        return $this->belongsToMany(Group::class);
    }
}
