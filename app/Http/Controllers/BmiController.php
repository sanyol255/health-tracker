<?php

namespace App\Http\Controllers;

use App\Models\BodyMassIndex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BmiController extends Controller
{
    public function create()
    {
        return view('health-tests.bmi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'weight' => 'required|numeric',
            'height' => 'required|numeric'
        ]);

        $bmi = new BodyMassIndex([
            'first_name' => Auth::user()->first_name,
            'last_name' => Auth::user()->last_name,
            'weight' => $request->get('weight'),
            'height' => $request->get('height')
        ]);

        $bmi->save();

        return redirect('/tests')->with('success', 'Your body mass index was successfully saved');


    }
}
