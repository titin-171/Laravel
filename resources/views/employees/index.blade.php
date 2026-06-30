<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read - CRUD</title>
</head>
<body>
    <h2>Employees List</h2>
    <br><br>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>View</th>
        </tr>

        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->department }}</td>
                <td>
                    <a href="/employees/show/{{ $employee->id }}">View</a>
                </td>
            </tr>
        @endforeach
    </table>

    <br><br>
    <a href="{{ route('employees.create') }}">Add employee</a>
</body>
</html>