@extends('front.layouts.base')

@section('titulo')
<title>Resistividad eléctrica | Macladas - Ingenieros Consultores</title>
@stop
@section('estilos')
@stop

@section('javascripts')    
@stop

@section('contenido')

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Resistividad eléctrica</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::route('principal') }}">Inicio</a></li>
            <li><a href="javascript:void(0);">Servicios</a></li>
            <li class="active">Resistividad eléctrica</li>
        </ul>
    </div>
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">
    <div class="title-box-v2">
        <h2>RESISTIVIDAD ELÉCTRICA</h2>
    </div>

    <!-- About Sldier -->
    <div class="shadow-wrapper margin-bottom-50">
        <div class="carousel slide carousel-v1 box-shadow shadow-effect-2" id="myCarousel">
            <ol class="carousel-indicators">
                <li class="rounded-x active" data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li class="rounded-x" data-target="#myCarousel" data-slide-to="1"></li>
                <li class="rounded-x" data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="assets/img_macladas/resistividad/resistividad001.png" alt="">
                </div>
                <div class="item">
                    <img class="img-responsive" src="assets/img_macladas/resistividad/resistividad002.png" alt="">
                </div>
                <div class="item">
                    <img class="img-responsive" src="assets/img_macladas/resistividad/resistividad003.png" alt="">
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
            <p>Una Ingeniería confiable en un Sistema de Puesta a Tierra, deberá mantener todas las partes de los sistemas eléctricos y electrónicos al mismo potencial, siempre dentro de los límites de tolerancia prescritos para proveer un camino de baja impedancia para las sobrecargas de energía, a fin de equilibrar el sistema y drenar simultáneamente a tierra, cualquier evento eléctrico. El punto principal para cualquier Sistema de Puesta a tierra, es la conexión eléctrica efectiva con la tierra física. Por la amplitud de las variaciones en el terreno a través del mundo, es a menudo la más difícil para establecer la máxima efectividad.</p>
        </div>

        <div class="row margin-bottom-10">
            <div class="col-sm-12">
                <div class="service-block service-block-default">
                    <h2 class="heading-md">Ofrecemos:</h2>
                    <h5 style="text-align: justify">
                        <ul class="list-unstyled lists-v1">
                            <li>
                                <i class="fa fa-angle-right"></i>
                                Resistividad eléctrica (Método Wenner).
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                Definición de puesta a tierra y pararayos.
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