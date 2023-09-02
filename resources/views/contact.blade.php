@extends('base.base')

@section('main')

    <!-- start inner page banner-->
    <section class="inner-page-banner section-padding-bottom-xl section-padding-top-xl">
        <div class="container">
            <div class="inner-page-banner-wrapper d-flex justify-content-center align-items-center">
                <h2 class="h2 dark-text fw-700 line-height-3 text-center">
                    Contact With Us
                </h2>
            </div>
        </div>
    </section>
    <!-- end inner page banner-->
    <!-- start contact -->
    <section class="contact section-padding-bottom-xl section-padding-top-xl overflow-hidden">
        <div class="contact-container">
            <div class="contact-wrapper">
                <div class="row">
                    <div data-aos="fade-right" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="0"
                        class="col-12 col-lg-6">
                        <div class="row gy-5 gy-lg-0">
                            <div class="col-12 col-sm-4 count-one-border-responsive position-relative">
                                <div class="contact-info-wrapper">
                                    <div class="contact-info-icon d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-location-dot dark-text d-inline-block"></i>
                                    </div>
                                    <h4 class="dark-text fw-700 line-height-3 ">Address</h4>
                                    <p class="p body-text fw-500 line-height-5">
                                        901 N Pitt Str., Suite 170
                                        Alexandria, NY, USA
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 count-one-border-responsive position-relative">
                                <div class="contact-info-wrapper">
                                    <div class="contact-info-icon d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-phone-volume dark-text d-inline-block"></i>
                                    </div>
                                    <h4 class="dark-text fw-700 line-height-3 ">Phone</h4>
                                    <p class="p body-text fw-500 line-height-5">
                                        <a class="body-text" href="tel:(406) 555-0120">(406) 555-0120</a><br>
                                        <a class="body-text" href="tel:(406) 555-0120">(406) 555-0120</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 position-relative">
                                <div class="contact-info-wrapper">
                                    <div class="contact-info-icon d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-envelope dark-text d-inline-block"></i>
                                    </div>
                                    <h4 class="dark-text fw-700 line-height-3 ">Email</h4>
                                    <p class="p body-text fw-500 line-height-5">
                                        <a class="body-text" href="mailto:archite@email.com">archite@email.com</a>
                                        <a class="body-text" href="mailto:hello@archite.com">hello@archite.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-100">
                            <h4 class="contact-form-heading fw-700 line-height-3 dark-text mb-70">Drop Us a Message
                            </h4>
                            <form class="contact-page-form">
                                <div class="row mb-50">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="col">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                    placeholder="Your Messages" rows="3"></textarea>
                                <a class="btn brand-btn text-uppercase d-inline-block mt-60" href="contact.html">
                                    <span class="position-relative z-1">send messages</span>
                                </a>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-center text-lg-end d-none d-lg-flex">
                        <div class="w-100">
                            <img src="img/experienceOneImg.jpg" class="img-no-hover-effect" alt="contact img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact -->
    <!-- start map -->
    <div class="contact-location-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387194.0622843894!2d-74.30932844391303!3d40.69701928424492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1683321107064!5m2!1sen!2sbd"
            width="100" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <!-- end map -->

@endsection