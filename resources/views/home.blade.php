@extends('base.base')

@section('main')        
        
    <!-- start banner -->
    <section
        class="banner-one pt-70 pb-70 position-relative overflow-hidden bg-img-zoom d-flex justify-content-center align-items-center" style="background-image:/img/background.jpg !important">
        <div class="banner-one-wrapper pt-5 pt-sm-0">
            <!-- floating contact bar -->
            <div class="floating-contact-box position-absolute">
                <ul class="d-flex">
                    <li class="contact-info-one text-white">(406) 555-0120</li>
                    <li class="contact-info-two text-white">hello@archito.com</li>
                </ul>
            </div>
            <!-- floating contact bar line -->
            <div class="floating-line position-absolute"></div>
            <!-- floating social media bar -->
            <div class="floating-social-box position-absolute d-flex align-items-center justify-content-center">
                <ul class="d-flex">
                    <li class="text-white floating-social-icon">
                        <a href="https://twitter.com">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li class="text-white floating-social-icon">
                        <a href="https://linkedin.com">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li class="text-white floating-social-icon">
                        <a href="https://linkedin.com">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="social-follow-text text-white">follow us</li>
                </ul>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-onecontents">
                            <div>
                                <div class="col-12 col-lg-8 col-xl-7">
                                    <div class="banner-onecontent-left">
                                        <div class="animate-heading">
                                            <h1
                                                class="text-white fw-700 text-capitalize mb-45 line-height-1 position-relative ah-headline home-mobile-heading">
                                                <span>making
                                                    your</span> <br> dream <span class="ah-words-wrapper">
                                                    <b class="is-visible">space</b>
                                                    <b>design</b>
                                                </span>
                                            </h1>
                                        </div>
                                        <p
                                            class="text-white fw-500 line-height-5 mb-60 banner-paragraph position-relative">
                                            Welcome to our interior design agency! Our team of experienced designers
                                            and
                                            decorators
                                            is
                                            passionate about creating beautiful, functional spaces that enhance our
                                            client's
                                            lives.
                                        </p>
                                        <a href="portfolio.html" class="btn brand-btn text-uppercase border-0"><span
                                                class="z-1 position-relative">portfolio</span></a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-xl-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-scroll-bottom d-none d-sm-inline-block">
                <a href="#homeOneAbout" class="position-absolute d-flex flex-column">
                    <p class="fw-500 line-height-5 text-white text-uppercase z-3 mb-10">Scroll</p>
                    <i class="fa-solid fa-arrow-down-long text-white upDown-animation-fast"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- start about -->
    <section id="homeOneAbout" class="about-one section-padding-top-xl section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-one-top">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h2 class="h2 text-white line-height-3 appear-text">
                                    Transforming Spaces Elevating Lives
                                </h2>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="about-one-first-text-box">
                                    <p class="p body-text fw-500 line-height-5">
                                        Welcome to our interior design agency! Our team of experienced designers and
                                        decorators
                                        is passionate about creating beautiful, functional spaces that enhance our
                                        clients'
                                        lives.
                                    </p>
                                    <a href="portfolio.html" class="btn brand-btn text-uppercase mt-30"><span
                                            class="z-1 position-relative">learn more</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-70 about-one-bottom">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="position-relative d-flex align-items-center">
                                    <div class="hover-img-container about-one-img">
                                        <img src="img/aboutOne.jpg" alt="about image" class="rounded-0">
                                    </div>
                                    <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                                        class="hover-img-container about-one-img-small position-absolute d-none d-lg-inline-block">
                                        <img src="img/aboutOneSmall.jpg" alt="about image small" class="rounded-0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div>
                                    <h3 class="h3 dark-text fw-700 about-one-subheading line-height-3">
                                        Making Your Interior Dream Space
                                    </h3>
                                    <div class="about-one-second-text-box mt-85 ml-60">
                                        <div class="mb-60 about-second-text-box-first-item">
                                            <h5 class="h5 fw-700 dark-text line-height-3">
                                                Our Story
                                            </h5>
                                            <p class="p body-text fw-500 line-height-5 mt-10">
                                                Welcome to our interior design agency! Our team of experienced
                                                designers
                                                and
                                                decorators is passionate about creating beautiful, functional spaces
                                                that
                                                enhance our clients' lives.
                                            </p>
                                        </div>
                                        <div class="mb-0">
                                            <h5 class="h5 fw-700 dark-text line-height-3">
                                                Our Goal
                                            </h5>
                                            <p class="p body-text fw-500 line-height-5 mt-10">
                                                Welcome to our interior design agency! Our team of experienced
                                                designers
                                                and
                                                decorators is passionate about creating beautiful, functional spaces
                                                that
                                                enhance our clients' lives.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->
    <!-- start count -->
    <section class="count-one section-padding-bottom-xl section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xl-3">
                    <div class="count-one-border position-relative py-3 py-sm-3 py-lg-4 py-xl-0">
                        <div class="counter-container">
                            <h1 class="h1 dark-text"><span class="counter">46</span>K</h1>
                            <h4 class="h4 fw-400 line-height-1 body-text">
                                Project Completed
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-xl-3">
                    <div class="count-one-border position-relative py-3 py-sm-3 py-lg-4 py-xl-0">
                        <div class="counter-container">
                            <h1 class="h1 dark-text"><span class="counter">3</span>K</h1>
                            <h4 class="h4 fw-400 line-height-1 body-text">
                                Happy customers
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-xl-3">
                    <div class="count-one-border position-relative py-3 py-sm-3 py-lg-4 py-xl-0">
                        <div class="counter-container">
                            <h1 class="h1 dark-text"><span class="counter">26</span></h1>
                            <h4 class="h4 fw-400 line-height-1 body-text">
                                Years Experiences
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-xl-3">
                    <div class="position-relative py-3 py-sm-3 py-lg-4 py-xl-0">
                        <div class="counter-container">
                            <h1 class="h1 dark-text"><span class="counter">24</span></h1>
                            <h4 class="h4 fw-400 line-height-1 body-text">
                                Awards Achievement
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end count -->
    <!-- start services -->
    <section class="services-one section-padding-top-xl section-padding-bottom-xl bg-black">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <h2 class="h2 text-black line-height-3 appear-text-dark">
                                    Our Expert Interior Design Services
                                </h2>
                            </div>
                            <div class="col-12 col-sm-6">
                            </div>
                        </div>
                    </div>
                    <div class="service-one-card-container mt-80 position-relative">
                        <div class="owl-carousel owl-theme">
                            <div class="item service-one-card position-relative">
                                <div class="service-imag">
                                    <img src="img/serviceBgOne.jpg" class="w-100 position-relative"
                                        alt="Service Images">
                                </div>
                                <div class="position-absolute service-one-contents z-1">
                                    <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                        Installation Space Planning & Luxury Interior Design
                                    </h5>
                                    <p class="p text-white fw-500 line-height-5 mb-65">
                                        Welcome to our interior design agency! Our team of experienced designers
                                    </p>
                                    <a class="btn p-0 text-white text-uppercase fw-500" href="about.html"><span
                                            class="me-2">Learn More</span> <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="item service-one-card position-relative">
                                <div class="service-imag">
                                    <img src="img/serviceBgTwo.jpg" alt="Service Images">
                                </div>
                                <div class="position-absolute z-1 service-one-contents">
                                    <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                        Planning & Installation of Space
                                    </h5>
                                    <p class="p text-white fw-500 line-height-5 mb-65">
                                        Welcome to our interior design agency! Our team of experienced designers
                                    </p>
                                    <a class="btn p-0 text-white text-uppercase fw-500" href="about.html"><span
                                            class="me-2">Learn More</span> <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                                <div class="service-one-card-stroke position-absolute"></div>
                            </div>
                            <div class="item service-one-card position-relative">
                                <div class="service-imag">
                                    <img src="img/serviceBgThree.jpg" alt="Service Images">
                                </div>
                                <div class="position-absolute z-1 service-one-contents">
                                    <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                        Space Planning & Installation
                                    </h5>
                                    <p class="p text-white fw-500 line-height-5 mb-65">
                                        Welcome to our interior design agency! Our team of experienced designers
                                    </p>
                                    <a class="btn p-0 text-white text-uppercase fw-500" href="about.html"><span
                                            class="me-2">Learn More</span> <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                                <div class="service-one-card-stroke position-absolute"></div>
                            </div>
                            <div class="item service-one-card position-relative">
                                <div class="service-imag">
                                    <img src="img/serviceBgFour.jpg" alt="Service Images">
                                </div>
                                <div class="position-absolute z-1 service-one-contents">
                                    <h5 class="h5 fw-700 text-white line-height-3 mb-25">
                                        Planning for Architecture Design
                                    </h5>
                                    <p class="p text-white fw-500 line-height-5 mb-65">
                                        Welcome to our interior design agency! Our team of experienced designers
                                    </p>
                                    <a class="btn p-0 text-white text-uppercase fw-500" href="about.html"><span
                                            class="me-2">Learn More</span> <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                                <div class="service-one-card-stroke position-absolute"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end services -->
    <!-- start projects -->
    <section class="projects-one section-padding-bottom-xl section-padding-top-xl">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6 ">
                            <div class="projects-one-item">
                                <a href="portfolioDetails.html">
                                    <h2
                                        class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke d-inline-block stroke-mobile-position">
                                        structural design
                                    </h2>
                                </a>
                                <div>
                                    <h2
                                        class="h2 text-white fw-700 line-height-3 mb-90 appear-text projects-section-title">
                                        Our Expert
                                        Interior
                                        Design Project
                                    </h2>
                                    <div class="project-img-ontainer">
                                        <img class="home-one-portfolio-first-img" src="img/projectsOne.jpg"
                                            alt="project image">
                                        <a href="portfolioDetails.html" class="btn text-uppercase project-btn">
                                            <span class="position-relative z-1">View Project</span>
                                            <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                        </a>
                                    </div>
                                    <h6 class="h6 dark-text line-height-3 fw-700 mt-15">Project - Luxury Space
                                        Design</h6>
                                    <a data-aos="fade-up" data-aos-delay="500" data-aos-duration="1500"
                                        data-aos-offset="100" href="portfolio.html"
                                        class="btn brand-btn text-uppercase mt-100 d-none d-lg-inline-block">
                                        <span class="z-1 position-relative">View
                                            Projects</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 ">
                            <div class="mt-5 mt-lg-0">
                                <div class="ml-100 projects-one-item">
                                    <a href="portfolioDetails.html">
                                        <h2
                                            class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke d-inline-block">
                                            Architecture</h2>
                                    </a>
                                    <div class="projects-one-contents">
                                        <div class="project-img-ontainer">
                                            <img class="home-one-portfolio-second-img" src="img/projectsTwo.jpg"
                                                alt="project image">
                                            <a href="portfolioDetails.html" class="btn text-uppercase project-btn">
                                                <span class="position-relative z-1">View Project</span>
                                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                            </a>
                                        </div>
                                        <h6 class="h6 dark-text line-height-3 fw-700 mt-15">Project - Office
                                            Interior Design
                                        </h6>
                                    </div>
                                </div>
                                <div class="project-item-left-padding mt-60 projects-one-item">
                                    <a href="portfolioDetails.html">
                                        <h2
                                            class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke d-inline-block project-text-stroke-utility">
                                            landscape</h2>
                                    </a>
                                    <div class="projects-contents">
                                        <div class="project-img-ontainer text-end">
                                            <img class="home-one-portfolio-third-img" src="img/projectsThree.jpg"
                                                alt="project image">
                                            <a href="portfolioDetails.html" class="btn text-uppercase project-btn">
                                                <span class="position-relative z-1">View Project</span>
                                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                            </a>
                                        </div>
                                        <h6 class="h6 dark-text line-height-3 fw-700 mt-15">Project - Modern
                                            Architecture
                                            Design
                                        </h6>
                                    </div>
                                </div>
                                <div class="project-mobile-cta-button">
                                    <a data-aos="fade-up" data-aos-delay="500" data-aos-duration="1500"
                                        data-aos-offset="100" href="portfolio.html"
                                        class="btn brand-btn text-uppercase mt-60 d-inline-block d-lg-none">
                                        <span class="z-1 position-relative">View
                                            Projects</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end projects -->
    <!-- start features -->
    <section class="features-one section-padding-top-xl section-padding-bottom-xl">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div>
                                <h2 class="h2 body-text-two fw-700 line-height-3 appear-text-dark">
                                    Core Features of Our Interior Design Agency
                                </h2>
                                <p class="text-white fw-500 line-height-5 mt-40 position-relative pe-0 pe-lg-5">
                                    Welcome to our interior design agency! Our team of experienced designers and
                                    decorators
                                    is
                                    passionate about creating beautiful, functional spaces that enhance our client's
                                    lives.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="mt-5 mt-lg-0">
                                <div class="position-relative">
                                    <img src="img/featuresVideoBg.png" class="img-no-hover-effect features-bg-img"
                                        alt="features video background">
                                    <a href="#" class="js-video-button features-video-animation"
                                        data-video-id='Us442Oh-znE'><img src="img/playIconWhite.png"
                                            class="img-fluid features-play-icon" alt="features image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-items">
                        <div class="row gy-5 gy-sm-0">
                            <div class="col-12 col-sm-4">
                                <div class="feature-one-box">
                                    <p class="brand-text fw-700 feature-one-number-top">01</p>
                                    <h5 class="h5 text-white fw-700 line-height-3">
                                        Creativity
                                    </h5>
                                    <p class="text-white fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                        Welcome to our interior design agency! Our team of experienced designers.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="feature-one-box">
                                    <p class="brand-text fw-700 feature-one-number-top">02</p>
                                    <h5 class="h5 text-white fw-700 line-height-3">
                                        Management
                                    </h5>
                                    <p class="text-white fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                        Welcome to our interior design agency! Our team of experienced designers.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="feature-one-box">
                                    <p class="brand-text fw-700 feature-one-number-top">03</p>
                                    <h5 class="h5 text-white fw-700 line-height-3">
                                        Space Planning
                                    </h5>
                                    <p class="text-white fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5">
                                        Welcome to our interior design agency! Our team of experienced designers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end features -->
    <!-- start testimonial -->
    <section class="testimonial-one section-padding-top-xl section-padding-bottom bg-white overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <div class="testimonial-one-slider-wrapper position-relative">
                            <div class="owl-carousel owl-theme">
                                <div class="item testimonial-one-card">
                                    <div class="row">
                                        <div class="col-12 col-lg-2">
                                            <img class="testimonial-one-quote-icon" src="img/quoteIcon.png"
                                                alt="quote icon">
                                        </div>
                                        <div class="col-12 col-lg-10">
                                            <div class="testimonial-item-content">
                                                <h3 class="h3 fw-700 line-height-1 dark-text mb-50">
                                                    Choosing the right architecture and interior design agency for
                                                    your
                                                    project
                                                    depends
                                                    on several factors, such as their experience.
                                                </h3>
                                                <p
                                                    class="dark-text fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5 mb-1">
                                                    From USA
                                                </p>
                                                <h6 class="h6 fw-700 line-height-3 dark-text">
                                                    Alex Smith Emer
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item testimonial-one-card">
                                    <div class="row">
                                        <div class="col-12 col-lg-2">
                                            <img class="testimonial-one-quote-icon" src="img/quoteIcon.png"
                                                alt="quote icon">
                                        </div>
                                        <div class="col-12 col-lg-10">
                                            <div class="testimonial-item-content">
                                                <h3 class="h3 fw-700 line-height-1 dark-text mb-50">
                                                    Choosing the right architecture and interior design agency for
                                                    your
                                                    project
                                                    depends
                                                    on several factors, such as their experience.
                                                </h3>
                                                <p
                                                    class="dark-text fw-500 line-height-5 mt-10 position-relative pe-0 pe-lg-5 mb-1">
                                                    From USA
                                                </p>
                                                <h6 class="h6 fw-700 line-height-3 dark-text">
                                                    Alex Smith Emer
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center section-padding-top-xl">
                        <div class="row g-5 justify-content-between">
                            <div class="col-6 col-lg-2">
                                <div class="client-hover-img-container">
                                    <img class="testimonial-one-icon" src="img/testimonialIconOne.jpg"
                                        alt="testimonial item logo">
                                </div>
                                <h6
                                    class="testimonial-one-icon-heading dark-text fw-700 line-height-3 text-uppercase">
                                    Wof
                                    Daks
                                </h6>
                            </div>
                            <div class="col-6 col-lg-2">
                                <div class="client-hover-img-container">
                                    <img class="testimonial-one-icon" src="img/testimonialIconTwo.jpg"
                                        alt="testimonial item logo">
                                </div>
                                <h6
                                    class="testimonial-one-icon-heading dark-text fw-700 line-height-3 text-uppercase">
                                    Adka
                                    Alko
                                </h6>
                            </div>
                            <div class="col-6 col-lg-2">
                                <div class="client-hover-img-container">
                                    <img class="testimonial-one-icon" src="img/testimonialIconThree.jpg"
                                        alt="testimonial item logo">
                                </div>
                                <h6
                                    class="testimonial-one-icon-heading dark-text fw-700 line-height-3 text-uppercase">
                                    Juba
                                    Had
                                </h6>
                            </div>
                            <div class="col-6 col-lg-2">
                                <div class="client-hover-img-container">
                                    <img class="testimonial-one-icon" src="img/testimonialIconFour.jpg"
                                        alt="testimonial item logo">
                                </div>
                                <h6
                                    class="testimonial-one-icon-heading dark-text fw-700 line-height-3 text-uppercase">
                                    Das
                                    Ker
                                </h6>
                            </div>
                            <div class="col-6 col-lg-2">
                                <div class="client-hover-img-container">
                                    <img class="testimonial-one-icon" src="img/testimonialIconFive.jpg"
                                        alt="testimonial item logo">
                                </div>
                                <h6
                                    class="testimonial-one-icon-heading dark-text fw-700 line-height-3 text-uppercase">
                                    KIDA
                                    Jadu
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end testimonial -->
    <!-- start team-->
    <section class="team-one section-padding-top section-padding-bottom bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div>
                        <h2 class="h2 text-white line-height-3 appear-text">
                            Our Dedicated Interior Designer Team
                        </h2>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-one-first-text-box">
                        <p class="p body-text fw-500 line-height-5">
                            Welcome to our interior design agency! Our team of experienced designers and decorators
                            is
                            passionate about creating beautiful, functional spaces that enhance our clients' lives.
                            Welcome to our interior design agency!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-one-card-container mt-100">
            <div class="team-one-card-carousel">
                <div class="owl-carousel owl-theme">
                    <div class="team-one-item position-relative">
                        <div class="team-img">
                            <img class="img-fluid" src="img/teamMemberOne.jpg" alt="team member">
                        </div>
                        <div class="team-one-card-info">
                            <h6 class="h6 text-white fw-700 line-height-3">
                                Gerald K. Banks
                            </h6>
                            <p class="p body-text fw-500 line-height-5">
                                UI/UX Designer
                            </p>
                        </div>
                        <div class="team-member-details d-flex flex-column">
                            <div class="member-details-social d-flex align-items-center">
                                <a class="mx-2" href="https://facebook.com">
                                    <i class="fa-brands fa-facebook-f text-white fs-5"></i>
                                </a>
                                <a class="mx-2" href="https://linkedin.com">
                                    <i class="fa-brands fa-linkedin-in text-white fs-5"></i>
                                </a>
                                <a class="mx-2" href="https://twitter.com">
                                    <i class="fa-brands fa-twitter text-white fs-5"></i>
                                </a>
                            </div>
                            <a class="btn light-btn mt-20" href="teamDetails.html"><span
                                    class="z-1 position-relative">Read More</span></a>
                        </div>
                    </div>
                    <div class="team-one-item position-relative">
                        <div class="team-img">
                            <img class="img-fluid" src="img/teamMemberTwo.jpg" alt="team member">
                        </div>
                        <div class="team-one-card-info">
                            <h6 class="h6 text-white fw-700 line-height-3">
                                Gerald K. Banks
                            </h6>
                            <p class="p body-text fw-500 line-height-5 ">
                                UI/UX Designer
                            </p>
                        </div>
                        <div class="team-member-details d-flex flex-column">
                            <div class="member-details-social d-flex align-items-center">
                                <a class="mx-2" href="https://facebook.com">
                                    <i class="fa-brands fa-facebook-f text-white fs-5"></i>
                                </a>
                                <a class="mx-2" href="https://linkedin.com">
                                    <i class="fa-brands fa-linkedin-in text-white fs-5"></i>
                                </a>
                                <a class="mx-2" href="https://twitter.com">
                                    <i class="fa-brands fa-twitter text-white fs-5"></i>
                                </a>
                            </div>
                            <a class="btn light-btn mt-20" href="teamDetails.html"><span
                                    class="z-1 position-relative">Read More</span></a>
                        </div>
                    </div>
                    <div class="team-one-item position-relative">
                        <div class="team-img">
                            <img class="img-fluid" src="img/teamMemberThree.jpg" alt="team member">
                        </div>
                        <div class="team-one-card-info">
                            <h6 class="h6 text-white fw-700 line-height-3">
                                Gerald K. Banks
                            </h6>
                            <p class="p body-text fw-500 line-height-5 ">
                                UI/UX Designer
                            </p>
                        </div>
                        <div class="team-member-details d-flex flex-column">
                            <div class="member-details-social d-flex align-items-center">
                                <a class="mx-2" href="https://facebook.com">
                                    <i class="fa-brands fa-facebook-f text-white fs-5"></i>
                                </a>
                                <a class="mx-2" href="https://linkedin.com">
                                    <i class="fa-brands fa-linkedin-in text-white fs-5"></i>
                                </a>
                                <a class="mx-2" href="https://twitter.com">
                                    <i class="fa-brands fa-twitter text-white fs-5"></i>
                                </a>
                            </div>
                            <a class="btn light-btn mt-20" href="teamDetails.html"><span
                                    class="z-1 position-relative">Read More</span></a>
                        </div>
                    </div>
                    <div class="team-one-item position-relative">
                        <div class="team-img">
                            <img class="img-fluid" src="img/teamMemberFour.jpg" alt="team member">
                        </div>
                        <div class="team-one-card-info">
                            <h6 class="h6 text-white fw-700 line-height-3">
                                Gerald K. Banks
                            </h6>
                            <p class="p body-text fw-500 line-height-5 ">
                                UI/UX Designer
                            </p>
                        </div>
                        <div class="team-member-details d-flex flex-column">
                            <div class="member-details-social d-flex align-items-center">
                                <a class="mx-2" href="https://facebook.com">
                                    <i class="fa-brands fa-facebook-f text-white fs-5"></i>
                                </a>
                                <a class="mx-2" href="https://linkedin.com">
                                    <i class="fa-brands fa-linkedin-in text-white fs-5"></i>
                                </a>
                                <a class="mx-2" href="https://twitter.com">
                                    <i class="fa-brands fa-twitter text-white fs-5"></i>
                                </a>
                            </div>
                            <a class="btn light-btn mt-20" href="teamDetails.html"><span
                                    class="z-1 position-relative">Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end team -->
    <!-- start video -->
    <section class="intro-video-one section-padding-bottom section-padding-top position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-title">
                        <div class="intro-video-title">
                            <h2 class="h2 text-white fw-700 line-height-3 mb-70 appear-text intro-video-title">
                                Design Haven Creating Beautiful Spaces That Inspire Your New Space
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-area position-relative">
            <div class="contact-container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-thumbnail-container bg-zoom-in-out text-center">
                            <a href="index.html" class="js-video-button intro-video-animation"
                                data-video-id='Us442Oh-znE'>
                                <img src="img/videoPlay.png" alt="video play icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end video -->
    <!-- start blog -->
    <section class="blogs-one section-padding-top section-padding-bottom-xl overflow-hidden">
        <div class="contact-container">
            <div class="row">
                <div class="col-12">
                    <div class="position-relative">
                        <div class="row">
                            <div class="col-12 col-sm-5 col-lg-4">
                                <div class="blog-heading">
                                    <h2
                                        class="h2 text-white fw-700 line-height-3 appear-text mb-5 mb-sm-0 blog-one-heading">
                                        Our Inspiration <br>News
                                    </h2>
                                </div>
                            </div>
                            <div class="col-12 col-sm-7 col-lg-8">
                                <div>
                                    <div class="blogs-one-cards-container">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item blogs-one-card">
                                                <div class="hover-img-container">
                                                    <img class="img-no-hover-effect" src="img/blogOne.jpg"
                                                        alt="blog image">
                                                </div>
                                                <h5 class="h5 dark-text fw-700 line-height-3 mt-20">
                                                    <a class="h5 fw-700" href="blogDetails.html">
                                                        Why do I need an architect?
                                                    </a>
                                                </h5>
                                                <p class="p body-text fw-500 line-height-5 pt-15">
                                                    Welcome to our interior design agency! Our team of experienced
                                                    designers
                                                </p>
                                            </div>
                                            <div class="item blogs-one-card mt-30">
                                                <div class="hover-img-container">
                                                    <img class="img-no-hover-effect" src="img/blogTwo.jpg"
                                                        alt="blog image">
                                                </div>
                                                <h5 class="h5 dark-text fw-700 line-height-3 mt-20">
                                                    <a class="h5 fw-700" href="blogDetails.html">
                                                        Do you know builders?
                                                    </a>
                                                </h5>
                                                <p class="p body-text fw-500 line-height-5 pt-15">
                                                    Welcome to our interior design agency! Our team of experienced
                                                    designers
                                                </p>
                                            </div>
                                            <div class="item blogs-one-card">
                                                <div class="hover-img-container">
                                                    <img class="img-no-hover-effect" src="img/blogThree.jpg"
                                                        alt="blog image">
                                                </div>
                                                <h5 class="h5 dark-text fw-700 line-height-3 mt-20">
                                                    <a class="h5 fw-700" href="blogDetails.html">
                                                        Do you know interior?
                                                    </a>
                                                </h5>
                                                <p class="p body-text fw-500 line-height-5 pt-15">
                                                    Welcome to our interior design agency! Our team of experienced
                                                    designers
                                                </p>
                                            </div>
                                            <div class="item blogs-one-card mt-30">
                                                <div class="hover-img-container">
                                                    <img class="img-no-hover-effect" src="img/blogTwo.jpg"
                                                        alt="blog image">
                                                </div>
                                                <h5 class="h5 dark-text fw-700 line-height-3 mt-20">
                                                    <a class="h5 fw-700" href="blogDetails.html">
                                                        Do you know builders?
                                                    </a>
                                                </h5>
                                                <p class="p body-text fw-500 line-height-5 pt-15">
                                                    Welcome to our interior design agency! Our team of experienced
                                                    designers
                                                </p>
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
    </section>
    <!-- end blog -->

@endsection