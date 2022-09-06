@extends('layouts.main')
@section('title', 'Body mass index')
<h1>Body mass index</h1>
<article class="container tests-info">
    <p class="indent"><strong>Body mass index (BMI)</strong> is a value derived from the mass (weight) and height of a person.
    The BMI is defined as the body mass divided by the square of the body height,
        and is expressed in units of kg/m<sup>2</sup>, resulting from mass in kilograms and height in metres.</p>
    <p class="indent">The BMI is a convenient rule of thumb used to broadly categorize a person as underweight,
    normal weight, overweight, or obese based on tissue mass (muscle, fat, and bone) and height.
        Major adult BMI classifications are underweight (under 18.5 kg/m<sup>2</sup>), normal weight (18.5 to 24.9),
    overweight (25 to 29.9), and obese (30 or more). When used to predict an individual's health,
    rather than as a statistical measurement for groups, the BMI has limitations that can make it less
    useful than some of the alternatives, especially when applied to individuals with abdominal obesity,
    short stature, or unusually high muscle mass.</p>
</article>

{{ Aire::open()->route('bmi.store') }}
    <section class="bmi-form">
        <h2 class="text-center">Enter your body weight and height: </h2>
        {{ Aire::number('weight', 'Weight(kg)')->id('weight')->groupClass('ms-5')->placeholder('65')->step(0.1) }}
        {{ Aire::number('height', 'Height(m)')->id('height')->groupClass('ms-5')->placeholder('1.75')->step(0.01) }}
        {{ Aire::submit('Calculate body mass index')->addClass('ms-5 btn btn-success') }}
    </section>
{{ Aire::close() }}
