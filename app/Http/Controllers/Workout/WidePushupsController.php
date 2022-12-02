<?php

namespace App\Http\Controllers\Workout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Workout\Pushups\WidePushups;

class WidePushupsController extends Controller
{
    public function create()
    {
        return view('workout.push-ups.wide.create');
    }

    public function store(Request $request)
    {
        $request->validate(['wide' => 'required|numeric|digits_between:1,3']);

        $user = Auth::user();

        $wide = new WidePushups([
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'user_id' => $user->id,
            'amount' => $request->get('wide')
        ]);
        $wide->save();

        session()->flash('saved', 'Amount of wide push ups was saved');
        return redirect('/push-ups/wide');
    }
}
