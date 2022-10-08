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









<!------------------------------Game Section--------------------------------------->
<section class="mt-4 mb-4">
    <div class="container-fluid">
        <div class="row">
{{--            <div class="ch-1">Game Live</div>--}}
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








@include('.front.general.footer')

@include('.front.general.script')


<script>


    function validatealpha(alpha) {
        var reno = /^[a-zA-Z\s]+$/;
        return reno.test(alpha);
    }

    function validateEmail(youremail) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(youremail);
    }


    function validatenum(num) {
        var reno = /^\d+$/;
        return reno.test(num);
    }


    $('#submit').on('click',function (e) {
        e.preventDefault();



        var inc=0;


        var full_name=$('#full_name').val();
        var email_address=$('#email_address').val();
        var password=$('#password').val();
        var terms_services = $('#terms_services').prop('checked');



        if (full_name !== '') {

            if (validatealpha(full_name)) {
                inc++;
                $('#full_name').css("border", "1px solid #ccc");
            } else {
                $('#full_name').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Full name is invalid');
                return null;
            }

        } else {
            $('#full_name').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Full name is required');
            return null;
        }

        if (email_address === '') {
            $('#email_address').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Email address is required');
            return null;
        } else {
            if (validateEmail(email_address)) {
                inc++;
                $('#email_address').css("border", "1px solid #ccc");
            } else {
                $('#email_address').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Email address is invalid');
                return null;
            }
        }


        if (password !== '' && password !== ' ' && password !== null) {

            if(password.length>=6){
                inc++;
                $('#password').css("border", "1px solid #ccc");
            }else {
                $('#password').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Use a minimum password length of 6 or more characters');
                return null;
            }

        }else{
            $('#password').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Password is required');
            return null;
        }




        if(inc===3){

            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();

            var fdata =new FormData();
            fdata.append('full_name',full_name);
            fdata.append('email',email_address);
            fdata.append('password',password);
            fdata.append('terms_services',terms_services);

            $.ajax({
                url: dataApiUrl+'/sign-up',
                data: fdata,
                type: 'POST',
                timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                dataType:'json',
                processData: false,
                contentType: false,


                beforeSend: function(){

                    $('#full_name').attr('disabled', 'disabled');
                    $('#email_address').attr('disabled', 'disabled');
                    $('#password').attr('disabled', 'disabled');
                    $('#confirm_password').attr('disabled', 'disabled');

                    $('#submit').attr('disabled', 'disabled');

                    $("#alert").css("display", "none");
                    $("#loading").css("display", "block");

                },


                success:function(data){


                    $("#loading").css("display", "none");


                    $('#full_name').removeAttr('disabled');
                    $('#email_address').removeAttr('disabled');
                    $('#password').removeAttr('disabled');
                    $('#confirm_password').removeAttr('disabled');

                    $('#submit').removeAttr('disabled');


                    if(data['error']!=true){
                        window.location.href= dataAppUrl+'/sign-in';
                    }else{
                        $("#alert").css("display", "block").text(data['message']);
                    }

                },
                error: function(xmlhttprequest, textstatus, message) {

                    if(textstatus==="timeout") {
                        $("#alert").css("display", "block").text('Timeout Please try again.');
                    }else {
                        if(navigator.onLine) {

                            if(textstatus==="error"){
                                $("#alert").css("display", "block").text(message);
                            }

                        }else {
                            $("#alert").css("display", "block").text('Check your internet connection then try again later.');
                        }
                    }

                    $("#loading").css("display", "none");

                    $('#full_name').removeAttr('disabled');
                    $('#email_address').removeAttr('disabled');
                    $('#password').removeAttr('disabled');
                    $('#confirm_password').removeAttr('disabled');

                    $('#submit').removeAttr('disabled');
                }


            });

        }else {
            $("#alert").css("display", "block").text('Something is wrong.');
        }


    });


</script>


</body>
</html>
