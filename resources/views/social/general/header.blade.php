
<!------------------------------Header------------------------------------>
<header class="bg-white pb-0">
    <div class="container">
        <div class="d-flex bd-highlight">
            <div class="pt-2 pb-1 pe-2 bd-highlight">
                <a href="{{url('/')}}"><div class="logo-header">
                        <img src="{{url('/general/img/header-logo.svg')}}" alt="">
                    </div>
                </a>
            </div>
            <div class="pt-3 pb-1 bd-highlight w-100 d-none d-sm-block">
                <form action="{{url('/search')}}">
                    <div class="input-group search-bar">
                        <span class="input-group-text bg-white"><i class="fas fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search Here" aria-label="Username">
                    </div>
                </form>
            </div>
            <div class="pt-3 pb-1 flex-grow-1 w-100 bd-highlight social-media-menu">


                <div class="dropdown">


                    @if($User->image!=null)
                        <img src="{{url('/uploads/'.$User->image)}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit dropdown-toggle"  id="profile_avatar_top" data-bs-toggle="dropdown" aria-expanded="false">
                    @else
                        <img src="{{url('/general/img/default-user.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit dropdown-toggle"  id="profile_avatar_top" data-bs-toggle="dropdown" aria-expanded="false">
                    @endif

                    <!-----------------------------------User Profile---------------------->
                    <ul class="dropdown-menu" aria-labelledby="profile_avatar_top">

                        <li class="border-bottom border-light border-2">
                            <a class="dropdown-item" href="{{url('/profile')}}">
                                <div class="d-flex bd-highlight">
                                    <div class="bd-highlight ms-2">
                                        <div class="rounded-circle bg-light socialP-head-icon-box float-start">

                                            @if($User->image!=null)
                                                <img src="{{url('/uploads/'.$User->image)}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit ">
                                            @else
                                                <img src="{{url('/general/img/default-user.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit ">
                                            @endif

                                        </div>
                                    </div>
                                    <div class="bd-highlight ms-2">
                                        <div class="ch-7 fb">{{$User->full_name}}</div>
                                        <div class="ch-5 text-muted">See Your Profile</div>
                                    </div>
                                </div>
                            </a>
                        </li>

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <div class="rounded-circle bg-light float-start p-2">--}}
{{--                                            <img src="{{url('/general/img/icons/social-icon-23.svg')}}"  alt="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ms-2 mt-2">--}}
{{--                                        <div class="ch-7 fb">Settings & Privacy</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <div class="rounded-circle bg-light float-start p-2">--}}
{{--                                            <img src="{{url('/general/img/icons/social-icon-24.svg')}}"  alt="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ms-2 mt-2">--}}
{{--                                        <div class="ch-7 fb">Help & Support</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <div class="rounded-circle bg-light float-start p-2">--}}
{{--                                            <img src="{{url('/general/img/icons/social-icon-25.svg')}}"  alt="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ms-2 mt-2">--}}
{{--                                        <div class="ch-7 fb">Display & Accessibility</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <div class="rounded-circle bg-light float-start p-2">--}}
{{--                                            <img src="{{url('/general/img/icons/social-icon-26.svg')}}"  alt="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ms-2 mt-2">--}}
{{--                                        <div class="ch-7 fb">Give Feedback</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

                        <li>
                            <a class="dropdown-item" href="{{url('/sign-out')}}">
                                <div class="d-flex bd-highlight">
                                    <div class="bd-highlight">
                                        <div class="rounded-circle bg-light float-start p-2">
                                            <img src="{{url('/general/img/icons/social-icon-27.svg')}}"  alt="">
                                        </div>
                                    </div>
                                    <div class="bd-highlight ms-2 mt-2">
                                        <div class="ch-7 fb">Log Out</div>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <!-----------------------------------User Profile---------------------->
                </div>

















{{--                <div class="dropdown d-none d-sm-block">--}}

{{--                    <img src="{{url('/general/img/icons/social-icon-01.svg')}}" alt="" class="rounded-circle bg-light me-2 socialP-head-icon-box img-fit dropdown-toggle"  id="dropdownMenuButton13" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                    <!-----------------------------------Notification---------------------->--}}
{{--                    <ul class="dropdown-menu scroll" aria-labelledby="dropdownMenuButton13">--}}


{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ps-2">--}}
{{--                                        <div class="ch-7 text-black"><span class="fb">Bilal Khan</span> <span class="ch-7 text-muted text-wrap"> commented on the status that you shared.</span></div>--}}

{{--                                        <div class="ch-5 text-danger">3 hours ago</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ps-2">--}}
{{--                                        <div class="ch-7 text-black"><span class="fb">Bilal Khan</span> <span class="ch-7 text-muted text-wrap"> commented on the status that you shared.</span></div>--}}

{{--                                        <div class="ch-5 text-danger">3 hours ago</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ps-2">--}}
{{--                                        <div class="ch-7 text-black"><span class="fb">Bilal Khan</span> <span class="ch-7 text-muted text-wrap"> commented on the status that you shared.</span></div>--}}

{{--                                        <div class="ch-5 text-danger">3 hours ago</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ps-2">--}}
{{--                                        <div class="ch-7 text-black"><span class="fb">Bilal Khan</span> <span class="ch-7 text-muted text-wrap"> commented on the status that you shared.</span></div>--}}

{{--                                        <div class="ch-5 text-danger">3 hours ago</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ps-2">--}}
{{--                                        <div class="ch-7 text-black"><span class="fb">Bilal Khan</span> <span class="ch-7 text-muted text-wrap"> commented on the status that you shared.</span></div>--}}

{{--                                        <div class="ch-5 text-danger">3 hours ago</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ps-2">--}}
{{--                                        <div class="ch-7 text-black"><span class="fb">Bilal Khan</span> <span class="ch-7 text-muted text-wrap"> commented on the status that you shared.</span></div>--}}

{{--                                        <div class="ch-5 text-danger">3 hours ago</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ps-2">--}}
{{--                                        <div class="ch-7 text-black"><span class="fb">Bilal Khan</span> <span class="ch-7 text-muted text-wrap"> commented on the status that you shared.</span></div>--}}

{{--                                        <div class="ch-5 text-danger">3 hours ago</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ps-2">--}}
{{--                                        <div class="ch-7 text-black"><span class="fb">Bilal Khan</span> <span class="ch-7 text-muted text-wrap"> commented on the status that you shared.</span></div>--}}

{{--                                        <div class="ch-5 text-danger">3 hours ago</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ps-2">--}}
{{--                                        <div class="ch-7 text-black"><span class="fb">Bilal Khan</span> <span class="ch-7 text-muted text-wrap"> commented on the status that you shared.</span></div>--}}

{{--                                        <div class="ch-5 text-danger">3 hours ago</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ps-2">--}}
{{--                                        <div class="ch-7 text-black"><span class="fb">Bilal Khan</span> <span class="ch-7 text-muted text-wrap"> commented on the status that you shared.</span></div>--}}

{{--                                        <div class="ch-5 text-danger">3 hours ago</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ps-2">--}}
{{--                                        <div class="ch-7 text-black"><span class="fb">Bilal Khan</span> <span class="ch-7 text-muted text-wrap"> commented on the status that you shared.</span></div>--}}

{{--                                        <div class="ch-5 text-danger">3 hours ago</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ps-2">--}}
{{--                                        <div class="ch-7 text-black"><span class="fb">Bilal Khan</span> <span class="ch-7 text-muted text-wrap"> commented on the status that you shared.</span></div>--}}

{{--                                        <div class="ch-5 text-danger">3 hours ago</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ps-2">--}}
{{--                                        <div class="ch-7 text-black"><span class="fb">Bilal Khan</span> <span class="ch-7 text-muted text-wrap"> commented on the status that you shared.</span></div>--}}

{{--                                        <div class="ch-5 text-danger">3 hours ago</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="bd-highlight">--}}
{{--                                        <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight ps-2">--}}
{{--                                        <div class="ch-7 text-black"><span class="fb">Bilal Khan</span> <span class="ch-7 text-muted text-wrap"> commented on the status that you shared.</span></div>--}}

{{--                                        <div class="ch-5 text-danger">3 hours ago</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}


{{--                    </ul>--}}
{{--                    <!-----------------------------------Notification---------------------->--}}
{{--                </div>--}}


















{{--                <div class="dropdown d-none d-sm-block">--}}

{{--                    <img src="{{url('/general/img/icons/social-icon-02.svg')}}" alt="" class="rounded-circle bg-light me-2 socialP-head-icon-box dropdown-toggle"  id="dropdownMenuButton14" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                    <!-----------------------------------Message---------------------->--}}
{{--                    <ul class="dropdown-menu scroll" aria-labelledby="dropdownMenuButton14">--}}


{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight ">--}}
{{--                                    <div class="bd-highlight ">--}}
{{--                                        <div class="rounded-circle bg-light socialP-head-icon-box">--}}
{{--                                            <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight pt-1 ps-2">--}}
{{--                                        <div class="ch-7 fb">Bilal Khan</div>--}}
{{--                                        <div class="ch-5 text-muted">Lorem ipsum dolor sit...</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-auto bd-highlight mt-2">--}}
{{--                                        <div class="ch-5 text-muted">--}}
{{--                                            1h--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight ">--}}
{{--                                    <div class="bd-highlight ">--}}
{{--                                        <div class="rounded-circle bg-light socialP-head-icon-box">--}}
{{--                                            <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight pt-1 ps-2">--}}
{{--                                        <div class="ch-7 fb">Bilal Khan</div>--}}
{{--                                        <div class="ch-5 text-muted">Lorem ipsum dolor sit...</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-auto bd-highlight mt-2">--}}
{{--                                        <div class="ch-5 text-muted">--}}
{{--                                            1h--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}


{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight ">--}}
{{--                                    <div class="bd-highlight ">--}}
{{--                                        <div class="rounded-circle bg-light socialP-head-icon-box">--}}
{{--                                            <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight pt-1 ps-2">--}}
{{--                                        <div class="ch-7 fb">Bilal Khan</div>--}}
{{--                                        <div class="ch-5 text-muted">Lorem ipsum dolor sit...</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-auto bd-highlight mt-2">--}}
{{--                                        <div class="ch-5 text-muted">--}}
{{--                                            1h--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}


{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight ">--}}
{{--                                    <div class="bd-highlight ">--}}
{{--                                        <div class="rounded-circle bg-light socialP-head-icon-box">--}}
{{--                                            <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight pt-1 ps-2">--}}
{{--                                        <div class="ch-7 fb">Bilal Khan</div>--}}
{{--                                        <div class="ch-5 text-muted">Lorem ipsum dolor sit...</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-auto bd-highlight mt-2">--}}
{{--                                        <div class="ch-5 text-muted">--}}
{{--                                            1h--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight ">--}}
{{--                                    <div class="bd-highlight ">--}}
{{--                                        <div class="rounded-circle bg-light socialP-head-icon-box">--}}
{{--                                            <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight pt-1 ps-2">--}}
{{--                                        <div class="ch-7 fb">Bilal Khan</div>--}}
{{--                                        <div class="ch-5 text-muted">Lorem ipsum dolor sit...</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-auto bd-highlight mt-2">--}}
{{--                                        <div class="ch-5 text-muted">--}}
{{--                                            1h--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}


{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight ">--}}
{{--                                    <div class="bd-highlight ">--}}
{{--                                        <div class="rounded-circle bg-light socialP-head-icon-box">--}}
{{--                                            <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight pt-1 ps-2">--}}
{{--                                        <div class="ch-7 fb">Bilal Khan</div>--}}
{{--                                        <div class="ch-5 text-muted">Lorem ipsum dolor sit...</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-auto bd-highlight mt-2">--}}
{{--                                        <div class="ch-5 text-muted">--}}
{{--                                            1h--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}


{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight ">--}}
{{--                                    <div class="bd-highlight ">--}}
{{--                                        <div class="rounded-circle bg-light socialP-head-icon-box">--}}
{{--                                            <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight pt-1 ps-2">--}}
{{--                                        <div class="ch-7 fb">Bilal Khan</div>--}}
{{--                                        <div class="ch-5 text-muted">Lorem ipsum dolor sit...</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-auto bd-highlight mt-2">--}}
{{--                                        <div class="ch-5 text-muted">--}}
{{--                                            1h--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight ">--}}
{{--                                    <div class="bd-highlight ">--}}
{{--                                        <div class="rounded-circle bg-light socialP-head-icon-box">--}}
{{--                                            <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight pt-1 ps-2">--}}
{{--                                        <div class="ch-7 fb">Bilal Khan</div>--}}
{{--                                        <div class="ch-5 text-muted">Lorem ipsum dolor sit...</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-auto bd-highlight mt-2">--}}
{{--                                        <div class="ch-5 text-muted">--}}
{{--                                            1h--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}


{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight ">--}}
{{--                                    <div class="bd-highlight ">--}}
{{--                                        <div class="rounded-circle bg-light socialP-head-icon-box">--}}
{{--                                            <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight pt-1 ps-2">--}}
{{--                                        <div class="ch-7 fb">Bilal Khan</div>--}}
{{--                                        <div class="ch-5 text-muted">Lorem ipsum dolor sit...</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-auto bd-highlight mt-2">--}}
{{--                                        <div class="ch-5 text-muted">--}}
{{--                                            1h--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}


{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight ">--}}
{{--                                    <div class="bd-highlight ">--}}
{{--                                        <div class="rounded-circle bg-light socialP-head-icon-box">--}}
{{--                                            <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight pt-1 ps-2">--}}
{{--                                        <div class="ch-7 fb">Bilal Khan</div>--}}
{{--                                        <div class="ch-5 text-muted">Lorem ipsum dolor sit...</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-auto bd-highlight mt-2">--}}
{{--                                        <div class="ch-5 text-muted">--}}
{{--                                            1h--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight ">--}}
{{--                                    <div class="bd-highlight ">--}}
{{--                                        <div class="rounded-circle bg-light socialP-head-icon-box">--}}
{{--                                            <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight pt-1 ps-2">--}}
{{--                                        <div class="ch-7 fb">Bilal Khan</div>--}}
{{--                                        <div class="ch-5 text-muted">Lorem ipsum dolor sit...</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-auto bd-highlight mt-2">--}}
{{--                                        <div class="ch-5 text-muted">--}}
{{--                                            1h--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}


{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">--}}
{{--                                <div class="d-flex bd-highlight ">--}}
{{--                                    <div class="bd-highlight ">--}}
{{--                                        <div class="rounded-circle bg-light socialP-head-icon-box">--}}
{{--                                            <img src="{{url('/general/img/live-user-01.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight pt-1 ps-2">--}}
{{--                                        <div class="ch-7 fb">Bilal Khan</div>--}}
{{--                                        <div class="ch-5 text-muted">Lorem ipsum dolor sit...</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-auto bd-highlight mt-2">--}}
{{--                                        <div class="ch-5 text-muted">--}}
{{--                                            1h--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                    <!-----------------------------------Message---------------------->--}}
{{--                </div>--}}


{{--                <div class="rounded-circle bg-light socialP-head-icon-box me-2 d-none d-sm-block">--}}
{{--                    <a href="{{url('/')}}"><img src="{{url('/general/img/icons/social-icon-03.svg')}}" alt=""></a>--}}
{{--                </div>--}}

                <div class="rounded-circle bg-light socialP-head-icon-box me-2">
                    <a href="{{url('/newsfeed')}}"><img src="{{url('/general/img/icons/social-icon-04.svg')}}" alt=""></a>
                </div>

            </div>
        </div>
    </div>
</header>
<!-----------------------------/Header------------------------------------->
