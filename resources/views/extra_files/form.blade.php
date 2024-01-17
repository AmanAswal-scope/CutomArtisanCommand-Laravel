<!DOCTYPE html>
<html>
<head>
    <title>Submit Details</title>
</head>
<body>
    <h2>Submit Details</h2>
    <form action="{{ route('process.details') }}" method="get">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
