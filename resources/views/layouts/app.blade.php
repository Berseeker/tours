<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tours') }}</title>

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

        @include('_partials.footer')
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
