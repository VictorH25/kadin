@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Listar Usuarios</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-3">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('usuarios.create') }}"> Criar usuario</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Nome</th>
   <th>Email</th>
   <th>Função</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info" href="{{ route('usuarios.show',$user->id) }}">Visualizar</a>
       <a class="btn btn-primary" href="{{ route('usuarios.edit',$user->id) }}">Editar</a>
        {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Apagar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>


{!! $data->render() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
