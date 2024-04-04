<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    public function definition():array
    {
        return [
            'name'=>fake()->company()
        ];
    }
}
