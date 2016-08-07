<!--=== Slider ===-->
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <!-- SLIDE -->
            <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('assets/img_macladas/slider03.jpg') }}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                <!-- LAYER -->
                <div class="tp-caption re-title-v1 sft start" data-x="center" data-hoffset="0" data-y="100" data-speed="1500" data-start="500" data-easing="Back.easeInOut" data-endeasing="Power1.easeIn" data-endspeed="300">
                    Bienvenidos a Macladas
                </div>
                <!-- END LAYER -->

                <!-- LAYER -->
                <div class="tp-caption re-text-v1 sft" data-x="center" data-hoffset="0" data-y="200" data-speed="1400" data-start="2000" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                    Empresa dedicada a proyectos de ingeniería y construcción
                </div>
                <!-- END LAYER -->

                <!-- LAYER -->
                <div class="tp-caption sft" data-x="center" data-hoffset="0" data-y="320" data-speed="1600" data-start="2800" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                    <a href="{{ URL::route('about') }}" class="btn-u btn-u-lg re-btn-brd margin-right-5">Saber sobre nosotros</a>
                    <a href="{{ URL::route('contacto') }}" class="btn-u btn-u-lg">Ver como contactarnos</a>
                </div>
                <!-- END LAYER -->
            </li>
            <!-- END SLIDE -->

            <!-- SLIDE -->
            <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('assets/img_macladas/slider02.jpg') }}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                <!-- LAYER -->
                <div class="tp-caption re-title-v2 sft" data-x="center" data-hoffset="0" data-y="100" data-speed="1400" data-start="1000" data-easing="easeOutBack" data-endspeed="300" data-endeasing="easeInQuad" data-captionhidden="off" style="z-index: 6">
                    Obras de ingeniería civil
                </div>

                <!-- LAYER -->
                <div class="tp-caption re-text-v1 sft" data-x="center" data-hoffset="0" data-y="150" data-speed="1600" data-start="2000" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                    Otorgamos eficiencia y calidad en cada uno de nuestros servicios.
                </div>
                <!-- LAYER -->
                <div class="tp-caption sfb" data-x="center" data-hoffset="0" data-y="230" data-speed="1600" data-start="2800" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                    <a href="{{ URL::route('services') }}" class="btn-u btn-u-lg re-btn-brd margin-right-5">Ver nuestros servicios </a>
                </div>
                {{--
                <!-- LAYER -->
                <div class="tp-caption sfb" data-x="center" data-hoffset="0" data-y="230" data-speed="1800" data-start="3000" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                    <img src="{{asset('assets/img/mockup/white-ipad.png') }}" alt="">
                </div>
                --}}
            </li>
            <!-- END SLIDE -->

            <!-- SLIDE -->
            <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 3">
            <!-- MAIN IMAGE -->
                <img src="{{ asset('assets/img_macladas/slider01.jpg') }}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                <div class="tp-caption re-title-v2 sft start" data-x="20" data-hoffset="0" data-y="150" data-speed="1500" data-start="500" data-easing="Back.easeInOut" data-endeasing="Power1.easeIn" data-endspeed="300">
                    Excelencia y responsabilidad
                </div>

                <div class="tp-caption re-text-v2 sft start" data-x="20" data-hoffset="0" data-y="220" data-speed="2000" data-start="1000" data-easing="Back.easeInOut" data-endeasing="Power1.easeIn" data-endspeed="300">
                    Muchas empresas ya han confiado en nosotros
                </div>

                <!-- LAYER -->
                <div class="tp-caption sft" data-x="20" data-hoffset="0" data-y="320" data-speed="1600" data-start="2800" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                    <a href="{{ URL::route('portfolio') }}" class="btn-u btn-u-lg">Ver portafolio</a>
                </div>
            </li>
            <!-- END SLIDE -->
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>
<!--=== End Slider ===-->