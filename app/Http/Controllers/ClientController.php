<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        DB::table('users')->insert(
    	['email' => 'john@example.com', 'votes' => 0]
		);
    }

    public function news()
    {
    	//return('PAGE ON CONSTRUCTION !!!');
    	return view('news');
    }

    public function register()
    {
    	return view('register');
    }

    public function login()
    {
        return view('login');
    }
}
