<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Helper;

class PasswordController extends Controller
{
    public function __construct()
    {
        Helper::global_variables();
    } 

    public function index()
    {

        return view('admin/password/index');    
    }

    public function getpassword(){
        $password = Order::where('active',1)
            ->where('delivered',1)
            ->select('id','key','name_customer')
            ->orderByRaw('updated_at DESC')
            ->limit(4)
            ->get();
        return response()->json([$password]);
    }
}
