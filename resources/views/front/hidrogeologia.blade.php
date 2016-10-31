@extends('front.layouts.base')

@section('titulo')
<title>Hidrogeología | Macladas - Ingenieros Consultores</title>
@stop
@section('estilos')
@stop

@section('javascripts')    
@stop

@section('contenido')

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Hidrogeología</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::route('principal') }}">Inicio</a></li>
            <li><a href="javascript:void(0);">Servicios</a></li>
            <li class="active">Hidrogeología</li>
        </ul>
    </div>
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">
    <div class="title-box-v2">
        <h2>HIDROGEOLOGIA</h2>
    </div>

    <!-- About Sldier -->
    <div class="shadow-wrapper margin-bottom-50">
        <div class="carousel slide carousel-v1 box-shadow shadow-effect-2" id="myCarousel">
            <ol class="carousel-indicators">
                <li class="rounded-x active" data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li class="rounded-x" data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="assets/img_macladas/hidrogeologia/hidrogeologia001.png" alt="">
                </div>
                <div class="item">
                    <img class="img-responsive" src="assets/img_macladas/hidrogeologia/hidrogeologia002.png" alt="">
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
            <p> La hidrogeología trata del estudio integral del agua subterránea, su distribución y evolución en tiempo y espacio en el marco de la geología regional. La geohidrología se encarga de estudiar el comportamiento del agua en el ambiente geológico según las leyes de la hidráulica. Comprende la hidráulica de pozos, es decir de perforaciones para obtener agua con diferentes fines y el control de su comportamiento en el entorno, según el tipo de material perforado. Ambas especialidades correlacionan la información geológica regional y local, superficial y del subsuelo para contribuir al aprovechamiento óptimo del agua subterránea en beneficio del desarrollo sustentable. </p>
        </div>

        <div class="row margin-bottom-10">
            <div class="col-sm-12">
                <div class="service-block service-block-default">
                    <h2 class="heading-md">Ofrecemos:</h2>
                    <h5 style="text-align: justify">
                        <ul class="list-unstyled lists-v1">
                            <li>
                                <i class="fa fa-angle-right"></i>
                                Sondajes eléctricos verticales (S.E.V).
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                Perforación de pozos de agua.
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                Spontaneous Potential (SP) y Gamma Ray
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                Inspección y evaluación de acuíferos.
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