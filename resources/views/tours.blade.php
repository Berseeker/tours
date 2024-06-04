@extends('layouts.app')

@section('content')

<style>
    .check-tour:not(.check-tour-static) {
        position: initial !important;
    }
</style>

<section id="check" class="bg-primary-darker pt-3 pb-3" style="margin-top: 100px;">
    @include('_partials.search')                
</section>
 <!-- TITLE -->
 <section id="title" class="pt-4">
    <!-- Title -->
    <div class="page-title">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Tours</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Explorer & Adventure</li>
                </ol>
            </nav>
            <div class="heading">
                <h1 class="title fs-1">{{ $location }} Tours</h1>
            </div>
        </div>
    </div>
    <!-- /Title -->
</section>
<!-- /TITLE -->
<!-- TOURS -->
<section id="tour" class="section-mb-80">
    <div class="container">
        <!-- Heading & Filtered -->
        <div class="d-block d-xl-flex align-items-center justify-content-between mb-3">
            <!-- Filtered -->
            <div class="filtered-item pb-3">
                <ul class="list-inline d-inline-block fs-7 mb-0">
                    <li class="list-inline-item">
                        <h2 class="d-inline fs-6">{{ count($tours) }} tours</h2>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="ti ti-x"></i><span>{{ $location }}</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <span class="text-secondary">|</span>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="ti ti-x"></i><span>{{ $type_tour }}</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Filtered -->
            <!-- Filter & Sort -->
            <div class="tour-filter b-block d-md-flex align-items-center">
                <div class="d-flex align-items-center me-0 me-md-2 mb-3 tour-sort flex-fill">
                    <span class="me-2 d-none d-sm-inline">Sort by:</span>
                    <select class="custom-select form-select dropdown flex-grow-1 shadow-sm" id="ddCategory">
                        <option value="0">Recommended</option>
                        <option value="1">Price - Low to high</option>
                        <option value="2">Price - High to low</option>
                        <option value="3">High Rating</option>
                        <option value="4">Recently Posted</option>
                    </select>
                </div>
                <div class="d-flex align-items-center flex-fill">
                    <a href="tour-list.html" class="btn btn-outline-gray mb-3 btn-tour-view me-2 flex-fill d-none shadow-sm">
                        <i class="ti ti-list-details"></i>
                        <span>List</span>
                    </a>
                    <a href="tour-grid.html" class="btn btn-outline-gray mb-3 btn-tour-view flex-fill shadow-sm">
                        <i class="ti ti-layout-grid"></i>
                        <span>Grid</span>
                    </a>
                </div>
            </div>
            <!-- /Filter & Sort -->
        </div>
        <!-- /Heading & Filtered -->
        <!-- Tour -->
        <div class="tour-list">
            <div class="row">
                <div class="col-12 col-xl-9">
                    <!-- Tour list -->
                    <div class="tour-grid by-list">
                        <div class="row">
                            @foreach ($tours as $tour)
                                <div class="col-12">
                                    <!-- Tour item -->
                                    <div class="card tour-item border-0 mb-4 rounded-0">
                                        <div class="card-body p-0">
                                            <div class="tour-image">
                                                <a href="single-tour.html" class="d-block">
                                                    <figure class="rounded-3 overflow-hidden position-relative">
                                                        <img loading="lazy" src="{{ asset($tour['main_image']) }}" class="img-fluid" alt="">
                                                        <figcaption>{{ $tour['type_tour'] }}</figcaption>
                                                    </figure>
                                                </a>
                                                <span class="tour-sticker">{{ $tour['tag_lang'] }}</span>
                                                <a href="javascript:;" class="tour-like"><i class="ti ti-heart"></i></a>
                                            </div>
                                            <div class="tour-content p-3 p-md-4">
                                                <div class="tour-duration-location">
                                                    <span>{{ $tour['day_range_lang'] }}</span></a>
                                                </div>
                                                <h3 class="tour-title">
                                                    <a href="single-tour.html">{{ $tour['name_lang'] }}</a>
                                                </h3>
                                                <div class="tour-review">
                                                    <div class="tour-star-rate">
                                                        <span class="star-rate-view size-16"><span class="star-value {{ $tour['rate'] }}"></span></span>
                                                    </div>
                                                    <span class="tour-review-number"><span>({{ number_format($tour['fake_reviews']) }} reviews)</span></span>
                                                </div>
                                                <div class="tour-price">
                                                    
                                                    @if ($tour['discount'] > 0)
                                                        <div class="new-price text-danger">
                                                            <span>@lang('home.top.tour.from')</span>
                                                            <strong><sup>$</sup>{{ number_format($tour['price'] * $config->currency(Config::get('app.currency'))) . ' ' .$config->currencyString(Config::get('app.currency')) }}</strong>
                                                        </div>
                                                        <div class="old-price">
                                                            <del class="ms-2 text-muted"><sup>$</sup>{{ number_format($tour['price_discount'] * $config->currency(Config::get('app.currency'))) . ' ' .$config->currencyString(Config::get('app.currency')) }}</del>
                                                        </div>
                                                    @else
                                                        <div class="new-price text-danger">
                                                            <span>@lang('home.top.tour.from')</span>
                                                            <strong><sup>$</sup>{{ number_format($tour['price'] * $config->currency(Config::get('app.currency'))) . ' ' .$config->currencyString(Config::get('app.currency')) }}</strong>
                                                        </div>
                                                    @endif
                                                </div>
                                                @if ($tour['free_cancelation'])
                                                    <div class="tour-ext">
                                                        <span>Free cancellation / English, France</span>
                                                    </div> 
                                                @endif
                                                <div class="tour-detail mt-3">
                                                    <a href="single-tour.html" class="btn btn-outline-primary">
                                                        <span>Ver Tour</span> <i class="ti ti-arrow-narrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Tour item -->
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /Tour list -->
                    <!-- Button -->
                    <!--div class="mt-4 pt-2 text-center">
                        <nav aria-label="...">
                            <ul class="pagination pagination-lg mb-0">
                                <li class="page-item prev disabled">
                                    <a class="page-link"><i class="ti ti-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item" aria-current="page"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item prev">
                                    <a class="page-link" href="#"><i class="ti ti-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div-->
                    <!-- /Button -->
                </div>
                <div class="col-12 col-xl-3">
                    <!-- Filter -->
                    <div class="tour-filter-group">
                        <!-- Filter Options -->
                        <div class="accordion accordion-flush" id="acdFilterTourGroup1">
                            <!-- Filter by Time-->
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="tourGroupHeading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tourGroup1" aria-expanded="true" aria-controls="tourGroup1">
                                        Time
                                    </button>
                                </h5>
                                <div id="tourGroup1" class="accordion-collapse collapse show" aria-labelledby="tourGroupHeading1">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat1">
                                                    <label class="form-check-label" for="chkCat1">In the morning, 8 AM-12 PM</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat2">
                                                    <label class="form-check-label" for="chkCat2">In the afternoon, 12 PM-5 PM</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat3">
                                                    <label class="form-check-label" for="chkCat3">In the evening, 5 PM-12 AM</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Filter by Time-->
                            <!-- Filter by Category -->
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="tourGroupHeading2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tourGroup2" aria-expanded="true" aria-controls="tourGroup2">
                                        Categories
                                    </button>
                                </h5>
                                <div id="tourGroup2" class="accordion-collapse collapse show" aria-labelledby="tourGroupHeading2">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat11">
                                                    <label class="form-check-label" for="chkCat11">Ecotourism & Resort</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat21">
                                                    <label class="form-check-label" for="chkCat21">Cultural & Foods</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat31">
                                                    <label class="form-check-label" for="chkCat31">Explorer & Adventure</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat41">
                                                    <label class="form-check-label" for="chkCat41">Festival & Events</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat51">
                                                    <label class="form-check-label" for="chkCat51">Museums & Exhibitions</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat61">
                                                    <label class="form-check-label" for="chkCat61">Hiking & Trekking</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat71">
                                                    <label class="form-check-label" for="chkCat71">Motor & Bicycles</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat81">
                                                    <label class="form-check-label" for="chkCat81">Ships & boats</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat91">
                                                    <label class="form-check-label" for="chkCat91">Family Activities</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Filter by Category -->
                            <!-- Filter by Cities -->
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="tourGroupHeading3">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tourGroup3" aria-expanded="true" aria-controls="tourGroup3">
                                        Cities
                                    </button>
                                </h5>
                                <div id="tourGroup3" class="accordion-collapse collapse show" aria-labelledby="tourGroupHeading3">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat112">
                                                    <label class="form-check-label" for="chkCat11">Paris</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat212">
                                                    <label class="form-check-label" for="chkCat212">Nice</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat312">
                                                    <label class="form-check-label" for="chkCat312">Bordeaux</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat412">
                                                    <label class="form-check-label" for="chkCat412">Marseille</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat512">
                                                    <label class="form-check-label" for="chkCat512">Cannes</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat612">
                                                    <label class="form-check-label" for="chkCat612">Monaco</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat812">
                                                    <label class="form-check-label" for="chkCat812">Lyon</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat912">
                                                    <label class="form-check-label" for="chkCat912">Geneva</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat932">
                                                    <label class="form-check-label" for="chkCat932">Saint-Émilion</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Filter by Cities -->
                            <!-- Filter by Price -->
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="tourGroupHeading4">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tourGroup4" aria-expanded="true" aria-controls="tourGroup4">
                                        Price
                                    </button>
                                </h5>
                                <div id="tourGroup4" class="accordion-collapse collapse show" aria-labelledby="tourGroupHeading4">
                                    <div class="accordion-body">
                                        <div class="price-range" data-range-price="">
                                            <div class="row price-input">
                                                <div class="col-6">
                                                    <label for="txtMinPrice" class="form-label">Min price</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text bg-white">$</span>
                                                        <input type="number" class="form-control input-min shadow-sm" aria-label="Min price" value="0" id="txtMinPrice">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="txtMaxPrice" class="form-label">Max price</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text bg-white">$</span>
                                                        <input type="number" class="form-control input-max shadow-sm" aria-label="Max price" value="2500" id="txtMaxPrice">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-slider">
                                                <div class="slider">
                                                    <div class="progress"></div>
                                                </div>
                                                <div class="range-input">
                                                    <input type="range" class="range-min" min="0" max="2500" value="0" step="10">
                                                    <input type="range" class="range-max" min="0" max="2500" value="2500" step="10">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Filter by Price -->
                            <!-- Filter by Duration -->
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="tourGroupHeading6">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tourGroup6" aria-expanded="true" aria-controls="tourGroup6">
                                        Duration
                                    </button>
                                </h5>
                                <div id="tourGroup6" class="accordion-collapse collapse show" aria-labelledby="tourGroupHeading6">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat119">
                                                    <label class="form-check-label" for="chkCat119">
                                                        0 - 1 Hour
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat219">
                                                    <label class="form-check-label" for="chkCat219">
                                                        1 - 2 Hours
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat319">
                                                    <label class="form-check-label" for="chkCat319">
                                                        2 - 5 Hours
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat419">
                                                    <label class="form-check-label" for="chkCat419">
                                                        5 Hours - 1 day
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat519">
                                                    <label class="form-check-label" for="chkCat519">
                                                        1 - 3 days
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat619">
                                                    <label class="form-check-label" for="chkCat619">
                                                        3 - 5 days
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Filter by Departs from -->
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="tourGroupHeading7">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tourGroup7" aria-expanded="true" aria-controls="tourGroup3">
                                        Departs from
                                    </button>
                                </h5>
                                <div id="tourGroup7" class="accordion-collapse collapse show" aria-labelledby="tourGroupHeading7">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat114">
                                                    <label class="form-check-label" for="chkCat114">Paris</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat214">
                                                    <label class="form-check-label" for="chkCat214">Nice</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat414">
                                                    <label class="form-check-label" for="chkCat414">Marseille</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat614">
                                                    <label class="form-check-label" for="chkCat614">Monaco</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat814">
                                                    <label class="form-check-label" for="chkCat814">Lyon</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="chkCat914">
                                                    <label class="form-check-label" for="chkCat914">Geneva</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Filter by Departs from -->
                        </div>
                        <!-- Filter Options -->
                        <!-- Button -->
                        <div class="pt-4 border-top">
                            <div class="d-flex align-items-center pt-2">
                                <button type="submit" class="btn btn-primary btn-lg">Apply filters</button>
                                <button type="reset" class="btn btn-link btn-lg text-decoration-none text-secondary">Clear all</button>
                            </div>
                        </div>
                        <!-- Button -->
                    </div>
                    <!-- Filter -->
                </div>
            </div>
        </div>
        <!-- Tour -->
    </div>
</section>
<!-- /TOURS -->
<!-- SUPPORT-->
<section id="support" class="section-mb-80">
    <div class="container">
        <div class="card border-0 bg-primary-lighter">
            <div class="card-body pb-2">
                <div class="row align-items-center">
                    <div class="col-12 col-xl-8 col-lg-6">
                        <!-- Content -->
                        <div class="heading mb-3">
                            <h2 class="title">Customer Support</h2>
                            <p>We have a professional customer support team and always accompany you on every trip.</p>
                        </div>
                        <!-- /Content -->
                    </div>
                    <div class="col-12 col-xl-4 col-lg-6 text-start text-lg-end">
                        <!-- Button -->
                        <div class="mb-3">
                            <a href="contact.html" class="btn btn-lg btn-primary">
                                <i class="ti ti-mail"></i>
                                <span>Contact us</span>
                            </a>
                        </div>
                        <!-- /Button -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /SUPPORT -->
@endsection