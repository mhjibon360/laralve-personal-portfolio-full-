@extends('frontend.layouts.frontend-master')
@section('title')
    @php
        $setting = App\Models\GeneralSetting::first();
    @endphp
    {{ $setting->all_blog_page_title }}
@endsection
@section('main')

    <header class="site-header parallax-bg">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-sm-7">
                    <h2 class="title">Blog</h2>
                </div>
                <div class="col-sm-5">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
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
                @foreach ($allblog as $blog)
                    <div class="col-xl-4 col-md-6">
                        <div class="single-blog">
                            <figure class="blog-image">
                                <img src="{{ asset($blog->image) }}" alt="">
                            </figure>
                            <div class="blog-content">
                                <h3 class="title"><a href="{{ route('blog.details', [$blog->id, $blog->slug]) }}">{{ $blog->title }}</a></h3>
                                <div class="desc">
                                    <p>{!! Str::limit(strip_tags($blog->details), 100, '...') !!} </p>
                                </div>
                                <a href="{{ route('blog.details', [$blog->id, $blog->slug]) }}"
                                    class="button-primary-trans mouse-dir">Read More <span class="dir-part"></span> <i
                                        class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
          {{ $allblog->links('pagination::bootstrap-4') }}

            {{-- <div class="row">
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
            </div> --}}
        </div>
    </section>
    @include('frontend.layouts.includes.footer')
    <!-- Portfolio-Area-End -->
@endsection
