<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>360Salvage Limited</title>
<!-- Stylesheets -->
<link href="{{asset('theme/assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/style.css')}}" rel="stylesheet">
<!-- Responsive File -->
<link href="{{asset('theme/assets/css/responsive.css')}}" rel="stylesheet">
<!-- Color File -->
<link href="{{asset('theme/assets/css/color.css')}}" rel="stylesheet">


<link href="../../../fonts.googleapis.com/css21e75.css?family=Barlow:wght@400;500;600;700;800&amp;family=Playfair+Display:wght@400;500;600;700&amp;family=Poppins:wght@400;500;600;700;800&amp;family=Roboto:wght@400;500;700;900&amp;family=Yantramanav:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('theme/assets/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('theme/assets/images/favicon.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js')}}"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js')}}"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>

    <header class="main-header header-style-seven">

        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="left-column">
                        <div class="logo-box">
                            <div class="logo"><a href="{{url('/')}}"><img src="#" alt="360Salvage"></a></div>
                        </div>
                        <div class="nav-outer">
                            <div class="mobile-nav-toggler"><img src="{{asset('theme/assets/images/icons/icon-bar-2.png')}}" alt=""></div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li class="dropdown"><a href="{{url('/')}}">Home</a>

                                        </li>
                                        <li class="dropdown"><a href="about.html">About Us</a>

                                        </li>
                                        <li class="dropdown"><a href="service-1.html">Services</a>

                                        </li>
                                        <li class="dropdown"><a href="gallery-1.html">Portfolio</a>

                                        </li>

                                        <li class="dropdown"><a href="#">News</a>

                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="search-btn"><button type="button" class="theme-btn search-toggler"><span class="fal fa-search"></span></button></div>
                    </div>
                    <div class="right-column">
                        <div class="header-upper-phone-number2"><i class="flaticon-phone-2"></i><a href="tel:+(254)723000000">+ (254) 723000000 </a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-header">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="left-column">
                            <div class="logo-box">
                                <div class="logo"><a href="{{url('/')}}"><img src="#" alt="360Salvage"></a></div>
                            </div>
                        </div>
                        <div class="right-column">
                            <div class="nav-outer">
                                <div class="mobile-nav-toggler"><img src="{{asset('theme/assets/images/icons/icon-bar-2.png')}}" alt=""></div>
                                <nav class="main-menu navbar-expand-md navbar-light">
                                </nav>
                            </div>
                            <div class="search-btn"><button type="button" class="theme-btn search-toggler"><span class="fal fa-search"></span></button></div>
                            <div class="header-upper-phone-number2"><i class="flaticon-phone-2"></i><a href="tel:+(254)723000000">+ (254) 723000000 </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-remove"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{url('/')}}"><img src="{{asset('theme/assets/images/logo-two.png')}}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div>

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>

    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="https://html.tonatheme.com/2022/360Salvage/{{url('/')}}">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Idea</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Growth</a></li>
                    <li><a href="#">Plan</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
            <div class="logo"><a href="#"><img src="#" alt="360Salvage"></a></div>
            <div class="content">
                <div class="about-widget-two sidebar-widget">
                    <h3>We are leader <br> in Car Mechanical Work</h3>
                    <div class="text">We denounce with righteous indignation and dislike men who we are to beguiled demoralized by the charms of pleasures that moment, so we blinded desires, that they indignations.</div>
                </div>
                <!-- News Widget -->
                <div class="news-widget sidebar-widget">
                    <div class="widget-title">News & Updates</div>
                    <div class="post-wrapper">
                        <div class="image"><a href="blog-details.html"><img src="{{asset('theme/assets/images/resource/image-12.jpg')}}" alt=""></a></div>
                        <div class="category">Car Repearing</div>
                        <h4><a href="blog-details.html">Low Hanging Fruit Two A Identify A Ballpark</a></h4>
                    </div>
                    <div class="post-wrapper">
                        <div class="image"><a href="blog-details.html"><img src="{{asset('theme/assets/images/resource/image-13.jpg')}}" alt=""></a></div>
                        <div class="category">Car Repearing</div>
                        <h4><a href="blog-details.html">User Generated Content In Real-Time</a></h4>
                    </div>
                </div>
                <!-- Newsletter Widget -->
                <div class="newsletter-widget">
                    <div class="widget-title">Newsletter Subscription</div>
                    <form action="#">
                        <input type="email" placeholder="Enter Email Address">
                        <button class="btn-1">Subscribe Us <i class="flaticon-right-arrow-1"></i><span></span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-5-section banner__seven__top">
        <div class="banner-5-bg" style="background-image: url('{{asset('theme/assets/images/main-slider/image-10.jpg')}}');">
            <div class="banner-5-layer-1"></div>
            <div class="banner-5-layer-2"></div>
            <div class="banner-5-layer-3"></div>
        </div>
        <div class="banner-5-image"><img src="{{asset('theme/assets/images/main-slider/image-11.jpg')}}" alt=""></div>
        <div class="banner-5-text-content">
            <h3 class="banner-5-title">Why Book <br>
                Service With <br>
                360Salvage?</h3>
            <div class="banner-5-text">We, at 360Salvage, make use of only 100% Genuine OEM/OES spare parts to offer premium quality and for last longing protection</div>
            <div class="banner-5-btn"><a href="contact.html" class="btn-1">make appointment <i class="flaticon-right-arrow-1"></i><span></span></a></div>
        </div>
    </section>

    <section class="about-6-section">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-xl-7">
                    <div class="about-6-content-wrap mb_30">
                        <div class="sec-title-area mb_30">
                            <div class="sub-title">we are expert in sport car modification</div>
                            <h2 class="sec-title">Tune Up Your Car to Next Level</h2>
                        </div>
                        <div class="about-6-text">20+ Years of Working in Car Repairing Field and have good customers</div>
                        <div class="about-6-desc">
                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                        <ul class="about-6-list">
                            <li><i class="flaticon-comment"></i>Use Of 100% Genuine OEM/OES Spares</li>
                            <li><i class="flaticon-comment"></i>Highly-Skilled Mechanics</li>
                            <li><i class="flaticon-comment"></i>Wide Assortment of Car Services</li>
                            <li><i class="flaticon-comment"></i>Quality Control System</li>
                        </ul>
                        <div class="about-6-author-info">
                            <div class="about-6-author-thumb"><img width="80" src="{{asset('theme/assets/images/happy-smiling-geek-hipster-beard-man-cool-avatar-geek-man-avatar-104871313.jpg')}}" alt=""></div>
                            <div class="about-6-phone-label">Call Us :</div>
                            <div class="about-6-phone-number"><a href="tel:(+123)4567890">+ (254) 723000000</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="about-6-image-wrap s-two">
                        <div class="about-6-image-1" data-parallax='{"y": 20}'><img src="{{asset('theme/assets/images/resource/image-53.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="facts-1-section s-two">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <h2 class="facts-1-title"><span>100%</span> Satisfaction <br> Guarantee</h2>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="facts-1-block">
                                <div class="facts-1-icon"><span class="flaticon-call-center-agent"></span></div>
                                <h4 class="facts-1-title-2">Quality Support</h4>
                                <div class="facts-1-text">Our Repair Services offers quality help programs for any vehicles that permit them to consistently.</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="facts-1-block">
                                <div class="facts-1-icon"><span class="flaticon-car-2"></span></div>
                                <h4 class="facts-1-title-2">All Car Makes</h4>
                                <div class="facts-1-text">Our Repair Services offers quality help programs for any vehicles that permit them to consistently.</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="facts-1-block">
                                <div class="facts-1-icon"><span class="flaticon-maintenance"></span></div>
                                <h4 class="facts-1-title-2">Variety Services</h4>
                                <div class="facts-1-text">Our Repair Services offers quality help programs for any vehicles that permit them to consistently.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="testimonial-1-section s-four">
        <div class="testimonial-1-bg" style="background-image: url('{{asset('theme/assets/images/background/bg-10.jpg')}}');"></div>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 offset-lg-4">
                    <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                        <div class="testimonial-1-block">
                            <div class="testimonial-1-image-wrapper">
                                <div class="testimonial-1-image">
                                    <img src="{{asset('theme/assets/images/resource/image-8.jpg')}}" alt="">
                                </div>
                                <div class="testimonial-1-quote">“</div>
                            </div>
                            <div class="testimonial-1-content">
                                <div class="testimonial-1-category">testimonials</div>
                                <div class="testimonial-1-text">Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum. Lorem ipsum dolor sit amet, cons ectetur elit. </div>
                                <div class="testimonial-1-author-info">
                                    <h4 class="testimonial-1-name">Michale John</h4>
                                    <div class="testimonial-1-designation">Ceo of Minda</div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-1-block">
                            <div class="testimonial-1-image-wrapper">
                                <div class="testimonial-1-image">
                                    <img src="{{asset('theme/assets/images/resource/image-8.jpg')}}" alt="">
                                </div>
                                <div class="testimonial-1-quote">“</div>
                            </div>
                            <div class="testimonial-1-content">
                                <div class="testimonial-1-category">testimonials</div>
                                <div class="testimonial-1-text">Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum. Lorem ipsum dolor sit amet, cons ectetur elit. </div>
                                <div class="testimonial-1-author-info">
                                    <h4 class="testimonial-1-name">Michale John</h4>
                                    <div class="testimonial-1-designation">Ceo of Minda</div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-1-block">
                            <div class="testimonial-1-image-wrapper">
                                <div class="testimonial-1-image">
                                    <img src="{{asset('theme/assets/images/resource/image-8.jpg')}}" alt="">
                                </div>
                                <div class="testimonial-1-quote">“</div>
                            </div>
                            <div class="testimonial-1-content">
                                <div class="testimonial-1-category">testimonials</div>
                                <div class="testimonial-1-text">Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum. Lorem ipsum dolor sit amet, cons ectetur elit. </div>
                                <div class="testimonial-1-author-info">
                                    <h4 class="testimonial-1-name">Michale John</h4>
                                    <div class="testimonial-1-designation">Ceo of Minda</div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-1-block">
                            <div class="testimonial-1-image-wrapper">
                                <div class="testimonial-1-image">
                                    <img src="{{asset('theme/assets/images/resource/image-8.jpg')}}" alt="">
                                </div>
                                <div class="testimonial-1-quote">“</div>
                            </div>
                            <div class="testimonial-1-content">
                                <div class="testimonial-1-category">testimonials</div>
                                <div class="testimonial-1-text">Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum. Lorem ipsum dolor sit amet, cons ectetur elit. </div>
                                <div class="testimonial-1-author-info">
                                    <h4 class="testimonial-1-name">Michale John</h4>
                                    <div class="testimonial-1-designation">Ceo of Minda</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="team-1-section s-three">
        <div class="team-1-shape"><img src="{{asset('theme/assets/images/shape/shape-2.png')}}" alt=""></div>
        <div class="left-outer-container">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <div class="sec-title-area">
                        <div class="sub-title">Our professionals</div>
                        <h2 class="sec-title mb_30">Dedicated Team</h2>
                    </div>
                    <div class="team-1-text-1">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
                    <div class="team-1-text-2">Squi officia deserunt mollit anim id est labo rum. Consect petur adipiscing elit.</div>
                    <div class="team-1-carousel-btn">
                        <span class="team-1-carousel-left-btn s-two"><i class="fa fa-angle-left"></i></span>
                        <span class="team-1-carousel-right-btn s-two"><i class="fa fa-angle-right"></i></span>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="team-1-carousel owl-theme owl-carousel owl-dot-style-one" data-options='{"loop": true, "center": false, "margin": 50, "autoheight":true, "lazyload":true, "nav": false, "mouseDrag": false, "dots": false, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 2000, "responsive":{ "0" :{ "items": "1" }, "480" :{ "items" : "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "992":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
                        <div class="team-1-carousel-item">
                            <div class="team-1-block">
                                <div class="team-1-image"><img src="{{asset('theme/assets/images/happy-smiling-geek-hipster-beard-man-cool-avatar-geek-man-avatar-104871313.jpg')}}" alt=""></div>
                                <div class="team-1-info">
                                    <div class="team-1-name">Michale Joe</div>
                                    <div class="team-1-designation">Ceo of company</div>
                                    <div class="team-1-read-more"><a href="#"><i class="flaticon-right-arrow"></i></a></div>
                                </div>
                                <div class="team-1-info-overlay">
                                    <div class="team-1-social-icon">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="team-1-name">Michale Joe</div>
                                    <div class="team-1-designation">Ceo of company</div>
                                    <div class="team-1-read-more"><a href="#"><i class="flaticon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="team-1-carousel-item">
                            <div class="team-1-block">
                                <div class="team-1-image"><img src="{{asset('theme/assets/images/happy-smiling-geek-hipster-beard-man-cool-avatar-geek-man-avatar-104871313.jpg')}}" alt=""></div>
                                <div class="team-1-info">
                                    <div class="team-1-name">Daniale Joe</div>
                                    <div class="team-1-designation">Senior Electrician</div>
                                    <div class="team-1-read-more"><a href="#"><i class="flaticon-right-arrow"></i></a></div>
                                </div>
                                <div class="team-1-info-overlay">
                                    <div class="team-1-social-icon">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="team-1-name">Daniale Joe</div>
                                    <div class="team-1-designation">Senior Electrician</div>
                                    <div class="team-1-read-more"><a href="#"><i class="flaticon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="team-1-carousel-item">
                            <div class="team-1-block">
                                <div class="team-1-image"><img src="{{asset('theme/assets/images/happy-smiling-geek-hipster-beard-man-cool-avatar-geek-man-avatar-104871313.jpg')}}" alt=""></div>
                                <div class="team-1-info">
                                    <div class="team-1-name">Robert</div>
                                    <div class="team-1-designation">Helper Jenior</div>
                                    <div class="team-1-read-more"><a href="#"><i class="flaticon-right-arrow"></i></a></div>
                                </div>
                                <div class="team-1-info-overlay">
                                    <div class="team-1-social-icon">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="team-1-name">Robert</div>
                                    <div class="team-1-designation">Helper Jenior</div>
                                    <div class="team-1-read-more"><a href="#"><i class="flaticon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-1-section s-three">
        <div class="blog-1-row">
            <div class="blog-1-left-column">
                <div class="blog-1-small-container">
                    <div class="blog-1-top-content">
                        <div class="sec-title-area mb-40">
                            <div class="sub-title">OUr latest Articles</div>
                            <h2 class="sec-title">Our Blogs</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blog-1-block s-two">
                                <div class="blog-1-image"><a href="blog-details.html"><img src="{{asset('theme/assets/images/resource/image-46.jpg')}}" alt=""></a></div>
                                <div class="blog-1-lower-content">
                                    <div class="blog-1-meta-info">
                                        <a href="#">April 04, 2023 </a>
                                    </div>
                                    <h3 class="blog-1-title"><a href="blog-details.html">Sixteen tips for fix and repairs <br> for starting problem</a></h3>
                                    <div class="blog-1-link-btn3"><a href="blog-details.html" class="theme-btn"><i class="flaticon-right-arrow-4"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-1-block s-two">
                                <div class="blog-1-image"><a href="blog-details.html"><img src="{{asset('theme/assets/images/resource/image-47.jpg')}}" alt=""></a></div>
                                <div class="blog-1-lower-content">
                                    <div class="blog-1-meta-info">
                                        <a href="#">April 04, 2023 </a>
                                    </div>
                                    <h3 class="blog-1-title"><a href="blog-details.html">Sixteen tips for fix and repairs <br> for starting problem</a></h3>
                                    <div class="blog-1-link-btn3"><a href="blog-details.html" class="theme-btn"><i class="flaticon-right-arrow-4"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-1-right-column">
                <div class="blog-1-small-container2">
                    <div class="map-2-area">
                        <div class="sec-title-area mb-40">
                            <div class="sub-title">Get direction</div>
                            <h2 class="sec-title">Our Location</h2>
                        </div>
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.166688532618!2d36.8421174!3d-1.299814!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11173841ee81%3A0xa0f9c38bd72cb408!2sDrenla%20Hub!5e0!3m2!1sen!2ske!4v1680780700169!5m2!1sen!2ske" width="600" height="427" style="border:0; width: 100%" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="sec-divider-3"><div class="left-outer-container"></div></div>

    <section class="partner-1-section s-four">
        <div class="auto-container">
            <div class="sec-title-area text-center mb-40">
                <div class="sub-title">Our partners</div>
                <h2 class="sec-title">We Worked With Different Brands</h2>
            </div>
            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "2" }, "600" :{ "items" : "3" }, "768" :{ "items" : "4" } , "992":{ "items" : "6" }, "1200":{ "items" : "8" }}}'>
                <div class="partner-1-logo"><img src="{{asset('theme/assets/images/clients-logo/logo-1.png')}}" alt=""></div>
                <div class="partner-1-logo"><img src="{{asset('theme/assets/images/clients-logo/logo-2.png')}}" alt=""></div>
                <div class="partner-1-logo"><img src="{{asset('theme/assets/images/clients-logo/logo-3.png')}}" alt=""></div>
                <div class="partner-1-logo"><img src="{{asset('theme/assets/images/clients-logo/logo-4.png')}}" alt=""></div>
                <div class="partner-1-logo"><img src="{{asset('theme/assets/images/clients-logo/logo-5.png')}}" alt=""></div>
                <div class="partner-1-logo"><img src="{{asset('theme/assets/images/clients-logo/logo-6.png')}}" alt=""></div>
                <div class="partner-1-logo"><img src="{{asset('theme/assets/images/clients-logo/logo-7.png')}}" alt=""></div>
                <div class="partner-1-logo"><img src="{{asset('theme/assets/images/clients-logo/logo-8.png')}}" alt=""></div>
            </div>
        </div>
    </section>

    <footer class="main-footer-1">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="about-widget-1">
                        <div class="about-widget-1-logo"><img src="#" alt="360Salvage"></div>
                        <div class="about-widget-1-text">54B, Tailstoi Town 5238 MT, <br>
                            Nairobi City, IA Western Heights</div>
                        <ul class="about-widget-1-social-links">
                            <li><a href="#"><i class="fab fa-facebook-f"> </i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"> </i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"> </i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"> </i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="link-widget-1">
                        <div class="widget-title">Useful Links</div>
                        <ul class="link-widget-1-list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Appoaintment</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="link-widget-1">
                        <div class="widget-title">Useful Links</div>
                        <ul class="link-widget-1-list">
                            <li><a href="#">Performance Upgrade</a></li>
                            <li><a href="#">Transmission Service</a></li>
                            <li><a href="#">Break Repair & Service</a></li>
                            <li><a href="#">Engine Service & Repair</a></li>
                            <li><a href="#">Trye & Wheels</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact-widget-1">
                        <div class="widget-title">Contact Us</div>
                        <ul class="contact-widget-1-list">
                            <li>
                                <div class="contact-widget-1-label">Call us on :</div>
                                <div class="contact-widget-1-text"><a href="tel:+ (254) 723000000">+ (254) 723000000</a></div>
                            </li>
                            <li>
                                <div class="contact-widget-1-label">Email us :</div>
                                <div class="contact-widget-1-text"><a href="mailto:contact@360Salvage.com">contact@360Salvage.com</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="footer-bottom-row">
                    <div class="footer-bottom-text">© Copyright  360Salvage Limited {{date('Y')}} . All right reserved.</div>
                    <div class="footer-bottom-text">Powered by Drenla Hub</div>
                </div>
            </div>
        </div>
    </footer>

</div>

<!--Scroll to top-->
<div class="scroll-to-top">
    <div>
        <div class="scroll-top-inner">
            <div class="scroll-bar">
                <div class="bar-inner"></div>
            </div>
            <div class="scroll-bar-text">Go To Top</div>
        </div>
    </div>
</div>
<!-- Scroll to top end -->

<script src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('theme/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('theme/assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('theme/assets/js/isotope.js')}}"></script>
<script src="{{asset('theme/assets/js/owl.js')}}"></script>
<script src="{{asset('theme/assets/js/appear.js')}}"></script>
<script src="{{asset('theme/assets/js/wow.js')}}"></script>
<script src="{{asset('theme/assets/js/TweenMax.min.js')}}"></script>
<script src="{{asset('theme/assets/js/swiper.min.js')}}"></script>
<script src="{{asset('theme/assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('theme/assets/js/parallax-scroll.js')}}"></script>

<script src="{{asset('theme/assets/js/script.js')}}"></script>


</body>

</html>













