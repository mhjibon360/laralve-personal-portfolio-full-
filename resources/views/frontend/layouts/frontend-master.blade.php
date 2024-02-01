<!doctype html>
<html class="no-js" lang="en">
@php
    $seo = App\Models\SeoSetting::first();
    $setting = App\Models\GeneralSetting::first();
@endphp

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{ $seo->author_name }}">
    <meta name="title" content="{{ $seo->meta_title }}">
    <meta name="keyword" content="{{ $seo->meta_keyword }}">
    <meta name="descriptions" content="{{ $seo->meta_descriptions }}">
    <title>@yield('title') </title>
    <link rel="shortcut icon" type="image/ico" href="{{ asset($setting->favicon) }}" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/normalize.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style-plugin-collection.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/theme.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/toastr.min.css') }}">
    <style>
        .text-theme {
            color: #ff885e !important;
        }

        .navigation,
        .pagination {
            text-align: center;
            justify-content: center;
        }



        .page-link {
            background: #F9F9F9;
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: 5px;
            line-height: 50px;
            position: relative;
            z-index: 1;
            color: #141414;
            padding: 0 !important;
        }

        .active>.page-link,
        .page-link.active {
            background: #558bff !important;
            height: 50px;
            width: 50px;
            line-height: 50px;
        }
    </style>

</head>

<body>
    <div class="preloader">
        <img src="{{ asset('frontend') }}/images/preloader.gif" alt="">
    </div>

    @include('frontend.layouts.includes.menu')

    @yield('main')


    <script src="{{ asset('frontend') }}/js/vendor/jquery-min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/js/contact-form.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery-plugin-collection.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/modernizr.js"></script>
    <script src="{{ asset('frontend') }}/js/main.js"></script>
    <script src="{{ asset('backend/assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
    @stack('scripts')
</body>

</html>
