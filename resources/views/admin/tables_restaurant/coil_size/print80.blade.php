@extends('adminlte::page')

@section('title', 'Print58')

@section('content_header')
    <h1>Print58</h1>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-5 p-4">
        <button class="btn btn-primary mr-3" onclick="printDiv('print')">
            Imprimir via do cliente <i class="menu-icon fa fa-print"></i>
        </button>
        <button class="btn btn-primary mr-3" onclick="printDiv('print2')">
            Imprimir via da cozinha <i class="menu-icon fa fa-print"></i>
        </button>
        @if($coupon['type']==3)
            <button class="btn btn-primary mr-3" onclick="printDiv('print3')">
                Imprimir via do estabelecimento <i class="menu-icon fa fa-print"></i>
            </button>
        @endif
        <a href="/admin/order/" class="btn btn-success">
            Concluir <i class="menu-icon fa fa-check"></i>
        </a>
    </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-5 bg-dark">
      <img src="logo.png" class="mx-auto d-block">
      <div class="text-center">
        <p>Instagram - WhatsApp</p>
        <hr>
        <p>Cliente: Irineu</p>
        <p>IMPRESSO EM 14:22:22</p>
        <p>SIMPLES CONFERENCIA DA CONTA</p>
        <p>RELATORIO GERENCIAL</p>
        <p>***DOCUMENTO NÃO FISCAL***</p>
        <hr>
        <p class="text-center"><strong>MESA || SENHA</strong></p>
        <p class="text-center">1 - 2</p>
        <hr>
        <div class="row border-bottom border-top">
          <div class="col-7 text-left"><strong>ITEM</strong></div>
          <div class="col-5 text-right"><strong>VALOR</strong></div>
        </div>
        <div class="row border-bottom">
          <div class="col-7 text-left">Misto</div>
          <div class="col-5 text-right">R$7,00</div>
        </div>
        <div class="row border-bottom">
          <div class="col-7 text-left">AD Calabresa</div>
          <div class="col-5 text-right">R$4,00</div>
        </div>
        <hr>
        <div class="row">
          <div class="col-7 text-left"><strong>TOTAL</strong></div>
          <div class="col-5 text-right"><strong>R$11,00</strong></div>
        </div>
        <div class="row">
          <div class="col-7 text-left"><strong>PAGAMENTO</strong></div>
          <div class="col-5 text-right"><strong>R$9,90</strong></div>
        </div>
      </div>
    </div>
  </div>
</div>

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>

@stop
