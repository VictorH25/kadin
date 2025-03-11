<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Helper;
use App\Models\Product;
use App\Models\Additional;
use App\Models\Type;

class ProductController extends Controller
{
    public function __construct()
    {
        Helper::global_variables();
    } 

    public function index()
    {
        $products = Product::where('products.active', '=', '1')
            ->join('types', 'products.type_id', '=', 'types.id')
            ->select('products.*', 'types.name as type')
            ->get();      
            
        return view('admin/products/index')
            ->with('products',$products);

        return response()->json([$products]);
    }

    public function indexApi()
    {
        $products = Product::where('products.active', '=', '1')
            ->join('types', 'products.type_id', '=', 'types.id')
            ->select('products.*', 'types.name as type')
            ->get();     

        $type = Type::where('active',1)
            ->get();    
            
        return response()->json([
            'categories' => $type,
            'products' => $products,
        ]);
    }

    public function view($id)
    {
        $product = Product::where('products.id', '=', $id)
            ->join('types', 'products.type_id', '=', 'types.id')
            ->select('products.*', 'types.name as types')
            ->get();
        return view('admin/products/view')
            ->with('product',$product);
    }

    public function add()
    {
        $type = Type::where('active',1)
            ->get();       
        return view('admin/products/add')
            ->with('type',$type);
    }

    public function store(Request $request)
    {
        $product= new Product;
        $product->name=$request->get('name_product');
        $product->ingredients=$request->get('ingredients');
        $product->value=$request->get('value');
        $product->type_id=$request->get('type');
        if($product->save()){
            return redirect('/admin/product/list')
                ->with('status', 'Informações Salva')
                ->with('btn', 'success');
       }else{
            return redirect('/admin/products/list')
                ->with('status', 'Erro ao salvar')
                ->with('btn', 'danger');
       }
    }

    public function edit($id)
    {
        $product = Product::where('products.id', '=', $id)
            ->join('types', 'products.type_id', '=', 'types.id')
            ->select('products.*', 'types.name as types')
            ->get();
        $type = Type::where('active',1)
            ->get();
        return view('admin/products/edit')
            ->with('id',$id)
            ->with('type',$type)
            ->with('product',$product);
    }

    public function update(Request $request)
    {
        $product= Product::find($request->get('id'));
        $product->name=$request->get('name_product');
        $product->ingredients=$request->get('ingredients');
        $product->value=$request->get('value');
        $product->type_id=$request->get('type');
        if($product->save()){
            return redirect('/admin/product/list')
                ->with('status', 'Informações atualizada')
                ->with('btn', 'success');
        }else{
            return redirect('/admin/products/list')
                ->with('status', 'Erro ao atualizar')
                ->with('btn', 'danger');
        } 
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if($product->delete()){
            return redirect('/admin/product/list')
                ->with('status', 'Produto apagado')
                ->with('btn', 'success');
        }else{
            return redirect('/admin/products/list')
                ->with('status', 'Erro ao apagar')
                ->with('btn', 'danger');
        } 
    }

    public function getProducts($category_id){
        $p = [];
        $products = Product::where(['active'=>1,'type_id'=>$category_id])
            ->orderBy('name')->get();
        if(empty($products)){
            return response()->json([null]);
        }
        $i= 0;
        foreach($products as $key){
            $p[$i] = ['id'=>$key->id,'name'=>$key->name];
            $i++;
        }
        return response()->json([$p]);
    }

    
    public function getAdditional($category_id){
        $c = [];
        $additional = Additional::where(['active'=>1,'type_id'=>$category_id])
            ->orderBy('name')
            ->get();
        if(empty($additional)){
            return response()->json([null]);
        }
        $i= 0;
        foreach($additional as $key){
            $c[$i] = ['id'=>$key->id,'name'=>$key->name];
            $i++;
        }
        return response()->json([$c]);
    }
}
