@extends('adminlte::page')

@section('title', 'Pagamento')

@section('content_header')
    <h1>Pagamento</h1>
@stop

@section('content')

<div class="container">
  <div class="row">
  <button class="btn btn-info btn-block mb-3 py-3" onclick="printDiv('print')">Imprimir</button>
    <div class="col-sm rounded bg-gray mb-3 shadow-sm mr-2 ml-2" id="print">
      <div class="d-flex justify-content-center">
        <img src="{{$internal_settings['logo']->value}}" style="width: 50%; max-width:600px;" id="logo">
      </div>
      <div class="text-center mx-4 mb-4">
        <div class="h6" id='2-p-coupon'>
          <p>{{$command_title}}</p>
          <hr>          
          <p>Cliente: {{$order->name_customer}}</p>
          <p>IMPRESSO EM {{$agora = date('d/m/Y H:i');}}</p>
          <p>SIMPLES CONFERENCIA DA CONTA</p>
          <p>RELATORIO GERENCIAL</p>
          <p>***DOCUMENTO NÃO FISCAL***</p>
        </div>        
        <hr>
        <p class="text-center h5 text-center"><strong>MESA</strong></p>
        <p class="text-center h5 text-center">{{$order->desk}}</p>
        <hr>
        <div class="row border-bottom border-top">
          <div class="col-7 text-left h6"><strong>ITEM</strong></div>
          <div class="col-5 text-right h6"><strong>VALOR</strong></div>
        </div>
        @foreach($order->orderProducts as $orderProduct)
        <div class="row border-bottom">
          <div class="col-7 text-left h6">{{ $orderProduct->product->name }}</div>
          <div class="col-5 text-right h6">R$: {{ number_format($orderProduct->product->value, 2, ',', '.') }}</div>
        </div>
          @foreach($orderProduct->orderproductsadditionals as $orderproductsadditional)
          <div class="row border-bottom">
            <div class="col-7 text-left h6">AD {{ $orderproductsadditional->additional->name }}</div>
            <div class="col-5 text-right h6">R$: {{ number_format($orderproductsadditional->additional->value, 2, ',', '.') }}</div>
          </div>
          @endforeach
        @endforeach

        <hr>
        <div class="row">
          <div class="col-7 text-left h6"><strong>TOTAL</strong></div>
          <div class="col-5 text-right h6"><strong>R$ {{number_format($order->amount, 2, ',', '.')}}</strong></div>
        </div>
      </div>    
    </div>
    
    <div class="col-sm">      
      <div class="d-flex align-items-center mb-2 p-2 w-100 rounded bg-dinheiro shadow-sm">
        <strong class="ml-2 text-light">Dinheiro</strong>
        <input type="string" class="form-control ml-2 mr-4 border-0" id="value-pay" value="{{ $order->amount }}">
        <button class="btn btn-light btn-sm ml-auto" data-toggle="modal" data-target="#dinheiroModal" onclick="">Confirmar</button>
      </div>
      <div class="d-flex align-items-center mb-2 p-2 w-100 rounded bg-cartao shadow-sm">
        <strong class="ml-2 text-light">Cartão</strong>
        <button class="btn btn-light btn-sm ml-auto" data-toggle="modal" data-target="#creditoModal">Crédito</button>
        <button class="btn btn-light btn-sm ml-2" data-toggle="modal" data-target="#debitoModal">Débito</button>
      </div>
      <div class="d-flex align-items-center mb-2 p-2 w-100 rounded bg-pix shadow-sm">
        <strong class="ml-2 mr-4 text-light">PIX</strong>
        <button class="btn btn-light btn-sm ml-auto" data-toggle="modal" data-target="#pixModal">Confirmar</button>
      </div>
      <div class="d-flex align-items-center mb-2 p-2 w-100 rounded bg-crediario shadow-sm">
        <strong class="ml-2 mr-4 text-light ">Crediário</strong>
        <button class="btn btn-light btn-sm ml-auto" data-toggle="modal" data-target="#crediarioModal">Confirmar</button>
      </div>      
    </div>
  </div>
</div>



<!-- Modal for cash payment -->
<div class="modal fade" id="dinheiroModal" tabindex="-1" role="dialog" aria-labelledby="dinheiroModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dinheiroModalLabel">Confirmação de Pagamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
          
        </button>
      </div>
      <div class="modal-body">        
        <p class="h4 text-danger">VALOR: R$<span class="">{{ $order->amount }}</span></p>
        <p class="h4 text-danger"><span class="" id="change"></span></p>
      </div>
      <div class="modal-footer">
      <form method="post" action="{{url('/admin/tables_restaurant/finish')}}" enctype="multipart/form-data" id="form">
        @csrf
            <input type="hidden" id="order" name="order" value="{{$order->id}}" />
            <input type="hidden" id="form_of_payment" name="form_of_payment" value="0" />
            <button class="btn btn-success btn-block" id="buy">Finalizar</button>
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>



<!-- Crédito Modal -->
<div class="modal fade" id="creditoModal" tabindex="-1" role="dialog" aria-labelledby="creditoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="debitoModalLabel">Confirmação de Pagamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><div class="modal-body">
        <p class="h4 text-danger">Pagar com <span>CRÉDITO</span></p>
        <p style="font-size: 30px">Valor: R$ {{number_format($order->amount, 2, ',', '.')}}</p>
        <p style="font-size: 30px">Porcentagem: {{number_format($credit_interest, 2, ',', '.')}}%</p>
        <p style="font-size: 30px">Total: R$ {{number_format($value_credit, 2, ',', '.')}}</p>
      </div>
      
      <div class="modal-footer">
      <form method="post" action="{{url('/admin/tables_restaurant/finish')}}" enctype="multipart/form-data" id="form">
        @csrf
            <input type="hidden" id="order" name="order" value="{{$order->id}}" />
            <input type="hidden" id="form_of_payment" name="form_of_payment" value="1" />
            <button class="btn btn-success btn-block" id="buy">Finalizar</button>
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<!-- Débito Modal -->
<div class="modal fade" id="debitoModal" tabindex="-1" role="dialog" aria-labelledby="debitoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="debitoModalLabel">Confirmação de Pagamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="h4 text-danger">Pagar com <span>DEBITO</span></p>
        <p style="font-size: 30px">Valor: R$ {{number_format($order->amount, 2, ',', '.')}}</p>
        <p style="font-size: 30px">Porcentagem: {{number_format($debt_interest, 2, ',', '.')}}%</p>
        <p style="font-size: 30px">Total: R$ {{number_format($value_debt, 2, ',', '.')}}</p>
      </div>
      <div class="modal-footer">
      <form method="post" action="{{url('/admin/tables_restaurant/finish')}}" enctype="multipart/form-data" id="form">
        @csrf
            <input type="hidden" id="order" name="order" value="{{$order->id}}" />
            <input type="hidden" id="form_of_payment" name="form_of_payment" value="2" />
            <button class="btn btn-success btn-block" id="buy">Finalizar</button>
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal for pix payment -->
<div class="modal fade" id="pixModal" tabindex="-1" role="dialog" aria-labelledby="pixModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pixModalLabel">Confirmar pagamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="h4 text-danger">Pagar com <span>PIX</span></p>
        <p style="font-size: 30px">Valor: R$ {{number_format($order->amount, 2, ',', '.')}}</p>
        <p style="font-size: 30px">Porcentagem: {{number_format($pix_interest, 2, ',', '.')}}%</p>
        <p style="font-size: 30px">Total: R$ {{number_format($value_pix, 2, ',', '.')}}</p>
        <hr>
        <p class="h3">Chave PIX: (82) 99980-1207</p>
        <hr>
        <img src="/img/QR_CODE.png" style="width: 100%; max-width: 250px"><br/>
      </div>  
      <div class="modal-footer">
      <form method="post" action="{{url('/admin/tables_restaurant/finish')}}" enctype="multipart/form-data" id="form">
        @csrf
            <input type="hidden" id="order" name="order" value="{{$order->id}}" />
            <input type="hidden" id="form_of_payment" name="form_of_payment" value="4" />
            <button class="btn btn-success btn-block" id="buy">Finalizar</button>
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal for crediario payment -->
<div class="modal fade" id="crediarioModal" tabindex="-1" role="dialog" aria-labelledby="crediarioModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="crediarioModalLabel">Confirmação do Crediário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="h4 text-danger">Pagar com <span>CREDIÁRIO</span></p>
        <p style="font-size: 30px">Valor: R$ {{number_format($order->amount, 2, ',', '.')}}</p>
        <p style="font-size: 30px">Porcentagem: {{number_format($debt_interest, 2, ',', '.')}}%</p>
        <p style="font-size: 30px">Total: R$ {{number_format($value_debt, 2, ',', '.')}}</p>
      </div>   
      <div class="modal-footer">
      <form method="post" action="{{url('/admin/tables_restaurant/finish')}}" enctype="multipart/form-data" id="form">
        @csrf
            <input type="hidden" id="order" name="order" value="{{$order->id}}" />
            <input type="hidden" id="form_of_payment" name="form_of_payment" value="3" />
            <button class="btn btn-success btn-block" id="buy">Finalizar</button>
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>



  <div id="blanket"></div>
<div id="aguarde">Aguarde...</div>



@stop

@section('css')
    <style>
      p {
        margin-bottom: 0.5px;
      }
    </style>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
  <script>
    $(document).ready(function() {
      $('#value-pay').on('keydown', function(e) {
        // permite apenas números e as teclas de navegação (backspace, tab, etc)
        if (!/^[0-9]+$/.test(e.key) && e.key.length === 1 && e.key !== 'Backspace' && e.key !== 'Tab' && e.key !== 'ArrowLeft' && e.key !== 'ArrowRight') {
          e.preventDefault();
      }
      });

      $('#value-pay').on('input', function() {
      var valuePaid = parseFloat($(this).val());
      var orderAmount = parseFloat('{{ $order->amount }}');
      var change = valuePaid - orderAmount;

      if (change >= 0) {
        $('#change').text('TROCO: R$ ' + change.toFixed(2));
        $('#form').append('<input type="hidden" id="troco" name="troco" value="'+change+'" />');
        $('#form').append('<input type="hidden" id="value_paid" name="value_paid" value="'+valuePaid+'" />');
      } else {
        $('#change').text('Insira um valor maior que R$ ' + orderAmount.toFixed(2));
      }
    });

    $('#confirmCash').on('click', function() {
      // add your code to handle the confirmation of the cash payment
    });
    });

    $(document).ready(function() {
      $("body").on("contextmenu", function() {
          return false;
      });

      

    });

    
  


  </script>
    <script> console.log('Hi!'); </script>
    <script src="{{asset('/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="{{ asset('js/loading.js') }}"></script>
<script src="{{asset('js/keys.js')}}"></script>
@stop
