@extends('front.layouts.base')

@section('titulo')
<title>Minería | Macladas - Ingenieros Consultores</title>
@stop
@section('estilos')
@stop

@section('javascripts')    
@stop

@section('contenido')

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Minería</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::route('principal') }}">Inicio</a></li>
            <li><a href="javascript:void(0);">Servicios</a></li>
            <li class="active">Minería</li>
        </ul>
    </div>
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">
    <div class="title-box-v2">
        <h2>MINERÍA</h2>
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
                    <img class="img-responsive" src="assets/img_macladas/mineria/mineria001.png" alt="">
                </div>
                <div class="item">
                    <img class="img-responsive" src="assets/img_macladas/mineria/mineria002.png" alt="">
                </div>
                <div class="item">
                    <img class="img-responsive" src="assets/img_macladas/mineria/mineria003.png" alt="">
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
            <p>La minería industrial es el proceso de extracción, explotación y aprovechamiento de minerales que se hallan sobre la superficie terrestre con fines comerciales. Si se extraen metales de los minerales extraídos, la técnica de la minería se refina originando diferentes tipos de técnicas metalúrgicas. La minería es una de las actividades más antiguas desarrollada por el hombre. Al dominar el fuego, el hombre desarrolló técnicas que le permitieron procesar y elaborar los metales. Así comenzó a gestarse la primera revolución tecnológica histórica: La extracción de los minerales.</p>
        </div>

        <div class="row margin-bottom-10">
            <div class="col-sm-12">
                <div class="service-block service-block-default">
                    <h2 class="heading-md">Ofrecemos:</h2>
                    <h5 style="text-align: justify">
                        <ul class="list-unstyled lists-v1">
                            <li>
                                <i class="fa fa-angle-right"></i>
                                Exploración, explotación de minerales metálicos y no metálicos.
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