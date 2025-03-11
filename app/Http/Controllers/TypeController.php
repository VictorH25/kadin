<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use Helper;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    public function __construct()
    {
        Helper::global_variables();
    } 
    public function index()
    {
        $type = Type::where('active',1)->get();
        return view('admin/types/index')
            ->with('type',$type);
    }
    
    public function view($id)
    {    
        $type = Type::where('id', '=', $id)->get();
        return view('admin/types/view')
            ->with('type',$type);
    }
    
    public function add()
    {      
        return view('admin/types/add');
    }
    
    public function store(Request $request)
    {
        $type = new Type;
        $type->name=$request
            ->get('name_type');
        if($type->save()){
            return redirect('/admin/type/list')
                ->with('status', 'Informações Salva')
                ->with('btn', 'success');
        }else{
            return redirect('/admin/type/list')
                ->with('status', 'Erro ao salvar')
                ->with('btn', 'danger');
        }
    }
    
    public function edit($id)
    {    
        $type = Type::where('id',$id)
            ->where('active',1)
            ->get();
        return view('admin/types/edit')
            ->with('type',$type);
    }
    
    public function update(Request $request)
    {
        $type= Type::find($request->get('id'));
        $type->name=$request->get('name_type');
        if($type->save()){
            return redirect('/admin/type/list')
                ->with('status', 'Informações atualizada')
                ->with('btn', 'success');
        }else{
            return redirect('/admin/type/list')
                ->with('status', 'Erro ao atualizar')
                ->with('btn', 'danger');
        } 
    }
    
    public function destroy($id)
    {
        $type = Type::find($id);
        if($type->delete()){
            return redirect('/admin/type/list')
                ->with('status', 'Tipo apagado')
                ->with('btn', 'success');
        }else{
            return redirect('/admin/type/list')
                ->with('status', 'Erro ao apagar')
                ->with('btn', 'danger');
        } 
    }
}
