<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthTestsController extends Controller
{
    public function index()
    {
        return view('health-tests.index');
    }
}
