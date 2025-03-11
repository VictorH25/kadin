@extends('adminlte::page')

@section('title', 'Print58')

@section('content_header')
    <h1>Print58</h1>
@stop

@section('content')
<button class="btn btn-primary" onclick="printDiv('print')" style="margin-right: 10px">
    Imprimir via do cliente <i class="menu-icon fa fa-print"></i>
</button>
<button class="btn btn-primary" onclick="printDiv('print2')" style="margin-right: 10px">
    Imprimir via da cozinha <i class="menu-icon fa fa-print"></i>
</button>
@if($coupon['type']==3)
    <button class="btn btn-primary" onclick="printDiv('print3')" style="margin-right: 10px">
        Imprimir via do estabelecimento <i class="menu-icon fa fa-print"></i>
    </button>
@endif
<a href="/admin/order/" class="btn btn-success">
    Concluir <i class="menu-icon fa fa-check"></i>
</a>
</div>

<div class="print" id="print">
<div class="container">
    <div class="text-center">
        <img src="{{ $coupon['logo'] }}" width="230px" style="margin-top: 20px"><br/>
        <p style="font-size:10px; margin-top: -3px">{{$coupon['title']}}</p>
    </div>
    <hr style="margin-top: -15px">
    <div class="text-center">
        <p style="font-size: 14px; margin-top: -17px;">
            Operador:<b> {{ $coupon['operator_name'] }}</b>
        </p>
        <p style="font-size: 14px; margin-top: -17px;">
            Cliente:<b> {{ $coupon['client_name'] }}</b>
        </p>
        <p style="font-size: 14px; margin-top: -17px;">
        @if($coupon['address'] != " ")
            ENDEREÇO:<b> {{ $coupon['address'] }}, nº {{ $coupon['address_number'] }}</b>
        @endif
        </p>

        
        <p style="font-size: 11px; margin-top: -17px;">
            IMPRESSO EM {{ $coupon['purchase_date'] }} as {{ $coupon['purchase_time'] }}
        </p>
        <p style="font-size: 11px; margin-top: -20px;">
            SIMPLES CONFERENCIA DA CONTA
        </p>
        <p style="font-size: 11px; margin-top: -20px;">
            RELATORIO GERENCIAL
        </p>
        <p style="font-size: 11px; margin-top: -20px;">
            ***DOCUMENTO NAO FISCAL***
        </p>
    </div>
    <hr style="margin-top: -15px">
    <div class="text-center">
    @if($internal_settings['desk']->value == 0)
        <p style="font-size: 20px; margin-top: -10px">SENHA</p>
        <p style="font-size: 45px; margin-bottom: 25px">{{ $coupon['key'] }}</p>
    @else
        <p style="font-size: 20px; margin-top: -10px">MESA || SENHA</p>
        <p style="font-size: 45px; margin-bottom: 25px">{{ $coupon['desk'] }} - {{ $coupon['key'] }}</p>
    @endif
    </div>
    <hr>
    <div class="row container" style="margin-top: -12px; font-size: 11px;">
        <div class="col-8">
        ITEM<br/>
        @foreach ($order_list as $order)
            <p style="display: none">{{$aux = -1}}</p>
            @foreach ($order as $b)
            <p style="display: none">{{$aux = $aux + 1}}</p>
                    @if($aux == 0)
                        {{ $order[0]->name }} 
                    @else
                        AD {{ $b->name }} 
                    @endif
                 <br/>
            @endforeach
        @endforeach
        </div>
        <div class="col" >
        VALOR <br/>
        @foreach ($order_list as $order)
            <p style="display: none">{{$aux = -1}}</p>
            @foreach ($order as $b)
            <p style="display: none">{{$aux = $aux + 1}}</p>
                    @if($aux == 0)
                        R$: {{ $order[0]->value }} 
                    @else
                        R$: {{ $b->value }} 
                    @endif
                 <br/>
            @endforeach
        @endforeach
        </div>
    </div>
    <hr style="margin-top: 1px">
    <div class="row container" style="margin-top: -13px">
        <div class="col-6" style="font-size: 11px;">
            @if($coupon['sum'] != $coupon['amount'])
                @if($coupon['sum'] != 0)
                    SOMA:<br/>
                @endif
            @endif
            @if($coupon['percentage'] != 0)
                TAXA:<br/>
            @endif
            @if($coupon['amount'] != 0)
                TOTAL:<br/>
            @endif
            @if($coupon['value_payment'] != 0)
                PAGAMENTO:<br/>
            @endif
            @if($coupon['change'] != 0)
                TROCO:<br/>
            @endif
        </div>
        <div class="col" style="font-size: 11px;">
            @if($coupon['sum'] != $coupon['amount'])
                @if($coupon['sum'] != 0)
                    R$: {{ number_format($coupon['sum'], 2, '.', ',') }}<br/>
                @endif
            @endif
            @if($coupon['percentage'] != 0)
                {{ $coupon['percentage'] }}%<br/>
            @endif
            @if($coupon['amount'] != 0)
                R$: {{ number_format($coupon['amount'], 2, '.', ',') }}<br/>
            @endif
            @if($coupon['value_payment'] != 0)
                R$: {{ number_format($coupon['value_payment'], 2, '.', ',') }}<br/>
            @endif
            @if($coupon['change'] != 0)
                R$: {{ number_format($coupon['change'], 2, '.', ',') }}<br/>
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
            @if($internal_settings['desk']->value == 1)
                <p style="font-size: 20px;">MESA</p>
            @endif
        </div>
        <div class="col">
            <p style="font-size: 20px; margin-bottom: 25px">{{ $coupon['key'] }}</p>
            @if($internal_settings['desk']->value == 1)
                <p style="font-size: 20px; margin-bottom: 25px">{{ $coupon['desk'] }}</p>
            @endif
        </div>
    </div>
    <hr style="margin-top: 1px">
    <div class="container" style="font-size: 11px">
        NOME: {{ $coupon['client_name'] }}
    </div>
    <hr style="margin-top: 10px">
    <div class="container" style="font-size: 11px">
        ENTREGA: {{$coupon['delivery']}}
    </div>
    @if($coupon['delivery'] == "Não")
        <hr style="margin-top: 10px">
        <div class="container" style="font-size: 11px">
            Viagem: {{$coupon['trip']}}
        </div>
    @endif
    @if($coupon['address'] != " ")
        <hr style="margin-top: 10px">
        <div class="container" style="font-size: 11px">
                ENDEREÇO:<b> {{ $coupon['address'] }}, nº {{ $coupon['address_number'] }}</b>
        </div>
    @endif
    <hr style="margin-top: 10px">
    <div class="container" style="font-size: 11px">
        IMPRESSO EM {{$coupon['purchase_date']}} as {{$coupon['purchase_time']}}
    </div>
    <hr style="margin-top: 10px">
    <div class="row container" style="margin-top: -12px">
    
    <div class="col-8" style="font-size: 12px; margin-left: 10px">
        <p>ITENS</p>    
        @foreach ($order_list as $order)
            <p style="display: none">{{$aux = -1}}</p>
            @foreach ($order as $b)
            <p style="display: none">{{$aux = $aux + 1}}</p>
                    @if($aux == 0)
                        <p style="margin-top: -25px">{{ $order[0]->name }} </p> 
                    @else
                    <P style="margin-top: -35px">
                        -> AD {{ $b->name }}<br/> 
                    </P>
                    @endif
                 <br/>
            @endforeach
        @endforeach
        </div>
    </div>
    <br/>
</div>
</div>
@if($coupon['type']==3)
<br/>
<div class="container">
<div class="print" id="print3">
    <div class="text-center">
        <img src="{{ $coupon['logo'] }}" width="230px" style="margin-top: 20px;">
        <br/>
        <p style="font-size: 20px; margin-top: 5px;">CREDIARIO</p>
    </div>
            <hr style="margin-top: 10px">
        <div class="text-center">
            <p style="font-size: 12px; margin-top: -17px;">
                NOME:<b> {{ $coupon['client_name'] }}</b>
            </p>
            @if($coupon['delivery'] == "Sim")
                @if($coupon['address'] != "")
                    <div class="container" style="font-size: 12px">
                            ENDEREÇO:<b> {{ $coupon['address'] }}, nº {{ $coupon['address_number'] }}</b>
                    </div>
                    <hr style="margin-top: 10px">
                @endif
            @endif
            <p style="font-size: 11px; margin-top: -17px;">
                IMPRESSO EM {{$coupon['purchase_date']}} as {{$coupon['purchase_time']}}
            </p>
            <p style="font-size: 11px; margin-top: -20px;">
                SIMPLES CONFERENCIA DA CONTA
            </p>
            <p style="font-size: 11px; margin-top: -20px;">
                RELATORIO GERENCIAL
            </p>
            <p style="font-size: 11px; margin-top: -20px;">
                ***DOCUMENTO NAO FISCAL***
            </p>
        </div>
        <hr style="margin-top: -15px">
        <div class="text-center">
        @if($internal_settings['desk']->value == 0)
            <p style="font-size: 20px; margin-top: -10px">SENHA</p>
            <p style="font-size: 45px; margin-bottom: 25px">{{ $coupon['key'] }}</p>
        @else
            <p style="font-size: 20px; margin-top: -10px">MESA || SENHA</p>
            <p style="font-size: 45px; margin-bottom: 25px">{{ $coupon['desk'] }} - {{ $coupon['key'] }}</p>
        @endif
        </div>
        <hr>
        <div class="row container" style="margin-top: -12px">
            <div class="col-7" style="font-size: 12px">
            ITEM<br/>
            @foreach ($order_list as $order)
                <p style="display: none">{{$aux = -1}}</p>
                @foreach ($order as $b)
                <p style="display: none">{{$aux = $aux + 1}}</p>
                        @if($aux == 0)
                            {{ $order[0]->name }} 
                        @else
                            AD {{ $b->name }} 
                        @endif
                    <br/>
                @endforeach
            @endforeach
            </div>
            <div class="col" style="font-size: 12px">
            VALOR <br/>
            @foreach ($order_list as $order)
                <p style="display: none">{{$aux = -1}}</p>
                @foreach ($order as $b)
                <p style="display: none">{{$aux = $aux + 1}}</p>
                        @if($aux == 0)
                            R$: {{ $order[0]->value }} 
                        @else
                            R$: {{ $b->value }} 
                        @endif
                    <br/>
                @endforeach
            @endforeach
            </div>
        </div>
        <hr style="margin-top: 1px">
        <div class="row container" style="margin-top: -13px; font-size: 12px">
            <div class="col-7">
                @if($coupon['sum'] != $coupon['amount'])
                    @if($coupon['sum'] != 0)
                        SOMA:<br/>
                    @endif
                @endif
                @if($coupon['percentage'] != 0)
                    TAXA:<br/>
                @endif
                @if($coupon['amount'] != 0)
                    TOTAL
                    @if($coupon['type'] == 0)
                        AVISTA
                    @elseif($coupon['type'] == 1)
                        C. CREDITO
                    @elseif($coupon['type'] == 2)
                        C. DEBITO
                    @elseif($coupon['type'] == 3)
                        CREDIARIO
                    @elseif($coupon['type'] == 4)
                        PIX
                    @endif
                    :<br/>
                @endif
                @if($coupon['value_payment'] != 0)
                    PAGAMENTO:<br/>
                @endif
                @if($coupon['change'] != 0)
                    TROCO:<br/>
                @endif
            </div>
            <div class="col">
                @if($coupon['sum'] != $coupon['amount'])
                    @if($coupon['sum'] != 0)
                        R$: {{ number_format($coupon['sum'], 2, '.', ',') }}<br/>
                    @endif
                @endif
                @if($coupon['percentage'] != 0)
                    {{ $coupon['percentage'] }}%<br/>
                @endif
                @if($coupon['amount'] != 0)
                    R$: {{ number_format($coupon['amount'], 2, '.', ',') }}<br/>
                @endif
                @if($coupon['value_payment'] != 0)
                    R$: {{ number_format($coupon['value_payment'], 2, '.', ',') }}<br/>
                @endif
                @if($coupon['change'] != 0)
                    R$: {{ number_format($coupon['change'], 2, '.', ',') }}<br/>
                @endif

            </div>
        </div>
        <hr style="margin-top: 1px">
        <div class="text-center" style="margin-top: -10px">
            <p style="font-size: 12px; line-height: 16px; margin-top: 20px;">________________________________________________</p> 
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
