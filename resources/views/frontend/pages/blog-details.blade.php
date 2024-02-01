@extends('frontend.layouts.frontend-master')
@section('title')
    {{ $singleBlog->slug }}
@endsection
@section('main')
    <style>
        .author_image .card-img-top {
            height: 200px;
        }

        .author_social_media ul li a {
            display: block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background: #ff885e1f;
            margin-right: 7px;
            border-radius: 50%;
            transition: all linear .3s;
            -webkit-transition: all linear .3s;
            -moz-transition: all linear .3s;
            -ms-transition: all linear .3s;
            -o-transition: all linear .3s;
        }

        .author_social_media ul li a:hover {
            background: #ff895e;
            color: #fff;
        }
    </style>
    <div class="main_wrapper" data-bs-spy="scroll" data-bs-target="#main_menu_area" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary" tabindex="0">


        <header class="site-header parallax-bg">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-8">
                        <h2 class="title">Blog Details</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Portfolio-Area-Start -->
        <section class="blog-details section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="head-title">{{ $singleBlog->title }}</h2>
                        <div class="blog-meta">
                            <div class="single-meta">
                                <div class="meta-title">Published</div>
                                <h4 class="meta-value"><a href="#">

                                        {{ $singleBlog->created_at->format('d F, Y') }}
                                    </a></h4>
                            </div>
                            <div class="single-meta">
                                <div class="meta-title">Tag</div>
                                <h4 class="meta-value">
                                    @foreach ($tag as $tag)
                                        <a href="#" class="badge bg-info text-white">{{ $tag }}</a>
                                    @endforeach
                                </h4>
                            </div>
                            <div class="single-meta">
                                <div class="meta-title"> view</div>
                                <h4 class="meta-value"><i class="fa fa-eye"></i> {{ $singleBlog->view }} </h4>
                            </div>
                        </div>
                        <figure class="image-block">
                            <img src="{{ asset($singleBlog->image) }}" alt="">
                        </figure>
                        <div class="description">
                            {!! $singleBlog->details !!}
                        </div>

                        <div class="single-navigation">
                            @if ($previoustBlog)
                                <a href="{{ route('blog.details', [$previoustBlog->id, $previoustBlog->slug]) }}"
                                    class="nav-link"><span class="icon"><i class="fal fa-angle-left"></i></span><span
                                        class="text">{{ $previoustBlog->title }}</span></a>
                            @endif

                            @if ($nextBlog)
                                <a href="{{ route('blog.details', [$nextBlog->id, $nextBlog->slug]) }}"
                                    class="nav-link"><span class="text">{{ $nextBlog->title }}</span><span
                                        class="icon"><i class="fal fa-angle-right"></i></span></a>
                            @endif
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="author_image">
                                    @if ($singleBlog->users->image)
                                        <img src="{{ asset($singleBlog->users->image) }}" class="card-img-top"
                                            alt="...">
                                    @else
                                        <img src="{{ asset('upload/no-image-found.gif') }}" class="card-img-top"
                                            alt="...">
                                    @endif
                                    <div class="">
                                        <h5 class="mt-4" class="text-info"><a
                                                href="{{ route('author.blog', $singleBlog->users->name) }}">{{ $singleBlog->users->name }}</a>
                                        </h5>

                                        @if ($singleBlog->users->short_descriptions)
                                            <p class="card-text">{!! $singleBlog->users->short_descriptions !!}</p>
                                        @else
                                            <p class="card-text">{!! $singleBlog->users->username !!}</p>
                                        @endif
                                        <div class="author_social_media">
                                            <ul class="list-inline">
                                                <li class=" list-inline-item"><a
                                                        href="{{ $singleBlog->users->facebook }}"><i
                                                            class="fab fa-facebook-f"></i></a>
                                                </li>

                                                <li class=" list-inline-item"><a
                                                        href="{{ $singleBlog->users->twitter }}"><i
                                                            class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class=" list-inline-item"><a
                                                        href="{{ $singleBlog->users->instagram }}"><i
                                                            class="fab fa-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Portfolio-Area-End -->

        <!-- Quote-Area-Start -->

        <!-- Quote-Area-End -->

        <!-- Footer-Area-Start -->
        @include('frontend.layouts.includes.footer')
        <!-- Footer-Area-End -->
    </div>
@endsection
