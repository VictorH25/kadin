<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$internal_settings['name']->value}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap-select.css') }}">
        <style>
            html, body {
                background-color: #8C0001;
                color: #f4f4f4;
                font-family: 'Nunito', sans-serif;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            @media (max-width: 720px) {
                body{

                }
            }
            footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            }
        </style>
    </head>
    <body>

        <header class="container-fluid" style="height: 5vh">
            @if (Route::has('login'))
    <nav class="d-flex justify-content-end mt-2" >
        @auth
                <a href="{{ url('/admin') }}" class="btn btn-light font-weight-bold ml-2 text-dark" >Administrativo</a>
            @if($internal_settings['monitor']->value == 1)
                <a href="{{ url('/admin/password') }}" class="btn btn-light text-dark font-weight-bold ml-2">Senhas</a>
            @endif
            @else
                <a href="{{ route('login') }}" class="btn btn-light text-dark font-weight-bold ml-2">Login</a>
            @endauth
    </nav>
@endif

        </header>
        <main class="container">
            <div class="row d-flex " style="height: 80vh">
                <div class="col-sm d-flex justify-content-center  align-items-center">
                    <img src="{{$internal_settings['logo']->value}}" style="width: 100%; max-width:600px;" id="logo">
                </div>

            </div>
        </main>
    </body>
    <footer class="bg-dark">
        <div class="container" style="height: 5vh">
          <div class="d-flex justify-content-between mt-3">
            <a class="text-light" href="https://phicoding.com/public">Copyright &copy; Phicoding</a>
            <p class="">Contato: (82) 9 9990-4881</p>
          </div>
        </div>
      </footer>


</html>
