<?php

namespace App\Http\Controllers;

use App\Models\BodyMassIndex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Calculation\Tests as TestsCalculation;
use MongoDB\Driver\Session;

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

        $weight = $request->get('weight');
        $height = $request->get('height');

        $bmiResult = TestsCalculation::bmi($weight, $height);

        $bmi = new BodyMassIndex([
            'first_name' => Auth::user()->first_name,
            'last_name' => Auth::user()->last_name,
            'weight' => $weight,
            'height' => $height,
            'bmi' => $bmiResult[0],
            'description' => $bmiResult[1]
        ]);
        $bmi->save();
        session()->flash('success', 'Your body mass index was successfully saved');
        return redirect('/tests');
    }
}
