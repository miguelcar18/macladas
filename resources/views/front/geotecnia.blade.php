@extends('front.layouts.base')

@section('titulo')
<title>Geotecnia | Macladas - Ingenieros Consultores</title>
@stop
@section('estilos')
@stop

@section('javascripts')    
@stop

@section('contenido')

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Geotecnia</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::route('principal') }}">Inicio</a></li>
            <li><a href="javascript:void(0);">Servicios</a></li>
            <li class="active">Geotecnia</li>
        </ul>
    </div>
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">
    <div class="title-box-v2">
        <h2>GEOTECNIA (EN TIERRA FIRME Y EN AGUA)</h2>
    </div>

    <!-- About Sldier -->
    <div class="shadow-wrapper margin-bottom-50">
        <div class="carousel slide carousel-v1 box-shadow shadow-effect-2" id="myCarousel">
            <ol class="carousel-indicators">
                <li class="rounded-x active" data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li class="rounded-x" data-target="#myCarousel" data-slide-to="1"></li>
                <li class="rounded-x" data-target="#myCarousel" data-slide-to="2"></li>
                <li class="rounded-x" data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="assets/img_macladas/geotecnia/geotecnia001.png" alt="">
                </div>
                <div class="item">
                    <img class="img-responsive" src="assets/img_macladas/geotecnia/geotecnia002.png" alt="">
                </div>
                <div class="item">
                    <img class="img-responsive" src="assets/img_macladas/geotecnia/geotecnia003.png" alt="">
                </div>
                <div class="item">
                    <img class="img-responsive" src="assets/img_macladas/geotecnia/geotecnia004.png" alt="">
                </div>
            </div>

            <div class="carousel-arrow">
                <a data-slide="prev" href="#myCarousel" class="left carousel-control">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a data-slide="next" href="#myCarousel" class="right carousel-control">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
            </div>
        </div><!--/end row-->

        <div class="title-box-v2">
            <p>La Ingeniería Geotécnica o simplemente Geotecnia es la rama de la Geología aplicada que se encarga del estudio de las propiedades mecánicas, hidráulicas e ingenieriles de los materiales provenientes del medio geológico, aplicadas a las obras de Ingeniería Civil. Los ingenieros geotecnistas investigan el suelo y las rocas por debajo de la superficie para determinar sus propiedades ingenieriles y diseñar las cimentaciones paraestructuras tales como edificios, puentes, presas y centrales hidroeléctricas. Acciones en la rama vial como la estabilización de taludes, diseño y construcción de túneles y carreteras, diseño y construcción de cualquier tipo de estructura de contención para la prevención de riesgos geológicos, etc.</p>
        </div>

        <div class="row margin-bottom-10">
            <div class="col-sm-12">
                <div class="service-block service-block-default">
                    <h2 class="heading-md">Ofrecemos:</h2>
                    <h5 style="text-align: justify">
                        <ul class="list-unstyled lists-v1">
                            <li>
                                <i class="fa fa-angle-right"></i>
                                Geotectonofisíca de suelos y rocas.
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                Proyectos geotécnicos: estabilización de taludes, soluciones de fundaciones y geotecnia vial.
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                Ensayos de laboratorio.
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                Geofísica: resistividad eléctrica.
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                Inspecciones y ejecuciones geotécnicas: movimiento de tierra, pilotajes, muros de tierra reforzada, pantallas atirantadas pasivos, concreto proyecto control de erosión, etc.
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                Instrumentación geotécnica: inclinómetro, piezómetros y control de deformaciones.
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                Inspección y control de calidad: planes de inspección, medición, ensayos y administración de contratos.
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                Aseguramiento de calidad: aseguramiento de documentos, datos, productos.
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                Acciones preventivas y correctivas.
                            </li>
                        </ul>
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Sldier -->
</div>
<!--=== End Content Part ===-->
@stop