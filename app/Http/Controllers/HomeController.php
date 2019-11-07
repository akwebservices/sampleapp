<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show all users.
     */
    public function users()
    {
        $users = DB::table('users')->select('id', 'name', 'email', 'created_at')->get();

        return view('users', compact('users'));
    }

    /**
     * Show a single users.
     */
    public function user(Request $request)
    {
        $name = $request->input('name');
        
        $user = DB::table('users')->select('id', 'name', 'email', 'created_at')->where('name', 'like', $name)->first();
        
        return view('user', compact('user', 'name'));
    }
}
