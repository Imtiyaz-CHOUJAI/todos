<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Return list of todos
     *
     * @return mixed
     */
    public function index()
    {
        // List all todos
        $todos = Todo::all();

        return view('welcome', compact('todos'));
    }

    /**
     * Store new todo
     *
     * @return void
     */
    public function store()
    {
        //
    }
}
