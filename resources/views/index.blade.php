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
        @foreach ($trainer as $trainers)
        <tr>
            <td>{{ $trainers->name }}</td>
            <td>{{ $trainers->email }}</td>
            <td>{{ $trainers->specialization }}</td>
            <td>
                <a href="{{ route('trainer-registrations.show', $trainers->id) }}">Show</a>
                <a href="{{ route('trainer-registrations.edit', $trainers->id) }}">Edit</a>
                <form action="{{ route('trainer-registrations.destroy', $trainers->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
            
        @endforeach
    </table>
</body>
</html>