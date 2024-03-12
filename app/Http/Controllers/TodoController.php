<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Todo::latest('id')->limit(10)->get();
        return Inertia::render('Todo/Index', [
            'data' => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'task' => ['required', 'unique:todos,task']
        ]);

        Todo::create($data);

        return to_route('todo.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        $status = $todo->status == 'done' ? 'pending' : 'done';
        $todo->update(['status' => $status]);
        return to_route('todo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return to_route('todo.index');
    }
}
