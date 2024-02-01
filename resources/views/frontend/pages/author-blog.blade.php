{{-- @php
    error_reporting(0);
@endphp --}}
@extends('frontend.layouts.frontend-master')
@section('title')
    {{ $user->name }}
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
    <header class="site-header parallax-bg">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-sm-7">
                    <h4 class="title">{{ $user->name }}</h4>
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
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                @foreach ($authorBlogPost as $blog)
                                    <div class="col-xl-6 col-md-6">
                                        <div class="single-blog">
                                            <figure class="blog-image">
                                                <img src="{{ asset($blog->image) }}" alt="">
                                            </figure>
                                            <div class="blog-content">
                                                <h3 class="title"><a
                                                        href="{{ route('blog.details', [$blog->id, $blog->slug]) }}">{{ $blog->title }}</a>
                                                </h3>
                                                <div class="desc">
                                                    <p>{!! Str::limit(strip_tags($blog->details), 100, '...') !!} </p>
                                                </div>
                                                <a href="{{ route('blog.details', [$blog->id, $blog->slug]) }}"
                                                    class="button-primary-trans mouse-dir">Read More <span
                                                        class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{ $authorBlogPost->links('pagination::bootstrap-4') }}
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="author_image">
                                        @if ($user->image)
                                            <img src="{{ asset($user->image) }}" class="card-img-top" alt="...">
                                        @else
                                            <img src="{{ asset('upload/no-image-found.gif') }}" class="card-img-top"
                                                alt="...">
                                        @endif
                                        <div class="">
                                            <h5 class="mt-4"><a href="">{{ $user->name }}</a></h5>

                                            @if ($user->short_descriptions)
                                                <p class="card-text">{!! $user->short_descriptions !!}</p>
                                            @else
                                                <p class="card-text">{!! $user->username !!}</p>
                                            @endif
                                            <div class="author_social_media">
                                                <ul class="list-inline">
                                                    <li class=" list-inline-item"><a href="{{ $user->facebook }}"><i
                                                                class="fab fa-facebook-f"></i></a>
                                                    </li>

                                                    <li class=" list-inline-item"><a href="{{ $user->twitter }}"><i
                                                                class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li class=" list-inline-item"><a href="{{ $user->instagram }}"><i
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


            </div>


        </div>
    </section>
    <!-- Portfolio-Area-End -->
    @include('frontend.layouts.includes.footer')
@endsection
