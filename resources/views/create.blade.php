<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Trainer Registration</h1>

    <form action="{{ route('trainer-registrations.store') }}" method="POST">
        @csrf
        <label >Name: </label><br>
        <input type="text" required name="name"><br><br>

        <label>Email: </label><br>
        <input type="text" required name="email"><br><br>

        <label>Specialization: </label><br>
        <select name="specialization">
            <option value="1">Sports</option>
            <option value="2">Fitness</option>
            <option value="3">Yoga</option>
            <option value="4">Knowledge/Academics</option>
        </select><br><br>

        <button type="submit">Submit</button>
        <a href="{{ route('trainer-registrations.index') }}">Back</a>
    </form>
</body>
</html>