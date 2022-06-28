<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShowToDo</title>
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/fonts/font/fonts.css">
    <link rel="stylesheet" href="../css/fonts/fontawesome/css/all.min.css">
</head>

<body>
    <div class="container mt-5">
        <br><br>
        <table class="table table-striped table-dark">
            <tr>
                <td>کد</td>
                <td>نام</td>
                <td>حذف</td>
                <td>ویرایش</td>
            </tr>
            <tr>
                <td>{{ $show->id }}</td>
                <td>{{ $show->name }}</td>
                <td><a href="" class="btn btn-danger">حذف <i
                            class="fa-solid fa-trash-can"></i></a></td>
                <td><a href="" class="btn btn-primary">ویرایش <i
                            class="fa-solid fa-pen-to-square"></i></a></td>
            </tr>
        </table>
    </div>

</body>

</html>
