<!doctype html>
<html class="no-js" lang="zxx">
@include('school.layouts.header')
<x-meta title="Holyfield English School"
    description="Welcome to Holyfield English School, where excellence in education meets a nurturing community environment. Established with a commitment to academic rigor, character development, and holistic growth."
    image="{{ url('assets/school/img/logo.jpeg') }}" />
@livewireStyles

<body>
    <div class="preloader">

        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>

    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose">
            <i class="fal fa-times"></i>
        </button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit">
                <i class="fal fa-search"></i>
            </button>
        </form>
    </div>
    @include('school.layouts.nav')




    <div class="breadcumb-wrapper" data-bg-src="{{ url('assets/school/img/contact_us.jpeg') }}" data-overlay="title"
        data-opacity="8">
        <div class="breadcumb-shape" data-bg-src="{{ url('assets/school/img/breadcumb_shape_1_1.png') }}"></div>
        <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px">
            <img src="{{ url('assets/school/img/breadcumb_shape_1_2.png') }}" alt="shape">
        </div>
        <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
            <img src="{{ url('assets/school/img/breadcumb_shape_1_3.png') }}" alt="shape">
        </div>
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Events</h1>
                <ul class="breadcumb-menu">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>Event</li>
                </ul>
            </div>
        </div>
    </div>
    <br><br>
    <section class=" space-extra-bottom">
        <div class="container">
            <div class="row gy-40 gx-70">
                <div class="col-lg-8 col-xl-8">
                    <div class="row">
                        @forelse ($upComingEvents as $upComingEvent)
                            <div class="col-lg-6 col-xl-4">
                                <div class="event-card">

                                    <div class="event-card_content">

                                        <div class="event-meta">
                                            <p>
                                                <i class="fal fa-location-dot"></i>
                                                {{ $upComingEvent->address }},
                                            </p>
                                            <p>
                                                <i class="fal fa-clock"></i>
                                                <?php
                                                $startTime = new DateTime($upComingEvent->start_time);
                                                $endTime = new DateTime($upComingEvent->end_time);
                                                ?>
                                                {{ $startTime->format('h:i A') }} - {{ $endTime->format('h:i A') }}
                                            </p>
                                            <p><i class="fal fa-calendar"></i>
                                                {{ \Carbon\Carbon::parse($upComingEvent->event_date)->format('M j, Y') }}
                                            </p>
                                        </div>
                                        <h3 class="event-card_title">
                                            <a>{{ $upComingEvent->event_name }}</a>
                                        </h3>

                                        <div class=" text-left">
                                            <div class="avater">
                                                <img src="{{ url('assets/school/img/avater.png') }}" alt="avater"
                                                    style="width: 30px">
                                            </div>
                                            <div class="details">
                                                <span class="author-name">Published By</span>
                                                <p class="author-desig">{{ $upComingEvent->published_by }}</p>
                                            </div>
                                        </div>
                                        {{-- <div class="event-card_bottom">
                                    <a href="event-details.html" class="th-btn">
                                        View Event <i class="far fa-arrow-right ms-1"></i>
                                    </a>
                                </div> --}}
                                        <div class="event-card-shape jump">
                                            <img src="{{ url('assets/school/img/event-box-shape1.png') }}"
                                                alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @empty
                            <img src="{{ url('assets/school/img/no-event.png') }}" class="mx-auto d-block"
                                style="max-width:30%" />
                            <h5 class="text-center">No Events</h5>
                        @endforelse
                    </div>
                    <br><br>
                    <div class="th-pagination">
                        <ul>
                            {{ $upComingEvents->links('pagination::bootstrap-5') }}
                        </ul>
                    </div>
                </div>



                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form action="{{ url('events') }}" class="search-form">
                                <input type="text" placeholder="Search Events..." name="search_keyword">
                                <button type="submit">
                                    <i class="far fa-search"></i>
                                </button>
                            </form>
                        </div>

                        <div class="widget">
                            <h3 class="widget_title">Upcomming Events</h3>
                            <div class="recent-post-wrap">
                                @forelse ($reventEvents as $upComingEvent)
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <div class="avater">
                                                <img src="{{ url('assets/school/img/event-box-shape1.png') }}"
                                                    alt="Blog Image">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title">
                                                <a class="text-inherit">{{ $upComingEvent->event_name }}</a>
                                            </h4>
                                            <div class="recent-post-meta">
                                                <a>
                                                    <i class="fal fa-calendar"></i>
                                                    {{ \Carbon\Carbon::parse($upComingEvent->event_date)->format('M j, Y') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <h5 class="text-center">No Recent Events</h5>
                                @endforelse



                            </div>
                        </div>


                    </aside>
                </div>


            </div>
        </div>
    </section>




    @include('school.layouts.footer')
    @livewireScripts
</body>

</html>
