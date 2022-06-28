<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ToDoController extends Controller
{
    public function ListToDo()
    {
        $stmt = Todo::query()->get()->all();
        return view('todoList', ['todo' => $stmt]);
    }

}
