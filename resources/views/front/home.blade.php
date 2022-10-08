<!DOCTYPE html>
<html lang="en" data-textdirection="ltr">
<head>


    @include('.front.general.meta-title')
    @include('.front.general.favicon')

    @include('.front.general.external-css')
    @include('.front.general.style')



</head>
<body>

    @include('.front.general.preloader')
    @include('.front.general.header')

    <!------------------------------Hero Section--------------------------------------->
    <section>
        <div class="container-fluid hero-background">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-lg-10 mx-auto">
                    <div class="hero-box">
                        <h1 class="h1 text-white">{{$Settings->title}}</h1>
                        <p>{{$Settings->intro}}</p>
                        <div class="hero-box-icon mt-5">
                            <a href="{{ $Settings->appstore_link }}"><img src="{{url('general/img/app-button.svg')}}" alt=""></a>
                            <a href="{{ $Settings->playstore_link }}"><img src="{{url('general/img/play-button.svg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-----------------------------/Hero Section--------------------------------------->

    <!------------------------------Top Categories Section--------------------------------------->
{{--    <section class="mt-5">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="ch-1 fb">Top Categories</div>--}}
{{--                <div class="col-lg-12 col-sm-12 col-md-12">--}}
{{--                    <div class="responsive">--}}

{{--                        <div class="col-sm-12 col-md-12 col-lg-12">--}}
{{--                            <div class="card rounded-2 border-0 p-2">--}}
{{--                                <img src="{{url('general/img/category-01.jpg')}}" class="card-img-top rounded-2" alt="...">--}}
{{--                                <div class="card-body ps-0">--}}
{{--                                    <div class="ch-6 fb text-center">PUBG Mobile</div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12 col-md-12 col-lg-12">--}}
{{--                            <div class="card rounded-2 border-0 p-2">--}}
{{--                                <img src="{{url('general/img/category-02.jpg')}}" class="card-img-top rounded-2" alt="...">--}}
{{--                                <div class="card-body ps-0">--}}
{{--                                    <div class="ch-6 fb text-center">Call of Duty</div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12 col-md-12 col-lg-12">--}}
{{--                            <div class="card rounded-2 border-0 p-2">--}}
{{--                                <img src="{{url('general/img/category-03.jpg')}}" class="card-img-top rounded-2" alt="...">--}}
{{--                                <div class="card-body ps-0">--}}
{{--                                    <div class="ch-6 fb text-center">FIFA 22</div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12 col-md-12 col-lg-12">--}}
{{--                            <div class="card rounded-2 border-0 p-2">--}}
{{--                                <img src="{{url('general/img/category-04.jpg')}}" class="card-img-top rounded-2" alt="...">--}}
{{--                                <div class="card-body ps-0">--}}
{{--                                    <div class="ch-6 fb text-center">Valorant</div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12 col-md-12 col-lg-12">--}}
{{--                            <div class="card rounded-2 border-0 p-2">--}}
{{--                                <img src="{{url('general/img/category-05.jpg')}}" class="card-img-top rounded-2" alt="...">--}}
{{--                                <div class="card-body ps-0">--}}
{{--                                    <div class="ch-6 fb text-center">DOTA II</div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12 col-md-12 col-lg-12">--}}
{{--                            <div class="card rounded-2 border-0 p-2">--}}
{{--                                <img src="{{url('general/img/category-06.jpg')}}" class="card-img-top rounded-2" alt="...">--}}
{{--                                <div class="card-body ps-0">--}}
{{--                                    <div class="ch-6 fb text-center">Mobile Game</div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12 col-md-12 col-lg-12">--}}
{{--                            <div class="card rounded-2 border-0 p-2">--}}
{{--                                <img src="{{url('general/img/category-06.jpg')}}" class="card-img-top rounded-2" alt="...">--}}
{{--                                <div class="card-body ps-0">--}}
{{--                                    <div class="ch-6 fb text-center">Mobile Game</div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-----------------------------/Top Categories Section--------------------------------------->


    <!------------------------------Game Section--------------------------------------->
    <section class="mt-4 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="ch-1">Game Live</div>
                <div class="col-lg-12 col-sm-12 col-md-12">


                    <ul class="nav nav-pills mb-3 mt-3 home-tab-box" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">ALL</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-pubg-mobile-tab" data-bs-toggle="pill" data-bs-target="#pills-pubg-mobile" type="button" role="tab" aria-controls="pills-pubg-mobile" aria-selected="false">PUBG Mobile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-fortnite-tab" data-bs-toggle="pill" data-bs-target="#pills-fortnite" type="button" role="tab" aria-controls="pills-fortnite" aria-selected="false">Fortnite</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-call-of-duty-tab" data-bs-toggle="pill" data-bs-target="#pills-call-of-duty" type="button" role="tab" aria-controls="pills-call-of-duty" aria-selected="false">Call of Duty</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-fifa-22-tab" data-bs-toggle="pill" data-bs-target="#pills-fifa-22" type="button" role="tab" aria-controls="pills-fifa-22" aria-selected="false">FIFA 22</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-valorant-tab" data-bs-toggle="pill" data-bs-target="#pills-valorant" type="button" role="tab" aria-controls="pills-valorant" aria-selected="false">Valorant</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-candy-crush-tab" data-bs-toggle="pill" data-bs-target="#pills-candy-crush" type="button" role="tab" aria-controls="pills-candy-crush" aria-selected="false">Candy Crush</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-free-fire" data-bs-toggle="pill" data-bs-target="#pills-free-fire" type="button" role="tab" aria-controls="pills-free-fire" aria-selected="false">Free Fire</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <!------------------------Tab 1----------------------------->
                        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                            <div class="row">

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon01.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon02.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon03.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon04.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon05.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon06.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon07.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon08.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!------------------------Tab 2----------------------------->
                        <div class="tab-pane fade" id="pills-pubg-mobile" role="tabpanel" aria-labelledby="pills-pubg-mobile-tab">
                            <div class="row">


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon03.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon06.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon01.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon02.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon07.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon08.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon04.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon05.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!------------------------Tab 3----------------------------->
                        <div class="tab-pane fade" id="pills-fortnite" role="tabpanel" aria-labelledby="pills-fortnite-tab">
                            <div class="row">

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon01.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon02.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon03.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon04.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon05.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon06.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon07.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon08.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!------------------------Tab 4----------------------------->
                        <div class="tab-pane fade" id="pills-call-of-duty" role="tabpanel" aria-labelledby="pills-call-of-duty-tab">
                            <div class="row">


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon03.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon06.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon01.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon02.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon07.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon08.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon04.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon05.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!------------------------Tab 5----------------------------->
                        <div class="tab-pane fade" id="pills-fifa-22" role="tabpanel" aria-labelledby="pills-fifa-22-tab">
                            <div class="row">

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon01.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon02.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon03.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon04.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon05.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon06.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon07.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon08.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!------------------------Tab 6----------------------------->
                        <div class="tab-pane fade" id="pills-valorant" role="tabpanel" aria-labelledby="valorant">
                            <div class="row">

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon01.jpg')}}" height="159px" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon05.jpg')}}" height="159px" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon06.jpg')}}" height="159px" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon07.jpg')}}" height="159px" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon02.jpg')}}" height="159px" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon03.jpg')}}" height="159px" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon04.jpg')}}" height="159px" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon08.jpg')}}" height="159px" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!------------------------Tab 7----------------------------->
                        <div class="tab-pane fade" id="pills-candy-crush" role="tabpanel" aria-labelledby="candy-crush">
                            <div class="row">


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon03.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon06.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon01.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon02.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon07.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon08.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon04.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon05.jpg')}}" height="230px" style="object-fit: cover" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!------------------------Tab 8----------------------------->
                        <div class="tab-pane fade" id="pills-free-fire" role="tabpanel" aria-labelledby="pills-free-fire">
                            <div class="row">

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon01.jpg')}}" height="159px" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon05.jpg')}}" height="159px" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon06.jpg')}}" height="159px" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon07.jpg')}}" height="159px" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon02.jpg')}}" height="159px" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon03.jpg')}}" height="159px" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon04.jpg')}}" height="159px" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('general/img/home-tab-icon08.jpg')}}" height="159px" class="card-img-top rounded-2" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('general/img/home-tab-user-01.svg')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!------------------------Tab 7----------------------------->
                    </div>




                </div>
            </div>
        </div>
    </section>
    <!-----------------------------/Game Section--------------------------------------->


    <!------------------------------Popular Live Section--------------------------------------->
    <section class="mt-4 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="ch-1">Popular Live</div>
                <div class="col-lg-12 col-sm-12 col-md-12">


                    <ul class="nav nav-pills mb-3 mt-3 home-tab-box" id="host-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="host-all-tab" data-bs-toggle="pill" data-bs-target="#host-all" type="button" role="tab" aria-controls="host-all" aria-selected="true">ALL</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="host-usa-tab" data-bs-toggle="pill" data-bs-target="#host-usa" type="button" role="tab" aria-controls="host-usa" aria-selected="false">USA</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="host-vitnam-tab" data-bs-toggle="pill" data-bs-target="#host-vitnam" type="button" role="tab" aria-controls="host-vitnam" aria-selected="false">Vitnam</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="host-indonasia-tab" data-bs-toggle="pill" data-bs-target="#host-indonasia" type="button" role="tab" aria-controls="host-indonasia" aria-selected="false">Indonasia</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="host-brazil-tab" data-bs-toggle="pill" data-bs-target="#host-brazil" type="button" role="tab" aria-controls="host-brazil" aria-selected="false">Brazil</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="host-saudi-arabia-tab" data-bs-toggle="pill" data-bs-target="#host-saudi-arabia" type="button" role="tab" aria-controls="host-saudi-arabia" aria-selected="false">Saudi Arabia</button>
                        </li>
                    </ul>




                    <div class="tab-content" id="host-tabContent">
                        <!------------------------Tab 1----------------------------->
                        <div class="tab-pane fade show active" id="host-all" role="tabpanel" aria-labelledby="host-all-tab">
                            <div class="row">

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/1.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/2.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/3.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/1.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/4.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/6.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/5.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/7.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/6.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/8.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/7.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/9.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/8.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/10.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/11.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/12.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>



                        <!------------------------Tab 2----------------------------->
                        <div class="tab-pane fade" id="host-usa" role="tabpanel" aria-labelledby="host-usa-tab">
                            <div class="row">




                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/11.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/12.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/4.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/6.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/5.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/7.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/6.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/8.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/7.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/9.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/1.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/2.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/3.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/1.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/8.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/10.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/11.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/12.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!------------------------Tab 3----------------------------->
                        <div class="tab-pane fade" id="host-vitnam" role="tabpanel" aria-labelledby="host-vitnam-tab">
                            <div class="row">

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/1.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/2.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/3.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/1.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/4.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/6.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/5.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/7.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/6.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/8.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/7.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/9.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/8.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/10.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/11.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/12.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!------------------------Tab 4----------------------------->
                        <div class="tab-pane fade" id="host-indonasia" role="tabpanel" aria-labelledby="host-indonasia-tab">
                            <div class="row">


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/7.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/9.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/1.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/2.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/3.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/1.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/11.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/12.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/4.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/6.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/5.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/7.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/6.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/8.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/8.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/10.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/11.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/12.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!------------------------Tab 5----------------------------->
                        <div class="tab-pane fade" id="host-brazil" role="tabpanel" aria-labelledby="host-brazil-tab">
                            <div class="row">

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/1.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/2.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/3.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/1.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/4.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/6.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/5.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/7.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/6.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/8.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/7.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/9.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/8.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/10.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/11.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/12.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!------------------------Tab 6----------------------------->
                        <div class="tab-pane fade" id="host-saudi-arabia" role="tabpanel" aria-labelledby="host-saudi-arabia-tab">
                            <div class="row">


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/7.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/9.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/1.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/2.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/3.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/1.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/11.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/12.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/4.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/6.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/5.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/7.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/6.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/8.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/8.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/10.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/demo/11.webp')}}" height="230px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/12.webp')}}" width="50px" height="50px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                    <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                                </div>
                                                <div class="ms-auto bd-highlight text-center text-muted">
                                                    <i class="fal fa-eye"></i>
                                                    <div>302</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </section>
    <!-----------------------------/Popular Live Section--------------------------------------->




    <!------------------------------Bar Section--------------------------------------->
    <section class="mt-4 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="ch-1">Bar</div>
                <div class="col-lg-12 col-sm-12 col-md-12">


                    <ul class="nav nav-pills mb-3 mt-3 home-tab-box" id="bar-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="bar-recommend-tab" data-bs-toggle="pill" data-bs-target="#bar-recommend" type="button" role="tab" aria-controls="bar-recommend" aria-selected="true">Recommend</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bar-circle-tab" data-bs-toggle="pill" data-bs-target="#bar-circle" type="button" role="tab" aria-controls="bar-circle" aria-selected="false">Circle</button>
                        </li>
                    </ul>




                    <div class="tab-content" id="bar-tabContent">
                        <!------------------------Tab 1----------------------------->
                        <div class="tab-pane fade show active" id="bar-recommend" role="tabpanel" aria-labelledby="bar-recommend-tab">
                            <div class="row">

                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/1.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/8.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/2.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/9.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/3.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/18.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/5.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/6.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/6.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/3.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/7.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/12.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/9.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/15.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/10.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/4.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/11.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/3.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/12.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/9.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/13.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/5.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/14.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/3.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!------------------------Tab 2----------------------------->
                        <div class="tab-pane fade show" id="bar-circle" role="tabpanel" aria-labelledby="bar-circle-tab">
                            <div class="row">



                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/7.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/12.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/9.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/15.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/1.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/8.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/2.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/9.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/14.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/4.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/3.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/18.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/12.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/9.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/13.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/5.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/5.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/6.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/6.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/3.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/11.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/3.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-2 col-lg-2 mb-3 h-live-card">
                                    <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                        <img src="{{url('front/img/bar/10.webp')}}" height="330px" class="card-img-top rounded-2" style="object-fit: cover" alt="...">
                                        <div class="card-body">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <img src="{{url('front/img/demo/4.webp')}}" width="30px" height="30px" class="rounded-circle">
                                                </div>
                                                <div class=" bd-highlight">
                                                    <div class="ch-7 fb ps-2">Sorteo De Di...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>




                </div>
            </div>
        </div>
    </section>
    <!-----------------------------/Bar Section--------------------------------------->


{{--    <!------------------------------Link Section--------------------------------------->--}}
{{--    <section class="pt-3 pb-3">--}}
{{--        <div class="container-fluid">--}}

{{--            <div class="row">--}}

{{--                <div class="col-sm-6 col-md-3 col-lg-3 mt-2">--}}

{{--                    <div class="card text-center p-4" style="border-radius: 15px;">--}}



{{--                        <img src="{{url('general/img/admin.svg')}}" alt="Sign Up As Admin" style="width: 80px; height: 80px; margin: 0 auto">--}}

{{--                        <div style="font-weight: bold; font-size: 16px; margin-top: 10px; margin-bottom: 5px">Sign Up As Admin</div>--}}

{{--                        <p style="font-size: 12px; min-height: 80px">Become an admin  with us if you can handle to manage 25+ agencies.</p>--}}

{{--                        <a href="{{url('/sign-up/admin')}}" class="btn btn-danger rounded-pill">Become a Partner</a>--}}

{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="col-sm-6 col-md-3 col-lg-3 mt-2">--}}

{{--                    <div class="card text-center p-4" style="border-radius: 15px;">--}}



{{--                        <img src="{{url('general/img/agency.svg')}}" alt="Sign Up As Admin" style="width: 80px; height: 80px; margin: 0 auto">--}}

{{--                        <div style="font-weight: bold; font-size: 16px; margin-top: 10px; margin-bottom: 5px">Sign Up As Agency</div>--}}

{{--                        <p style="font-size: 12px; min-height: 80px">Agency implies an agent who has no less than 10 live broadcaster/ streamer Join us if you can provide and manage 10+ live streamers</p>--}}

{{--                        <a href="{{url('/sign-up/agency')}}" class="btn btn-danger rounded-pill">Become a Partner</a>--}}

{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="col-sm-6 col-md-3 col-lg-3 mt-2">--}}

{{--                    <div class="card text-center p-4" style="border-radius: 15px;">--}}



{{--                        <img src="{{url('general/img/host.svg')}}" alt="Sign Up As Admin" style="width: 80px; height: 80px; margin: 0 auto">--}}

{{--                        <div style="font-weight: bold; font-size: 16px; margin-top: 10px; margin-bottom: 5px">Sign Up As Host</div>--}}

{{--                        <p style="font-size: 12px; min-height: 80px">If you a good video content creator join us today and become a host of BanoLive.</p>--}}

{{--                        <a href="{{url('/sign-up/host')}}" class="btn btn-danger rounded-pill">Become a Partner</a>--}}

{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="col-sm-6 col-md-3 col-lg-3 mt-2">--}}

{{--                    <div class="card text-center p-4" style="border-radius: 15px;">--}}



{{--                        <img src="{{url('general/img/agent.svg')}}" alt="Sign Up As Admin" style="width: 80px; height: 80px; margin: 0 auto">--}}

{{--                        <div style="font-weight: bold; font-size: 16px; margin-top: 10px; margin-bottom: 5px">Sign Up As Top Up Agent</div>--}}

{{--                        <p style="font-size: 12px; min-height: 80px">Click to apply as a top up agent.</p>--}}

{{--                        <a href="{{url('/sign-up/agent')}}" class="btn btn-danger rounded-pill">Become a Partner</a>--}}

{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}
{{--    <!-----------------------------/Link Section--------------------------------------->--}}


    <!------------------------------News Section--------------------------------------->
    <section class="pt-5 pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="ch-1 fb mb-3">News</div>

                <div class="responsive2">
                    <div class="col-sm-12 col-md-12 col-lg-12 c-round">
                        <div class="card bg-transparent border-0 p-2 ">
                            <img src="{{url('general/img/news-releas-01.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body p-0 pt-3">
                                <div class="text-muted ch-7">2021-04-30</div>
                                <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                <a href="#" class="ch-7 link-danger">Read More</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 c-round">
                        <div class="card bg-transparent border-0 p-2 ">
                            <img src="{{url('general/img/news-releas-02.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body p-0 pt-3">
                                <div class="text-muted ch-7">2021-04-30</div>
                                <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                <a href="#" class="ch-7 link-danger">Read More</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 c-round">
                        <div class="card bg-transparent border-0 p-2 ">
                            <img src="{{url('general/img/news-releas-03.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body p-0 pt-3">
                                <div class="text-muted ch-7">2021-04-30</div>
                                <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                <a href="#" class="ch-7 link-danger">Read More</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 c-round ">
                        <div class="card bg-transparent border-0 p-2 ">
                            <img src="{{url('general/img/news-releas-01.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body p-0 pt-3">
                                <div class="text-muted ch-7">2021-04-30</div>
                                <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                <a href="#" class="ch-7 link-danger">Read More</a>

                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-----------------------------/News Section--------------------------------------->




    @include('.front.general.footer')
    @include('.front.general.script')
    <!-----------------------------Script--------------------------------------->

    <script>
        $(document).ready(function(){

            $('.responsive').slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 6,
                slidesToScroll: 6,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            $('.responsive2').slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

        });
    </script>

</body>
</html>
