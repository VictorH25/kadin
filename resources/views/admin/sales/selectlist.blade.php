@extends('adminlte::page')

@section('title', 'Selecionar Lista')

@section('content_header')
    <h1>Selecionar Lista</h1>
@stop

@section('content')
<div class="row container" id="btn-print">
    <button class="btn btn-primary" onclick="printDiv('print')">
        Imprimir <i class="menu-icon fa fa-print"></i>
    </button>
</div>
<a class="btn btn-danger" style="color: white" href="/admin/sales">Voltar</a>


<div class="print" id="print">
<div class="container">

<br>
<div class="text-center" id="text-sm">
<img id="img-head" src="{{$internal_settings['logo']->value}}" width="230px" style="margin-top: 20px;"/><br/>
{{$report_name}}
</div>
<hr>
<div class="text-center" id="text-sm">
IMPRESSO EM {{date('d-m-Y')}} <br/><br/>
SIMPLES CONFERENCIA DA CONTA <br/>
RELATORIO GERENCIAL <br/>
***DOCUMENTO NAO FISCAL***

</div>
<hr>
<br>
<div class="row" id="text-ms">
    <div class="col">
        C. Credito: R$: {{sprintf("%.2f",$c_credito)}} (Liquido)<br/>
        C. Debito: R$: {{sprintf("%.2f",$c_debito)}} (Liquido)<br/>
        Avista: R$: {{sprintf("%.2f",$avista)}}<br/>
        Crediario: R$: {{sprintf("%.2f",$crediario)}}<br/>
        PIX: R$: {{sprintf("%.2f",$pix)}} (Liquido)<br/>
    </div>
</div>
<hr>
<div class="row container" id="text-sm">
    <div class="col containter">Total: R$ {{sprintf("%.2f",$total_day)}}</div>
</div>
<hr>
<br/>
@foreach ($order as $item)

<div class="row" id="text-sm">
        <div class="col">
        <?php $name = explode(" ",$item->name_customer); echo $name[0]; ?>
        </div>
        <div class="col">
            @if($item->form_of_payment == 0)
                Á vista
            @elseif($item->form_of_payment == 1)
                C. Credito
            @elseif($item->form_of_payment == 2)
                C. Debito
            @elseif($item->form_of_payment == 3)
                Crediario
            @elseif($item->form_of_payment == 4)
                PIX
            @endif
        </div>
        <div class="col">
            R$: {{sprintf("%.2f",$item->amount)}}
        </div>
</div>
@endforeach
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
         function printDiv(divName) {
            let div = document.getElementById(divName);
            div.style.width = "72mm";
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            //document.body.innerHTML = originalContents;
        }
    </script>
@stop
