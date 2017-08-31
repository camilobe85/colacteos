@extends('layouts.app')

@section('content')

<!--SLIDE -->

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay 
  <div class="overlay"></div>-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero"> 
      <hgroup>
            <h1>Economía Solidaria</h1>        
            <h3>Curso virtual  introductorio</h3>
        </hgroup>       
        <a class="btn btn-default btn-lg" role="button" href="info">Más información</a> 
        
        
      </div>
    </div>
    <div class="item slides ">
      <div class="slide-2"></div>
      <div class="hero">
       
        @if (Auth::guest())
             <hgroup>
            <h1>Bienvenido</h1>        
            <h3>Registrate para empezar el proceso de aprendizaje</h3>
        </hgroup>
        <a class="btn btn-default btn-lg" role="button" href="register">Registrarse</a>
      @else
          <hgroup>
            <h1>Bienvenido</h1>        
            <h3>Gracias por registrase</h3>
        </hgroup>       
        <a class="btn btn-default btn-lg" role="button" href="home">Ir a unidades</a>
      @endif 
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>CONOCENOS</h1>        
            <h3>Conoce a las instituciones que lideran este curso</h3>
        </hgroup>
        <a class="btn btn-default btn-lg" role="button" href="login">Más información</a>
      </div>
    </div>
  </div> 
</div>

<!--/Slide-->
<!--
<div class="container">
<div class="row">
<div class="col-xs-12 col-md-12">
<h3>Contenido del curso de Economía Solidaria</h3>
<p>El curso en Formación Virtual en Economía Solidaria es un camino para replicar en nuestra vida diaria con grandes resultados de cambios personales y profesionales, a continuación hacemos referencia a el contido de cada unidad:</p>
<br>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Unidad 1 - HISTORIA DEL COOPERATIVISMO
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <li><strong>Primera parte: La cooperaci&oacute;n y la solidaridad como un hecho recurrente en la historia</strong>
        <ul>
        <li>La cooperaci&oacute;n en la comunidad primitiva</li>
        <li>Formas de cooperaci&oacute;n en la sociedad esclavista</li>
        <li>Otras asociaciones antiguas</li>
        <li>Formas de cooperaci&oacute;n de la sociedad feudal</li>
        </ul>
        </li>
        </ul>
        <p>&nbsp;</p>
        <ul>
        <li><strong>Segunda parte: Precursores de las ideas cooperativas y la econom&iacute;a solidaria</strong>
        <ul>
        <li>Peter Cornelius Plocboy y las peque&ntilde;as Rep&uacute;blicas</li>
        <li>Jhon Bellers y las colonias de trabajo colectivo</li>
        <li>Robert Owen: Las cooperativas integrales y los almacenes de consumo</li>
        <li>Charles Fourier: los Falansterios y Almacenes de Consumo</li>
        </ul>
        </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Unidad 2 - PRINCIPIOS Y VALORES DE LA ECONOMÍA SOLIDARIA
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <ul>
        <li><strong>&iquest;Qu&eacute; se entiende por econom&iacute;a solidaria?</strong></li>
        <li><strong>Principios de la econom&iacute;a solidaria</strong></li>
        <li><strong>Fines de la Econom&iacute;a Solidaria</strong></li>
        <li><strong>Valores de la Econom&iacute;a Solidaria</strong></li>
        <li><strong>Identidad cooperativa</strong>
        <ul>
        <li>La marca cooperativa &ldquo;coop&rdquo;</li>
        </ul>
        </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Unidad 3 - EL SECTOR SOLIDARIO Y SUS ORGANIZACIONES
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <ul>
        <li><strong>COOPERATIVAS</strong></li>
        <li><strong>PRECOOPERATIVAS</strong></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<br><br>
</div>
-->
<div class="container">
  <center> 
    <div align="center" class="video embed-responsive embed-responsive-16by9" >
    <video class="video embed-responsive-item" poster={{ asset('assets/images/poster.jpg') }}>
        <source src={{ asset('assets/images/v1.mp4') }} type="video/mp4">
    </video>
</div>
    <!--<h4 style="color: gray">
    Curso desarrollado en alianza entre la 
    <h3 style="color: #003767">Cooperativa de Productos Lácteos de Nariño Ltda.</h3> 
    <h4 style="color: gray">y el</h4><h3 style="color: green"> Instituto de Economía Social y Cooperativismo de la 
    <br>Universidad Cooperativa de Colombia - Sede Pasto</h3>
    </h4>-->
  </center>
</div>
@endsection
@section('scripts')
<script>
$('video').click(function(){this.paused?this.play():this.pause();});
</script>
@endsection
