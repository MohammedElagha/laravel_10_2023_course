<html>

<body>

<h1>Student Profile</h1>

<div>
    <p>Name is: {{ $user_name . $user_name }}</p>
    <p>Address is: {{$address}}</p>
    <p>ID is: {{$studentId}}</p>
    <p>GPA is: {{ ($gpa+0.1) }}</p>
    <p>{!! $code !!}</p>

    <?php
    if($gpa >= 90) {
        echo "<p>A</p>";
    } elseif ($gpa >= 80 && $gpa < 90) {
        echo "<p>B</p>";
    } else if ($gpa >= 70 && $gpa < 80) {
        echo "<p>C</p>";
    } else {
        echo "<p>D or F</p>";
    }
    ?>

    @if($gpa >= 90)
        <p>A</p>
    @elseif ($gpa >= 80 && $gpa < 90)
        <p>B</p>
    @elseif ($gpa >= 70 && $gpa < 80)
        <p>C</p>
    @else
        <p>F</p>
    @endif
</div>

</body>
</html>
