@extends('adminlte::page')

@section('title', 'Comanda - Restaurante')

@section('content_header')
    <h1>Fazer pedido</h1>
@stop

@section('content')

<div class="container" >
    <div id="errorMessage">
        
    </div>
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group" id="address_row">
                
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group" id="address_number">
                
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-3">
            <div class="card" id="category">
                <div class="bg-body text-light card-header border-0">
                    <strong class="card-title">Categoria</strong>
                </div>                
                <div class="card-body">
                    <div id="categories">
                    @foreach($types as $type)
                        <div class="item ml-2 mr-2 mb-1 p-2 rounded item shadow-sm category" type="{{ $type->id }}">
                            {{ $type->name }}
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card" id="iproducts">
                <div class="bg-body text-light card-header border-0">
                    <strong class="card-title">Produto</strong>
                </div>
                <div class="card-body" id="productsRestaurant">
                </div>
            </div>            
        </div>

        <div class="col-lg-3">
            <div class="card" id="iadditionaliss">
                <div class="card-header text-light border-0 bg-body">
                    <strong class="card-title">Adicional</strong>
                </div>
                <div class="card-body" id="adittionalRestaurant">
                    
                </div>
            </div>
        </div>
        
        <div class="col-lg-3">
            <div class="card" id="command">
                <div class="bg-body text-light card-header border-0">
                    <strong class="card-title">Comanda</strong>
                </div>
                <div class="card-body" id="commands">
                                       
                </div>
                <div class="card-footer">
                    <p class="text-xl text-center font-weight-bolder" id="value"></p>
                    <form method="post" action="{{url('/admin/tables_restaurant/print')}}" enctype="multipart/form-data" id="form">
                    @csrf
                        <textarea type="textarea" id="name_form" name="name" style="display:none">{{$orders->name_customer}}</textarea>
                        <input type="hidden" id="delivery_form" name="delivery" value="{{$orders->delivery}}" />
                        <textarea type="textarea" id="address_form" name="address" style="display:none"></textarea>
                        <input type="hidden" id="number_form" name="number" />
                        <input type="hidden" id="key" name="key" value="{{$orders->key}}" />
                        <input type="hidden" id="order_id" name="order_id" value="{{$orders->id}}"/>
                        <input type="hidden" id="trip_form" name="trip" value="0" />
                        <input type="hidden" id="desk" name="desk" value="{{$orders->desk}}" />
                        <input type="hidden" id="client_id" name="client_id" />
                        <button class="btn btn-danger btn-block" id="buy">Finalizar</button>
                    </form>
                </div>
                
            </div>
            
        </div>
    </div>



</div>

    </div>
</div>
<div id="blanket"></div>
<div id="aguarde">Aguarde...</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/order/index.css">
@stop

@section('js')
<script src="{{ asset('/js/tables_restaurant/orderRestaurant.js') }}"></script>
<script>
    $(document).ready(function() {
        $("body").on("contextmenu", function() {
            return false;
        }); 
    });

    $('.category').click(function() {
        console.log('category');
    });

    $('.iproduct').click(function() {
        console.log('product');
    });

    $('.iadditionaliss').click(function() {
        console.log('additionalis');
    });

    $('.delete-item').click(function() {
        console.log('delete-item');
    });
    $(document).ready(function() {
    $('.category').each(function() {
        var typeName = $(this).text().trim();
        console.log(typeName);
    });
});

</script>

@stop
