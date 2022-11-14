<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuffierTest extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'pulse_1', 'pulse_2', 'pulse_3', 'result', 'description', 'user_id'];
}
