@extends('adminlte::page')

@section('title', 'Finalizado')

@section('content_header')
    <h1>Finalizado</h1>
@stop

@section('content')
<p style="font-size: 50px">
    <i class="fa fa-check-square" aria-hidden="true" style="font-size: 50px; color: green"></i>
    Pagamento realizado com sucesso
</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
