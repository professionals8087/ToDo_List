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

    public function ShowToDo($id)
    {
        $stmt = Todo::query()->where('id', $id)->first();
        return view('showTodo', ['show' => $stmt]);
    }

    public function DeleteToDo(Todo $id)
    {
        $id->delete();
        return redirect()->route('list');
    }

    public function StoreToDo(Request $request)
    {
        $todo = new Todo();
        $todo->name = $request->name;
        if ($todo->save()) {
            return redirect()->route('list');
        }
        return;
    }
}
