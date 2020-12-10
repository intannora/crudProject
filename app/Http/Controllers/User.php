<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class User extends Controller
{
    
	public function index(){

		$users = Http::get("https://gorest.co.in/public-api/users");
		//return view('index', ['users' => $users['data']]);
		print_r($users->header('Content-Type', 'text/plain'));

	}

}
