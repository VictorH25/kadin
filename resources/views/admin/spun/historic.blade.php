@extends('adminlte::page')

@section('title', 'Histórico')

@section('content_header')
    <h1>Histórico</h1>
@stop

@section('content')
<div class="container">
    <div class="card">
      <div class="card-body">
        <div class="row">
            <div class="col">
                <h3>Fiado do Cliente: {{$client['0']->name}}</h3>
                <h4>Total de divida: R$: {{$total}}</h4>
            </div>
            <div class="col">
                <a class="btn btn-success" style="float:right; color:white;" href="/admin/client/spun/{{$client['0']->id}}/add"><i class="fa fa-plus"></i> Adicionar pagamento</a>
            </div>
        </div>
        <br/>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Valor</th>
                <th scope="col">Data de criação</th>
                <th scope="col">Imprimir via do cliente</th>
                <!--<th scope="col">Pedido</th>-->
                </tr>
            </thead>
            <tbody>
            @foreach ($spun as $obj)
                <tr>
                    <th scope="row">{{$s = $s + 1}}</th>
                    <td>{{$obj->value}}</td>
                    <td>{{$obj->created_at}}</td>
                    @if ($obj->order_id == null)
                        <td>
                            <a href="/admin/client/spun/{{$obj->client_id}}/print/{{$obj->id}}/" class="btn btn-primary">
                                Imprimir <i class="menu-icon fa fa-print"></i>
                            </a>
                        </td>
                    @else
                        <td>--</td>
                    @endif
                    <!--<td>{{$obj->order_id}}</td>-->
                </tr>
                <tr>
            @endforeach
            </tbody>
        </table>
    
        </div>
        </div>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
