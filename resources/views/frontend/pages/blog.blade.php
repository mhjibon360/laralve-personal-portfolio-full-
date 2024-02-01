@extends('frontend.layouts.frontend-master')
@section('main')
    <div class="main_wrapper" data-bs-spy="scroll" data-bs-target="#main_menu_area" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary" tabindex="0">


        <header class="site-header parallax-bg">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-7">
                        <h2 class="title">Blog</h2>
                    </div>
                    <div class="col-sm-5">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Portfolio-Area-Start -->
        <section class="blog-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="single-blog">
                            <figure class="blog-image">
                                <img src="{{ asset('frontend') }}/images/blog-1.jpg" alt="">
                            </figure>
                            <div class="blog-content">
                                <h3 class="title"><a href="blog-details.html">Great things never come from.</a></h3>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                        consequuntur provident iusto cumque . </p>
                                </div>
                                <a href="#" class="button-primary-trans mouse-dir">Read More <span
                                        class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-blog">
                            <figure class="blog-image">
                                <img src="{{ asset('frontend') }}/images/blog-2.jpg" alt="">
                            </figure>
                            <div class="blog-content">
                                <h3 class="title"><a href="blog-details.html">Don’t stop when you’re tired. Stop
                                        when.</a></h3>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                        consequuntur provident iusto cumque . </p>
                                </div>
                                <a href="#" class="button-primary-trans mouse-dir">Read More <span
                                        class="dir-part"></span>
                                    <i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-blog">
                            <figure class="blog-image">
                                <img src="{{ asset('frontend') }}/images/blog-3.jpg" alt="">
                            </figure>
                            <div class="blog-content">
                                <h3 class="title"><a href="blog-details.html">Success doesn’t just find you.</a></h3>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                        consequuntur provident iusto cumque . </p>
                                </div>
                                <a href="#" class="button-primary-trans mouse-dir">Read More <span
                                        class="dir-part"></span>
                                    <i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-blog">
                            <figure class="blog-image">
                                <img src="{{ asset('frontend') }}/images/blog-4.jpg" alt="">
                            </figure>
                            <div class="blog-content">
                                <h3 class="title"><a href="blog-details.html">Sometimes later becomes never.</a></h3>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                        consequuntur provident iusto cumque . </p>
                                </div>
                                <a href="#" class="button-primary-trans mouse-dir">Read More <span
                                        class="dir-part"></span>
                                    <i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-blog">
                            <figure class="blog-image">
                                <img src="{{ asset('frontend') }}/images/blog-5.jpg" alt="">
                            </figure>
                            <div class="blog-content">
                                <h3 class="title"><a href="blog-details.html">Don’t wait for opportunity. Create it.</a>
                                </h3>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                        consequuntur provident iusto cumque . </p>
                                </div>
                                <a href="#" class="button-primary-trans mouse-dir">Read More <span
                                        class="dir-part"></span>
                                    <i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-blog">
                            <figure class="blog-image">
                                <img src="{{ asset('frontend') }}/images/blog-6.jpg" alt="">
                            </figure>
                            <div class="blog-content">
                                <h3 class="title"><a href="blog-details.html">Your limitation-it’s only your
                                        imagination.</a></h3>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                        consequuntur provident iusto cumque . </p>
                                </div>
                                <a href="#" class="button-primary-trans mouse-dir">Read More <span
                                        class="dir-part"></span>
                                    <i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <nav class="navigation pagination">
                            <div class="nav-links">
                                <a class="previus page-numbers" href="#">
                                    <i class="fal fa-angle-left"></i>
                                </a>
                                <span class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="page-numbers" href="#">4</a>
                                <a class="page-numbers" href="#">5</a>
                                <a class="next page-numbers" href="#">
                                    <i class="fal fa-angle-right"></i>
                                </a>
                            </div>
                        </nav>
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
