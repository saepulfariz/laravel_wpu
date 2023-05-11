<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WPU BLOG | {{ $title }}</title>
    <link href="{{ url('/') }}/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')
    <div class="container mt-4">
        @yield('container')
    </div>
    <script src="{{ url('/') }}/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
