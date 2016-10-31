@extends('front.layouts.base')

@section('titulo')
<title>Metalmecánica | Macladas - Ingenieros Consultores</title>
@stop
@section('estilos')
@stop

@section('javascripts')    
@stop

@section('contenido')

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Metalmecánica</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::route('principal') }}">Inicio</a></li>
            <li><a href="javascript:void(0);">Servicios</a></li>
            <li class="active">Metalmecánica</li>
        </ul>
    </div>
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">
    <div class="title-box-v2">
        <h2>METALMECÁNICA</h2>
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
                    <img class="img-responsive" src="assets/img_macladas/metalmecanica/metalmecanica001.png" alt="">
                </div>
                <div class="item">
                    <img class="img-responsive" src="assets/img_macladas/metalmecanica/metalmecanica002.png" alt="">
                </div>
                <div class="item">
                    <img class="img-responsive" src="assets/img_macladas/metalmecanica/metalmecanica003.png" alt="">
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
            <p>La metalmecánica, estudia todo lo relacionado con la industria metálica, desde la obtención de la materia prima, hasta su proceso de conversión en acero y después el proceso de transformación industrial para la obtención de láminas, alambre, placas, etc. las cuales puedan ser procesadas, para finalmente obtener un producto de uso cotidiano. La industria metalmecánica, es el sector que comprende las maquinarias industriales y las herramientas proveedoras de partes a las demás industrias metálicas, siendo su insumo básico el metal y las aleaciones de hierro, para su utilización en bienes de capital productivo, relacionados con el ramo.</p>
        </div>

        <div class="row margin-bottom-10">
            <div class="col-sm-12">
                <div class="service-block service-block-default">
                    <h2 class="heading-md">Ofrecemos:</h2>
                    <h5 style="text-align: justify">
                        <ul class="list-unstyled lists-v1">
                            <li style="list-style: none">
                                <i class="fa fa-angle-right"></i>
                                Proyectos de ingeniería: diseño, fabricación y montaje de tanques de agua, petróleo y gas.
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