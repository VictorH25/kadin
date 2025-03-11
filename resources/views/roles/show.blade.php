@extends('adminlte::page')

@section('title', 'Visualizar Função')

@section('content_header')
    <h1>Visualizar Função</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-3">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('funcoes.index') }}">Voltar</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $role->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permissions:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
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
