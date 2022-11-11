@extends('layouts.main')
@section('title', 'Ruffier test')
<h1>Ruffier test</h1>
<article class="container tests-info">
    <p class="indent"><strong>Ruffier test</strong> is a simple and universal method for checking your heart condition, developed by the french doctor
    James Ruffier(1875 - 1964), and is often used in sport medicine or in physical rehabilitation for checking person's
    conditions.</p>
{{ Aire::open()->route('ruffier.store') }}
    <section>
        <h3>Steps for test:</h3>
        <ol>
            <li>Lie down on the back, and rest for 5 minutes</li>
            <li>Check your pulse for 15 seconds and enter the value to form field (pulse 1):
            {{ Aire::number('pulse_1', null)->id('pulse_1')->placeholder('20')->step(1) }}
            </li>
            <li>Now make 30 squates in 30 seconds</li>
            <li>Lie down, check pulse for 15 second and enter in the form field (pulse 2):
                {{ Aire::number('pulse_2', null)->id('pulse_2')->placeholder('25')->step(1) }}
            </li>
            <li>Wait for 30 seconds</li>
            <li>Check pulse again and enter in the form field (pulse 3)
                {{ Aire::number('pulse_3', null)->id('pulse_3')->placeholder('22')->step(1) }}
            </li>
            <li>Press the button - Calculate Ruffier index</li>
        </ol>
        {{ Aire::submit('Calculate Ruffier index')->addClass('mb-5 btn btn-success') }}
    </section>
{{ Aire::close() }}
</article>

