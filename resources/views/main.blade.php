<!doctype html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    @include('partials.navbar')
    <div class="container px-0 mt-5">
        @yield('container')
    </div>
    @include('partials.js')
</body>

</html>
