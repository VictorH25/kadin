@extends('adminlte::page')

@section('title', 'Listar Ordem')

@section('content_header')
    <h1>Listar Ordem</h1>
@stop

@section('content')
<div class="container" >
    <div id="cont">
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form method="post" action="{{url('/admin/order/payment')}}" enctype="multipart/form-data" id="form">
    @csrf
        <div class="row">
            @if($internal_settings['desk']->value == 1)
                <div class="col-lg-8">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <input type="text" class="form-control" name="desk_valid" id="desk_valid" value="1" hidden>
                        <select name="desk" id="desk" class="form-control">
                        <option value="0">Sem Mesa</option> 
                        @for ($i = 1; $i <= $internal_settings['number_of_tables']->value; $i++)
                            <option value="{{$i}}">Mesa: {{$i}}</option> 
                        @endfor
                        </select>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="delivery">
                        <label class="form-check-label" for="delivery">Delivery</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="trip">
                        <label class="form-check-label" for="trip">Viagem</label>
                    </div>
                </div>
            @else
                <input type="text" class="form-control" id="desk_valid" value="0" hidden>

                <div class="col-lg-10">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="delivery">
                        <label class="form-check-label" for="delivery">Delivery</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="trip">
                        <label class="form-check-label" for="trip">Viagem</label>
                    </div>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-10">
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
                    
                        <button class="btn btn-danger btn-block" id="buy">Finalizar</button>
                    </form>
                </div>
                
            </div>
            
        </div>
        </div>
    </form> 
</div>
<div id="blanket"></div>
<div id="aguarde">Aguarde...</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/order/index.css">
@stop

@section('js')
<script src="{{asset('js/newOrder.js')}}"></script>
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
