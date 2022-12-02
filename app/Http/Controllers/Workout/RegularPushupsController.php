<?php

namespace App\Http\Controllers\Workout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Workout\Pushups\RegularPushups;
use Illuminate\Support\Facades\Auth;

class RegularPushupsController extends Controller
{
    public function create()
    {
        return view('workout.push-ups.regular.create');
    }

    public function store(Request $request)
    {
        $request->validate(['amount' => 'required|numeric|digits_between:1,3']);

        $user = Auth::user();

        $regular = new RegularPushups([
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'user_id' => $user->id,
            'amount' => $request->get('amount')
        ]);
        $regular->save();

        session()->flash('saved', 'Amount of regular push ups was saved');
        return redirect('/push-ups/regular');
    }
}
