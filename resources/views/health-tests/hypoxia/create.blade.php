@extends('layouts.main')
@section('title', 'Hypoxia test')
<h1>Hypoxia test</h1>
<article class="container tests-info">
    <p class="indent"><strong>Hypoxia test</strong> - is a test that done by holding your breath on inhale and exhale, and is used for checking
        if a person has hypoxia(low level of oxygen in body tissues).</p>
</article>
{{ Aire::open()->route('hypoxia.store') }}
@csrf
<section class="container">
    {{ Aire::number('inhale', 'Inhale (sec)')->id('inhale')->step(1) }}
    {{ Aire::number('exhale', 'Exhale (sec)')->id('exhale')->step(1) }}
    {{Aire::submit('Check for hypoxia')->addClass('btn btn-success') }}
</section>
{{ Aire::close() }}
