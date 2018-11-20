<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\article;

class adminControllerArticle extends Controller
{
    //

	public function list_post()
	{
		return view('Admin.post._list_post');
	}

	public function add()
	{
		return view('Admin.post._add_post');
	}

	public function store(Request $request)
	{
		
		return redirect()->route('article.list_post');
	}


}
