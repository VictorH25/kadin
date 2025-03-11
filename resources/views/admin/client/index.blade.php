@extends('adminlte::page')

@section('title', 'Listar Clientes')

@section('content_header')
    <h1>Listar Clientes</h1>
@stop

@section('content')
    <div class="card-body">
      @if (session('status'))
          <div class="alert alert-{{ session('btn') }}">
              {{ session('status') }}
          </div>
      @endif
      <div class="row">
          <div class="col">
          </div>
          <div class="col">
              <a class="btn btn-success" style="float:right; color:white;" href="/admin/client/add/"><i class="fa fa-plus"></i> Adicionar Cliente</a>
          </div>
      </div>
      <br/>
      <table class="table table-hover">
          <thead class="thead-dark">
              <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Telefone</th>
              <th scope="col">Rua</th>
              <th scope="col">Valor limite</th>
              <th scope="col">Ações</th>
              </tr>
          </thead>
          <tbody>
          @foreach ($customers as $obj)
              <tr>
              <th scope="row">{{$obj->id}}</th>
              <td>{{$obj->name}}</td>
              <td>{{$obj->telephone}}</td>
              <td>{{$obj->street}}, {{$obj->number}}</td>
              <td>R$: {{$obj->limit_credit}}</td>
              <td><form action="{{ route('client.destroy',$obj->id) }}" method="POST" style="" class="form-inline">
                  <a class="btn btn-primary" style="color:white; margin-right:10px;" href="/admin/client/view/{{$obj->id}}">Visualizar</a>
                  <a class="btn btn-warning" style="color:white; margin-right:10px;" href="/admin/client/edit/{{$obj->id}}">Editar</a>
                  <a class="btn btn-info" style="color:white; margin-right:10px;" href="/admin/client/spun/{{$obj->id}}">Conta</a>
                  
                      @csrf
                      @method('PUT')
                      <button type="submit" class="btn btn-danger">Apagar</button>
                  </form>
              </td>
              </tr>
              <tr>
          @endforeach
          </tbody>
      </table>
      </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
