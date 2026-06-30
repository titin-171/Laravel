<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create - CRUD</title>
</head>
<body>
    <form action="{{ route('employees.store') }}" method='POST'>
    @csrf

    <input type="text" name="name" placeholder="Enter employee name" required><br><br>
    <input type="text" name="email" placeholder="Enter employee email" required><br><br>
    <input type="text" name="department" placeholder="Enter employee department" required><br><br>
    <button type="submit">Save employee details</button>
    </form>
</body>
</html>