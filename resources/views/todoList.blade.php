<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDoList</title>
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/fonts/font/fonts.css">
    <link rel="stylesheet" href="../css/fonts/fontawesome/css/all.min.css">
</head>

<body>
    <br>
    <div class="container mt-5">
        <h1 class="title">لیست کارها</h1>
        <form action="" method="POST" style="display: flex;">
            @csrf
            <input type="text" class="form-control" placeholder="افزودن جدید" name="name">
            <button type="submit" class="btn btn-primary"> + </button>
        </form>
        <br>
        <table class="table table-striped table-dark">
            <tr>
                {{-- <td>کد</td> --}}
                <td>نام</td>
                <td>حذف</td>
                <td>ویرایش</td>
            </tr>
            {{-- @foreach ($category as $stmt) --}}
                <tr>
                    {{-- <td>{{ $stmt->id }}</td>
                    <td>{{ $stmt->name }}</td>
                    <td><a href="/delete/{{ $stmt->id }}" class="btn btn-danger">حذف <i
                                class="fa-solid fa-trash-can"></i></a></td>
                    <td><a href="/update/{{ $stmt->id }}" class="btn btn-primary">ویرایش <i
                                class="fa-solid fa-pen-to-square"></i></a></td> --}}
                </tr>
            {{-- @endforeach --}}
        </table>
    </div>

</body>

</html>
