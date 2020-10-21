<?php

namespace App\Http\Controllers\Testing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extend Controller
{
	public function create()
	{
         return view('test.create');
	}

	public function store(Request $request)
	{
		//validate and store the blog
		$validatedData = $request->validateWithBag('post',[
			'title' => ['requierd','unique:posts','max:255'],
			'body' => ['required'],
		]);
	}
}

