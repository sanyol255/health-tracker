<?php

namespace App\Http\Controllers;

use App\Models\RuffierTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Calculation\Tests as TestsCalculation;

class RuffierTestController extends Controller
{
    public function create()
    {
        return view('health-tests.ruffier.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pulse_1' => 'required|numeric',
            'pulse_2' => 'required|numeric',
            'pulse_3' => 'required|numeric'
        ]);

        $pulse1 = $request->get('pulse_1');
        $pulse2 = $request->get('pulse_2');
        $pulse3 = $request->get('pulse_3');
        $user = Auth::user();

        $ruffierIndex = TestsCalculation::ruffierTest($pulse1, $pulse2, $pulse3);

        $ruffier = new RuffierTest([
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'pulse_1' => $pulse1,
            'pulse_2' => $pulse2,
            'pulse_3' => $pulse3,
            'result' => $ruffierIndex['result'],
            'description' => $ruffierIndex['description'],
            'user_id' => $user->id
        ]);
        $ruffier->save();

        session()->flash('success', 'Your ruffier index was successfully saved');
        return redirect('/tests');
    }

    public function show($userId)
    {
        return RuffierTest::where('user_id', $userId)->latest()->first();
    }
}
