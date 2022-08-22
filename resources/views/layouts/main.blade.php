<!doctype html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    <header>
        @include('partials.navbar')
    </header>
    @yield('content')
    @include('partials.footer')
</body>
</html>
