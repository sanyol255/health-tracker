<?php

namespace App\Http\Controllers\Workout;

use App\Http\Controllers\Controller;

class PushupsController extends Controller
{
    public function index()
    {
        return view('workout.push-ups.index');
    }
}
