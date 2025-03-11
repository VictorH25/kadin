<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Helper;
use App\Models\Type;
use App\Models\Cashier;
use App\Models\Order;
use App\Models\Order_product;
use App\Models\Order_product_additional;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    public function __construct()
    {
        Helper::global_variables();
    } 

    public function index()
    {      
        $dates = Cashier::where('active',1)
            ->where('status',0)
            ->orderByRaw('created_at DESC')
            ->get();
        $order_day = Order::where('active',1)
            ->whereDate('created_at', '=', Carbon::today()->toDateString())->orderBy('id','desc')
            ->paginate(100);
        $order_week = Order::where('active',1)
            ->whereBetween('created_at', [
                Carbon::parse('last sunday')->startOfDay(),
                Carbon::parse('next saturday')->endOfDay(),
            ])
            ->orderBy('id','desc')
            ->paginate(100);
        $order_month = Order::where('active',1)
            ->whereMonth('created_at', date('m'))
            ->orderBy('id','desc')
            ->paginate(100);
        $order_product = Order_product::where('active',1)
            ->get();
        $order_product_additional = Order_product_additional::where('active',1)
            ->get();
        if(Auth::user()->email === "mythevictor4@gmail.com"){
            return view('admin/sales/index')
            ->with('order_week',$order_week)
            ->with('order_month',$order_month)
            ->with('order_day',$order_day)
            ->with('order_product',$order_product)
            ->with('order_product_additional', $order_product_additional)
            ->with('dates', $dates);
        }
        return redirect('/admin/tables_restaurant');
    }

    public function printDay(){     
        $report_name = "RELATORIO DE VENDAS DIARIA";
        $avista = Order::where('active',1)
            ->where('form_of_payment',0)
            ->whereDate('created_at', '=', Carbon::today()->toDateString())
            ->sum('amount');
        $total_day = Order::where('active',1)
            ->whereDate('created_at', '=', Carbon::today()->toDateString())
            ->sum('amount'); 
        $c_credito = Order::where('active',1)
            ->where('form_of_payment',1)
            ->whereDate('created_at', '=', Carbon::today()->toDateString())
            ->sum('amount');
        $c_debito = Order::where('active',1)
            ->where('form_of_payment',2)
            ->whereDate('created_at', '=', Carbon::today()->toDateString())
            ->sum('amount');
        $crediario = Order::where('active',1)
            ->where('form_of_payment',3)
            ->whereDate('created_at', '=', Carbon::today()->toDateString())
            ->sum('amount');
         $pix = Order::where('active',1)
            ->where('form_of_payment',4)
            ->whereDate('created_at', '=', Carbon::today()->toDateString())
            ->sum('amount');
        $order = Order::where('active',1)
            ->whereDate('created_at', '=', Carbon::today()->toDateString())
            ->get();
        return view('admin/sales/selectlist')
            ->with('total_day',$total_day)
            ->with('c_credito',$c_credito)
            ->with('c_debito',$c_debito)
            ->with('avista',$avista)
            ->with('pix',$pix)
            ->with('crediario',$crediario)
            ->with('order',$order)
            ->with('report_name',$report_name);       
    }

    public function printWeek(){
        $report_name = "RELATORIO DE VENDAS SEMANAIS";     

        $total_day = Order::where('active',1)
            ->whereBetween('created_at', [
                Carbon::parse('last sunday')->startOfDay(),
                Carbon::parse('next saturday')->endOfDay(),
            ])
            ->sum('amount'); 
        $c_credito = Order::where('active',1)
            ->where('form_of_payment',1)
            ->whereBetween('created_at', [
                Carbon::parse('last sunday')->startOfDay(),
                Carbon::parse('next saturday')->endOfDay(),
            ])->sum('amount');
        $c_debito = Order::where('active',1)
            ->where('form_of_payment',2)
            ->whereBetween('created_at', [
                Carbon::parse('last sunday')->startOfDay(),
                Carbon::parse('next saturday')->endOfDay(),
            ])->sum('amount');
        $avista = Order::where('active',1)
            ->where('form_of_payment',0)
            ->whereBetween('created_at', [
                Carbon::parse('last sunday')->startOfDay(),
                Carbon::parse('next saturday')->endOfDay(),
            ])->sum('amount');
        $crediario = Order::where('active',1)
            ->where('form_of_payment',3)
            ->whereBetween('created_at', [
                Carbon::parse('last sunday')->startOfDay(),
                Carbon::parse('next saturday')->endOfDay(),
            ])->sum('amount');
        $pix = Order::where('active',1)
            ->where('form_of_payment',4)
            ->whereBetween('created_at', [
                Carbon::parse('last sunday')->startOfDay(),
                Carbon::parse('next saturday')->endOfDay(),
            ])->sum('amount');
        $order = Order::where('active',1)
            ->whereBetween('created_at', [
                Carbon::parse('last sunday')->startOfDay(),
                Carbon::parse('next saturday')->endOfDay(),
            ])
            ->get();
        return view('admin/sales/selectlist')
            ->with('total_day',$total_day)
            ->with('c_credito',$c_credito)
            ->with('c_debito',$c_debito)
            ->with('avista',$avista)
            ->with('pix',$pix)
            ->with('crediario',$crediario)
            ->with('order',$order)
            ->with('report_name',$report_name);
    }

    public function printMonth(){
        $report_name = "RELATORIO DE VENDAS MENSAIS";
        $total_day = Order::where('active',1)
            ->whereMonth('created_at', date('m'))
            ->sum('amount'); 
        $c_credito = Order::where('active',1)
            ->where('form_of_payment',1)
            ->whereMonth('created_at', date('m'))
            ->sum('amount');
        $c_debito = Order::where('active',1)
            ->where('form_of_payment',2)
            ->whereMonth('created_at', date('m'))
            ->sum('amount');
        $avista = Order::where('active',1)
            ->where('form_of_payment',0)
            ->whereMonth('created_at', date('m'))
            ->sum('amount');
        $crediario = Order::where('active',1)
            ->where('form_of_payment',3)
            ->whereMonth('created_at', date('m'))
            ->sum('amount');
        $pix = Order::where('active',1)
            ->where('form_of_payment',4)
            ->whereMonth('created_at', date('m'))
            ->sum('amount');
        $order = Order::where('active',1)
            ->whereMonth('created_at', date('m'))
            ->get();

        return view('admin/sales/selectlist')
            ->with('total_day',$total_day)
            ->with('c_credito',$c_credito)
            ->with('c_debito',$c_debito)
            ->with('avista',$avista)
            ->with('pix',$pix)
            ->with('crediario',$crediario)
            ->with('order',$order)
            ->with('report_name',$report_name);
    }

   
    public function destroy($id)
    {
        $order= Order::find($id);
        $order->active = 0;
        if($order->save()){
            return redirect('/admin/sales')
                ->with('status', 'Informações atualizada')
                ->with('btn', 'success');
        }else{
            return redirect('/admin/sales')
                ->with('status', 'Erro ao apagar')
                ->with('btn', 'danger');
        } 
    }

    public function list(Request $request){
        $report_name = "RELATORIO DE VENDAS POR COMANDA";
        $id = $request->get('id');
        $dates = Cashier::where('active',1)
            ->where('id',$id)
            ->get(); 
        $total_day = Order::where('active',1)
            ->where('created_at', '>=', $dates[0]->start)
            ->where('created_at', '<=', $dates[0]->last)
            ->sum('amount'); 

        $c_credito = Order::where('active',1)
            ->where('form_of_payment',1)
            ->where('created_at', '>=', $dates[0]->start)
            ->where('created_at', '<=', $dates[0]->last)
            ->sum('amount');
        $c_debito = Order::where('active',1)
            ->where('form_of_payment',2)
            ->where('created_at', '>=', $dates[0]->start)
            ->where('created_at', '<=', $dates[0]->last)
            ->sum('amount');
        $avista = Order::where('active',1)
            ->where('form_of_payment',0)
            ->where('created_at', '>=', $dates[0]->start)
            ->where('created_at', '<=', $dates[0]->last)
            ->sum('amount');
        $crediario = Order::where('active',1)
            ->where('form_of_payment',3)
            ->where('created_at', '>=', $dates[0]->start)
            ->where('created_at', '<=', $dates[0]->last)
            ->sum('amount');
        $pix = Order::where('active',1)
            ->where('form_of_payment',4)
            ->where('created_at', '>=', $dates[0]->start)
            ->where('created_at', '<=', $dates[0]->last)
            ->sum('amount');
        $order = Order::where('active',1)
            ->where('created_at', '>=', $dates[0]->start)
            ->where('created_at', '<=', $dates[0]->last)
            ->get();
        return view('admin/sales/selectlist')
            ->with('total_day',$total_day)
            ->with('c_credito',$c_credito)
            ->with('c_debito',$c_debito)
            ->with('avista',$avista)
            ->with('pix',$pix)
            ->with('crediario',$crediario)
            ->with('order',$order)
            ->with('report_name',$report_name);
    }

}
