@extends('layouts.app')
@php
use App\Http\Controllers\BmiController as Bmi;
use App\Http\Controllers\RuffierTestController as RuffierIndex;
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

                $bmiData = $bmi->show($user->id);
                $ruffierIndex = $ruffier->show($user->id);
                @endphp
            </div>
            <h3>BMI: {{ $bmiData->bmi ??  '' }} ({{ $bmiData->description ?? '' }})</h3>
            <h3>Ruffier Index: {{ $ruffierIndex->result ??  '' }} ({{ $ruffierIndex->description ?? '' }})</h3>
        </div>
    </div>
</div>
@endsection
