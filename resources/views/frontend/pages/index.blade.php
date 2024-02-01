@extends('frontend.layouts.frontend-master')
@section('title')
    @php
        $setting = App\Models\GeneralSetting::first();
    @endphp
    {{ $setting->home_page_title }}
@endsection
@section('main')
    <div class="main_wrapper" data-bs-spy="scroll" data-bs-target="#main_menu_area" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary" tabindex="0">

        <!-- Header-Area-Start -->
        <header class="header-area parallax-bg" id="home-page" style="background-image: url({{ asset($hero->image) }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="header-text">

                            <h3 class="typer-title wow fadeInUp" data-wow-delay="0.2s">I'm ui/ux designer</h3>
                            <h2 class="title wow fadeInUp" data-wow-delay="0.3s">{!! $hero->title !!}</h2>
                            <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                                <p>{{ $hero->details }}</p>
                            </div>
                            <a href="#" class="button-dark mouse-dir wow fadeInUp"
                                data-wow-delay="0.5s">{{ $hero->btn_text }}
                                <span class="dir-part"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header-Area-End -->

        <!-- Service-Area-Start -->
        <section class="service-area section-padding-top" id="about-page">
            <div class="container">
                <div class="row">
                    @forelse ($services as $service)
                        <div class="col-lg-4 {{ $services >= '4' ? 'my-2' : '' }}">
                            <div class="single-service">
                                <h3 class="title wow fadeInRight" data-wow-delay="0.3s">{{ $service->title }}</h3>
                                <div class="desc wow fadeInRight" data-wow-delay="0.4s">
                                    <p>
                                        {{ $service->details }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h3 class="title wow fadeInRight text-danger" data-wow-delay="0.3s">(services in maintanance mode)
                        </h3>
                    @endforelse

                </div>
            </div>
        </section>
        <!-- Service-Area-End -->

        <!-- About-Area-Start -->
        <section class="about-area section-padding-top">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <figure class="about-image">
                            <img src="{{ asset($about->image) }}" alt="" class="wow fadeInUp" data-wow-delay="0.3s">
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-text">
                            <h3 class="title wow fadeInUp" data-wow-delay="0.3s">{{ $about->heading }}</h3>
                            <div class="sub-title wow fadeInUp" data-wow-delay="0.4s">
                                <p>
                                    {{ $about->leading }}
                                </p>
                            </div>
                            <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                                <p>
                                    {!! $about->details !!}
                                </p>
                            </div>
                            <a href="{{ route('cv.download') }}" class="button-primary-trans mouse-dir wow fadeInUp"
                                data-wow-delay="0.5s">
                                <span class="icon"><i class="fal fa-download"></i></span>
                                <span class="text">Download Resume</span>
                                <span class="dir-part"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-Area-End -->

        <!-- Portfolio-Area-Start -->
        <section class="portfolio-area section-padding-top" id="portfolio-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="section-title">
                            <h3 class="title">{{ $portfolioCaption->title }}</h3>
                            <div class="desc">
                                <p>
                                    {!! $portfolioCaption->details !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="filter-menu">
                            <li class="active" data-filter="*">All Projects</li>
                            @foreach ($portFolioCategory as $category)
                                <li data-filter=".{{ $category->id }}">{{ $category->category_name }}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="portfolio-wrapper">
                    <div class="row portfolios">
                        {{-- <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item branding">
                            <div class="single-portfolio">
                                <figure class="portfolio-image">
                                    <img src="{{ asset('frontend') }}/images/portfolio-1.jpg" alt="">
                                </figure>
                                <div class="portfolio-content">
                                    <a href="{{ asset('frontend') }}/images/portfolio-1.jpg" data-lity class="icon"><i
                                            class="fas fa-plus"></i></a>
                                    <h4 class="title"><a href="portfolio-details.html">Black Golden</a></h4>
                                    <div class="desc">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        @foreach ($allportfolioItem as $portfolio)
                            <div data-wow-delay="0.4s"
                                class="col-md-6 col-lg-4 filter-item {{ $portfolio->categories->id }}">
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
                </div>
            </div>
        </section>
        <!-- Portfolio-Area-End -->

        <!-- Skills-Area-Start -->
        <section class="skills-area section-padding-top" id="skills-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="section-title">
                                    <h3 class="title">{{ $skillCaptions->title }}</h3>
                                    <div class="desc">
                                        <p>{{ $skillCaptions->details }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row skills">
                            @foreach ($skillItem as $skill)
                                <div class="col-sm-6">
                                    <div class="bar_group wow fadeInUp" data-wow-delay="0.3s" data-max="100">
                                        <div class="title">{{ $skill->title }}</div>
                                        <div class="bar_group__bar thick elastic" data-value="{{ $skill->percent }}"
                                            data-color="{{ $skill->color }}" data-tooltip="true"
                                            data-show-values="false" data-unit="%"></div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <figure class="single-image text-right wow fadeInRight">
                            <img src="{{ asset($skillCaptions->image) }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- Skills-Area-End -->

        <!-- Experience-Area-Start -->
        <section class="experience-area section-padding">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 d-none d-lg-block">
                        <figure class="single-image wow fadeInLeft">
                            <img src="{{ asset($exp->image) }}" alt="">
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <div class="experience-text">
                            <h3 class="title wow fadeInUp" data-wow-delay="0.3s">
                                {{ $exp->title }}
                            </h3>
                            <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                                <p>{!! $exp->details !!}</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="icon-info wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="icon"><i class="{{ $exp->phone_icon }}"></i></div>
                                        <h6><a href="tel:{{ $exp->phone_number }}" class="text">
                                                {{ $exp->phone_number }}
                                            </a></h6>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="icon-info wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="icon"><i class="{{ $exp->email_icon }}"></i></div>
                                        <h6><a href="mailto:{{ $exp->email_address }}"
                                                class="text">{{ $exp->email_address }}</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Experience-Area-End -->

        <!-- Testimonial-Area-Start -->
        <section class="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="section-title">
                            <h3 class="title">{{ $clientCaptions->title }}</h3>
                            <div class="desc">
                                <p>{{ $clientCaptions->details }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="testimonial-slider">
                            @foreach ($allclient as $client)
                                <div class="single-testimonial">
                                    <div class="testimonial-header">
                                        <div class="quote">
                                            @if ($client->icon)
                                                <i class="{{ $client->icon }}"></i>
                                            @else
                                                <i class="fas fa-quote-left"></i>
                                            @endif
                                        </div>
                                        <h5 class="title">{{ $client->name }}</h5>
                                        <h6 class="position">{{ $client->role }}</h6>
                                    </div>
                                    <div class="content">
                                        <p>{{ $client->comment }}</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial-Area-End -->

        <!-- Blog-Area-Start -->
        <section class="blog-area section-padding-top" id="blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="section-title">
                            <h3 class="title">{{ $blogCaptions->title }}</h3>
                            <div class="desc">
                                <p>
                                    {{ $blogCaptions->details }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="blog-slider">
                            @foreach ($blogs as $blog)
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
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog-Area-End -->

        <!-- Contact-Area-Start -->
        <section class="contact-area section-padding" id="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="section-title">
                            <h3 class="title">{{ $contactCaptions->title }}</h3>
                            <div class="desc">
                                <p>
                                    {{ $contactCaptions->details }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Contact-Form -->

                        @if (Session::has('message'))
                            <div class="alert alert-success">
                                <div>{{ Session::get('message') }}</div>
                            </div>
                        @endif
                        <form class="contact-form" id="" action="{{ route('send.messaeg') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-box">
                                        <input type="text" name="name" id="form-name" class="input-box is-invalid"
                                            placeholder="Name">
                                        @error('name')
                                            <span class="mb-2 d-block text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-box">
                                        <input type="text" name="email" id="form-email" class="input-box"
                                            placeholder="Email">
                                        @error('email')
                                            <span class="mb-2 d-block text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-box">
                                        <input type="text" name="subject" id="form-subject" class="input-box"
                                            placeholder="Subject">
                                        @error('subject')
                                            <span class="mb-2 d-block text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-box">
                                        <textarea class="input-box" id="form-message" placeholder="Message" cols="30" rows="4" name="message"></textarea>
                                        @error('message')
                                            <span class="mb-2 d-block text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-box mt-2">
                                        <button class="button-primary mouse-dir" type="submit">Send Now <span
                                                class="dir-part"></span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Contact-Form / -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-Area-End -->

        <!-- Footer-Area-Start -->
        @include('frontend.layouts.includes.footer')
        <!-- Footer-Area-End -->
    </div>
@endsection
@push('scripts')
    <script>
        @php
            $titles = [];
            foreach ($typedText as $title) {
                $titles[] = $title->type_text;
            }
            $titles = json_encode($titles);
        @endphp
        $('.header-area .typer-title').typer({!! $titles !!});
    </script>
@endpush
