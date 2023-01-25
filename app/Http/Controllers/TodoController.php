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
    public function create()
    {
        return view('create');
    }
    public function store(TodoRequest $request)
    {
        $form = $request->all();
        $form->save();
        return redirect('/');
    }
}
