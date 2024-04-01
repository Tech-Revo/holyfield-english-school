{{-- -------------- Mobile Nav ---------------- --}}
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle">
            <i class="fal fa-times"></i>
        </button>
        <div class="mobile-logo">
            <a href="{{ url('/') }}">
                <img src="{{ url('assets/school/img/logo.jpeg') }}" alt="Holy Field English School Logo"
                    style="max-width: 70px;">
            </a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li class="{{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}">Home</a>

                </li>


                <li>
                    <a href="{{ url('teachers') }}">Teachers</a>

                </li>
                <li>
                    <a href="#">Gallery</a>

                </li>
                <li>
                    <a href="{{url('events')}}">Events</a>

                </li>


                <li>
                    <a href="{{url('blogs')}}">Blog</a>

                </li>
                <li>
                    <a href="{{ url('about-us') }}">About Us</a>

                </li>
                <li>
                    <a href="{{ url('login') }}">Login</a>

                </li>
            </ul>
        </div>
    </div>
</div>
{{-- -------------- Mobile Nav ---------------- --}}

<header class="th-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li>
                                <i class="far fa-phone"></i>
                                @if (isset($data['phone_no']))
                                    <a href="tel:{{ $data['phone_no'] }}"
                                        class="info-box_link">{{ $data['phone_no'] }}</a>
                                @else
                                    <a href="tel:" class="info-box_link"></a>
                                @endif
                            </li>
                            <li class="d-none d-xl-inline-block">
                                <i class="far fa-envelope"></i>
                                @if (isset($data['email']))
                                    <a href="mailto:{{ $data['email'] }}"
                                        class="info-box_link">{{ $data['email'] }}</a>
                                @else
                                    <a href="mailto:" class="info-box_link"></a>
                                @endif
                            </li>
                            <li>
                                <i class="far fa-clock"></i>
                                Sun - Fri: 9:00 AM - 4:00 PM
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links header-right">
                        <ul>
                            <li>
                                <div class="header-social">
                                    <span class="social-title">Follow Us:</span>
                                    @if (isset($data['facebook_link']))
                                        <a href="{{ $data['facebook_link'] }}" target="_blank">
                                        @else
                                            <a href="#">
                                    @endif

                                    <i class="fab fa-facebook-f"></i>
                                    </a>
                                    @if (isset($data['twitter_link']))
                                        <a href="{{ $data['twitter_link'] }}" target="_blank">
                                        @else
                                            <a href="#">
                                    @endif
                                    <i class="fab fa-twitter"></i>
                                    </a>
                                    @if (isset($data['youtube_link']))
                                        <a href="{{ $data['youtube_link'] }}" target="_blank">
                                        @else
                                            <a href="#">
                                    @endif
                                    <i class="fab fa-youtube"></i>
                                    </a>
                                    @if (isset($data['instagram_link']))
                                        <a href="{{ $data['instagram_link'] }}" target="_blank">
                                        @else
                                            <a href="#">
                                    @endif
                                    <i class="fab fa-instagram"></i>
                                    </a>


                                </div>
                            </li>
                            <li class="d-none d-lg-inline-block mx-3">
                                <i class="far fa-user"></i>
                                <a href="{{ url('login') }}">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ url('/') }}" style="display: inline-block; text-decoration: none;">
                                <img src="{{ url('assets/school/img/logo.jpeg') }}"
                                    alt="Holy Field English School Logo" style="max-width: 70px;">


                                @if (isset($data['school_name']))
                                    <h5 style="display: inline-block; vertical-align: middle; margin-left: 5px;"
                                        class="mt-3">{{ $data['school_name'] }}</h5>
                                @else
                                    <h5 style="display: inline-block; vertical-align: middle; margin-left: 5px;"
                                        class="mt-3"></h5>
                                @endif


                            </a>

                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="row">
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                        <li class="{{ request()->is('/') ? 'active' : '' }}">
                                            <a href="{{ url('/') }}">Home</a>

                                        </li>

                                        <li>
                                            <a href="{{ url('teachers') }}">Teachers</a>

                                        </li>
                                        <li>
                                            <a href="#">Gallery</a>

                                        </li>
                                        <li>
                                            <a href="{{url('events')}}">Events</a>

                                        </li>


                                        <li>
                                            <a href="{{url('blogs')}}">Blog</a>

                                        </li>
                                        <li>
                                            <a href="{{ url('about-us') }}">About Us</a>

                                        </li>

                                    </ul>
                                </nav>
                                <button type="button" class="th-menu-toggle d-block d-lg-none">
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>
                            <div class="col-auto d-none d-xl-block">
                                <div class="header-button">
                                    <button type="button" class="icon-btn searchBoxToggler">
                                        <i class="far fa-search"></i>
                                    </button>

                                    <a href="{{ url('contact') }}" class="th-btn ml-25">
                                        Contact Us <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
