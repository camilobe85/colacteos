<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Economía Solidaria</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/slider.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/lateral.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/cards.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/docs.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/tablefilter.css') }}" rel="stylesheet">
    @yield('css')
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <table><tr><td><img src="assets/images/logoES.svg" style = "width:25px" alt="" /></td><td style="padding-left:20px;color:white;text-shadow: 2px 2px #000000;"><b>Economía Solidaria</b></td></tr></table>
                    
                    
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Iniciar curso</a></li>
                    <!-- Authentication Links -->
                    @if (!Auth::guest())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Unidades <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/unidad1') }}"><i class="fa fa-btn fa-book"></i>Unidad I</a></li>
                                <li><a href="{{ url('/unidad2') }}"><i class="fa fa-btn fa-book"></i>Unidad II</a></li>
                                <li><a href="{{ url('/unidad3') }}"><i class="fa fa-btn fa-book"></i>Unidad III</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/actividades') }}">Actividades</a></li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Ingresar al curso</a></li>
                        <li><a href="{{ url('/register') }}">Registrarse en el curso</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bs-docs-footer">
    <div class="container">
        <div class="row">
        <div class="col-md-6 col-sm-6 footerleft ">
            <div class="logofooter"> 
            <a href="http://www.colacteos.com/" target="blank"><img class="logopie" src="assets/images/colacteos.svg" alt="" style="max-width: 150px;"/> </a>
            <a href="https://www.facebook.com/Indesco/" target="blank"><img class="logopie" src="assets/images/indesco.svg" alt="" style="max-width: 100px;"/> </a>
            <a href="http://www.ucc.edu.co/pasto/Paginas/inicio.aspx" target="blank"><img class="logopie" src="assets/images/cooperativa.svg" alt="" style="max-width: 100px;"/> </a>
            
            </div>
            <p><b>Curso desarrollado en alianza entre la Cooperativa de Productos Lácteos de Nariño Ltda. y el Instituto de Economía Social y Cooperativismo de la Universidad Cooperativa de Colombia - Sede Pasto</b></p>
            <br>
            <p><i class="fa fa-map-pin"></i>Cra 36 No. 13-26 Av. Panamericana, Pasto - Nariño - Colombia</p>
            <p><i class="fa fa-phone"></i> Teléfono (Pasto) : +57 (2) 7333777 - +57 (2) 7228822 Ext. 2181-2191 </p>
            <p><i class="fa fa-envelope"></i> E-mail : <a href="correo@colacteos.com">correo@colacteos.com</a></p>
            <br>
            <h6 class="heading7">LINKS</h6>
            <ul class="footer-ul">
                <li><a href="#"> Ingresar</a></li>
                <li><a href="#"> Registrar</a></li>
                <li><a href="#"> Terminos & Condiciones</a></li>
                <li><a href="#"> Preguntas frecuentes</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-6 paddingtop-bottom">
            <h6 class="heading7">Últimas publicaciones | <a href="https://www.facebook.com/ColacteosOficial/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></h6>

            <div class="post" style="background-color: white;padding: 15px;border-radius: 6px;    -webkit-box-shadow: inset 2px 2px 5px 0px rgba(0,0,0,0.75);    -moz-box-shadow: inset 2px 2px 5px 0px rgba(0,0,0,0.75);    box-shadow: inset 2px 2px 5px 0px rgba(0,0,0,0.75);">
            <script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
            <link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
            <ul class="juicer-feed" data-feed-id="indesco" data-per="10"></ul>
            </div>
            
        </div>
        <!--<div class="col-md-3 col-sm-6 paddingtop-bottom">
            <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/Indesco/?fref=ts"><a href="https://www.facebook.com/Indesco/?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></blockquote>
                </div>
            </div>
        </div>-->
        </div>
    </div>
    </footer>
    <!--footer start from here-->

    <div class="copyright">
    <div class="container">
        <div class="col-md-6">
        <p>© 2017 - All Rights with <a href="#">Indesco</a></p>
        </div>
        <div class="col-md-6">
        <!--<ul class="bottom_ul">
            <li><a href="#">indesco.com</a></li>
            <li><a href="#">Sobre nosotros</a></li>
            <li><a href="#">Faq's</a></li>
            <li><a href="#">Contactanos</a></li>
        </ul>-->
        
        </div>
    </div>
    </div>

    <!-- back to top -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click para retornar al inicio" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

    <!-- JavaScripts -->
    
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script>
    $(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});

/*hide logo*/
var timefunction = 200, timef = 200;
for (var i = 0; i < 10; i++) {
    setTimeout(hideLogo, timef);
    timef += timefunction;
}

function hideLogo(){
    /*$('.referral').fadeOut( "slow" );
    $('.juicer').fadeOut( "slow" ); */
    $('.referral').hide();
    $('.juicer').hide(); 
}
    </script>
    @yield('scripts')
</body>
</html>
