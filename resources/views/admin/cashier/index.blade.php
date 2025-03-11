@extends('adminlte::page')

@section('title', 'Listar Caixa')

@section('content_header')
    <h1>Listar Caixa</h1>
@stop

@section('content')
 <!--this button will be displayed only if database is empty-->
 @if(count($status) == 0)
 <span style="color: black;font-weight: bold;"> Caixa Atual: </span>
 Vazio
 <span style="color: black;font-weight: bold;"> Status: </span>
 <span style="color: red;font-weight: bold;"> FECHADO </span>
@endif

@foreach($status as $obj)
 <p style="color: black;">
 <span style="color: black;font-weight: bold;"> Caixa Atual: </span> 
 {{ $obj->start }} 
 <span style="color: black;font-weight: bold;"> Status: </span>
 @if($obj->status==1) 
             <span style="color: green;font-weight: bold;"> ABERTO </span>
         @else
             <span style="color: red;font-weight: bold;"> FECHADO </span>
         @endif
 </p>
@endforeach

 <div class="row">        
     @foreach($status as $obj)
         @if($obj->status == 0)
             <form style="margin-left:20px;" action="{{ route('cashier.openCashier') }}" method="post">
                 @csrf
                 <button type="submit" class="btn btn-primary" style="margin-top: 10px">Iniciar Caixa</button>
             </form>
         @else
             <form style="margin-left:20px;" action="{{ route('cashier.closeCashier') }}" method="post">
                 @csrf
                 @method('PUT')
                 <button type="submit" class="btn btn-danger" style="margin-top: 10px">Fechar Caixa</button>
             </form>
         @endif
     @endforeach
     <!--this button will be displayed only if database is empty-->
     @if(count($status) == 0)
         <form style="margin-left:20px;" action="{{ route('cashier.openCashier') }}" method="post">
         @csrf
         <button type="submit" class="btn btn-primary" style="margin-top: 10px">Iniciar Caixa</button>
         </form>
     @endif 
 <div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
