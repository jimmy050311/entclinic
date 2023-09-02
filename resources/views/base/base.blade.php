<!DOCTYPE html>
<html lang="en">

@include('base.header')

<body>
    <main class="home-one overflow-x-hidden">
        <!-- start preloader -->
        <div id="preloader">
            <div id="preloader-inner"></div>
        </div>
        <!-- end preloader -->
        <!-- start header -->
        <header class="header light-header position-absolute top-0 left-0 z-3 w-100 pt-35">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="nav d-flex align-items-center justify-content-between">
                            <!-- logo -->
                            <div class="logo-container">
                                <img class="header-logo" src="img/Logo.png" alt="logo">
                            </div>
                            <div class="nav-menu d-flex align-items-center">
                                <ul
                                    class="header-menu d-none d-lg-flex flex-row align-items-center z-1 position-relative mr-35 menu">
                                    <li>
                                        <a class="menu-link text-uppercase fw-500" style="color:black" href="/">Home</a>
                                        <!-- <ul class="submenu-container">
                                            <li><a class="submenu-link text-uppercase fw-500" href="index.html">Home
                                                    1</a></li>
                                            <li><a class="submenu-link text-uppercase fw-500" href="index2.html">Home
                                                    2</a></li>
                                            <li><a class="submenu-link text-uppercase fw-500" href="index3.html">Home
                                                    3</a></li>
                                        </ul> -->
                                    </li>
                                    <li>
                                        <a class="menu-link text-uppercase fw-500" style="color:black" href="/about">About Us</a>
                                    </li>
                                    <li>
                                        <a class="menu-link text-uppercase fw-500" style="color:black" href="/blog">Blog</a>
                                    </li>
                                    <li>
                                        <a class="menu-link text-uppercase fw-500" style="color:black" href="/contact">Contact Us</a>
                                    </li>
                                </ul>

                                <div class="desktop-menu-offcanvas position-relative">
                                    <img class="off-canvas-icon" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                                        src="img/MenuToggleIvonTwo.png" alt="menu toggle icon">
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                        aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <img id="offcanvasRightLabel" class="header-logo offcanvas-title img-fluid"
                                                src="img/LogoTwo.png" alt="logo">
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <ul class="accordion-menu">
                                                <li>
                                                    <div class="dropdownlink">
                                                        <span class="text-uppercase">Home</span>
                                                        <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                                                    </div>
                                                    <!-- <ul class="submenuItems">
                                                        <li><a class="submenu-link text-uppercase fw-500"
                                                                href="index.html">Home
                                                                1</a></li>
                                                        <li><a class="submenu-link text-uppercase fw-500"
                                                                href="index2.html">Home 2</a></li>
                                                        <li><a class="submenu-link text-uppercase fw-500"
                                                                href="index3.html">Home 3</a></li>
                                                    </ul> -->
                                                </li>
                                                <li>
                                                    <div class="dropdownlink">
                                                        <span class="text-uppercase">
                                                            <a href="/about">About Us</a>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dropdownlink">
                                                        <span class="text-uppercase">
                                                            <a href="/blog">Blog</a>
                                                        </span>
                                                    </div>
                                                </li>
                                                <!-- <li>
                                                    <div class="dropdownlink">
                                                        <span class="text-uppercase">Pages</span>
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </div>
                                                    <ul class="submenuItems">
                                                        <li><a class="submenu-link text-uppercase fw-500"
                                                                href="servicesDetails.html">Services Details</a></li>

                                                        <li><a class="submenu-link text-uppercase fw-500"
                                                                href="portfolioDetails.html">Portfolio Details</a></li>

                                                        <li><a class="submenu-link text-uppercase fw-500"
                                                                href="blogDetails.html">Blog Details</a></li>
                                                        <li><a class="submenu-link text-uppercase fw-500"
                                                                href="team.html">Taem</a></li>
                                                        <li><a class="submenu-link text-uppercase fw-500"
                                                                href="teamDetails.html">Team Details</a></li>
                                                    </ul>
                                                </li> -->
                                                <li>
                                                    <div class="dropdownlink">
                                                        <span class="text-uppercase">
                                                            <a href="/contact">Contact Us</a>
                                                        </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        @yield('main')

        <!-- start footer -->
        <footer class="footer-one">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-sm-5">
                                <div class="logo mb-1">
                                    <img src="img/Logo.png" alt="logo">
                                </div>
                                <p class="p text-white fw-500 line-height-5 mt-15">
                                    Welcome to our interior design agency! Our team of experienced designers and
                                    decorators
                                    is passionate about creating beautiful, functional spaces that enhance our clients'
                                    lives. Welcome to our interior design agency!
                                </p>
                                <h2 class="fw-700 text-white mt-30 footer-email">info@email.com</h2>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="mt-5 mt-sm-0">
                                    <ul class="d-flex flex-column gap-4">
                                        <li><a class="fw-500 text-uppercase" href="/">home</a></li>
                                        <li><a class="fw-500 text-uppercase" href="/about">about</a></li>
                                        <li><a class="fw-500 text-uppercase" href="/blog">blog</a></li>
                                        <li><a class="fw-500 text-uppercase" href="/contact">contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="d-flex align-items-start mb-30 mt-5 mt-sm-0">
                                    <i class="fa-solid fa-location-dot brand-text d-inline-block mr-10 mt-2"></i>
                                    <h6 class="h6 fw-400 line-height-4 footer-address">
                                        901 N Pitt Str., Suite 170
                                        Alexandria, NY, USA
                                    </h6>
                                </div>
                                <div class="d-flex align-items-start mb-30">
                                    <i class="fa-solid fa-phone-volume brand-text d-inline-block mr-10 mt-2"></i>
                                    <h6 class="h6 fw-400 line-height-4 footer-address">
                                        (406) 555-0120
                                    </h6>
                                </div>
                                <div class="d-flex align-items-start mb-30">
                                    <i class="fa-solid fa-phone-volume brand-text d-inline-block mr-10 mt-2"></i>
                                    <h6 class="h6 fw-400 line-height-4 footer-address">
                                        (406) 327-1246
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-100 d-flex justify-content-between align-items-center flex-column flex-xl-row">
                            <div class="footer-one-social-container">
                                <a class="btn dark-btn mr-30 mb-4 mb-lg-0" href="https://facebook.com"><span
                                        class="z-1 position-relative">Facebook</span></a>
                                <a class="btn dark-btn mr-30 mb-4 mb-lg-0" href="https://linkedin.com"><span
                                        class="z-1 position-relative">LinkedIn</span></a>
                                <a class="btn dark-btn mr-30 mb-4 mb-lg-0" href="https://instagram.com"><span
                                        class="z-1 position-relative">Instagram</span></a>
                                <a class="btn dark-btn mr-30 mb-4 mb-lg-0" href="https://twitter.com"><span
                                        class="z-1 position-relative">Twitter</span></a>
                                <a class="btn dark-btn mb-4 mb-lg-0" href="https://dribble.com"><span
                                        class="z-1 position-relative">Dribble</span></a>
                            </div>
                            <p class="p fw-500 line-height-3 footer-copyright-text pt-4 pt-xl-0">
                                Copyright 2023, All Right reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </main>

    @include('base.footer')

</body>

</html>