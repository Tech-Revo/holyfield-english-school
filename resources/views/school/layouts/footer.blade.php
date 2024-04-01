 <footer class="footer-wrapper footer-layout1" data-bg-src="{{ url('assets/school/img/footer-bg.png') }}">
     <div class="shape-mockup footer-shape1 jump" data-left="60px" data-top="70px">
         <img src="{{ url('assets/school/img/footer-bg-shape1.png') }}" alt="img">
     </div>
     <div class="shape-mockup footer-shape2 jump-reverse" data-right="80px" data-bottom="120px">
         <img src="{{ url('assets/school/img/footer-bg-shape2.png') }}" alt="img">
     </div>
     <div class="footer-top">
         <div class="container">
             <div class="footer-contact-wrap">
                 <div class="footer-contact">
                     <div class="footer-contact_icon icon-btn">
                         <i class="fal fa-phone"></i>
                     </div>
                     <div class="media-body">
                         <p class="footer-contact_text">Call us any time:</p>
                         <a href="tel:9840393746" class="footer-contact_link">+977 9840393746</a>
                     </div>
                 </div>
                 <div class="divider"></div>
                 <div class="footer-contact">
                     <div class="footer-contact_icon icon-btn">
                         <i class="fal fa-envelope"></i>
                     </div>
                     <div class="media-body">
                         <p class="footer-contact_text">Email us 24/7 hours:</p>
                         <a href="mailto:info.holyfield.dipen@gmail.com"
                             class="footer-contact_link">info.holyfield.dipen@gmail.com</a>
                     </div>
                 </div>
                 <div class="divider"></div>
                 <div class="footer-contact">
                     <div class="footer-contact_icon icon-btn">
                         <i class="fal fa-location-dot"></i>
                     </div>
                     <div class="media-body">
                         <p class="footer-contact_text">Our school location:</p>
                         <a href="https://www.google.com/maps" class="footer-contact_link">Kachankawal-07</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer-wrap" data-bg-src="{{ url('assets/school/img/jiji.png') }}">
         <div class="widget-area">
             <div class="container">
                 <div class="row justify-content-between">
                     <div class="col-md-6 col-xxl-3 col-xl-3">
                         <div class="widget footer-widget">
                             <div class="th-widget-about">
                                 <div class="about-logo">
                                     <a href="index.html">
                                         <img src="{{ url('assets/school/img/logo.jpeg') }}" alt="Edura"
                                             style="max-width: 100px">
                                     </a>
                                 </div>
                                 <p class="about-text">Welcome to Holyfield English School, where excellence in
                                     education meets a nurturing community environment. Established with a commitment to
                                     academic rigor, character development, and holistic growth.</p>
                                 <div class="th-social">
                                     <h6 class="title text-white">FOLLOW US ON:</h6>
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
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6 col-xl-auto">
                         <div class="widget widget_nav_menu footer-widget">
                             <h3 class="widget_title">Quick Links</h3>
                             <div class="menu-all-pages-container">
                                 <ul class="menu">
                                     <li>
                                         <a href="">Gallery</a>
                                     </li>
                                     <li>
                                         <a href="{{url('events')}}">Events</a>
                                     </li>
                                     <li>
                                         <a href="{{url('blogs')}}">Blogs</a>
                                     </li>
                                     <li>
                                         <a href="{{url('contact')}}">Contact Us</a>
                                     </li>
                                     <li>
                                         <a href="{{url('about-us')}}">About Us</a>
                                     </li>

                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6 col-xl-auto">
                         <div class="widget widget_nav_menu footer-widget">
                             <h3 class="widget_title">Resources</h3>
                             <div class="menu-all-pages-container">
                                 <ul class="menu">
                                     <li>
                                         <a href="">Routines</a>
                                     </li>
                                     <li>
                                         <a href="">Exam Results</a>
                                     </li>
                                     <li>
                                         <a href="">Test Results</a>
                                     </li>
                                     <li>
                                         <a href="">Announcement</a>
                                     </li>
                                     <li>
                                         <a href="">Academic Calender</a>
                                     </li>

                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6 col-xxl-3 col-xl-3">
                         <div class="widget widget_contact footer-widget">
                             <h3 class="widget_title">Get in touch!</h3>
                             <p class="contact-text">Getting in touch with us is easy!
                                 Whether you have questions about our curriculum, admissions process, extracurricular
                                 activities, or anything else, we're here to help.</p>
                             <div class="th-widget-contact">
                                 <div class="info-box-wrap">
                                     <div class="info-box_icon">
                                         <i class="fas fa-location-dot"></i>
                                     </div>
                                     @if (isset($data['address']))
                                         <p class="info-box_text">{{ $data['address'] }}</p>
                                     @else
                                         <p class="info-box_text"></p>
                                     @endif

                                 </div>
                                 <div class="info-box-wrap">
                                     <div class="info-box_icon">
                                         <i class="fas fa-envelope"></i>
                                     </div>
                                      @if (isset($data['email']))
                                        <a href="mailto:{{ $data['email'] }}"
                                         class="info-box_link">{{ $data['email'] }}</a>
                                     @else
                                        <a href="mailto:"
                                         class="info-box_link"></a>
                                     @endif

                                     
                                 </div>
                                 <div class="info-box-wrap">
                                     <div class="info-box_icon">
                                         <i class="fas fa-phone"></i>
                                     </div>

                                      @if (isset($data['phone_no']))
                                        <a href="tel:{{ $data['phone_no'] }}" class="info-box_link">{{ $data['phone_no'] }}</a>
                                     @else
                                       <a href="tel:" class="info-box_link"></a>
                                     @endif

                                    
                                 </div>
                             </div>
                         </div>
                     </div>


                 </div>
             </div>
         </div>
         <div class="container">
             <div class="copyright-wrap">
                 <div class="row justify-content-between align-items-center">
                     <div class="col-md-7">
                         <p class="copyright-text">
                             Copyright © <?php echo Date('Y'); ?>. Designed By <a href="https://merovision.com/"
                                 target="_blank">Mero Vision</a>.
                             All Rights Reserved.
                         </p>
                     </div>
                     <div class="col-md-5 text-end d-none d-md-block">
                         <div class="footer-links">
                             <ul>
                                 <li>
                                     <a href="">Privacy Policy</a>
                                 </li>
                                 <li>
                                     <a href="">Terms & Condition</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <div class="scroll-top">
     <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
             style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
         </path>
     </svg>
 </div>
 <script src="{{ url('assets/school/js/jquery-3.6.0.min.js') }}"></script>
 <script src="{{ url('assets/school/js/app.min.js') }}"></script>
 <script src="{{ url('assets/school/js/main.js') }}"></script>
