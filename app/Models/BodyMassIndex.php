<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyMassIndex extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'weight', 'height', 'bmi', 'description'];
}
