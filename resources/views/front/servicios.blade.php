@extends('front.layouts.base')

@section('titulo')
<title>Servicios | Macladas - Ingenieros Consultores</title>
@stop
@section('estilos')
@stop

@section('javascripts')    
@stop

@section('contenido')

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Nuestros servicios</h1>
        <ul class="pull-right breadcrumb">
            <li style="list-style: none"><a href="{{ URL::route('principal') }}">Inicio</a></li>
            <li class="active">Servicios</li>
        </ul>
    </div>
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Featured Blog ===-->
<div class="container content-sm">
    <div class="row featured-blog">
        <div class="col-sm-6 sm-margin-bottom-20">
            <div class="featured-img">
                <img class="img-responsive margin-bottom-20" src="{{ asset('assets/img_macladas/geotecnia.jpg') }}" alt="">
            </div>
            <h2>Geotécnia (En tierra firme y en agua)</h2>
            <h5 style="text-align: justify">
                <ul style="padding-left: 0">
                    <li style="list-style: none">
                        <i class="fa fa-chevron-circle-right"></i>
                        Geotectonofisíca de suelos y rocas.
                    </li>
                    <li style="list-style: none">
                        <i class="fa fa-chevron-circle-right"></i>
                        Proyectos geotécnicos: estabilización de taludes, soluciones de fundaciones y geotecnia vial.
                    </li>
                    <li style="list-style: none">
                        <i class="fa fa-chevron-circle-right"></i>
                        Ensayos de laboratorio.
                    </li>
                    <li style="list-style: none">
                        <i class="fa fa-chevron-circle-right"></i>
                        Geofísica: resistividad eléctrica.
                    </li>
                    <li style="list-style: none">
                        <i class="fa fa-chevron-circle-right"></i>
                        Inspecciones y ejecuciones geotécnicas: movimiento de tierra, pilotajes, muros de tierra reforzada, pantallas atirantadas pasivos, concreto proyecto control de erosión, etc.
                    </li>
                    <li style="list-style: none">
                        <i class="fa fa-chevron-circle-right"></i>
                        Instrumentación geotécnica: inclinómetro, piezómetros y control de deformaciones.
                    </li>
                    <li style="list-style: none">
                        <i class="fa fa-chevron-circle-right"></i>
                        Inspección y control de calidad: planes de inspección, medición, ensayos y administración de contratos.
                    </li>
                    <li style="list-style: none">
                        <i class="fa fa-chevron-circle-right"></i>
                        Aseguramiento de calidad: aseguramiento de documentos, datos, productos.
                    </li>
                    <li style="list-style: none">
                        <i class="fa fa-chevron-circle-right"></i>
                        Acciones preventivas y correctivas.
                    </li>
                </ul>
            </h5>
        </div>
        <div class="col-sm-6 sm-margin-bottom-20">
            <div class="featured-img">
                <img class="img-responsive margin-bottom-20" src="{{ asset('assets/img_macladas/hidrogeologia.png') }}" alt="">
            </div>
            <h2>Hidrogeología</h2>
            <h5 style="text-align: justify">
                <ul style="padding-left: 0">
                    <li style="list-style: none">
                        <i class="fa fa-chevron-circle-right"></i>
                        Sondajes eléctricos verticales, Sp. Gr. Perforación de pozos de agua.
                    </li>
                    <li style="list-style: none">
                        <i class="fa fa-chevron-circle-right"></i>
                        Inspección y evaluación de acuíferos.
                    </li>
                </ul>
            </h5>
        </div>
    </div><!--/end row-->
    <div class="row featured-blog">
        <div class="col-sm-6 sm-margin-bottom-20">
            <div class="featured-img">
                <img class="img-responsive margin-bottom-20" src="{{ asset('assets/img_macladas/about.jpg') }}" alt="">
            </div>
            <h2>Minería</h2>
            <h5 style="text-align: justify">
                <ul style="padding-left: 0">
                    <li style="list-style: none">
                        <i class="fa fa-chevron-circle-right"></i>
                        Exploración, explotación de minerales metálicos y no metálicos.
                    </li>
                    <li style="list-style: none">
                        <i class="fa fa-chevron-circle-right"></i>
                        Comercialización de productos no metálicos (arena, piedra y arcilla).
                    </li>
                </ul>
            </h5>
        </div>
        <div class="col-sm-6 sm-margin-bottom-20">
            <div class="featured-img">
                <img class="img-responsive margin-bottom-20" src="{{ asset('assets/img_macladas/metalmecanica.jpg') }}" alt="">
            </div>
            <h2>Metalmecánica</h2>
            <h5 style="text-align: justify">
                <ul style="padding-left: 0">
                    <li style="list-style: none">
                        <i class="fa fa-chevron-circle-right"></i>
                        Proyectos de ingeniería: diseño, fabricación y montaje de tanques de agua, petróleo y gas.
                    </li>
                    <li style="list-style: none">
                        <i class="fa fa-chevron-circle-right"></i>
                        Soldadura industrial.
                    </li>
                </ul>
            </h5>
        </div>
    </div><!--/end row-->
</div>
<!--=== End Featured Blog ===-->

@stop