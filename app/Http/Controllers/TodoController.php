<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = DB::table('todos')->orderByDesc('created_at')->paginate(5);

        return view('todo.todo')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'text' => 'required',
                'body' => 'required',
                'due' => 'required'
            ]
        );

        $todo = new Todo;

        $todo->text = $request->input('text');
        $todo->body = $request->input('body');
        $todo->due = $request->input('due');

        $todo->save();

        return redirect('/todo')->with('success', 'Todo created');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todo.show')->with('todo', $todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::find($id);

        return view('todo.edit')->with('todo', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Gate::allows('edit-todo')) {
            $todo = Todo::find($id);
            $todo->text = $request->input('text');
            $todo->body = $request->input('body');
            $todo->due = $request->input('due');

            $todo->save();
        } else {
            return redirect('/todo')->with('success', 'У вас нет прав совершать данное действие');
        }

        return redirect('/todo')->with('success', 'Todo updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect('/todo')->with('success', 'Todo deleted');
    }
}
