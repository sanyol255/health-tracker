@extends('layouts.main')
@section('title', 'Warm up')
@section('content')
    <section class="p-5">
        <h1>Warm up</h1>
        <a href="{{ asset('images/2-minute-warmup-workout.jpg') }}"><img src="{{ asset('images/2-minute-warmup-workout.jpg') }}" alt="" height="290px"></a>
        <a href="{{ asset('images/4-minute-warmup-workout.jpg') }}"><img src="{{ asset('images/4-minute-warmup-workout.jpg') }}" alt="" height="290px"></a>
        <a href="{{ asset('images/classic-warmup-workout.jpg') }}"><img src="{{ asset('images/classic-warmup-workout.jpg') }}" alt="" height="290px"></a>
        <a href="{{ asset('images/fighters-warmup-workout.jpg') }}"><img src="{{ asset('images/fighters-warmup-workout.jpg') }}" alt="" height="290px"></a>
        <a href="{{ asset('images/quick-warmup-workout.jpg') }}"><img src="{{ asset('images/quick-warmup-workout.jpg') }}" alt="" height="290px"></a>
        <a href="{{ asset('images/universal-warmup-workout.jpg') }}"><img src="{{ asset('images/universal-warmup-workout.jpg') }}" alt="" height="290px"></a>
    </section>
    <a href="https://darebee.com/" style="float: right; padding-right: 2em;">The posters with warm up are from DAREBEE project</a>
@endsection
