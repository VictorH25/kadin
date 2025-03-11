@extends('adminlte::page')

@section('title', 'Comanda - Restaurante')

@section('content_header')
    <h1>Listar Ordem</h1>
@stop

@section('content')
<div class="container" >
    <div id="cont">
    </div>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="row">
    @foreach ($desks as $desk)
        <div class="col-sm-4">
            <div class="card" id="mesa">
                
                <div class="card-header border-0">
                    <p class="card-title" style="float: none">MESA: {{$desk['desk']}}</p>
                    <p class="card-title" style="float: none">CLIENTE: {{$desk['name_customer']}}</p>                    
                    <p class="card-title" style="float: none">VALOR: R$: {{$desk['amount']}}</p>                    
                </div>
                <div class="card-footer">
                    <form action="{{ url('/admin/tables_restaurant/payment') }}" method="post">
                        @csrf
                        <input type="hidden" value="{{ $desk->id }}" name="order_id">
                        <button type="submit" class="btn btn-primary btn-block">Fechar</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    </div>
</div>
<div id="blanket"></div>
<div id="aguarde">Aguarde...</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/order/index.css">
@stop

@section('js')
<script>
    $(document).ready(function() {
        $("body").on("contextmenu", function() {
            return false;
        });
    });
</script>

@stop
