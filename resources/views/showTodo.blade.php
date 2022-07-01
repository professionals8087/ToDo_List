<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../img/7.svg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo List 😍</title>
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/fonts/font/fonts.css">
    <link rel="stylesheet" href="../css/fonts/fontawesome/css/all.min.css">
</head>

<body>
    <div class="todo" id="todo">
        <div class="col-md-12 ">
            <div class="top">
                <h3>دست نویس</h3>
                <button class="btn-hide" id="btn"><i class="fa-solid fa-eye-slash"></i> <span id="text">مخفی
                        کن</span></button>
            </div>
            <div class="main" id="main">
                <ul class="list">
                    <li class="item">
                        <div class="title"><input type="checkbox"> {{ $show->title }}</div>
                        <div class="option">
                            <a href="/update/{{ $show->id }}" class="edit"><i class="fa-solid fa-pencil"></i></a>
                            <a href="/delete/{{ $show->id }}"
                                onclick="return confirm('آیا از حذف یادداشت <{{ $show->title }}> اطمینان دارید؟')"
                                class="delete"><i class="fa-regular fa-trash-can"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="../js/all.js"></script>
</body>

</html>
