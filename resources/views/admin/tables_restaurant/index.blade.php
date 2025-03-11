@extends('adminlte::page')

@section('title', 'Comanda - Restaurante')

@section('content_header')
    <h1>Seleção de mesa</h1>
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
    </div>
    <div class="row">    
        @foreach($desks as $desk)

            <div class="col-sm-3">
                <div class="card" id="newCommandConfirm">
                    <div class="d-flex flex-row card-header border-0"  >
                        <strong class="card-title">MESA {{$desk['desk']+1}}</strong>
                        @if($desk['open'] == 1)
                            <p class="bg-warning py-2 px-4 rounded ml-auto">
                                Em andamento
                            </p>
                        @else
                            <p class="bg-success py-2 px-4 rounded ml-auto">
                                Livre
                            </p>
                        @endif
                    </div>
                    <div class="card-footer">
                        @if($desk['open'] == 1)
                        
                            <button type="button" class="btn btn-primary btn-block addCommandButton" desk="{{$desk['desk']+1}}" order="{{$desk['order']}}">Adicionar à comanda</button>
                        @else
                            <button type="button" class="btn btn-success btn-block newCommandButton" desk="{{$desk['desk']+1}}">Nova comanda</button>
                        @endif
                    </div>        
                </div>
            </div>
        @endforeach
    </div>
    <div class="modal fade" id="newCommandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciando Pedido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{route('tables_restaurant.order')}}" id="form">
        @csrf
      <div class="modal-body">
            <label>Nome do cliente</label>
            <input type="text" id="name" name="name" class="form-control"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary confirmCommandButton">Iniciar</button>
            </div>
            </div>
        </div>
        </form>

    </div>
    <form method="post" action="{{route('tables_restaurant.order')}}" id="formAdd">
        @csrf
    </form>

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
    jQuery(document).ready(function($){
        $('#aguarde, #blanket').css('display','none');
    })
</script>
<script src="/js/tables_restaurant/selectDesk.js"></script>
@stop
