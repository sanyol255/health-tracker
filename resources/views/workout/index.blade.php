@extends('layouts.main')
@section('title', 'Workout exercises')

@section('content')
<h1>Workout exercises</h1>
<section class="site-section">
    <a href="{{ route('push-ups.index') }}" type="button" class="btn btn-primary">Push ups</a>
    <a href="{{ route('squats.create') }}" type="button" class="btn btn-success">Squats</a>
    <a href="{{ route('warm-up.index') }}" type="button" class="btn btn-warning">Warm up</a>
    <a href="{{ route('workout.statistics') }}" type="button" class="btn btn-info">Statistics</a>
</section>
@endsection
