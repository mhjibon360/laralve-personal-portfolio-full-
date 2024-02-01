@extends('frontend.layouts.frontend-master')
@section('main')
    
<div class="main_wrapper" data-bs-spy="scroll" data-bs-target="#main_menu_area" data-bs-root-margin="0px 0px -40%"
data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary" tabindex="0">


<header class="site-header parallax-bg">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-7">
                <h2 class="title">Portfolio</h2>
            </div>
            <div class="col-sm-5">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Portfolio-Area-Start -->
<section class="portfolio-area section-padding" id="portfolio-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="filter-menu">
                    <li class="active" data-filter="*">All Projects</li>
                    <li data-filter=".branding">Branding Design</li>
                    <li data-filter=".interface">User Interface</li>
                    <li data-filter=".experience">User Experience</li>
                    <li data-filter=".development">Web Development</li>
                </ul>
            </div>
        </div>
        <div class="row portfolios">
            <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item branding">
                <div class="single-portfolio">
                    <figure class="portfolio-image">
                        <img src="{{ asset('frontend') }}/images/portfolio-1.jpg" alt="">
                    </figure>
                    <div class="portfolio-content">
                        <a href="{{ asset('frontend') }}/images/portfolio-1.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                        <h4 class="title"><a href="portfolio-details.html">Black Golden</a></h4>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0.4s" class="col-md-6 col-lg-4 filter-item interface">
                <div class="single-portfolio">
                    <figure class="portfolio-image">
                        <img src="{{ asset('frontend') }}/images/portfolio-2.jpg" alt="">
                    </figure>
                    <div class="portfolio-content">
                        <a href="{{ asset('frontend') }}/images/portfolio-2.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                        <h4 class="title"><a href="portfolio-details.html">Fitzgerald Stanton</a></h4>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0.5s" class="col-md-6 col-lg-4 filter-item branding">
                <div class="single-portfolio">
                    <figure class="portfolio-image">
                        <img src="{{ asset('frontend') }}/images/portfolio-3.jpg" alt="">
                    </figure>
                    <div class="portfolio-content">
                        <a href="{{ asset('frontend') }}/images/portfolio-3.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                        <h4 class="title"><a href="portfolio-details.html">Ines Campbell</a></h4>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item interface experience">
                <div class="single-portfolio">
                    <figure class="portfolio-image">
                        <img src="{{ asset('frontend') }}/images/portfolio-4.jpg" alt="">
                    </figure>
                    <div class="portfolio-content">
                        <a href="{{ asset('frontend') }}/images/portfolio-4.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                        <h4 class="title"><a href="portfolio-details.html">Wendi Michael</a></h4>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0.4s" class="col-md-6 col-lg-4 filter-item branding development experience">
                <div class="single-portfolio">
                    <figure class="portfolio-image">
                        <img src="{{ asset('frontend') }}/images/portfolio-5.jpg" alt="">
                    </figure>
                    <div class="portfolio-content">
                        <a href="{{ asset('frontend') }}/images/portfolio-5.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                        <h4 class="title"><a href="portfolio-details.html">Guerrero Woodard</a></h4>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0.5s" class="col-md-6 col-lg-4 filter-item interface">
                <div class="single-portfolio">
                    <figure class="portfolio-image">
                        <img src="{{ asset('frontend') }}/images/portfolio-6.jpg" alt="">
                    </figure>
                    <div class="portfolio-content">
                        <a href="{{ asset('frontend') }}/images/portfolio-6.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                        <h4 class="title"><a href="portfolio-details.html">Prince Phelps</a></h4>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item development">
                <div class="single-portfolio">
                    <figure class="portfolio-image">
                        <img src="{{ asset('frontend') }}/images/portfolio-7.jpg" alt="">
                    </figure>
                    <div class="portfolio-content">
                        <a href="{{ asset('frontend') }}/images/portfolio-7.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                        <h4 class="title"><a href="portfolio-details.html">Gayle Gaines</a></h4>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0.4s" class="col-md-6 col-lg-4 filter-item experience">
                <div class="single-portfolio">
                    <figure class="portfolio-image">
                        <img src="{{ asset('frontend') }}/images/portfolio-8.jpg" alt="">
                    </figure>
                    <div class="portfolio-content">
                        <a href="{{ asset('frontend') }}/images/portfolio-8.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                        <h4 class="title"><a href="portfolio-details.html">Janice Wilder</a></h4>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0.5s" class="col-md-6 col-lg-4 filter-item development">
                <div class="single-portfolio">
                    <figure class="portfolio-image">
                        <img src="{{ asset('frontend') }}/images/portfolio-9.jpg" alt="">
                    </figure>
                    <div class="portfolio-content">
                        <a href="{{ asset('frontend') }}/images/portfolio-9.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                        <h4 class="title"><a href="portfolio-details.html">Branding Design</a></h4>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="#" class="load-more mouse-dir">Load More <i class="fal fa-sync"></i><span
                        class="dir-part"></span></a>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-Area-End -->

<!-- Quote-Area-Start -->
<section class="quote-area section-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="quote-box">

                    <div class="row ">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="quote-content">
                                <h3 class="title">Start Journey Today</h3>
                                <div class="desc">
                                    <p>Earum quos animi numquam excepturi eveniet explicabo repellendus rem
                                        esse.
                                        Quae quasi
                                        odio enim.</p>
                                </div>
                                <a href="#" class="button-orange mouse-dir">Get Started <span
                                        class="dir-part"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Quote-Area-End -->

<!-- Footer-Area-Start -->
<footer class="footer-area">
    <div class="container">
        <div class="row footer-widgets">
            <div class="col-md-12 col-lg-3 widget">
                <div class="text-box">
                    <figure class="footer-logo">
                        <img src="{{ asset('frontend') }}/images/logo.png" alt="">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, libero. </p>
                    <ul class="d-flex flex-wrap">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 offset-lg-1 widget">
                <h3 class="widget-title">Useful Link</h3>
                <ul class="nav-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Contact Info</h3>
                <ul>
                    <li>17232 Broadway Suite 308, Jackson Heights, 11372, NY, United States.</li>
                    <li><a href="#">+1347-430-9510</a></li>
                    <li><a href="#">websolutionus1@gmail.com</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Help</h3>
                <ul class="nav-menu">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">404 Page</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Documentation</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>Copyright 2023 <span>Rabins</span>. All Rights Reserved.</p>
                        <p>Powered by WebSolutionUS &nbsp; | &nbsp; 2022 - 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer-Area-End -->
</div>
@endsection
