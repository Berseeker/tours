<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link type="text/css" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('plugins/glightbox/glightbox.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('plugins/plyr/plyr.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('plugins/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('plugins/flatpickr/monthSelect.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('plugins/dselect/dselect.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('plugins/tabler-icons/tabler-icons.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/home_.css') }}" rel="stylesheet">
    <!-- Scripts -->
</head>
<body>
    <div id="app">
        <!-- Preload -->
        <div id="preloader"></div>
        <!-- /Preload -->
        @include('_partials.header')

        <main>
            @yield('content')
        </main>

        <!-- FOOTER -->
        <footer id="footer" class="footer">
            <div class="container">
                <!-- Footer top -->
                <div class="footer-top mb-5 pb-2">
                    <div class="row">
                        <div class="col-12 col-xl-3 col-lg-12 col-md-6">
                            <!-- Brand -->
                            <div class="footer-widget mb-4">
                                <div class="brand-box">
                                    <a href="index.html" class="mb-4 d-block">
                                        <img class="logo-light" src="{{ asset('img/logo-footer.png') }}" alt="">
                                    </a>
                                    <p class="lh-lg">
                                        <em>Tourago is a leading European tour booking platform in the world, with more than 10 years of operation Tourago is known as a reputable travel service provider.</em>
                                        <a href="#">[+]</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /Brand -->
                        </div>
                        <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                            <!-- Contact Info -->
                            <div class="footer-widget mb-4">
                                <h5 class="widget-title mb-4 text-white fw-bold-1">Contact Info</h5>
                                <div class="contact-box">
                                    <p>
                                        <span>
                                            No 123 St. Madison Ave,
                                            <br> New York City, NY 10017, USA.
                                        </span>
                                    </p>
                                    <p>
                                        <span>+1 321-654-9876 (Ext: 123).</span>
                                    </p>
                                    <p>
                                        <a href="#">Booking@example.com</a>
                                    </p>
                                    <p>
                                        <a href="#">www.example.com</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /Contact Info -->
                        </div>
                        <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                            <!-- Quick Links -->
                            <div class="footer-widget mb-4">
                                <h5 class="widget-title mb-4 text-white fw-bold-1">Quick Links</h5>
                                <div class="link-box">
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <ul class="list-unstyled footer-list mb-0">
                                                <li>
                                                    <a href="about.html">About</a>
                                                </li>
                                                <li>
                                                    <a href="team.html">Team</a>
                                                </li>
                                                <li>
                                                    <a href="blog-grid.html">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <ul class="list-unstyled footer-list mb-0">
                                                <li>
                                                    <a href="categories">Categories</a>
                                                </li>
                                                <li>
                                                    <a href="destination.html">Destinations</a>
                                                </li>
                                                <li>
                                                    <a href="tour-grid.html">Tours</a>
                                                </li>
                                                <li>
                                                    <a href="#">Sitemap</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Quick Links -->
                        </div>
                        <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                            <!-- Get app & Social -->
                            <div class="footer-widget mb-4">
                                <h5 class="widget-title mb-4 text-white fw-bold-1">Get the app</h5>
                                <div class="get-app-box">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <figure>
                                                    <img loading="lazy" src="{{ asset('img/icons/s4.svg') }}" class="img-fluid" alt="">
                                                </figure>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <figure>
                                                    <img loading="lazy" src="{{ asset('img/icons/s5.svg') }}" class="img-fluid" alt="">
                                                </figure>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-social">
                                    <h5 class="widget-title social-title mb-4 text-white fw-bold-1">Connect social</h5>
                                    <div class="social-list">
                                        <a href="#" class="btn-social btn-facebook"><i class="ti ti-brand-facebook"></i></a>
                                        <a href="#" class="btn-social btn-twitter"><i class="ti ti-brand-twitter"></i></a>
                                        <a href="#" class="btn-social btn-youtube-1"><i class="ti ti-brand-youtube"></i></a>
                                        <a href="#" class="btn-social btn-pinterest"><i class="ti ti-brand-pinterest"></i></a>
                                        <a href="#" class="btn-social btn-tripadvisor"><i class="ti ti-brand-tripadvisor"></i></a>
                                        <a href="#" class="btn-social btn-linkedin"><i class="ti ti-brand-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Subscribe & Social -->
                        </div>
                    </div>
                </div>
                <!-- Footer top -->
                <!-- Footer Bottom -->
                <div class="footer-bottom pt-4 pb-2 fs-7">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p>© 2023 Tourago. All rights reserved.</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="bottom-link text-start text-md-end">
                                <ul class="list-inline">
                                    <li class="list-inline-item me-4">
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Terms of Use</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Footer Bottom -->
            </div>
        </footer>
        <!-- /FOOTER -->
        <!-- Go to top -->
        <a href="#" class="scroll-top"><i class="ti ti-chevron-up"></i></a>
        <!-- /Go to top -->
    </div>
    <!-- JS -->
    <script src="{{ asset('plugins/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/glightbox/glightbox.min.js') }}"></script>
    <script src="{{ asset('plugins/plyr/plyr.min.js') }}"></script>
    <script src="{{ asset('plugins/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('plugins/flatpickr/monthSelect.min.js') }}"></script>
    <script src="{{ asset('plugins/rater/rater.min.js') }}"></script>
    <script src="{{ asset('plugins/dselect/dselect.min.js') }}"></script>
    <script src="{{ asset('plugins/countdown/countdown.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- /JS -->
    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 17570814;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/17570814/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->

</body>
</html>
