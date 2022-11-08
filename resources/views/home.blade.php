@extends('layouts.app')
@php
use App\Http\Controllers\BmiController as Bmi;
@endphp
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }} Profile</div>
                @php
                $bmi = new Bmi();
                $bmiData = $bmi->show(Auth::user()->id);
                @endphp
            </div>
            <h2>BMI: {{ $bmiData->bmi ??  '' }} ({{ $bmiData->description ?? '' }})</h2>
        </div>
    </div>
</div>
@endsection
