@extends('frontend.layouts.frontend-master')
@section('title')
    {{ $portfolioDetails->title }}
@endsection
@section('main')
    <div class="main_wrapper" data-bs-spy="scroll" data-bs-target="#main_menu_area" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary" tabindex="0">


        <header class="site-header parallax-bg">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-8">
                        <h2 class="title">Portfolio Details</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>Portfolio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Portfolio-Area-Start -->
        <section class="portfolio-details section-padding" id="portfolio-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="head-title">{{ $portfolioDetails->title }}</h2>
                        <figure class="image-block">
                            <img src="{{ asset($portfolioDetails->image) }}" style="width: 100%;height:700px;"
                                alt="">
                        </figure>
                        <div class="portflio-info">
                            <div class="single-info">
                                <h4 class="title">Client</h4>
                                <p>{{ $portfolioDetails->user->name }}</p>
                            </div>
                            <div class="single-info">
                                <h4 class="title">Date</h4>
                                <p>
                                    {{ $portfolioDetails->created_at->format('d F Y') }}
                                </p>
                            </div>
                            <div class="single-info">
                                <h4 class="title">Modify/Updated Time</h4>
                                <p>

                                    @if ($portfolioDetails->updated_at)
                                        {{ $portfolioDetails->updated_at->format('d F Y') }}
                                    @else
                                        <p class="text-primary">coming soon..</p>
                                    @endif
                                </p>
                            </div>
                            <div class="single-info">
                                <h4 class="title">Category:</h4>
                                <p>{{ $portfolioDetails->categories->category_name }}</p>
                            </div>
                        </div>
                        <div class="description">
                            {{-- <h2>{{ $portfolioDetails->title }}</h2> --}}
                            <p>
                                {!! $portfolioDetails->details !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-Area-End -->

        <!-- Quote-Area-Start -->
        <section class="quote-area section-padding-bottom">
            <div class="container">
                <div>
                    <h2>Related Portfolio</h2>
                </div>
                <div class="row">
                    @foreach ($relatedPortfolio as $portfolio)
                        <div class="col-lg-4">
                            <div class="single-blog">
                                <figure class="blog-image">
                                    <img src="{{ asset($portfolio->image) }}" alt="">
                                </figure>
                                <div class="blog-content">
                                    <h3 class="title"><a
                                            href="{{ route('portfolio.details', [$portfolio->id, $portfolio->slug]) }}">{{ $portfolio->title }}</a>
                                    </h3>
                                    <div class="desc">
                                        <p>{!! Str::limit(strip_tags($portfolio->details), 100) !!}</p>
                                    </div>
                                    <a href="{{ route('portfolio.details', [$portfolio->id, $portfolio->slug]) }}"
                                        class="button-primary-trans mouse-dir">Read More <span class="dir-part"></span> <i
                                            class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
