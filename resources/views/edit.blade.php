<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Trainer Registration</h1>
    <form action="{{ route('trainer-registrations.update', $trainer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label >Name: </label><br>
        <input type="text" required name="name" value="{{ $trainer->name }}"><br><br>

        <label>Email: </label><br>
        <input type="email" required name="email" value="{{ $trainer->email }}"><br><br>

        <label>Specialization: </label><br>
        <select name="specialization">
            <option value="Sports" {{ $trainer->specialization == 'Sports' ? 'selected' : '' }}>Sports</option>
            <option value="Fitness" {{ $trainer->specialization == 'Fitness' ? 'selected' : '' }}>Fitness</option>
            <option value="Yoga" {{ $trainer->specialization == 'Yoga' ? 'selected' : '' }}>Yoga</option>
            <option value="Knowledge/Academics" {{ $trainer->specialization == 'Knowledge/Academics' ? 'selected' : '' }}>Knowledge/Academics</option>
        </select><br><br>

        <button type="submit">Update</button>
        <a href="{{ route('trainer-registrations.index') }}">Back</a>
    </form>
</body>
</html>