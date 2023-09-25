<html>

<body>

<h1>Student Profile</h1>

<div>
    <p>Name is: {{ $user_name . $user_name }}</p>
    <p>Address is: {{$address}}</p>
    <p>ID is: {{$studentId}}</p>
    <p>GPA is: {{ ($gpa+0.1) }}</p>
    <p>{!! $code !!}</p>


    @if($gpa >= 90)
        <p>A</p>
    @elseif ($gpa >= 80 && $gpa < 90)
        <p>B</p>
    @elseif ($gpa >= 70 && $gpa < 80)
        <p>C</p>
    @else
        <p>F</p>
    @endif

    @switch($address)
        @case('Gaza')
            <p>He's living in {{ $address }}</p>
            <p>Gaza is the lang</p>
            @break

        @case('Rafah')
            <p>He's living in South</p>
            @break

        @default
            <p>He'is living in Palestine</p>
    @endswitch


    <ul>
        @for($i = 0; $i <= count($courses)-1; $i++)
            <li>{{ $courses[$i] }}</li>
        @endfor
    </ul>

    <ul>
        @foreach($courses as $index => $course)
            @if ($courses[$index] == 'Laravel')
                <li>Special Topics of Web (2)</li>
            @else
                <li>{{ $course }}</li>
            @endif
        @endforeach
    </ul>

    @foreach($person as $key => $value)
        @if(is_array($value))
            @foreach($value as $item)
                {{ $item }}
            @endforeach
        @else
            <p>the {{ $key }} is {{ $value }}</p>
        @endif
    @endforeach
</div>

</body>
</html>
