@extends('front.layouts.base')

@section('titulo')
<title>Sobre nosotros | Macladas - Ingenieros Consultores</title>
@stop
@section('estilos')
@stop

@section('javascripts')    
@stop

@section('contenido')

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Sobre nosotros</h1>
        <ul class="pull-right breadcrumb">
            <li style="list-style: none"><a href="{{ URL::route('principal') }}">Inicio</a></li>
            <li class="active">La empresa</li>
        </ul>
    </div>
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Container Part ===-->
<div class="container content-sm">
    <div class="headline-center margin-bottom-60">
        <h2>MACLADAS INGENIEROS CONSULTORES</h2>
        <p>
            Compañías Macladas, es una compañía creada en 1996 con la finalidad de prestar servicios de ingeniería (Geotecnia, Hidrogeología y Minería); aseguramiento y control de calidad e inspección  de obras: ensayos de laboratorios de suelos, concreto y asfalto.
        </p>
    </div>
    <div class="row">
        <div class="col-md-6 md-margin-bottom-50">
            <img class="img-responsive" src="{{ asset('assets/img_macladas/empresa01.jpg')  }}" alt="">
        </div>
        <div class="col-md-6">
            <div class="row">
                <ul class="list-unstyled lists-v1">
                    <li><i class="fa fa-angle-right"></i>Proyectos geotécnisoa en tierra firme y off shore.</li>
                    <li><i class="fa fa-angle-right"></i>Evaluación del riesgo de pounch though en capas de arcilla blanda a consecuencia de las acciones climáticas.</li>
                    <li><i class="fa fa-angle-right"></i>Análisis de estabilidad y comportamiento a corto y largo plazo de plataformas, muelles, rompeolas, estructuras, recuperación de terrenos.</li>
                    <li><i class="fa fa-angle-right"></i>Simulación matemática de estructuras.</li>
                    <li><i class="fa fa-angle-right"></i>Exploración por agua, S.E.V. perforación de pozos de aguas.</li>
                </ul>
            </div>
        </div>
    </div><!--/end row-->
</div>
<!--=== End Container Part ===-->

<!--=== Parallax About Block ===-->
<div class="parallax-bg parallaxBg1">
    <div class="container content parallax-about">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-info dark margin-bottom-10">
                    <i class="rounded-x glyphicon glyphicon-flag"></i>
                    <div class="overflow-h">
                        <h3 style="color:#ffffff">Misión</h3>
                        <p style="color:#ffffff">Realizar estudios de ingeniería, inspección de obras civiles, hidráulicas, mineras, metalmecánica, garantizando la satisfacción de nuestros clientes en cuanto a calidad, tiempo de respuesta y relación costo / beneficio.</p>
                    </div>
                </div>
                <div class="banner-info dark margin-bottom-10">
                    <i class="rounded-x glyphicon glyphicon-eye-open"></i>
                    <div class="overflow-h">
                        <h3 style="color:#ffffff">Visión</h3>
                        <p style="color:#ffffff">Crecer en alcance y competitividad en cada uno de los vectores involucrados con los procesos de la organización. Desarrollarnos como líderes con cobertura en Latinoamérica.</p>
                    </div>
                </div>
                <div class="banner-info dark margin-bottom-10">
                    <i class="rounded-x fa fa-thumbs-o-up"></i>
                    <div class="overflow-h">
                        <h3 style="color:#ffffff">Políticas de Calidad</h3>
                        <p style="color:#ffffff">Que los servicios que prestamos cumplan con las más estrictas normas de calidad, seguridad e higiene y , de esta manera, satisfacer las expectativas del cliente en costos, tiempo y calidad.</p>
                    </div>
                </div>
                <div class="margin-bottom-20"></div>
            </div>
            <div class="col-md-6">
                <br><br>
                <img class="img-responsive" src="{{ asset('assets/img_macladas/nosotros.jpg') }}" alt="">
            </div>
        </div>
    </div><!--/container-->
</div>
<!--=== End Parallax About Block ===-->

<!--=== Service Block ===-->
<div class="container content-sm">
    <div class="row">
        <div class="col-md-4 content-boxes-v6 md-margin-bottom-50">
            <i class="rounded-x glyphicon glyphicon-briefcase"></i>
            <h1 class="title-v3-md text-uppercase margin-bottom-10">Experiencia</h1>
            <p>Contamos con más de 15 años de experiencia en numerosos proyectos y con una gran cantidad de clientes satisfechos.</p>
        </div>
        <div class="col-md-4 content-boxes-v6 md-margin-bottom-50">
            <i class="rounded-x icon-finance-075"></i>
            <h2 class="title-v3-md text-uppercase margin-bottom-10">Compromiso</h2>
            <p>Ejecutamos obras de importancia, en un constante liderazgo de innovación, responsabilidad social y tecnología de punta.</p>
        </div>
        <div class="col-md-4 content-boxes-v6">
            <i class="rounded-x icon-finance-012"></i>
            <h2 class="title-v3-md text-uppercase margin-bottom-10">Calidad</h2>
            <p>Garantizamos la satisfacción de nuestros clientes, la integridad de las obras y servicios realizados y una sólida inversión.</p>
        </div>
    </div><!--/row-->
</div><!--/container-->
<!--=== End Service Block ===-->

@stop