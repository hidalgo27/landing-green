@extends('layouts.page.app')
@section('content')
    <!--== Scroll to top ==-->
    <a href="javascript:void(0)" class="scroll-top"><i class="fa fa-angle-up"></i></a>

    <!--== Start PreLoader Wrap ==-->
    <div class="preloader-area-wrap">
        <div class="spinner d-flex justify-content-center align-items-center h-100">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!--== End PreLoader Wrap ==-->

    <!-- partial:_demo-panel.htm   partial -->

    <!--== Start Header Area Wrapper ==-->
    <header class="header-area-wrapper transparent-header sticky-header">
        <div class="container-fluid">
            <div class="row">
                <!-- Start Logo Area Wrap -->
                <div class="col-6 col-lg-2">
                    <a href="index.html" class="logo-wrap d-block">
                        <img src="{{asset('images/logo-green-edu.png')}}" alt="White Logo" />
{{--                        <img src="assets/img/logo-black.png" class="sticky-logo" alt="Black Logo" />--}}
                    </a>
                </div>
                <!-- End Logo Area Wrap -->

                <!-- Start Main Navigation Wrap -->
                <div class="col-6 col-lg-10 my-auto ml-auto position-static">
                    <div class="header-right-area d-flex justify-content-end align-items-center">
                        <div class="navigation-area-wrap d-none d-lg-block mr-5">
                            <nav class="main-navigation">
                                <ul class="main-menu nav landing-nav justify-content-end">
                                    <li><a href="#cursos">Cursos</a>
                                    </li>
                                    <li><a href="#docentes">Docentes</a>
                                    </li>
                                    <li><a href="#faq">Preguntas Frecuentes</a>
                                    </li>
                                    <li><a href="#oficina">Oficina</a>
                                    </li>
                                    <li><a href="https://greenacademia.workplace.com" target="_blank"><span class="text-g-green">Login <i class="fa fa-sign-in"></i></span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

{{--                        <div class="off-canvas-area-wrap nav">--}}
{{--                            <button class="search-box-open d-block d-lg-none"><i class="fa fa-search"></i>--}}
{{--                            </button>--}}
{{--                            <button class="off-canvas-btn d-none d-lg-block"><i class="fa fa-bars"></i>--}}
{{--                            </button>--}}
{{--                            <button class="mobile-menu text-white d-lg-none"><i class="fa fa-bars"></i>--}}
{{--                            </button>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <!-- End Main Navigation Wrap -->
            </div>
        </div>
    </header>
    <!--== End Header Area Wrapper ==-->

    <!-- Start Hero Slider Area Wrapper -->
    <div class="slider-area-wrapper fix">
        <div id="rev_slider_13_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="classic-agency" data-source="gallery">
            <div id="rev_slider_classic" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8">
                <ul>
                    <!-- SLIDE 01 -->

                    <!-- SLIDE 02 -->
                    <li data-index="rs-31" data-transition="slideoverright" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{asset('images/astronauta.jpg')}}"
                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('images/astronauta.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 2 -->
{{--                        <div class="tp-caption abrill-110-400   tp-resizeme" id="slide-39-layer-1" data-x="['center','left','left','left']" data-hoffset="['320','80','80','80']" data-y="['middle','middle','middle','middle']" data-voffset="['-80','-200','-200','-140']" data-fontsize="['110','110','110','40']"--}}
{{--                             data-lineheight="['100','100','100','40']" data-width="['670','670','670','320']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":1740,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'--}}
{{--                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; min-width: 670px; max-width: 670px; white-space: normal; line-height: 100px; color: rgba(255,255,255,1);">--}}
{{--                            CICLO Primera opcion--}}
{{--                        </div>--}}

                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-39-layer-5" data-x="['center','left','left','left']" data-hoffset="['-60','40','40','40']" data-y="['middle','middle','middle','middle']" data-voffset="['-75','-195','-195','-140']"
                             data-width="7" data-height="['280','280','280','120']" data-whitespace="normal" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":10,"speed":1160,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:#aeea00;"></div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption   tp-resizeme" id="slide-31-layer-3" data-x="['center','left','left','left']" data-hoffset="['320','80','80','80']" data-y="['middle','middle','middle','middle']" data-voffset="['-80','-200','-200','-140']" data-fontsize="['110','110','110','40']"
                             data-lineheight="['120','60','100','60']" data-width="['670','670','670','420']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":1740,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[30,30,30,30]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index: 5; white-space: nowrap; font-size: 90px; line-height: 110px; font-weight: 700; color: rgba(255,255,255,1);letter-spacing:0">
                             <span class="text-g-green">CICLO PRIMERA OPCIÓN</span>
                        </div>

                        <div class="tp-caption poppins-16-400   tp-resizeme" id="slide-39-layer-2" data-x="['center','left','left','left']" data-hoffset="['320','80','80','80']" data-y="['middle','middle','middle','middle']" data-voffset="['150','40','40','110']" data-width="['600','670','670','420']"
                             data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":2530,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; min-width: 670px; max-width: 670px; white-space: normal; color: rgba(255,255,255,1);">
                            <span class="font-weight-bold h5 text-white">Inicio de clases 28 de septiembre</span>
                        </div>

{{--                        <!-- LAYER NR. 5 -->--}}
{{--                        <div class="tp-caption tp-resizeme" id="slide-31-layer-4" data-x="['center','center','center','center']" data-hoffset="['8','-12','0','-4']" data-y="['middle','middle','middle','middle']" data-voffset="['65','53','46','-84']" data-fontsize="['18','18','24','20']"--}}
{{--                             data-lineheight="['124','24','30','26']" data-width="['700','600','601','400']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'--}}
{{--                             data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[30,30,30,30]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index: 6; min-width: 700px; max-width: 700px; white-space: normal; font-size: 18px; line-height: 24px; font-weight: 600; color: rgba(255,255,255,1);">--}}
{{--                            Inicio de clases 28 de septiembre--}}
{{--                        </div>--}}

                        <!-- LAYER NR. 7 -->
                        <a href="{{route('agosto_2020_path')}}" class="tp-caption rev-btn " id="slide-31-layer-5" data-x="['center','center','center','center']" data-hoffset="['140','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['250','176','176','42']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":1200,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(31,31,31,1);bc:rgba(31,31,31,1);"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[21,21,21,21]" data-paddingright="[30,30,30,30]" data-paddingbottom="[21,21,21,21]" data-paddingleft="[30,30,30,30]" style="z-index: 7; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 600; color: rgba(31,31,31,1);background-color:#aeea00;border-color:#aeea00;border-style:solid;border-width:2px 2px 2px 2px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                            QUIERO REGISTRARME
                        </a>
                    </li>

                    <li data-index="rs-30" data-transition="slideoverright" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{asset('images/pizarra.png')}}"
                        data-rotate="0" data-saveperformance="off" data-title="Slide">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('images/pizarra.png')}}" alt="Slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme" id="slide-30-layer-3" data-x="['center','center','center','center']" data-hoffset="['1','-11','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-53','-82','-59','-171']" data-fontsize="['90','70','50','25']"
                             data-lineheight="['140','110','80','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[30,30,30,30]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index: 5; white-space: nowrap; font-size: 50px; line-height: 140px; font-weight: 700; color: rgba(255,255,255,1);letter-spacing:0;">
                            PRE UNSAAC - PRE ANDINA
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme" id="slide-30-layer-4" data-x="['center','center','center','center']" data-hoffset="['8','-12','0','-4']" data-y="['middle','middle','middle','middle']" data-voffset="['69','53','46','-84']" data-fontsize="['18','18','24','20']"
                             data-lineheight="['35','35','35','24']" data-width="['700','600','601','420']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'
                             data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[30,30,30,30]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index: 6; min-width: 700px; max-width: 700px; white-space: normal; font-size: 18px; line-height: 24px; font-weight: 600; color: rgba(255,255,255,1);">
                            Ingrese a la carrera profesional que desees. <span class="text-g-green">Luz verde para la Universidad.</span>
                        </div>

                        <!-- LAYER NR. 3 -->
{{--                        <div class="tp-caption rev-btn " id="slide-30-layer-6" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['176','176','176','42']" data-width="none" data-height="none"--}}
{{--                             data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":1200,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#aeea00;bg:rgba(31,31,31,1);bc:rgba(31,31,31,1);"}]'--}}
{{--                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[21,21,21,21]" data-paddingright="[30,30,30,30]" data-paddingbottom="[21,21,21,21]" data-paddingleft="[30,30,30,30]" style="z-index: 7; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 600; color: rgba(31,31,31,1);background-color:#aeea00;border-color:#aeea00;border-style:solid;border-width:2px 2px 2px 2px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">--}}
{{--                            Comenzar Ahora--}}
{{--                        </div>--}}
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- End Hero Slider Area Wrapper -->

    <!--== Start Welcome Area Wrapper ==-->
    <section class="welcome-section mt-120 mt-md-80 mt-sm-60">
        <div class="container">
            <div class="row">
                <!-- Start Section title -->
                <div class="col-lg-6 m-auto text-center">
                    <div class="section-title-wrap">
                        <h2>Inicia tu camino...</h2>
                        <p class="mb-0">Clases en vivo y pre-grabadas + Asesoría personalizada a cada estudiante para lograr obtener óptimos resultados en su examen de admisión..</p>
                    </div>
                </div>
                <!-- End Section title -->
            </div>

            <div class="row text-center mtm-30">
                <div class="col-md-4">
                    <!-- Start Single Discover Item -->
                    <div class="single-discover-item-wrap">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <img src="{{asset('images/iconos/web/simple/metas.png')}}" alt="" class="w-100">
                            </div>
                        </div>
                        <h3>Logra tus metas:</h3>
                        <p>No sólo videos: Clases concretas, descargables, prácticas y desde cualquier dispositivo.
                        </p>
                    </div>
                    <!-- End Single Discover Item -->
                </div>

                <div class="col-md-4">
                    <!-- Start Single Discover Item -->
                    <div class="single-discover-item-wrap">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <img src="{{asset('images/iconos/web/simple/examenes.png')}}" alt="" class="w-100">
                            </div>
                        </div>
                        <h3>Examen de admisión y reforzamiento</h3>
                        <p>Se realizaran simulacros de exámenes de admisión virtual y exámenes de reforzamiento por cada tema que se realice.
                        </p>
                    </div>
                    <!-- End Single Discover Item -->
                </div>

                <div class="col-md-4">
                    <!-- Start Single Discover Item -->
                    <div class="single-discover-item-wrap">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <img src="{{asset('images/iconos/web/simple/comunidad.png')}}" alt="" class="w-100">
                            </div>
                        </div>
                        <h3>La mejor comunidad</h3>
                        <p>Crearemos una ruta de aprendizaje personalizada y toda nuestra comunidad te acompañará.
                        </p>
                    </div>
                    <!-- End Single Discover Item -->
                </div>
            </div>


        </div>
    </section>
    <!--== End Welcome Area Wrapper ==-->

    <!--== Start Fun Fact Area Wrapper ==-->
    <section class="fun-fact-area-wrapper mt-120 mt-md-62 mt-sm-42">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <!-- Single FunFact Start -->
                <div class="col-6 col-lg-3 text-center">
                    <div class="single-fun-fact-wrap bg-img" data-bg="assets/img/home-classic-agency/fun-fact/01.jpg">
                        <p class="fun-fact-number"><span class="odometer" data-count="5770"></span>
                        </p>
                        <h4>Horas de trabajo</h4>
                    </div>
                </div>
                <!-- Single FunFact End -->

                <!-- Single FunFact Start -->
                <div class="col-6 col-lg-3 text-center">
                    <div class="single-fun-fact-wrap bg-img" data-bg="assets/img/home-classic-agency/fun-fact/02.jpg">
                        <p class="fun-fact-number"><span class="odometer" data-count="99"></span>%</p>
                        <h4>Clientes felices</h4>
                    </div>
                </div>
                <!-- Single FunFact End -->

                <!-- Single FunFact Start -->
                <div class="col-6 col-lg-3 text-center">
                    <div class="single-fun-fact-wrap bg-img" data-bg="assets/img/home-classic-agency/fun-fact/03.jpg">
                        <p class="fun-fact-number"><span class="odometer" data-count="40"></span>+</p>
                        <h4>Proyectos realizados</h4>
                    </div>
                </div>
                <!-- Single FunFact End -->

                <!-- Single FunFact Start -->
                <div class="col-6 col-lg-3 text-center">
                    <div class="single-fun-fact-wrap bg-img" data-bg="assets/img/home-classic-agency/fun-fact/04.jpg">
                        <p class="fun-fact-number"><span class="odometer" data-count="1200"></span>
                        </p>
                        <h4>Tazas de café</h4>
                    </div>
                </div>
                <!-- Single FunFact End -->
            </div>
        </div>
    </section>
    <!--== End Fun Fact Area Wrapper ==-->

    <div class="team-hero-area fixed-height parallaxBg bg-img" data-bg="{{asset('images/pizarra.png')}}">
        <div class="container h-100">
            <div class="row team-member-item h-100">
                <div class="col-lg-7 text-center m-auto">
                    <div class="about-us-content section-title-wrap white mt-70 mt-sm-50">
                        <i class="fa text-g-green fa-4x fa-microphone"></i>
                        <h2 class="text-g-green">Green</h2>
                        <p class="mb-0">Somos GREEN, una institución educativa enfocada en prepararte para que obtengas un alto puntaje en las pruebas de Admisión (UNSAAC y ANDINA) Nuestra metodología online te permitirá desarrollar todo vuestro potencial y aprender de una manera dinámica.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-wrapper" id="cursos">
        <!-- Start Portfolio Content Wrapper -->
        <div class="portfolio-page-content-wrapper fix mt-120 mt-md-80 mt-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Portfolio Filterable Menu -->
                        <div class="portfolio-filter-menu mb-md-50">
                            <ul class="port-filter-menu nav justify-content-center">
                                <li class="active" data-filter="*">Todos los cursos</li>
                                <li data-filter=".grupo-a">Grupos A</li>
                                <li data-filter=".grupo-b">Grupo B</li>
                                <li data-filter=".grupo-c">Grupo C</li>
                                <li data-filter=".grupo-d">Grupo D</li>
                            </ul>
                        </div>
                        <!-- End Portfolio Filterable Menu -->

                        <!-- Start Portfolio Content Wrap -->
                        <div class="portfolio-content">
                            <div class="row mtm-30 masonry-grid">
                                <!-- Single Portfolio Item #01 -->
                                <div class="col-4 col-lg-2 grupo-a grupo-b grupo-c grupo-d">
                                    <div class="single-portfolio-wrap">
                                        <figure class="portfolio-thumb">
                                            <img src="{{asset('images/iconos/cursos/circle/rm.png')}}" alt="Portfolio Image" />
                                            <figcaption class="portfolio-details">
                                                <div class="port-info text-center">
                                                    <small class="font-weight-bold text-center text-white mx-auto">Aritmética</small>
{{--                                                    <nav class="nav portfolio-cate">--}}
{{--                                                        <a href="portfolio-details.html">Design</a>--}}
{{--                                                        <a href="portfolio-details.html">Photography</a>--}}
{{--                                                    </nav>--}}
                                                </div>

{{--                                                <a href="portfolio-details.html" class="btn-view-work">View Work <i--}}

{{--                                                        class="fa fa-long-arrow-right"></i></a>--}}
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <!-- Single Portfolio Item #01 -->
                                <div class="col-4 col-lg-2 grupo-a grupo-b grupo-c">
                                    <div class="single-portfolio-wrap">
                                        <figure class="portfolio-thumb">
                                            <img src="{{asset('images/iconos/cursos/circle/algebra.png')}}" alt="Portfolio Image" />
                                            <figcaption class="portfolio-details">
                                                <div class="port-info text-center">
                                                    <small class="font-weight-bold text-center text-white mx-auto">Algebra</small>
{{--                                                    <nav class="nav portfolio-cate">--}}
{{--                                                        <a href="portfolio-details.html">Design</a>--}}
{{--                                                        <a href="portfolio-details.html">Photography</a>--}}
{{--                                                    </nav>--}}
                                                </div>

{{--                                                <a href="portfolio-details.html" class="btn-view-work">View Work <i--}}

{{--                                                        class="fa fa-long-arrow-right"></i></a>--}}
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!-- Single Portfolio Item #02 -->
                                <div class="col-4 col-lg-2 grupo-b">
                                    <div class="single-portfolio-wrap">
                                        <figure class="portfolio-thumb">
                                            <img src="{{asset('images/iconos/cursos/circle/biologia.png')}}" alt="Portfolio Image" />

                                            <figcaption class="portfolio-details">
                                                <div class="port-info text-center">
                                                    <small class="font-weight-bold text-center text-white mx-auto">Biología</small>
{{--                                                    <nav class="nav portfolio-cate">--}}
{{--                                                        <a href="portfolio-details.html">Design</a>--}}
{{--                                                        <a href="portfolio-details.html">Photography</a>--}}
{{--                                                    </nav>--}}
                                                </div>

{{--                                                <a href="portfolio-details.html" class="btn-view-work">View Work <i--}}

{{--                                                        class="fa fa-long-arrow-right"></i></a>--}}
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!-- Single Portfolio Item #03 -->
                                <div class="col-4 col-lg-2 grupo-a grupo-b grupo-c grupo-d">
                                    <div class="single-portfolio-wrap">
                                        <figure class="portfolio-thumb">
                                            <img src="{{asset('images/iconos/cursos/circle/comunicacion.png')}}" alt="Portfolio Image" />

                                            <figcaption class="portfolio-details">
                                                <div class="port-info text-center">
                                                    <small class="font-weight-bold text-center text-white mx-auto">C. Comunicativa</small>
{{--                                                    <nav class="nav portfolio-cate">--}}
{{--                                                        <a href="portfolio-details.html">Design</a>--}}
{{--                                                        <a href="portfolio-details.html">Photography</a>--}}
{{--                                                    </nav>--}}
                                                </div>

{{--                                                <a href="portfolio-details.html" class="btn-view-work">View Work <i--}}

{{--                                                        class="fa fa-long-arrow-right"></i></a>--}}
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!-- Single Portfolio Item #04 -->
                                <div class="col-4 col-lg-2 grupo-c">
                                    <div class="single-portfolio-wrap">
                                        <figure class="portfolio-thumb">
                                            <img src="{{asset('images/iconos/cursos/circle/economia.png')}}" alt="Portfolio Image" />

                                            <figcaption class="portfolio-details">
                                                <div class="port-info text-center">
                                                    <small class="font-weight-bold text-center text-white mx-auto">Economía</small>
{{--                                                    <nav class="nav portfolio-cate">--}}
{{--                                                        <a href="portfolio-details.html">Design</a>--}}
{{--                                                        <a href="portfolio-details.html">Photography</a>--}}
{{--                                                    </nav>--}}
                                                </div>

{{--                                                <a href="portfolio-details.html" class="btn-view-work">View Work <i--}}

{{--                                                        class="fa fa-long-arrow-right"></i></a>--}}
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!-- Single Portfolio Item #05 -->
                                <div class="col-4 col-lg-2 grupo-d">
                                    <div class="single-portfolio-wrap">
                                        <figure class="portfolio-thumb">
                                            <img src="{{asset('images/iconos/cursos/circle/filosofia.png')}}" alt="Portfolio Image" />

                                            <figcaption class="portfolio-details">
                                                <div class="port-info text-center">
                                                    <small class="font-weight-bold text-center text-white mx-auto">Filosofía</small>
{{--                                                    <nav class="nav portfolio-cate">--}}
{{--                                                        <a href="portfolio-details.html">Design</a>--}}
{{--                                                        <a href="portfolio-details.html">Photography</a>--}}
{{--                                                    </nav>--}}
                                                </div>

{{--                                                <a href="portfolio-details.html" class="btn-view-work">View Work <i--}}

{{--                                                        class="fa fa-long-arrow-right"></i></a>--}}
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!-- Single Portfolio Item #06 -->
                                <div class="col-4 col-lg-2 grupo-a grupo-b">
                                    <div class="single-portfolio-wrap">
                                        <figure class="portfolio-thumb">
                                            <img src="{{asset('images/iconos/cursos/circle/fisica.png')}}" alt="Portfolio Image" />

                                            <figcaption class="portfolio-details">
                                                <div class="port-info text-center">
                                                    <small class="font-weight-bold text-center text-white mx-auto">Física</small>
{{--                                                    <nav class="nav portfolio-cate">--}}
{{--                                                        <a href="portfolio-details.html">Design</a>--}}
{{--                                                        <a href="portfolio-details.html">Photography</a>--}}
{{--                                                    </nav>--}}
                                                </div>

{{--                                                <a href="portfolio-details.html" class="btn-view-work">View Work <i--}}

{{--                                                        class="fa fa-long-arrow-right"></i></a>--}}
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!-- Single Portfolio Item #07 -->
                                <div class="col-4 col-lg-2 grupo-c grupo-d">
                                    <div class="single-portfolio-wrap">
                                        <figure class="portfolio-thumb">
                                            <img src="{{asset('images/iconos/cursos/circle/geografia.png')}}" alt="Portfolio Image" />

                                            <figcaption class="portfolio-details">
                                                <div class="port-info text-center">
                                                    <small class="font-weight-bold text-center text-white mx-auto">Geografía</small>
{{--                                                    <nav class="nav portfolio-cate">--}}
{{--                                                        <a href="portfolio-details.html">Design</a>--}}
{{--                                                        <a href="portfolio-details.html">Photography</a>--}}
{{--                                                    </nav>--}}
                                                </div>

{{--                                                <a href="portfolio-details.html" class="btn-view-work">View Work <i--}}

{{--                                                        class="fa fa-long-arrow-right"></i></a>--}}
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!-- Single Portfolio Item #08 -->
                                <div class="col-4 col-lg-2 grupo-a">
                                    <div class="single-portfolio-wrap">
                                        <figure class="portfolio-thumb">
                                            <img src="{{asset('images/iconos/cursos/circle/geometria.png')}}" alt="Portfolio Image" />

                                            <figcaption class="portfolio-details">
                                                <div class="port-info text-center">
                                                    <small class="font-weight-bold text-center text-white mx-auto">Geo. y Trigo.</small>
{{--                                                    <nav class="nav portfolio-cate">--}}
{{--                                                        <a href="portfolio-details.html">Design</a>--}}
{{--                                                        <a href="portfolio-details.html">Photography</a>--}}
{{--                                                    </nav>--}}
                                                </div>

{{--                                                <a href="portfolio-details.html" class="btn-view-work">View Work <i--}}

{{--                                                        class="fa fa-long-arrow-right"></i></a>--}}
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!-- Single Portfolio Item #09 -->
                                <div class="col-4 col-lg-2 grupo-d">
                                    <div class="single-portfolio-wrap">
                                        <figure class="portfolio-thumb">
                                            <img src="{{asset('images/iconos/cursos/circle/historia.png')}}" alt="Portfolio Image" />

                                            <figcaption class="portfolio-details">
                                                <div class="port-info text-center">
                                                    <small class="font-weight-bold text-center text-white mx-auto">Historia</small>
{{--                                                    <nav class="nav portfolio-cate">--}}
{{--                                                        <a href="portfolio-details.html">Design</a>--}}
{{--                                                        <a href="portfolio-details.html">Photography</a>--}}
{{--                                                    </nav>--}}
                                                </div>

{{--                                                <a href="portfolio-details.html" class="btn-view-work">View Work <i--}}

{{--                                                        class="fa fa-long-arrow-right"></i></a>--}}
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!-- Single Portfolio Item #09 -->
                                <div class="col-4 col-lg-2 grupo-a grupo-b">
                                    <div class="single-portfolio-wrap">
                                        <figure class="portfolio-thumb">
                                            <img src="{{asset('images/iconos/cursos/circle/quimica.png')}}" alt="Portfolio Image" />

                                            <figcaption class="portfolio-details">
                                                <div class="port-info text-center">
                                                    <small class="font-weight-bold text-center text-white mx-auto">Química</small>
{{--                                                    <nav class="nav portfolio-cate">--}}
{{--                                                        <a href="portfolio-details.html">Design</a>--}}
{{--                                                        <a href="portfolio-details.html">Photography</a>--}}
{{--                                                    </nav>--}}
                                                </div>

{{--                                                <a href="portfolio-details.html" class="btn-view-work">View Work <i--}}

{{--                                                        class="fa fa-long-arrow-right"></i></a>--}}
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!-- Single Portfolio Item #09 -->
                                <div class="col-4 col-lg-2 grupo-c grupo-d">
                                    <div class="single-portfolio-wrap">
                                        <figure class="portfolio-thumb">
                                            <img src="{{asset('images/iconos/cursos/circle/rv.png')}}" alt="Portfolio Image" />

                                            <figcaption class="portfolio-details">
                                                <div class="port-info text-center">
                                                    <small class="font-weight-bold text-center text-white mx-auto">Psicologia</small>
                                                    {{--                                                    <nav class="nav portfolio-cate">--}}
                                                    {{--                                                        <a href="portfolio-details.html">Design</a>--}}
                                                    {{--                                                        <a href="portfolio-details.html">Photography</a>--}}
                                                    {{--                                                    </nav>--}}
                                                </div>

                                                {{--                                                <a href="portfolio-details.html" class="btn-view-work">View Work <i--}}

                                                {{--                                                        class="fa fa-long-arrow-right"></i></a>--}}
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Portfolio Content Wrap -->
                    </div>

{{--                    <div class="col-12 mt-120 mt-md-80 mt-sm-60">--}}
{{--                        <!--== Start Pagination Area ==-->--}}
{{--                        <div class="pagination-content pagination-content-2 bg-offwhite">--}}
{{--                            <ul class="nav">--}}
{{--                                <li class="btn-arrow btn-prev mr-auto"><a href="#"><i class="fa fa-angle-left"></i></a>--}}
{{--                                </li>--}}
{{--                                <li><a href="#" class="active">1</a>--}}
{{--                                </li>--}}
{{--                                <li><a href="#">2</a>--}}
{{--                                </li>--}}
{{--                                <li><a href="#">3</a>--}}
{{--                                </li>--}}
{{--                                <li class="btn-arrow btn-next ml-auto"><a href="#"><i class="fa fa-angle-right"></i></a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <!--== End Pagination Area ==-->--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Portfolio Content Wrapper -->
    </div>


    <section id="como" class="event-about-area  mt-120 mt-md-80 mt-sm-60 mb-120 mb-md-80 mb-sm-60">
        <div class="container">
            <div class="row">
                <!-- Start Section title -->
                <div class="col-lg-8 m-auto text-center">
                    <div class="section-title-wrap layout--2">
                        <i class="fa fa-microphone"></i>
                        <h2>Green</h2>
                        <p class="mb-0">Somos GREEN, una institución educativa enfocada en prepararte para que obtengas un alto puntaje en las pruebas de Admisión (UNSAAC y ANDINA) Nuestra metodología online te permitirá desarrollar todo vuestro potencial y aprender de una manera dinámica.</p>
                    </div>
                </div>
                <!-- End Section title -->
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <figure class="welcome-thumbnail">
                        <img src="{{asset('images/banner-1.jpg')}}" alt="Welcome Image" />
                    </figure>
                </div>

                <div class="col-lg-8">
                    <div class="welcome-feature mt-sm-32 mt-md-36">
                        <div class="row">
                            <!-- Start Single Welcome Feature -->
                            <div class="col-md-6">
                                <div class="single-welcome-feature d-flex">
                                    <div class="feature-icon">
                                        <img src="https://s3-us-west-1.amazonaws.com/green.com.pe/web/step/plataforma.jpg" alt="" width="70" height="70">
                                    </div>

                                    <div class="feature-info">
                                        <h3>Plataforma responsive:</h3>
                                        <p>Laptop, Celular, Tableta, Desktop, incluso Smart TV.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Welcome Feature -->

                            <!-- Start Single Welcome Feature -->
                            <div class="col-md-6">
                                <div class="single-welcome-feature d-flex">
                                    <div class="feature-icon">
                                        <img src="https://s3-us-west-1.amazonaws.com/green.com.pe/web/step/clases.jpg" alt="" width="70" height="70">
                                    </div>
                                    <div class="feature-info">
                                        <h3>Clases 100% Dinámicas</h3>
                                        <p>Teoría y Ejercicios de forma entretenida.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Welcome Feature -->

                            <!-- Start Single Welcome Feature -->
                            <div class="col-md-6">
                                <div class="single-welcome-feature d-flex">
                                    <div class="feature-icon">
                                        <img src="https://s3-us-west-1.amazonaws.com/green.com.pe/web/step/modulo.jpg" alt="" width="70" height="70">
                                    </div>

                                    <div class="feature-info">
                                        <h3>Modulo completo x Curso</h3>
                                        <p>Desarrollo de todo el temario.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Welcome Feature -->

                            <!-- Start Single Welcome Feature -->
                            <div class="col-md-6">
                                <div class="single-welcome-feature d-flex">
                                    <div class="feature-icon">
                                        <img src="https://s3-us-west-1.amazonaws.com/green.com.pe/web/step/asesoria.jpg" alt="" width="70" height="70">
                                    </div>

                                    <div class="feature-info">
                                        <h3>Asesoría Personalizada</h3>
                                        <p>Contacto directo con profesores, incluyendo Asesorías.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Welcome Feature -->

                            <!-- Start Single Welcome Feature -->
                            <div class="col-md-6">
                                <div class="single-welcome-feature d-flex">
                                    <div class="feature-icon">
                                        <img src="https://s3-us-west-1.amazonaws.com/green.com.pe/web/step/evaluaciones.jpg" alt="" width="70" height="70">
                                    </div>

                                    <div class="feature-info">
                                        <h3>Evaluaciones</h3>
                                        <p>Simulacros de Exámenes de Admisión.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Welcome Feature -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="docentes">
        <div class="container">
            <div class="row">
                <!-- Start Section title -->
                <div class="col-lg-8 m-auto text-center">
                    <div class="section-title-wrap layout--2">
                        <i class="fa fa-microphone"></i>
                        <h2>Plana Docente</h2>
                        {{--                        <p class="mb-0">Somos GREEN, una institución educativa enfocada en prepararte para que obtengas un alto puntaje en las pruebas de Admisión (UNSAAC y ANDINA) Nuestra metodología online te permitirá desarrollar todo vuestro potencial y aprender de una manera dinámica.</p>--}}
                    </div>
                </div>
                <!-- End Section title -->
            </div>
        </div>
    </section>
    <section id="landing-testimonial" class="testimonial-area showcase-layout  bg-img" data-bg="{{asset('images/galaxy.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-content-wrap">
                        <div class="ht-slick-slider dots-style-two" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "adaptiveHeight": true, "dots": true, "centerMode": true, "centerPadding": 0, "responsive": [{"breakpoint": 991,"settings": {"slidesToShow": 1}}] }'>

                            @foreach($docente as $docentes)
                            <div class="single-testimonial-wrap layout--4">
                                <figure class="author-thumb">
                                    <img src="{{$docentes->imagen}}" alt="Testimonial" />
                                </figure>
{{--                                <p>This is absolutely the best theme I have ever used. The design quality is exquisite. Their response time is unheard of.</p>--}}
                                <h3 class="client-name">{{$docentes->nombre}} <span class="client-designation">{{$docentes->curso}}</span>
                                </h3>
                                <img src="{{$docentes->imagen_d}}" alt="" class="d-curso mx-auto pt-2">
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('images/docentes/plana.png')}}" alt="" class="w-100">
    </section>



    <section id="faq">
        <div class="accordion-content-wrapper mt-120 mt-md-80 mt-sm-60 mb-120 mb-md-80 mb-sm-60">
            <div class="container">
                <div class="row mb-5">
                    <!-- Start Section title -->
                    <div class="col-lg-6 m-auto text-center">
                        <div class="section-title-wrap layout--2">
                            <i class="fa fa-list"></i>
                            <h2>Preguntas Frecuentes</h2>
                        </div>
                    </div>
                    <!-- End Section title -->
                </div>
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <!-- Start Accordion Element #01 -->
                        <div class="accordion-element-1">
                            <div class="restaurant-why-us-accordion" id="accordionOne">
                                <!-- Start Accordion item #01 -->
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h3 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">

                                            <span>01.</span> ¿Cómo puedo inscribirme?

                                        </h3>
                                    </div>

                                    <div id="collapseOne" class="collapse show" data-parent="#accordionOne">
                                        <div class="card-body">
                                            <p>Contáctanos vía whatsapp de 8am a 8pm para que un representante pueda asistirte o también te invitamos a visitarnos en nuestra sede central en Cusco.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Start Accordion item #02 -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h3 data-toggle="collapse" data-target="#collapseTwo">

                                            <span>02.</span>¿Que grupos enseñamos?

                                        </h3>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordionOne">
                                        <div class="card-body">
                                            <p>Actualmente abarcamos todos los grupos A-B-C-D (UNSAAC)</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Start Accordion item #03 -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h3 data-toggle="collapse" data-target="#collapseThree">

                                            <span>03.</span> ¿Cuales son los horarios?

                                        </h3>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordionOne">
                                        <div class="card-body">
                                            <p>Las clases son desde 8.30am a 6.00pm.
                                                Al cambiar los horarios cada semestre solicitamos por favor contactar a vuestro asesor educativo GREEN para obtener el horario mas actualizado según vuestro grupo. (999 200 117).
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Start Accordion item #04 -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h3 data-toggle="collapse" data-target="#collapseFour">

                                            <span> 04.</span> ¿Cuales son los costos?

                                        </h3>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordionOne">
                                        <div class="card-body">
                                            <p>S/99 soles mensuales y también contamos con una promoción x tiempo limitado: 2x3 : paga 2 meses y estudia 3 meses, abonando S/198 podrás acceder a 3 meses de clases.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Start Accordion item #05 -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h3 data-toggle="collapse" data-target="#collapseFour">

                                            <span> 05.</span> Cómo funcionan las clases

                                        </h3>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordionOne">
                                        <div class="card-body">
                                            <p>Vía online; nuestros estudiantes reciben los accesos respectivos de nuestras clases en vivo las cuales se desarrollan desde nuestra sede central.
                                                Igualmente brindamos ejercicios y exámenes simulacros de admisión.

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Start Accordion item #06 -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h3 data-toggle="collapse" data-target="#collapseFour">

                                            <span> 06.</span> ¿Cuentan con primera opción?

                                        </h3>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordionOne">
                                        <div class="card-body">
                                            <p>Por el momento solo Ordinario.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Start Accordion item #07 -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h3 data-toggle="collapse" data-target="#collapseFour">

                                            <span> 07.</span> ¿Hay un acompañamiento fuera de las clases sobre los temas vistos?

                                        </h3>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordionOne">
                                        <div class="card-body">
                                            <p>A cada alumno se le asignará un asesor el cual realizará un acompañamiento personalizado tanto con el estudiante como con sus padres.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Start Accordion item #08 -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h3 data-toggle="collapse" data-target="#collapseFour">

                                            <span> 08.</span> En caso de perder una clase por x motivo. ¿Tengo opción a recuperarla? Si es así, ¿mediante qué medio?

                                        </h3>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordionOne">
                                        <div class="card-body">
                                            <p>Afirmativo, si un estudiante pierde una clase deberá contactar a su asesor para solicitar el acceso de la clase a recuperar.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Start Accordion item #09 -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h3 data-toggle="collapse" data-target="#collapseFour">

                                            <span> 09.</span> ¿Cuál debería ser mi calidad de conexión a internet?

                                        </h3>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordionOne">
                                        <div class="card-body">
                                            <p>velocidad que permita ver videos.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Start Accordion item #10 -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h3 data-toggle="collapse" data-target="#collapseFour">

                                            <span> 10.</span> Las dudas al profesor, aparte de las clases en vivo; ¿por donde puedo resolverlas?

                                        </h3>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordionOne">
                                        <div class="card-body">
                                            <p>Cada profesor cuenta con horas de atención para consultas por favor coordinar con su Asesor la comunicación con el profesor deseado.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Start Accordion item #11 -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h3 data-toggle="collapse" data-target="#collapseFour">

                                            <span> 11.</span> ¿Cuanto duran las clases?

                                        </h3>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordionOne">
                                        <div class="card-body">
                                            <p>El ciclo dura 3 meses.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Start Accordion item #12 -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h3 data-toggle="collapse" data-target="#collapseFour">

                                            <span> 12.</span> ¿Existen descuentos para miembros de una misma familia?

                                        </h3>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordionOne">
                                        <div class="card-body">
                                            <p>Afirmativo, por favor contáctanos para una cotización personalizada.
                                            </p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- End Accordion Element #01 -->

                    </div>
                </div>
            </div>
    </section>

@endsection
