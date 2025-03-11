<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Helper;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        Helper::global_variables();
    } 
    
    /**
     * Show the application dashboard.
     *  
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome/index');  
    }

}
