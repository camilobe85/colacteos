@extends('layouts.app')

@section('content')


<div class="container">
    <h3>Curso de Economía Solidaria</h3>
    <p>Bienvenido al curso de Economía solidaria, te invitamos a examinar cada unidad para completar el contenido y las actividades correspondientes:</p>
    <br>
        <div class="row">
            <!--Unidad1-->
            <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
                <div class="card">
                    <img class="card-img-top" src="assets/images/1.jpg">
                    <div class="card-block">
                        <h4 class="card-title">Unidad 1</h4>
                        <div class="meta">
                            <a href="#">HISTORIA DEL COOPERATIVISMO</a>
                        </div>
                        <div class="card-text">
                            La idea y la práctica de la Cooperación aplicadas a la solución de problemas económicos aparecen en las primeras etapas de la civilización. Muy pronto los hombres se dan cuenta de la necesidad de unirse con el fin de obtener los bienes y servicios indispensables.<br><br><br>
                        </div>
                    </div>
                    <div class="card-footer">
                        <!--<span class="float-right">Joined in 2013</span>
                        <span><i class=""></i>75 Friends</span>-->
                        <a class="btn btn-info float-right btn-sm" href="{{ url('/unidad1') }}">Ver Unidad</a>
                    </div>
                </div>
            </div>

            <!--Unidad2-->
            <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
                <div class="card">
                    <img class="card-img-top" src="assets/images/2.jpg">
                    <div class="card-block">
                        <h4 class="card-title">Unidad 2</h4>
                        <div class="meta">
                            <a href="#">PRINCIPIOS Y VALORES DE LA ECONOMÍA SOLIDARIA</a>
                        </div>
                        <div class="card-text">
                            La economía solidaria es una forma diferente de hacer economía, cuya característica primordial es satisfacer las necesidades del ser humano.<br><br><br><br>
                        </div>
                    </div>
                    <div class="card-footer">
                        <!--<span class="float-right">Joined in 2013</span>
                        <span><i class=""></i>75 Friends</span>-->
                        <a class="btn btn-info float-right btn-sm" href="{{ url('/unidad2') }}">Ver Unidad</a>
                    </div>
                </div>
            </div>

            <!--Unidad1-->
            <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
                <div class="card">
                    <img class="card-img-top" src="assets/images/3.jpg">
                    <div class="card-block">
                        <h4 class="card-title">Unidad 3</h4>
                        <div class="meta">
                            <a href="#">EL SECTOR SOLIDARIO Y SUS ORGANIZACIONES</a>
                        </div>
                        <div class="card-text">
                            Las organizaciones del sector solidario surgen por iniciativa de una comunidad que decide asociarse a través de la cooperación y la ayuda mutua, uniendo recursos humanos y económicos como herramientas para resolver los problemas y/o necesidades o desarrollar proyectos productivos comunes para el bienestar de ese colectivo.
                        </div>
                    </div>
                    <div class="card-footer">
                        <!--<span class="float-right">Joined in 2013</span>
                        <span><i class=""></i>75 Friends</span>-->
                        <a class="btn btn-info float-right btn-sm" href="{{ url('/unidad3') }}">Ver Unidad</a>
                    </div>
                </div>
            </div>
            <!--Fin Unidades-->
            
        </div>
     
</div>
<br><br><br>
@endsection
