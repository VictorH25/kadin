<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Helper;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\Cashier;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        Helper::global_variables();
    } 
    public function index()
    {
        $current_time = Carbon::now()->toDateTimeString();
        $order_day = Order::where('active',1)
            ->whereDate('created_at', '=', Carbon::today()->toDateString())->orderBy('id','desc')
            ->sum('amount');
        $order_week = Order::where('active',1)
            ->whereBetween('created_at', [
                Carbon::parse('last sunday')->startOfDay(),
                Carbon::parse('next sunday')->endOfDay(),
            ])
            ->sum('amount');
        $order_month = Order::where('active',1)
            ->whereMonth('created_at',date('m'))
            ->sum('amount');
        $order_delivery = Order::where('active',1)
            ->whereMonth('created_at', date('m'))
            ->where('delivery', 1)
            ->count();
        $order = Order::where('active',1)
            ->get();
        $date = date('d-m-Y H:i');
        $status = Cashier::where('active',1)
            ->orderBy('id','desc')
            ->take(1)
            ->get();
        $salesByMonth = [];
        for ($i = 1; $i <= 12; $i++){
            $salesByMonth[] = Order::whereMonth('created_at', $i)->whereYear('created_at', Carbon::now()->year)->count();
        }
        if(count($status) > 0){
            if($status[0]->status == 1){
                if(Auth::user()->email === "mythevictor4@gmail.com"){
                    return view('admin/index')
                    ->with('date',$date)
                    ->with('order',$order)
                    ->with('order_month',$order_month)
                    ->with('order_week',$order_week)
                    ->with('order_day',$order_day)
                    ->with('salesByMonth',implode(',',array_values($salesByMonth)))
                    ->with('order_delivery',$order_delivery);
                }
                return redirect('/admin');
            }
        }
        return redirect('/admin/cashier');
    }
}
