@extends('layouts.main')
@section('title', 'Squats training')
@section('content')
    {{ Aire::open()->route('squats.store') }}
    @csrf
    <section class="container text-center">
        <h1>Squats</h1>
        @if(Session::has('saved'))
            <div class="alert alert-success">
                {{ Session::get('saved') }}
            </div>
        @endif
        {{ Aire::number('squats', 'Amount of squats')->id('squats')->step(1) }}
        {{ Aire::submit('Save result')->addClass('btn btn-success') }}
    </section>
    {{ Aire::close() }}
@endsection
