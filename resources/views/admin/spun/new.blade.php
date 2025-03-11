@extends('adminlte::page')

@section('title', 'Adicionar Pagamento')

@section('content_header')
    <h1>Adicionar Pagamento</h1>
@stop

@section('content')
<div class="container">
    <form method="post" action="{{ route('spun.store',$id) }}">
        @csrf
        <div class="form-group">
            <input name="client_id" type="hidden" class="form-control" value="{{ $id }}" required>
        </div>
        <div class="form-group">
            <label>Valor do pagamento:</label>
            <div class="input-group-prepend">
                <label class="input-group-text">R$:</label>
                <input name="value" type="number" class="form-control" placeholder="Valor" step=".01" required>
            </div>
        </div>
        <div class="form-group"> 
            <button type="submit" class="btn btn-success btn-lg btn-block">Salvar</button>
        </div>
    </form>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
