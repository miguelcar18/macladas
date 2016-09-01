@extends('front.layouts.base')

@section('titulo')
<title>Contáctanos | Macladas - Ingenieros Consultores</title>
@stop
@section('estilos')
    <link rel="stylesheet" href="{{ asset('assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css') }}">
    <!--[if lt IE 9]><link rel="stylesheet" href="{{ asset('assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css') }}"><![endif]-->
    <!-- CSS Page Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/pages/page_contact.css') }}">
@stop

@section('javascripts')    
    <!-- JS Page Level -->
    <script type="text/javascript" src="{{ asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js') }}"></script>
    <script>
        $(function(){
            ContactPage.initMap();
            PageContactForm.initPageContactForm();
        });
    </script>
@stop

@section('contenido')

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Cómo contactarnos</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::route('principal') }}">Inicio</a></li>
            <li class="active">Contáctanos</li>
        </ul>
    </div>
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">
    <div class="row margin-bottom-60">
        <div class="col-md-6 col-sm-6">
            <!-- Google Map -->
            <div id="map" class="height-450 map">
            </div>
            <!-- End Google Map -->
        </div>
        <div class="col-md-6 col-sm-6">
            <h3>Contacto Venezuela</h3>
            <ul class="list-unstyled who">
                <li><a href="javascript:void(0)"><i class="fa fa-home"></i>Carretera Nacional, vía Maturín- La Toscana, Sector Costo Abajo. s/n. Maturín, Edo Monagas.</a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-envelope"></i> isaacmaclado@hotmail.com</a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-envelope"></i> isaacmaclado@gmail.com</a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-phone"></i>(+58 414) 7670909</a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-phone"></i>(+58 291) 5117965 / (+58 291) 9898529</a></li>
            </ul>
            <hr>
            <h3>Contacto Perú</h3>
            <ul class="list-unstyled who">
                <li><a href="javascript:void(0)"><i class="fa fa-home"></i>Jr. Huancabelica Nº 280- 308. Edif. Sudamérica, Piura.</a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-envelope"></i> constpiu@yahoo.es</a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-envelope"></i> teodoricor@gmail.com</a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-phone"></i>(+51 73) 331903 / (+51 73) 520792</a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-phone"></i>(+51 73) 969971274</a></li>
            </ul>
        </div>
    </div>
    <div class="row margin-bottom-30">
        <div class="col-md-12 mb-margin-bottom-30">
            <div class="headline"><h2>Formulario de Contacto</h2></div>
            <br>
            {!! Form::open(array('route' => 'contacto.mensaje', 'method' => 'POST', 'id' => 'sky_form3', 'class' => 'sky-form sky-changes-3')) !!}
                <fieldset>
                    <div class="row">
                        <section class="col col-6">
                            <label class="label">Nombre</label>
                            <label class="input">
                                <i class="icon-append fa fa-user"></i>
                                {!! Form::text('name', null, $attributes = array('id' => 'name', 'placeholder' => 'Ingrese nombre')) !!}
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="label">E-mail</label>
                            <label class="input">
                                <i class="icon-append fa fa-envelope-o"></i>
                                {!! Form::email('email', null, array('id' => 'email', 'placeholder' => 'example@domain.com')) !!}
                            </label>
                        </section>
                    </div>

                    <section>
                        <label class="label">Asunto</label>
                        <label class="input">
                            <i class="icon-append fa fa-tag"></i>
                            {!! Form::text('subject', null, $attributes = array('id' => 'subject', 'placeholder' => 'Asunto')) !!}
                        </label>
                    </section>

                    <section>
                        <label class="label">Mensaje</label>
                        <label class="textarea">
                            <i class="icon-append fa fa-comment"></i>
                            {!! Form::textarea('message', null, $attributes = array('id' => 'message', 'rows' => '4')) !!}
                        </label>
                    </section>
                </fieldset>

                <footer>
                    <button type="submit" class="btn-u">Enviar mensaje</button>
                </footer>

                <div class="message">
                    <i class="rounded-x fa fa-check"></i>
                    <p>Tu mensaje se ha enviado satisfactoriamente</p>
                </div>
            {!! Form::close() !!}
        </div><!--/col-md-12-->
    </div><!--/row-->
</div><!--/container-->
<!--=== End Content Part ===-->

@stop