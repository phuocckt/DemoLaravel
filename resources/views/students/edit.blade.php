<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>

    <form action="{{ route('students.update', ['id' => $id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="userName">User Name:</label>
            <input type="text" id="userName" name="userName" value="{{ $students['UserName'] }}" required>
        </div>

        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="{{ $students['Age']}}" required>
        </div>

        <div>
            <button type="submit">Save</button>
        </div>
    </form>
</body>
</html>
