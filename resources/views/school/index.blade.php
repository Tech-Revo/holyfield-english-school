<!doctype html>
<html class="no-js" lang="zxx">
@include('school.layouts.header')
<x-meta title="Holyfield English School"
           description="Welcome to Holyfield English School, where excellence in education meets a nurturing community environment. Established with a commitment to academic rigor, character development, and holistic growth."
           image="{{url('assets/school/img/logo.jpeg')}}" />

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

    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="hero-slider-1 th-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1"
            data-dots="true">
            <div class="th-hero-slide">
                <div class="th-hero-bg" data-overlay="title" data-opacity="8"
                    data-bg-src="{{ url('assets/school/img/banner.jpeg') }}"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6">
                            <div class="hero-style1">

                                <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.4s">
                                    Education Create Better <span class="text-theme">Future.</span>
                                </h1>
                                <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.6s">Education can be
                                    thought of as the transmission of the values and accumulated knowledge of a society.
                                    In this sense, it is equivalent.</p>
                                <div class="btn-group" data-ani="slideinleft" data-ani-delay="0.8s">
                                    <a href="contact.html" class="th-btn style3">
                                        Get Started<i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-lg-end text-center">
                            <div class="hero-img1">
                                <img src="{{ url('assets/school/img/circle.png') }}" alt="hero">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-shape shape1">
                    <img src="{{ url('assets/school/img/shape_1_1.png') }}" alt="shape">
                </div>
                <div class="hero-shape shape2">
                    <img src="{{ url('assets/school/img/shape_1_2.png') }}" alt="shape">
                </div>
                <div class="hero-shape shape3"></div>
                <div class="hero-shape shape4 shape-mockup jump-reverse" data-right="3%" data-bottom="7%">
                    <img src="{{ url('assets/school/img/shape_1_3.png') }}" alt="shape">
                </div>
                <div class="hero-shape shape5 shape-mockup jump-reverse" data-left="0" data-bottom="0">
                    <img src="{{ url('assets/school/img/shape_1_4.png') }}" alt="shape">
                </div>
            </div>
            <div class="th-hero-slide">
                <div class="th-hero-bg" data-overlay="title" data-opacity="8"
                    data-bg-src="{{ url('assets/school/img/banner.jpeg') }}"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6">
                            <div class="hero-style1">

                                <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.4s">
                                    Holy Field Leads To A Brighter <span class="text-theme">Future.</span>
                                </h1>
                                <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.6s">Education can be
                                    thought of as the transmission of a societys values and accumulated knowledge. In
                                    this sense, it is equivalent.</p>
                                <div class="btn-group" data-ani="slideinleft" data-ani-delay="0.8s">
                                    <a href="contact.html" class="th-btn style3">
                                        Get Started<i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-lg-end text-center">
                            <div class="hero-img1">
                                <img src="{{ url('assets/school/img/circle.png') }}" alt="hero">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-shape shape1">
                    <img src="{{ url('assets/school/img/shape_1_1.png') }}" alt="shape">
                </div>
                <div class="hero-shape shape2">
                    <img src="{{ url('assets/school/img/shape_1_2.png') }}" alt="shape">
                </div>
                <div class="hero-shape shape3"></div>
                <div class="hero-shape shape4 shape-mockup jump-reverse" data-right="3%" data-bottom="7%">
                    <img src="{{ url('assets/school/img/shape_1_3.png') }}" alt="shape">
                </div>
                <div class="hero-shape shape5 shape-mockup jump-reverse" data-left="0" data-bottom="0">
                    <img src="{{ url('assets/school/img/shape_1_4.png') }}" alt="shape">
                </div>
            </div>
            <div class="th-hero-slide">
                <div class="th-hero-bg" data-overlay="title" data-opacity="8"
                    data-bg-src="{{ url('assets/school/img/banner.jpeg') }}"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6">
                            <div class="hero-style1">

                                <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.4s">
                                    The Best Education <span class="text-theme">Institute.</span>
                                </h1>
                                <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.6s">Education can be
                                    thought of as the transmission of the values and accumulated knowledge of a society.
                                    In this sense, it is equivalent.</p>
                                <div class="btn-group" data-ani="slideinleft" data-ani-delay="0.8s">
                                    <a href="contact.html" class="th-btn style3">
                                        Get Started<i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-lg-end text-center">
                            <div class="hero-img1">
                                <img src="{{ url('assets/school/img/circle.png') }}" alt="hero">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-shape shape1">
                    <img src="{{ url('assets/school/img/shape_1_1.png') }}" alt="shape">
                </div>
                <div class="hero-shape shape2">
                    <img src="{{ url('assets/school/img/shape_1_2.png') }}" alt="shape">
                </div>
                <div class="hero-shape shape3"></div>
                <div class="hero-shape shape4 shape-mockup jump-reverse" data-right="3%" data-bottom="7%">
                    <img src="{{ url('assets/school/img/shape_1_3.png') }}" alt="shape">
                </div>
                <div class="hero-shape shape5 shape-mockup jump-reverse" data-left="0" data-bottom="0">
                    <img src="{{ url('assets/school/img/shape_1_4.png') }}" alt="shape">
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="space-top">
            <div class="container">
                <div class="category-sec-wrap">
                    <div class="shape-mockup category-shape-arrow d-xl-block d-none">
                        <img src="assets/img/normal/category-arrow.svg" alt="img">
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="title-area mb-25 mb-lg-0 text-xl-start text-center">
                                <span class="sub-title">
                                    <i class="fal fa-book me-2"></i>
                                    Courses Categories
                                </span>
                                <h2 class="sec-title">Explore Top Categories</h2>
                                <a href="course.html" class="th-btn">
                                    View All Category<i class="fa-regular fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="row slider-shadow th-carousel category-slider" data-slide-show="4" data-ml-slide-show="3" data-md-slide-show="3" data-sm-slide-show="2" data-arrows="true" data-xl-arrows="true">
                                <div class="col-md-6 col-xl-4">
                                    <div class="category-card">
                                        <div class="category-card_icon">
                                            <img src="assets/img/icon/cat-1_1.svg" alt="image">
                                        </div>
                                        <div class="category-card_content">
                                            <h3 class="category-card_title">
                                                <a href="course.html">Web Development</a>
                                            </h3>
                                            <p class="category-card_text">56+ Courses</p>
                                            <a href="course-details.html" class="th-btn">
                                                Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="category-card">
                                        <div class="category-card_icon">
                                            <img src="assets/img/icon/cat-1_2.svg" alt="image">
                                        </div>
                                        <div class="category-card_content">
                                            <h3 class="category-card_title">
                                                <a href="course.html">Digital Marketing</a>
                                            </h3>
                                            <p class="category-card_text">50+ Courses</p>
                                            <a href="course-details.html" class="th-btn">
                                                Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="category-card">
                                        <div class="category-card_icon">
                                            <img src="assets/img/icon/cat-1_3.svg" alt="image">
                                        </div>
                                        <div class="category-card_content">
                                            <h3 class="category-card_title">
                                                <a href="course.html">UI/UX Design</a>
                                            </h3>
                                            <p class="category-card_text">36+ Courses</p>
                                            <a href="course-details.html" class="th-btn">
                                                Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="category-card">
                                        <div class="category-card_icon">
                                            <img src="assets/img/icon/cat-1_4.svg" alt="image">
                                        </div>
                                        <div class="category-card_content">
                                            <h3 class="category-card_title">
                                                <a href="course.html">Graphic Design</a>
                                            </h3>
                                            <p class="category-card_text">24+ Courses</p>
                                            <a href="course-details.html" class="th-btn">
                                                Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="category-card">
                                        <div class="category-card_icon">
                                            <img src="assets/img/icon/cat-1_1.svg" alt="image">
                                        </div>
                                        <div class="category-card_content">
                                            <h3 class="category-card_title">
                                                <a href="course.html">Web Development</a>
                                            </h3>
                                            <p class="category-card_text">56+ Courses</p>
                                            <a href="course-details.html" class="th-btn">
                                                Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="category-card">
                                        <div class="category-card_icon">
                                            <img src="assets/img/icon/cat-1_2.svg" alt="image">
                                        </div>
                                        <div class="category-card_content">
                                            <h3 class="category-card_title">
                                                <a href="course.html">Digital Marketing</a>
                                            </h3>
                                            <p class="category-card_text">50+ Courses</p>
                                            <a href="course-details.html" class="th-btn">
                                                Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="category-card">
                                        <div class="category-card_icon">
                                            <img src="assets/img/icon/cat-1_3.svg" alt="image">
                                        </div>
                                        <div class="category-card_content">
                                            <h3 class="category-card_title">
                                                <a href="course.html">UI/UX Design</a>
                                            </h3>
                                            <p class="category-card_text">36+ Courses</p>
                                            <a href="course-details.html" class="th-btn">
                                                Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="category-card">
                                        <div class="category-card_icon">
                                            <img src="assets/img/icon/cat-1_4.svg" alt="image">
                                        </div>
                                        <div class="category-card_content">
                                            <h3 class="category-card_title">
                                                <a href="course.html">Graphic Design</a>
                                            </h3>
                                            <p class="category-card_text">24+ Courses</p>
                                            <a href="course-details.html" class="th-btn">
                                                Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}




    <div class="space overflow-hidden" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="img-box1 mb-40 mb-xl-0">
                        <div class="img1">
                            <img class="tilt-active" src="{{ url('assets/school/img/img1.jpeg') }}" alt="About">
                        </div>
                        <div class="about-grid" data-bg-src="{{ url('assets/school/img/img2.jpeg') }}">
                            <h3 class="about-grid_year">
                                <span class="counter-number">1</span>
                                k<span class="text-theme">+</span>
                            </h3>
                            <p class="about-grid_text">Active Students</p>
                        </div>
                        <div class="img2">
                            <img class="tilt-active" src="{{ url('assets/school/img/img2.jpeg') }}" alt="About"
                                style="max-width: 300px">
                        </div>
                        <div class="shape-mockup about-shape1 jump" data-left="-67px" data-bottom="0">
                            <img src="{{ url('assets/school/img/about_1_shape1.png') }}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-30">
                        <span class="sub-title">
                            <i class="fal fa-book me-2"></i>
                            About Our School
                        </span>
                        <h2 class="sec-title">Welcome to Holy Fild English School.</h2>
                    </div>
                    <p class="mt-n2 mb-25">Collaboratively simplify user friendly networks after principle centered
                        coordinate effective methods of empowerment distributed niche markets pursue market positioning
                        web-readiness after resource sucking applications.</p>
                    <p class="mb-30">Online education, also known as e-learning, is a method of learning that takes
                        place over the internet. It offers individuals the opportunity to acquire knowledge, skills.</p>
                    <div class="row align-items-center">
                        <div class="col-md-auto">
                            <div class="about-grid_img mb-30 mb-md-0">
                                <img src="{{ url('assets/school/img/about_1_4.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="checklist">
                                <ul>
                                    <li>Get access to 4,000+ of our top courses</li>
                                    <li>Popular topics to learn now</li>
                                    <li>Find the right instructor for you</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group mt-40">
                        <a href="about.html" class="th-btn">
                            About More<i class="fa-regular fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="space" data-bg-src="{{ url('assets/school/img/course_bg_1.png') }}" id="course-sec">
        <div class="container">
            <div class="mb-35 text-center text-md-start">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8">
                        <div class="title-area mb-md-0">
                            <span class="sub-title">
                                <i class="fal fa-book me-2"></i>
                                Holy Field English School
                            </span>
                            <h2 class="sec-title">Our Facilities/Services</h2>
                        </div>
                    </div>
                    {{-- <div class="col-md-auto">
                            <a href="#" class="th-btn">
                                View All Facilities<i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div> --}}
                </div>
            </div>
            <div class="row slider-shadow th-carousel course-slider-1" data-slide-show="4" data-ml-slide-show="3"
                data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="{{ url('assets/school/img/facilities1.jpeg') }}" alt="img"
                                style="height: 250px">
                            <span class="tag">

                                DRINKING WATER
                            </span>
                        </div>
                        <div class="course-content">

                            <h3 class="course-title">
                                <a href="">Pure Drinking Water</a>
                            </h3>


                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="{{ url('assets/school/img/facilities2.jpeg') }}" alt="img"
                                style="height: 250px">
                            <span class="tag">

                                EVENT
                            </span>
                        </div>
                        <div class="course-content">

                            <h3 class="course-title">
                                <a href="">Programs/Events</a>
                            </h3>


                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="{{ url('assets/school/img/facilities3.jpeg') }}" alt="img"
                                style="height: 250px">
                            <span class="tag">

                                ECA
                            </span>
                        </div>
                        <div class="course-content">

                            <h3 class="course-title">
                                <a href="">ECA</a>
                            </h3>


                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="{{ url('assets/school/img/facilities4.jpeg') }}" alt="img"
                                style="height: 250px">
                            <span class="tag">

                                STUDENT HEALTH CHECK-UP
                            </span>
                        </div>
                        <div class="course-content">

                            <h3 class="course-title">
                                <a href="">Student Health Check-up</a>
                            </h3>


                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="{{ url('assets/school/img/facilities5.jpeg') }}" alt="img"
                                style="height: 250px">
                            <span class="tag">

                                TEACHER MEETING
                            </span>
                        </div>
                        <div class="course-content">

                            <h3 class="course-title">
                                <a href="">Teacher Meeting</a>
                            </h3>


                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="{{ url('assets/school/img/facilities6.jpeg') }}" alt="img"
                                style="height: 250px">
                            <span class="tag">

                                PROPER CLASS-ROOM
                            </span>
                        </div>
                        <div class="course-content">

                            <h3 class="course-title">
                                <a href="">Proper Classroom</a>
                            </h3>


                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="{{ url('assets/school/img/facilities7.jpeg') }}" alt="img"
                                style="height: 250px">
                            <span class="tag">

                                SCIENCE AND ART EXHIBITION
                            </span>
                        </div>
                        <div class="course-content">

                            <h3 class="course-title">
                                <a href="">Science and Art Exhibition</a>
                            </h3>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="cta-area-1" data-bg-src="{{ url('assets/school/img/cta-bg1.png') }}">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-8">
                    <div class="cta-wrap title-area mb-0">
                        <div class="cta-icon">
                            <img src="{{ url('assets/school/img/cta-icon1.png') }}" alt="icon">
                        </div>
                        <div class="cta-content">
                            <h2 class="cta-title sec-title">Get Online Support</h2>
                            <p class="cta-text">Holyfield English School offers a streamlined admission process
                                designed to welcome students into a vibrant learning community. </p>
                        </div>
                        <a href="{{url('contact')}}" class="th-btn style8">
                            Apply For Admission<i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-img-1" data-overlay="title" data-opacity="8">
            <img src="{{ url('assets/school/img/cta_1_1.png') }}" alt="Image">
            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style2 popup-video">
                <i class="fa-sharp fa-solid fa-play"></i>
            </a>
        </div>
    </div>




    <section class="space" data-bg-src="{{ url('assets/school/img/event-bg_1.png') }}">
        <div class="shape-mockup event-shape1 jump" data-top="0" data-left="-60px">
            <img src="{{ url('assets/school/img/team-shape_1_1.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">
                    <i class="fal fa-book me-2"></i>
                    Fetaured Events
                </span>
                <h2 class="sec-title">Our Upcoming Events</h2>
            </div>
            <div class="row slider-shadow event-slider-1 th-carousel gx-70" data-slide-show="3"
                data-lg-slide-show="3" data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1"
                data-arrows="true">

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
                                    <a href="{{url('events')}}">{{ $upComingEvent->event_name }}</a>
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
                                    <img src="{{ url('assets/school/img/event-box-shape1.png') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                @endforelse




            </div>
            @if ($upComingEvents->isEmpty())
                <img src="{{ url('assets/school/img/no-event.png') }}" class="mx-auto d-block"
                    style="max-width:20%" />
                <h5 class="text-center">Currently, there are no upcoming events.</h5>
            @endif
        </div>
    </section>




    @include('school.layouts.footer')
</body>

</html>
