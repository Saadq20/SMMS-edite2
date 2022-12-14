<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       return view('home');
    }
  
    public function login() {

        return view('login');
    }

    public function signup() {

        return view('signup');
    }
   
}
 