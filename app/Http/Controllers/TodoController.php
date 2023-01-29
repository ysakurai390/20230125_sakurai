<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $todos = todo::all();
        return view('index', compact('todos'));
    }
    
    public function store(TodoRequest $request)
    {
        $form = new todo();
        $form = $request->all();
        unset($form['_token']);
        Todo::create($form);
        return redirect('/');
    }
    public function update(TodoRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        //Todo::where('id', $request->id)->update($form);
        Todo::find($request->id)->update($form);
        return redirect('/');
    }

    public function destroy(Request $request)
    {
        $form = Todo::find($request->id);
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
