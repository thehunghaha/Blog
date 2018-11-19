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

}
