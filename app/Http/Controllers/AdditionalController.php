<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use App\Models\Product;
use Illuminate\Http\Request;
use Helper;

class AdditionalController extends Controller
{
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
         $additional = Additional::where('additionals.active', '=', '1')
             ->join('products', 'additionals.product_id', '=', 'products.id')
             ->select('additionals.*', 'products.name as product')
             ->get();
         return view('admin/additional/index')
             ->with('additional',$additional);
     }
 
     public function view($id)
     {
         $additional = Additional::where('additionals.id', '=', $id)
             ->join('products', 'additionals.product_id', '=', 'products.id')
             ->select('additionals.*', 'products.name as product')
             ->get();
         return view('admin/additional/view')
             ->with('additional',$additional);
     }
 
     public function add()
     {
         $products = Product::where('active',1)
             ->get();  
         return view('admin/additional/add')
             ->with('products',$products);
     }
 
     public function store(Request $request)
     {
        $additional= new Additional;
        $additional->name=$request->get('name_additional');
        $additional->product_id=$request->get('product');
        $additional->value=$request->get('value');
         if($additional->save()){
             return redirect('/admin/additional/list')
                 ->with('status', 'Informações Salva')
                 ->with('btn', 'success');
         }else{
             return redirect('/admin/additional/list')
                 ->with('status', 'Erro ao salvar')
                 ->with('btn', 'danger');
         }
     }
 
     public function edit($id)
     {
         $additional = Additional::where('additionals.id', '=', $id)
             ->join('products', 'additionals.product_id', '=', 'products.id')
             ->select('additionals.*', 'products.name as product')
             ->get();
         $products = Additional::where('active',1)
             ->get();
         return view('admin/additional/edit')
             ->with('additional',$additional)
             ->with('products',$products)
             ->with('id',$id);
     }
 
     public function update(Request $request)
     {
         $additional= Additional::find($request->get('id'));
         $additional->name=$request->get('name_additional');
         $additional->value=$request->get('value');
         $additional->product_id=$request->get('product');
         if($additional->save()){
             return redirect('/admin/additional/list')
                 ->with('status', 'Informações atualizada')
                 ->with('btn', 'success');
         }else{
             return redirect('/admin/additional/list')
                 ->with('status', 'Erro ao atualizar')
                 ->with('btn', 'danger');
         } 
     }
 
     public function destroy($id)
     {
         $additional = Additional::find($id);
         $additional->active = 0;
         if($additional->save()){
             return redirect('/admin/additional/list')
                 ->with('status', 'Adicional apagado')
                 ->with('btn', 'success');
         }else{
             return redirect('/admin/additional/list')
                 ->with('status', 'Erro ao apagar')
                 ->with('btn', 'danger');
         } 
     }
}
