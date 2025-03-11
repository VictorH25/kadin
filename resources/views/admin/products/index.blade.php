@extends('adminlte::page')

@section('title', 'Listar Produtos')

@section('content_header')
    <h1>Listar Produtos</h1>
@stop

@section('content')
<div>
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
              <a class="btn btn-success" style="float:right; color:white;" href="/admin/product/add/"><i class="fa fa-plus"></i> Adicionar produto</a>
          </div>
      </div>
      <br/>
      <table class="table table-hover">
          <thead class="thead-dark">
              <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Valor</th>
              <th scope="col">Tipo</th>
              <th scope="col">Opções</th>
              </tr>
          </thead>
          <tbody>
          @foreach ($products as $obj)
              <tr>
              <th scope="row">{{$obj->id}}</th>
              <td>{{$obj->name}}</td>
              <td>R$: {{$obj->value}}</td>
              <td>{{$obj->type}}</td>
              <td><form action="{{ route('product.destroy',$obj->id) }}" method="POST" style="" class="form-inline">
                  <a class="btn btn-primary" style="color:white; margin-right:10px;" href="/admin/product/view/{{$obj->id}}">Visualizar</a>
                  <a class="btn btn-warning" style="color:white; margin-right:10px;" href="/admin/product/edit/{{$obj->id}}">Editar</a>
                  
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Apagar</button>
                  </form>
              </td>
              </tr>
              <tr>
          @endforeach
          </tbody>
      </table>
      </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
