<?php

namespace App\Http\Controllers;

use App\Models\BodyMassIndex;
use Illuminate\Http\Request;

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
            'weight' => $request->get('weight'),
            'height' => $request->get('height')
        ]);

        $bmi->save();

        return redirect('/tests')->with('success', 'Your body mass index was successfully saved');


    }
}
