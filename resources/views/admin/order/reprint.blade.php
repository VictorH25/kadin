@extends('adminlte::page')
@section('title', 'Print')
@section('content_header')
<h1>Print</h1>
@stop
@section('content')
    <div class="row container" id="btn-print">
        <button class="btn btn-primary" onclick="printDiv('print')" style="margin-right: 10px">
        Imprimir via do cliente <i class="menu-icon fa fa-print"></i>
        </button>
        <button class="btn btn-primary" onclick="printDiv('print2')" style="margin-right: 10px">
        Imprimir via da cozinha <i class="menu-icon fa fa-print"></i>
        </button>
        @if($order['type']=="3")
            <button class="btn btn-primary" onclick="printDiv('print3')" style="margin-right: 10px">
            Imprimir via do estabelecimento <i class="menu-icon fa fa-print"></i>
            </button>
        @endif
        <a href="/admin/sales/" class="btn btn-success">
        Concluir <i class="menu-icon fa fa-check"></i>
        </a>
    </div>
    <div class="print" id="print">
        <div class="container">
            <div class="text-center">
                <img src="{{ $coupon['logo'] }}" width="230px" style="margin-top: 20px"><br/>
                <p style="font-size:13px; margin-top: -3px">{{$coupon['title']}}</p>
            </div>
            <hr style="margin-top: -15px">
            <div class="text-center">
                <p style="font-size: 16px; margin-top: -17px;">
                    Operador:<b> {{ $order['user']->name }}</b>
                </p>
                <p style="font-size: 16px; margin-top: -17px;">
                    Cliente:<b> {{ $order['name_customer'] }}</b>
                </p>
                <p style="font-size: 16px; margin-top: -17px;">
                    @if($order['address'] != " " and $order['address'] != null)
                        ENDEREÇO:<b> {{ $order['address'] }}, nº {{ $order['address_number'] }}</b>
                    @endif
                </p>
                <p style="font-size: 14px; margin-top: -17px;">
                    IMPRESSO PRIMEIRA VEZ: {{ date_format($order['created_at'],"d/m/Y H:i:s") }}
                </p>

                <p style="font-size: 14px; margin-top: -20px;">
                    SIMPLES CONFERENCIA DA CONTA
                </p>
                <p style="font-size: 14px; margin-top: -20px;">
                    RELATORIO GERENCIAL
                </p>
                <p style="font-size: 14px; margin-top: -20px;">
                    ***DOCUMENTO NAO FISCAL***
                </p>
            </div>
            <hr style="margin-top: -15px">
            <div class="text-center">
                @if($coupon['desk'] == 0)
                    <p style="font-size: 30px; margin-top: -10px">SENHA</p>
                    <p style="font-size: 65px; margin-bottom: 25px">{{ $order['key'] }}</p>
                @else
                    <p style="font-size: 30px; margin-top: -10px">MESA || SENHA</p>
                    <p style="font-size: 65px; margin-bottom: 25px">{{ $order['desk'] }} - {{ $order['key'] }}</p>
                @endif
            </div>
            <hr style="margin-top: 1px">
            <div class="row container" style="margin-top: -13px">
                <div class="col-8" style="font-size: 14px;">
                    <p style="margin-bottom: 0.5px">ITENS</p>
                    @foreach($order->orderProducts as $order_product)   
                        <p style="margin-bottom: 0.5px">{{$order_product->product->name}}</p>
                        @foreach($order_product->orderproductsadditionals as $order_additional)
                            <p style="margin-bottom: 0.5px">AD: {{$order_additional->additional->name}}</p>
                        @endforeach
                    @endforeach
                </div>
                <div class="col" style="font-size: 14px;">
                    <p style="margin-bottom: 0.5px">VALOR</p>
                    @foreach($order->orderProducts as $order_product)   
                        <p style="margin-bottom: 0.5px">R$: {{$order_product->product->value}}</p>
                        @foreach($order_product->orderproductsadditionals as $order_additional)
                            <p style="margin-bottom: 0.5px">R$: {{$order_additional->additional->value}}</p>
                        @endforeach
                    @endforeach
                </div>
                <hr style="margin-top: 1px">
                <div class="col-8">
                    @if($order['sum'] != $order['amount'])
                        @if($order['sum'] != 0)
                            SOMA:<br/>
                        @endif
                    @endif
                    @if($order['percentage'] != 0)
                        TAXA:<br/>
                    @endif
                    @if($order['amount'] != 0)
                        TOTAL:<br/>
                    @endif
                    @if($order['value_payment'] != 0)
                        PAGAMENTO:<br/>
                    @endif
                    @if($order['change'] != 0)
                        TROCO:<br/>
                    @endif
                </div>
                <div class="col">
                    @if($order['sum'] != $order['amount'])
                        @if($order['sum'] != 0)
                            R$: {{ number_format($order['sum'], 2, '.', ',') }}<br/>
                        @endif
                    @endif
                    @if($order['percentage'] != 0)
                        {{ $order['percentage'] }}%<br/>
                    @endif
                    @if($order['amount'] != 0)
                        R$: {{ number_format($order['amount'], 2, '.', ',') }}<br/>
                    @endif
                    @if($order['value_payment'] != 0)
                        R$: {{ number_format($order['value_payment'], 2, '.', ',') }}<br/>
                    @endif
                    @if($order['change'] != 0)
                        R$: {{ number_format($order['change'], 2, '.', ',') }}<br/>
                    @endif
                </div>
            </div>
            <hr style="margin-top: 1px">
            <div class="text-center" style="margin-top: -10px">
                <p style="font-size: 12px; line-height: 16px">{{ $coupon['footer'] }}</p>
            </div>
            <br/>
        </div>
    </div>
    <br/>
    <div class="print" id="print2">
        <br>
        <div class="container">
            <div class="row container" style="margin-top: 20px" >
                <div class="col-8">
                    <p style="font-size: 20px;">SENHA</p>
                    <p style="font-size: 20px;">MESA</p>
                </div>
                <div class="col">
                    <p style="font-size: 20px; margin-bottom: 25px">{{ $order['key'] }}</p>
                    <p style="font-size: 20px; margin-bottom: 25px">{{ $order['desk'] }}</p>
                </div>
            </div>
            <hr style="margin-top: 1px">
            <div class="container" style="font-size: 15px">
                NOME: {{ $order['name_customer'] }}
            </div>
            <hr style="margin-top: 10px">
            <div class="container" style="font-size: 15px">
                ENTREGA: 
                @if($order['delivery'] == 0)
                    Não
                @else
                    Sim
                @endif
            </div>
            @if($order['delivery'] == "Não")
                <hr style="margin-top: 10px">
                <div class="container" style="font-size: 15px">
                    Viagem: {{$order['trip']}}
                </div>
            @endif
            @if($order['address'] != " " and $order['address'] != null)
                <hr style="margin-top: 10px">
                <div class="container" style="font-size: 15px">
                    ENDEREÇO:<b> {{ $order['address'] }}, nº {{ $order['address_number'] }}</b>
                </div>
            @endif
            <hr style="margin-top: 10px">
            <div class="container" style="font-size: 15px">
                IMPRESSO PRIMEIRA VEZ: {{ date_format($order['created_at'],"d/m/Y H:i:s") }}
            </div>
            <hr style="margin-top: 10px">
            <div class="row container" style="margin-top: -12px">
                <div class="col-8" style="font-size: 17px">
                    <p style="margin-bottom: 0.4px">ITENS</p>
                    @foreach($order->orderProducts as $order_product)   
                        <p style="margin-bottom: 0.4px">{{$order_product->product->name}}</p>
                        @foreach($order_product->orderproductsadditionals as $order_additional)
                            <p style="margin-bottom: 0.4px">AD: {{$order_additional->additional->name}}</p>
                        @endforeach
                    @endforeach
                </div>
            </div>
            <br/>
        </div>
    </div>
    <br/>
    @if($order['type']=="3")
        <br/>
        <div class="container">
            <div class="print" id="print3">
                <div class="text-center">
                    <img src="{{ $order['logo'] }}" width="230px" style="margin-top: 20px;">
                    <br/>
                    <p style="font-size: 40px; margin-top: 5px;">CREDIARIO</p>
                </div>
                <hr style="margin-top: 10px">
                <div class="text-center">
                    <p style="font-size: 16px; margin-top: -17px;">
                        NOME:<b> {{ $order['client_name'] }}</b>
                    </p>
                    @if($order['delivery'] == "Sim")
                    @if($order['address'] != "")
                    <div class="container" style="font-size: 16px">
                        ENDEREÇO:<b> {{ $order['address'] }}, nº {{ $order['address_number'] }}</b>
                    </div>
                    <hr style="margin-top: 10px">
                    @endif
                    @endif
                    <p style="font-size: 14px; margin-top: -17px;">
                        IMPRESSO EM {{$order['purchase_date']}} as {{$order['purchase_time']}}
                    </p>
                    <p style="font-size: 14px; margin-top: -20px;">
                        SIMPLES CONFERENCIA DA CONTA
                    </p>
                    <p style="font-size: 14px; margin-top: -20px;">
                        RELATORIO GERENCIAL
                    </p>
                    <p style="font-size: 14px; margin-top: -20px;">
                        ***DOCUMENTO NAO FISCAL***
                    </p>
                </div>
                <hr style="margin-top: -15px">
                <div class="text-center">
                    @if($internal_settings['desk']->value == 0)
                    <p style="font-size: 30px; margin-top: -10px">SENHA</p>
                    <p style="font-size: 65px; margin-bottom: 25px">{{ $order['key'] }}</p>
                    @else
                    <p style="font-size: 30px; margin-top: -10px">MESA || SENHA</p>
                    <p style="font-size: 65px; margin-bottom: 25px">{{ $order['desk'] }} - {{ $order['key'] }}</p>
                    @endif
                </div>
                <hr>
                <hr style="margin-top: 1px">
                <div class="row container" style="margin-top: -13px">
                    <div class="col-8" style="font-size: 17px">
                        <p>ITENS</p>
                        @foreach($order->orderProducts as $order_product)   
                        <p>{{$order_product->product->name}}</p>
                        @foreach($order_product->orderproductsadditionals as $order_additional)
                        <p>AD: {{$order_additional->additional->name}}</p>
                        @endforeach
                        @endforeach
                    </div>
                    <div class="col-7">
                        @if($order['sum'] != $order['amount'])
                            @if($order['sum'] != 0)
                                SOMA:<br/>
                            @endif
                        @endif
                        @if($order['percentage'] != 0)
                            TAXA:<br/>
                        @endif
                        @if($order['amount'] != 0)
                            TOTAL:<br/>
                        @endif
                        @if($order['value_payment'] != 0)
                            PAGAMENTO:<br/>
                        @endif
                        @if($order['change'] != 0)
                            TROCO:<br/>
                        @endif
                    </div>
                    <div class="col">
                        @if($order['sum'] != $order['amount'])
                            @if($order['sum'] != 0)
                                R$: {{ number_format($order['sum'], 2, '.', ',') }}<br/>
                            @endif
                        @endif
                        @if($order['percentage'] != 0)
                            {{ $order['percentage'] }}%<br/>
                        @endif
                        @if($order['amount'] != 0)
                            R$: {{ number_format($order['amount'], 2, '.', ',') }}<br/>
                        @endif
                        @if($order['value_payment'] != 0)
                            R$: {{ number_format($order['value_payment'], 2, '.', ',') }}<br/>
                        @endif
                        @if($order['change'] != 0)
                            R$: {{ number_format($order['change'], 2, '.', ',') }}<br/>
                        @endif
                    </div>
                </div>
                <hr style="margin-top: 1px">
                <div class="text-center" style="margin-top: -10px">
                    <p style="font-size: 15px; line-height: 16px; margin-top: 20px;">________________________________________________</p>
                    <p style="font-size: 15px; line-height: 16px">Assinatura do cliente</p>
                </div>
                <br/>
            </div>
        </div>
    @endif
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script> console.log('Hi!'); </script>
@stop