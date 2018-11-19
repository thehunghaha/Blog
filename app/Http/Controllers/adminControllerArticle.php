<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
