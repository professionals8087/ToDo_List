<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../img/icon-todo.svg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>😍 ToDo List 😍</title>
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/fonts/font/fonts.css">
    <link rel="stylesheet" href="../css/fonts/fontawesome/css/all.min.css">
</head>

<body>
    <div class="todo">
        <div class="col-md-12 ">
            <div class="top">
                <h3>دست نویس</h3>
                <button class="btn-hide" id="btn"><i class="fa-solid fa-eye-slash"></i> <span id="text">مخفی
                        کن</span></button>
            </div>
            @if (!empty($id))
                <div class="buttom">
                    <form action="{{ route('edit', ['id' => $id]) }}" method="POST">
                        @csrf
                        <input type="text" name="title" id="tilte" placeholder="عنوان کار جدید"
                            value=" {{ $id->title }}">
                        <button type="submit"><i class="fa-solid fa-plus"></i></button>
                    </form>
                </div>
            @else
                <div class="main" id="main">
                    <ul class="list">
                        @foreach ($todo as $stmt)
                            <li class="item">
                                <div class="title">
                                    <input type="checkbox"> {{ $stmt->title }}
                                </div>
                                <div class="option">
                                    <a href="/update/{{ $stmt->id }}" class="edit"><i
                                            class="fa-solid fa-pencil"></i></a>
                                    <a href="/delete/{{ $stmt->id }}"
                                        onclick="return confirm('آیا از حذف یادداشت <{{ $stmt->title }}> اطمینان دارید؟')"
                                        class="delete"><i class="fa-regular fa-trash-can"></i></a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="buttom">
                    <form action="{{ route('store') }}" method="POST">
                        @csrf
                        <input type="text" name="title" id="tilte" placeholder="عنوان کار جدید">
                        <button type="submit"><i class="fa-solid fa-plus"></i></button>
                    </form>
                </div>
            @endif
        </div>
    </div>
    <script src="../js/all.js"></script>
</body>

</html>
