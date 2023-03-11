<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Sistem Penggajian Karyawan</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/base.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/vendor.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/main.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/slideshow.css">

    <!-- script
    ================================================== -->
    <script src="<?= base_url() ?>assets/frontend/js/modernizr.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo/63-512.png" type="image/x-icon">
    <link rel="icon" href="<?= base_url() ?>assets/images/logo/63-512.png" type="image/x-icon">

</head>

<body id="top">

    <!-- header
================================================== -->
    <header class="s-header">

        <!--	<div class="header-logo">-->
        <!--		<a class="site-logo" href="-->
        <? //= base_url()
		?>
        <!--assets/frontend/index.html">-->
        <!--			<img src="-->
        <? //= base_url()
		?>
        <!--assets/frontend/images/logo.svg" alt="Homepage">-->
        <!--		</a>-->
        <!--	</div> -->
        <!-- end header-logo -->

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Menu</h3>

                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll" href="#gallery" title="about">Gallery</a></li>
                    <li><a class="smoothscroll" href="#location" title="services">Location</a></li>
                    <li><a class="smoothscroll" href="#contact" title="contact">Contact</a></li>
                    <li><a href="<?= base_url('login') ?>" title="login">Login</a></li>
                </ul>

                <!--			<p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>-->

                <ul class="header-nav__social">
                    <li>
                        <a href="#0"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-whatsapp"></i></a>
                    </li>
                    <!-- <li>
						<a href="#0"><i class="fab fa-dribbble"></i></a>
					</li> -->
                </ul>

            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll"
        data-image-src="<?= base_url() ?>assets/frontend/images/sigaka/backround1.jpg" data-natural-width=3000
        data-natural-height=2000 data-position-y=top>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">
                <h1>
                    Sistem Penggajian Karyawan <br>
                </h1>

                <p>
                    We will provide attractive offers and the best services
                </p>
            </div> <!-- end home-content__main -->

        </div> <!-- end home-content -->

        <ul class="home-sidelinks">
            <li><a class="smoothscroll" href="#gallery">Gallery<span>who are we</span></a></li>
            <li><a class="smoothscroll" href="#location">Location<span>where are we</span></a></li>
            <li><a class="smoothscroll" href="#contact">Contact<span>get in touch</span></a></li>
        </ul> <!-- end home-sidelinks -->

        <ul class="home-social">
            <li class="home-social-title">Follow Us</li>
            <li><a href="#0">
                    <i class="fab fa-facebook"></i>
                    <span class="home-social-text">Facebook</span>
                </a></li>
            <li><a href="#0">
                    <i class="fab fa-twitter"></i>
                    <span class="home-social-text">Twitter</span>
                </a></li>
            <li><a href="#0">
                    <i class="fab fa-linkedin"></i>
                    <span class="home-social-text">LinkedIn</span>
                </a></li>
        </ul> <!-- end home-social -->

        <a href="#gallery" class="home-scroll smoothscroll">
            <span class="home-scroll__text">Scroll Down</span>
            <span class="home-scroll__icon"></span>
        </a> <!-- end home-scroll -->

    </section> <!-- end s-home -->


    <!-- about
================================================== -->
    <!-- end s-about -->


    <!-- services
================================================== -->
    <section id='gallery' class="s-services light-gray">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Gallery</h3>
                <!--			<h1 class="display-1">We have everything you need to launch and grow a successful digital business.</h1>-->
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade" style="width: 100%">
                        <div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)"
                            style="background-color: rgba(0, 0, 0, 0.7)">1 / 10</div>
                        <img src="<?= base_url() ?>assets/frontend/images/sigaka/b1.jpg"
                            style="width: 100%; height: 650px; margin: 0 auto">
                        <div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Farhan</b>, Jalan Suka
                            Karya Kecamatan Megamendung</div>
                    </div>

                    <div class="mySlides fade" style="width: 100%">
                        <div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">2 / 10</div>
                        <img src="<?= base_url() ?>assets/frontend/images/sigaka/b2.jpg"
                            style="width: 100%; height: 650px; margin: 0 auto">
                        <div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Farhan</b>, Jalan Suka
                            Karya, Kecamatan Megamendung</div>
                    </div>

                    <div class="mySlides fade" style="width: 100%">
                        <div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">3 / 10</div>
                        <img src="<?= base_url() ?>assets/frontend/images/sigaka/b3.jpg"
                            style="width: 100%; height: 650px; margin: 0 auto">
                        <div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Farhan</b>, Jalan Paus,
                            Kelurahan Tangkerang Tengah</div>
                    </div>

                    <div class="mySlides fade" style="width: 100%">
                        <div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">4 / 10</div>
                        <img src="<?= base_url() ?>assets/frontend/images/sigaka/b4.jpg"
                            style="width: 100%; height: 650px; margin: 0 auto">
                        <div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Farhan</b>, Jalan Suka
                            Karya, Kecamatan Megamendung</div>
                    </div>

                    <div class="mySlides fade" style="width: 100%">
                        <div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">5 / 10</div>
                        <img src="<?= base_url() ?>assets/frontend/images/sigaka/b5.jpg"
                            style="width: 100%; height: 650px; margin: 0 auto">
                        <div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Farhan</b>, Jalan Suka
                            Karya, Kecamatan Megamendung</div>
                    </div>

                    <div class="mySlides fade" style="width: 100%">
                        <div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">6 / 10</div>
                        <img src="<?= base_url() ?>assets/frontend/images/sigaka/b6.jpg"
                            style="width: 100%; height: 650px; margin: 0 auto">
                        <div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Farhan</b>, Jalan
                            Terubuk, Kecamatan Marpoyan Damai</div>
                    </div>

                    <div class="mySlides fade" style="width: 100%">
                        <div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">7 / 10</div>
                        <img src="<?= base_url() ?>assets/frontend/images/sigaka/b7.jpeg"
                            style="width: 100%; height: 650px; margin: 0 auto">
                        <div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Farhan</b>, Jalan Duyung,
                            Kecamatan Marpoyan Damai</div>
                    </div>

                    <div class="mySlides fade" style="width: 100%">
                        <div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">8 / 10</div>
                        <img src="<?= base_url() ?>assets/frontend/images/sigaka/b8.jpg"
                            style="width: 100%; height: 650px; margin: 0 auto">
                        <div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Farhan</b>, Jalan Suka
                            Karya Ujung, Tarai Bangun</div>
                    </div>

                    <div class="mySlides fade" style="width: 100%">
                        <div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">9 / 10</div>
                        <img src="<?= base_url() ?>assets/frontend/images/sigaka/b9.jpg"
                            style="width: 100%; height: 650px; margin: 0 auto">
                        <div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Farhan</b>, Jalan
                            Suka Karya, Kecamatan Megamendung</div>
                    </div>

                    <div class="mySlides fade" style="width: 100%">
                        <div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">10 / 10</div>
                        <img src="<?= base_url() ?>assets/frontend/images/sigaka/b10.jpg"
                            style="width: 100%; height: 650px; margin: 0 auto">
                        <div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Syahdan Ponsel</b>, Jalan
                            Duyung, Kecamatan Marpoyan Damai</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                    <span class="dot" onclick="currentSlide(6)"></span>
                    <span class="dot" onclick="currentSlide(7)"></span>
                    <span class="dot" onclick="currentSlide(8)"></span>
                    <span class="dot" onclick="currentSlide(9)"></span>
                    <span class="dot" onclick="currentSlide(10)"></span>
                </div>
            </div>
        </div> <!-- end about-desc -->

    </section>
    <!-- end s-services -->


    <!-- works
================================================== -->
    <section id='location' class="s-works">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Location</h3>
                <!--			<h1 class="display-1">These are some of our recent design projects and we are so excited to show them to you.</h1>-->
            </div>
        </div> <!-- end section-header -->

        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="<?= base_url() ?>assets/frontend/images/sigaka/L1.jpg" class="thumb-link"
                                title="Alyssa" data-size="1050x700">
                                <img src="<?= base_url() ?>assets/frontend/images/sigaka/L1.jpg"
                                    srcset="<?= base_url() ?>assets/frontend/images/sigaka/L1.jpg 1x, <?= base_url() ?>assets/frontend/images/sigaka/L1.jpg 2x"
                                    alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Microsoft
                            </h3>
                            <p class="item-folio__cat">
                                Jl. Jenderal Sudirman No.Kav. 52-53, RT.5/RW.3, Senayan, Kec. Kby. Baru, Kota Jakarta
                                Selatan, Daerah Khusus Ibukota Jakarta 12190
                            </p>
                        </div>

                        <span class="item-folio__caption">
                            <p>Jl. Jenderal Sudirman No.Kav. 52-53, RT.5/RW.3, Senayan, Kec. Kby. Baru, Kota Jakarta
                                Selatan, Daerah Khusus Ibukota Jakarta 12190</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->


                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="<?= base_url() ?>assets/frontend/images/sigaka/L2.jpeg" class="thumb-link"
                                title="L2" data-size="1050x700">
                                <img src="<?= base_url() ?>assets/frontend/images/sigaka/L2.jpeg"
                                    srcset="<?= base_url() ?>assets/frontend/images/sigaka/L2.jpeg 1x, <?= base_url() ?>assets/frontend/images/sigaka/L2.jpeg 2x"
                                    alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Aurel Ponsel
                            </h3>
                            <p class="item-folio__cat">
                                Kecamatan Megamendung
                            </p>
                        </div>

                        <span class="item-folio__caption">
                            <p>Jalan Suka Karya Kecamatan Megamendung</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->


                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="<?= base_url() ?>assets/frontend/images/sigaka/L3.jpg" class="thumb-link"
                                title="L3" data-size="1050x700">
                                <img src="<?= base_url() ?>assets/frontend/images/sigaka/L3.jpg"
                                    srcset="<?= base_url() ?>assets/frontend/images/sigaka/L3.jpg 1x, <?= base_url() ?>assets/frontend/images/sigaka/L3.jpg 2x"
                                    alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Dana Ponsel
                            </h3>
                            <p class="item-folio__cat">
                                Kelurahan Tangkerang Tengah
                            </p>
                        </div>

                        <span class="item-folio__caption">
                            <p>Jalan Paus, Kelurahan Tangkerang Tengah</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->



                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="<?= base_url() ?>assets/frontend/images/sigaka/L4.jpg" class="thumb-link"
                                title="L4" data-size="1050x700">
                                <img src="<?= base_url() ?>assets/frontend/images/sigaka/L4.jpg"
                                    srcset="<?= base_url() ?>assets/frontend/images/sigaka/L4.jpg 1x, <?= base_url() ?>assets/frontend/images/sigaka/L4.jpg 2x"
                                    alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Namira Ponsel
                            </h3>
                            <p class="item-folio__cat">
                                Kecamatan Megamendung
                            </p>
                        </div>

                        <span class="item-folio__caption">
                            <p>Jalan Suka Karya Kecamatan Megamendung</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="<?= base_url() ?>assets/frontend/images/sigaka/L5.jpeg" class="thumb-link"
                                title="L5" data-size="1050x700">
                                <img src="<?= base_url() ?>assets/frontend/images/sigaka/L5.jpeg" style="width: 100%"
                                    srcset="<?= base_url() ?>assets/frontend/images/sigaka/L5.jpeg 1x, <?= base_url() ?>assets/frontend/images/sigaka/L5.jpeg 2x"
                                    alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                SK Ponsel
                            </h3>
                            <p class="item-folio__cat">
                                Kecamatan Marpoyan Damai
                            </p>
                        </div>

                        <span class="item-folio__caption">
                            <p>Jalan Duyung, Kecamatan Marpoyan Damai</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->


                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="<?= base_url() ?>assets/frontend/images/sigaka/L6.jpeg" class="thumb-link"
                                title="L6" data-size="1050x700">
                                <img src="<?= base_url() ?>assets/frontend/images/sigaka/L6.jpeg"
                                    srcset="<?= base_url() ?>assets/frontend/images/sigaka/L6.jpeg 1x, <?= base_url() ?>assets/frontend/images/sigaka/L6.jpeg 2x"
                                    alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Syafian Ponsel
                            </h3>
                            <p class="item-folio__cat">
                                Tarai Bangun
                            </p>
                        </div>

                        <span class="item-folio__caption">
                            <p>Jalan Suka Karya Ujung, Tarai Bangun</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->


                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="<?= base_url() ?>assets/frontend/images/sigaka/selkom.jpg" class="thumb-link"
                                title="Selkom" data-size="1050x700">
                                <img src="<?= base_url() ?>assets/frontend/images/sigaka/selkom.jpg" style="width: 100%"
                                    srcset="<?= base_url() ?>assets/frontend/images/sigaka/selkom.jpg 1x, <?= base_url() ?>assets/frontend/images/sigaka/selkom.jpg 2x"
                                    alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Selkom Ponsel
                            </h3>
                            <p class="item-folio__cat">
                                Kecamatan Marpoyan Damai
                            </p>
                        </div>

                        <span class="item-folio__caption">
                            <p>Jalan Terubuk, Kecamatan Marpoyan Damai</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->



                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="<?= base_url() ?>assets/frontend/images/sigaka/syafitra.jpg" class="thumb-link"
                                title="Syafitra" data-size="1050x700">
                                <img src="<?= base_url() ?>assets/frontend/images/sigaka/syafitra.jpg"
                                    srcset="<?= base_url() ?>assets/frontend/images/sigaka/syafitra.jpg 1x, <?= base_url() ?>assets/frontend/images/sigaka/syafitra.jpg 2x"
                                    alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Syafitra Ponsel
                            </h3>
                            <p class="item-folio__cat">
                                Kecamatan Megamendung
                            </p>
                        </div>

                        <span class="item-folio__caption">
                            <p>Jalan Suka Karya Kecamatan Megamendung</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->



                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="<?= base_url() ?>assets/frontend/images/sigaka/inara.jpg" class="thumb-link"
                                title="Inara" data-size="1050x700">
                                <img src="<?= base_url() ?>assets/frontend/images/sigaka/inara.jpg"
                                    srcset="<?= base_url() ?>assets/frontend/images/sigaka/inara.jpg 1x, <?= base_url() ?>assets/frontend/images/sigaka/inara.jpg 2x"
                                    alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Inara Ponsel
                            </h3>
                            <p class="item-folio__cat">
                                Kecamatan Megamendung
                            </p>
                        </div>

                        <span class="item-folio__caption">
                            <p>Jalan Suka Karya Kecamatan Megamendung</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="<?= base_url() ?>assets/frontend/images/sigaka/syahdan.jpg" class="thumb-link"
                                title="Syahdan" data-size="1050x700">
                                <img src="<?= base_url() ?>assets/frontend/images/sigaka/syahdan.jpg"
                                    srcset="<?= base_url() ?>assets/frontend/images/sigaka/syahdan.jpg 1x, <?= base_url() ?>assets/frontend/images/sigaka/syahdan.jpg 2x"
                                    alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Syahdan Ponsel
                            </h3>
                            <p class="item-folio__cat">
                                Kecamatan Marpoyan Damai
                            </p>
                        </div>

                        <span class="item-folio__caption">
                            <p>Jalan Duyung, Kecamatan Marpoyan Damai</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->



            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->


    </section> <!-- end s-works -->


    <!-- stats
================================================== -->


    <!-- contact
================================================== -->
    <section id="contact" class="s-contact">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--light">Contact Us</h3>
                <!--			<h1 class="display-1 display-1--light">Get in touch and let's make something great together. Let's turn your idea on an even greater product.</h1>-->
            </div>
        </div> <!-- end section-header -->

        <div class="row">

            <div class="col-full contact-main" data-aos="fade-up">
                <p>
                    <a href="mailto:#0" class="contact-email">mfarhanmuizaddin@gmail.com</a>
                    <span class="contact-number">+62 858-7119-4844</span>
                </p>
            </div> <!-- end contact-main -->

        </div> <!-- end row -->

        <div class="row">

            <div class="col-five tab-full contact-secondary" data-aos="fade-up">
                <h3 class="subhead subhead--light">Where To Find Us</h3>

                <p class="contact-address">
                    Kp.Situ RT003/002 Desa Sukaremi<br>
                    Kec.
                    megamendung Kab. Bogor<br>
                </p>
            </div> <!-- end contact-secondary -->

            <div class="col-five tab-full contact-secondary" data-aos="fade-up">
                <h3 class="subhead subhead--light">Follow Us</h3>

                <ul class="contact-social">
                    <li>
                        <a href="#0"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-github"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul> <!-- end contact-social -->

                <div class="contact-subscribe">
                    <form id="mc-form" class="group mc-form" novalidate="true">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email"
                            placeholder="Email Address" required="">
                        <input type="submit" name="subscribe" value="Subscribe">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div> <!-- end contact-subscribe -->
            </div> <!-- end contact-secondary -->

        </div> <!-- end row -->

        <div class="row">
            <div class="col-full cl-copyright">
                <span>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                    </script> All rights reserved | <a href="#" target="_blank">Digtive</a> |
                    Repost by <a href="#" title="sharecodingan.blogspot.com" target="_blank">Muhamad Farhan
                        Muizaddin</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </span>
            </div>
        </div>

        <div class="cl-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
        </div>

    </section> <!-- end s-contact -->


    <!-- photoswipe background
================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close"
                        title="Close (Esc)"></button> <button class="pswp__button pswp__button--share"
                        title="Share"></button> <button class="pswp__button pswp__button--fs"
                        title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom"
                        title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
================================================== -->
    <div id="preloader">
        <div id="loader">
        </div>
    </div>


    <!-- Java Script
================================================== -->
    <script src="<?= base_url() ?>assets/frontend/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/plugins.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/main.js"></script>
    <script type="text/javascript">
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
    </script>

</body>

</html>