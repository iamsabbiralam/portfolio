<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="{{ asset('build/assets/frontend/images/favicon.png') }}">
    <title>iamsabbiralam</title>
    <link href="{{ asset('build/assets/frontend/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/frontend/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/frontend/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/frontend/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/frontend/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/frontend/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/frontend/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/frontend/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/frontend/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/frontend/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/frontend/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/frontend/css/odometer-theme-default.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/frontend/sass/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="{{ asset('build/assets/frontend/images/preloader.png') }}" alt="preloader">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <header id="header" class="wpo-header-style-1">
            <div class="wpo-site-header">
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand site-logo" href="/"><img
                                            src="{{ asset('build/assets/frontend/images/logo.png') }}" alt="logo">Sabbir.</a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                                        <li class="menu-item-has-children">
                                            <a class="active" href="/">Home</a>
                                        </li>
                                        <li>
                                            <a href="about.html">About</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Service</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Portfolio</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>

                                </div><!-- end of nav-collapse -->
                            </div>
                            <div class="col-lg-2 col-md-2 col-2">
                                <div class="header-right">
                                    <div class="header-btn">
                                        <a class="theme-btn" download="My Cv" target="_blank" href="https://drive.google.com/file/d/16CltbSR6gIA8-jcHzrMkAuMaLsQgzBTT/view?usp=share_link"
                                            title="ImageName">
                                            <img class="hide-img" alt="ImageName" src="{{ asset('build/assets/frontend/images/cv.jpg') }}">
                                            Resume
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of container -->
                </nav>
            </div>
        </header>
        <!-- end of header -->
        <!-- start of hero -->
        <section class="static-hero" id='div'>
            <div class="hero-container">
                <div class="hero-inner">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-12">
                                <div class="wpo-static-hero-inner">
                                    <div data-swiper-parallax="300" class="slide-title">
                                        <h2><span>Hello,</span>
                                            I am Sabbir.</h2>
                                    </div>
                                    <div data-swiper-parallax="300" class="slide-sub-title">
                                        <h5>Back-end Developer</h5>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="slide-btn"><a class="theme-btn" href="about.html">Hire Me</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="static-hero-right">
                <div class="static-hero-img">
                    <div class="static-hero-img-inner">
                        <img src="{{ asset('build/assets/frontend/images/sabbir1.jpeg') }}" alt="image">
                        <div class="icon-1 floating-item"><img src="{{ asset('build/assets/frontend/images/icon/go-lang.png') }}" alt=""></div>
                        <div class="icon-2 floating-item"><img src="{{ asset('build/assets/frontend/images/icon/php.png') }}" alt=""></div>
                        <div class="icon-3 floating-item"><img src="{{ asset('build/assets/frontend/images/icon/mysql.png') }}" alt=""></div>
                        <div class="project floating-item">
                            <div class="icon">
                                <i class="fi flaticon-verified"></i>
                            </div>
                            <div class="p-text">
                                <h3><span class="odometer" data-count="10">00</span>+</h3>
                                <p>Complete Project</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-1">
                <svg width="1038" height="938" viewBox="0 0 1038 938" fill="none">
                    <g opacity="0.5" filter="url(#filter0_f_39_4392)">
                        <circle cx="290.5" cy="282.5" r="247.5" />
                    </g>
                    <defs>
                        <filter id="filter0_f_39_4392" x="-457" y="-465" width="1495" height="1495"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_4392" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="shape-2">
                <svg width="1295" height="938" viewBox="0 0 1295 938" fill="none">
                    <g opacity="0.4" filter="url(#filter0_f_39_4393)">
                        <circle cx="647.5" cy="561.5" r="247.5" />
                    </g>
                    <defs>
                        <filter id="filter0_f_39_4393" x="0" y="-86" width="1295" height="1295"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="200" result="effect1_foregroundBlur_39_4393" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="shape-3">
                <svg width="752" height="747" viewBox="0 0 752 747" fill="none">
                    <g opacity="0.45" filter="url(#filter0_f_39_4394)">
                        <circle cx="647.5" cy="99.5" r="247.5" />
                    </g>
                    <defs>
                        <filter id="filter0_f_39_4394" x="0" y="-548" width="1295" height="1295"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="200" result="effect1_foregroundBlur_39_4394" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="line-shape-1">
                <img src="{{ asset('build/assets/frontend/images/slider/line-1.png') }}" alt="">
            </div>
            <div class="line-shape-2">
                <img src="{{ asset('build/assets/frontend/images/slider/line-2.png') }}" alt="">
            </div>
        </section>
        <!-- end of hero slider -->

        <!-- start of wpo-about-area -->
        <div class="wpo-about-area section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="wpo-about-exprience-wrap">
                            <div class="wpo-about-exprience">
                                <h2>02</h2>
                                <span>Years of Experience</span>
                            </div>
                            <div class="client">
                                <h3><span class="odometer" data-count="100">00</span>%</h3>
                                <p>Clients Satisfections</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-12 col-sm-12">
                        <div class="wpo-about-content">
                            <div class="wpo-about-title">
                                <h2>My Advantage</h2>
                                <p>I'm a self-disciplined person, intention-orientated and reliable. I have a detailed mind, am very bendy, and continually prioritize my purchaser in particular else. I make certain all tasks are given complete consideration to the desires and results as directed through the consumer. Loving a project and, as a fantastically organized and equipped operator, I will make sure that my projects are successfully completed in the time allotted. allow me to help with HTML, CSS, Core PHP, Laravel, Go Language.</p>
                            </div>
                            <div class="wpo-about-funfact">
                                <div class="grid">
                                    <div class="grid-inner">
                                        <h3><span class="odometer" data-count="80">00</span>%</h3>
                                        <p>Go</p>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="grid-inner">
                                        <h3><span class="odometer" data-count="85">00</span>%</h3>
                                        <p>PHP</p>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="grid-inner">
                                        <h3><span class="odometer" data-count="88">00</span>%</h3>
                                        <p>Laravel</p>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="grid-inner">
                                        <h3><span class="odometer" data-count="85">00</span>%</h3>
                                        <p>MySQL</p>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="grid-inner">
                                        <h3><span class="odometer" data-count="85">00</span>%</h3>
                                        <p>PostgreSQL</p>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="grid-inner">
                                        <h3><span class="odometer" data-count="80">00</span>%</h3>
                                        <p>Api</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ab-shape">
                <svg width="995" height="1495" viewBox="0 0 995 1495" fill="none">
                    <g opacity="0.3" filter="url(#filter0_f_39_4267)">
                        <circle cx="247.5" cy="747.5" r="247.5" fill="#FFE500" />
                    </g>
                    <defs>
                        <filter id="filter0_f_39_4267" x="-500" y="0" width="1495" height="1495"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_4267" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="ab-shape-s2">
                <svg width="1252" height="1901" viewBox="0 0 1252 1901" fill="none">
                    <g opacity="0.15" filter="url(#filter0_f_39_4265)">
                        <circle cx="950" cy="950.004" r="450" />
                    </g>
                    <defs>
                        <filter id="filter0_f_39_4265" x="-0.00012207" y="0.00402832" width="1900" height="1900"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_4265" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="line-shape-1">
                <img src="{{ asset('build/assets/frontend/images/about/shape1.png') }}" alt="">
            </div>
            <div class="line-shape-2">
                <img src="{{ asset('build/assets/frontend/images/about/shape2.png') }}" alt="">
            </div>
        </div>
        <!-- end of wpo-about-area -->

        <!-- start of wpo-service-area -->
        <div class="wpo-service-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="wpo-section-title">
                            <h2>Popular Services</h2>
                            <p>Must explain to you how all this mistaken idea of denouncing pleasure
                                born and give you a complete account the system</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-service-wrap">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="Development-tab" data-bs-toggle="tab" href="#Development" role="tab"
                                aria-controls="Development" aria-selected="true">Development</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="Design-tab" data-bs-toggle="tab" href="#Design" role="tab"
                                aria-controls="Design" aria-selected="false">Design</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="Marketing-tab" data-bs-toggle="tab" href="#Marketing" role="tab"
                                aria-controls="Marketing" aria-selected="false">Marketing</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane" id="Development">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-coding"></i>
                                        </div>
                                        <h2>Web Development</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-app-development"></i>
                                        </div>
                                        <h2>App Development</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-smartphone"></i>
                                        </div>
                                        <h2>Softwere Development</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane active" id="Design">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-vector"></i>
                                        </div>
                                        <h2>Graphic Design</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-palette"></i>
                                        </div>
                                        <h2>Brand Identity</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-add"></i>
                                        </div>
                                        <h2>UI/UX Design</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Marketing">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-social-media"></i>
                                        </div>
                                        <h2>Social Media Marketing</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-promotion"></i>
                                        </div>
                                        <h2>Digital Marketing</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-email-marketing"></i>
                                        </div>
                                        <h2>Email Marketing</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ab-shape">
                <svg width="995" height="1495" viewBox="0 0 995 1495" fill="none">
                    <g opacity="0.3" filter="url(#filter0_f_39_4268)">
                        <circle cx="247.5" cy="747.5" r="247.5" fill="#FFE500" />
                    </g>
                    <defs>
                        <filter id="filter0_f_39_4268" x="-500" y="0" width="1495" height="1495"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_4267" />
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>
        <!-- end of wpo-service-area -->

        <!-- start of wpo-work-area -->
        <div class="wpo-work-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="wpo-section-title">
                            <h2>My Work Experience</h2>
                            <p>Must explain to you how all this mistaken idea of denouncing pleasure
                                born and give you a complete account the system</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-work-wrap">
                    <div class="wpo-work-item">
                        <ul>
                            <li class="date">2015 - 2016</li>
                            <li class="logo"><img src="{{ asset('build/assets/frontend/images/work/1.png') }}" alt=""></li>
                            <li class="position">Junior Visual Designer <span>Trapeza Group, USA.</span></li>
                            <li class="link"><a href="#">Go to website</a></li>
                        </ul>
                    </div>
                    <div class="wpo-work-item">
                        <ul>
                            <li class="date">2017 - 2018</li>
                            <li class="logo"><img src="{{ asset('build/assets/frontend/images/work/2.png') }}" alt=""></li>
                            <li class="position">UI/UX Designer <span>Gallerie Ontario, Canada
                                    <span>(Remote)</span></span></li>
                            <li class="link"><a href="#">Go to website</a></li>
                        </ul>
                    </div>
                    <div class="wpo-work-item">
                        <ul>
                            <li class="date">2019 - 2020</li>
                            <li class="logo"><img src="{{ asset('build/assets/frontend/images/work/3.png') }}" alt=""></li>
                            <li class="position">Seinor UI/UX Desinger <span>Morson Hybrid, Canada</span></li>
                            <li class="link"><a href="#">Go to website</a></li>
                        </ul>
                    </div>
                    <div class="wpo-work-item">
                        <ul>
                            <li class="date">2019 - <span>Present</span></li>
                            <li class="logo"><img src="{{ asset('build/assets/frontend/images/work/4.png') }}" alt=""></li>
                            <li class="position">Product Designer <span>Myant Inc. Etobicoke, ON
                                    <span>(Remote)</span></span></li>
                            <li class="link"><a href="#">Go to website</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="shape-wk">
                <svg width="1500" height="1500" viewBox="0 0 1500 1500" fill="none">
                    <g opacity="0.45" filter="url(#filter0_f_39_4214)">
                        <circle cx="750" cy="750" r="200" />
                    </g>
                    <defs>
                        <filter id="filter0_f_39_4214" x="0" y="0" width="1500" height="1500"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="275" result="effect1_foregroundBlur_39_4212" />
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>
        <!-- end of wpo-work-area -->

        <!-- start of wpo-project-area -->
        <div class="wpo-project-area section-padding">
            <div class="container">
                <div class="wpo-section-title-s2">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-12">
                            <div class="title">
                                <h2>Recent Work.</h2>
                                <p>Must explain to you how all this mistaken idea pleasure
                                    born and give you a complete account.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-2">
                            <div class="sec-title-icon">
                                <i class="fi flaticon-self-growth"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpo-project-wrap wpo-project-slide owl-carousel">
                    <div class="wpo-project-item">
                        <div class="wpo-project-img">
                            <img src="{{ asset('build/assets/frontend/images/project/img-1.jpg') }}" alt="">
                        </div>
                        <div class="wpo-project-text">
                            <h2><a href="portfolio-single.html">Arkio - Architecture & Interior WordPress Theme</a></h2>
                            <span>Architecture / Business</span>
                        </div>
                    </div>
                    <div class="wpo-project-item">
                        <div class="wpo-project-img">
                            <img src="{{ asset('build/assets/frontend/images/project/img-2.jpg') }}" alt="">
                        </div>
                        <div class="wpo-project-text">
                            <h2><a href="portfolio-single.html">Follio - Multipurpose Portfolio HTML5 Template</a></h2>
                            <span>Web Design</span>
                        </div>
                    </div>
                    <div class="wpo-project-item">
                        <div class="wpo-project-img">
                            <img src="{{ asset('build/assets/frontend/images/project/img-3.jpg') }}" alt="">
                        </div>
                        <div class="wpo-project-text">
                            <h2><a href="portfolio-single.html">Elito - Creative Portfolio HTML5 Template</a></h2>
                            <span>Website / Creative</span>
                        </div>
                    </div>
                    <div class="wpo-project-item">
                        <div class="wpo-project-img">
                            <img src="{{ asset('build/assets/frontend/images/project/img-1.jpg') }}" alt="">
                        </div>
                        <div class="wpo-project-text">
                            <h2><a href="portfolio-single.html">Arkio - Architecture & Interior WordPress Theme</a></h2>
                            <span>Architecture / Business</span>
                        </div>
                    </div>
                    <div class="wpo-project-item">
                        <div class="wpo-project-img">
                            <img src="{{ asset('build/assets/frontend/images/project/img-2.jpg') }}" alt="">
                        </div>
                        <div class="wpo-project-text">
                            <h2><a href="portfolio-single.html">Follio - Multipurpose Portfolio HTML5 Template</a></h2>
                            <span>Web Design</span>
                        </div>
                    </div>
                    <div class="wpo-project-item">
                        <div class="wpo-project-img">
                            <img src="{{ asset('build/assets/frontend/images/project/img-3.jpg') }}" alt="">
                        </div>
                        <div class="wpo-project-text">
                            <h2><a href="portfolio-single.html">Elito - Creative Portfolio HTML5 Template</a></h2>
                            <span>Website / Creative</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-p">
                <svg width="1325" height="1687" viewBox="0 0 1325 1687" fill="none">
                    <g filter="url(#filter0_f_39_4166)">
                        <circle cx="481.5" cy="843.5" r="343.5" fill-opacity="0.27" />
                    </g>
                    <defs>
                        <filter id="filter0_f_39_4166" x="-362" y="0" width="1687" height="1687"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_4166" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="line-shape-1">
                <img src="{{ asset('build/assets/frontend/images/project/line-1.png') }}" alt="">
            </div>
            <div class="line-shape-2">
                <img src="{{ asset('build/assets/frontend/images/project/line-2.png') }}" alt="">
            </div>
        </div>
        <!-- end of wpo-project-area -->

        <!--Start wpo-testimonial-section-->
        <section class="wpo-testimonial-section section-padding">
            <div class="container">
                <div class="wpo-testimonial-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12">
                            <div class="testimonial-left">
                                <div class="testimonial-left-inner">
                                    <div class="slider-for">
                                        <div class="testimonial-img">
                                            <img src="{{ asset('build/assets/frontend/images/testimonial/img-1.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="{{ asset('build/assets/frontend/images/testimonial/img-2.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="{{ asset('build/assets/frontend/images/testimonial/img-3.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="{{ asset('build/assets/frontend/images/testimonial/img-4.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="{{ asset('build/assets/frontend/images/testimonial/img-5.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="{{ asset('build/assets/frontend/images/testimonial/img-6.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="side-img-1"><img src="{{ asset('build/assets/frontend/images/testimonial/img-2.jpg') }}" alt=""></div>
                                    <div class="side-img-2"><img src="{{ asset('build/assets/frontend/images/testimonial/img-3.jpg') }}" alt=""></div>
                                    <div class="side-img-3"><img src="{{ asset('build/assets/frontend/images/testimonial/img-4.jpg') }}" alt=""></div>
                                    <div class="side-img-4"><img src="{{ asset('build/assets/frontend/images/testimonial/img-5.jpg') }}" alt=""></div>
                                    <div class="side-img-5"><img src="{{ asset('build/assets/frontend/images/testimonial/img-6.jpg') }}" alt=""></div>
                                    <div class="border-s1"></div>
                                    <div class="border-s2"></div>
                                    <div class="border-s3"></div>
                                </div>
                                <div class="shape-t">
                                    <svg width="750" height="750" viewBox="0 0 750 750" fill="none">
                                        <g filter="url(#filter0_f_39_4154)">
                                            <circle r="125" transform="matrix(-1 0 0 1 375 375)" fill-opacity="0.4" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_f_39_4154" x="0" y="0" width="750" height="750"
                                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                    result="shape" />
                                                <feGaussianBlur stdDeviation="125"
                                                    result="effect1_foregroundBlur_39_4154" />
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="wpo-testimonial-items">
                                <div class="slider-nav">
                                    <div class="wpo-testimonial-item">
                                        <div class="wpo-testimonial-text">
                                            <h4>Many desktop publishing packages and editors now use as their.</h4>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable
                                                content of page when looking at its layout point of using is that it has
                                                more-or-less
                                                normal distribution of letters, as opposed to using 'Content here,
                                                content here',
                                                making look like readable English.</p>
                                            <div class="wpo-testimonial-text-btm">
                                                <h3>Cathi Falcon, <span>Software Engineer</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpo-testimonial-item">
                                        <div class="wpo-testimonial-text">
                                            <h4>Many desktop publishing packages and editors now use as their.</h4>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable
                                                content of page when looking at its layout point of using is that it has
                                                more-or-less
                                                normal distribution of letters, as opposed to using 'Content here,
                                                content here',
                                                making look like readable English.</p>
                                            <div class="wpo-testimonial-text-btm">
                                                <h3>Robert Johnson, <span>Software Developer</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpo-testimonial-item">
                                        <div class="wpo-testimonial-text">
                                            <h4>Many desktop publishing packages and editors now use as their.</h4>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable
                                                content of page when looking at its layout point of using is that it has
                                                more-or-less
                                                normal distribution of letters, as opposed to using 'Content here,
                                                content here',
                                                making look like readable English.</p>
                                            <div class="wpo-testimonial-text-btm">
                                                <h3>Jenelia Orkid, <span>Web Designer</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpo-testimonial-item">
                                        <div class="wpo-testimonial-text">
                                            <h4>Many desktop publishing packages and editors now use as their.</h4>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable
                                                content of page when looking at its layout point of using is that it has
                                                more-or-less
                                                normal distribution of letters, as opposed to using 'Content here,
                                                content here',
                                                making look like readable English.</p>
                                            <div class="wpo-testimonial-text-btm">
                                                <h3>Cathi Falcon, <span>Software Enginee</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpo-testimonial-item">
                                        <div class="wpo-testimonial-text">
                                            <h4>Many desktop publishing packages and editors now use as their.</h4>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable
                                                content of page when looking at its layout point of using is that it has
                                                more-or-less
                                                normal distribution of letters, as opposed to using 'Content here,
                                                content here',
                                                making look like readable English.</p>
                                            <div class="wpo-testimonial-text-btm">
                                                <h3>Cathi Falcon, <span>Software Enginee</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpo-testimonial-item">
                                        <div class="wpo-testimonial-text">
                                            <h4>Many desktop publishing packages and editors now use as their.</h4>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable
                                                content of page when looking at its layout point of using is that it has
                                                more-or-less
                                                normal distribution of letters, as opposed to using 'Content here,
                                                content here',
                                                making look like readable English.</p>
                                            <div class="wpo-testimonial-text-btm">
                                                <h3>Cathi Falcon, <span>Software Enginee</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="left-shape"></div>
            <div class="right-shape"><img src="{{ asset('build/assets/frontend/images/testimonial/shape.png') }}" alt=""></div>
        </section>
        <!--End wpo-testimonial-section-->

        <!-- start wpo-pricing-section -->
        <section class="wpo-pricing-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="wpo-section-title">
                                <h2>Pricing Plan</h2>
                                <p>Must explain to you how all this mistaken idea pleasure
                                    born and give you a complete account.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpo-pricing-wrap">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-pricing-item">
                                <div class="wpo-pricing-top">
                                    <div class="pricing-thumb">
                                        <span>Basic</span>
                                    </div>
                                    <div class="wpo-pricing-text">
                                        <h2>$120<span> / per month</span></h2>
                                        <p>Determine the Best Pricing Strategy For Your Business.</p>
                                    </div>
                                </div>
                                <div class="wpo-pricing-bottom">
                                    <div class="wpo-pricing-bottom-text">
                                        <ul>
                                            <li>Softwere Development</li>
                                            <li>Web Development</li>
                                            <li>Digital Marketing</li>
                                            <li>Graphic Design</li>
                                            <li>24/Support</li>
                                        </ul>
                                        <a href="pricing.html">CHOOSE PLAN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-pricing-item">
                                <div class="wpo-pricing-top">
                                    <div class="pricing-thumb">
                                        <span>Premium</span>
                                    </div>
                                    <div class="wpo-pricing-text">
                                        <h2>$210<span> / per month</span></h2>
                                        <p>Determine the Best Pricing Strategy For Your Business.</p>
                                    </div>
                                </div>
                                <div class="wpo-pricing-bottom">
                                    <div class="wpo-pricing-bottom-text">
                                        <ul>
                                            <li>Softwere Development</li>
                                            <li>Web Development</li>
                                            <li>Digital Marketing</li>
                                            <li>Graphic Design</li>
                                            <li>24/Support</li>
                                        </ul>
                                        <a href="pricing.html">CHOOSE PLAN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-pricing-item">
                                <div class="wpo-pricing-top">
                                    <div class="pricing-thumb">
                                        <span>Advanced</span>
                                    </div>
                                    <div class="wpo-pricing-text">
                                        <h2>$373<span> / per month</span></h2>
                                        <p>Determine the Best Pricing Strategy For Your Business.</p>
                                    </div>
                                </div>
                                <div class="wpo-pricing-bottom">
                                    <div class="wpo-pricing-bottom-text">
                                        <ul>
                                            <li>Softwere Development</li>
                                            <li>Web Development</li>
                                            <li>Digital Marketing</li>
                                            <li>Graphic Design</li>
                                            <li>24/Support</li>
                                        </ul>
                                        <a href="pricing.html">CHOOSE PLAN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
            <div class="shape-p">
                <svg width="1500" height="1500" viewBox="0 0 1500 1500" fill="none">
                    <g opacity="0.45" filter="url(#filter0_f_39_4213)">
                        <circle cx="750" cy="750" r="200" />
                    </g>
                    <defs>
                        <filter id="filter0_f_39_4213" x="0" y="0" width="1500" height="1500"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="275" result="effect1_foregroundBlur_39_4212" />
                        </filter>
                    </defs>
                </svg>
            </div>
        </section>
        <!-- end wpo-pricing-section -->

        <!-- start of wpo-blog-section -->
        <section class="wpo-blog-section section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="wpo-section-title">
                            <h2>Latest News</h2>
                            <p>Must explain to you how all this mistaken idea pleasure
                                born and give you a complete account.</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-blog-wrap wpo-blog-slide owl-carousel">
                    <div class="wpo-blog-item">
                        <div class="wpo-blog-img">
                            <img src="{{ asset('build/assets/frontend/images/blog/img-1.jpg') }}" alt="">
                        </div>
                        <div class="wpo-blog-text">
                            <ul>
                                <li>January 02, 2022</li>
                            </ul>
                            <h2><a href="blog-single.html">Have evolved over the years sometimes accident.</a></h2>
                            <a class="details" href="blog-single.html">Post Details</a>
                        </div>
                    </div>
                    <div class="wpo-blog-item">
                        <div class="wpo-blog-img">
                            <img src="{{ asset('build/assets/frontend/images/blog/img-2.jpg') }}" alt="">
                        </div>
                        <div class="wpo-blog-text">
                            <ul>
                                <li>January 03, 2022</li>
                            </ul>
                            <h2><a href="blog-single.html"> The Internet tend to repeat predefined chunks.</a></h2>
                            <a class="details" href="blog-single.html">Post Details</a>
                        </div>
                    </div>
                    <div class="wpo-blog-item">
                        <div class="wpo-blog-img">
                            <img src="{{ asset('build/assets/frontend/images/blog/img-3.jpg') }}" alt="">
                        </div>
                        <div class="wpo-blog-text">
                            <ul>
                                <li>January 05, 2022</li>
                            </ul>
                            <h2><a href="blog-single.html">The standard chunk of used since the interested.</a></h2>
                            <a class="details" href="blog-single.html">Post Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow-shape">
                <svg width="1319" height="1567" viewBox="0 0 1319 1567" fill="none">
                    <g filter="url(#filter0_f_39_3832)">
                        <circle cx="803" cy="803" r="303" fill="#59C378" fill-opacity="0.5" />
                    </g>
                    <defs>
                        <filter id="filter0_f_39_3832" x="0" y="0" width="1606" height="1606"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_3832" />
                        </filter>
                    </defs>
                </svg>
            </div>
        </section>
        <!-- end of wpo-blog-section -->

        <!-- start wpo-site-footer -->
        <footer class="wpo-site-footer">
            <div class="upper-contact-area">
                <div class="container">
                    <div class="contact-grids">
                        <div class="row align-items-center">
                            <div class="col col-lg-6">
                                <h2>Send me a message and make something together.</h2>
                            </div>
                            <div class="col col-lg-6">
                                <div class="send-message-btn">
                                    <a class="theme-btn" href="contact.html">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="left-shape"></div>
                    </div>
                </div>
            </div>
            <div class="upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <a class="site-logo" href="index.html"><img src="{{ asset('build/assets/frontend/images/logo.png') }}"
                                            alt="">Elito.</a>
                                </div>
                                <p>Welcome and open yourself to your truest love this year with us! With the Release
                                    Process</p>
                                <div class="social-icons">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-2 col-md-6 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Navigation</h3>
                                </div>
                                <ul>
                                    <li><a href="#about">About us</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="#video">Video Guide</a></li>
                                    <li><a href="blog.html">Recent Post</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="widget link-widget service-link-widget">
                                <div class="widget-title">
                                    <h3>All Services</h3>
                                </div>
                                <ul>
                                    <li><a href="service-single.html">Web Design</a></li>
                                    <li><a href="service-single.html">Web Development</a></li>
                                    <li><a href="service-single.html">Brand Identity</a></li>
                                    <li><a href="service-single.html">Digital Marketing</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="widget newsletter-widget">
                                <div class="widget-title">
                                    <h3>Newsletter</h3>
                                </div>
                                <p>Must explain to you how all this mistaken idea pleasure born and give you a complete
                                    account.</p>
                                <form>
                                    <div class="input-1">
                                        <input type="email" class="form-control" placeholder="Email Address *" required>
                                    </div>
                                    <div class="submit clearfix">
                                        <button type="submit"><i class="ti-email"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
                <div class="shadow-shape">
                    <svg width="1319" height="1567" viewBox="0 0 1319 1567" fill="none">
                        <g filter="url(#filter0_f_39_3833)">
                            <circle cx="803" cy="803" r="303" fill="#59C378" fill-opacity="0.5" />
                        </g>
                        <defs>
                            <filter id="filter0_f_39_3833" x="0" y="0" width="1606" height="1606"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_3832" />
                            </filter>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="separator"></div>
                        <p class="copyright">Copyright &copy; 2022 Elito. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end wpo-site-footer -->


    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset('build/assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('build/assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins for this template -->
    <script src="{{ asset('build/assets/frontend/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('build/assets/frontend/js/jquery.dlmenu.js') }}"></script>
    <script src="{{ asset('build/assets/frontend/js/jquery-plugin-collection.js') }}"></script>
    <!-- Moving Animation -->
    <script src="{{ asset('build/assets/frontend/js/moving-animation.js') }}"></script>
    <!-- Custom script for this template -->
    <script src="{{ asset('build/assets/frontend/js/script.js') }}"></script>
</body>
</html>
