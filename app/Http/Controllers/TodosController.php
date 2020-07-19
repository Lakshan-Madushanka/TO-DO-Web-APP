<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show(Todo $todo)
    {
        return view('todos.show')->with('todo', $todo /*Todo::find($todoId)*/); // route model binding
    }

    public function create()
    {
        return view('todos.create'); //->with('todo', Todo::find($todoId));
    }

    public function validation()
    {

        $this->validate(request(), [
            'name' => 'required|min:6|max:15',
            'description' => 'required'
        ]);
    }

    public function store()
    {
        //return view('todos.create'); //->with('todo', Todo::find($todoId));
        //dd(request());
        $this->validation();

        $data = request()->all();

        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        session()->flash('success', 'Task Created Successfully!');

        return view('todos.index');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit')->with('todo', $todo /*Todo::find($todoId)*/); // route model binding
    }

    public function update(Todo $todo)
    {
        $this->validation();
        $data = request()->all();

        //$todo = Todo::find($todoId); // route model binding

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        session()->flash('success', 'Task Updated Successfully!');
        return redirect('/');
    }

    public function delete(Todo $todo) {

        //$todo = Todo::find($todoID); // route model binding
        $todo->delete();
        session()->flash('success', 'Task Deleted successfully !');
        return redirect('/');
    }

    public function complete(Todo $todo)
    {

        //$todo = Todo::find($todoId); // route model binding

        $todo->completed = true;
        $todo->save();

        session()->flash('success', 'Task Completed Successfully!');
        return redirect('/');
    }
}
