<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuffierTestController extends Controller
{
    public function create()
    {
        return view('health-tests.ruffier.create');
    }
}
