@extends('frontend.layouts.frontend-master')
@section('title')
    @php
        $setting = App\Models\GeneralSetting::first();
    @endphp
    {{ $setting->all_portfolio_page_title }}
@endsection
@section('main')
    <header class="site-header parallax-bg">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-sm-7">
                    <h2 class="title">Portfolio</h2>
                </div>
                <div class="col-sm-5">
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
    <section class="portfolio-area section-padding" id="portfolio-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="filter-menu">
                        <li class="active" data-filter="*">All Projects</li>
                        @foreach ($portCategory as $category)
                            <li data-filter=".{{ $category->id }}">{{ $category->category_name }}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="row portfolios">
                @foreach ($allPortfolio as $portfolio)
                    <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item {{ $portfolio->categories->id }}">
                        <div class="single-portfolio">
                            <figure class="portfolio-image">
                                <img src="{{ asset($portfolio->image) }}" alt="">
                            </figure>
                            <div class="portfolio-content">
                                <a href="{{ asset($portfolio->image) }}" data-lity class="icon"><i
                                        class="fas fa-plus"></i></a>
                                <h4 class="title"><a
                                        href="{{ route('portfolio.details', [$portfolio->id, $portfolio->slug]) }}">{{ $portfolio->title }}</a>
                                </h4>
                                <div class="desc">
                                    <p>{!! Str::limit(strip_tags($portfolio->details), 50) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

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
    @include('frontend.layouts.includes.footer')
@endsection
