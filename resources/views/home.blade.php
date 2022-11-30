@extends('layouts.app')
@php
use App\Http\Controllers\BmiController as Bmi;
use App\Http\Controllers\RuffierTestController as RuffierIndex;
use App\Http\Controllers\HypoxiaTestController as HypoxiaTest;
use Illuminate\Support\Facades\Auth;

$user = Auth::user();
@endphp
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user->first_name . ' ' . $user->last_name }} Profile</div>
                @php
                $bmi = new Bmi();
                $ruffier = new RuffierIndex();
                $hypoxia = new HypoxiaTest();

                $bmiData = $bmi->show($user->id);
                $ruffierIndex = $ruffier->show($user->id);
                $hypoxiaTest = $hypoxia->show($user->id);
                @endphp
            </div>
            <h3>BMI: {{ $bmiData->bmi ??  '' }} ({{ $bmiData->description ?? '' }})</h3>
            <h3>Ruffier Index: {{ $ruffierIndex->result ??  '' }} ({{ $ruffierIndex->description ?? '' }})</h3>
            <h3>Hypoxia test: {{ $hypoxiaTest->total_score ?? '' }} ({{ $hypoxiaTest->total_info ?? '' }})</h3>
        </div>
    </div>
</div>
@endsection
