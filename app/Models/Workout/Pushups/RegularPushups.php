<?php

namespace App\Models\Workout\Pushups;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegularPushups extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'user_id', 'amount'];
}
