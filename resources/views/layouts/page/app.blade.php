<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Academia Pre Universitaria Green. Inicio de clases 03 de agosto. 15 días gratis.">

    <title>Green Academia Pre | 03 agosto</title>

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

@yield('content')
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
<div class="contact-area-wrapper" id="oficina">
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
