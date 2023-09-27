<html>

{{--<link href="../../../../public/mystyle.css">--}}

{{--<link href="/var/www/html/iugaza/laravel_2023/MySecondProject/public/mystyle.css">--}}

<link href="{{asset('css/mystyle.css')}}">

<body>

    <h1 style="color: red;">Welcome to student profile page</h1>

    <h2 style="background-color: gray;">Welcome {{$name}}, his GPA is {{ $gpa }}</h2>
</body>
</html>
