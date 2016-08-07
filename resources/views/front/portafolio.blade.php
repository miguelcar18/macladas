@extends('front.layouts.base')

@section('titulo')
<title>Trabajos realizados | Macladas - Ingenieros Consultores</title>
@stop
@section('estilos')
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">
@stop

@section('javascripts')   
    <script type="text/javascript" src="{{ asset('assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/cube-portfolio/cube-portfolio-2.js') }}"></script>
@stop

@section('contenido')

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Trabajos realizados</h1>
        <ul class="pull-right breadcrumb">
            <li style="list-style: none"><a href="{{ URL::route('principal') }}">Inicio</a></li>
            <li class="active">Portafolio</li>
        </ul>
    </div>
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Cube-Portfdlio ===-->
<div class="cube-portfolio container margin-bottom-60">
    <div class="content-xs">
        <div id="filters-container" class="cbp-l-filters-text content-xs">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> Todos </div> |
            <div data-filter=".geotecnico" class="cbp-filter-item"> Estudios geotécnicos </div> |
            <div data-filter=".integrado" class="cbp-filter-item"> Estudios integrados </div> |
            <div data-filter=".hidrogeologia" class="cbp-filter-item"> Hidrogeología </div> |
            <div data-filter=".mineria" class="cbp-filter-item"> Minería </div>
        </div><!--/end Filters Container-->
    </div>
    <div id="grid-container" class="cbp-l-grid-agency">
        <div class="cbp-item geotecnico" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>INFRAESTRUCTURA</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Geotécnicos</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: PETROPERU TALARA – PERÚ.</b></li>
                    </ul>
                </div>
                <p>
                    Diseño de infraestructuras de la extensión de la planta de tratamiento y almacenamiento de crudos.
                </p>
            </div>
        </div>
        <div class="cbp-item geotecnico" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>PLANTA DE ALMACENAMIENTO DE CRUDO</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Geotécnicos</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: AMOCO TRINIDAD Y TOBAGO.</b></li>
                    </ul>
                </div>
                <p>
                    El diseño de la estructura de una planta de almacenamiento de crudo.
                </p>
            </div>
        </div>
        <div class="cbp-item geotecnico" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>MUELLE DE AGUAS PROFUNDAS Y PUENTES</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Geotécnicos</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: QUEIROZ-GALVAO.</b></li>
                    </ul>
                </div>
                <p>
                    Ingeniería conceptual para la proyección de un muelle de aguas profundas y puentes, para la futura carretera que unirá el estado Delta Amacuro hasta los límites con Brasil.
                </p>
            </div>
        </div>
        <div class="cbp-item geotecnico" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>PLANTA PRODUCTORA DE CEMENTO.</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Geotécnicos</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: EHDASSE SANAT CO. REPUBLICA DE IRAN.</b></li>
                    </ul>
                </div>
                <p>
                    Una planta productora de cemento. el pinto Maturín edo Monagas.
                </p>
            </div>
        </div>
        <div class="cbp-item geotecnico" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>ESTACIONES DE SERVICIOS</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Geotécnicos</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresas: TREBOL GAS, PDV, CCM Y TEXACO.</b></li>
                    </ul>
                </div>
                <p>
                    Futuras estaciones de servicios para las empresas TREBOL GAS, PDV, CCM Y TEXACO.
                </p>
            </div>
        </div>
        <div class="cbp-item geotecnico" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>EDIFICIOS Y URBANIZACIONES</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Geotécnicos</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: Varias gobernaciones de Venezuela</b></li>
                    </ul>
                </div>
                <p>
                    Edificios y urbanizaciones en los estados Monagas, Delta Amacuro, Sucre, Miranda, Anzoátegui, Bolívar, Trujillo, Barinas y otros.
                </p>
            </div>
        </div>
        <div class="cbp-item geotecnico" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>LOCALIZACIONES.</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Geotécnicos</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: ARCO, PDVSA, PETROBAS.</b></li>
                    </ul>
                </div>
                <p>
                    Localizaciones para las compañías: ARCO, PDVSA, PETROBAS.
                </p>
            </div>
        </div>
        <div class="cbp-item geotecnico" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>INGENIERÍA Y CONSTRUCCIÓN PDVSA</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Geotécnicos</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: PDVSA.</b></li>
                    </ul>
                </div>
                <p>
                    Varios ingeniería y construcción PDVSA: Distritos Anaco, San Tome, Maturín, Morichal y Barinas. (puentes para el tendido de tuberías de petroleo y gas, tanques de almacenamiento de crudo y gas, estaciones de flujo, oleoductos, gaseoductos, acondicionamiento y flexibilidad de descargas, plantas compresoras, edificios administrativos, antenas y otros).
                </p>
            </div>
        </div>
        <div class="cbp-item geotecnico" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>HOSPITAL MILITAR DE MATURÍN Y ESCUELA DE GUARDIAS NACIONALES</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Geotécnicos</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: Gobernación del estado Monagas - Venezuela</b></li>
                    </ul>
                </div>
                <p>
                    Proyección de hospital militar de Maturín y pabellones de la escuela de guardias nacionales de Punta de Mata. estado Monagas.
                </p>
            </div>
        </div>
        <div class="cbp-item geotecnico" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>MERCADOS</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Geotécnicos</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: Gobernación de estados Bolívar y Anzoátegui - Venezuela</b></li>
                    </ul>
                </div>
                <p>
                    Futuros mercados de: Santa Elena de Uairen edo Bolívar, Barcelona Tronconal III y Puerto la Cruz. estado Anzoátegui.
                </p>
            </div>
        </div>
        <div class="cbp-item geotecnico" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>SOLUCIONES DE CÁRCAVAS Y DISEÑOS DE MUROS</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Geotécnicos</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: Gobernaciones de los estados Monagas, Sucre, Trujillo y Miranda - Venezuela.</b></li>
                    </ul>
                </div>
                <p>
                    Soluciones de cárcavas y diseños de muros, pernos de anclajes y gaviones para las empresas de vialidad de los estados Monagas, Sucre, Trujillo y Miranda.
                </p>
            </div>
        </div>
        <div class="cbp-item geotecnico" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>AMPLIACIÓN DE CAPACIDAD DE DESHIDRATACIÓN</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Geotécnicos</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: PETROBAS estado Monagas.</b></li>
                    </ul>
                </div>
                <p>
                    Ampliación de capacidad de deshidratación y transferencia a 120 mbd de la planta oritupano (ptco).
                </p>
            </div>
        </div>
        <div class="cbp-item geotecnico" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>ESCUELAS, LICEOS, SIMONCITOS, TÉCNICAS</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Geotécnicos</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: Gobernaciones de los estados Monagas, Sucre, Miranda, Trujillo, Anzoátegui, Barinas, Delta Amacuro - Venezuela.</b></li>
                    </ul>
                </div>
                <p>
                    Escuelas, liceos, simoncitos, técnicas, para el Ministerio de Educación (FEDES). en los estados: Monagas, Sucre, Miranda, Trujillo, Anzoátegui, Barinas, Delta Amacuro.
                </p>
            </div>
        </div>
        <div class="cbp-item geotecnico" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>ALCALDÍAS</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Geotécnicos</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: Varias alcaldías de Venezuela.</b></li>
                    </ul>
                </div>
                <p>
                    Alcaldías de Monagas, Sucre, Carúpano, Caroní, Barinas, Trujillo, Anzoátegui y otros.
                </p>
            </div>
        </div>
        <div class="cbp-item geotecnico" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>BANCO MUNDIAL</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Geotécnicos</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: Gobernaciones de los estados Monagas y Sucre - Venezuela.</b></li>
                    </ul>
                </div>
                <p>
                    Banco Mundial, futuros aeropuertos de Monagas y Sucre.
                </p>
            </div>
        </div>
        <div class="cbp-item geotecnico" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>INFRAESTRUCTURA</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Geotécnicos</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: PETROPERU TALARA – PERÚ.</b></li>
                    </ul>
                </div>
                <p>
                    Diseño de infraestructuras de la extensión de la planta de tratamiento y almacenamiento de crudos.
                </p>
            </div>
        </div>
        <div class="cbp-item integrado" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>TOPOGRAFÍAS, RESISTIVIDAD</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Integrados</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: TREBOL-GAS, PDV Y CCM.</b></li>
                    </ul>
                </div>
                <p>
                    Topografías, resistividad, diseño e ingeniería para estaciones de servicios.
                </p>
            </div>
        </div>
        <div class="cbp-item integrado" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>RESISTIVIDAD Y GEOTECNIA</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Integrados</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresas: PDVSA, AMOCO, OXY.</b></li>
                    </ul>
                </div>
                <p>
                    Resistividad y geotecnia para el diseño de tendidos de tuberías de gas y petroleo.
                </p>
            </div>
        </div>
        <div class="cbp-item integrado" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>RESISTIVIDAD Y GEOTECNIA</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Integrados</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: PDVSA.</b></li>
                    </ul>
                </div>
                <p>
                    Resistividad y geotecnia para remodelaciones de casetas y antenas de comunicaciones.
                </p>
            </div>
        </div>
        <div class="cbp-item integrado" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>TOPOGRAFÍA, RESISTIVIDAD, GEOTECNIA</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Integrados</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: PDVSA.</b></li>
                    </ul>
                </div>
                <p>
                    Topografía, resistividad, geotecnia para el tendido de gaseoductos y oleoductos.
                </p>
            </div>
        </div>
        <div class="cbp-item integrado" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>RESISTIVIDAD Y GEOTECNIA</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Integrados</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: PDVSA.</b></li>
                    </ul>
                </div>
                <p>
                    Resistividad y geotecnia para la autopista Maturín -km 52.
                </p>
            </div>
        </div>
        <div class="cbp-item integrado" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>GEOLOGÍA SUPERFICIAL, GEOMORFOLOGÍA, HIDROGEOLOGÍA</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Estudios Integrados</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: PetroJunin.</b></li>
                    </ul>
                </div>
                <p>
                    Geología superficial, geomorfología, hidrogeología, exploraciones por resistividad eléctrica (método Schumberger), control del nivel freatico con uso del piezometro (curvas geométricas) y geotécnico en el bloque Junin.
                </p>
            </div>
        </div>
        <div class="cbp-item hidrogeologia" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>CONTROL GEOESTADISTICO DE LOS ACUÍFEROS</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> División Hidrogeológica</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: Gobernación del estado Monagas - Venezuela.</b></li>
                    </ul>
                </div>
                <p>
                    Control geoestadistico de los acuíferos de Monagas, estado Monagas.
                </p>
            </div>
        </div>
        <div class="cbp-item hidrogeologia" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>DISEÑO Y CONSTRUCCIÓN DE SUMIDEROS</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> División Hidrogeológica</li>
                    </ul>
                </div>
                <p>
                    Estudio hidrogeologico para el diseño y construcción de sumideros.
                </p>
            </div>
        </div>
        <div class="cbp-item hidrogeologia" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>SONDAJE ELÉCTRICO VERTICALES</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> División Hidrogeológica</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: Gobierno de Perú y Venezuela.</b></li>
                    </ul>
                </div>
                <p>
                    Sondaje eléctrico verticales para exploración de agua en los países de Perú y Venezuela.
                </p>
            </div>
        </div>
        <div class="cbp-item hidrogeologia" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>PERFORACIÓN DE POZOS DE AGUA</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> División Hidrogeológica</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: Gobernación de los estados Monagas, Delta Amacuro, Anzoátegui y Bolívar – PERÚ.</b></li>
                    </ul>
                </div>
                <p>
                    Perforación de pozos de agua, estado Monagas, Delta Amacuro, Anzoátegui y Bolívar.
                </p>
            </div>
        </div>
        <div class="cbp-item hidrogeologia" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>INSPECCIÓN Y EVALUACIÓN TÉCNICA DE POZOS DE AGUAS</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> División Hidrogeológica</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa. PDVSA.</b></li>
                    </ul>
                </div>
                <p>
                    Inspección y evaluación técnica de pozos de aguas (aforos) en los levantamientos sísmicos.
                </p>
            </div>
        </div>
        <div class="cbp-item hidrogeologia" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>SIMULACIONES</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> División Hidrogeológica</li>
                    </ul>
                </div>
                <p>
                    Simulación de acuíferos someros y profundos.
                </p>
            </div>
        </div>
        <div class="cbp-item mineria" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>PERFORACIONES</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Minería</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: Gobernación del estado Táchira - Venezuela.</b></li>
                    </ul>
                </div>
                <p>
                    Perforaciones para determinar reservas de rocas fosfáticas en la conseción fosfosuroeste IV, municipio ayacucho del estado Táchira.
                </p>
            </div>
        </div>
        <div class="cbp-item mineria" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>ESTUDIO GEOLÓGICO MINERO</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Minería</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: Guardianes de Venezuela.</b></li>
                    </ul>
                </div>
                <p>
                    Estudio geológico / minero para determinar reservas de silice.
                </p>
            </div>
        </div>
        <div class="cbp-item mineria" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>ESTUDIO GEOLÓGICO MINERO</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Minería</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: EHDASSE SANATCO</b></li>
                    </ul>
                </div>
                <p>
                    Estudio geológico / minero para determinar reservas de caliza para la proyección de una planta de cemento cerro azul Municipio Punceres estado Monagas Venezuela.
                </p>
            </div>
        </div>
        <div class="cbp-item mineria" style="min-height: 270px">
            <div class="blog margin-bottom-40 tag-box tag-box-v4">
                <h2><a>ESTUDIO GEOLÓGICO MINERO</a></h2>
                <div class="blog-post-tags">
                    <ul class="list-unstyled list-inline blog-info">
                        <li><i class="fa fa-tags"></i> Minería</li>
                        <li><i class="fa  fa-building-o"></i> <b>Empresa: CIGMA PDVSA Guiria - Venezuela.</b></li>
                    </ul>
                </div>
                <p>
                    Estudio geológico / minero para limitar y cuantificar reservas de yacimientos de arcilla.
                </p>
            </div>
        </div>
    </div><!--/end Grid Container-->
</div>
<!--=== End Cube-Portfdlio ===-->

@stop