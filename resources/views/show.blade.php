<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Trainer Registration Details</h1>
    <p><strong>Name:</strong> {{ $trainer->name }}</p>
    <p><strong>Email:</strong> {{ $trainer->email }}</p>
    <p><strong>Specialization:</strong> {{ $trainer->specialization }}</p>
    <a href="{{ route('trainer-registrations.index') }}">Back</a>
</body>
</html>