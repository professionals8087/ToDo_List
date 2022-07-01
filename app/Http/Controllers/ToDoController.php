<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToDoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ToDoController extends Controller
{
    /********************** START **********************/
    
    /*********** List ToDo ***********/
    public function ListToDo()
    {
        $stmt = Todo::query()->get()->all();
        return view('List', ['todo' => $stmt]);
    }

    /*********** Show ToDo ***********/
    public function ShowToDo($id)
    {
        $stmt = Todo::query()->where('id', $id)->first();
        return view('ShowTodo', ['show' => $stmt]);
    }

    /*********** Delete ToDo ***********/
    public function DeleteToDo(Todo $id)
    {
        $id->delete();
        return redirect()->route('list');
    }

    /*********** Store ToDo ***********/
    public function StoreToDo(ToDoRequest $request)
    {
        $todo = new Todo();
        $todo->title = $request->title;
        if ($todo->save()) {
            return redirect()->route('list');
        }
        return;
    }

    /*********** Update ToDo ***********/
    public function UpdateToDO($id)
    {
        $id = Todo::query()->where('id', $id)->first();
        return view('List', ["id" => $id]);
    }

    /*********** Edit ToDo ***********/
    public function EditToDo(ToDoRequest $request, $id)
    {
        $stmt = Todo::query()->where('id', $id)->first();
        if ($stmt) {
            $stmt->title = $request->title;
            if ($stmt->save()) {
                return redirect()->route('list');
            }
        }
        return;
    }
    /********************** END **********************/
}
