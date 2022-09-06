@php
    use Illuminate\Support\Facades\Auth;
@endphp
<nav>
    <ul class="navigation">
        <li>
            <a href="{{ route('main-page') }}">Main page</a>
            <a href="{{ route('health-tests.index') }}">Health tests</a>
            <a href="{{ route('workout.index') }}">Workout exercises</a>
            <a href="{{ route('nutrition.index') }}">Healthy food and vitamins</a>
            <a href="{{ route('general.index') }}">General advices</a>
            <a href="{{ route('login') }}">
                @if(isset(Auth::user()->id))
                    {{Auth::user()->first_name . ' ' . Auth::user()->last_name}}
                @else
                    Login/Sign up
                @endif
            </a>

        </li>
    </ul>
</nav>
