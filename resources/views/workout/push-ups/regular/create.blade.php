@extends('layouts.main')
@section('title', 'Regular push ups')
@section('content')
    {{ Aire::open()->route('regular-push-ups.store') }}
    @csrf
    <section class="container text-center">
        <h1>Regular push ups</h1>
        @if(Session::has('saved'))
            <div class="alert alert-success">
                {{ Session::get('saved') }}
            </div>
        @endif
        {{ Aire::number('amount', 'Amount of regular push ups')->id('amount')->step(1) }}
        {{ Aire::submit('Save result')->addClass('btn btn-success') }}
    </section>
    {{ Aire::close() }}
@endsection
