<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <a href="{{ route('students.create') }}">Thêm</a>
    <h1>Danh sách sinh viên</h1>
    <table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $id => $item)
            <tr>
                <td>{{ $item['UserName'] }}</td>
                <td>{{ $item['Age'] }}</td>
                <td style="display:flex">
                    <a href="{{ route('students.edit', ['id' => $id]) }}">Edit</a>
                    <form action="{{ route('students.destroy', ['id' => $id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    <a href="{{ route('students.show', ['id' => $id]) }}">Show</a>  
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>