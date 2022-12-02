@extends('layouts.main')
@section('title', 'Wide push ups')
@section('content')
    {{ Aire::open()->route('wide-push-ups.store') }}
    @csrf
    <section class="container text-center">
        <h1>Wide push ups</h1>
        {{ Aire::number('wide', 'Amount of wide push ups')->id('wide')->step(1) }}
        {{ Aire::submit('Save result')->addClass('btn btn-success') }}
    </section>
    {{ Aire::close() }}
@endsection
