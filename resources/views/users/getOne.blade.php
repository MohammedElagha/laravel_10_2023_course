<html>

<body>

    <h1>User details</h1>

    <p>Name is: {{ $user_name }}</p>
    <p>ID is: {{ ($id+5) }}</p>
    <p>Address is: {{ $address }}</p>

    <p>{!! $code !!}</p>

    <?php
    if ($salary <= 10000) {
        echo "<p>Low</p>";
    } elseif ($salary > 10000 && $salary <= 40000) {
        echo "<p>Mid</p>"
    } else {
        echo "<p>High</p>"
    }
    ?>

    @if ($salary <= 10000)
        <p>{{ $salary }} is High</p>
    @elseif($salary > 10000 && $salary <= 40000)
        <p>Mid</p>
    @else
        <p>Low</p>
    @endif
</body>
</html>
