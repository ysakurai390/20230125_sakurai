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
        Todo::save($form);
        return redirect('/');
    }
}
