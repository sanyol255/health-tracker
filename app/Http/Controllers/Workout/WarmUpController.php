<?php

namespace App\Http\Controllers\Workout;

use App\Http\Controllers\Controller;

class WarmUpController extends Controller
{
    public function index()
    {
        return view('workout.warm-up.index');
    }
}
