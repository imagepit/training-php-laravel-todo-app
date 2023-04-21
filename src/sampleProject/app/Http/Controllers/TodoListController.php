<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoListController extends Controller
{
    public function index(Request $request)
    {
        $todo_lists = TodoList::all();
        return view('todo_list.index', ['todo_lists' => $todo_lists]);
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        //モデルをインスタンス化
        $todo = new TodoList;
        //モデル->カラム名 = 値 で、データを割り当てる
        $todo->name = $request->input('name');
        //データベースに保存
        $todo->save();
        //リダイレクト
        return redirect('/list');
    }
}
