<!-- HEADER -->
<header id="header" class="header header-transparent">
    <div class="header-container">
        <!-- Logo & Nav -->
        <div class="logo-nav">
            <div class="container">
                <div class="logo-nav-container">
                    <!-- Logo -->
                    <a id="logo" href="{{ route('inicio', ['locale' => App::getLocale()]) }}" class="logo">
                        <img loading="lazy" src="{{ asset('img/logo.png') }}" class="logo-dark" alt="">
                        <img loading="lazy" src="{{ asset('img/logo-light.png') }}" class="logo-light" alt="">
                        <h1 class="d-none">Tourago</h1>
                    </a>
                    <!-- /Logo -->
                    <!-- Nav -->
                    <nav id="navbar" class="navbar">
                        <ul>
                            <li class="dropdown active">
                                <a href="{{ route('home', ['locale' => App::getLocale()]) }}">
                                    <span>{{ __('header.home') }}</span>
                                </a>
                            </li>
                            <li class="dropdown mega-menu">
                                <a href="#">
                                    <span>{{ __('header.destinations') }}</span>
                                    <i class="ti ti-chevron-down dropdown-indicator"></i>
                                </a>
                                <ul>
                                    <li class="dropdown">
                                        <a href="destination.html">
                                            <span>Cancun </span>
                                            <i class="ti ti-chevron-down dropdown-indicator"></i>
                                        </a>
                                        <ul>
                                            <li><a href="#">Isla Mujeres</a></li>
                                            <li><a href="#">Xcaret</a></li>
                                            <li><a href="#">Chichen Itza</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="destination.html">
                                            <span>Playa del Carmen</span>
                                            <i class="ti ti-chevron-down dropdown-indicator"></i>
                                        </a>
                                        <ul>
                                            <li><a href="#">Isla Contoy</a></li>
                                            <li><a href="#">Holbox</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="destination.html">
                                            <span>Tulum</span>
                                            <i class="ti ti-chevron-down dropdown-indicator"></i>
                                        </a>
                                        <ul>
                                            <li><a href="#">Akumal</a></li>
                                            <li><a href="#">Coba</a></li>
                                            <li><a href="#">Balam</a></li>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">
                                    <span>{{ __('header.services') }}</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#">
                                    <span>Blog</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#">
                                    <span>{{ __('header.experience') }}</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#">
                                    <span>{{ __('header.contacto') }}</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /Nav -->
                    <!-- Language & Currency -->
                    <div class="lang-cur">
                        <ul class="list-inline">
                            <li class="list-inline-item select-language">
                                <!-- Language -->
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">
                                        <span class="lang-flag">
                                            @if (App::isLocale('es'))
                                                <img loading="lazy" src="{{ asset('img/mx.png') }}" alt="">
                                            @elseif(App::isLocale('en'))
                                                <img loading="lazy" src="{{ asset('img/en.svg') }}" alt="">
                                            @endif
                                            <span>{{ Str::upper(App::currentLocale()) }}</span>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        @if (App::isLocale('es'))
                                            <li>
                                                <a class="dropdown-item" href="{{ route(Route::currentRouteName(), ['locale' => 'en']) }}">
                                                    <span class="lang-flag">
                                                        <span><img loading="lazy" src="{{ asset('img/en.svg') }}" alt=""></span>
                                                        <span>English</span>
                                                    </span>
                                                </a>
                                            </li>
                                        @elseif(App::isLocale('en'))
                                            <li>
                                                <a class="dropdown-item" href="{{ route(Route::currentRouteName(), ['locale' => 'es']) }}">
                                                    <span class="lang-flag">
                                                        <span><img loading="lazy" src="{{ asset('img/mx.png') }}" alt=""></span>
                                                        <span>Español</span>
                                                    </span>
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                <!-- /Language -->
                            </li>
                            <li class="list-inline-item select-currency">
                                <!-- Currency -->
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">
                                        <span class="currency">
                                            <span>{{ $config->currencyString(Config::get('app.currency')) }}</span>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach ($countries as $country)
                                            @if ($country->lang != Config::get('app.currency'))
                                                <li><a class="dropdown-item" href="{{ route(Route::currentRouteName(), ['locale' => App::getLocale(), 'currency' => $country->lang]) }}">{{ $country->currency }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- /Currency -->
                            </li>
                        </ul>
                    </div>
                    <!-- /Language & Currency -->
                    <!-- Favourite & Cart -->
                    <div class="fav-cart">
                        <ul class="list-inline">
                            <li class="list-inline-item shopping-cart">
                                <a href="#">
                                    <span class="badge bg-danger">1+</span>
                                    <img src="{{ asset('img/whats.svg') }}" alt="">
                                    <!--i class="ti ti-shopping-bag"></i-->
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Favourite & Cart -->
                    <!-- Mobile toggle -->
                    <i class="mobile-nav-toggle mobile-nav-show ti ti-menu-2"></i>
                    <i class="mobile-nav-toggle mobile-nav-hide d-none ti ti-x"></i>
                    <!-- /Mobile toggle -->
                </div>
            </div>
        </div>
        <!-- /Logo & Nav -->
    </div>
</header>
<!-- /HEADER -->