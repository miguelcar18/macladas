@extends('front.layouts.base')

@section('titulo')
<title>Clientes | Macladas - Ingenieros Consultores</title>
@stop
@section('estilos')
@stop

@section('javascripts')    
@stop

@section('contenido')

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Clientes</h1>
        <ul class="pull-right breadcrumb">
            <li style="list-style: none"><a href="{{ URL::route('principal') }}">Inicio</a></li>
            <li class="active">Clientes</li>
        </ul>
    </div>
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Job Partners ===-->
<div class="container content job-partners">
    <div class="title-box-v2">
        <h2>Nuestros Clientes</h2>{{--<span class="color-green"></span>--}}
    </div>

    <ul class="list-inline our-clients text-center" id="effect-2">
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/banco_mundial.svg') }}" alt="">
                <div class="text-center">
                    <h4>Banco Mundial</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/bid.svg') }}" alt="">
                <div class="text-center">
                    <h4>BID</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/pdvsa.svg') }}" alt="">
                <div class="text-center">
                    <h4>PDVSA</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/petrobras.svg') }}" alt="">
                <div class="text-center">
                    <h4>Petrobras</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/repsol.svg') }}" alt="">
                <div class="text-center">
                    <h4>Repsol</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/petroperu.svg') }}" alt="">
                <div class="text-center">
                    <h4>Petroperu</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/total.svg') }}" alt="">
                <div class="text-center">
                    <h4>Total</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/inelectra.png') }}" alt="">
                <div class="text-center">
                    <h4>Inelectra</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/jantesa.png') }}" alt="">
                <div class="text-center">
                    <h4>Jantesa</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/veninco.png') }}" alt="">
                <div class="text-center">
                    <h4>Veninco</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/tivenca.png') }}" alt="">
                <div class="text-center">
                    <h4>Tivenca</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/tecnoconsult.png') }}" alt="">
                <div class="text-center">
                    <h4>Tecnoconsult</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/intec.svg') }}" alt="">
                <div class="text-center">
                    <h4>Intec</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/fede.png') }}" alt="">
                <div class="text-center">
                    <h4>Fede</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/fontur.svg') }}" alt="">
                <div class="text-center">
                    <h4>Fontur</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/gobierno-venezuela.svg') }}" alt="">
                <div class="text-center">
                    <h4>Gobierno de Venezuela</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/gobierno-peru.svg') }}" alt="">
                <div class="text-center">
                    <h4>Gobierno del Perú</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/amoco.svg') }}" alt="">
                <div class="text-center">
                    <h4>Amoco</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/queiroz-galvao.svg') }}" alt="">
                <div class="text-center">
                    <h4>Queiroz - Galvao</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/pdv.svg') }}" alt="">
                <div class="text-center">
                    <h4>PDV</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/texaco.svg') }}" alt="">
                <div class="text-center">
                    <h4>Texaco</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/aguas_monagas.jpg') }}" alt="">
                <div class="text-center">
                    <h4>Aguas de Monagas</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/oxy.svg') }}" alt="">
                <div class="text-center">
                    <h4>Oxy</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/sin_logo.jpg') }}" alt="">
                <div class="text-center">
                    <h4>CCM</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/sin_logo.jpg') }}" alt="">
                <div class="text-center">
                    <h4>Ehdasse Sanat Company</h4>
                </div>
            </figure>
        </li>
        <li>
            <figure class="tag-box tag-box-v3">
                <img src="{{ asset('assets/img/clientes/sin_logo.jpg') }}" alt="">
                <div class="text-center">
                    <h4>Trebol gas</h4>
                </div>
            </figure>
        </li>
    </ul>
</div><!--/container-->
<!--=== End Job Partners ===-->

@stop