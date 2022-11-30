@extends('layouts.main')
@section('title', 'Workout statistics')
@php
use App\Http\Controllers\Workout\StatisticsController;
use Illuminate\Support\Facades\Auth;

@endphp
@section('content')
    <h1>Workout statistics</h1>
    <table class="stat-table d-flex justify-content-center">
        <tr>
            <th colspan="2" class="text-center">Regular push ups</th>
        </tr>
        <tr>
            <th>Date and time</th>
            <th>Amount</th>
        </tr>
        @foreach ($regularPushups as $pushups)
        <tr>
            <td>{{ $pushups['created_at']->format('d/m/Y H:i') }}</td>
            <td>{{ $pushups['amount'] }}</td>
        </tr>
        @endforeach
    </table>
@endsection
