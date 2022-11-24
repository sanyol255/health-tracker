<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HypoxiaTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'inhale_result',
        'exhale_result',
        'inhale_score',
        'exhale_score',
        'inhale_info',
        'exhale_info',
        'total_score',
        'total_info',
        'user_id'
    ];
}
