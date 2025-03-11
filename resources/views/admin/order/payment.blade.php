@extends('adminlte::page')

@section('title', 'Pagamento')

@section('content_header')
    <h1>Pagamento</h1>
@stop

@section('content')
<!DOCTYPE html>
<html>
<head>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-12">
            <div class="card d-flex justify-content-center  align-items-center bg-transparent border-none">
                <img class="card-img-top" src="{{$internal_settings['logo']->value}}" alt="Card image cap" style="width:100%; max-width: 300px">
                <div class="card-body">
                    <h5 class="card-title text-center" style="font-size: 55px; color: #A52A2A;">Valor: R$ {{number_format($value, 2, '.', '')}}</h5>
                    <button class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#cancel">Cancelar pedido</button>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-12">
            <div class="card" style="border-radius: 10px; width: 100%; background-color: #FF5733; margin-bottom: 5px" >
                <div class="card-body" align="center">
                    <h5 class="card-title" style="font-size: 30px;">
                        <i class="fas fa-money-bill-wave"></i> Dinheiro
                    </h5>
                    <div class="row" style="display: flex;align-items: center;justify-content: center">
                      <div class="col-xs" style="margin: 0">
                        <label style="color: black" for="ex3">R$:</label>
                      </div>
                      <div class="col-xs ">
                        <input type="number" class="form-control" value="{{ $value_money }}" name="value_money" id="value_money">
                      </div>
                    </div>
                    <button class="btn btn-success" id="confirm_paid" style="margin-top: 10px">Confirmar</button>
                </div>
            </div>
            <div class="card" style="border-radius: 10px; width: 100%; background-color: #00AEFF; margin-bottom: 5px" >
                <div class="card-body">
                    <h5 class="card-title text-center" style="font-size: 30px">
                    <i class="fas fa-paper-plane"></i> PIX
                    </h5>
                    <div align="center">
                      <button class="btn btn-success" data-toggle="modal" data-target="#pix">Confirmar</button>
                    </div>
                </div>
            </div>
            <div class="card" style="border-radius: 10px; width: 100%; background-color: #FFA600; margin-bottom: 5px" >
                <div class="card-body">
                    <h5 class="card-title text-center" style="font-size: 30px">
                        <i class="fas fa-credit-card"></i> Cartão
                    </h5>
                    <div align="center">
                      <button class="btn btn-info" data-toggle="modal" data-target="#cartaocredito">Credito</button>
                      <button class="btn btn-warning" data-toggle="modal" data-target="#cartaodebito">Debito</button>
                    </div>
                </div>
            </div>
            <div class="card" style="border-radius: 10px; width: 100%; background-color: #F44336" >
                <div class="card-body">
                    <h5 class="card-title text-center" style="font-size: 30px">
                        <i class="fas fa-book"></i> Crediario
                    </h5>
                    <div align="center">
                      <button class="btn btn-success" data-toggle="modal" data-target="#crediario">Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Modal Á vista-->
  <div class="modal fade" tabindex="-1" id="money" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Dinheiro</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" id="value">
        </div>
        <div class="modal-footer ">
            <form method="post" action="{{url('/admin/order/register')}}" enctype="multipart/form-data" id="form_credit">
            @csrf
                <div id="change"></div>
                <input type="text" id="name_form" name="name" value="{{ $name }}" style="display: none" />
                <input type="hidden" id="value_form" name="value" value="{{ $value }}" />
                <input type="hidden" id="delivery_form" name="delivery" value="{{ $delivery }}" />
                <input type="text" id="address_form" name="address" value="{{ $address }}" style="display: none" />
                <input type="hidden" id="number_form" name="number" value="{{ $number }}" />
                <input type="hidden" id="desk" name="desk" value="{{ $desk }}" />

                @foreach ($list as $i => $li)
                    <input type="hidden" id="list_form" name="list[{{$i}}]" value="{{ $list[$i] }}" />
                @endforeach
                <input type="hidden" id="trip_form" name="trip" value="{{ $trip }}" />

                <input type="hidden" id="form_of_payment_form" name="form_of_payment" value="0" />
                <button type="submit" id="money_confirm" class="btn btn-success">Confirmar</button>
            </form>
            <button type="button"  class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
<!-- End -->

   <!-- Modal Catão de Debito -->
   <div class="modal fade" id="cartaodebito" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Cartão Debito</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <p style="font-size: 35px; text-align: center">Pagamento efetuado?</p>
          <br/>
          <p style="font-size: 35px;text-align: center;color: red; " >Valor R$:{{number_format($value_debt, 2, '.', '')}}</p>
        </div>
        <div class="modal-footer ">
        <form method="post" action="{{url('/admin/order/register')}}" enctype="multipart/form-data" id="form_credit">
            @csrf
                <input type="hidden" id="name_form" name="name" value="{{ $name }}" />
                <input type="text" id="address_form" name="address" value="{{ $address }}" style="display: none" />
                <input type="hidden" id="number_form" name="number" value="{{ $number }}" />
                <input type="hidden" id="name_form" name="name" value="{{ $name }}" />
                <input type="hidden" id="value_form" name="value" value="{{ $value }}" />
                <input type="hidden" id="desk" name="desk" value="{{ $desk }}" />
                <input type="hidden" id="delivery_form" name="delivery" value="{{ $delivery }}" />
                @foreach ($list as $i => $li)
                    <input type="hidden" id="list_form" name="list[{{$i}}]" value="{{ $list[$i] }}" />
                @endforeach
                <input type="hidden" id="trip_form" name="trip" value="{{ $trip }}" />

                <input type="hidden" id="form_of_payment_form" name="form_of_payment" value="2" />
                <button type="submit"  id="cdebit_confirm" class="btn btn-success">Confirmar</button>
            </form>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
<!-- End -->
<!-- Modal pix-->
<div class="modal fade" id="pix" role="dialog">
    <div id="blanket"></div>
    <div id="aguarde">Aguarde...</div>
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">PIX</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p style="font-size: 35px; text-align: center">Pagamento efetuado?</p>
          <br/>
          <p style="font-size: 35px;text-align: center;color: red; " >Valor R$:{{number_format($value_pix, 2, '.', '')}}</p>
        </div>
        <div class="modal-footer ">
        <form method="post" action="{{url('/admin/order/register')}}" enctype="multipart/form-data" id="form_pix">
            @csrf
            <input type="text" id="address_form" name="address" value="{{ $address }}" style="display: none" />
            <input type="hidden" id="desk" name="desk" value="{{ $desk }}" />

                <input type="hidden" id="number_form" name="number" value="{{ $number }}" />
                <input type="hidden" id="name_form" name="name" value="{{ $name }}" />
                <input type="hidden" id="value_form" name="value" value="{{ $value }}" />
                <input type="hidden" id="delivery_form" name="delivery" value="{{ $delivery }}" />
                @foreach ($list as $i => $li)
                    <input type="hidden" id="list_form" name="list[{{$i}}]" value="{{ $list[$i] }}" />
                @endforeach
                <input type="hidden" id="trip_form" name="trip" value="{{ $trip }}" />

                <input type="hidden" id="form_of_payment_form" name="form_of_payment" value="4" />
                <button type="submit" id="pix_confirm" class="btn btn-success">Confirmar</button>
            </form>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
<!-- End -->
<!-- Modal Cartão de credito-->
   <div class="modal fade" id="cartaocredito" role="dialog">
    <div id="blanket"></div>
    <div id="aguarde">Aguarde...</div>
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Cartão de credito</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p style="font-size: 35px; text-align: center">Pagamento efetuado?</p>
          <br/>
          <p style="font-size: 35px;text-align: center;color: red; " >Valor R$:{{number_format($value_credit, 2, '.', '')}}</p>
        </div>
        <div class="modal-footer ">
        <form method="post" action="{{url('/admin/order/register')}}" enctype="multipart/form-data" id="form_credit">
            @csrf
            <input type="text" id="address_form" name="address" value="{{ $address }}" style="display: none" />
            <input type="hidden" id="desk" name="desk" value="{{ $desk }}" />

                <input type="hidden" id="number_form" name="number" value="{{ $number }}" />
                <input type="hidden" id="name_form" name="name" value="{{ $name }}" />
                <input type="hidden" id="value_form" name="value" value="{{ $value }}" />
                <input type="hidden" id="delivery_form" name="delivery" value="{{ $delivery }}" />
                @foreach ($list as $i => $li)
                    <input type="hidden" id="list_form" name="list[{{$i}}]" value="{{ $list[$i] }}" />
                @endforeach
                <input type="hidden" id="trip_form" name="trip" value="{{ $trip }}" />

                <input type="hidden" id="form_of_payment_form" name="form_of_payment" value="1" />
                <button type="submit" id="ccredit_confirm" class="btn btn-success">Confirmar</button>
            </form>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
<!-- End -->

<!-- Modal Crediario-->
   <div class="modal fade" id="crediario" role="dialog">
    <div id="blanket"></div>
    <div id="aguarde">Aguarde...</div>
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Crediario</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p style="font-size: 35px; text-align: center">Deseja realmente usar esse metodo?</p>
          <br/>
          <p style="font-size: 35px;text-align: center;color: red; " >Valor R$:{{number_format($value_paid, 2, '.', '')}}</p>
          <form method="post" action="{{url('/admin/order/register')}}" enctype="multipart/form-data" id="form_credit">
            @csrf
          <div class="form-group">
            <label for="client">Selecione o cliente</label>
            <select class="form-control" id="client" name="client">
            @foreach($customers as $client)
              <option value="{{$client->id}}">{{$client->name}} || {{$client->telephone}}</option>
            @endforeach
            </select>
          </div>
        </div>
        <div class="modal-footer ">

            <input type="hidden" id="desk" name="desk" value="{{ $desk }}" />

            <input type="text" id="address_form" name="address" value="{{ $address }}" style="display: none" />
                <input type="hidden" id="number_form" name="number" value="{{ $number }}" />
                <input type="hidden" id="name_form" name="name" value="{{ $name }}" />
                <input type="hidden" id="value_form" name="value" value="{{ $value }}" />
                <input type="hidden" id="delivery_form" name="delivery" value="{{ $delivery }}" />

                @foreach ($list as $i => $li)
                    <input type="hidden" id="list_form" name="list[{{$i}}]" value="{{ $list[$i] }}" />
                @endforeach
                <input type="hidden" id="trip_form" name="trip" value="{{ $trip }}" />

                <input type="hidden" id="form_of_payment_form" name="form_of_payment" value="3" />
                <button type="submit" id="crediary_confirm" class="btn btn-success">Confirmar</button>
            </form>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
<!-- End -->

  <!-- Modal Cancelamento-->
  <div class="modal fade" id="cancel" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Confirmação de cancelamento</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p style="font-size: 30px; text-align: center">Tem certeza que deseja cancelar?</p>
          <p style="font-size: 25px; text-align: center; color: red;">Se confirmada não podera reverter a operação</p>
        </div>
        <div class="modal-footer ">
            <a href="/admin/order" class="btn btn-success">Confirmar</a>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>

    </div>
  </div>
<!-- End -->

  <!-- Modal Keys-->
  <div class="modal fade" id="key" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Senhas - Selecione para entregar pedido</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding: 10px">
                        @foreach($keys as $key)
                        <div class="col-3" style="margin-bottom:20px;" id="key{{$key->id}}">
                            <key class="btn btn-primary" id="{{$key->id}}" onclick="toca();">
                                <i class="fa fa-key"></i>
                                {{$key->key}}
                            </key>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>

  <div id="blanket"></div>
<div id="aguarde">Aguarde...</div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="{{asset('/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="{{ asset('js/loading.js') }}"></script>
<script src="{{asset('js/keys.js')}}"></script>
<script>
jQuery(document).ready(function($){
    var value_total = {{ $value_money }}

    $('#confirm_paid').click(function(){
        value_money = Number($('#value_money').val())
        change = parseFloat(value_money) - parseFloat(value_total)
        console.log("c: "+change)
        console.log("v_m: "+value_money)
        console.log("v_t: "+value_total)

        if(change >= 0){
            $('#money').modal('show');
            $('#value').empty()
            $('#value').append(
                '<p style="font-size: 65px; text-align: center">'+"Troco: R$ "+change.toFixed(2)+'</p>'
            )
            $('#change').empty()
            $('#change').append(
                '<input type="hidden" name="change" value='+change.toFixed(2)+'></input>'+
                '<input type="hidden" name="value_payment" value='+value_money.toFixed(2)+'></input>'
            )
        }

    })
    $('#aguarde, #blanket').css('display','none');

})

</script>
<script>
    function toca(){
      audio = document.getElementById('audio')
      audio.play()
    }
</script>
@stop
