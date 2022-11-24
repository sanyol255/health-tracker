<?php

namespace App\Http\Controllers;

use App\Models\HypoxiaTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Calculation\Tests as TestsCalculation;

class HypoxiaTestController extends Controller
{
    public function create()
    {
        return view('health-tests.hypoxia.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'inhale' => 'required|numeric',
            'exhale' => 'required|numeric'
        ]);

        $inhale = $request->get('inhale');
        $exhale = $request->get('exhale');
        $user = Auth::user();

        $hypoxiaTest = TestsCalculation::hypoxiaTest($inhale, $exhale);

        $hypoxia = new HypoxiaTest([
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'inhale_result' => $inhale,
            'exhale_result' => $exhale,
            'inhale_score' => $hypoxiaTest['inhale_score'],
            'exhale_score' => $hypoxiaTest['exhale_score'],
            'inhale_info' => $hypoxiaTest['inhale_info'],
            'exhale_info' => $hypoxiaTest['exhale_info'],
            'total_score' => $hypoxiaTest['total_score'],
            'total_info' => $hypoxiaTest['total_info'],
            'user_id' => $user->id
        ]);

        $hypoxia->save();

        session()->flash('success', 'Your hypoxia test result was successfully saved');
        return redirect('/tests');
    }

    public function show($userId)
    {
        return HypoxiaTest::where('user_id', $userId)->latest()->first();
    }
}
