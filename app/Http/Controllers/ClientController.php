<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Helper;

class ClientController extends Controller
{
    public function __construct()
    {
        Helper::global_variables();
    } 

    public function index()
    {        
        $customers = Client::where('active',1)
            ->get();
        return view('admin/client/index')
            ->with('customers',$customers);
    }

    public function create()
    {
        return view('admin/client/create');
    }

    public function view($id)
    {
        $client = Client::where('active',1)
            ->where('id',$id)
            ->get();
        return view('admin/client/view')
            ->with('client', $client);    
    }

    public function edit($id)
    {
        $client =  Client::where('active',1)
            ->where('id',$id)
            ->get();
        return view('admin/client/edit')
            ->with('client', $client);    
    }

    public function store(Request $request)
    {
        $client= new Client;
        $client->name=$request->get('name_client');
        $client->telephone=$request->get('tel');
        $client->street=$request->get('street');
        $client->number=$request->get('number');
        $client->limit_credit=$request->get('limit_credit');
        if($client->save()){
            return redirect('/admin/client/')
                ->with('status', 'Informações Salva')
                ->with('btn', 'success');
        }else{
            return redirect('/admin/client/')
                ->with('status', 'Erro ao salvar')
                ->with('btn', 'danger');
        }
    }

    public function update(Request $request)
    {
        $client= Client::find($request->get('id'));
        $client->name=$request->get('name_client');
        $client->telephone=$request->get('tel');
        $client->street=$request->get('street');
        $client->number=$request->get('number');
        $client->limit_credit=$request->get('limit_credit');
        if($client->save()){
            return redirect('/admin/client/')
                ->with('status', 'Informações atualizada')
                ->with('btn', 'success');
        }else{
            return redirect('/admin/client/')
                ->with('status', 'Erro ao atualizar')
                ->with('btn', 'danger');
        } 
    }

    public function destroy($id)
    {
        $client= Client::find($id);
        $client->active=0;
        if($client->save()){
            return redirect('/admin/client/')
                ->with('status', 'Cliente apagado')
                ->with('btn', 'success');
        }else{
            return redirect('/admin/client/')
                ->with('status', 'Erro ao Apagar')
                ->with('btn', 'danger');
        }
    }

    public function increase_credit_limit()
    {
        //Parte para aumento do salario
    }
}
