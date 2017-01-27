<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
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

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
  
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                           <a href="{{ url('/status') }}">Estatus</a>
                    <a href="{{ url('/popularorganization') }}">Organizaciones Populares</a>
                    <a href="">Unidades de producción</a>
                    <a href="">Redes sociales</a>
                    <a href="">Comunidades indígenas</a>
                    @endif
                </div>
            @endif

            <div class="lead">
               <blockquote>
                El RUNOPPA 2.0 es un software que permitirá mejorar los procesos de registro y
las estadı́sticas del Ministerio de Agricultura Productiva y Tierras. La intención
del registro es que el proceso sea sencillo y amigable para los productores
del paı́s. Debido a esto la nueva versión del sistema se conceptualiza como
un autoregistro que permita a los productores poder certificarse en cualquier
momento de manera rápida.
El autoregistro consta de dos fases; una de carga de información y otra de
validación por medio de un baremo que indicará quien certifica como productor,
en este último paso aquellos que no certifiquen como productores mediante el
baremo, serán inspeccionados para validar la información y de cumplir con las
condiciones, serán certificados.
Además de esto, el proceso de autoregistro se fortalecerá con procesos de
auditorías para aquellos productores que se encuentre certificados, mediante la
toma de muestras estadisticamente significativas que permita darle fiabilidad
respecto a la calidad de la información que ofrecerá. Para registrar sus datos hacer <a href="{{ url('/producer') }}"> click aquí</a>
                
        </blockquote>         
                    
                    
                

                <div class="links">
                 
                </div>
            </div>
        </div>
    </body>
</html>
