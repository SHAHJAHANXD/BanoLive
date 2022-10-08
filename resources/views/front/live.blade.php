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



<!------------------------------Section--------------------------------------->
<section class="mt-5 mb-5">
    <div class="container ">
        <div class="row">
            <div class="ch-1">Popular Live</div>
            <div class="col-lg-12 col-sm-12 col-md-12">


                <ul class="nav nav-pills mb-3 mt-3 home-tab-box" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">ALL</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-USA-tab" data-bs-toggle="pill" data-bs-target="#pills-USA" type="button" role="tab" aria-controls="pills-USA" aria-selected="false">USA</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Vietnam-tab" data-bs-toggle="pill" data-bs-target="#pills-Vietnam" type="button" role="tab" aria-controls="pills-Vietnam" aria-selected="false">Vietnam</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Indonesia-tab" data-bs-toggle="pill" data-bs-target="#pills-Indonesia" type="button" role="tab" aria-controls="pills-Indonesia" aria-selected="false">Indonesia</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Brazil-tab" data-bs-toggle="pill" data-bs-target="#pills-Brazil" type="button" role="tab" aria-controls="pills-Brazil2" aria-selected="false">Brazil</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Saudi-Arabia-tab" data-bs-toggle="pill" data-bs-target="#pills-Saudi-Arabia" type="button" role="tab" aria-controls="pills-Saudi-Arabia" aria-selected="false"> Saudi Arabia</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-More-tab" data-bs-toggle="pill" data-bs-target="#pills-More" type="button" role="tab" aria-controls="pills-More" aria-selected="false">More</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!------------------------Tab 1----------------------------->
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                        <div class="row">

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-01.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-02.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-03.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-04.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-01.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-02.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-03.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-04.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
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
                    <div class="tab-pane fade" id="pills-Vietnam" role="tabpanel" aria-labelledby="pills-Vietnam-tab">
                        <div class="row">

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-01.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-02.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-03.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-04.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-01.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-02.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-03.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-04.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
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
                    <div class="tab-pane fade" id="pills-Indonesia" role="tabpanel" aria-labelledby="pills-Indonesia-tab">
                        <div class="row">

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-01.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-02.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-03.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-04.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-01.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-02.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-03.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-04.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
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
                    <div class="tab-pane fade" id="pills-Brazil" role="tabpanel" aria-labelledby="pills-Brazil-tab">
                        <div class="row">

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-01.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-02.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-03.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-04.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-01.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-02.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-03.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-04.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
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
                    <div class="tab-pane fade" id="pills-Saudi-Arabia" role="tabpanel" aria-labelledby="Saudi-Arabia">
                        <div class="row">

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-01.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-02.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-03.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-04.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-01.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-02.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-03.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-04.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
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
                    <div class="tab-pane fade" id="pills-More" role="tabpanel" aria-labelledby="More">
                        <div class="row">

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-01.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-02.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-03.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-04.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-01.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-02.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-03.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 col-lg-3 mb-3 h-live-card">
                                <div class="card rounded-2 border-0 shadow-sm border-bottom border-bottom">
                                    <img src="{{url('/general/img/live-user-04.jpg')}}" height="159px" class="card-img-top rounded-2 position-relative" alt="...">

                                    <img src="{{url('/general/img/home-tab-user-01.svg')}}" class="rounded-circle ms-4 rounded-img">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto p-2 bd-highlight">
                                                <div class="ch-7 fb ps-1">Sorteo De Di...</div>
                                                <div class="ch-7 text-muted ps-1">Deysi Claros</div>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <i class="fal fa-eye"></i>
                                                <div>302</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>
                    <!-------------------------End tab---------------------------->

                </div>




            </div>
        </div>
    </div>
</section>
<!-----------------------------/Section--------------------------------------->



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
