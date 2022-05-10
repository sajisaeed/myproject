<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Task Id</th>
            <th scope="col">Task Name</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
    </thead>
    <form action="{{ route('updateact',[$task->id]) }}" method="POST">
        @method('PUT')
        <tbody>
            <tr>
                <th scope="row">{{ $task->id }} </th>
                <td>@csrf<input type="text" name="name" value="{{ $task->name }}"></td>
                <td>{{ $task->created_at }}</td>
                <td>{{ $task->updated_at }}</td>
                <td>
                    <button type="submit" class="btn btn-success">
                        Save
                    </button>
                </td>
            </tr>
        </tbody>
    </form>
    </table>
</body>
</html>