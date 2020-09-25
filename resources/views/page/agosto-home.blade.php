<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Somos GREEN ACADEMIA, una institución educativa enfocada en prepararte para que obtengas un alto puntaje en las pruebas de Admisión (UNSAAC y ANDINA).">

    <title>Green Academia Pre | 21 de octubre</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700%7CPlayfair+Display:400,400i" rel="stylesheet">

    <!--=== All Plugins CSS ===-->
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="{{asset('assets/css/vendor.css')}}" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


    <!-- Modernizer JS -->
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v7.0&appId=2238600679714980&autoLogAppEvents=1" nonce="S9QfEn1n"></script>
</head>

<body class="preloader-">

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
                <a href="/" class="logo-wrap d-block">
                    <img src="{{asset('images/logo-green-edu.png')}}" alt="White Logo" />
{{--                    <img src="{{asset('images/logo-green-edu.png')}}" class="sticky-logo" alt="Black Logo" />--}}
                </a>
            </div>
            <!-- End Logo Area Wrap -->

            <!-- Start Main Navigation Wrap -->
            <div class="col-6 col-lg-10 my-auto ml-auto position-static">
                <div class="header-right-area d-flex justify-content-end align-items-center">
                    <div class="navigation-area-wrap d-none d-lg-block mr-5">
                        <nav class="main-navigation">
                            <ul class="main-menu nav landing-nav justify-content-end">
{{--                                <li><a href="index-event.html">Home</a>--}}
{{--                                </li>--}}
                                <li><a href="#clases">Sobre las clases</a>
                                </li>
                                <li><a href="#docentes">Nuestros Docentes</a>
                                </li>
{{--                                <li><a href="#horarios">Horarios por grupos</a>--}}
                                <li><a href="#faq">Preguntas Frecuentes</a>
                                <li><a href="#oficinas">Oficina</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

{{--                    <div class="off-canvas-area-wrap ">--}}

{{--                        <button class="search-box-open d-block d-lg-none"><i class="fa fa-search"></i>--}}
{{--                        </button>--}}
{{--                        <button class="off-canvas-btn d-none d-lg-block"><i class="fa fa-bars"></i>--}}
{{--                        </button>--}}
{{--                        <button class="mobile-menu text-white d-lg-none"><i class="fa fa-bars"></i>--}}
{{--                        </button>--}}
{{--                        --}}
                    </div>
                </div>
            </div>
            <!-- End Main Navigation Wrap -->
        </div>
    </div>
</header>
<!--== End Header Area Wrapper ==-->

<!--== Start Event Hero Banner Area ==-->
<div class="event-hero-area-banner bg-img" data-bg="{{asset('images/astronauta.jpg')}}">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-md-6 my-auto">
                <!-- Start Hero Banner Content -->
                <div class="hero-content-wrap text-center text-md-left landing-nav rgba-black-5 p-5 rounded">
                    <span class="h2 font-weight-light text-g-green">PRE UNSAAC</span>
                    <h2>Inicio 12 de Octubre <span class="d-block">Semana gratis</span></h2>
                    <p>Registrese para poder acceder a nuestras clases totalmente gratis.</p>
                    <p class="text-g-green">También tu registro sirve para el sorteo y examen de Becas</p>
{{--                    <div class="single-fun-fact-wrap layout--2 text-white">--}}
{{--                        <span>Faltan</span>--}}
{{--                        <p class="fun-fact-number"><span class="odometer text-white" data-count="3"></span>--}}
{{--                            <small class="text-white">Días</small>--}}
{{--                        </p>--}}

{{--                    </div>--}}
                    <ul>
                        <li>
                            <a href="#clases" class="btn btn-bordered">Mas información</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-5 col-md-6 my-auto ml-auto">
                <!-- Start Event Registration Area -->
                @if (session('status'))
                    <div class="bg-primary p-3 text-white">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>Ya tienes un registro.</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="event-registration-wrapper py-5 text-center mt-sm-50">
                    <h3 class="mb-0">Registrarse para clases gratis, examen y sorteo de becas</h3>
                    <span class="text-center py-3 d-block">Sin trucos, sin pagos</span>

                    <div class="registration-form">


                        <form action="{{route('form_free_path')}}" method="post">
                            @csrf
                            <div class="single-input-item">
                                <input type="text" name="name" placeholder="Nombre Completo" required/>
                            </div>

                            <div class="single-input-item">
                                <input type="email" name="email" placeholder="Email" required/>
                            </div>

                            <div class="single-input-item">
                                <input type="tel" name="cel" placeholder="Numero de celular (whatsapp)" required/>
                            </div>

                            <div class="single-input-item">
{{--                                <input type="text" name="grupo" placeholder="Grupo" required/>--}}
                                <select name="grupo" required>
                                    <option value="">Seleccione su grupo</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </div>

                            <div class="single-input-item">
                                <button type="submit" class="btn btn-brand w-100">Registrame ahora</button>
                            </div>
                        </form>
                    </div>
                    <small>En GREEN estamos tan seguros de nuestra calidad de clases que te invitamos a probarnos sin compromiso; al final de los 15 días tu eliges si deseas inscribirte o no.
                        Si deseas inscribirte en ese momento el costo sera de S/89 mensuales o S/179 x 3 meses </small>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Event Hero Banner Area ==-->

<section id="docentes" class="testimonial-area showcase-layout  bg-img" data-bg="{{asset('images/galaxy.jpg')}}">
    <div class="container">
        <div class="row">
            <!-- Start Section title -->
            <div class="col-lg-8 m-auto text-center">
                <div class="section-title-wrap layout--2">
                    <i class="fa fa-microphone"></i>
                    <h2 class="text-g-green">Plana Docente</h2>
                    {{--                        <p class="mb-0">Somos GREEN, una institución educativa enfocada en prepararte para que obtengas un alto puntaje en las pruebas de Admisión (UNSAAC y ANDINA) Nuestra metodología online te permitirá desarrollar todo vuestro potencial y aprender de una manera dinámica.</p>--}}
                </div>
            </div>
            <!-- End Section title -->
        </div>
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

<!--== Start Event About Area ==-->
<section id="clases" class="event-about-area  mt-120 mt-md-80 mt-sm-60 mb-120 mb-md-80 mb-sm-60">
    <div class="container">
        <div class="row">
            <!-- Start Section title -->
            <div class="col-lg-6 m-auto text-center">
                <div class="section-title-wrap layout--2">
                    <i class="fa fa-microphone"></i>
                    <h2>Sobre las clases</h2>
                    <p class="mb-0">Pasar a la universidad nunca fue tan sencillo y desde la comodidad de tu casa.</p>
                </div>
            </div>
            <!-- End Section title -->
        </div>

        <div class="row">
            <div class="col-lg-6 order-1 order-lg-0">
                <!-- Start About Event Content -->
                <div class="event-about-content-wrap">
                    <div class="event-about-accordion" id="eventAboutAccordion">
                        <!-- Start Event Accordion #01 -->
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h3 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">

                                    Información general

                                    <span class="icons">

                                        <i class="fa fa-plus"></i>

                                        <i class="fa fa-minus"></i>

                                    </span>

                                </h3>
                            </div>

                            <div id="collapseOne" class="collapse show" data-parent="#eventAboutAccordion">
                                <div class="card-body">
                                    <p class="mb-4">Somos GREEN, una institución educativa enfocada en prepararte para que obtengas un alto puntaje en las pruebas de Admisión (UNSAAC y ANDINA)
                                        Nuestra metodología online te permitirá desarrollar todo vuestro potencial y aprender de una manera dinámica.
                                    </p>
                                    <div class="alert alert-success pt-4 d-block">
                                        GREEN y tu juntos para tener luz verde para tu ingreso!
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Start Event Accordion #02 -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h3 data-toggle="collapse" data-target="#collapseTwo">

                                    Preguntas Frecuentes

                                    <span class="icons">

                                        <i class="fa fa-plus"></i>

                                        <i class="fa fa-minus"></i>

                                    </span>

                                </h3>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#eventAboutAccordion">
                                <div class="card-body">
                                    <p>En GREEN estamos tan seguros de nuestra calidad de clases que te invitamos a probarnos sin compromiso; al final de los 15 días tu eliges si deseas inscribirte o no.
                                        Si deseas inscribirte en ese momento el costo será de S/99 mensuales o S/198 x 3 meses
                                    </p>
                                    <ul>
                                        <li>
                                            <a href="#faq" class="btn btn-bordered">Ver más</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Start Event Accordion #03 -->
{{--                        <div class="card">--}}
{{--                            <div class="card-header" id="headingThree">--}}
{{--                                <h3 data-toggle="collapse" data-target="#collapseThree">--}}

{{--                                    Sponsor Information--}}

{{--                                    <span class="icons">--}}

{{--                                        <i class="fa fa-plus"></i>--}}

{{--                                        <i class="fa fa-minus"></i>--}}

{{--                                    </span>--}}

{{--                                </h3>--}}
{{--                            </div>--}}
{{--                            <div id="collapseThree" class="collapse" data-parent="#eventAboutAccordion">--}}
{{--                                <div class="card-body">--}}
{{--                                        <p>Keytar DIY cred thundercats direct trade viral umami, fanny pack ugh authen shabby chic chartreuse. Lo-fi roof party.Lorem ipsum dolor sit amet, ut vidis commune scriptorem.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>

            <div class="col-lg-6 m-auto">
                <!-- Start Event About Thumbnail Area -->
                <figure class="event-about-thumb mb-sm-30 mb-md-30">
                    <img src="{{asset('images/dos.png')}}" alt="Event About" />
                </figure>


{{--                <div class="fb-video" data-href="https://www.facebook.com/facebook/videos/721667815354456/" data-show-text="false" data-width=""><blockquote cite="https://developers.facebook.com/greencusco/videos/721667815354456/" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/greencusco/videos/721667815354456/">15 DÍAS GRATIS - CLASES ONLINE PRE-UNSAAC, ACADEMIA GREEN</a><p>¡Todo es válido si se trata de tu FUTUR O!--}}
{{--                            ✅  ACADEMIA GREEN  ✅--}}
{{--                            𝗣𝗥𝗘𝗣𝗔𝗥𝗔𝗖𝗜𝗢́𝗡  𝗣𝗥𝗘𝗨𝗡𝗜𝗩𝗘𝗥𝗦𝗜𝗧𝗔𝗥𝗜𝗔--}}
{{--                            🚨 GRUPOS 🇦​​​​​ 🇧​​​​​ 🇨​​​​​ y ​​​​​ 🇩--}}
{{--                            🚨 Pre-Unsaac--}}
{{--                            🚨 Docentes preparados--}}
{{--                            🚨 Clases online--}}
{{--                            👉   Próximo INICIO:  𝟎𝟑 𝐝𝐞 𝐀𝐆𝐎𝐒𝐓𝐎  👈--}}
{{--                            📞 +໋51 999 200 117</p>Publicado por <a href="https://www.facebook.com/greencusco/">GREEN Academia Pre</a> en Lunes, 27 de julio de 2020</blockquote></div>--}}
            </div>
        </div>
    </div>
</section>
<!--== End Event About Area ==-->

<!--== Start Fun Fact Area Wrapper ==-->
{{--<section class="fun-fact-area-wrapper bg-offwhite pt-92 pt-md-70 pt-sm-46 pb-96 pb-md-76 pb-sm-48">--}}
{{--    <div class="container">--}}
{{--        <div class="row mtm-30 align-items-center">--}}
{{--            <!-- Single FunFact Start -->--}}
{{--            <div class="col-6 col-lg-9 text-center">--}}

{{--                    <p class="fun-fact-number"><span class="odometer" data-count="5"></span>--}}
{{--                    </p>--}}
{{--                    <h4 class="font-weight-bold h1">Las Clases inician en:</h4>--}}

{{--            </div>--}}
{{--            <!-- Single FunFact End -->--}}

{{--            <!-- Single FunFact Start -->--}}
{{--            <div class="col-6 col-lg-3 text-center">--}}
{{--                <div class="single-fun-fact-wrap layout--2">--}}
{{--                    <p class="fun-fact-number"><span class="odometer" data-count="20"></span>%</p>--}}
{{--                    <h4>Days</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Single FunFact End -->--}}

{{--            <!-- Single FunFact Start -->--}}
{{--            <div class="col-6 col-lg-3 text-center">--}}
{{--                <div class="single-fun-fact-wrap layout--2">--}}
{{--                    <p class="fun-fact-number"><span class="odometer" data-count="50"></span>+</p>--}}
{{--                    <h4>Speakers</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Single FunFact End -->--}}

{{--            <!-- Single FunFact Start -->--}}
{{--            <div class="col-6 col-lg-3 text-center">--}}
{{--                --}}
{{--            </div>--}}
{{--            <!-- Single FunFact End -->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!--== End Fun Fact Area Wrapper ==-->

<!-- Start Event Banner Wrapper -->
{{--<section class="event-banner-wrapper">--}}
{{--    <div class="event-banner-content d-sm-flex align-items-center">--}}
{{--        <!-- Start Banner Item #01 -->--}}
{{--        <div class="single-banner-wrap bg-img" data-bg="assets/img/home-event/call-action-bg-01.jpg">--}}
{{--            <h2>Many features of the event</h2>--}}
{{--            <a href="#" class="btn btn-bordered">Discover More</a>--}}
{{--        </div>--}}

{{--        <!-- Start Banner Item #02 -->--}}
{{--        <div class="single-banner-wrap bg-img" data-bg="assets/img/home-event/call-action-bg-02.jpg">--}}
{{--            <h2>Tip Ideas for <span>Presentation</span></h2>--}}
{{--            <a href="#" class="btn btn-bordered">Discover More</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    --}}
{{--</section>--}}
<!-- End Event Banner Wrapper -->

<!--== Start Event Speaker Wrapper ==-->
<section class="event-speaker-wrapper d-none mt-120 pb-5 mt-md-80 mt-sm-60" id="docentes">
    <div class="container">
        <div class="row mb-5">
            <!-- Start Section title -->
            <div class="col-lg-6 m-auto text-center">
                <div class="section-title-wrap layout--2">
                    <i class="fa fa-users"></i>
                    <h2>Nuestros Docentes</h2>
                    <p class="mb-0">Los mejores docentes de la región.</p>
                </div>
            </div>
            <!-- End Section title -->
        </div>

        <div class="row mtm-50 mtm-sm-30">
            <!-- Start Speaker Member #01 -->
            <div class="col-lg-4 col-sm-6">
                <div class="speaker-member-wrap">
                    <figure class="speaker-thumbnail">
                        <img src="{{asset('images/docentes/1.png')}}" alt="Speaker" />
                    </figure>
                    <div class="speaker-info text-center">
                        <h3>Mendel</h3>
                        <h6 class="designation">Aritmética</h6>
                    </div>
                </div>
            </div>

            <!-- Start Speaker Member #02 -->
            <div class="col-lg-4 col-sm-6">
                <div class="speaker-member-wrap">
                    <figure class="speaker-thumbnail">
                        <img src="{{asset('images/docentes/2.png')}}" alt="Speaker" />
                    </figure>
                    <div class="speaker-info text-center">
                        <h3>Cristian Zamata</h3>
                        <h6 class="designation">Algebra</h6>
                    </div>
                </div>
            </div>

            <!-- Start Speaker Member #03 -->
            <div class="col-lg-4 col-sm-6">
                <div class="speaker-member-wrap">
                    <figure class="speaker-thumbnail">
                        <img src="{{asset('images/05.jpg')}}" alt="Speaker" />
                    </figure>
                    <div class="speaker-info text-center">
                        <h3>Efrain Barrientos</h3>
                        <h6 class="designation">Física</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="speaker-member-wrap">
                    <figure class="speaker-thumbnail">
                        <img src="{{asset('images/05.jpg')}}" alt="Speaker" />
                    </figure>
                    <div class="speaker-info text-center">
                        <h3>Javier</h3>
                        <h6 class="designation">Química</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="speaker-member-wrap">
                    <figure class="speaker-thumbnail">
                        <img src="{{asset('images/05.jpg')}}" alt="Speaker" />
                    </figure>
                    <div class="speaker-info text-center">
                        <h3>Gerardo</h3>
                        <h6 class="designation">Geometría y Tirgonometría</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="speaker-member-wrap">
                    <figure class="speaker-thumbnail">
                        <img src="{{asset('images/docentes/liz.png')}}" alt="Speaker" />
                    </figure>
                    <div class="speaker-info text-center">
                        <h3>Liz</h3>
                        <h6 class="designation">Competencia Comunicativa</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="speaker-member-wrap">
                    <figure class="speaker-thumbnail">
                        <img src="{{asset('images/05.jpg')}}" alt="Speaker" />
                    </figure>
                    <div class="speaker-info text-center">
                        <h3>Javier</h3>
                        <h6 class="designation">Biología</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="speaker-member-wrap">
                    <figure class="speaker-thumbnail">
                        <img src="{{asset('images/05.jpg')}}" alt="Speaker" />
                    </figure>
                    <div class="speaker-info text-center">
                        <h3>--</h3>
                        <h6 class="designation">Psicología</h6>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-sm-6">
                <div class="speaker-member-wrap">
                    <figure class="speaker-thumbnail">
                        <img src="{{asset('images/05.jpg')}}" alt="Speaker" />
                    </figure>
                    <div class="speaker-info text-center">
                        <h3>Roly</h3>
                        <h6 class="designation">Geografía</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="speaker-member-wrap">
                    <figure class="speaker-thumbnail">
                        <img src="{{asset('images/05.jpg')}}" alt="Speaker" />
                    </figure>
                    <div class="speaker-info text-center">
                        <h3>--</h3>
                        <h6 class="designation">Economía</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="speaker-member-wrap">
                    <figure class="speaker-thumbnail">
                        <img src="{{asset('images/05.jpg')}}" alt="Speaker" />
                    </figure>
                    <div class="speaker-info text-center">
                        <h3>Sandra</h3>
                        <h6 class="designation">Educación Cívica</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="speaker-member-wrap">
                    <figure class="speaker-thumbnail">
                        <img src="{{asset('images/05.jpg')}}" alt="Speaker" />
                    </figure>
                    <div class="speaker-info text-center">
                        <h3>Javier</h3>
                        <h6 class="designation">Filosofía y Lógica</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="speaker-member-wrap">
                    <figure class="speaker-thumbnail">
                        <img src="{{asset('images/05.jpg')}}" alt="Speaker" />
                    </figure>
                    <div class="speaker-info text-center">
                        <h3>Jesus</h3>
                        <h6 class="designation">Historia</h6>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!--== End Event Speaker Wrapper ==-->

<!--== Start Event Call to Action Area ==-->

<!--== End Event Call to Action Area ==-->

<!--== Start Event Schedule Wrapper ==-->
<section class="event-schedule-wrapper d-none bg-offwhite pt-120 pt-md-80 pt-sm-60 pb-120 pb-md-80 pb-sm-60" id="horarios">
    <div class="container">
        <div class="row">
            <!-- Start Section title -->
            <div class="col-lg-6 m-auto text-center">
                <div class="section-title-wrap layout--2">
                    <i class="fa fa-calendar-minus-o"></i>
                    <h2>Horario</h2>
                    <p class="mb-0">Vea su horario por grupos</p>
                </div>
            </div>
            <!-- End Section title -->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="event-schedule-tab-wrap">
                    <!-- Start Event Schedule Day Menu -->
                    <div class="event-schedule-day-menu">
                        <ul class="nav" id="eventSchedule">
                            <li><a class="active" data-toggle="tab" href="#day_01_content">Grupo A</a>
                            </li>
                            <li><a data-toggle="tab" href="#day_02_content">Grupo B</a>
                            </li>
                            <li><a data-toggle="tab" href="#day_03_content">Grupo C</a>
                            </li>
                            <li><a data-toggle="tab" href="#day_04_content">Grupo D</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Start Event Schedule Content Wrap -->
                    <div class="event-schedule-content-wrapper">
                        <div class="tab-content" id="eventScheduleContent">
                            <!-- Start Event Schedule Content #01 -->
                            <div class="tab-pane fade show active" id="day_01_content">
                                <div class="event-schedule-content-inner">
                                    <div class="event-schedule-item-content">
                                        <img src="{{asset('images/horario/a.jpg')}}" alt="">
                                    </div>

                                </div>
                            </div>

                            <!-- Start Event Schedule Content #02 -->
                            <div class="tab-pane fade" id="day_02_content">
                                <div class="event-schedule-content-inner">
                                    <div class="event-schedule-item-content">
                                        <img src="{{asset('images/horario/b.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>

                            <!-- Start Event Schedule Content #03 -->
                            <div class="tab-pane fade" id="day_03_content">
                                <div class="event-schedule-item-content">
                                    <img src="{{asset('images/horario/c.jpg')}}" alt="">
                                </div>
                            </div>

                            <!-- Start Event Schedule Content #04 -->
                            <div class="tab-pane fade" id="day_04_content">
                                <div class="event-schedule-item-content">
                                    <img src="{{asset('images/horario/d.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="schedule-download-wrap mt-80 mt-md-50 mt-sm-30 text-center">--}}
{{--                    <a href="#" class="btn btn-black">Descargar</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</section>

<section id="faq">
    <div class="accordion-content-wrapper bg-offwhite mt-120 mt-md-80 mt-sm-60  mb-md-80 mb-sm-60 py-5">
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
                                    <h3 data-toggle="collapse" data-target="#collapse5">

                                        <span> 05.</span> Cómo funcionan las clases

                                    </h3>
                                </div>
                                <div id="collapse5" class="collapse" data-parent="#accordionOne">
                                    <div class="card-body">
                                        <p>Vía online; nuestros estudiantes reciben los accesos respectivos de nuestras clases en vivo las cuales se desarrollan desde nuestra sede central.
                                            Igualmente brindamos ejercicios y exámenes simulacros de admisión.

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Accordion item #06 -->
                            <div class="card">
                                <div class="card-header" id="heading6">
                                    <h3 data-toggle="collapse" data-target="#collapse6">

                                        <span> 06.</span> ¿Cuentan con primera opción?

                                    </h3>
                                </div>
                                <div id="collapse6" class="collapse" data-parent="#accordionOne">
                                    <div class="card-body">
                                        <p>Por el momento solo Ordinario.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Accordion item #07 -->
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h3 data-toggle="collapse" data-target="#collapse7">

                                        <span> 07.</span> ¿Hay un acompañamiento fuera de las clases sobre los temas vistos?

                                    </h3>
                                </div>
                                <div id="collapse7" class="collapse" data-parent="#accordionOne">
                                    <div class="card-body">
                                        <p>A cada alumno se le asignará un asesor el cual realizará un acompañamiento personalizado tanto con el estudiante como con sus padres.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Accordion item #08 -->
                            <div class="card">
                                <div class="card-header" id="heading8">
                                    <h3 data-toggle="collapse" data-target="#collapseFour">

                                        <span> 08.</span> En caso de perder una clase por x motivo. ¿Tengo opción a recuperarla? Si es así, ¿mediante qué medio?

                                    </h3>
                                </div>
                                <div id="collapse8" class="collapse" data-parent="#accordionOne">
                                    <div class="card-body">
                                        <p>Afirmativo, si un estudiante pierde una clase deberá contactar a su asesor para solicitar el acceso de la clase a recuperar.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Accordion item #09 -->
                            <div class="card">
                                <div class="card-header" id="heading9">
                                    <h3 data-toggle="collapse" data-target="#collapseFour">

                                        <span> 09.</span> ¿Cuál debería ser mi calidad de conexión a internet?

                                    </h3>
                                </div>
                                <div id="collapse9" class="collapse" data-parent="#accordionOne">
                                    <div class="card-body">
                                        <p>velocidad que permita ver videos.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Accordion item #10 -->
                            <div class="card">
                                <div class="card-header" id="heading10">
                                    <h3 data-toggle="collapse" data-target="#collapseFour">

                                        <span> 10.</span> Las dudas al profesor, aparte de las clases en vivo; ¿por donde puedo resolverlas?

                                    </h3>
                                </div>
                                <div id="collapse10" class="collapse" data-parent="#accordionOne">
                                    <div class="card-body">
                                        <p>Cada profesor cuenta con horas de atención para consultas por favor coordinar con su Asesor la comunicación con el profesor deseado.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Accordion item #11 -->
                            <div class="card">
                                <div class="card-header" id="heading11">
                                    <h3 data-toggle="collapse" data-target="#collapseFour">

                                        <span> 11.</span> ¿Cuanto duran las clases?

                                    </h3>
                                </div>
                                <div id="collapse11" class="collapse" data-parent="#accordionOne">
                                    <div class="card-body">
                                        <p>El ciclo dura 3 meses.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Accordion item #12 -->
                            <div class="card">
                                <div class="card-header" id="heading12">
                                    <h3 data-toggle="collapse" data-target="#collapseFour">

                                        <span> 12.</span> ¿Existen descuentos para miembros de una misma familia?

                                    </h3>
                                </div>
                                <div id="collapse12" class="collapse" data-parent="#accordionOne">
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
<!--== End Event Schedule Wrapper ==-->
<section class="">

    <div class="fb-video" data-href="https://www.facebook.com/facebook/videos/283158629547333/" data-show-text="false" data-width=""><blockquote cite="https://developers.facebook.com/greencusco/videos/680471732813713/" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/greencusco/videos/680471732813713/">Academia Green - Comenzó el cambio en la educación</a></blockquote></div>

</section>
<!--== Start Event Registration Ticket Area ==-->
{{--<section class="event-reg-ticket-wrap parallaxBg bg-img pt-120 pt-md-80 pt-sm-60 pb-120 pb-md-80 pb-sm-60" data-bg="assets/img/home-event/event-hero-bg.jpg">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <!-- Start Section title -->--}}
{{--            <div class="col-lg-6 m-auto text-center">--}}
{{--                <div class="section-title-wrap layout--2 white">--}}
{{--                    <i class="fa fa-ticket"></i>--}}
{{--                    <h2>Registration Tickets</h2>--}}
{{--                    <p class="mb-0">Nullam eleifend in varius arcu vitae feugiat magna id ut morbi consectetuer.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- End Section title -->--}}
{{--        </div>--}}

{{--        <div class="row mtm-30">--}}
{{--            <!-- Start Reg Ticket Price Table #01 -->--}}
{{--            <div class="col-lg-4 col-md-6 col-sm-9 m-auto m-md-0 ">--}}
{{--                <div class="registration-ticket-price-item">--}}
{{--                    <span class="ticket-price">30 <sup>$</sup></span>--}}

{{--                    <h3 class="ticket-plane-name">Basic</h3>--}}

{{--                    <p>Through successfully managing inves for more than aesthete nealson to a professional residential prop.--}}
{{--                    </p>--}}

{{--                    <a href="#" class="btn btn-bordered d-block">Register Now</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Start Reg Ticket Price Table #02 -->--}}
{{--            <div class="col-lg-4 col-md-6 col-sm-9 m-auto m-md-0 ">--}}
{{--                <div class="registration-ticket-price-item featured">--}}
{{--                    <span class="ticket-price">50 <sup>$</sup></span>--}}

{{--                    <h3 class="ticket-plane-name">Standard</h3>--}}

{{--                    <p>Through successfully managing inves for more than aesthete nealson to a professional residential prop.--}}
{{--                    </p>--}}

{{--                    <a href="#" class="btn btn-bordered d-block">Register Now</a>--}}

{{--                    <span class="ticket-feature-icon"><i class="fa fa-star"></i></span>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Start Reg Ticket Price Table #03 -->--}}
{{--            <div class="col-lg-4 col-md-6 col-sm-9 m-auto m-md-0 ">--}}
{{--                <div class="registration-ticket-price-item">--}}
{{--                    <span class="ticket-price">99 <sup>$</sup></span>--}}

{{--                    <h3 class="ticket-plane-name">Pro</h3>--}}

{{--                    <p>Through successfully managing inves for more than aesthete nealson to a professional residential prop.--}}
{{--                    </p>--}}

{{--                    <a href="#" class="btn btn-bordered d-block">Register Now</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!--== End Event Registration Ticket Area ==-->

<!--== Start Newsletter Area Wrapper ==-->
<section class="newsletter-area-wrapper bg-offwhite pt-80 pt-sm-60 pb-80 pb-sm-60">
    <div class="container">
        <div class="row">
            <!-- Start Section title -->
            <div class="col-lg-6 m-auto text-center">
                <div class="section-title-wrap layout--2 mb-44">
                    <i class="fa fa-envelope-open-o"></i>
                    <h2>SUSCRIBIRSE</h2>
                    <p class="mb-0">Suscribase y reciba actualizaciones de lanzamientos y promociones de la academia.</p>
                </div>
            </div>
            <!-- End Section title -->
        </div>
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="newsletter-content">
                    <div class="newsletter-form-wrap layout--2">
                        <form action="{{route('form_suscripcion_path')}}" method="post" class="mc-form d-sm-flex">
                            @csrf
                            <input type="email" name="email"  placeholder="Ingrese su email" required/>
                            <button class="btn-newsletter" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>

                @if (session('suscripcion'))
                    <div class="bg-primary p-3 text-white">
                        {{ session('suscripcion') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!--== End Newsletter Area Wrapper ==-->

<!--== Start Contact Area Wrapper ==-->
<div class="contact-area-wrapper" id="oficinas">
    <!-- Map Area Wrapper Start  -->
    <div class="contact-map-area-wrap">
        <div id="map_content" data-lat="-13.5201395" data-lng="-71.9789297" data-zoom="20"></div>
    </div>
    <!-- Map Area Wrapper End  -->

    <!-- Contact Information Area Start -->
    <div class="contact-info-area-wrapper w-100 layout--2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-10 m-auto m-lg-0">
                    <div class="contact-info-content layout--2">
                        <a href="index-creative-studio.html">
                            <img src="{{asset('images/logo-green-edu.png')}}" alt="logo" />
                        </a>

                        <div class="contact-method mt-30">
                            <div class="con-method-item">
                                <p><i class="fa fa-map-marker"></i> Av. El Sol 449 - Cusco - Cusco.</p>
                            </div>

                            <div class="con-method-item">
                                <p><i class="fa fa-envelope"></i>  <a href="mailto:your@example.com">green.com.pe@gmail.com</a>
                                </p>
                            </div>

                            <div class="con-method-item">
                                <p><i class="fa fa-phone"></i>  <a href="tel:66668888">951 783 755</a>
                                </p>
                            </div>

                            <div class="con-method-item">
                                <p><i class="fa fa-clock-o"></i> 08:00 - 18:30</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info Area End -->
</div>
<!--== End Contact Area Wrapper ==-->

<!--== Start Footer Area Wrapper ==-->
<footer class="footer-wrapper">
    <!-- Start Footer Widget Area -->
    <div class="footer-widget-wrapper pt-120 pt-md-80 pt-sm-60 pb-116 pb-md-78 pb-sm-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <img src="{{asset('images/logo-green-edu.png')}}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Widget Area -->

    <!-- Start Footer Bottom Area -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-7 order-last">
                    <div class="footer-copyright-area mt-xs-10 text-center text-sm-left">
                        <p>Copyright © 2019 GREEN - All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-5 order-first order-sm-last">
                    <div class="footer-social-icons nav justify-content-center justify-content-md-end">
                        <a href="#" target="_blank" class="trio-tooltip" data-tippy-content="Facebook"><i class="fa fa-facebook"></i></a>
{{--                        <a href="#" target="_blank" class="trio-tooltip" data-tippy-content="Twitter"><i class="fa fa-twitter"></i></a>--}}
{{--                        <a href="#" target="_blank" class="trio-tooltip" data-tippy-content="Pinterest"><i class="fa fa-pinterest"></i></a>--}}
                        <a href="#" target="_blank" class="trio-tooltip" data-tippy-content="Instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom Area -->
</footer>
<!--== End Footer Area Wrapper ==-->

<!--== Start Off Canvas Area Wrapper ==-->
<aside class="off-canvas-area-wrapper">
    <!-- Off Canvas Overlay -->
    <div class="off-canvas-overlay"></div>

    <!-- Start Off Canvas Content Area -->
    <div class="off-canvas-content-wrap">
        <div class="off-canvas-content">
            <!-- Start Search Box Wrap -->
            <div class="search-box-wrap off-canvas-item">
                <form action="#" method="post">
                    <input type="search" placeholder="Search.." />
                    <button class="btn-search"><i class="fa fa-search"></i>
                    </button>
                </form>
            </div>

            <!-- Start About Content Wrap -->
            <div class="about-content off-canvas-item">
                <h2>Who We Are</h2>
                <p>Organic seitan post-ironic, four loko bicycle rights art party tousled. Mlkshk tote bag stumptown.</p>
            </div>

            <!-- Start Useful Links Content -->
            <div class="useful-link-wrap off-canvas-item">
                <h2>Useful Links</h2>

                <ul class="useful-link-menu">
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Shop</a>
                    </li>
                    <li><a href="#">About Us</a>
                    </li>
                    <li><a href="#">Blog</a>
                    </li>
                    <li><a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Start Social Links Content -->
            <div class="social-links-wrap off-canvas-item">
                <h2>Connect</h2>

                <div class="social-links">
                    <a href="#" class="trio-tooltip" data-tippy-content="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="trio-tooltip" data-tippy-content="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="trio-tooltip" data-tippy-content="Pinterest"><i class="fa fa-pinterest"></i></a>
                    <a href="#" class="trio-tooltip" data-tippy-content="Instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- Off Canvas Close Icon -->
        <button class="btn-close trio-tooltip" data-tippy-content="Close" data-tippy-placement="left"><i class="fa fa-close"></i>
        </button>
    </div>
    <!-- End Off Canvas Content Area -->
</aside>
<!--== End Off Canvas Area Wrapper ==-->

<!--== Start Off Canvas Area Wrapper ==-->
<aside class="off-canvas-responsive-menu">
    <!-- Off Canvas Overlay -->
    <div class="off-canvas-overlay"></div>

    <!-- Start Off Canvas Content Area -->
    <div class="off-canvas-content-wrap">
        <div class="off-canvas-content">

        </div>
        <!-- Off Canvas Close Icon -->
        <button class="btn-close trio-tooltip" data-tippy-content="Close" data-tippy-placement="right"><i class="fa fa-close"></i>
        </button>
    </div>
    <!-- End Off Canvas Content Area -->
</aside>
<!--== End Off Canvas Area Wrapper ==-->

<!--== Start Off Canvas Area Wrapper ==-->
<aside class="off-canvas-search-box">
    <!-- Off Canvas Overlay -->
    <div class="off-canvas-overlay"></div>

    <!--== Start Search Box Area ==-->
    <div class="search-box-wrapper text-center">
        <div class="search-box-content">
            <form action="#" method="post">
                <input type="search" placeholder="Search" />
                <button class="btn-search"><i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!--== End Search Box Area ==-->
</aside>
<!--== End Off Canvas Area Wrapper ==-->

<!--=== Start Quick View Content Wrapper ==-->
<div class="modal fade" id="quick-view">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="quick-view-content-wrap">
                    <div class="row">
                        <!-- Start Product Thumbnail Area -->
                        <div class="col-md-6">
                            <div class="product-thumb-area">
                                <div class="ht-slick-slider dots-style-three prod-thumb-inner" data-slick='{"slidesToShow": 1, "infinite": false, "dots": true}'>
                                    <figure class="port-details-thumb-item">
                                        <img src="assets/img/home-christmas/products/product_05.jpg" alt="product" />
                                    </figure>
                                    <figure class="port-details-thumb-item">
                                        <img src="assets/img/home-christmas/products/product_02.jpg" alt="product" />
                                    </figure>
                                    <figure class="port-details-thumb-item">
                                        <img src="assets/img/home-christmas/products/product_03.jpg" alt="product" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Thumbnail Area -->

                        <!-- Start Product Info Area -->
                        <div class="col-md-6">
                            <div class="product-details-info-content-wrap niceScroll-wrap">
                                <div class="prod-details-info-content niceScroll-content">
                                    <h2>Lamp Shade</h2>
                                    <div class="price-group">
                                        <span class="price">$9.99</span>
                                    </div>

                                    <p>Created from either wood or recycled materials, it can be moulded into just about any shape and hardens to provide a hard shell. Additives can make it water resistant.
                                    </p>

                                    <div class="product-action mt-38 mb-20">
                                        <div class="action-top mb-40">
                                            <div class="pro-qty mr-10">
                                                <input type="text" id="quantity" title="Quantity" value="1" />
                                            </div>
                                            <button class="btn btn-brand">Add to Cart</button>
                                        </div>

                                        <button class="btn-wishlist trio-tooltip" data-tippy-content="Add to Wishlist">
                                            <i class="fa fa-heart-o"></i>Add to Wishlist
                                        </button>
                                    </div>

                                    <div class="port-details-con-inner">
                                        <div class="single-post-details__footer m-0">
                                            <div class="single-post-details__footer__item">
                                                <div class="footer-item-left">
                                                    <h5 class="item-head"><i class="fa fa-tags"></i> Categories:</h5>
                                                </div>
                                                <div class="footer-item-right">
                                                    <ul class="cate-list nav">
                                                        <li><a href="#">Design</a>
                                                        </li>
                                                        <li><a href="#">Interior</a>
                                                        </li>
                                                        <li><a href="#">Multi</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="single-post-details__footer__item">
                                                <div class="footer-item-left">
                                                    <h5 class="item-head"><i class="fa fa-share-alt"></i> Share:</h5>
                                                </div>

                                                <div class="footer-item-right">
                                                    <div class="share-item">
                                                        <a href="#" class="trio-tooltip" data-tippy-content="Share On Facebook"><i

                                                                class="fa fa-facebook"></i></a>
                                                        <a href="#" class="trio-tooltip" data-tippy-content="Share On Twitter"><i

                                                                class="fa fa-twitter"></i></a>
                                                        <a href="#" class="trio-tooltip" data-tippy-content="Share On Google Plus"><i

                                                                class="fa fa-google-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Info Area -->
                    </div>
                </div>
            </div>

            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
            </button>
        </div>
    </div>
</div>
<!--=== End Quick View Content Wrapper ==-->

<!--=======================Javascript============================-->
<!--=== All Vendor Js ===-->
<script src="{{asset('assets/js/vendor.js')}}"></script>
<!--=== All Plugins Js ===-->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!--=== Active Js ===-->
<script src="{{asset('assets/js/active.js')}}"></script>

<!--=== Revolution Slider Js ===-->
<script src="{{asset('assets/js/revslider/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.video.min.js')}}"></script>


<script src="{{asset('assets/js/revslider/revslider-active.js')}}"></script>
</body>

</html>
