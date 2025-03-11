<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\Type;
use App\Models\Product;
use App\Models\Additional;
use App\Models\Cashier;
use App\Models\Order;
use App\Models\Order_product;
use App\Models\Order_product_additional;
use App\Models\Client;
use App\Models\internal_configuration;
use App\Models\Coupon;
use App\Models\Spun;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TableRestaurantController extends Controller
{
    public function __construct()
    {
        Helper::global_variables();        
    }

    public function index()
    {
        $status = Cashier::where('active',1)->where('status',1)->count();
        if($status == 0){
            return redirect('/admin/cashier');
        }
        $order = Order::where('open', 1)->where('active',1)->get()->toArray();
        $desks = [];
        for ($i = 0; $i < 30; $i++){
            $arrayFiltrado = array_filter($order, function ($item) use ($i) {
                return $item['desk'] == $i+1;
            });
            if(count($arrayFiltrado)>0){
                $item = reset($arrayFiltrado); // Pega o primeiro item do array
                array_push($desks, array('desk' => $i, 'open' => $item['open'], 'order' => $item['id']));
            }else{
                array_push($desks, array('desk' => $i, 'open' => 0));
            }
        }
        return view('admin/tables_restaurant/index')
            ->with('desks', $desks);
    }


    public function order(Request $request)
    {
        if($request->order == null){
            if($request->name == null){
                $name_customer = 'Sem Nome';
            }else{
                $name_customer = $request->name;
            }
            $desk = $request->desk;
            $id_user = Auth::user()->id;
            $cashierd= Cashier::where('status',1)
                ->select('start')
                ->get();
            $key = Order::where('active',1)
                ->where('created_at', '>=', $cashierd[0]->start )
                ->count();
            $key = $key + 1;
            $orders = new Order([
                'name_customer' => $name_customer,
                'id_user' => $id_user,
                'delivery' => 0,
                'form_of_payment' => 0,
                'amount' => 0,
                'desk' => $desk,
                'client_id' => null,
                'key' => $key,
            ]);
            $orders->save();
            $orders = Order::where('id_user', Auth::user()->id)->orderBy('id', 'desc')->first();

        }else{
            $orders = Order::where('id', $request->order)->first();
        }
        
        $types = Type::all();
        return view('admin.tables_restaurant.order', compact('types', 'orders'));
        
        
    }
    
    public function payment(Request $request)
    {
        
        //$order = Order::with('orderproducts')->findOrFail($request->order_id);
        $order = Order::with('orderProducts.product')->with('orderProducts.orderproductsadditionals.additional')->find($request->order_id);
        $value = floatval($order->amount);
        $command_title = internal_configuration::where('key','command_title')
            ->select('value')
            ->first();
        $credit_interest = internal_configuration::where('key','credit_interest')
            ->select('value')
            ->first();
        $debt_interest = internal_configuration::where('key','debt_interest')
            ->select('value')
            ->first();
        $paid_interest = internal_configuration::where('key','paid_interest')
            ->select('value')
            ->first();
        $money_interest = internal_configuration::where('key','money_interest')
            ->select('value')
            ->first();
        $pix_interest = internal_configuration::where('key','pix_interest')
            ->select('value')
            ->first();
        $value_money = ($value + ($value / 100) * $money_interest->value);
        $value_paid = ($value + ($value / 100) * $paid_interest->value);
        $value_debt = ($value + ($value / 100) * $debt_interest->value);
        $value_credit = ($value + ($value / 100) * $credit_interest->value);
        $value_pix = ($value + ($value / 100) * $pix_interest->value);
        return view('admin.tables_restaurant.payment')
            ->with('value_money',$value_money)
            ->with('value_paid',$value_paid)
            ->with('value_debt',$value_debt)
            ->with('value_credit',$value_credit)
            ->with('value_pix', $value_pix)
            ->with('money_interest',$money_interest->value)
            ->with('paid_interest',$paid_interest->value)
            ->with('debt_interest',$debt_interest->value)
            ->with('credit_interest',$credit_interest->value)
            ->with('pix_interest', $pix_interest->value)
            ->with('command_title', $command_title->value)
            ->with('order', $order);
    }

    public function print(Request $request)
    {
        $internal_settings['title'] = internal_configuration::where('key','command_title')
            ->select('value')
            ->first();
        $internal_settings['footer'] = internal_configuration::where('key','command_footer')
            ->select('value')
            ->first();
        $internal_settings['coil_size'] = internal_configuration::where('key','coil_size')
            ->select('value')
            ->first();
        $desk = $request->desk;
        $cashierd= Cashier::where('status',1)
            ->select('start')
            ->get();
        $keys = Order::where('active',1)
            ->where('delivery',0)
            ->where('delivered',0)
            ->where('created_at', '>=', $cashierd[0]->start )
            ->get();
        $key = Order::where('active',1)
            ->where('created_at', '>=', $cashierd[0]->start )
            ->count();
        $key = $key + 1;
        $products = Product::where('active',1)
            ->get();
        $additional = Additional::where('active',1)
            ->get();
        $list = $request->get('list');
        $result = count($list);
        $result_products = count($products);
        $result_additional = count($additional);
        $sum = 0;
        $aux = -1;
        $client_id = $request->get('client');
        #==================================================================
        #Logica dos produtos
        for($c = 0; $c < $result; $c++ ){
            $first = $list[$c];
            $first = explode(",",$first);
            for($i = 0; $i < $result_products; $i++){
                $aux = $aux + 1;
                if($products[$i]->id == $first[0]){
                    $order_list[$aux][0] = $products[$i];
                    for($r = 0; $r < $result_additional; $r++){
                        for($e = 1; $e < count($first); $e++){
                            $sum = $sum + 1;
                            if($additional[$r]->id == $first[$e]){
                                $order_list[$aux][$sum] = $additional[$r];
                            }
                        } 
                    }
                }
            }
        }
        $aux = -1;
        #=====================================================================
        $order = Order::find($request->get('order_id'));
        $order->amount = $order->amount+$request->get('value');        
        if(!$order->save()){
            return "Erro ao gerar pedido";
        }
        if($request->get('form_of_payment') == 3){
            $spun = new Spun([
                'client_id' => $request->get('client'),
                'order_id' => $order->id,
                'value' => $request->get('value')
            ]);
            if(!$spun->save()){
                return "Erro ao gerar pedido";
            }
        }
        for($i = 0; $i < $result; $i++ ){
            $first =  $list[$i];
            $first = explode(",",$first);
            $order_product = new Order_product([
                'order_id' => $order->id,
                'product_id' => $first[0]
            ]);
            if(!$order_product->save()){
                return "Erro ao gerar pedido";
            }
            $c = -1;
            for($b = 0;$b < count($first); $b++ ){
                $c += 1;
                //dd($c);
                if($c > 0){
                    if($first[$c] !== ""){
                        $order_product_additional = new Order_product_additional([
                            'order_product_id' => $order_product->id,
                            'additional_id' => $first[$c],
                        ]);
                        if(!$order_product_additional->save()){
                            return "Erro ao gerar pedido 158";
                        }      
                    }
                } 
            }
        }
        
        $internal_settings['desk'] = internal_configuration::where('key','desk')
            ->select('value')
            ->first();
        
        #=======================================================
        #logica da comanda
        $internal_settings['credit_interest'] = internal_configuration::where('key','credit_interest')
            ->select('value')
            ->first();
        $internal_settings['debt_interest'] = internal_configuration::where('key','debt_interest')
            ->select('value')
            ->first();
        $internal_settings['paid_interest'] = internal_configuration::where('key','paid_interest')
            ->select('value')
            ->first();
        $internal_settings['money_interest'] = internal_configuration::where('key','money_interest')
            ->select('value')
            ->first();
        $internal_settings['pix_interest'] = internal_configuration::where('key','pix_interest')
            ->select('value')
            ->first();
        if($request->get('form_of_payment') == 0){
            $percentage = $internal_settings['money_interest']->value;
        }else if($request->get('form_of_payment') == 1){
            $percentage = $internal_settings['credit_interest']->value;
        }else if($request->get('form_of_payment') == 2){
            $percentage = $internal_settings['debt_interest']->value;
        }else if($request->get('form_of_payment') == 3){
            $percentage =  $internal_settings['paid_interest']->value;
        }else if($request->get('form_of_payment') == 4){
            $percentage =  $internal_settings['pix_interest']->value;
        }
        if($request->get('value_payment') == null OR $request->get('value_payment') == "undefined"){
            $value_payment = 0;
        }else{
            $value_payment = $request->get('value_payment');
        }
        $sum = floatval($request->get('value'));
        $amount = $sum+($sum/100)*$percentage;
        if($amount > $value_payment){
            $change = 0;
        }else{
            $change = $value_payment - $amount;
        }
        if($request->get('delivery') == 0){
            $delivery = "Não";
        }else{
            $delivery = "Sim";
        }
        if($request->get('trip') == 0){
            $trip = "Não";
        }else{
            $trip = "Sim";
        }
        if($request->get('address') == null OR $request->get('address') == "undefined"){
            $address = " ";
            $number = " ";
        }else{
            $address = $request->get('address');
            if($request->get('number') == null OR $request->get('number') == "undefined"){
                $number = "/";
            }else{
                $number = $request->get('number');
            }
        }
        $internal_settings['logo'] = internal_configuration::where('key','logo')
            ->select('value')
            ->first();
        $internal_settings['footer'] = internal_configuration::where('key','command_footer')
            ->select('value')
            ->first();
        $internal_settings['title'] = internal_configuration::where('key','command_title')
            ->select('value')
            ->first();
        $internal_settings['company_name'] = internal_configuration::where('key','company_name')
            ->select('value')
            ->first(); 
        $coupon = [
            'operator_name' => Auth::user()->name,
            'client_name' => $request->get('name'),
            'purchase_date' => date('d/m/Y'), 
            'purchase_time' => date('h:i:s'),
            'password' => $order->id,
            'sum' => floatval($request->get('value')),
            'percentage' => $percentage,
            'amount' => $amount,
            'value_payment' => $value_payment,
            'change' => $change,
            'address' =>  $address,
            'address_number' => $number,
            'delivery' => $delivery,
            'type' => $request->get('form_of_payment'),
            'trip' => $trip,
            'key' => $key,
            'desk' => $desk,
            'logo' => $internal_settings['logo']->value,
            'footer' => $internal_settings['footer']->value,
            'title' => $internal_settings['title']->value,
        ];
        
        $company_name = $internal_settings['company_name']->value;
        #==================================================
        if($internal_settings['coil_size']->value == 80){
            return view('admin/tables_restaurant/print')
                ->with('keys',$keys)
                ->with('aux',$aux)
                ->with('list',$list)
                ->with('company_name',$company_name)
                ->with('order_list',$order_list)
                ->with('coupon',$coupon);
        }else{
            return view('admin/tables_restaurant/print')
                ->with('keys',$keys)
                ->with('aux',$aux)
                ->with('list',$list)
                ->with('company_name',$company_name)
                ->with('order_list',$order_list)
                ->with('coupon',$coupon);
        }
    }
    public function commands()
    {
        $order = Order::where('active', 1)->where('open', 1)->orderBy('desk', 'asc')->get();
        return view('admin/tables_restaurant.commands', ['desks' => $order]);
    }

    public function finish(Request $request){
        $order = Order::find($request->order);
        $order->open = 0;
        $order->form_of_payment = $request->form_of_payment;
        $order->save();

        $value = floatval($order->amount);
        $internal_settings['logo'] = internal_configuration::where('key','logo')
            ->select('value')
            ->first();
        $internal_settings['footer'] = internal_configuration::where('key','command_footer')
            ->select('value')
            ->first();
        $internal_settings['title'] = internal_configuration::where('key','command_title')
            ->select('value')
            ->first();
        $credit_interest = internal_configuration::where('key','credit_interest')
            ->select('value')
            ->first();
        $debt_interest = internal_configuration::where('key','debt_interest')
            ->select('value')
            ->first();
        $paid_interest = internal_configuration::where('key','paid_interest')
            ->select('value')
            ->first();
        $money_interest = internal_configuration::where('key','money_interest')
            ->select('value')
            ->first();
        $pix_interest = internal_configuration::where('key','pix_interest')
            ->select('value')
            ->first();
        
        if($request->form_of_payment == "0"){
            $percentage = $money_interest->value;
            $amount = ($value + ($value / 100) * $money_interest->value);
        }else if($request->form_of_payment == "1"){
            $percentage = $credit_interest->value;
            $amount = ($value + ($value / 100) * $credit_interest->value);
        }else if($request->form_of_payment == "2"){
            $percentage = $debt_interest->value;
            $amount = ($value + ($value / 100) * $debt_interest->value);
        }else if($request->form_of_payment == "3"){
            $percentage = $paid_interest->value;
            $amount = ($value + ($value / 100) * $paid_interest->value);
        }else if($request->form_of_payment == "4"){
            $percentage = $pix_interest->value;
            $amount = ($value + ($value / 100) * $pix_interest->value);
        }
        if($request->value_paid){
            $change = $request->value_paid;
        }else{
            $change = 0;
        }

        $new_coupon = new Coupon([
            'order_id' => $order->id,
            'operator_name' => Auth::user()->name,
            'client_name' => $order->name_customer,
            'purchase_date' => date('d/m/Y'), 
            'purchase_time' => date('h:i:s'),
            'password' => $order->key,
            'sum' => floatval($amount),
            'percentage' => $percentage,
            'amount' => $value,
            'value_payment' => $amount,
            'change' => $change,
            'address' =>  null,
            'address_number' => null,
            'delivery' => "Não",
            'type' => $request->get('form_of_payment'),
            'trip' => "Não",
            'key' => $order->key,
            'desk' => $order->desk,
            'logo' => $internal_settings['logo']->value,
            'footer' => $internal_settings['footer']->value,
            'title' => $internal_settings['title']->value,
        ]);
        $new_coupon->save();
        return view('admin/tables_restaurant.finish');
    }
}
