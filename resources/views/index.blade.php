<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Trainer Registrations</h1>
    <a href="{{ route('trainer-registrations.create') }}">+Create New Registration</a> 
    
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Specialization</th>
            <th>Actions</th>
        </tr>
        @foreach ($trainer as $trainer)
        <tr>
            <td>{{ $trainer->name }}</td>
            <td>{{ $trainer->email }}</td>
            <td>{{ $trainer->specialization }}</td>
            <td>
                <a href="{{ route('trainer-registrations.show', $trainer->id) }}">Show</a>
                <a href="{{ route('trainer-registrations.edit', $trainer->id) }}">Edit</a>
            </td>
        </tr>
            
        @endforeach
    </table>
</body>
</html>