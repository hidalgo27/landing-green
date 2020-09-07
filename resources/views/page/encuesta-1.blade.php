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
                                <ul class="main-menu nav justify-content-end">
                                    <li><a href="inner-pages/agency/about.html">Cursos</a>
                                    </li>
                                    <li><a href="inner-pages/agency/portfolio.html">Preguntas Frecuentes</a>
                                    </li>
                                    <li><a href="inner-pages/agency/blog.html">Oficina</a>
                                    </li>
                                    <li><a href="inner-pages/agency/contact.html"><span class="text-g-green">Login <i class="fa fa-sign-in"></i></span></a>
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
                        <div class="tp-caption rev-btn " id="slide-30-layer-6" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['176','176','176','42']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":1200,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#aeea00;bg:rgba(31,31,31,1);bc:rgba(31,31,31,1);"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[21,21,21,21]" data-paddingright="[30,30,30,30]" data-paddingbottom="[21,21,21,21]" data-paddingleft="[30,30,30,30]" style="z-index: 7; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 600; color: rgba(31,31,31,1);background-color:#aeea00;border-color:#aeea00;border-style:solid;border-width:2px 2px 2px 2px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                            Comenzar Ahora
                        </div>
                    </li>
                    <!-- SLIDE 02 -->
                    <li data-index="rs-31" data-transition="slideoverright" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{asset('images/pizarra.png')}}"
                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('images/primera-2.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption   tp-resizeme" id="slide-31-layer-3" data-x="['center','center','center','center']" data-hoffset="['1','-11','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-53','-82','-59','-171']" data-fontsize="['90','70','50','25']"
                             data-lineheight="['110','110','80','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":350,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[30,30,30,30]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index: 5; white-space: nowrap; font-size: 90px; line-height: 110px; font-weight: 700; color: rgba(255,255,255,1);letter-spacing:0">
                            CICLO <span class="text-g-green">PRIMERA OPCIÓN</span>
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-resizeme" id="slide-31-layer-4" data-x="['center','center','center','center']" data-hoffset="['8','-12','0','-4']" data-y="['middle','middle','middle','middle']" data-voffset="['65','53','46','-84']" data-fontsize="['18','18','24','20']"
                             data-lineheight="['24','24','30','26']" data-width="['700','600','601','400']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'
                             data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[30,30,30,30]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index: 6; min-width: 700px; max-width: 700px; white-space: normal; font-size: 18px; line-height: 24px; font-weight: 600; color: rgba(255,255,255,1);">
                            Inicio de clases 28 de septiembre
                        </div>

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption rev-btn " id="slide-31-layer-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['176','176','176','42']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":1200,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(31,31,31,1);bc:rgba(31,31,31,1);"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[21,21,21,21]" data-paddingright="[30,30,30,30]" data-paddingbottom="[21,21,21,21]" data-paddingleft="[30,30,30,30]" style="z-index: 7; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 600; color: rgba(31,31,31,1);background-color:#aeea00;border-color:#aeea00;border-style:solid;border-width:2px 2px 2px 2px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                            QUIERO REGISTRARME
                        </div>
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
                        <p class="fun-fact-number"><span class="odometer" data-count="4770"></span>
                        </p>
                        <h4>Horas de trabajo</h4>
                    </div>
                </div>
                <!-- Single FunFact End -->

                <!-- Single FunFact Start -->
                <div class="col-6 col-lg-3 text-center">
                    <div class="single-fun-fact-wrap bg-img" data-bg="assets/img/home-classic-agency/fun-fact/02.jpg">
                        <p class="fun-fact-number"><span class="odometer" data-count="90"></span>%</p>
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
                        <p class="fun-fact-number"><span class="odometer" data-count="129"></span>
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


    <div class="page-wrapper">
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
                                <div class="col-sm-6 col-lg-2 grupo-a grupo-b grupo-c grupo-d">
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
                                <div class="col-sm-6 col-lg-2 grupo-a grupo-b grupo-c">
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
                                <div class="col-sm-6 col-lg-2 grupo-b">
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
                                <div class="col-sm-6 col-lg-2 grupo-a grupo-b grupo-c grupo-d">
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
                                <div class="col-sm-6 col-lg-2 grupo-c">
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
                                <div class="col-sm-6 col-lg-2 grupo-d">
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
                                <div class="col-sm-6 col-lg-2 grupo-a grupo-b">
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
                                <div class="col-sm-6 col-lg-2 grupo-c grupo-d">
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
                                <div class="col-sm-6 col-lg-2 grupo-a">
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
                                <div class="col-sm-6 col-lg-2 grupo-d">
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
                                <div class="col-sm-6 col-lg-2 grupo-a grupo-b">
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
                                <div class="col-sm-6 col-lg-2 grupo-c grupo-d">
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


@endsection
