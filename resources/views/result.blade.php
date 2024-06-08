<!DOCTYPE html>
<html>
<head>
    <title>Armstrong Number Result</title>
</head>
<body>
    <h2>Armstrong Number</h2>
    <p>Number: {{ $number }}</p>
    @if($isArmstrong)
        <p>{{ $number }} is Armstrong number.</p>
    @else
        <p>{{ $number }} is not an Armstrong number.</p>
    @endif
    <a href="{{ route('armstrong.index') }}">Check another number</a>
</body>
</html>
