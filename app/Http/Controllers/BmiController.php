<?php

namespace App\Http\Controllers;

use App\Models\BodyMassIndex as BMI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Calculation\Tests as TestsCalculation;

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
        $user = Auth::user();

        $bmiResult = TestsCalculation::bmi($weight, $height);

        $bmi = new BMI([
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'weight' => $weight,
            'height' => $height,
            'bmi' => $bmiResult[0],
            'description' => $bmiResult[1],
            'user_id' => $user->id
        ]);
        $bmi->save();
        session()->flash('success', 'Your body mass index was successfully saved');
        return redirect('/tests');
    }

    public function show($userId)
    {
        return BMI::where('user_id', $userId)->latest()->first();
    }
}
