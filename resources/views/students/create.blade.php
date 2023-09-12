<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
</head>
<body>
    <form action="{{route('students.store')}}" method="post">
        @csrf
        <label for="Name">Tên đăng nhập</label>
        <input type="text" name="Name"><br>
        <label for="Password">Mật khẩu</label>
        <input type="password" name="Password">
        <button type="submit">Đăng kí</button>
    </form>
</body>
</html>