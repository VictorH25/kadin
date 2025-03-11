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

    <a href="/admin/client/spun/{{$id}}/" class="btn btn-success">
        Concluir <i class="menu-icon fa fa-check"></i>
    </a>
</div>
<div class="container">
    <div class="print" id="print">
        <div class="text-center">
            <img src="{{ $coupon['logo'] }}" width="230px" style="margin-top: 20px;">
            <br/>
            <p style="font-size: 40px; margin-top: 5px;">CREDIARIO</p>
        </div>
                <hr style="margin-top: 10px">
            <div class="text-center">
                <p style="font-size: 16px; margin-top: -17px;">
                    NOME:<b> {{ $coupon['client_name'] }}</b>
                </p>
                <p style="font-size: 16px; margin-top: -17px;">
                    PAGAMENTO DE CONTA
                </p>
                <p style="font-size: 14px; margin-top: -17px;">
                    IMPRESSO EM {{$coupon['purchase_date']}} as {{$coupon['purchase_time']}}
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
            <hr style="margin-top: 1px">
            <div class="row container" style="margin-top: -13px">
                <div class="col-7">
                    VALOR PAGO: 
                </div>
                <div class="col">
                    R$: {{ $coupon['value'] }} 
                </div>
            </div>
            <hr style="margin-top: 10px">
            <div class="text-center" style="margin-top: -10px">
                <p style="font-size: 15px; line-height: 16px; margin-top: 20px;">________________________________________________</p> 
                <p style="font-size: 15px; line-height: 16px">Assinatura do operador</p> 
            </div>
            <br/>
        </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
        function printDiv(divName) {

            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@stop
