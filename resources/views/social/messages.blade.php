<!DOCTYPE html>
<html lang="en" data-textdirection="ltr">
<head>

    @include('.front.general.meta-title')
    @include('.front.general.favicon')
    @include('.front.general.external-css')
    @include('.front.general.style')


    <style>
        .scroll {
            overflow: scroll;
        }
        .scroll::-webkit-scrollbar {
            width: 12px;
        }

        .scroll::-webkit-scrollbar-track {
            /*-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);*/
            border-radius: 10px;
        }

        .scroll::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
        }




        .dropdown-menu-scroll-box{
            overflow: scroll;
            height: 300px;
            overflow-x: hidden;
            margin-right: 4px;
        }


        .scroll::-webkit-scrollbar {
            width: 8px;
        }

        .scroll::-webkit-scrollbar-track {
            /*-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);*/
            border-radius: 10px;
        }



    </style>


</head>

<body>













<!-------------Column--Sub---Section---------->
<div class="bg-white rounded-15 p-4 mt-4">

    <div class="d-flex">
        <div class="mr-auto w-100">
            <div class="d-flex flex-row bd-highlight user-box">
                <div class=" bd-highlight">
                    <div class="rounded-circle bg-light socialP-head-icon-box-extra">
                        <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra img-fit">
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
            <source src="assets/video/mov_bbb.mp4" type="video/mp4">
            <source src="assets/video/mov_bbb.ogv" type="video/ogg">
            Your browser does not support HTML video.
        </video>
    </div>

    <div class="d-flex">
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-11.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-12.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-13.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="ml-auto mt-2 w-100">
            <div class="d-flex float-end">
                <div class=""><span><img src="assets/img/icons/social-icon-14.svg" alt="" class="h-100 w-100 img-fit"></span></div>
                <div class=""><span><img src="assets/img/icons/social-icon-15.svg" alt="" class="h-100 w-100 img-fit"></span></div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row bd-highlight">
        <div class=" p-2 bd-highlight">
            <div class="like-avatar">
                <ul>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/3.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/1.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/5.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/2.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form class="mt-2">
                        <div class="input-group search-bar">
                                                        <span class="input-group-text bg-light p-0 m-0">
                                                            <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                                    <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
<!-------------Column--Sub---Section-End------>


<!-------------Column--Sub---Section- 2-1---------->
<div class="bg-white rounded-15 mt-3">

    <div class="d-flex bd-highlight ps-4 pe-4 pt-2 pb-2">
        <div class="me-auto bd-highlight">
            <div class="ch-2 fb">Suggested</div>
        </div>
        <div class="bd-highlight">
            <a href="#" class="link-secondary text-gray ch-7">See All</a>
        </div>
    </div>

    <div class="follow-slide">

        <div class=" col-sm-12 col-md-12 col-lg-12 col-12 p-2">
            <div class="follower-box bg-light text-center p-2">
                <img src="assets/img/live-user-01.jpg" alt="" class="mx-auto rounded-circle avatar img-fit mt-3">
                <div class="ch-7 fb mt-3">Bilal Khan</div>
                <div class="ch-5 text-danger">Level 03</div>
                <div class="ch-5 text-muted">Host</div>
                <button type="button" class="btn btn-outline-primary btn-sm pt-0 pb-0 ps-4 pe-4 mt-2 rounded-pill">Follow</button>
            </div>
        </div>

        <div class=" col-sm-12 col-md-12 col-lg-12 col-12 p-2">
            <div class="follower-box bg-light text-center p-2">
                <img src="assets/img/live-user-01.jpg" alt="" class="mx-auto rounded-circle avatar img-fit mt-3">
                <div class="ch-7 fb mt-3">Bilal Khan</div>
                <div class="ch-5 text-danger">Level 03</div>
                <div class="ch-5 text-muted">Host</div>
                <button type="button" class="btn btn-outline-primary btn-sm pt-0 pb-0 ps-4 pe-4 mt-2 rounded-pill">Follow</button>
            </div>
        </div>

        <div class=" col-sm-12 col-md-12 col-lg-12 col-12 p-2">
            <div class="follower-box bg-light text-center p-2">
                <img src="assets/img/live-user-01.jpg" alt="" class="mx-auto rounded-circle avatar img-fit mt-3">
                <div class="ch-7 fb mt-3">Bilal Khan</div>
                <div class="ch-5 text-danger">Level 03</div>
                <div class="ch-5 text-muted">Host</div>
                <button type="button" class="btn btn-outline-primary btn-sm pt-0 pb-0 ps-4 pe-4 mt-2 rounded-pill">Follow</button>
            </div>
        </div>

        <div class=" col-sm-12 col-md-12 col-lg-12 col-12 p-2">
            <div class="follower-box bg-light text-center p-2">
                <img src="assets/img/live-user-01.jpg" alt="" class="mx-auto rounded-circle avatar img-fit mt-3">
                <div class="ch-7 fb mt-3">Bilal Khan</div>
                <div class="ch-5 text-danger">Level 03</div>
                <div class="ch-5 text-muted">Host</div>
                <button type="button" class="btn btn-outline-primary btn-sm pt-0 pb-0 ps-4 pe-4 mt-2 rounded-pill">Follow</button>
            </div>
        </div>

        <div class=" col-sm-12 col-md-12 col-lg-12 col-12 p-2">
            <div class="follower-box bg-light text-center p-2">
                <img src="assets/img/live-user-01.jpg" alt="" class="mx-auto rounded-circle avatar img-fit mt-3">
                <div class="ch-7 fb mt-3">Bilal Khan</div>
                <div class="ch-5 text-danger">Level 03</div>
                <div class="ch-5 text-muted">Host</div>
                <button type="button" class="btn btn-outline-primary btn-sm pt-0 pb-0 ps-4 pe-4 mt-2 rounded-pill">Follow</button>
            </div>
        </div>

        <div class=" col-sm-12 col-md-12 col-lg-12 col-12 p-2">
            <div class="follower-box bg-light text-center p-2">
                <img src="assets/img/live-user-01.jpg" alt="" class="mx-auto rounded-circle avatar img-fit mt-3">
                <div class="ch-7 fb mt-3">Bilal Khan</div>
                <div class="ch-5 text-danger">Level 03</div>
                <div class="ch-5 text-muted">Host</div>
                <button type="button" class="btn btn-outline-primary btn-sm pt-0 pb-0 ps-4 pe-4 mt-2 rounded-pill">Follow</button>
            </div>
        </div>

        <div class=" col-sm-12 col-md-12 col-lg-12 col-12 p-2">
            <div class="follower-box bg-light text-center p-2">
                <img src="assets/img/live-user-01.jpg" alt="" class="mx-auto rounded-circle avatar img-fit mt-3">
                <div class="ch-7 fb mt-3">Bilal Khan</div>
                <div class="ch-5 text-danger">Level 03</div>
                <div class="ch-5 text-muted">Host</div>
                <button type="button" class="btn btn-outline-primary btn-sm pt-0 pb-0 ps-4 pe-4 mt-2 rounded-pill">Follow</button>
            </div>
        </div>

        <div class=" col-sm-12 col-md-12 col-lg-12 col-12 p-2">
            <div class="follower-box bg-light text-center p-2">
                <img src="assets/img/live-user-01.jpg" alt="" class="mx-auto rounded-circle avatar img-fit mt-3">
                <div class="ch-7 fb mt-3">Bilal Khan</div>
                <div class="ch-5 text-danger">Level 03</div>
                <div class="ch-5 text-muted">Host</div>
                <button type="button" class="btn btn-outline-primary btn-sm pt-0 pb-0 ps-4 pe-4 mt-2 rounded-pill">Follow</button>
            </div>
        </div>



    </div>




</div>
<!-------------Column--Sub---Section-End-2-1--------->



<!-------------Column--Sub---Section-----2-2------>
<div class="bg-white rounded-15 p-4 mt-4">

    <div class="d-flex">
        <div class="mr-auto w-100">
            <div class="d-flex flex-row bd-highlight user-box">
                <div class=" bd-highlight">
                    <div class="rounded-circle bg-light socialP-head-icon-box-extra">
                        <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra img-fit">
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
        <img src="assets/img/live-comment/live-massage-02.jpg" alt="" class="w-100 img-fit rounded-10">
    </div>

    <div class="d-flex">
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-11.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-12.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-13.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="ml-auto mt-2 w-100">
            <div class="d-flex float-end">
                <div class=""><span><img src="assets/img/icons/social-icon-14.svg" alt="" class="h-100 w-100 img-fit"></span></div>
                <div class=""><span><img src="assets/img/icons/social-icon-15.svg" alt="" class="h-100 w-100 img-fit"></span></div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row bd-highlight">
        <div class=" p-2 bd-highlight">
            <div class="like-avatar">
                <ul>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/3.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/1.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/5.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/2.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form class="mt-2">
                        <div class="input-group search-bar">
                                                <span class="input-group-text bg-light p-0 m-0">
                                                    <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                            <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
<!-------------Column--Sub---Section-End----2-2------>

<!-------------Column--Sub---Section-----2-3------>
<div class="bg-white rounded-15 p-4 mt-4">

    <div class="d-flex">
        <div class="mr-auto w-100">
            <div class="d-flex flex-row bd-highlight user-box">
                <div class=" bd-highlight">
                    <div class="rounded-circle bg-light socialP-head-icon-box-extra">
                        <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra img-fit">
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

    <div class="mt-3 row">
        <div class=" col-sm-6 col-md-6 col-lg-6 p-1">
            <img src="assets/img/social-gallery/gallery-01.jpg" alt="" class="w-100 h-100 ">
        </div>
        <div class=" col-sm-6 col-md-6 col-lg-6 p-1">
            <img src="assets/img/social-gallery/gallery-02.jpg" alt="" class="w-100 h-100 ">
        </div>
    </div>

    <div class="d-flex">
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-11.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-12.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-13.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="ml-auto mt-2 w-100">
            <div class="d-flex float-end">
                <div class=""><span><img src="assets/img/icons/social-icon-14.svg" alt="" class="h-100 w-100 img-fit"></span></div>
                <div class=""><span><img src="assets/img/icons/social-icon-15.svg" alt="" class="h-100 w-100 img-fit"></span></div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row bd-highlight">
        <div class=" p-2 bd-highlight">
            <div class="like-avatar">
                <ul>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/3.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/1.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/5.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/2.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form class="mt-2">
                        <div class="input-group search-bar">
                                                <span class="input-group-text bg-light p-0 m-0">
                                                    <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                            <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
<!-------------Column--Sub---Section-End----2-3------>

<!-------------Column--Sub---Section-----2-4------>
<div class="bg-white rounded-15 p-4 mt-4">

    <div class="d-flex">
        <div class="mr-auto w-100">
            <div class="d-flex flex-row bd-highlight user-box">
                <div class=" bd-highlight">
                    <div class="rounded-circle bg-light socialP-head-icon-box-extra">
                        <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra img-fit">
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

    <div class="mt-3 row position-relative">
        <div class=" col-sm-6 col-md-6 col-lg-6 p-0">
            <div class="position-relative">
                <img src="assets/img/social-gallery/gallery-03.jpg" alt="" class="w-100 h-100 ">
                <div class="position-absolute bottom-0 start-0 p-2">
                    <img src="assets/img/icons/gift-icon-01.svg" class="img-fit mb-2">
                    <div>
                        <img src="assets/img/live-user-03.jpg" alt="" class="border border-2 border-warning rounded-circle bg-light socialP-head-icon-box-extra img-fit">
                        <img src="assets/img/live-user-01.jpg" alt="" class="border border-2 border-warning rounded-circle bg-light socialP-head-icon-box-extra img-fit">
                        <img src="assets/img/live-user-02.jpg" alt="" class="border border-2 border-warning rounded-circle bg-light socialP-head-icon-box-extra img-fit">
                        <img src="assets/img/live-user-04.jpg" alt="" class="border border-2 border-warning rounded-circle bg-light socialP-head-icon-box-extra img-fit">
                    </div>
                </div>
            </div>
            <div class="bg-info rounded-0 text-white ch-7 ps-1" role="" style="width: 100%; height: 20px;" >
                <i class="fas fa-star"></i> <span class="fb ">1130</span>
            </div>
        </div>
        <div class=" col-sm-6 col-md-6 col-lg-6 p-0">
            <div class="position-relative">
                <img src="assets/img/social-gallery/gallery-04.jpg" alt="" class="w-100 h-100 ">
                <div class="position-absolute bottom-0 end-0 p-2 text-end">
                    <img src="assets/img/icons/gift-icon-02.svg" class="img-fit mb-2">
                    <div>
                        <img src="assets/img/live-user-03.jpg" alt="" class="border border-2 border-warning rounded-circle bg-light socialP-head-icon-box-extra img-fit">
                        <img src="assets/img/live-user-01.jpg" alt="" class="border border-2 border-warning rounded-circle bg-light socialP-head-icon-box-extra img-fit">
                        <img src="assets/img/live-user-02.jpg" alt="" class="border border-2 border-warning rounded-circle bg-light socialP-head-icon-box-extra img-fit">
                        <img src="assets/img/live-user-04.jpg" alt="" class="border border-2 border-warning rounded-circle bg-light socialP-head-icon-box-extra img-fit">
                    </div>
                </div>
                <div class="position-absolute top-0 start-0 p-2">
                    <span class="badge rounded-pill opa-black">James... <i class="fas text-info fa-plus-circle"></i></span>
                </div>
            </div>
            <div class="bg-warning rounded-0 text-white ch-7 pe-1 text-end" role="" style="width: 100%; height: 20px;" >
                <i class="fas fa-star"></i> <span class="fb ">1130</span>
            </div>
        </div>

        <div class=" text-white text-center p-2 position-absolute bottom-0 start-0 mb-3">
                            <span class="bg-dark ch-7 pt-2 pb-2 ps-3 pe-3 rounded-top">
                                01:15
                            </span>
        </div>
    </div>

    <div class="d-flex">
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-11.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-12.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-13.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="ml-auto mt-2 w-100">
            <div class="d-flex float-end">
                <div class=""><span><img src="assets/img/icons/social-icon-14.svg" alt="" class="h-100 w-100 img-fit"></span></div>
                <div class=""><span><img src="assets/img/icons/social-icon-15.svg" alt="" class="h-100 w-100 img-fit"></span></div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row bd-highlight">
        <div class=" p-2 bd-highlight">
            <div class="like-avatar">
                <ul>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/3.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/1.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/5.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/2.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form class="mt-2">
                        <div class="input-group search-bar">
                                                <span class="input-group-text bg-light p-0 m-0">
                                                    <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                            <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
<!-------------Column--Sub---Section-End----2-4------>

<!-------------Column--Sub---Section-----2-5------>
<div class="bg-white rounded-15 p-4 mt-4">

    <div class="d-flex">
        <div class="mr-auto w-100">
            <div class="d-flex flex-row bd-highlight user-box">
                <div class=" bd-highlight">
                    <div class="rounded-circle bg-light socialP-head-icon-box-extra">
                        <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra img-fit">
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

    <div class="mt-3 row">
        <div class=" col-sm-12 col-md-12 col-lg-12 p-1">
            <img src="assets/img/social-gallery/gallery-05.jpg" alt="" class="w-100 h-100 ">
        </div>
        <div class=" col-sm-6 col-md-6 col-lg-6 p-1">
            <div class="position-relative">
                <img src="assets/img/social-gallery/gallery-06.jpg" alt="" class="w-100 h-100 ">
                <div class="position-absolute start-0 bottom-0 p-2">
                    <div>
                        <img src="assets/img/icons/gift-icon-05.svg" >
                    </div>
                    <div>
                        <img src="assets/img/icons/gift-icon-04.svg" >
                    </div>
                    <div>
                        <img src="assets/img/icons/gift-icon-03.svg" >
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-sm-6 col-md-6 col-lg-6 p-1">
            <img src="assets/img/social-gallery/gallery-07.jpg" alt="" class="w-100 h-100 ">
        </div>
    </div>

    <div class="d-flex">
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-11.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-12.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-13.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="ml-auto mt-2 w-100">
            <div class="d-flex float-end">
                <div class=""><span><img src="assets/img/icons/social-icon-14.svg" alt="" class="h-100 w-100 img-fit"></span></div>
                <div class=""><span><img src="assets/img/icons/social-icon-15.svg" alt="" class="h-100 w-100 img-fit"></span></div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row bd-highlight">
        <div class=" p-2 bd-highlight">
            <div class="like-avatar">
                <ul>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/3.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/1.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/5.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/2.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form class="mt-2">
                        <div class="input-group search-bar">
                                                <span class="input-group-text bg-light p-0 m-0">
                                                    <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                            <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
<!-------------Column--Sub---Section-End----2-5------>

<!-------------Column--Sub---Section-----2-6------>
<div class="bg-white rounded-15 p-4 mt-4">

    <div class="d-flex">
        <div class="mr-auto w-100">
            <div class="d-flex flex-row bd-highlight user-box">
                <div class=" bd-highlight">
                    <div class="rounded-circle bg-light socialP-head-icon-box-extra">
                        <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra img-fit">
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

    <div class="mt-3 row">
        <div class=" col-sm-12 col-md-12 col-lg-12 p-1">
            <div class="position-relative">
                <img src="assets/img/social-gallery/gallery-08.jpg" alt="" class="w-100 h-100 ">
                <div class="position-absolute start-0 bottom-0 p-2">
                    <div>
                        <img src="assets/img/icons/gift-icon-05.svg" >
                    </div>
                    <div>
                        <img src="assets/img/icons/gift-icon-04.svg" >
                    </div>
                    <div>
                        <img src="assets/img/icons/gift-icon-03.svg" >
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex">
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-11.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-12.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-13.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="ml-auto mt-2 w-100">
            <div class="d-flex float-end">
                <div class=""><span><img src="assets/img/icons/social-icon-14.svg" alt="" class="h-100 w-100 img-fit"></span></div>
                <div class=""><span><img src="assets/img/icons/social-icon-15.svg" alt="" class="h-100 w-100 img-fit"></span></div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row bd-highlight">
        <div class=" p-2 bd-highlight">
            <div class="like-avatar">
                <ul>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/3.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/1.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/5.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/2.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form class="mt-2">
                        <div class="input-group search-bar">
                                                <span class="input-group-text bg-light p-0 m-0">
                                                    <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                            <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
<!-------------Column--Sub---Section-End----2-6------>


<!-------------Column--Sub---Section-----2-7------>
<div class="bg-white rounded-15 p-4 mt-4">

    <div class="d-flex">
        <div class="mr-auto w-100">
            <div class="d-flex flex-row bd-highlight user-box">
                <div class=" bd-highlight">
                    <div class="rounded-circle bg-light socialP-head-icon-box-extra">
                        <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra img-fit">
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

    <div class="mt-3 row">
        <div class=" col-sm-6 col-md-6 col-lg-6 p-1">
            <img src="assets/img/social-gallery/gallery-09.jpg" alt="" class="w-100 h-100 ">
        </div>
        <div class=" col-sm-6 col-md-6 col-lg-6 p-1">
            <img src="assets/img/social-gallery/gallery-10.jpg" alt="" class="w-100 h-100 ">
        </div>
        <div class=" col-sm-6 col-md-6 col-lg-6 p-1">
            <div class="position-relative">
                <img src="assets/img/social-gallery/gallery-11.jpg" alt="" class="w-100 h-100 ">
                <div class="position-absolute start-0 bottom-0 p-2">
                    <div>
                        <img src="assets/img/icons/gift-icon-05.svg" >
                    </div>
                    <div>
                        <img src="assets/img/icons/gift-icon-04.svg" >
                    </div>
                    <div>
                        <img src="assets/img/icons/gift-icon-03.svg" >
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-sm-6 col-md-6 col-lg-6 p-1">
            <img src="assets/img/social-gallery/gallery-12.jpg" alt="" class="w-100 h-100 ">
        </div>
    </div>

    <div class="d-flex">
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-11.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-12.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-13.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="ml-auto mt-2 w-100">
            <div class="d-flex float-end">
                <div class=""><span><img src="assets/img/icons/social-icon-14.svg" alt="" class="h-100 w-100 img-fit"></span></div>
                <div class=""><span><img src="assets/img/icons/social-icon-15.svg" alt="" class="h-100 w-100 img-fit"></span></div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row bd-highlight">
        <div class=" p-2 bd-highlight">
            <div class="like-avatar">
                <ul>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/3.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/1.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/5.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/2.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form class="mt-2">
                        <div class="input-group search-bar">
                                                <span class="input-group-text bg-light p-0 m-0">
                                                    <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                            <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
<!-------------Column--Sub---Section-End----2-7------>


<!-------------Column--Sub---Section-----2-8------>
<div class="bg-white rounded-15 p-4 mt-4">

    <div class="d-flex">
        <div class="mr-auto w-100">
            <div class="d-flex flex-row bd-highlight user-box">
                <div class=" bd-highlight">
                    <div class="rounded-circle bg-light socialP-head-icon-box-extra">
                        <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra img-fit">
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

    <div class="mt-3 row">
        <div class=" col-sm-6 col-md-6 col-lg-6 p-1">
            <img src="assets/img/social-gallery/gallery-06.jpg" alt="" class="w-100 h-100 ">
        </div>
        <div class=" col-sm-6 col-md-6 col-lg-6 p-1">
            <img src="assets/img/social-gallery/gallery-13.jpg" alt="" class="w-100 h-100 ">
        </div>
        <div class=" col-sm-4 col-md-4 col-lg-4 p-1">
            <div class="position-relative">
                <img src="assets/img/social-gallery/gallery-14.jpg" alt="" class="w-100 h-100 ">
                <div class="position-absolute start-0 bottom-0 p-2">

                    <div>
                        <img src="assets/img/icons/gift-icon-04.svg" >
                    </div>
                    <div>
                        <img src="assets/img/icons/gift-icon-03.svg" >
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-sm-4 col-md-4 col-lg-4 p-1">
            <img src="assets/img/social-gallery/gallery-15.jpg" alt="" class="w-100 h-100 ">
        </div>
        <div class=" col-sm-4 col-md-4 col-lg-4 p-1">
            <img src="assets/img/social-gallery/gallery-16.jpg" alt="" class="w-100 h-100 ">
        </div>
    </div>

    <div class="d-flex">
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-11.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-12.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-13.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="ml-auto mt-2 w-100">
            <div class="d-flex float-end">
                <div class=""><span><img src="assets/img/icons/social-icon-14.svg" alt="" class="h-100 w-100 img-fit"></span></div>
                <div class=""><span><img src="assets/img/icons/social-icon-15.svg" alt="" class="h-100 w-100 img-fit"></span></div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row bd-highlight">
        <div class=" p-2 bd-highlight">
            <div class="like-avatar">
                <ul>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/3.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/1.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/5.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/2.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form class="mt-2">
                        <div class="input-group search-bar">
                                                <span class="input-group-text bg-light p-0 m-0">
                                                    <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                            <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
<!-------------Column--Sub---Section-End----2-8------>


<!-------------Column--Sub---Section-----2-9------>
<div class="bg-white rounded-15 p-4 mt-4">

    <div class="d-flex">
        <div class="mr-auto w-100">
            <div class="d-flex flex-row bd-highlight user-box">
                <div class=" bd-highlight">
                    <div class="rounded-circle bg-light socialP-head-icon-box-extra">
                        <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra img-fit">
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

    <div class="mt-3 row">
        <div class=" col-sm-4 col-md-4 col-lg-4 p-1">
            <img src="assets/img/social-gallery/gallery-17.jpg" alt="" class="w-100 h-100 img-fit">
        </div>
        <div class=" col-sm-4 col-md-4 col-lg-4 p-1">
            <img src="assets/img/social-gallery/gallery-18.jpg" alt="" class="w-100 h-100 img-fit">
        </div>
        <div class=" col-sm-4 col-md-4 col-lg-4 p-1">
            <div class="position-relative">
                <img src="assets/img/social-gallery/gallery-14.jpg" alt="" class="w-100 h-100 img-fit">
                <div class="position-absolute start-0 bottom-0 p-2">

                    <div>
                        <img src="assets/img/icons/gift-icon-04.svg" >
                    </div>
                    <div>
                        <img src="assets/img/icons/gift-icon-03.svg" >
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-sm-4 col-md-4 col-lg-4 p-1">
            <img src="assets/img/social-gallery/gallery-19.jpg" alt="" class="w-100 h-100 img-fit">
        </div>
        <div class=" col-sm-4 col-md-4 col-lg-4 p-1">
            <img src="assets/img/social-gallery/gallery-20.jpg" alt="" class="w-100 h-100 img-fit">
        </div>
        <div class=" col-sm-4 col-md-4 col-lg-4 p-1">
            <div class="position-relative">
                <img src="assets/img/social-gallery/gallery-21.jpg" alt="" class="w-100 h-100 img-fit">
                <div class="h-100 w-100 opa-black position-absolute start-0 top-0">
                    <div class="text-center ch-1 text-white mt-5">
                        50+
                    </div>
                </div>

            </div>


        </div>
    </div>

    <div class="d-flex">
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-11.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-12.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="mt-2">
            <span><img src="assets/img/icons/social-icon-13.svg" alt="" class="h-100 w-100 img-fit"></span>
        </div>
        <div class="ml-auto mt-2 w-100">
            <div class="d-flex float-end">
                <div class=""><span><img src="assets/img/icons/social-icon-14.svg" alt="" class="h-100 w-100 img-fit"></span></div>
                <div class=""><span><img src="assets/img/icons/social-icon-15.svg" alt="" class="h-100 w-100 img-fit"></span></div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row bd-highlight">
        <div class=" p-2 bd-highlight">
            <div class="like-avatar">
                <ul>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/3.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/1.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/5.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/2.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form class="mt-2">
                        <div class="input-group search-bar">
                                                <span class="input-group-text bg-light p-0 m-0">
                                                    <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
                <img src="assets/img/live-user-02.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm img-fit">
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
                        <span><img src="assets/img/icons/social-icon-16.svg" alt="" class="img-fit"> Like </span>
                        <span class="ms-2"><img src="assets/img/icons/social-icon-17.svg" alt="" class="img-fit"> Reply</span>
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
                                            <img src="assets/img/live-user-03.jpg" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra-sm ms-1 img-fit">
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
<!-------------Column--Sub---Section-End----2-9------>























































    @include('.social.general.preloader')

    @include('.social.general.header')




    <section>

        <div class="container">

            <div class="row">


                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2 d-none d-sm-block">

                    <div style="background-color: #c6d4d5;  border-radius: 20px; height: calc(100vh - 125px);" class="p-2 mt-3 dropdown-menu-scroll-box scroll">



                        <div class="d-flex bd-highlight mb-3">

                            <div class="bd-highlight">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor2.png')}}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover">
                                </a>
                            </div>

                            <div class="w-100 bd-highlight">
                                <div style="margin-left: 10px; font-size: 14px; margin-top: 5px"> <span style="font-weight: bold">Junaid Khan</span></div>
                                <div style="margin-left: 10px; font-size: 10px">Hi, Looking forward to hear...</div>
                            </div>

                            <div class="p-2 bd-highlight pt-3">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>

                        </div>

                        <div class="d-flex bd-highlight mb-3">

                            <div class="bd-highlight">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor3.png')}}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover">
                                </a>
                            </div>

                            <div class="w-100 bd-highlight">
                                <div style="margin-left: 10px; font-size: 14px; margin-top: 5px"> <span style="font-weight: bold">Salman Khan</span></div>
                                <div style="margin-left: 10px; font-size: 10px">Hi</div>
                            </div>

                            <div class="p-2 bd-highlight pt-3">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>

                        </div>

                        <div class="d-flex bd-highlight mb-3">

                            <div class="bd-highlight">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor1.png')}}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover">
                                </a>
                            </div>

                            <div class="w-100 bd-highlight">
                                <div style="margin-left: 10px; font-size: 14px; margin-top: 5px"> <span style="font-weight: bold">Muzammil Ahmed</span></div>
                                <div style="margin-left: 10px; font-size: 10px">Hello, hope you are doing well.</div>
                            </div>

                            <div class="p-2 bd-highlight pt-3">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>

                        </div>

                        <div class="d-flex bd-highlight mb-3">

                            <div class="bd-highlight">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor2.png')}}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover">
                                </a>
                            </div>

                            <div class="w-100 bd-highlight">
                                <div style="margin-left: 10px; font-size: 14px; margin-top: 5px"> <span style="font-weight: bold">Junaid Khan</span></div>
                                <div style="margin-left: 10px; font-size: 10px">Hi, Looking forward to hear...</div>
                            </div>

                            <div class="p-2 bd-highlight pt-3">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>

                        </div>

                        <div class="d-flex bd-highlight mb-3">

                            <div class="bd-highlight">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor3.png')}}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover">
                                </a>
                            </div>

                            <div class="w-100 bd-highlight">
                                <div style="margin-left: 10px; font-size: 14px; margin-top: 5px"> <span style="font-weight: bold">Salman Khan</span></div>
                                <div style="margin-left: 10px; font-size: 10px">Hi</div>
                            </div>

                            <div class="p-2 bd-highlight pt-3">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>

                        </div>

                        <div class="d-flex bd-highlight mb-3">

                            <div class="bd-highlight">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor1.png')}}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover">
                                </a>
                            </div>

                            <div class="w-100 bd-highlight">
                                <div style="margin-left: 10px; font-size: 14px; margin-top: 5px"> <span style="font-weight: bold">Muzammil Ahmed</span></div>
                                <div style="margin-left: 10px; font-size: 10px">Hello, hope you are doing well.</div>
                            </div>

                            <div class="p-2 bd-highlight pt-3">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>

                        </div>

                        <div class="d-flex bd-highlight mb-3">

                            <div class="bd-highlight">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor2.png')}}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover">
                                </a>
                            </div>

                            <div class="w-100 bd-highlight">
                                <div style="margin-left: 10px; font-size: 14px; margin-top: 5px"> <span style="font-weight: bold">Junaid Khan</span></div>
                                <div style="margin-left: 10px; font-size: 10px">Hi, Looking forward to hear...</div>
                            </div>

                            <div class="p-2 bd-highlight pt-3">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>

                        </div>

                        <div class="d-flex bd-highlight mb-3">

                            <div class="bd-highlight">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor3.png')}}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover">
                                </a>
                            </div>

                            <div class="w-100 bd-highlight">
                                <div style="margin-left: 10px; font-size: 14px; margin-top: 5px"> <span style="font-weight: bold">Salman Khan</span></div>
                                <div style="margin-left: 10px; font-size: 10px">Hi</div>
                            </div>

                            <div class="p-2 bd-highlight pt-3">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>

                        </div>

                        <div class="d-flex bd-highlight mb-3">

                            <div class="bd-highlight">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor1.png')}}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover">
                                </a>
                            </div>

                            <div class="w-100 bd-highlight">
                                <div style="margin-left: 10px; font-size: 14px; margin-top: 5px"> <span style="font-weight: bold">Muzammil Ahmed</span></div>
                                <div style="margin-left: 10px; font-size: 10px">Hello, hope you are doing well.</div>
                            </div>

                            <div class="p-2 bd-highlight pt-3">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>

                        </div>

                        <div class="d-flex bd-highlight mb-3">

                            <div class="bd-highlight">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor2.png')}}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover">
                                </a>
                            </div>

                            <div class="w-100 bd-highlight">
                                <div style="margin-left: 10px; font-size: 14px; margin-top: 5px"> <span style="font-weight: bold">Junaid Khan</span></div>
                                <div style="margin-left: 10px; font-size: 10px">Hi, Looking forward to hear...</div>
                            </div>

                            <div class="p-2 bd-highlight pt-3">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>

                        </div>

                        <div class="d-flex bd-highlight mb-3">

                            <div class="bd-highlight">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor3.png')}}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover">
                                </a>
                            </div>

                            <div class="w-100 bd-highlight">
                                <div style="margin-left: 10px; font-size: 14px; margin-top: 5px"> <span style="font-weight: bold">Salman Khan</span></div>
                                <div style="margin-left: 10px; font-size: 10px">Hi</div>
                            </div>

                            <div class="p-2 bd-highlight pt-3">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>

                        </div>

                    </div>


                </div>


                <div class="col-12 col-sm-12 col-md-9 col-lg-9 mt-2 mb-4">


                    <div style="background-color: #c6d4d5;  border-radius: 20px;" class="p-2 mt-3 ">

                        <div class="bd-highlight ps-2 pe-2">
                            <div class="d-flex bd-highlight border-gray border-2" style="border-bottom: 1px solid #bdbdbd!important; padding-bottom: 10px">
                                <div class="me-auto bd-highlight">

                                    <div class="d-flex bd-highlight">
                                        <div class="bd-highlight">

                                            <div class="rounded-circle bg-light socialP-head-icon-box">
                                                <img src="{{url('/general/img/instructor3.png')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit" style="width: 40px; height: 40px">
                                            </div>

                                        </div>
                                        <div class="bd-highlight pl-2">
                                            <div style="margin-left: 10px">
                                                <div style="font-weight: bold">Bilal Khan</div>
                                                <div style="font-size: 10px">Online</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="bd-highlight p-2">
                                    <i class="fas fa-ellipsis-v"></i>
                                </div>
                            </div>
                        </div>


                    <div style="height: calc(100vh - 200px);" class="dropdown-menu-scroll-box scroll">

                        <div class="d-flex flex-column bd-highlight">



                            <div class="p-2 bd-highlight">


                                <div class="d-flex align-items-end flex-column bd-highlight">
                                    <div class="bd-highlight">
                                        <div class="d-flex bd-highlight">
                                            <div class="bd-highlight">
                                                <div class="d-flex flex-column bd-highlight mb-3 pe-2">
                                                    <div class="bd-highlight text-end ch-5 text-muted">Tim</div>
                                                    <div class="bd-highlight">
                                                        <div class="p-2 rounded" style="background-color: #259cfa!important;">
                                                            <div class="ch-5 text-white">
                                                                Lorem ipsum dolor sit consectetur adipiscing.
                                                            </div>
                                                            <div class="d-flex justify-content-end">
                                                                <div>
                                                                    <span class="ch-5 text-white">10:47</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bd-highlight">
                                                <div class="rounded-circle mt-3 bg-light user-img">
                                                    <img src="{{url('/general/img/instructor3.png')}}" alt="" class="rounded-circle bg-light user-img img-fit" style="height: 25px; width: 25px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="d-flex align-items-start flex-column bd-highlight">
                                    <div class="bd-highlight">

                                        <div class="d-flex bd-highlight">
                                            <div class="bd-highlight">
                                                <div class="rounded-circle me-2 bg-light user-img">
                                                    <img src="{{url('/general/img/instructor3.png')}}" alt="" class="rounded-circle bg-light user-img img-fit" style="height: 25px; width: 25px">
                                                </div>
                                            </div>
                                            <div class="bd-highlight">
                                                <div class="bg-light p-2 rounded">
                                                    <div class="ch-5 text-muted">
                                                        Lorem ipsum dolor sit consectetur adipiscing elit.
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <div>
                                                            <span class="ch-5 text-muted">10:47</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="d-flex align-items-end flex-column bd-highlight">
                                    <div class="bd-highlight">
                                        <div class="d-flex bd-highlight">
                                            <div class="bd-highlight">
                                                <div class="d-flex flex-column bd-highlight mb-3 pe-2">
                                                    <div class="bd-highlight text-end ch-5 text-muted">Tim</div>
                                                    <div class="bd-highlight">
                                                        <div class="p-2 rounded" style="background-color: #259cfa!important;">
                                                            <div class="ch-5 text-white">
                                                                Lorem ipsum dolor sit consectetur adipiscing.
                                                            </div>
                                                            <div class="d-flex justify-content-end">
                                                                <div>
                                                                    <span class="ch-5 text-white">10:47</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bd-highlight">
                                                <div class="rounded-circle mt-3 bg-light user-img">
                                                    <img src="{{url('/general/img/instructor3.png')}}" alt="" class="rounded-circle bg-light user-img img-fit" style="height: 25px; width: 25px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="d-flex align-items-start flex-column bd-highlight">
                                    <div class="bd-highlight">

                                        <div class="d-flex bd-highlight">
                                            <div class="bd-highlight">
                                                <div class="rounded-circle me-2 bg-light user-img">
                                                    <img src="{{url('/general/img/instructor3.png')}}" alt="" class="rounded-circle bg-light user-img img-fit" style="height: 25px; width: 25px">
                                                </div>
                                            </div>
                                            <div class="bd-highlight">
                                                <div class="bg-light p-2 rounded">
                                                    <div class="ch-5 text-muted">
                                                        Lorem ipsum dolor sit consectetur adipiscing elit.
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <div>
                                                            <span class="ch-5 text-muted">10:47</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="d-flex align-items-end flex-column bd-highlight">
                                    <div class="bd-highlight">
                                        <div class="d-flex bd-highlight">
                                            <div class="bd-highlight">
                                                <div class="d-flex flex-column bd-highlight mb-3 pe-2">
                                                    <div class="bd-highlight text-end ch-5 text-muted">Tim</div>
                                                    <div class="bd-highlight">
                                                        <div class="p-2 rounded" style="background-color: #259cfa!important;">
                                                            <div class="ch-5 text-white">
                                                                Lorem ipsum dolor sit consectetur adipiscing.
                                                            </div>
                                                            <div class="d-flex justify-content-end">
                                                                <div>
                                                                    <span class="ch-5 text-white">10:47</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bd-highlight">
                                                <div class="rounded-circle mt-3 bg-light user-img">
                                                    <img src="{{url('/general/img/instructor3.png')}}" alt="" class="rounded-circle bg-light user-img img-fit" style="height: 25px; width: 25px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="d-flex align-items-start flex-column bd-highlight">
                                    <div class="bd-highlight">

                                        <div class="d-flex bd-highlight">
                                            <div class="bd-highlight">
                                                <div class="rounded-circle me-2 bg-light user-img">
                                                    <img src="{{url('/general/img/instructor3.png')}}" alt="" class="rounded-circle bg-light user-img img-fit" style="height: 25px; width: 25px">
                                                </div>
                                            </div>
                                            <div class="bd-highlight">
                                                <div class="bg-light p-2 rounded">
                                                    <div class="ch-5 text-muted">
                                                        Lorem ipsum dolor sit consectetur adipiscing elit.
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <div>
                                                            <span class="ch-5 text-muted">10:47</span>
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
                </div>



            </div>




        </div>

    </section>


    @include('.social.general.script')


</body>
</html>
