<?php

namespace App\Models\Workout;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Squats extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'user_id', 'amount'];
}
