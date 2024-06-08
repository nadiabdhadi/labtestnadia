<html>
<head>
    <title>Armstrong Number</title>
</head>
<body>
    <h1>Armstrong Number</h1>
    <form action="{{ route('armstrong.check') }}" method="post">
        @csrf
        <label for="number">Enter any number:</label>
        <input type="number" name="number">
        <button type="submit">Check Armstrong Number</button>
    </form>
</body>
</html>
