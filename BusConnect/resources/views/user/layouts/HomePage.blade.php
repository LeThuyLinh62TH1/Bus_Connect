<!DOCTYPE html>
<html class="no-js" lang="zxx">


<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HanoiBus</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/user/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/plugins/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.min.css') }}">


</head>

<body class="">
    <div class="header-area header-area--default -bgwhite">
        <header class="header-area header_absolute header_height-90 header-sticky">
            <div class="container-fluid container-fluid--cp-100">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-lg-3 col-6">
                        <div class="logo text-start">
                            <a href="#"><img src="{{ asset('assets/user/images/logo/logo.svg') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 d-none d-lg-block">
                        <div class="header__navigation d-none d-lg-block">
                            <nav class="navigation-menu">
                                <ul class="justify-content-center">
                                    <li>
                                        <a href="#"><span>Tìm đường xe Bus</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('bus.routes') }}"><span>Tuyến xe Bus</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span>Dịch vụ vé tháng</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span>Tin tức</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-lg-3 col-6">
                        <div class="header-right-side text-end">
                            <div class="header-right-items  d-none d-md-block">
                                @if (Auth::check())
                                    <a href="#" class="header-icon header-icon-user">
                                        <i class="icon-user"> {{ Auth::user()->name }}</i>
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="header-icon header-icon-user">
                                        <i class="icon-user"></i>
                                    </a>
                                @endif
                            </div>
                            <div class="header-right-items d-block d-md-none">
                                <div class="d-inline-block">
                                    @if (Auth::check())
                                        <a href="#" class="header-icon header-icon-user"">
                                            <i class="icon-user"> {{ Auth::user()->name }}</i>
                                        </a>
                                    @else
                                        <a href="{{ route('login') }}" class="header-icon header-icon-user"">
                                            <i class="icon-user"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="header-right-items">
                                <a href="#miniCart" class=" header-cart minicart-btn toolbar-btn header-icon">
                                    <i class="icon-bag2"></i>
                                    <span class="item-counter">3</span>
                                </a>
                            </div>
                            <div class="header-right-items d-block d-md-none">
                                <a href="javascript:void(0)" class="search-icon" id="search-overlay-trigger">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </div>
                            <div class="header-right-items">
                                <a href="javascript:void(0)" class="mobile-navigation-icon" id="mobile-menu-trigger">
                                    <i class="icon-menu"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
    {{-- <div class="footer-area-wrapper reveal-footer bg-gray">
        <div class="footer-area section-space--ptb_90">
            <div class="container-fluid container-fluid--cp-100">
                <div class="row footer-widget-wrapper">
                    <div class="col-lg-3 col-md-3 col-sm-6 footer-widget">
                        <div class="footer-widget__logo mb-20">
                            <a href="#"><img src="{{ asset('assets/user/images/logo/logo.svg') }}"
                                    alt=""></a>
                        </div>
                        <ul class="footer-widget__list">
                            <li><i class="icon_pin"></i> Helendo, Chicago, USA 2018</li>
                            <li> <i class="icon_phone"></i><a href="tel:846677028028"
                                    class="hover-style-link">+846677028028</a></li>

                        </ul>
                        <ul class="list footer-social-networks mt-25">

                            <li class="item">
                                <a href="https://twitter.com/" target="_blank" aria-label="Twitter">
                                    <i class="social social_facebook"></i>
                                </a>
                            </li>
                            <li class="item">
                                <a href="https://facebook.com/" target="_blank" aria-label="Facebook">
                                    <i class="social social_twitter"></i>
                                </a>
                            </li>
                            <li class="item">
                                <a href="https://instagram.com/" target="_blank" aria-label="Instagram">
                                    <i class="social social_tumblr"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                        <h6 class="footer-widget__title mb-20">Quick Link</h6>
                        <ul class="footer-widget__list">
                            <li><a href="#" class="hover-style-link">About Us</a></li>
                            <li><a href="#" class="hover-style-link">What We Do</a></li>
                            <li><a href="#" class="hover-style-link">FAQ Page</a></li>
                            <li><a href="#" class="hover-style-link">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6 footer-widget">
                        <h6 class="footer-widget__title mb-20">Instagram</h6>
                        <div id="instagramFeed"></div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-widget">
                        <h6 class="footer-widget__title mb-20">Newsletter</h6>
                        <div class="footer-widget__newsletter mt-30">
                            <input type="text" placeholder="Your email address">
                            <button class="submit-button"><i class="icon-arrow-right"></i></button>
                        </div>
                        <ul class="footer-widget__footer-menu  section-space--mt_60 d-none d-lg-block">
                            <li><a href="#">Term & Condition</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div> --}}

    <div class="product-modal-box modal fade" id="prodect-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            class="icon-cross" aria-hidden="true"></span></button>
                </div>
                <div class="modal-body container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="quickview-product-active mr-lg-5">
                                <a href="#" class="images">
                                    <img src="{{ asset('assets/user/images/product/2-570x570.webp') }}"
                                        class="img-fluid" alt="">
                                </a>
                                <a href="#" class="images">
                                    <img src="{{ asset('assets/user/images/product/3-600x600.webp') }}"
                                        class="img-fluid" alt="">
                                </a>
                                <a href="#" class="images">
                                    <img src="{{ asset('assets/user/images/product/4-768x768.webp') }}"
                                        class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-close-box text-start">
                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"> <i
                        class="icon-cross2"></i></span>
            </div>
            <div class="mobile-menu-overlay__body">
                <div class="offcanvas-menu-header d-md-block d-none">
                    <div class="helendo-language-currency row-flex row section-space--mb_60 ">
                        <div class="widget-language col-md-6">
                            <h6> Language</h6>
                            <ul>
                                <li class="actived"> <a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Arabric</a></li>
                            </ul>
                        </div>
                        <div class="widget-currency col-md-6">
                            <h6> Currencies</h6>
                            <ul>
                                <li class="actived"><a href="#">USD - US Dollar</a></li>
                                <li><a href="#">Euro</a></li>
                                <li><a href="#">Pround</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="has-children">
                            <a href="#">Trang chủ</a>
                            <ul class="sub-menu">
                                <li><a href="index.html"><span>Home V1 – Default</span></a></li>
                                <li><a href="index-7.html"><span>Home V2 – Boxed</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html"><span>About Us</span></a></li>
                                <li><a href="contact-us.html"><span>Contact</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="{{ route('logout') }}">Đăng Xuất</a>
                        </li>
                    </ul>
                </nav>

                <div class="mobile-menu-contact-info section-space--mt_60">
                    <h6>Contact Us</h6>
                    <p>69 Halsey St, Ny 10002, New York, United States <br>support.center@unero.co <br>(0091) 8547
                        632521</p>
                </div>

                <div class="mobile-menu-social-share section-space--mt_60">
                    <h6>Follow US On Socials</h6>
                    <ul class="social-share">
                        <li><a href="#"><i class="social social_facebook"></i></a></li>
                        <li><a href="#"><i class="social social_twitter"></i></a></li>
                        <li><a href="#"><i class="social social_googleplus"></i></a></li>
                        <li><a href="#"><i class="social social_linkedin"></i></a></li>
                        <li><a href="#"><i class="social social_pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-minicart_wrapper" id="miniCart">
        <div class="offcanvas-menu-inner">
            <div class="close-btn-box">
                <a href="#" class="btn-close"><i class="icon-cross2"></i></a>
            </div>
            <div class="minicart-content">
                <ul class="minicart-list">
                    <li class="minicart-product">
                        <a class="product-item_remove" href="javascript:void(0)"><i class="icon-cross2"></i></a>
                        <a class="product-item_img">
                            <img class="img-fluid" src="assets/user/images/product/small/cart-01.webp"
                                alt="Product Image">
                        </a>
                        <div class="product-item_content">
                            <a class="product-item_title" href="product-details.html">Plant pots</a>
                            <label>Qty : <span>1</span></label>
                            <label class="product-item_quantity">Price: <span> $20.00</span></label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="minicart-item_total">
                <span class="font-weight--reguler">Subtotal:</span>
                <span class="ammount font-weight--reguler">$60.00</span>
            </div>
            <div class="minicart-btn_area">
                <a href="cart.html" class="btn btn--full btn--border_1">View cart</a>
            </div>
            <div class="minicart-btn_area">
                <a href="checkout.html" class="btn btn--full btn--black">Checkout</a>
            </div>
        </div>

        <div class="global-overlay"></div>
    </div>
    <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-8">
                        <div class="search-title">
                            <h4 class="font-weight--normal">Tìm kiếm sản phẩm</h4>
                        </div>
                    </div>
                    <div class="col-md-6 ms-auto col-4">
                        <div class="search-content text-end">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"><i
                                    class="icon-cross"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 m-auto">
                                <form action="#">
                                    <div class="search-fields">
                                        <input type="text" placeholder="Tìm kiếm...">
                                        <button class="submit-button"><i class="icon-magnifier"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top icon-arrow-up"></i>
        <i class="arrow-bottom icon-arrow-up"></i>
    </a>
    <script src="{{ asset('assets/user/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('assets/user/js/main.js') }}"></script>
</body>

</html>