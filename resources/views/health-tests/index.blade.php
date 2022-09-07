@extends('layouts.main')

@section('title', 'Health checking tests')

@section('content')
<h1>Health tests</h1>
@if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
<section class="health-tests">
    <a href="{{ route('bmi.create') }}" type="button" class="btn btn-primary">Body mass index</a>
    <a href="#" type="button" class="btn btn-success">Ruffier test</a>
    <a href="#" type="button" class="btn btn-secondary">Hypoxia test</a>
</section>
@endsection
