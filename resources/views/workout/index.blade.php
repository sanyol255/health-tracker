@extends('layouts.main')
@section('title', 'Workout exercises')

@section('content')
<h1>Workout exercises</h1>
@if(Session::has('saved'))
    <div class="alert alert-success">
        {{ Session::get('saved') }}
    </div>
@endif
<section class="site-section">
    <a href="{{ route('push-ups.index') }}" type="button" class="btn btn-primary">Push ups</a>
    <a href="#" type="button" class="btn btn-success">Squats</a>
    <a href="#" type="button" class="btn btn-info">Pull ups</a>
    <a href="#" type="button" class="btn btn-warning">Abs</a>
    <a href="#" type="button" class="btn btn-dark">Warm up</a>
</section>
@endsection
