@extends('layouts.app')

@section('content')
<!-- HERO -->
<section id="hero" class="hero hero-fullscreen section-mb-80">
    <div class="hero-wrapper">
        <!-- Hero video -->
        <div class="hero-video">
            <div class="video bg-video-wrapper ratio ratio-16x9">
                <video poster="{{ asset('img/hero/h1.jpg') }}" src="{{ asset('img/videos/yucatan.mp4') }}" autoplay loop playsinline muted></video>
            </div>
            <!-- Caption -->
            <div class="hero-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xl-6 col-lg-8">
                            <h2 class="hero-title">{{ __('home.hero.title') }}</h2>
                            <p class="hero-desc">{{ __('home.hero.text') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Caption -->
        </div>
        <!-- /Hero video -->
        @include('_partials.search')
    </div>
</section>
<!-- /HERO -->
<!-- CATEGORY -->
<section id="category" class="section-mb-80">
    <div class="container">
        <!-- Heading -->
        <div class="heading d-none">
            <h2 class="title">{{ __('home.category.title') }}</h2>
            <p>{{ __('home.category.text') }}</p>
        </div>
        <!-- /Heading -->
        <!-- Category list -->
        <div class="row g-1 g-md-3">
            <div class="col-6 col-xl-2 col-lg-4 col-md-4">
                <!-- Category item -->
                <a href="tour-grid.html" class="image-box d-block rounded-3 text-center">
                    <figure>
                        <img loading="lazy" src="{{ asset('img/tours/t1.jpg') }}" class="img-fluid" alt="">
                        <figcaption>{{ __('home.category.list') }}</figcaption>
                    </figure>
                </a>
                <!-- /Category item -->
            </div>
            <div class="col-6 col-xl-2 col-lg-4 col-md-4">
                <!-- Category item -->
                <a href="tour-grid.html" class="image-box d-block rounded-3 text-center">
                    <figure>
                        <img loading="lazy" src="{{ asset('img/tours/t2.jpg') }}" class="img-fluid" alt="">
                        <figcaption>{{ __('home.category.list2') }}</figcaption>
                    </figure>
                </a>
                <!-- /Category item -->
            </div>
            <div class="col-6 col-xl-2 col-lg-4 col-md-4">
                <!-- Category item -->
                <a href="tour-grid.html" class="image-box d-block rounded-3 text-center">
                    <figure>
                        <img loading="lazy" src="{{ asset('img/tours/t3.jpg') }}" class="img-fluid" alt="">
                        <figcaption>{{ __('home.category.list3') }}</figcaption>
                    </figure>
                </a>
                <!-- /Category item -->
            </div>
            <div class="col-6 col-xl-2 col-lg-4 col-md-4">
                <!-- Category item -->
                <a href="tour-grid.html" class="image-box d-block rounded-3 text-center">
                    <figure>
                        <img loading="lazy" src="{{ asset('img/tours/t4.jpg') }}" class="img-fluid" alt="">
                        <figcaption>{{ __('home.category.list4') }}</figcaption>
                    </figure>
                </a>
                <!-- /Category item -->
            </div>
            <div class="col-6 col-xl-2 col-lg-4 col-md-4">
                <!-- Category item -->
                <a href="tour-grid.html" class="image-box d-block rounded-3 text-center">
                    <figure>
                        <img loading="lazy" src="{{ asset('img/tours/t5.jpg') }}" class="img-fluid" alt="">
                        <figcaption>{{ __('home.category.list5') }}</figcaption>
                    </figure>
                </a>
                <!-- /Category item -->
            </div>
            <div class="col-6 col-xl-2 col-lg-4 col-md-4">
                <!-- See all -->
                <a href="#" data-bs-toggle="modal" data-bs-target="#mdlCategory" class="image-box d-block rounded-3 text-center see-all">
                    <figure>
                        <img loading="lazy" src="{{ asset('img/tours/t6.jpg') }}" class="img-fluid" alt="">
                        <figcaption>
                            <span>{{ __('home.see.all') }}</span>
                            <i class="ti ti-plus"></i>
                        </figcaption>
                    </figure>
                </a>
                <!-- /See all -->
            </div>
        </div>
        <!-- /Category list -->
    </div>
    <!-- Category Modal -->
    <div class="modal fade" id="mdlCategory" data-bs-keyboard="false" tabindex="-1" aria-labelledby="mdlTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mdlTitle">{{ __('home.all.categories') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Category -->
                    <div class="modal-category">
                        <a href="tour-grid.html" class="d-flex align-items-center modal-category-item">
                            <figure class="flex-shrink-0">
                                <img loading="lazy" src="{{ asset('img/tours/t1.jpg') }}" alt="...">
                            </figure>
                            <span class="flex-grow-1 ms-3">
                                {{ __('home.category.list') }}
                            </span>
                        </a>
                        <a href="tour-grid.html" class="d-flex align-items-center modal-category-item">
                            <figure class="flex-shrink-0">
                                <img loading="lazy" src="{{ asset('img/tours/t2.jpg') }}" alt="...">
                            </figure>
                            <span class="flex-grow-1 ms-3">
                                {{ __('home.category.list2') }}
                            </span>
                        </a>
                        <a href="tour-grid.html" class="d-flex align-items-center modal-category-item">
                            <figure class="flex-shrink-0">
                                <img loading="lazy" src="{{ asset('img/tours/t3.jpg') }}" alt="...">
                            </figure>
                            <span class="flex-grow-1 ms-3">
                                {{ __('home.category.list3') }}
                            </span>
                        </a>
                        <a href="tour-grid.html" class="d-flex align-items-center modal-category-item">
                            <figure class="flex-shrink-0">
                                <img loading="lazy" src="{{ asset('img/tours/t4.jpg') }}" alt="...">
                            </figure>
                            <span class="flex-grow-1 ms-3">
                                {{ __('home.category.list4') }}
                            </span>
                        </a>
                        <a href="tour-grid.html" class="d-flex align-items-center modal-category-item">
                            <figure class="flex-shrink-0">
                                <img loading="lazy" src="{{ asset('img/tours/t5.jpg') }}" alt="...">
                            </figure>
                            <span class="flex-grow-1 ms-3">
                                {{ __('home.category.list5') }}
                            </span>
                        </a>
                        <a href="tour-grid.html" class="d-flex align-items-center modal-category-item">
                            <figure class="flex-shrink-0">
                                <img loading="lazy" src="{{ asset('img/tours/t6.jpg') }}" alt="...">
                            </figure>
                            <span class="flex-grow-1 ms-3">
                                {{ __('home.category.list6') }}
                            </span>
                        </a>
                        <a href="tour-grid.html" class="d-flex align-items-center modal-category-item">
                            <figure class="flex-shrink-0">
                                <img loading="lazy" src="{{ asset('img/tours/t7.jpg') }}" alt="...">
                            </figure>
                            <span class="flex-grow-1 ms-3">
                                {{ __('home.category.list7') }}
                            </span>
                        </a>
                        <a href="tour-grid.html" class="d-flex align-items-center modal-category-item">
                            <figure class="flex-shrink-0">
                                <img loading="lazy" src="{{ asset('img/tours/t8.jpg') }}" alt="...">
                            </figure>
                            <span class="flex-grow-1 ms-3">
                                {{ __('home.category.list8') }}
                            </span>
                        </a>
                        <a href="tour-grid.html" class="d-flex align-items-center modal-category-item">
                            <figure class="flex-shrink-0">
                                <img loading="lazy" src="{{ asset('img/tours/t9.jpg') }}" alt="...">
                            </figure>
                            <span class="flex-grow-1 ms-3">
                                {{ __('home.category.list9') }}
                            </span>
                        </a>
                    </div>
                    <!-- /Category -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Category Modal -->
</section>
<!-- /CATEGORY -->
<!-- WHY -->
<section id="why" class="section-mb-80">
    <div class="container">
        <div class="why-choose">
            <div class="row align-content-stretch">
                <div class="col-12 col-lg-6">
                    <!-- Image -->
                    <div class="why-image bg-image bg-image-cover bg-image-wrapper rounded-3 h-100" data-image-src="{{ asset('img/about/a1.jpg') }}"></div>
                    <!-- /Image -->
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card border-0">
                        <div class="card-body">
                            <!-- Heading -->
                            <div class="heading">
                                <h2 class="title">{{ __('home.why.title') }}</h2>
                                <p>{{ __('home.why.text') }}</p>
                            </div>
                            <!-- /Heading -->
                            <!-- Why list -->
                            <ul class="why-list">
                                <li class="why-item">
                                    <div class="icon">
                                        <img loading="lazy" src="{{ asset('img/icons/s1.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>{{ __('home.book.title') }}</h4>
                                        <p>{{ __('home.book.text') }}</p>
                                    </div>
                                </li>
                                <li class="why-item">
                                    <div class="icon">
                                        <img loading="lazy" src="{{ asset('img/icons/s2.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>{{ __('home.price.title') }}</h4>
                                        <p>{{ __('home.price.text') }}</p>
                                    </div>
                                </li>
                                <li class="why-item">
                                    <div class="icon">
                                        <img loading="lazy" src="{{ asset('img/icons/s3.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>{{ __('home.support.title') }}</h4>
                                        <p>{{ __('home.support.text') }}</p>
                                    </div>
                                </li>
                            </ul>
                            <!-- /Why list -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /WHY -->
<!-- ADVENTRURE -->
<section id="sight" class="section-mb-80">
    <div class="bg-image-wrapper bg-image bg-image-overlay bg-image-overlay-900 section-pt-100 section-pb-100 light-content" data-image-src="{{ asset('img/about/yucatan.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-3">
                    <!-- Heading -->
                    <div class="heading">
                        <h2 class="title">{{ __('home.explore.title') }}</h2>
                        <p>{{ __('home.explore.text') }}</p>
                    </div>
                    <!-- /Heading -->
                </div>
                <div class="col-12 col-xl-9">
                    <!-- Style list -->
                    <div class="adventure-list">
                        <div class="row g-3 g-md-4">
                            <div class="col-12 col-xl-4 col-lg-4 col-md-12">
                                <!-- Style item -->
                                <div class="card border-white adventure-item">
                                    <figure class="rounded-top-3 overflow-hidden">
                                        <a href="tour-grid.html">
                                            <img loading="lazy" src="{{ asset('img/tours/t10.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                    </figure>
                                    <div class="card-body p-3 p-sm-4">
                                        <h3 class="card-title">
                                            <a href="tour-grid.html">{{ __('home.explore.grid.title') }}</a>
                                        </h3>
                                        <p>{{ __('home.explore.grid.text') }}</p>
                                        <a href="tour-grid.html" class="detail-link">
                                            <span>{{ __('home.explore') }}</span>
                                            <i class="ti ti-arrow-narrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- /Style item -->
                            </div>
                            <div class="col-12 col-xl-4 col-lg-4 col-md-6">
                                <!-- Style item -->
                                <div class="card border-white adventure-item">
                                    <figure class="rounded-top-3 overflow-hidden">
                                        <a href="tour-grid.html">
                                            <img loading="lazy" src="{{ asset('img/tours/t11.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                    </figure>
                                    <div class="card-body p-3 p-sm-4">
                                        <h3 class="card-title"><a href="tour-grid.html">{{ __('home.explore.grid.title2') }}</a> </h3>
                                        <p>{{ __('home.explore.grid.text2') }}</p>
                                        <a href="tour-grid.html" class="detail-link">
                                            <span>{{ __('home.explore') }}</span>
                                            <i class="ti ti-arrow-narrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- /Style item -->
                            </div>
                            <div class="col-12 col-xl-4 col-lg-4 col-md-6">
                                <!-- Style item -->
                                <div class="card border-white adventure-item">
                                    <figure class="rounded-top-3 overflow-hidden">
                                        <a href="tour-grid.html">
                                            <img loading="lazy" src="{{ asset('img/tours/t12.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                    </figure>
                                    <div class="card-body p-3 p-sm-4">
                                        <h3 class="card-title"><a href="tour-grid.html">{{ __('home.explore.grid.title3') }}</a></h3>
                                        <p>{{ __('home.explore.grid.text3') }}</p>
                                        <a href="tour-grid.html" class="detail-link">
                                            <span>{{ __('home.explore') }}</span>
                                            <i class="ti ti-arrow-narrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- /Style item -->
                            </div>
                        </div>
                    </div>
                    <!-- /Style list -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /ADVENTRURE -->
<!-- COUNTRIES -->
<section id="country" class="section-mb-80">
    <div class="container">
        <!-- Heading -->
        <div class="d-md-flex align-items-md-center justify-content-md-between">
            <div class="heading mb-2">
                <h2 class="title">{{ __('home.top.title') }}</h2>
                <p>{{ __('home.top.text') }}</p>
            </div>
            <!--a href="destination.html" class="d-inline-block mb-4 pb-2">
                <span>All countries</span>
                <i class="ti ti-arrow-narrow-right"></i>
            </a-->
        </div>
        <!-- /Heading -->
        <!-- City list -->
        <div class="row g-2 g-lg-3">
            <div class="col-12 col-xl-4 col-lg-6 col-md-6">
                <a href="country.html" class="overlay-image-box rounded-3 text-center">
                    <span class="image bg-image bg-image-wrapper bg-image-cover" data-image-src="{{ asset('img/destinations/cocobongo.jpeg') }}"></span>
                    <h3 class="name h5">Cancun</h3>
                    <p class="tour">Cocobongo</p>
                </a>
            </div>
            <div class="col-6 col-xl-2 col-lg-3 col-md-3">
                <a href="country.html" class="overlay-image-box rounded-3 text-center">
                    <span class="image bg-image bg-image-wrapper bg-image-cover" data-image-src="{{ asset('img/destinations/izamal.jpeg') }}"></span>
                    <h3 class="name h5">Merida </h3>
                    <p class="tour">Izamal</p>
                </a>
            </div>
            <div class="col-6 col-xl-2 col-lg-3 col-md-3">
                <a href="country.html" class="overlay-image-box rounded-3 text-center">
                    <span class="image bg-image bg-image-wrapper bg-image-cover" data-image-src="{{ asset('img/destinations/coloradas.jpeg') }}"></span>
                    <h3 class="name h5">Yucatan </h3>
                    <p class="tour">Las Coloradas</p>
                </a>
            </div>
            <div class="col-12 col-xl-4 col-lg-6 col-md-6">
                <a href="country.html" class="overlay-image-box rounded-3 text-center">
                    <span class="image bg-image bg-image-wrapper bg-image-cover" data-image-src="{{ asset('img/destinations/cenote.webp') }}"></span>
                    <h3 class="name h5">Valladolid </h3>
                    <p class="tour">Cenote</p>
                </a>
            </div>
            <div class="col-6 col-xl-2 col-lg-3 col-md-3">
                <a href="country.html" class="overlay-image-box rounded-3 text-center">
                    <span class="image bg-image bg-image-wrapper bg-image-cover" data-image-src="{{ asset('img/destinations/pyramid.webp') }}"></span>
                    <h3 class="name h5">Yucatan </h3>
                    <p class="tour">Chichen Itza</p>
                </a>
            </div>
            <div class="col-6 col-xl-2 col-lg-3 col-md-3">
                <a href="country.html" class="overlay-image-box rounded-3 text-center">
                    <span class="image bg-image bg-image-wrapper bg-image-cover" data-image-src="{{ asset('img/destinations/progreso.jpeg') }}"></span>
                    <h3 class="name h5">Yucatan </h3>
                    <p class="tour">Progreso</p>
                </a>
            </div>
            <div class="col-12 col-xl-4 col-lg-6 col-md-6">
                <a href="country.html" class="overlay-image-box rounded-3 text-center">
                    <span class="image bg-image bg-image-wrapper bg-image-cover" data-image-src="{{ asset('img/destinations/mujeres.webp') }}"></span>
                    <h3 class="name h5">Yucatan </h3>
                    <p class="tour">Isla Mujeres</p>
                </a>
            </div>
            <div class="col-6 col-xl-2 col-lg-3 col-md-3">
                <a href="country.html" class="overlay-image-box rounded-3 text-center">
                    <span class="image bg-image bg-image-wrapper bg-image-cover" data-image-src="{{ asset('img/destinations/holbox.jpeg') }}"></span>
                    <h3 class="name h5">Yucatan </h3>
                    <p class="tour">Holbox</p>
                </a>
            </div>
            <div class="col-6 col-xl-2 col-lg-3 col-md-3">
                <a href="country.html" class="overlay-image-box rounded-3 text-center">
                    <span class="image bg-image bg-image-wrapper bg-image-cover" data-image-src="{{ asset('img/destinations/xcaret.jpeg') }}"></span>
                    <h3 class="name h5">Cancun </h3>
                    <p class="tour">Xcaret</p>
                </a>
            </div>
        </div>
        <!-- /City list -->
    </div>
</section>
<!-- /COUNTRIES -->
<!-- CITIES -->
<!--section id="cities" class="section-mb-80">
    <div class="container">
        <div class="heading">
            <h2 class="title">Attractive European cities</h2>
            <p>Europe tours are chosen by many tourists</p>
        </div>
        <div class="popular-city">
            <ul class="list-unstyled fs-6 fw-bold-1 mb-0">
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">15</span>
                        <span class="input-group-text bg-white">Rome</span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">48</span>
                        <span class="input-group-text bg-white">Barcelona</span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">35</span>
                        <span class="input-group-text bg-white">Paris</span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">32</span>
                        <span class="input-group-text bg-white">Istanbul</span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">36</span>
                        <span class="input-group-text bg-white">Venice</span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">14</span>
                        <span class="input-group-text bg-white">Monaco</span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">29</span>
                        <span class="input-group-text bg-white">Florence</span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">44</span>
                        <span class="input-group-text bg-white">Budapest</span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">28</span>
                        <span class="input-group-text bg-white">Prague</span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">32</span>
                        <span class="input-group-text bg-white">United Kingdom</span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">72</span>
                        <span class="input-group-text bg-white">Madrid</span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">81</span>
                        <span class="input-group-text bg-white">London</span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">31</span>
                        <span class="input-group-text bg-white">Lisbon</span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">62</span>
                        <span class="input-group-text bg-white">Munich</span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">37</span>
                        <span class="input-group-text bg-white">Verona </span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">19</span>
                        <span class="input-group-text bg-white">Vienna </span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">44</span>
                        <span class="input-group-text bg-white">Salzburg </span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">27</span>
                        <span class="input-group-text bg-white">Granada </span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">54</span>
                        <span class="input-group-text bg-white">Athens </span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">71</span>
                        <span class="input-group-text bg-white">Berlin </span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">42</span>
                        <span class="input-group-text bg-white">Porto </span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">45</span>
                        <span class="input-group-text bg-white">Amsterdam </span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">23</span>
                        <span class="input-group-text bg-white">Fira </span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">57</span>
                        <span class="input-group-text bg-white">San Sebastian </span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">21</span>
                        <span class="input-group-text bg-white">Valencia </span>
                    </a>
                </li>
                <li class="list-inline-item me-1 mb-2">
                    <a href="city.html" class="input-group">
                        <span class="input-group-text bg-white">28</span>
                        <span class="input-group-text bg-white">Dublin </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section-->
<!-- /CITIES -->
<!-- VIDEO -->
<section id="video" class="section-mb-80">
    <div class="bg-image-wrapper bg-image bg-image-overlay bg-image-overlay-800 light-content section-pt-120 section-pb-200" data-image-src="{{ asset('img/about/cancun.webp') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-6 col-lg-8 col-md-10">
                    <div class="video-box-content text-center">
                        <!-- Heading -->
                        <div class="heading">
                            <h2 class="title">{{ __('home.vid.title') }}</h2>
                            <p>{{ __('home.vid.text') }}</p>
                        </div>
                        <!-- /Heading -->
                        <!-- Video button -->
                        <a class="video-play-button media-glightbox" href="{{ asset('img/videos/yucatan.mp4') }}"><span></span></a>
                        <!-- /Video button -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /VIDEO -->
<!-- TOURS -->
<section id="tour" class="section-mb-80">
    <div class="container">
        <!-- Heading -->
        <div class="heading">
            <h2 class="title">@lang('home.top.tour.title')</h2>
            <p>@lang('home.top.tour.p')</p>
        </div>
        <!-- /Heading -->
        <!-- Tour list -->
        <div class="tour-grid">
            <div class="swiper tour-swiper">
                <!-- Tour list -->
                <div class="swiper-wrapper">
                    @foreach ($tours as $tour)
                        <div class="swiper-slide">
                            <!-- Tour item -->
                            <div class="card tour-item border-0">
                                <div class="card-body p-0">
                                    <div class="tour-image">
                                        <a href="single-tour.html" class="d-block">
                                            <figure class="rounded-3 overflow-hidden position-relative">
                                                <img loading="lazy" src="{{ asset($tour->main_image) }}" class="img-fluid" alt="{{ ($lang == $config::LANG_ES) ? $tour->name_es : $tour->name_en }}">
                                                <figcaption>{{  $tour->typeTour }}</figcaption>
                                            </figure>
                                        </a>
                                        <span class="tour-sticker {{ $tour->colorType }}">{{ ($lang == $config::LANG_ES) ?  json_decode($tour->tag_es)[0] : json_decode($tour->tag_en)[0] }}</span>
                                        <a href="javascript:;" class="tour-like"><i class="ti ti-heart"></i></a>
                                    </div>
                                    <div class="tour-content p-3">
                                        <div class="tour-duration-location">
                                            <span>{{  ($lang == $config::LANG_ES) ? $tour->days_range_es : $tour->days_range_en }}</span> -
                                            <a href="city.html">{{  $tour->location->name . ' '. Config::get('app.currency') }}</a>
                                        </div>
                                        <h3 class="tour-title">
                                            <a href="single-tour.html">{{  ($lang == $config::LANG_ES) ? $tour->name_es : $tour->name_en }}</a>
                                        </h3>
                                        <div class="tour-review">
                                            <div class="tour-star-rate">
                                                <span class="star-rate-view size-16"><span class="star-value {{ $tour->rate }}"></span></span>
                                            </div>
                                            @if ($tour->reviews > 0)
                                                <span class="tour-review-number"><span>({{ number_format($tour->reviews) }} reviews)</span></span>
                                            @else
                                                <span class="tour-review-number"><span>({{ number_format($tour->fakeReviews) }} reviews)</span></span>
                                            @endif
                                            
                                        </div>
                                        <div class="tour-price">           
                                            @if ($tour->priceDiscount > 0)
                                                <div class="new-price text-danger">
                                                    <span>@lang('home.top.tour.from')</span>
                                                    <strong><sup>$</sup>{{ number_format($tour->priceDiscount * $config->currency(Config::get('app.currency'))) . ' ' .$config->currencyString(Config::get('app.currency')) }}</strong>
                                                </div>
                                                <div class="old-price">
                                                    <del class="ms-2 text-muted"><sup>$</sup>{{ number_format($tour->price * $config->currency(Config::get('app.currency'))) . ' ' .$config->currencyString(Config::get('app.currency')) }}</del>
                                                </div>
                                            @else
                                                <div class="new-price text-danger">
                                                    <span>@lang('home.top.tour.from')</span>
                                                    <strong><sup>$</sup>{{ number_format($tour->price * $config->currency(Config::get('app.currency'))) . ' ' .$config->currencyString(Config::get('app.currency')) }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tour item -->
                        </div>  
                    @endforeach
                </div>
                <!-- /Post list -->
                <!-- Dots -->
                <div class="circle-prev swiper-button-prev tour-prev"></div>
                <div class="circle-next swiper-button-next tour-next"></div>
                <div class="swiper-pagination tour-dot bottom-0"></div>
                <!-- Dots -->
            </div>
        </div>
        <!-- /Tour list -->
    </div>
</section>
<!-- /TOURS -->
<!-- REVIEWS -->
<section id="review" class="section-mb-80">
    <div class="container">
        <div class="top-review card bg-primary-lighter border-0 p-0 p-xl-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-xl-4">
                        <!-- Heading & Button -->
                        <div class="heading">
                            <h2 class="title">@lang('home.testimonial.title')</h2>
                            <p>@lang('home.testimonial.p')</p>
                        </div>
                        <div class="mb-4 pb-3">
                            <a href="#mdlReview" data-bs-toggle="modal" class="btn btn-lg btn-outline-primary">@lang('home.testimonial.button')<i class="ti ti-arrow-narrow-right"></i></a>
                        </div>
                        <!-- /Heading & Button -->
                    </div>
                    <div class="col-12 col-xl-8">
                        <!-- Review list -->
                        <div class="swiper review-swiper">
                            <div class="swiper-wrapper">
                                @foreach ($testimonials as $testimonial)
                                    <div class="swiper-slide">
                                        <!-- Review item -->
                                        <div class="card border-0">
                                            <div class="card-body d-flex review-content">
                                                <figure>
                                                    <img loading="lazy" src="{{ asset('img/avatars/a1.jpg') }}" alt="" class="rounded-circle">
                                                </figure>
                                                <div class="ps-3">
                                                    <blockquote>
                                                        <em>{{  $testimonial->testimonial }}</em>
                                                    </blockquote>
                                                    <span class="d-block mb-2">
                                                        <span class="star-rate-view size-16"><span class="star-value {{ $testimonial->rate }}"></span></span>
                                                    </span>
                                                    <span class="blockquote-footer mt-0 mb-0">
                                                        {{ $testimonial->name }} ({{  $testimonial->location }})
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Review item -->
                                    </div>
                                @endforeach
                            </div>
                            <!-- Navs & Dots -->
                            <div class="swiper-pagination review-dot"></div>
                            <!-- Navs & Dots -->
                        </div>
                        <!-- /Review list -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Review Modal -->
    <div class="modal fade" id="mdlReview" data-bs-keyboard="false" tabindex="-1" aria-labelledby="mdlReviewTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mdlReviewTitle">Top Traveler Reviews</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Review list -->
                    <div class="review-list">
                        <div class="row g-4">
                            <div class="col-12">
                                <!-- Review item -->
                                <div class="card">
                                    <div class="card-body d-flex review-content">
                                        <figure>
                                            <img loading="lazy" src="{{ asset('img/avatars/a3.jpg') }}" alt="" class="rounded-circle">
                                        </figure>
                                        <div class="ps-3">
                                            <blockquote>
                                                <em>You meet outside a souvenir shop where you are given your tickets. You go through security and go to the 2nd floor where you are given a lovely history lesson about Paris.</em>
                                            </blockquote>
                                            <span class="d-block mb-2">
                                                <span class="star-rate-view size-16"><span class="star-value rate-45"></span></span>
                                            </span>
                                            <span class="blockquote-footer mt-0 mb-0">
                                                Michael Owen (London, England)
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Review item -->
                            </div>
                            @foreach ($testimonials as $testimonial)
                                <div class="col-12">
                                    <!-- Review item -->
                                    <div class="card">
                                        <div class="card-body d-flex review-content">
                                            <figure>
                                                <img loading="lazy" src="{{ asset('img/avatars/a2.jpg') }}" alt="" class="rounded-circle">
                                            </figure>
                                            <div class="ps-3">
                                                <blockquote>
                                                    <em>{{ $testimonial->testimonial }}</em>
                                                </blockquote>
                                                <span class="d-block mb-2">
                                                    <span class="star-rate-view size-16"><span class="star-value {{ $testimonial->rate }}"></span></span>
                                                </span>
                                                <span class="blockquote-footer mt-0 mb-0">
                                                    {{ $testimonial->name }} ({{ $testimonial->location }})
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Review item -->
                                </div>  
                            @endforeach
                        </div>
                    </div>
                    <!-- /Review -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Review Modal -->
</section>
<!-- /REVIEWS -->
<!-- INFO-->
<section id="info" class="section-mb-80">
    <div class="container">
        <!-- Heading -->
        <div class="heading">
            <h2 class="title">@lang('home.information.title')</h2>
            <p>@lang('home.information.p')</p>
        </div>
        <!-- /Heading -->
        <!-- Blog mini -->
        <div class="blog-mini">
            <div class="row">
                <div class="col-12 col-xl-4 col-lg-6 col-md-12">
                    <!-- Post -->
                    <a href="single-post.html" class="d-flex align-items-center blog-post mb-4">
                        <div class="flex-shrink-0 post-image overflow-hidden rounded-3">
                            <figure>
                                <img loading="lazy" src="{{ asset('img/blog/b7.jpg') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="post-content flex-grow-1 p-3">
                            <h3 class="post-title">
                                Best Places to Stay Overlooking the Eiffel Tower of Paris
                            </h3>
                            <div class="post-date">
                                <span>Jan 20 2022</span>
                            </div>
                        </div>
                    </a>
                    <!-- /Post -->
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-md-12">
                    <!-- Post -->
                    <a href="single-post.html" class="d-flex align-items-center blog-post mb-4">
                        <div class="flex-shrink-0 post-image overflow-hidden rounded-3">
                            <figure>
                                <img loading="lazy" src="{{ asset('img/blog/b9.jpg') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="post-content flex-grow-1 p-3">
                            <h3 class="post-title">
                                What are The Most Famous Bridges in France?
                            </h3>
                            <div class="post-date">
                                <span>Jan 20 2022</span>
                            </div>
                        </div>
                    </a>
                    <!-- /Post -->
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-md-12">
                    <!-- Post -->
                    <a href="single-post.html" class="d-flex align-items-center blog-post mb-4">
                        <div class="flex-shrink-0 post-image overflow-hidden rounded-3">
                            <figure>
                                <img loading="lazy" src="{{ asset('img/blog/b8.jpg') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="post-content flex-grow-1 p-3">
                            <h3 class="post-title">
                                The Best 11 Free Tours in Paris in English and for FREE!
                            </h3>
                            <div class="post-date">
                                <span>Jan 20 2022</span>
                            </div>
                        </div>
                    </a>
                    <!-- /Post -->
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-md-12">
                    <!-- Post -->
                    <a href="single-post.html" class="d-flex align-items-center blog-post mb-4">
                        <div class="flex-shrink-0 post-image overflow-hidden rounded-3">
                            <figure>
                                <img loading="lazy" src="{{ asset('img/blog/b10.jpg') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="post-content flex-grow-1 p-3">
                            <h3 class="post-title">
                                All you need to know about the champagne in France!
                            </h3>
                            <div class="post-date">
                                <span>Jan 20 2022</span>
                            </div>
                        </div>
                    </a>
                    <!-- /Post -->
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-md-12">
                    <!-- Post -->
                    <a href="single-post.html" class="d-flex align-items-center blog-post mb-4">
                        <div class="flex-shrink-0 post-image overflow-hidden rounded-3">
                            <figure>
                                <img loading="lazy" src="{{ asset('img/blog/b11.jpg') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="post-content flex-grow-1 p-3">
                            <h3 class="post-title">
                                all about this beautiful flower village in the south of France!
                            </h3>
                            <div class="post-date">
                                <span>Jan 20 2022</span>
                            </div>
                        </div>
                    </a>
                    <!-- Post -->
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-md-12">
                    <!-- Post -->
                    <a href="single-post.html" class="d-flex align-items-center blog-post mb-4">
                        <div class="flex-shrink-0 post-image overflow-hidden rounded-3">
                            <figure>
                                <img loading="lazy" src="{{ asset('img/blog/b12.jpg') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="post-content flex-grow-1 p-3">
                            <h3 class="post-title">
                                Lyon to Marseille - The Perfect South of France Itinerary
                            </h3>
                            <div class="post-date">
                                <span>Jan 20 2022</span>
                            </div>
                        </div>
                    </a>
                    <!-- /Post -->
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-md-12">
                    <!-- Post -->
                    <a href="single-post.html" class="d-flex align-items-center blog-post mb-4">
                        <div class="flex-shrink-0 post-image overflow-hidden rounded-3">
                            <figure>
                                <img loading="lazy" src="{{ asset('img/blog/b16.jpg') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="post-content flex-grow-1 p-3">
                            <h3 class="post-title">
                                7 Best Panoramic Views of the Paris Skyline
                            </h3>
                            <div class="post-date">
                                <span>Jan 20 2022</span>
                            </div>
                        </div>
                    </a>
                    <!-- /Post -->
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-md-12">
                    <!-- Post -->
                    <a href="single-post.html" class="d-flex align-items-center blog-post mb-4">
                        <div class="flex-shrink-0 post-image overflow-hidden rounded-3">
                            <figure>
                                <img loading="lazy" src="{{ asset('img/blog/b15.jpg') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="post-content flex-grow-1 p-3">
                            <h3 class="post-title">
                                The Complete Guide to Parisian Lifestyle
                            </h3>
                            <div class="post-date">
                                <span>Jan 20 2022</span>
                            </div>
                        </div>
                    </a>
                    <!-- /Post -->
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-md-12">
                    <!-- Post -->
                    <a href="single-post.html" class="d-flex align-items-center blog-post mb-4">
                        <div class="flex-shrink-0 post-image overflow-hidden rounded-3">
                            <figure>
                                <img loading="lazy" src="{{ asset('img/blog/b14.jpg') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="post-content flex-grow-1 p-3">
                            <h3 class="post-title">
                                10 Best Free Things To Do in Paris, Nice, Lion
                            </h3>
                            <div class="post-date">
                                <span>Jan 20 2022</span>
                            </div>
                        </div>
                    </a>
                    <!-- Post -->
                </div>
            </div>
        </div>
        <!-- /Blog mini -->
    </div>
</section>
<!-- /INFO-->
<!-- SIGNUP -->
<section id="signup" class="section-mb-80">
    <div class="container">
        <div class="signup-email card border-0 bg-primary-lighter">
            <div class="card-body p-0">
                <div class="row align-content-stretch g-0">
                    <div class="col-12 col-lg-6">
                        <!-- Image -->
                        <div class="signup-image bg-image bg-image-cover bg-image-wrapper h-100" data-image-src="{{ asset('img/about/a6.jpg') }}"></div>
                        <!-- /Image -->
                    </div>
                    <div class="col-12 col-lg-6">
                        <!-- Content -->
                        <div class="signup-content p-4 m-0 m-xl-3">
                            <div class="heading">
                                <h2 class="title">@lang('home.newsletter.title')</h2>
                                <p>@lang('home.newsletter.p')</p>
                            </div>
                            <div class="input-group input-group-lg mb-4">
                                <input type="text" class="form-control" placeholder="Ex: yourname@example.com" aria-label="Your Email">
                                <button class="btn btn-primary" type="button">@lang('home.newsletter.sign')</button>
                            </div>
                            <p class="signup-note">
                                Note: <em>@lang('home.newsletter.note')</em>
                            </p>
                        </div>
                        <!-- /Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /SIGNUP -->
<script style="text/javascript">

    //set initial state.
    document.getElementById("roundTrip").checked = true;
    document.getElementById("labelRoundTrip").innerHTML = "{{ __('search.roundTrip') }}";

    function onToggle() {
        // check if checkbox is checked
        if (document.getElementById("roundTrip").checked) {
            document.getElementById("labelRoundTrip").innerHTML = "{{ __('search.roundTrip') }}";
            document.getElementById("dynamicTrip").style.display = "block";
        } else {
            document.getElementById("labelRoundTrip").innerHTML = "{{ __('search.singleTrip') }}";
            document.getElementById("dynamicTrip").style.display = "none";
        }
    }
</script>
@endsection