@extends('adminlte::page')

@section('title', 'Imprimir cupom')

@section('content_header')
    <h1>Imprimir cupom</h1>
@stop

@section('content')
<div class="row container" id="btn-print">
    <button class="btn btn-primary" onclick="printDiv('print2')" style="margin-right: 10px">
        Imprimir via da cozinha <i class="menu-icon fa fa-print"></i>
    </button>
    <a href="/admin/tables_restaurant" class="btn btn-success">
        Concluir <i class="menu-icon fa fa-check"></i>
    </a>
</div>


<br/>
<div class="print" id="print2">
    <br>

    <div class="container">
        <div class="row container" style="margin-top: 20px" >
            <div class="col-12">
                <p style="font-size: 25px;">{{$company_name}}</p>
            </div>
            <div class="col-8">
                <p style="font-size: 20px;">SENHA</p>
                <p style="font-size: 20px;">MESA</p>
            </div>
            <div class="col">
                <p style="font-size: 30px; margin-bottom: -10px">{{ $coupon['key'] }}</p>
                <p style="font-size: 30px;">{{ $coupon['desk'] }}</p>
            </div>
        </div>
        
        <hr style="margin-top: 1px">
        <div class="container mb-3" style="font-size: 12px">
            OPERADOR: <strong>{{ $coupon['operator_name'] }}</strong>
        </div>
        <hr style="margin-top: 1px">
        <div class="container" style="font-size: 12px">
            NOME: <strong>{{ $coupon['client_name'] }}</strong>
        </div>
        <hr style="margin-top: 10px">
        <div class="container" style="font-size: 12px">
            ENTREGA: <strong>{{$coupon['delivery']}}</strong>
        </div>
        @if($coupon['delivery'] == "Não")
            <hr style="margin-top: 10px">
            <div class="container" style="font-size: 12px">
                Viagem: {{$coupon['trip']}}
            </div>
        @endif
        @if($coupon['address'] != " ")
            <hr style="margin-top: 10px">
            <div class="container" style="font-size: 12px">
                    ENDEREÇO:<b> {{ $coupon['address'] }}, nº {{ $coupon['address_number'] }}</b>
            </div>
        @endif
        <hr style="margin-top: 10px">
        <div class="container" style="font-size: 12px">
            IMPRESSO EM {{$coupon['purchase_date']}} as {{$coupon['purchase_time']}}
        </div>
        <hr style="margin-top: 10px">
        <div class="row container" style="margin-top: -12px">
        
        <div class="col-8" style="font-size: 17px">
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
