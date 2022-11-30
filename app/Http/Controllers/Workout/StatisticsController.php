<?php

namespace App\Http\Controllers\Workout;

use App\Http\Controllers\Controller;
use App\Models\Workout\Pushups\RegularPushups;
use Illuminate\Support\Facades\Auth;

class StatisticsController extends Controller
{
    public function show_statistics()
    {
        $userId = Auth::user()->id;
        $regularPushups = $this->getRegularPushups($userId);
        return view('workout.statistics', compact('regularPushups'));
    }

    public function getRegularPushups($userId)
    {
        return RegularPushups::all()->where('user_id', $userId);
    }
}
