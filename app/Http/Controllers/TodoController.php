<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function  index()
    {
    	//select all table todos data
    	$todos = Todo::all();

        // dump all property
    	//dd($todos);

    	return view('todo.index', [
    		'todos' => $todos
    	]);
    }

    public function update(Request $request)
    {
    	/*
    	$todo = new Todo();
    	$todo->name = $request->name;
    	$todo->save();
		*/
		/*
    	$todo = Todo:: create([
    		'name' => $request->name;
    	])
    	*/
    	$todo = Todo::create($request->all());
    	return redirect('/todo');
    }

    public function  destroy(Request $request, $id)
    {
        DB::table('todos')->where('id', '=', $id)->delete();

    	return redirect('/todo');
    }
}
