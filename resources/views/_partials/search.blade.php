<!-- Check tour -->
<div class="check-tour">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist" style="border-bottom: 0px;margin-left:10px;">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Aventuras</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Traslados</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <form class="check-tour-form" action="{{ route('search.tours', ['locale' => $lang]) }}" method="POST">
                    @csrf
                    <div class="row g-2">
                        <div class="col-lg-10">
                            <div class="row g-2">
                                <div class="col-12 col-lg-4 col-md-12">
                                    <!-- Where -->
                                    <div class="input-group input-group-lg where-input">
                                        <label class="input-group-text bg-transparent border-0" for="txtWhere"><i class="ti ti-map-pin"></i></label>
                                        <!--input type="text" class="form-control bg-transparent border-0 ps-0" placeholder="Where are you going?" id="txtWhere"-->
                                        <select class="form-select bg-transparent form-control  border-0 ps-0" id="dselect-example" name="location">
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->name }}">{{ $location->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- /Where -->
                                </div>
                                <div class="col-12 col-lg-4 col-md-6">
                                    <!-- When -->
                                    <div class="input-group input-group-lg when-input select-date">
                                        <label class="input-group-text bg-transparent border-0" for="txtWhen"><i class="ti ti-calendar-event"></i></label>
                                        <input type="text" class="form-control bg-transparent border-0 ps-0 " placeholder="{{ __('search.arrival') }}" id="txtWhen" name="date" data-input>
                                    </div>
                                    <!-- /When -->
                                </div>
                                <div class="col-12 col-lg-4 col-md-6">
                                    <!-- Adventures -->
                                    <div class="input-group input-group-lg adv-input">
                                        <label class="input-group-text bg-transparent border-0" for="btnAdv"><i class="ti ti-users"></i></label>
                                        <div class="dropdown flex-grow-1" data-dropdown-checkbox="">
                                            <button class="btn btn-light dropdown-toggle btn-lg bg-transparent border-0 ps-0 w-100 text-start" id="btnAdv" data-bs-auto-close="outside" type="button" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                            <ul class="dropdown-menu">
                                                <li class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ __('search.adventures') }}" id="chkAll" data-checkbox-type="all" name="type_tour">
                                                    <label class="form-check-label" for="chkAll">
                                                        <strong>{{ __('search.adventures') }}</strong>
                                                        <span>{{ __('search.adventures.text') }}</span>
                                                    </label>
                                                </li>
                                                <li class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ __('search.adventures.label') }}" id="chkGroup" data-checkbox-type="one" name="type_tour">
                                                    <label class="form-check-label" for="chkGroup">
                                                        <strong>{{ __('search.adventures.group') }}</strong>
                                                        <span>{{ __('search.adventures.group.text') }}</span>
                                                    </label>
                                                </li>
                                                <li class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ __('search.adventures.private.label') }}" id="chkPrivate" data-checkbox-type="one" name="type_tour">
                                                    <label class="form-check-label" for="chkPrivate">
                                                        <strong>{{ __('search.adventures.private') }}</strong>
                                                        <span>{{ __('search.adventures.private.text') }}</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Adventures -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <!-- Button -->
                            <div class="check-button">
                                <button type="submit" class="btn btn-lg btn-primary w-100">
                                    <i class="ficon ficon-check-valid-state"></i>
                                    <span>{{ __('search.find.tours') }}</span>
                                </button>
                            </div>
                            <!-- /Button -->
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <form class="check-tour-form" action="tour-list.html">
                    <div class="row g-2">
                        <div class="col-lg-12">
                            <div class="row g-2">
                                <div class="col-12 col-lg-12 col-md-12">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="roundTrip" onclick="onToggle()">
                                        <label class="form-check-label" for="roundTrip" id="labelRoundTrip">{{ __('search.roundTrip') }}</label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-12">
                                    <!-- Where -->
                                    <div class="input-group input-group-lg where-input">
                                        <label class="input-group-text bg-transparent border-0" for="txtWhere"><i class="ti ti-map-pin"></i></label>
                                        <!--input type="text" class="form-control bg-transparent border-0 ps-0" placeholder="Where are you going?" id="txtWhere"-->
                                        <select class="form-select bg-transparent form-control  border-0 ps-0" id="dselect-example">
                                            <option value="origen">{{ __('search.origin') }}</option>
                                            <option value="chrome">Cancun</option>
                                            <option value="firefox">Rivera Maya</option>
                                            <option value="safari">Tulum</option>
                                        </select>
                                    </div>
                                    <!-- /Where -->
                                </div>
                                <div class="col-12 col-lg-3 col-md-6">
                                    <!-- When -->
                                    <div class="input-group input-group-lg when-input select-date">
                                        <label class="input-group-text bg-transparent border-0" for="tripArrival"><i class="ti ti-calendar-event"></i></label>
                                        <input type="text" class="form-control bg-transparent border-0 ps-0 " placeholder="{{ __('search.arrival') }}" id="tripArrival" data-input>
                                    </div>
                                    <!-- /When -->
                                </div>
                                <div class="col-12 col-lg-3 col-md-6" id="dynamicTrip">
                                    <!-- When -->
                                    <div class="input-group input-group-lg when-input select-date">
                                        <label class="input-group-text bg-transparent border-0" for="tripDepature"><i class="ti ti-calendar-event"></i></label>
                                        <input type="text" class="form-control bg-transparent border-0 ps-0 " placeholder="{{ __('search.departure') }}" id="tripDepature" data-input>
                                    </div>
                                    <!-- /When -->
                                </div>
                                <div class="col-12 col-lg-3 col-md-6">
                                     <!-- Where -->
                                     <div class="input-group input-group-lg where-input">
                                        <label class="input-group-text bg-transparent border-0" for="txtWhere"><i class="ti ti-map-pin"></i></label>
                                        <!--input type="text" class="form-control bg-transparent border-0 ps-0" placeholder="Where are you going?" id="txtWhere"-->
                                        <select class="form-select bg-transparent form-control  border-0 ps-0" id="dselect-example">
                                            <option value="origen">{{ __('search.destination') }}</option>
                                            <option value="chrome">Cancun</option>
                                            <option value="firefox">Rivera Maya</option>
                                            <option value="safari">Tulum</option>
                                        </select>
                                    </div>
                                    <!-- /Where -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                             <!-- Where -->
                             <div class="input-group input-group-lg where-input">
                                <label class="input-group-text bg-transparent border-0" for="txtWhere"><i class="ti ti-users"></i></label>
                                <input type="text" class="form-control bg-transparent border-0 ps-0" placeholder="# de paxs" id="txtWhere">
                            </div>
                            <!-- /Where -->
                        </div>
                        <div class="col-lg-2">
                            <!-- Button -->
                            <div class="check-button">
                                <button type="submit" class="btn btn-lg btn-primary w-100">
                                    <i class="ficon ficon-check-valid-state"></i>
                                    <span>{{ __('search.find.tours') }}</span>
                                </button>
                            </div>
                            <!-- /Button -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>
<!-- /Check tour -->