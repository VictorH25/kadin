@extends('adminlte::page')

@section('title', 'Rafa Lanches Admin')

@section('content_header')
    <h1>Rafa Lanches Admin</h1>
@stop

@section('content')
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Rafa Lanches Admin</title>
        <meta name="description" content="Rafa Lanches Admin">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/themify-icons.css">
        <link rel="stylesheet" href="/css/flag-icon.min.css">
        <link rel="stylesheet" href="/css/cs-skin-elastic.css">   
        <!-- <link rel="stylesheet" href="/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="/scss/style.css">
        <link href="/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <style>
            html, body{
                width: 100%;
                height: 100%;
            }
            .container{

            }

            /* Small devices (tablets, 768px and up) */
            @media (min-width: @screen-sm-min) { 
                
             }

            /* Medium devices (desktops, 992px and up) */
            @media (min-width: @screen-md-min) { 
           
             }

            /* Large devices (large desktops, 1200px and up) */
            @media (min-width: @screen-lg-min) { 
               
             }


        </style>
</head>
<body>
    <div class="container-fluid" style="background-color: black">
        <div class="row" style="background-color: white">
            <div class="col-md-3">
                <img src="/img/logo_principal.png" width="100%">
            </div>
            <div class="col-md-9">
                <p style="font-size: 850%; padding: 5%; color: black; text-align: center;" id="keys">
                    0 - 0 - 0
                </p>
            </div>
        </div>
        <div class="row" style="height: 540px; backgrond-color: black !important;">
            <div class="col-md-6" style="margin-top: 2%">
                <p style="color: yellow; font-size: 90px; margin-top: 3%;" class="text-center">
                    Senha atual
                </p>
                <p style="text-align: center; font-size: 300px; color: yellow; margin-top: 25%" id="key">
                    0
                </p>
                <p style="text-align: center; font-size: 120px; color: yellow; margin-top: 30%; padding: 10px " id="name">
                Josilmaramia</p>
            </div>
            <div class="col-md-6" style="margin-top: 3%">
                <div>
                    <img src="/img/slides/p1.png" width="100%" height="200%"/>
                </div>   
            </div>
        </div>
        <div class="row" style="background-color: white">
            <div class="col-md-12">
                <marquee scrollDelay=1 direction=right>
                    <p style="font-size: 600%; color: black; display: inline-block; margin-left: 5%; padding: 1%; margin-top: 1%">
                        Delivery: (82) 99927-9927 
                        <img src="/img/deli.png" width="10%" style="margin-top: -2%;">
                    </p>
                </marquee>
                
            </div>
        </div>
    </div>

    <!--
        <div class="row top" >
        <div class="col-4" id="logo">
            <img src="/img/logo3.png" class="logo"/>
        </div>
        <div class="col-8">
            <p class="oldkeys" id="keys"></p>
        </div>
    </div>
    <div class="row" class="d-inline-block" style="height: 63%">
        <div class="col-md-5 ">
        <p style="color: yellow; font-size: 90px; margin-top: 8%;" class="text-center">Senha atual</p>
                <p style="text-align: center; font-size: 300px; color: yellow; margin-top: 25%" id="key">
                </p>
                <p style="text-align: center; font-size: 120px; color: yellow; margin-top: 30%;  " id="name">
        </div>
        <div id="slideshow" class="col-md-7" style="margin-top: 1%;">
            <div>
                <img src="/img/slides/p1.png" width="100%" height="200%" />
            </div>            
        </div>
    </div>
    <div class="row bottom">
        <marquee scrollDelay=25  direction=right>
            <p style="font-size: 700%; color: black; padding: 1%; margin-top:2%!important; display: inline-block" >
                Delivery: (82) 99927-9927 
            </p>
            <img src="/img/deli.png" width="10%" style="margin-top: -5%">
        </marquee>
    </div>
</div>

-->
 
<script src="{{asset('/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('/js/popper/1.12.3/popper.min.js')}}"></script>
<script src="{{asset('/js/plugins.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('/js/lib/vector-map/jquery.vmap.js')}}"></script>
<script src="{{asset('/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
<script src="{{asset('/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
<script src="{{asset('/js/popper/1.14.3/popper.min.js')}}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
jQuery(document).ready(function($){

    $("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 100000);
var intervalo = window.setInterval(function() {    
    passwords = []
    passwordall = []

    //Get all products
    $.get({
        url:'/admin/password/getpassword/',
        dataType:'JSON',
        success:function(p){
            if(p != (undefined || null || '')){    
                passwords = p
                console.log("Senhas ok")
            }else{
                console.log("Erro ao receber senha")
            }
            if (passwords[0].length > 0){
                $('#keys').empty()
            }
            for(i = 0; i < passwords[0].length; i++){
                passwordall.push([
                    passwords[0][i]['id'],
                    passwords[0][i]['key'],
                    passwords[0][i]['name_customer']
                ])
            }
            if (passwordall.length < 2){
                $('#keys').append('0 - 0 - 0')
            }else{
                $('#keys').empty()    
            }
            for(i = 0; i < passwordall.length; i++){
                if(passwordall[i][1] == null){
                    passwordall[i][1] = ' ';
                }
            }
            $('#key').empty()
            $('#key').append(passwordall[0][1]+" ")
            $('#name').empty()
            $('#name').append(passwordall[0][2].split(' ')[0])
            for(i = 1; i < 4; i++){
                if(passwordall[i][1] != ' '){
                    switch (i) {
                        case 1:
                            $('#keys').append(passwordall[i][1])
                            break;
                        case 2:
                            $('#keys').append(' - '+passwordall[i][1])
                            break;
                        case 3:
                            $('#keys').append(' - '+passwordall[3][1])
                            break;
                    }
                    
                }
            }
            
                      
        },
        error:function(err){
            console.log(err)
        }
    })

}, 3000);
})

</script>
</body>
</html>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
