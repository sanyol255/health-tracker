<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PushupsController extends Controller
{
    public function index()
    {
        return view('workout.push-ups.index');
    }
}
