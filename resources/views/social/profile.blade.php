<!DOCTYPE html>
<html lang="en" data-textdirection="ltr">
<head>

    @include('.front.general.meta-title')
    @include('.front.general.favicon')
    @include('.front.general.external-css')
    @include('.front.general.style')


    <style>

        .btn-unfollow {
            background-color: #ec2d1b;
            min-width: 80px;
            color: white;
            font-size: 14px;
            padding: 4px;

            border-radius: 50px;
        }
    </style>


</head>

<body class="bg-light">



    @include('.social.general.preloader')
    @include('.social.general.header')



    <!-------------------------------Profile Banner and Avatar----------------------------------->
    <section class="pb-5">

        <div class="profile-dp position-relative">

            @if($User->banner!=null)
                <img src="{{url('/uploads/'.$User->banner)}}" class="profile-cover" id="profile_banner_image">
            @else
                <img src="{{url('/general/img/default-cover.jpg')}}" class="profile-cover" id="profile_banner_image">
            @endif


            <div class="position-absolute top-0 end-0 cursor-p">

                <input type="file" class="file-div" id="profile_banner"  onchange="document.getElementById('profile_banner_image').src = window.URL.createObjectURL(this.files[0])" >
                <i class="fas fa-camera text-white fa-1x me-4 mt-4"></i>

            </div>
        </div>

        <div class="container">
            <div class="row position-relative mb-3">


                <div class="position-absolute bottom-0 start-0 profile-avatar-div">


                    <div class="d-flex flex-column bd-highlight mb-3">

                        <div class="bd-highlight">
                            <div class="d-flex bd-highlight">
                                <div class=" flex-grow-1 bd-highlight">
                                    <div class="d-flex bd-highlight">
                                        <div class=" bd-highlight">
                                            <div class="profile-avatar position-relative">


                                                @if($User->image!=null)
                                                    <img src="{{url('/uploads/'.$User->image)}}" id="profile_avatar" class="rounded-circle img-fit">
                                                @else
                                                    <img src="{{url('/general/img/default-user.jpg')}}" id="profile_avatar" class="rounded-circle img-fit">
                                                @endif

                                                <div class="rounded-circle bg-white cam-btn text-center position-absolute bottom-0 end-0 cursor-p">
                                                    <input type="file" class="file-div" id="profile_picture" onchange="document.getElementById('profile_avatar').src = window.URL.createObjectURL(this.files[0]); document.getElementById('profile_avatar_top').src = window.URL.createObjectURL(this.files[0]);" />
                                                    <i class="fas fa-camera text-muted fa-1x mt-2 cursor-p"></i>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="bd-highlight">

                                            <div class="d-flex flex-column bd-highlight ms-3">
                                                <div class="p-2 bd-highlight">
                                                    <div class="ch-2 text-white">
                                                        {{$User->full_name}}
                                                    </div>
                                                </div>
                                                <div class="ps-2 bd-highlight">
                                                    <div class="ch-5 text-white fb">
                                                        @if($User->username!=null)
                                                            {{'@'.$User->username}}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bd-highlight ms-4  d-none d-sm-block">
                                            <div class="d-flex flex-column bd-highlight ">
                                                <div class="p-2 bd-highlight">
                                                    <div class="ch-7 text-white mt-1">
                                                        {{$User->no_of_followers}}
                                                    </div>
                                                </div>
                                                <div class="ps-2 bd-highlight">
                                                    <div class="ch-5 text-white">
                                                        Followers
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bd-highlight ms-2  d-none d-sm-block">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="p-2 bd-highlight">
                                                    <div class="ch-7 text-white mt-1">
                                                        {{$User->no_of_followings}}
                                                    </div>
                                                </div>
                                                <div class="ps-2 bd-highlight">
                                                    <div class="ch-5 text-white">
                                                        Following
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class=" bd-highlight  d-none d-sm-block">
                                    <div class="level-btn mt-2">
                                        <div class="position-absolute top-50 start-0 translate-middle">
                                            <img src="{{url('/general/img/icons/social-icon-18.svg')}}" class="img-fit">
                                        </div>
                                        <div class="ch-7 fb text-white ms-2">LEVEL 01</div>
                                    </div>

                                </div>
{{--                                <div class=" bd-highlight p-2  d-none d-sm-block">--}}
{{--                                    <button type="button" class="btn btn-primary rounded-pill pt-1 pb-1 ch-7">EDIT PROFILE</button>--}}
{{--                                </div>--}}
                            </div>
                        </div>


                        <div class="bd-highlight  d-none d-sm-block">
                            <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="pills-timeline-tab" data-bs-toggle="pill" data-bs-target="#pills-timeline" type="button" role="tab" aria-controls="pills-timeline" aria-selected="true">Timeline</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-info-tab" data-bs-toggle="pill" data-bs-target="#pills-info" type="button" role="tab" aria-controls="pills-info" aria-selected="false">About</a>
                                </li>

{{--                                <li class="nav-item" role="presentation">--}}
{{--                                    <a class="nav-link" id="pills-videos-tab" data-bs-toggle="pill" data-bs-target="#pills-videos" type="button" role="tab" aria-controls="pills-videos" aria-selected="false">Videos</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item" role="presentation">--}}
{{--                                    <a class="nav-link" id="pills-album-tab" data-bs-toggle="pill" data-bs-target="#pills-album" type="button" role="tab" aria-controls="pills-album" aria-selected="false">Photo/Album</a>--}}
{{--                                </li>--}}

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-followers-tab" data-bs-toggle="pill" data-bs-target="#pills-followers" type="button" role="tab" aria-controls="pills-followers" aria-selected="false">Followers</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-following-tab" data-bs-toggle="pill" data-bs-target="#pills-following" type="button" role="tab" aria-controls="pills-following" aria-selected="false">Following</a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>
    <!------------------------------/Profile Banner and Avatar----------------------------------->





    <!------------------Section------------------------------------------------>
    <section class="mb-3 mt-5">
        <div class="container">
            <div class="row">




                <!-------------Column-----Section 1------->
                <div class="col-sm-12 col-md-3 col-lg-3 d-none d-sm-block">

                    <!-------------Column--Sub---Section------->
                    <div class="rounded-15 bg-white pb-2">

                        <div class="d-flex flex-column bd-highlight mb-3">
                            <div class="p-2 bd-highlight">
                                <div class="ch-2 fb">About Info</div>
                            </div>
                            <div class="p-2 bd-highlight">
                                <div class="d-flex flex-row bd-highlight">
                                    <div class="bd-highlight">
                                        <div class="rounded-circle bg-light text-center circle-box">
                                            <i class="fas fa-1x fa-home mt-2 text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="bd-highlight">
                                        <div class="ch-7 p-1 text-muted">Live in<span class="text-black fb"> Karachi, Pakistan.</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 bd-highlight">
                                <div class="d-flex flex-row bd-highlight">
                                    <div class="bd-highlight">
                                        <div class="rounded-circle bg-light text-center circle-box">
                                            <i class="fas fa-1x fa-map-marker-alt mt-2 text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="bd-highlight">
                                        <div class="ch-7 p-1 text-muted">From<span class="text-black fb"> Karachi, Pakistan.</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 bd-highlight">
                                <div class="d-flex flex-row bd-highlight">
                                    <div class="bd-highlight">
                                        <div class="rounded-circle bg-light text-center circle-box">
                                            <i class="fas fa-1x fa-graduation-cap mt-2 text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="bd-highlight">
                                        <div class="ch-7 p-1 text-muted">Studied at<span class="text-black fb"> Karachi University</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 bd-highlight">
                                <div class="d-flex flex-row bd-highlight">
                                    <div class="bd-highlight">
                                        <div class="rounded-circle bg-light text-center circle-box">
                                            <i class="fas fa-1x fa-graduation-cap mt-2 text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="bd-highlight">
                                        <div class="ch-7 p-1 text-muted">Went to<span class="text-black fb"> Oxford School</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 bd-highlight">
                                <div class="d-flex flex-row bd-highlight">
                                    <div class="bd-highlight">
                                        <div class="rounded-circle bg-light text-center circle-box">
                                            <i class="fas fa-1x fa-briefcase mt-2 text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="bd-highlight">
                                        <div class="ch-7 p-1 text-muted">Job at<span class="text-black fb"> Personal Work</span></div>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="p-2 bd-highlight">--}}
{{--                                <div class="ch-7">--}}
{{--                                    <a href="#" class="link-secondary">See More About Info</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>

                    </div>
                    <!-------------Column--Sub---Section End------->
                    <!-------------Column--Sub---Section----------->
{{--                    <div class="text-center rounded-15 bg-white mt-4 pb-3">--}}

{{--                        <div class="d-flex bd-highlight p-3">--}}
{{--                            <div class="me-auto bd-highlight">--}}
{{--                                <div class="ch-2 fb">My Photos</div>--}}
{{--                            </div>--}}
{{--                            <div class="bd-highlight">--}}
{{--                                <a href="{{url('/search')}}" class="link-secondary text-gray ch-7" style="color: rebeccapurple; text-decoration: none; font-size: 12px; font-weight: bold">See All</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row d-flex bd-highlight p-2">--}}
{{--                            <div class=" col-sm-6 col-md-4 col-lg-4 col-6">--}}
{{--                                <div class="img-box">--}}
{{--                                    <img src="{{url('/general/img/gallery/gallery-01.jpg')}}" alt="" class="w-100 img-fit"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class=" col-sm-6 col-md-4 col-lg-4 col-6">--}}
{{--                                <div class="img-box">--}}
{{--                                    <img src="{{url('/general/img/gallery/gallery-02.jpg')}}" alt="" class="w-100 img-fit"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class=" col-sm-6 col-md-4 col-lg-4 col-6">--}}
{{--                                <div class="img-box">--}}
{{--                                    <img src="{{url('/general/img/gallery/gallery-03.jpg')}}" alt="" class="w-100 img-fit"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class=" col-sm-6 col-md-4 col-lg-4 col-6">--}}
{{--                                <div class="img-box">--}}
{{--                                    <img src="{{url('/general/img/gallery/gallery-04.jpg')}}" alt="" class="w-100 img-fit"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class=" col-sm-6 col-md-4 col-lg-4 col-6">--}}
{{--                                <div class="img-box">--}}
{{--                                    <img src="{{url('/general/img/gallery/gallery-01.jpg')}}" alt="" class="w-100 img-fit"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class=" col-sm-6 col-md-4 col-lg-4 col-6">--}}
{{--                                <div class="img-box">--}}
{{--                                    <img src="{{url('/general/img/gallery/gallery-02.jpg')}}" alt="" class="w-100 img-fit"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class=" col-sm-6 col-md-4 col-lg-4 col-6">--}}
{{--                                <div class="img-box">--}}
{{--                                    <img src="{{url('/general/img/gallery/gallery-03.jpg')}}" alt="" class="w-100 img-fit"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class=" col-sm-6 col-md-4 col-lg-4 col-6">--}}
{{--                                <div class="img-box">--}}
{{--                                    <img src="{{url('/general/img/gallery/gallery-04.jpg')}}" alt="" class="w-100 img-fit"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}



{{--                    </div>--}}
                    <!-------------Column--Sub---Section End------->
                </div>
                <!-------------Column-----Section End------->







                <!-------------Column-----Section 2------------------->
                <div class="col-sm-12 col-md-6 col-lg-6">


                    <div class="tab-content" id="pills-tabContent">








                        <!-------------Profile Posts------->
                        <div class="tab-pane fade show active" id="pills-timeline" role="tabpanel" aria-labelledby="pills-timeline-tab">



                            @include('.social.general.create-post')




                            <!-------------Posts---------->
                            @include('.social.general.post')
                            <!-------------Posts--------->












                        </div>
                        <!-------------Profile Posts------->





















                        <!--------------Video Posts------------->
                        <div class="tab-pane fade" id="pills-videos" role="tabpanel" aria-labelledby="pills-videos-tab">


                            <!-------------Post 1---------->
                            <div class="bg-white rounded-15 p-4">

                                <div class="d-flex">
                                    <div class="mr-auto w-100">
                                        <div class="d-flex flex-row bd-highlight user-box">
                                            <div class=" bd-highlight">
                                                <div class="rounded-circle bg-light socialP-head-icon-box-extra">
                                                    <img src="{{url('/general/img/live-user-03.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra img-fit">
                                                </div>
                                            </div>
                                            <div class="ps-1 bd-highlight">
                                                <div class="ch-7 fb">Bilal Khan</div>
                                                <div class="ch-5 text-danger">Level 03</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pe-2">
                                        <button type="button" class="btn btn-primary ps-3  pe-3 rounded-pill ch-5 text-center pt-1 btn-sm">Follow</button>
                                    </div>
                                    <div class="ps-2">
                                        <i class="fas fa-ellipsis-v "></i>
                                    </div>
                                </div>

                                <div class="w-100 h-100 mt-3">
                                    <video width="100%" controls class="rounded-10">
                                        <source src="{{url('/general/video/mov_bbb.mp4')}}" type="video/mp4">
                                        <source src="{{url('/general/video/mov_bbb.ogv')}}" type="video/ogg">
                                        Your browser does not support HTML video.
                                    </video>
                                </div>

                                <div class="d-flex">
                                    <div class="mt-2">
                                        <span><img src="{{url('/general/img/icons/social-icon-11.svg')}}" alt="" class="h-100 w-100 img-fit"></span>
                                    </div>
                                    <div class="mt-2">
                                        <span><img src="{{url('/general/img/icons/social-icon-12.svg')}}" alt="" class="h-100 w-100 img-fit"></span>
                                    </div>
                                    <div class="mt-2">
                                        <span><img src="{{url('/general/img/icons/social-icon-13.svg')}}" alt="" class="h-100 w-100 img-fit"></span>
                                    </div>
                                    <div class="ml-auto mt-2 w-100">
                                        <div class="d-flex float-end">
                                            <div class=""><span><img src="{{url('/general/img/icons/social-icon-14.svg')}}" alt="" class="h-100 w-100 img-fit"></span></div>
                                            <div class=""><span><img src="{{url('/general/img/icons/social-icon-15.svg')}}" alt="" class="h-100 w-100 img-fit"></span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-row bd-highlight">
                                    <div class=" p-2 bd-highlight">
                                        <div class="like-avatar">
                                            <ul>
                                                <li><a href="#"><img src="{{url('/general/img/live-user-01.jpg')}}" class="img-fluid rounded-circle" alt="User"></a></li>
                                                <li><a href="#"><img src="{{url('/general/img/live-user-02.jpg')}}" class="img-fluid rounded-circle" alt="User"></a></li>
                                                <li><a href="#"><img src="{{url('/general/img/live-user-03.jpg')}}" class="img-fluid rounded-circle" alt="User"></a></li>
                                                <li><a href="#"><img src="{{url('/general/img/live-user-04.jpg')}}" class="img-fluid rounded-circle" alt="User"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <div class="ch-7 text-muted">Liked by <spn class="text-black fb">Laiba Khan</spn> and <spn class="text-black fb">1,245 others</spn></div>
                                    </div>
                                </div>


                                <div class="d-flex flex-row bd-highlight bg-light rounded-10 mt-3">
                                    <div class="bd-highlight p-2">
                                        <div class="rounded-circle bg-light socialP-head-icon-box-extra-sm ">
                                            <img src="{{url('/general/img/live-user-02.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
                                            <div class="status-icon" ></div>
                                        </div>
                                    </div>
                                    <div class="bd-highlight p-2">
                                        <div class="d-flex flex-column bd-highlight mb-3">
                                            <div class="bd-highlight">
                                                <div class="ch-7 text-black fb">Laiba Khan <span class="ch-5 text-muted">2h</span></div>
                                            </div>
                                            <div class="bd-highlight">
                                                <div class="ch-5 text-muted">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </div>
                                            </div>
                                            <div class="bd-highlight mt-2">
                                                <div class="text-muted ch-7">
                                                    <span><img src="{{url('/general/img/icons/social-icon-16.svg')}}" alt="" class="img-fit"> Like </span>
                                                    <span class="ms-2"><img src="{{url('/general/img/icons/social-icon-17.svg')}}" alt="" class="img-fit"> Reply</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-row-reverse bd-highlight">
                                    <div class="bd-highlight">
                                        <div class="d-flex flex-column bd-highlight mb-3">
                                            <div class=" ms-4 bd-highlight">


                                                <div class="d-flex flex-row bd-highlight bg-light rounded-10 mt-3">
                                                    <div class="bd-highlight p-2">
                                                        <div class="rounded-circle bg-light socialP-head-icon-box-extra-sm ">
                                                            <img src="{{url('/general/img/live-user-02.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
                                                            <div class="status-icon" ></div>
                                                        </div>
                                                    </div>
                                                    <div class="bd-highlight p-2">
                                                        <div class="d-flex flex-column bd-highlight mb-3">
                                                            <div class="bd-highlight">
                                                                <div class="ch-7 text-black fb">Laiba Khan <span class="ch-5 text-muted">2h</span></div>
                                                            </div>
                                                            <div class="bd-highlight">
                                                                <div class="ch-5 text-muted">
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                </div>
                                                            </div>
                                                            <div class="bd-highlight mt-2">
                                                                <div class="text-muted ch-7">
                                                                    <span><img src="{{url('/general/img/icons/social-icon-16.svg')}}" alt="" class="img-fit"> Like </span>
                                                                    <span class="ms-2"><img src="{{url('/general/img/icons/social-icon-17.svg')}}" alt="" class="img-fit"> Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <form class="mt-2">
                                                    <div class="input-group search-bar">
                                                <span class="input-group-text bg-light p-0 m-0">
                                                    <img src="{{url('/general/img/live-user-03.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
                                                </span>
                                                        <input type="text" class="form-control ch-7 bg-light" placeholder="Type Comment" aria-label="Username">
                                                        <span class="input-group-text bg-light pe-3 p-0 m-0 connect">
                                                    <i class="fas fa-paper-plane text-danger"></i>
                                                </span>
                                                    </div>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="d-flex flex-row bd-highlight bg-light w-100 rounded-10 mt-3">
                                    <div class="bd-highlight p-2">
                                        <div class="rounded-circle bg-light socialP-head-icon-box-extra-sm ">
                                            <img src="{{url('/general/img/live-user-02.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
                                            <div class="status-icon" ></div>
                                        </div>
                                    </div>
                                    <div class="bd-highlight p-2">
                                        <div class="d-flex flex-column bd-highlight mb-3">
                                            <div class="bd-highlight">
                                                <div class="ch-7 text-black fb">Laiba Khan <span class="ch-5 text-muted">2h</span></div>
                                            </div>
                                            <div class="bd-highlight">
                                                <div class="ch-5 text-muted">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing.
                                                </div>
                                            </div>
                                            <div class="bd-highlight mt-2">
                                                <div class="text-muted ch-7">
                                                    <span><img src="{{url('/general/img/icons/social-icon-16.svg')}}" alt="" class="img-fit"> Like </span>
                                                    <span class="ms-2"><img src="{{url('/general/img/icons/social-icon-17.svg')}}" alt="" class="img-fit"> Reply</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-column bd-highlight">
                                    <div class="bd-highlight mt-3">
                                        <form>
                                            <div class="input-group search-bar">
                                        <span class="input-group-text bg-light p-0 m-0">
                                            <img src="{{url('/general/img/live-user-03.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
                                        </span>
                                                <input type="text" class="form-control ch-7 bg-light" placeholder="Type Comment" aria-label="Username" >
                                                <span class="input-group-text bg-light pe-3 p-0 m-0 connect">
                                            <i class="fas fa-paper-plane text-danger"></i>
                                        </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>



                            </div>
                            <!------------/Post 1--------->

                        </div>
                        <!-------------/Video Posts------------->


































                        <!--------------Galleries------------->
                        <div class="tab-pane fade" id="pills-album" role="tabpanel" aria-labelledby="pills-album-tab">

                            <!---------Column--Sub---Section- 2-1---------->
                            <div class="bg-white rounded-15 p-4 ">

                                <div class="d-flex pb-2 bd-highlight border-bottom border-1 border-muted">
                                    <div class="ch-2 text-black fb">Photos/Albums</div>
                                </div>

                                <div class="row d-flex bd-highlight  mt-3">

                                    <div class=" col-sm-6 col-md-8 col-lg-8 col-6 mb-3">
                                        <div class="gallery-box bg-black">
                                            <img src="{{url('/general/img/gallery/album-image-01.jpg')}}" alt="" class="rounded img-fit w-100 h-100">
                                        </div>
                                    </div>

                                    <div class=" col-sm-6 col-md-4 col-lg-4 col-6 mb-3">
                                        <div class="gallery-box bg-black">
                                            <img src="{{url('/general/img/gallery/album-image-02.jpg')}}" alt="" class="rounded img-fit w-100 h-100">
                                        </div>
                                    </div>

                                    <div class=" col-sm-6 col-md-4 col-lg-4 col-6 mb-3">
                                        <div class="gallery-box bg-black">
                                            <img src="{{url('/general/img/gallery/album-image-03.jpg')}}" alt="" class="rounded img-fit w-100 h-100">
                                        </div>
                                    </div>

                                    <div class=" col-sm-6 col-md-8 col-lg-8 col-6 mb-3">
                                        <div class="gallery-box bg-black">
                                            <img src="{{url('/general/img/gallery/album-image-04.jpg')}}" alt="" class="rounded img-fit w-100 h-100">
                                        </div>
                                    </div>

                                    <div class=" col-sm-6 col-md-6 col-lg-6 col-6 mb-3">
                                        <div class="gallery-box bg-black">
                                            <img src="{{url('/general/img/gallery/album-image-05.jpg')}}" alt="" class="rounded img-fit w-100 h-100">
                                        </div>
                                    </div>

                                    <div class=" col-sm-6 col-md-6 col-lg-6 col-6 mb-3">
                                        <div class="gallery-box bg-black">
                                            <img src="{{url('/general/img/gallery/album-image-06.jpg')}}" alt="" class="rounded img-fit w-100 h-100">
                                        </div>
                                    </div>

                                    <div class=" col-sm-6 col-md-8 col-lg-8 col-6 mb-3">
                                        <div class="gallery-box bg-black">
                                            <img src="{{url('/general/img/gallery/album-image-07.jpg')}}" alt="" class="rounded img-fit w-100 h-100">
                                        </div>
                                    </div>

                                    <div class=" col-sm-6 col-md-4 col-lg-4 col-6 mb-3">
                                        <div class="gallery-box bg-black">
                                            <img src="{{url('/general/img/gallery/album-image-08.jpg')}}" alt="" class="rounded img-fit w-100 h-100">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!---------Column--Sub---Section-End-2-1------->

                        </div>
                        <!-------------/Galleries------------->
























                        <!-------------Tab-Section 6 Start----->
                        <div class="tab-pane fade" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">

                            <!--------Column--Sub---Section- 2-1---------->
                            <div class="bg-white rounded-15 p-4">

                                <div class="d-flex bd-highlight border-bottom border-2 border-muted">
                                    <div class="p-2 w-100 bd-highlight">
                                        <div class="ch-2 text-black fb">Personal Information</div>
                                    </div>
                                    <div class="p-2 flex-shrink-1 bd-highlight">
                                        <a href="#" class="link-info">Edit</a>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-12 mb-2">
                                        <label class="form-label ch-7 text-black fb">Bio</label>
                                        <textarea type="text" class="form-control form-control-sm" row="4"></textarea>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label ch-7 text-black fb">First Name</label>
                                        <input type="text" class="form-control form-control-sm" >
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label class="form-label ch-7 text-black fb">Last Name</label>
                                        <input type="text" class="form-control form-control-sm" >
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label class="form-label ch-7 text-black fb">Email</label>
                                        <input type="text" class="form-control form-control-sm" >
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label class="form-label ch-7 text-black fb">Last Name</label>
                                        <input type="text" class="form-control form-control-sm" >
                                    </div>

                                </div>
                            </div>
                            <!------Column--Sub---Section-End-2-1--------->

                            <!--------Column--Sub---Section- 2-2---------->
                            <div class="bg-white rounded-15 p-4 mt-3">

                                <div class="d-flex bd-highlight border-bottom border-2 border-muted">
                                    <div class="p-2 w-100 bd-highlight">
                                        <div class="ch-2 text-black fb">Address</div>
                                    </div>
                                    <div class="p-2 flex-shrink-1 bd-highlight">
                                        <a href="#" class="link-info">Edit</a>
                                    </div>
                                </div>


                                <div class="row mt-3">


                                    <div class="col-md-6 mb-2">
                                        <label class="form-label ch-7 text-black fb">Street</label>
                                        <input type="text" class="form-control form-control-sm" >
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label class="form-label ch-7 text-black fb">City</label>
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option selected>USA</option>
                                            <option value="1">UK</option>
                                            <option value="2">PAKISTAN</option>
                                            <option value="3">INDIA</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label class="form-label ch-7 text-black fb">Province</label>
                                        <input type="text" class="form-control form-control-sm" >
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label class="form-label ch-7 text-black fb">City</label>
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option selected>NEW YORK</option>
                                            <option value="1">KARACHI</option>
                                            <option value="2">DELHI</option>
                                        </select>
                                    </div>

                                </div>

                            </div>
                            <!------Column--Sub---Section-End-2-2--------->

                            <!--------Column--Sub---Section- 2-3---------->
                            <div class="bg-white rounded-15 p-4 mt-3">

                                <div class="d-flex bd-highlight border-bottom border-2 border-muted">
                                    <div class="p-2 w-100 bd-highlight">
                                        <div class="ch-2 text-black fb">Education</div>
                                    </div>
                                    <div class="p-2 flex-shrink-1 bd-highlight">
                                        <a href="#" class="link-info">Edit</a>
                                    </div>
                                </div>


                                <div class="row mt-3">


                                    <div class="col-md-6 mb-2">
                                        <label class="form-label ch-7 text-black fb">Degree</label>
                                        <input type="text" class="form-control form-control-sm" >
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label class="form-label ch-7 text-black fb">College</label>
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option selected>JDC</option>
                                            <option value="1">OXFORD</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label class="form-label ch-7 text-black fb">School</label>
                                        <input type="text" class="form-control form-control-sm" >
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label class="form-label ch-7 text-black fb">Country</label>
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option selected>USA</option>
                                            <option value="1">UK</option>
                                            <option value="2">PAKISTAN</option>
                                            <option value="3">INDIA</option>
                                        </select>
                                    </div>

                                </div>

                            </div>
                            <!------Column--Sub---Section-End-2-3--------->

                        </div>
                        <!-------------Tab-Section 6 End------->





                        <!-----------Followers--------->
                        <div class="tab-pane fade" id="pills-followers" role="tabpanel" aria-labelledby="pills-followers-tab">

                            @include('.social.general.my-follower')

                        </div>
                        <!----------/Followers--------->




                        <!-------------My Following-------------->
                        <div class="tab-pane fade" id="pills-following" role="tabpanel" aria-labelledby="pills-following-tab">

                            @include('.social.general.my-following')

                        </div>
                        <!------------/My Following-------------->



                    </div>



                </div>
                <!-------------Column-----Section End----------------->







                <!-------------Column 3----------->
                <div class="col-sm-12 col-md-3 col-lg-3 d-none d-sm-block">

                    <!-------------to-be-followings---------->
                    @include('.social.general.to-be-followings-rectangular')
                    <!-------------to-be-followings--------->

                </div>
                <!------------/Column 3----------->





            </div>
        </div>
    </section>
    <!------------------/ Section----------------------------------------------->






    @include('.social.general.modal')
    @include('.social.general.script')






<script>


    // -------------------------------------------------Unfollow------------------------------------------------------------
    $(document).on( 'click', '.unfollow', function (e) {
        e.preventDefault();

        var string = jQuery(this).attr("id");
        var array = string.split('_');
        var id=array[1];





        if(id!==null){

            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();


            if(dataTokenGet.access_token!==''){

                var fdata =new FormData();
                fdata.append('id',id);

                $.ajax({
                    url: dataApiUrl+'/social/unfollow',
                    data: fdata,
                    type: 'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    dataType:'json',
                    processData: false,
                    contentType: false,
                    // headers: {"Authorization": "Bearer " + dataTokenGet.access_token},

                    beforeSend: function(){

                    },
                    success:function(data){

                        //$("#to_be_following_item_"+id).slideUp();

                        $('#following_item_'+id).fadeOut("fast", function() {
                            $(this).remove();
                        });

                        if(data[0].error==='true'){
                            alert(data[0].message);
                        }else{
                            //alert(data[0].message);
                        }


                    },
                    error: function(xmlhttprequest, textstatus, message) {

                        if(textstatus==="timeout") {
                            alert('Timeout Please try again.');
                        }else {
                            if(navigator.onLine) {

                                if(textstatus==="error"){
                                    alert(message);
                                }

                            }else {
                                alert('Check your internet connection then try again later.');
                            }
                        }

                    }


                });

            }else {
                location.reload();
            }

        }else {
            alert('Something went wrong.');
        }

    });
    // ------------------------------------------------/Unfollow------------------------------------------------------------


    // -----------------------------------------------Follow Remove---------------------------------------------------------
    $(document).on( 'click', '.remove-follower', function (e) {
        e.preventDefault();

        var string = jQuery(this).attr("id");
        var array = string.split('_');
        var id=array[2];




        if(id!==null){


            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();


            if(dataTokenGet.access_token!==''){

                var fdata =new FormData();
                fdata.append('id',id);

                $.ajax({
                    url: dataApiUrl+'/social/remove-follower',
                    data: fdata,
                    type: 'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    dataType:'json',
                    processData: false,
                    contentType: false,
                    // headers: {"Authorization": "Bearer " + dataTokenGet.access_token},

                    beforeSend: function(){

                    },
                    success:function(data){


                        $('#follower_item_'+id).fadeOut("fast", function() {
                            $(this).remove();
                        });

                        if(data[0].error==='true'){
                            alert(data[0].message);
                        }else{
                            //alert(data[0].message);
                        }

                        // if(data[0].error==='true'){
                        //     alert(data[0].message);
                        // }else{
                        //     $('.followers_'+id).fadeOut("fast", function() {
                        //         $(this).remove();
                        //     });
                        // }

                    },
                    error: function(xmlhttprequest, textstatus, message) {

                        if(textstatus==="timeout") {
                            alert('Timeout Please try again.');
                        }else {
                            if(navigator.onLine) {

                                if(textstatus==="error"){
                                    alert(message);
                                }

                            }else {
                                alert('Check your internet connection then try again later.');
                            }
                        }

                    }


                });

            }else {
                location.reload();
            }

        }else {
            alert('Something went wrong.');
        }

    });
    // ----------------------------------------------/Follow Remove---------------------------------------------------------


    // ------------------------------------------------Follow Back----------------------------------------------------------

    $(document).on( 'click', '.follow-back', function (e) {
        e.preventDefault();

        var string = jQuery(this).attr("id");
        var array = string.split('_');
        var id=array[2];




        if(id!==null){

            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();



            if(dataTokenGet.access_token!==''){

                var fdata =new FormData();
                fdata.append('id',id);

                $.ajax({
                    url: dataApiUrl+'/social/follow-back',
                    data: fdata,
                    type: 'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    dataType:'json',
                    processData: false,
                    contentType: false,
                    // headers: {"Authorization": "Bearer " + dataTokenGet.access_token},

                    beforeSend: function(){

                    },
                    success:function(data){

                        alert(data[0].message);


                        // if(data[0].error==='true'){
                        //     alert(data[0].message);
                        // }else{
                        //     window.location.href= dataAppUrl+'/profile';
                        // }

                    },
                    error: function(xmlhttprequest, textstatus, message) {

                        if(textstatus==="timeout") {
                            alert('Timeout Please try again.');
                        }else {
                            if(navigator.onLine) {

                                if(textstatus==="error"){
                                    alert(message);
                                }

                            }else {
                                alert('Check your internet connection then try again later.');
                            }
                        }

                    }


                });

            }else {
                location.reload();
            }

        }else {
            alert('Something went wrong.');
        }




    });

    // -----------------------------------------------/Follow Back----------------------------------------------------------


</script>


</body>
</html>
