@php
    $footerTop = App\Models\FooterTop::first();
    $footer = App\Models\Footer::first();

@endphp
<footer class="footer-area">
    <div class="container">
        <div class="row footer-widgets">
            <div class="col-md-12 col-lg-3 widget">
                <div class="text-box">
                    <figure class="footer-logo">
                        <img src="{{ asset($footerTop->logo) }}" alt="">
                    </figure>
                    <p>{{ $footerTop->short_details }} </p>
                    <ul class="d-flex flex-wrap">
                        <li><a href="{{ $footerTop->facebook_link }}"><i class="{{ $footerTop->facebook_icon }}"></i></a>
                        </li>
                        <li><a href="#{{ $footerTop->instagram_link }}"><i
                                    class="{{ $footerTop->instagram_icon }}"></i></a></li>
                        <li><a href="#{{ $footerTop->twitter_link }}"><i class="{{ $footerTop->twitter_icon }}"></i></a>
                        </li>
                        <li><a href="#{{ $footerTop->behance_link }}"><i class="{{ $footerTop->behance_icon }}"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 offset-lg-1 widget">
                <h3 class="widget-title">{{ $footerTop->userful_title }}</h3>
                <ul class="nav-menu">
                    <li><a href="{{ route('all.portfolio') }}">{{ $footerTop->portfolio_title }}</a></li>
                    <li><a href="{{ route('all.blog') }}">{{ $footerTop->blog_title }}</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">{{ $footerTop->contact_info_title }}</h3>
                <ul>
                    <li><a href="javascript::vloid">{{ $footerTop->contact_info_address }}</a></li>
                    <li><a href="tel:{{ $footerTop->contact_info_number }}">{{ $footerTop->contact_info_number }}</a>
                    </li>
                    <li><a href="mailto:{{ $footerTop->contact_info_email }}">{{ $footerTop->contact_info_email }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">{{ $footerTop->helop_info_title }}</h3>
                <ul class="nav-menu">
                    <li><a href="{{ route('login') }}">{{ $footerTop->register }}</a></li>
                    @if (Auth::check())
                        <li><a href="{{ route('dashboard') }}">Account</a></li>
                    @else
                        <li><a href="{{ route('logout') }}">{{ $footerTop->login }}</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>{!! $footer->left_title !!}</p>
                        <p>{!! $footer->right_title !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
