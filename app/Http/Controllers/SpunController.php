<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Helper;
use App\Models\Client;
use App\Models\Spun;

class SpunController extends Controller
{
    public function __construct()
    {
        Helper::global_variables();
    } 
    public function index($id)
    {
        $s = 0;
        $client = Client::where('active',1)
            ->where('id',$id)
            ->get();
        $spun = Spun::where('active',1)
            ->where('client_id',$id)
            ->orderByDesc('created_at')
            ->get();
        $total = 0;
        foreach($spun as $obj){
            $total = $obj->value + $total;
        }
        
        return view('admin/spun/historic')
            ->with('client', $client)
            ->with('spun', $spun)
            ->with('s', $s)
            ->with('total', $total);    
    }

    public function add($id)
    {
        return view('admin/spun/new')
            ->with('id', $id);
    }

    public function print(Request $request, $id, $spun)
    {
        $spun = Spun::where('active',1)
            ->where('id',$spun)
            ->get();
        $client = Client::where('active',1)
            ->where('id',$id)
            ->get();
        $coupon = [];
        $coupon['logo'] = '/img/logo_principal.png';
        $coupon['client_name'] = $client['0']->name;
        $coupon['purchase_date'] = date('d/m/Y'); 
        $coupon['purchase_time'] = date('h:i:s');
        $coupon['value'] = abs($spun['0']->value);
        return view('admin/spun/print')
            ->with('id', $id)
            ->with('coupon', $coupon);
    }

    public function store($id, Request $request)
    {
        $spun = new Spun;
        $spun->client_id=$request->get('client_id');
        $spun->value=-abs($request->get('value'));
        if($spun->save()){
            return redirect()->route('spun.print', ['id' => $id, 'spun' => $spun->id]);
       }else{
            return redirect('/admin/products/list')
                ->with('status', 'Erro ao salvar')
                ->with('btn', 'danger');
       }
    }
}
