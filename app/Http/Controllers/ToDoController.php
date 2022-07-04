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
        $stmt = Todo::getAll();
        return view('List', ['todo' => $stmt]);
    }

    
    /*********** Show ToDo ***********/
    public function ShowToDo($id)
    {
        $stmt = Todo::getID($id);
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
        $id = Todo::getID($id);
        return view('List', ["id" => $id]);
    }


    /*********** Edit ToDo ***********/
    public function EditToDo(ToDoRequest $request, $id)
    {
        $stmt = Todo::getID($id);
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
