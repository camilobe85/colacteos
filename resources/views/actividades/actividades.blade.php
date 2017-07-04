@extends('layouts.app') 
@section('css') 
<link href="{{ asset('/assets/css/timeline.css') }}" rel="stylesheet">
@endsection 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 content-area">
            <form action="http://survey.patchesoft.com/survey/complete/1/0" method="post" accept-charset="utf-8" id="surveyform">

                <input type="button" class="btn btn-default" value="Unidad 1" onclick="changePage(1)">
                <input type="button" class="btn btn-default" value="Unidad 2" onclick="changePage(2)">
                <input type="button" class="btn btn-default" value="Unidad 3" onclick="changePage(3)">
                <input type="submit" class="btn btn-success" value="Finish Survey">
                <div style="display:none">
                    <input type="hidden" name="csrf_test_name" value="55721a0bc16989d820b0b1d38d16c64d">
                </div>
                <div class="new_page" id="page_1" style="display: block;">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Actividades Unidad 1</h3>
                            <hr>
                            <p>Usted se encuentra la sección de actividades de la Unidad 1. A medida que va terminando las actividades se irán habilitando las unidades para completar el curso. Gracias. </p>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><b>1.</b>Lectura Número Uno</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row spacing-elements" style="padding:10px;">
                                <span class="btn btn-primary" data-toggle="collapse" data-target="#lectura1">Click aquí para ver la lectura uno</span>
                                <!-- lectura#1 -->
                                <div id="lectura1" class="collapse" style="padding:20px;">
                                    <p style="margin-bottom: .0001pt; text-align: center; line-height: normal; background: white;"><strong><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif;">LECTURA No. 1</span></strong></p>
                                    <p style="margin-bottom: .0001pt; text-align: center; line-height: normal; background: white;"><strong><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif;">&nbsp;</span></strong></p>
                                    <p style="margin-bottom: .0001pt; text-align: center; line-height: normal; background: white;"><strong><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif;">ELEMENTOS B&Aacute;SICOS DE LA &nbsp;HIST&Oacute;RIA DEL COOPERATIVISMO<a href="#_ftn1" name="_ftnref1"><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Arial Narrow',sans-serif;">[1]</span></a></span></strong></p>
                                    <p style="margin-bottom: .0001pt; text-align: center; line-height: normal; background: white;"><strong><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif;">&nbsp;</span></strong></p>
                                    <p style="margin-bottom: .0001pt; text-align: center; line-height: normal; background: white;"><strong><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif;">&nbsp;</span></strong></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><strong><em><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif;">La cooperaci&oacute;n</span></em></strong></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><strong><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif;">&nbsp;</span></strong></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">El hombre para sobrevivir tiene que satisfacer sus necesidades inmediatas, tales como alimentarse y vestirse. Esto lo ha obligado a actuar sobre la naturaleza para transformarla mediante el trabajo.</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">A trav&eacute;s de todas las &eacute;pocas del desarrollo de la humanidad, el hombre no ha podido enfrentarse solo a la naturaleza; por ello, desde los tiempos primitivos, ha tenido que unirse con otros hombres para realizar un trabajo que le facilite su supervivencia.</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">El continuo desarrollo de la ciencia y la t&eacute;cnica lograda por el hombre hace que sea cada vez m&aacute;s necesaria la cooperaci&oacute;n en el trabajo. Es decir que cada persona se compromete a realizar una determinada parte del trabajo total a fin de conseguir un objetivo com&uacute;n.</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">Cuando varias personas se unen para ejecutar un trabajo est&aacute;n cooperando.</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><strong><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif;">&nbsp;</span></strong></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><strong><em><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif;">El cooperativismo</span></em></strong></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><strong><em><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif;">&nbsp;</span></em></strong></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">El cooperativismo es un sistema econ&oacute;mico y social, basado en la libertad, la igualdad, la participaci&oacute;n y la solidaridad.</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">La cooperaci&oacute;n es un sistema pr&aacute;ctico de armonizar los intereses humanos recibiendo ayuda y colaboraci&oacute;n de los dem&aacute;s y ofreci&eacute;ndola en reprocidad.</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">El cooperativismo es el resultado de un largo proceso hist&oacute;rico en el cual el hombre ha demostrado su esp&iacute;ritu asociativo y solidario, generando diversas formas de organizaci&oacute;n social y econ&oacute;mica que teniendo como base la cooperaci&oacute;n, persiguen la realizaci&oacute;n de la justicia y la igualdad a trav&eacute;s de la acci&oacute;n econ&oacute;mica y la promoci&oacute;n humana.</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><strong><em><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif;">El cooperativismo en Europa</span></em></strong></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><strong><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif;">&nbsp;</span></strong></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">Antes de 1.750 la producci&oacute;n econ&oacute;mica en Inglaterra era b&aacute;sicamente artesano y manufacturera, es decir se produc&iacute;a en peque&ntilde;os talleres de propiedad individual. El due&ntilde;o del taller era tambi&eacute;n propietario de las materias primas y de los instrumentos de trabajo. La producci&oacute;n se realizaba por encargo.</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">El crecimiento de la poblaci&oacute;n hizo necesario el aumento de bienes y de servicios; pero esto no puede lograrse ampliando &uacute;nicamente el n&uacute;mero de obreros; tambi&eacute;n es necesario mejorar los instrumentos y t&eacute;cnicas de trabajo.</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">En esta permanente b&uacute;squeda, se invent&oacute; la m&aacute;quina de vapor, el telar mec&aacute;nico y la utilizaci&oacute;n de la energ&iacute;a el&eacute;ctrica. Este cambio se dio entre 1.750 y 1.850 y se lo ha conocido con el nombre de "REVOLUCI&Oacute;N INDUSTRIAL" y comenz&oacute; en Inglaterra.</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">La utilizaci&oacute;n de la m&aacute;quina comenz&oacute; en el sector de los textiles, luego en otros sectores de la econom&iacute;a como la minera, la sider&uacute;rgica (fabricaci&oacute;n de hierro y acero) y los transportes mar&iacute;timos y terrestres (barcos de vapor y ferrocarriles).</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">Con la implementaci&oacute;n de las m&aacute;quinas aparecieron las grandes f&aacute;bricas, que ya no produc&iacute;an por contrato para un peque&ntilde;o n&uacute;mero de clientes sino que lo hac&iacute;an en gran escala para un mercado nacional. Los due&ntilde;os de los peque&ntilde;os talleres no pod&iacute;an competir con estas f&aacute;bricas que produc&iacute;an m&aacute;s a menor precio, y de peque&ntilde;os propietarios pasaron a obreros, es decir, asalariados de los capitalistas que s&iacute; ten&iacute;an medios para comprar las nuevas m&aacute;quinas.</span></p>
                                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">Como la utilizaci&oacute;n de las m&aacute;quinas dej&oacute; a muchos trabajadores sin empleo (el telar mec&aacute;nico por ejemplo, hac&iacute;a el trabajo de 100 hombres), los propietarios de las m&aacute;quinas impusieron sus condiciones de trabajo a las obreros, quienes se vieron obligados a trabajar hasta 18 horas diarias por salarios muy bajos, lo cual hizo necesario buscar una soluci&oacute;n a &eacute;ste problema.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">El Cooperativismo surgi&oacute; como una de las alternativas de lucha utilizadas por los trabajadores para defenderse de las condiciones econ&oacute;micas y sociales que surgieron como consecuencia de la "revoluci&oacute;n industrial".</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">Algunas de las personas que comprendieron la importancia de la organizaci&oacute;n para establecer medidas pr&aacute;cticas de defensa de los intereses de los trabajadores fueron:</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <ul>
                                        <li><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">ROBERT OWEN (Ingl&eacute;s)</span></li>
                                        <li><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">WILLIAM KING (Ingl&eacute;s) </span></li>
                                        <li><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">CHARLES FOURIER (Franc&eacute;s)</span></li>
                                        <li><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">FELIPE BUCHEZ (Franc&eacute;s)</span></li>
                                    </ul>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">Estas personas iluminaron o los trabajadores de ROCHDALE para crear los principios que hoy son el dogma cooperativo.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">La primera Cooperativa propiamente dicha surgi&oacute; en Rochdale Inglaterra en el a&ntilde;o 1.844, esta fue formada por 28 trabajadores de una f&aacute;brica en la poblaci&oacute;n de Rochdale.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">Los obreros pidieron a la f&aacute;brica mejoramiento de los salarios y mejor trato por parte de los patronos; se comprometieron en una huelga y los patronos no solamente no atendieron a los requerimientos de los obreros, sino que los despidieron sin pago de prestaciones.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">La necesidad los oblig&oacute; a pensar en sus problemas; se reunieron muchas veces durante el a&ntilde;o para encontrar la soluci&oacute;n al problema de su desocupaci&oacute;n, proponi&eacute;ndose organizarse para unificar sus fuerzas, sus recursos y defender sus intereses.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">El grupo inicial lo compon&iacute;an entre otros: un sastre, un sombrerero, un vendedor ambulante, un mec&aacute;nico, un clasificador de maderas y un almacenista.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">Reunieron alg&uacute;n dinero y cuando vieron la posibilidad, resolvieron abrir una peque&ntilde;a tienda que atendieron por riguroso turno hasta conseguir con sus ahorros y la acumulaci&oacute;n de las utilidades, poseer una modesta f&aacute;brica.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">La creaci&oacute;n de la Cooperativa de Rochdale despert&oacute; un vivo inter&eacute;s en los sectores obreros y sindicales de todos los pa&iacute;ses de Europa, donde empezaron a organizarse sociedades cooperativas para diversos fines.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">En Alemania, por ejemplo en 1.862 se organizaron las Cajas Raiffeissen las cuales eran una serie de Cooperativas destinadas a prestar servicios de Ahorro y Cr&eacute;dito a los peque&ntilde;os propietarios rurales.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">El sistema se expandi&oacute; hacia B&eacute;lgica, Francia e Italia y en 1.872, se constituy&oacute; en Alemania la primera Federaci&oacute;n de Cr&eacute;dito como instituci&oacute;n central para financiar el capital necesario para las Cajas de Pr&eacute;stamos.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">En la actualidad la uni&oacute;n Raifeissen cuenta con 82 Cooperativas de segundo grado y cerca de 3.000 cooperativas de Cr&eacute;dito Rural.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">En Francia se organizaron Cooperativas de Producci&oacute;n Agr&iacute;cola, destinadas a eliminar a los intermediarios que explotaban por igual a los productores y a los consumidores.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">El Cooperativismo de consumo alcanz&oacute; un alto nivel de desarrollo especialmente en Suecia donde las Cooperativas han logrado controlar sectores decisivos de la vida social y econ&oacute;mica.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <h3 style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><em><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif;">El cooperativismo en Colombia</span></em></h3>
                                    <h3 style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-size: 12.0pt; font-family: 'Arial Narrow',sans-serif;">&nbsp;</span></h3>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">Antes de la llegada de los espa&ntilde;oles, los ind&iacute;genas trabajaban colectivamente.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">Los Chibchas por ejemplo, eran un pueblo constituido por varios clanes o familias que se concentraron en las tierras fr&iacute;as de nuestro pa&iacute;s. Su principal fuente de trabajo era la agricultura, la cual realizaban comunitariamente para satisfacer las necesidades de las familias y rendir tributo a los sacerdotes.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">El excedente o sobrante de las cosechas lo intercambiaban en los mercados de las regiones vecinas por productos como el algod&oacute;n, frutos de tierra caliente y por oro.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">Algunas de las formas de trabajo comunitario fueron suprimidas por los espa&ntilde;oles durante la conquista; de las pocas que se conservaron y se conservan a&uacute;n en algunas regiones, podemos mencionar el convite y la minga.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">M&aacute;s tarde el desarrollo t&eacute;cnico Europeo hizo posible que las naciones econ&oacute;micamente avanzadas tuvieran mercanc&iacute;as de sobra, por este motivo se dio comienzo a la exportaci&oacute;n de estos productos hacia los pa&iacute;ses latinoamericanos, africanos, etc. los cuales ten&iacute;an escasez de los mismos.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">El hecho de traer al pa&iacute;s mercanc&iacute;as extranjeras, arruinaba a los productores artesanos, ya que la gente prefer&iacute;a comprar estas mercanc&iacute;as por su calidad y bajo costo, perdiendo as&iacute; los artesanos la posibilidad de vender sus productos.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">As&iacute;, mientras en Inglaterra se organizaban las primeras Cooperativas, en Colombia los trabajadores trataban de organizarse en gremios para lograr que el estado no permitiera importar mercanc&iacute;as que ya estaban produci&eacute;ndose en el pa&iacute;s.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">En esta &eacute;poca (1.850-1.920) la econom&iacute;a colombiana se dedicaba principalmente a la agricultura y al comercio, de esta manera las personas vinculadas directa o indirectamente a la producci&oacute;n o distribuci&oacute;n de mercanc&iacute;as, empezaron a interesarse por el Cooperativismo para solucionar sus problemas, en lo referente al consumo y al cr&eacute;dito. Estos problemas dieron firmeza a las ideas cooperativas difundidas en un comienzo por un sacerdote llamado Ad&aacute;n Puerto, quien hab&iacute;a conocido en Alemania las Cooperativas de Ahorro y Cr&eacute;dito.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">M&aacute;s tarde durante el gobierno de Enrique Olaya Herrera y con base en un proyecto presentado por Juan Mar&iacute;a Agudelo, el Congreso expidi&oacute; la Ley 134 de 1.931, la cual reglament&oacute; la creaci&oacute;n de Cooperativas en Colombia.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">Las primeras Cooperativas fueron organizadas b&aacute;sicamente para prestar servicios de consumo, de ahorro y cr&eacute;dito, tales como:</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <ul>
                                        <li style="background: white; margin: 0cm 0cm .0001pt 35.4pt;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">Cooperativa de bananeros del Magdalena.</span></li>
                                        <li style="background: white; margin: 0cm 0cm .0001pt 35.4pt;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">Cooperativa Lechera del Atl&aacute;ntico.</span></li>
                                        <li style="background: white; margin: 0cm 0cm .0001pt 35.4pt;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">Cooperativa de Buses de Santa Fe.</span></li>
                                    </ul>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">A partir de 1.940, aparecieron Cooperativas de Producci&oacute;n, de Transportes, Educacionales y de Vivienda. Tambi&eacute;n se organizaron las primeras asociaciones de Cooperativas u organismos de segundo grado, como:</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <ul>
                                        <li style="text-align: justify; background: white; margin: 0cm 0cm .0001pt 35.4pt;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">La Uni&oacute;n Cooperativa Nacional "Uconal" que agrupa a las Cooperativas de Ahorro y Cr&eacute;dito.</span></li>
                                        <li style="text-align: justify; background: white; margin: 0cm 0cm .0001pt 35.4pt;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">La Asociaci&oacute;n Colombiana de Cooperativas "ASCCOP", que une a las Cooperativas de consumo y otras que se organizaron a partir de 1.958.</span></li>
                                    </ul>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">El desarrollo del movimiento Cooperativo basado en la incorporaci&oacute;n de nuevos grupos sociales a las Cooperativas, tales como empleados, maestros, campesinos, peque&ntilde;os comerciantes, etc., lo mismo que la abundancia de disposiciones legales hicieron necesaria la expedici&oacute;n del Decreto Ley No. 1958 de 1.963, el cual unific&oacute; toda la legislaci&oacute;n Cooperativa anterior y cre&oacute; la Superintendencia Nacional de Cooperativas hoy Departamento Administrativo Nacional de Cooperativas "DANCOOF&rdquo;, como organismo del Estado destinado a promover, fomentar y fiscalizar el desarrollo del Cooperativismo Nacional.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">Merece destacarse la creaci&oacute;n de seguros LA EQUIDAD en 1.970, primera compa&ntilde;&iacute;a de seguros organizada en Colombia de acuerdo con los principios y m&eacute;todos del Cooperativismo.</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">El Cooperativismo es un sistema social y econ&oacute;mico, basado en la libertad, la igualdad, la participaci&oacute;n y la solidaridad. Entonces, &iquest;Qu&eacute; es una Cooperativa?</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">&nbsp;</span></p>
                                    <p style="margin: 0cm; margin-bottom: .0001pt; text-align: justify; background: white;"><span style="font-family: 'Arial Narrow',sans-serif; color: #333333;">Una Cooperativa es una empresa econ&oacute;mica formada por personas de una comunidad (vereda, municipio, zona o regi&oacute;n), que teniendo problemas y necesidades comunes como: alto cost&oacute; de la vida; bajos precios por los productos cosechados; desempleo y otros, buscan solucionarlos uniendo y organizando sus esfuerzos y recursos para desarrollar una actividad econ&oacute;mica y defender sus intereses.</span></p>
                                    <p>&nbsp;</p>
                                    <p style="text-align: justify;"><a href="#_ftnref1" name="_ftn1"><span style="font-size: 10.0pt; line-height: 115%; font-family: 'Calibri',sans-serif;">[1]</span></a> El contenido de esta lectura fue tomado de: Biblioteca Virtual Luis &Aacute;ngel
                                        Arango. Disponible en:&nbsp; <a href="http://www.banrepcultural.org/blaavirtual/ciencias/sena/cooperativismo/generalidades-del-cooperativismo/generali0.htm">http://www.banrepcultural.org/blaavirtual/ciencias/sena/cooperativismo/generalidades-del-cooperativismo/generali0.htm</a>&nbsp;
                                        [consultado en 10 de octubre de 2016]</p>
                                    <p>&nbsp;</p>
                                    <span class="btn btn-default" data-toggle="collapse" data-target="#lectura1">Click aquí para ocultar la lectura 1</span>
                                </div>
                                <!-- fin lectura#1 -->
                            </div>


                        </div>
                        <!-- end panel body -->
                    </div>
                    <!-- end panel class -->
                    <h3 class="page-header">TALLER HISTÓRIA DEL COOPERATIVISMO</h3>
                    <p><b>1.</b>  A continuación encontrará una serie de preguntas para evaluar nuestros conocimientos sobre los aspectos fundamentales de la historia del cooperativismo.</p>
                    <p>Determine con una (X) si los enunciados son falsos o verdaderos:</p>
                    <br>
                    <!-- pregunta 1 -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><b>1. </b> EL TRABAJO COLECTIVO APARECIÓ ENTRE LOS HOMBRES</h3>
                        </div>
                        <div class="panel-body">
                        <!-- a -->
                            <div class="row">
                                <div class="col-lg-12"><p><b>a.</b> Por el inventó de la máquina de vapor</p></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Falso" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="V" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Verdadero" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                            <br>
                            <!-- b -->
                            <div class="row">
                                <div class="col-lg-12"><p><b>b.</b> Por los conocimientos de William King</p></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Falso" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="V" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Verdadero" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                            <br>
                            <!-- c -->
                            <div class="row">
                                <div class="col-lg-12"><p><b>c.</b> Para facilitar la supervivencia</p></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Falso" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="V" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Verdadero" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                            <br>
                            <!-- d -->
                            <div class="row">
                                <div class="col-lg-12"><p><b>d.</b> Por el invento del telar mecánico</p></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Falso" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="V" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Verdadero" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        </div>
                        <!-- end panel body -->
                    </div>
                    <!-- end panel class -->
                    <!-- end pregunta 1 -->

                    <!-- pregunta 2 -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><b>2. </b> EL MOVIMIENTO COOPERATIVO SURGIÓ EN EUROPA CON LA PRODUCCIÓN DE TIPO</h3>
                        </div>
                        <div class="panel-body">
                        <!-- a -->
                            <div class="row">
                                <div class="col-lg-12"><p><b>a.</b> Industrial</p></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Falso" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="V" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Verdadero" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                            <br>
                            <!-- b -->
                            <div class="row">
                                <div class="col-lg-12"><p><b>b.</b> Agrícola</p></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Falso" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="V" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Verdadero" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                            <br>
                            <!-- c -->
                            <div class="row">
                                <div class="col-lg-12"><p><b>c.</b> Artesano</p></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Falso" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="V" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Verdadero" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                            <br>
                            <!-- d -->
                            <div class="row">
                                <div class="col-lg-12"><p><b>d.</b> Manufactureras</p></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Falso" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="V" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Verdadero" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        </div>
                        <!-- end panel body -->
                    </div>
                    <!-- end panel class -->
                    <!-- end pregunta 2 -->

                    <!-- pregunta 3 -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><b>3. </b> LAS IDEAS COOPERATIVAS TOMARON FUERZA EN COLOMBIA POR:</h3>
                        </div>
                        <div class="panel-body">
                        <!-- a -->
                            <div class="row">
                                <div class="col-lg-12"><p><b>a.</b> Los problemas económicos</p></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Falso" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="V" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Verdadero" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                            <br>
                            <!-- b -->
                            <div class="row">
                                <div class="col-lg-12"><p><b>b.</b> La influencia religiosa</p></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Falso" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="V" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Verdadero" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                            <br>
                            <!-- c -->
                            <div class="row">
                                <div class="col-lg-12"><p><b>c.</b> Las disposiciones legales</p></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Falso" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="V" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Verdadero" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                            <br>
                            <!-- d -->
                            <div class="row">
                                <div class="col-lg-12"><p><b>d.</b> La organización de los gremios</p></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Falso" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="V" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Verdadero" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        </div>
                        <!-- end panel body -->
                    </div>
                    <!-- end panel class -->
                    <!-- end pregunta 3 -->

                    <!-- pregunta 4 -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><b>4. </b> UNA COOPERATIVA ES:</h3>
                        </div>
                        <div class="panel-body">
                        <!-- a -->
                            <div class="row">
                                <div class="col-lg-12"><p><b>a.</b> Una empresa formada por personas que buscan satisfacer necesidades comunes, uniendo esfuerzos y recursos para desarrollar en conjunto actividades económicas y sociales.</p></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Falso" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="V" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Verdadero" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                            <br>
                            <!-- b -->
                            <div class="row">
                                <div class="col-lg-12"><p><b>b.</b> Uno asociación de personas que desarrollan en forma individual y con ánimo de lucro actividades económicas y sociales.</p></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Falso" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="V" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Verdadero" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                            <br>
                            <!-- c -->
                            <div class="row">
                                <div class="col-lg-12"><p><b>c.</b> Una empresa formada por personas que se unen y organizan para entrar a formar parte de una sociedad capitalista.</p></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Falso" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="V" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Verdadero" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                            <br>
                            <!-- d -->
                            <div class="row">
                                <div class="col-lg-12"><p><b>d.</b> Una asociación de personas que se unen en forma temporal para satisfacer necesidades y problemas de tipo social.</p></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Falso" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="V" class="requiredField radiobutton"></span>
                                        <input type="text" class="form-control" value="Verdadero" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        </div>
                        <!-- end panel body -->
                    </div>
                    <!-- end panel class -->
                    <!-- end pregunta 4 -->
                    <hr>
                    <!-- Linea de tiempo -->
                    <br>
                    
                    <div class="row">
                        <p><b>2.   </b> Completa la línea de tiempo sobre la historia del movimiento cooperativo. Para esto, utiliza y complementa (con consultas en internet) los siguientes insumos: </p>
                        <a class="btn btn-primary view-pdf" href="pdfRecurso">Ver PDF</a> 
                        <br>
                        <br>
                        <h4>LINEA DEL TIEMPO: HISTORIA DEL COOPERATIVISMO</h4>
                        <p>En base a lo aprendido, complete correctamente esta linea de tiempo (<b>Arrastre</b> los Nombres al Año correspondiente)</p>
                        <!--Game Timeline-->
                        <div id="gameContent">
                            <div id="cardSlots"></div>
                            <div id="cardPile"></div>
                            <div id="message" style="display: none; left: 580px; top: 750px; width: 0px; height: 0px;"></div>
                            <div id="successMessage" style="display: none; left: 580px; top: 750px; width: 0px; height: 0px;">
                                <span style="font-weight:bold;font-size:2em;">Lo hiciste!</span><br>
                                <button onclick="gameInit()">Jugar nuevamente</button>
                            </div>
                        </div>
                        <!--end Game Timeline-->
       
                    </div>
                    <!-- Fin Linea tiempo -->
                    <hr>
                    
                    <div class="row">
                    <p><b>3.   </b> Ejercicio interactivo: <b>CUESTIONARIO. HISTORIA DEL COOPERATIVISMO</b> </p>
                        <div class="col-sm-12">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/U6vEYpRzL7E"></iframe>
                            </div>
                        </div>

                        
                    </div><!-- end row -->
                    <br>
                    <!-- pregunta 1 -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><b>1. </b>	¿De qué manera se presentaba la cooperación en la comunidad primitiva? </h3>
                        </div>
                        <div class="panel-body">
                        <!-- a -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">	En la organización del trabajo y la propiedad sobre las herramientas y medios de trabajo</span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->

                        <!-- b -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">	En la relación de los hombres con la naturaleza</span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        <!-- c -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">	En los roles de desempeño en comunidad</span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        <!-- d -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">	En la posibilidad de decidir en colectividad sobre los intereses de las comunidades</span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        </div>
                        <!-- end panel body -->
                    </div>
                    <!-- end panel class -->
                    <!-- end pregunta 1 -->
                    <!-- pregunta 2 -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><b>2. </b>	En la sociedad esclavista:</h3>
                        </div>
                        <div class="panel-body">
                        <!-- a -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">No se dio lugar al trabajo colectivo y de cooperación, pues fue limitada por la propiedad privada sobre las personas.  </span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->

                        <!-- b -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">La ayuda mutua fue posible gracias a la existencia de economía propia. </span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        <!-- c -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">La ayuda mutua fue restringida porque la libertad y la voluntad se sustituyeron por la imposición y el castigo</span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        <!-- d -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">La libertad, los valores y la dignidad humana, fue posible en comunidades donde los hombres eran libres. </span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        </div>
                        <!-- end panel body -->
                    </div>
                    <!-- end panel class -->
                    <!-- end pregunta 2 -->
                    <!-- pregunta 3 -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><b>3. </b>	Entre las formas de cooperación antigua podemos encontrar:</h3>
                        </div>
                        <div class="panel-body">
                        <!-- a -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">Las tierras comunales de los pueblos germánicos</span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->

                        <!-- b -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">La ayuda mutua entre los esenios y comunidades hindúes.</span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        <!-- c -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">La organización del trabajo y la propiedad colectiva sobre los medios de producción de los griegos y romanos.</span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        <!-- d -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">La propiedad colectiva sobre las tierras de los babilonios. </span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        </div>
                        <!-- end panel body -->
                    </div>
                    <!-- end panel class -->
                    <!-- end pregunta 3 -->
                    <!-- pregunta 4 -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><b>4. </b>  La cooperación en la sociedad feudal se ve representada en:</h3>
                        </div>
                        <div class="panel-body">
                        <!-- a -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">La propiedad y el uso de las tierras.</span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->

                        <!-- b -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">La relación de trabajo entre estratos sociales.</span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        <!-- c -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">Las relaciones de solidaridad y ayuda mutua para sobrellevar las obligaciones impuestas a los campesinos.</span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        <!-- d -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">El trabajo de los siervos en las tierras productivas.</span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        </div>
                        <!-- end panel body -->
                    </div>
                    <!-- end panel class -->
                    <!-- end pregunta 4 -->
                    <!-- pregunta 5 -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><b>5. </b>  Los precursores de las ideas cooperativas y de economía solidaria se caracterizaron principalmente por:</h3>
                        </div>
                        <div class="panel-body">
                        <!-- a -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">Desarrollar experiencias asociativas viables para la generación de ingresos económicos de acumulación.</span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->

                        <!-- b -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">Buscar formas alternativas de favorecer a las clases menos favorecidas que surgen de los sistemas económicos.  </span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        <!-- c -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">Crear empresas asociativas que incrementen excedentes de la producción y reparto de utilidades.</span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        <!-- d -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" name="question-radio-1" value="F" class="requiredField radiobutton"></span>
                                        <span class="form-control">Ninguna de las anteriores</span>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div><!-- end row -->
                        </div>
                        <!-- end panel body -->
                    </div>
                    <!-- end panel class -->
                    <!-- end pregunta 5 -->

                </div><!-- end page -->
                <div class="new_page" id="page_2" style="display: none;">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Actividades Unidad 2</h3>
                            <hr>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Which logos could do with being improved? <span class="label label-primary">Required</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row spacing-elements">
                                <div class="col-lg-6">
                                    <a href="http://survey.patchesoft.com/uploads/survey_answer_6_1396555550_626.png" rel="prettyPhoto[question_6]"><img src="http://survey.patchesoft.com/uploads/survey_answer_6_1396555550_626.png" width="238" height="75" class="survey_thumbs"></a>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                           <input type="checkbox" name="question-checkbox-6-38" value="1" class="requiredField checkbutton question-checkbox-6">
                           </span>
                                        <input type="text" class="form-control" value="CodeCanyon" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div>
                            <div class="row spacing-elements">
                                <div class="col-lg-6">
                                    <a href="http://survey.patchesoft.com/uploads/survey_answer_6_1396555550_672.png" rel="prettyPhoto[question_6]"><img src="http://survey.patchesoft.com/uploads/survey_answer_6_1396555550_672.png" width="238" height="75" class="survey_thumbs"></a>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                           <input type="checkbox" name="question-checkbox-6-39" value="1" class="requiredField checkbutton question-checkbox-6">
                           </span>
                                        <input type="text" class="form-control" value="ThemeForest" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div>
                            <div class="row spacing-elements">
                                <div class="col-lg-6">
                                    <a href="http://survey.patchesoft.com/uploads/survey_answer_6_1396555550_698.png" rel="prettyPhoto[question_6]"><img src="http://survey.patchesoft.com/uploads/survey_answer_6_1396555550_698.png" width="238" height="75" class="survey_thumbs"></a>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                           <input type="checkbox" name="question-checkbox-6-40" value="1" class="requiredField checkbutton question-checkbox-6">
                           </span>
                                        <input type="text" class="form-control" value="AudioJungle" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div>
                            <div class="row spacing-elements">
                                <div class="col-lg-6">
                                    <a href="http://survey.patchesoft.com/uploads/survey_answer_6_1396555550_954.png" rel="prettyPhoto[question_6]"><img src="http://survey.patchesoft.com/uploads/survey_answer_6_1396555550_954.png" width="238" height="75" class="survey_thumbs"></a>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                           <input type="checkbox" name="question-checkbox-6-41" value="1" class="requiredField checkbutton question-checkbox-6">
                           </span>
                                        <input type="text" class="form-control" value="3Docean" disabled="">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div>
                        </div>
                        <!-- end panel body -->
                    </div>
                    <!-- end panel class -->
                </div>
                <!-- end page -->
                <div class="new_page" id="page_3" style="display: none;">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Actividades Unidad 3</h3>
                            <hr>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tell us your name! <span class="label label-primary">Required</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row spacing-elements">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control requiredField" name="question-input-7-42" value="">
                                </div>
                            </div>
                        </div>
                        <!-- end panel body -->
                    </div>
                    <!-- end panel class -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Next tell us why you love Envato so much! <span class="label label-primary">Required</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row spacing-elements">
                                <div class="col-lg-6">
                                    <textarea class="form-control requiredField" name="question-input-8-43" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page -->

            </form>
        </div>
    </div>
</div>
@endsection @section('scripts')
<script>
    var cur_page = 1;

    function changePage(page) {
        if (cur_page == page) return;
        $('#page_' + cur_page).slideUp(500, function() {
            $('#page_' + page).slideDown(500);
            cur_page = page;
        });
    }

    /*VIEW PDF*/
        /*
    * This is the plugin
    */
    (function(a){a.createModal=function(b){defaults={title:"",message:"Insumos para linea de tiempo",closeButton:true,scrollable:false};var b=a.extend({},defaults,b);var c=(b.scrollable===true)?'style="max-height: 420px;overflow-y: auto;"':"";html='<div class="modal fade" id="myModal">';html+='<div class="modal-dialog modal-lg">';html+='<div class="modal-content">';html+='<div class="modal-header">';html+='<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';if(b.title.length>0){html+='<h4 class="modal-title">'+b.title+"</h4>"}html+="</div>";html+='<div class="modal-body" '+c+">";html+=b.message;html+="</div>";html+='<div class="modal-footer">';if(b.closeButton===true){html+='<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>'}html+="</div>";html+="</div>";html+="</div>";html+="</div>";a("body").prepend(html);a("#myModal").modal().on("hidden.bs.modal",function(){a(this).remove()})}})(jQuery);

    /*
    * Here is how you use it
    */
    $(function(){    
        $('.view-pdf').on('click',function(){
            var pdf_link = $(this).attr('href');
            var iframe = '<div class="iframe-container"><iframe src="'+pdf_link+'"></iframe></div>'
            $.createModal({
            title:'Material para actividad',
            message: iframe,
            closeButton:true,
            scrollable:false
            });
            return false;        
        });    
    })

    /*Timeline Game*/
    function showAnswer(id) {
        if (document.getElementById(id).style.display == "none") {

            document.getElementById(id).style.display = "";
        } else {
            document.getElementById(id).style.display = "none";
        }
    }

    function hideAll() {
        for (i = 0; i < list.length; i++) {
            document.getElementById(list[i]).style.display = "none";
        }
    }
    $(function() {
        $("#answers").hide("fast");

        $("#answersToggle").click(function() {
            $("#answers").toggle("slow");
        });
        $("#answer1").hide("fast");
        $("#answer2").hide("fast");

        $("#answer1Toggle").click(function() {
            $("#answer1").toggle("slow");
            $("#answer2").hide("fast");
        });
        $("#answer2Toggle").click(function() {
            $("#answer2").toggle("slow");
            $("#answer1").hide("fast");
        });
    });

    $(init);

    function init() {
        $('#makeMeDraggable').draggable();

        $('#draggable').draggable({
            cursor: 'move',
            containment: 'document',
            helper: helper
        });
    }

    function helper(event) {
        return '<div id="helper" style="font-size:.6em;">drag!</div>';
    }

    var correctCards = 0;

    $(gameInit);

    function gameInit() {

        // Hide the success message
        $('#successMessage').hide();
        $('#successMessage').css({
            left: '580px',
            top: '750px',
            width: 0,
            height: 0
        });
        $('#message').hide();
        $('#message').css({
            left: '580px',
            top: '750px',
            width: 0,
            height: 0
        });
        // Reset the game
        correctCards = 0;
        $('#cardPile').html('');
        $('#cardSlots').html('');
        var numOfCards = 12;
        // Create the pile of shuffled cards
        var numbers = [1, 2, 3, 4, 5, 6, 7];
        var text = ['P.C. PLOCBOY',
            'JOHN BELLERS',
            'ROBERT OWEN',
            'CHARLES FOURIER',
            'WILLIAM KING',
            'PHILIPPE BUCHEZ',
            'LOUIS BLANC'
        ];
        numbers.sort(function() {
            return Math.random() - .5
        });

        for (var i = 0; i < text.length; i++) {
            $('<div>' + text[numbers[i] - 1] + '</div>').data('number', numbers[i]).attr('id', 'card' + numbers[i]).appendTo('#cardPile').draggable({
                containment: '#content',
                stack: '#cardPile div',
                cursor: 'move',
                revert: true,
                start: hideMessage

            });
        }

        // Create the card slots
        var words = ['1659', '1695', '1826', '1829', '1830', '1840', '1847'];
        for (var i = 1; i <= words.length; i++) {
            $('<div>' + words[i - 1] + '</div>').data('number', i).appendTo('#cardSlots').droppable({
                accept: '#cardPile div',
                hoverClass: 'hovered',
                drop: handleCardDrop
            });
        }

    }

    function handleCardDrop(event, ui) {
        var slotNumber = $(this).data('number');
        var cardNumber = ui.draggable.data('number');

        // If the card was dropped to the correct slot,
        // change the card colour, position it directly
        // on top of the slot, and prevent it being dragged
        // again

        if (slotNumber == cardNumber) {
            if (slotNumber == 1) {
                $('#message').show().html("SLA works by curing and solidify successive layers of liquid photopolymer resin using an ultraviolet laser.");
            }
            if (slotNumber == 2) {
                $('#message').show().html("Selective Laser Sintering is similar to SLA, but instead of liquid resin, powdered materials including nylon, ceramics, glass, aluminum, to steel or silver can be used.");
            }
            if (slotNumber == 3) {
                $('#message').show().html("Chuck Hull founds 3D systems, which develops its first commercial 3D printer, the Stereolithography Apparatus (or SLA-1)");
            }
            if (slotNumber == 4) {
                $('#message').show().html("Fused Deposition Modeling heats and extrudes thermoplastic filament, depositing layers of semi-liquid beads along an STL-defined extrusion path.");
            }
            if (slotNumber == 5) {
                $('#message').show().html("Scott Crump founds Stratasys");
            }
            if (slotNumber == 6) {
                $('#message').show().html("Four Selective Laser Sintering machines were built, but none were ever sold. Each cost $300,000-$400,000.");
            }
            if (slotNumber == 7) {
                $('#message').show().html("LOM bonds and cuts sheet material using a digitally guided laser.");
            }

            animateMessage();
            ui.draggable.addClass('correct');
            ui.draggable.draggable('disable');
            $(this).droppable('disable');
            ui.draggable.position({
                of: $(this),
                my: 'left top',
                at: 'left top'
            });
            ui.draggable.draggable('option', 'revert', false);
            correctCards++;

        }

        // If all the cards have been placed correctly then display a message
        // and reset the cards for another go

        if (correctCards == 7) {
            $('#successMessage').show();
            $('#successMessage').animate({
                left: '380px',
                top: '570px',
                width: '300px',
                height: '60px',
                opacity: 1
            });
        }

    }

    function hideMessage() {
        $('#message').animate({
            left: '220px',
            top: '700px',
            width: '600px',
            height: '100px',
            opacity: 0
        });
    }

    function animateMessage() {
        $('#message').animate({
            left: '220px',
            top: '700px',
            width: '600px',
            height: '100px',
            opacity: 1
        });

    }
    /* end timeline game*/
</script>
@endsection