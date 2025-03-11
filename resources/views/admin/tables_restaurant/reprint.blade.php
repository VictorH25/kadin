@extends('adminlte::page')

@section('title', 'Print')

@section('content_header')
    <h1>Print</h1>
@stop

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-lg-3 pb-2 bg-body shadow-sm rounded-top d-flex justify-content-center">
        <div class="mt-2">
            <button class="btn btn-primary mr-2 px-5">Imprimir comanda da cozinha</button>
            <button class="btn btn-danger">Finalizar</button>
        </div>
    </div>
</div>

<div class="row d-flex justify-content-center">
    
    <div class="col-lg-3 bg-body pb-2 rounded-bottom">
        <div class="mx-5 bg-coupon">
            <p>Point da Gastronomia</p>
            <hr>
            <p>MESA X</p>
            <hr>
            <p>Pizza de Calabresa</p>
            <hr>
            <p>Borda de cheddar</p>
            <hr>
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
