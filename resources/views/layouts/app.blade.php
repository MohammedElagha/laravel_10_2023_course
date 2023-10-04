<html>

<head>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</head>

<body>
    <div class="container">
        @yield('title')

        <hr>

        @yield('content')
    </div>
</body>

</html>
