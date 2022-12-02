@extends('layouts.main')

<h1>Push ups training</h1>
<section class="site-section">
    <a href="{{ route('regular-push-ups.create') }}" type="button" class="btn btn-primary">Regular push ups</a>
    <a href="{{ route('wide-push-ups.create') }}" type="button" class="btn btn-success">Wide push ups</a>
    <a href="{{ route('diamond-push-ups.index') }}" type="button" class="btn btn-warning">Diamond push ups</a>
</section>
