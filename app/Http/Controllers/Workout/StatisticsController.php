<?php

namespace App\Http\Controllers\Workout;

use App\Http\Controllers\Controller;
use App\Models\Workout\Pushups\RegularPushups;
use App\Models\Workout\Pushups\WidePushups;
use App\Models\Workout\Squats;
use Illuminate\Support\Facades\Auth;

class StatisticsController extends Controller
{
    public function show_statistics()
    {
        $userId = Auth::user()->id;
        $regularPushups = $this->getRegularPushups($userId);
        $widePushups = $this->getWidePushups($userId);
        $squats = $this->getSquats($userId);
        return view('workout.statistics', compact('regularPushups', 'widePushups', 'squats'));
    }

    public function getRegularPushups($userId)
    {
        return RegularPushups::all()->where('user_id', $userId);
    }

    public function getWidePushups($userId)
    {
        return WidePushups::all()->where('user_id', $userId);
    }

    public function getSquats($userId)
    {
        return Squats::all()->where('user_id', $userId);
    }
}
