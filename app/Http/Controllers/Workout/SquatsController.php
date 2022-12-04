<?php

namespace App\Http\Controllers\Workout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Workout\Squats;

class SquatsController extends Controller
{
    public function create()
    {
        return view('workout.squats.create');
    }

    public function store(Request $request)
    {
        $request->validate(['squats' => 'required|numeric|digits_between:1,3']);

        $user = Auth::user();

        $wide = new Squats([
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'user_id' => $user->id,
            'amount' => $request->get('squats')
        ]);
        $wide->save();

        session()->flash('saved', 'Amount of squats was saved');
        return redirect('/workout/squats');
    }
}
