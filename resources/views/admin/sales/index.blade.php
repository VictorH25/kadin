@extends('adminlte::page')

@section('title', 'Listar Vendas')

@section('content_header')
    <h1>Listar Vendas</h1>
@stop

@section('content')
<div class="container">
    <h2>Relatório de vendas</h2>
    <form method="post" action="{{route('sales.list.list')}}" style="margin-bottom:10px;">
@csrf
    De:
    <select name="id" type="date" class="date">
        @if(count($dates) == 0)
            <option value="">Selecione</option>

        @endif 
        @foreach($dates as $date)
            <option value="{{ $date->id }}"> 
                {{ $date->created_at }}
            </option> 
        @endforeach
    </select>
    @if(count($dates) != 0)
        <button type="submit" class="btn btn-primary" style="margin-left:10px;">
            Gerar Relatório
        </button>
    @endif
</form>
</div>

<div class="container">	
    <!--Relatory tabs-->
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#1" data-toggle="tab">Dia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#2" data-toggle="tab">Semana</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#3" data-toggle="tab">Mês</a>
        </li>
    </ul>
      <!--SALES DAY-->
			<div class="tab-content ">
			  <div class="tab-pane active" id="1">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($order_day as $obj)
                  
                    <tr>
                        <th scope="row">{{$obj->id}}</th>
                        <td><?php $name = explode(" ",$obj->name_customer); echo $name[0]; ?></td>
                        <td>R$: {{$obj->amount}}</td>
                        <td>
                            @if($obj->form_of_payment == 0)
                                Á vista
                            @elseif($obj->form_of_payment == 1)
                                Cartão de Credito
                            @elseif($obj->form_of_payment == 2)
                                Cartão de Debito
                            @elseif($obj->form_of_payment == 3)
                                Crediario
                            @elseif($obj->form_of_payment == 4)
                                PIX
                            @else
                                Não listado
                            @endif
                        </td>
                        <td><form action="{{ route('sales.destroy',$obj->id) }}" method="PUT" style="" class="form-inline">
                                <a class="btn btn-primary" style="color:white; margin-right:10px;" href="/admin/order/reprint/{{$obj->id}}">Visualizar</a>

                                @csrf
                                @method('PUT')
                                <a class="btn btn-danger" style="color:white; margin-right:10px;" href="/admin/sales/destroy/{{$obj->id}}">Desativar</a>
                            </form>
                        </td>
                    </tr>
                  
                @endforeach
                </tbody>
              </table>
              <a href="{{url('/day')}}" class="btn btn-primary"><i class="fa fa-print"></i> Preparar impressão</a>
            <div class="paginator">
              {{ $order_day->links() }} 
            </div>
        </div>
        <!--SALES WEEK-->
				<div class="tab-pane" id="2">
        <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($order_week as $obj)
                    <tr>
                    <th scope="row">{{$obj->id}}</th>
                    <td><?php $name = explode(" ",$obj->name_customer); echo $name[0]; ?></td>
                    <td>R$: {{$obj->amount}}</td>
                    <td>
                        @if($obj->form_of_payment == 0)
                            Á vista
                        @elseif($obj->form_of_payment == 1)
                            Cartão de Credito
                        @elseif($obj->form_of_payment == 2)
                            Cartão de Debito
                        @elseif($obj->form_of_payment == 3)
                            Crediario
                        @elseif($obj->form_of_payment == 4)
                            PIX
                        @else
                            Não listado
                        @endif
                    </td>
                    <td><form action="{{ route('additional.destroy',$obj->id) }}" method="POST" style="" class="form-inline">                        
                            <a class="btn btn-primary" style="color:white; margin-right:10px;" href="/admin/order/reprint/{{$obj->id}}">Visualizar</a>
                            @csrf
                            @method('PUT')
                            <a class="btn btn-danger" style="color:white; margin-right:10px;" href="/admin/sales/destroy/{{$obj->id}}">Desativar</a>
                        </form>
                    </td>
                    </tr>
                    <tr>
                @endforeach
                </tbody>
              </table>
              <a href="{{url('/week')}}" class="btn btn-primary"><i class="fa fa-print"></i>Preparar impressão</a>
            <div class="paginator">
              {{ $order_week->links() }} 
            </div>
        </div>
        
        <!--SALES MONTH-->
        <div class="tab-pane" id="3">
        <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($order_month as $obj)
                    <tr>
                    <th scope="row">{{$obj->id}}</th>
                    <td><?php $name = explode(" ",$obj->name_customer); echo $name[0]; ?></td>
                    <td>R$: {{$obj->amount}}</td>
                    <td>
                        @if($obj->form_of_payment == 0)
                            Á vista
                        @elseif($obj->form_of_payment == 1)
                            Cartão de Credito
                        @elseif($obj->form_of_payment == 2)
                            Cartão de Debito
                        @elseif($obj->form_of_payment == 3)
                            Crediario
                        @elseif($obj->form_of_payment == 4)
                            PIX
                        @else
                            Não listado
                        @endif
                    </td>
                    <td><form action="{{ route('additional.destroy',$obj->id) }}" method="POST" style="" class="form-inline">
                            <a class="btn btn-primary" style="color:white; margin-right:10px;" href="/admin/order/reprint/{{$obj->id}}">Visualizar</a>

                            @csrf
                            @method('PUT')
                            <a class="btn btn-danger" style="color:white; margin-right:10px;" href="/admin/sales/destroy/{{$obj->id}}">Desativar</a>
                        </form>
                    </td>
                    </tr>
                    <tr>
                @endforeach
                </tbody>
              </table>
              <a href="{{url('/month')}}" class="btn btn-primary"><i class="fa fa-print"></i>Preparar impressão</a>
            <div class="paginator">
              {{ $order_month->links() }} 
            </div>
				</div>
			</div>
  </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
