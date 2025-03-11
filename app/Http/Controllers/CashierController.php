<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Helper;
use App\Models\Cashier;

class CashierController extends Controller
{
    public function __construct()
    {
        Helper::global_variables();
    } 

    public function index()
    {
        $status = Cashier::where('active',1)
            ->orderBy('id','desc')
            ->take(1)
            ->get();
        return view('admin/cashier/index')
            ->with('status', $status);
    }

    public function openCashier()
    {
        $status = 1;
        $cashier= new Cashier;
        $cashier->status=$status;
        $cashier->start=date('Y-m-d H:i:s');
        $cashier->save();
        return redirect()
            ->to('admin/cashier')
            ->with('status', $status);
    }

    public function closeCashier(){
        $cashier= Cashier::where('status',1)->get();
        $cashier = Cashier::find($cashier[0]->id);
        $status = 0;
        $cashier->last=date('Y-m-d H:i:s');
        $cashier->status = $status;
        $cashier->save();
        return redirect()
            ->to('admin/cashier')
            ->with('status', $status);
    }
}
