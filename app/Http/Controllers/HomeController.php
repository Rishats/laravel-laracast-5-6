<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::emergency('TEST ERROR!');
        return view('home');
         
    }
    
    /**
     * Logout others devices and create new provided password.
     * /logoutOthers/your_new_password
     *
     * @param [string] $password
     * @return redirect()
     */
    public function logoutOthers($password)
    {
        auth()->logoutOtherDevices($password);
        
        return redirect('/');
    }
}
