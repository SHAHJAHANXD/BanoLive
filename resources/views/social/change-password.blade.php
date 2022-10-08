<!DOCTYPE html>
<html lang="en" data-textdirection="ltr">
<head>

    @include('.front.general.meta-title')
    @include('.front.general.favicon')
    @include('.front.general.external-css')
    @include('.front.general.style')



    <style>


        .btn-going {
            background-color: #8e5dec;
            min-width: 50px;
            color: white;
            font-size: 11px;
            padding: 0px;
        }

        .btn-not-going{

            background-color: #c7ecde;
            min-width: 50px;
            color: #131313;
            font-size: 11px;
            padding: 0px;
        }

        .btn-see-more{
            background-color: #c7ecde;
            min-width: 50px;
            color: #131313;
            font-size: 11px;
            padding: 5px;
            width: 100%;
        }
    </style>


</head>

<body>



    @include('.social.general.preloader')

    @include('.social.general.header')




    <section>

        <div class="container">
            <div class="row">


                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2 d-none d-sm-block">

                    <div style="background-color: #c6d4d5; border-radius: 20px;" class="p-3 mt-3">


                        <div class="d-flex bd-highlight">
                            <div class="w-100 bd-highlight">
                                <div class="text-uppercase font-weight-bold">Events</div>
                            </div>
                            <div class="flex-shrink-1 bd-highlight"><i class="fas fa-ellipsis-h"></i></div>
                        </div>





                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">
                                <img src="{{url('/front/img/avatars/1-small.png')}}" class="rounded-circle" style="width: 60px">
                            </div>
                            <div class="p-0">
                                <div style="margin-left: 10px; font-size: 14px; font-weight: bold">Event Name</div>
                                <div style="margin-left: 10px; font-size: 12px;">
                                    25 December 2022
                                </div>

                                <div style="margin-left: 10px; font-size: 12px;">
                                    <button type="button" class="btn btn-going btn-sm">Going</button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">
                                <img src="{{url('/front/img/avatars/3-small.png')}}" class="rounded-circle" style="width: 60px">
                            </div>
                            <div class="p-0">
                                <div style="margin-left: 10px; font-size: 14px; font-weight: bold">Event Name</div>
                                <div style="margin-left: 10px; font-size: 12px;">
                                    25 December 2022
                                </div>

                                <div style="margin-left: 10px; font-size: 12px;">
                                    <button type="button" class="btn btn-going btn-sm">Going</button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">
                                <img src="{{url('/front/img/avatars/1-small.png')}}" class="rounded-circle" style="width: 60px">
                            </div>
                            <div class="p-0">
                                <div style="margin-left: 10px; font-size: 14px; font-weight: bold">Event Name</div>
                                <div style="margin-left: 10px; font-size: 12px;">
                                    25 December 2022
                                </div>

                                <div style="margin-left: 10px; font-size: 12px;">
                                    <button type="button" class="btn btn-going btn-sm">Going</button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">
                                <img src="{{url('/front/img/avatars/5-small.png')}}" class="rounded-circle" style="width: 60px">
                            </div>
                            <div class="p-0">
                                <div style="margin-left: 10px; font-size: 14px; font-weight: bold">Event Name</div>
                                <div style="margin-left: 10px; font-size: 12px;">
                                    25 December 2022
                                </div>

                                <div style="margin-left: 10px; font-size: 12px;">
                                    <button type="button" class="btn btn-not-going btn-sm">Going</button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">
                                <img src="{{url('/front/img/avatars/6-small.png')}}" class="rounded-circle" style="width: 60px">
                            </div>
                            <div class="p-0">
                                <div style="margin-left: 10px; font-size: 14px; font-weight: bold">Event Name</div>
                                <div style="margin-left: 10px; font-size: 12px;">
                                    25 December 2022
                                </div>

                                <div style="margin-left: 10px; font-size: 12px;">
                                    <button type="button" class="btn btn-going btn-sm">Going</button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">
                                <img src="{{url('/front/img/avatars/10-small.png')}}" class="rounded-circle" style="width: 60px">
                            </div>
                            <div class="p-0">
                                <div style="margin-left: 10px; font-size: 14px; font-weight: bold">Event Name</div>
                                <div style="margin-left: 10px; font-size: 12px;">
                                    25 December 2022
                                </div>

                                <div style="margin-left: 10px; font-size: 12px;">
                                    <button type="button" class="btn btn-going btn-sm">Going</button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">
                                <img src="{{url('/front/img/avatars/3-small.png')}}" class="rounded-circle" style="width: 60px">
                            </div>
                            <div class="p-0">
                                <div style="margin-left: 10px; font-size: 14px; font-weight: bold">Event Name</div>
                                <div style="margin-left: 10px; font-size: 12px;">
                                    25 December 2022
                                </div>

                                <div style="margin-left: 10px; font-size: 12px;">
                                    <button type="button" class="btn btn-going btn-sm">Going</button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">
                                <img src="{{url('/front/img/avatars/1-small.png')}}" class="rounded-circle" style="width: 60px">
                            </div>
                            <div class="p-0">
                                <div style="margin-left: 10px; font-size: 14px; font-weight: bold">Event Name</div>
                                <div style="margin-left: 10px; font-size: 12px;">
                                    25 December 2022
                                </div>

                                <div style="margin-left: 10px; font-size: 12px;">
                                    <button type="button" class="btn btn-going btn-sm">Going</button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">
                                <img src="{{url('/front/img/avatars/5-small.png')}}" class="rounded-circle" style="width: 60px">
                            </div>
                            <div class="p-0">
                                <div style="margin-left: 10px; font-size: 14px; font-weight: bold">Event Name</div>
                                <div style="margin-left: 10px; font-size: 12px;">
                                    25 December 2022
                                </div>

                                <div style="margin-left: 10px; font-size: 12px;">
                                    <button type="button" class="btn btn-not-going btn-sm">Going</button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">
                                <img src="{{url('/front/img/avatars/6-small.png')}}" class="rounded-circle" style="width: 60px">
                            </div>
                            <div class="p-0">
                                <div style="margin-left: 10px; font-size: 14px; font-weight: bold">Event Name</div>
                                <div style="margin-left: 10px; font-size: 12px;">
                                    25 December 2022
                                </div>

                                <div style="margin-left: 10px; font-size: 12px;">
                                    <button type="button" class="btn btn-going btn-sm">Going</button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">
                                <img src="{{url('/front/img/avatars/10-small.png')}}" class="rounded-circle" style="width: 60px">
                            </div>
                            <div class="p-0">
                                <div style="margin-left: 10px; font-size: 14px; font-weight: bold">Event Name</div>
                                <div style="margin-left: 10px; font-size: 12px;">
                                    25 December 2022
                                </div>

                                <div style="margin-left: 10px; font-size: 12px;">
                                    <button type="button" class="btn btn-going btn-sm">Going</button>
                                </div>
                            </div>
                        </div>



                        <button type="button" class="btn btn-see-more btn-sm mt-3">See More</button>



                    </div>

                </div>


                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2 mb-4">


                    <div style="background-color: #c6d4d5; border-radius: 20px;" class="p-3 mt-3">



                        <div class="d-flex bd-highlight">
                            <div class="w-100 bd-highlight">

                                <div class="d-flex flex-row mt-2">
                                    <div class="p-0">
                                        <img src="{{url('/front/img/avatars/5-small.png')}}" class="rounded-circle" style="width: 40px">
                                    </div>
                                    <div class="p-0">
                                        <div style="margin-left: 10px; font-size: 14px; font-weight: bold">Full Name</div>
                                        <div style="margin-left: 10px; font-size: 12px;">
                                            25 December 2022
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex-shrink-1 bd-highlight mt-3"><i class="fas fa-ellipsis-h"></i></div>
                        </div>


                        <div class="mt-1">

                            <img src="{{url('/general/img/banner1.png')}}" class="rounded mt-3"  style="width: 100%">

                        </div>

                    </div>



                    <div style="background-color: #c6d4d5; border-radius: 20px;" class="p-3 mt-3">



                        <div class="d-flex bd-highlight">
                            <div class="w-100 bd-highlight">

                                <div class="d-flex flex-row mt-2">
                                    <div class="p-0">
                                        <img src="{{url('/front/img/avatars/3-small.png')}}" class="rounded-circle" style="width: 40px">
                                    </div>
                                    <div class="p-0">
                                        <div style="margin-left: 10px; font-size: 14px; font-weight: bold">Full Name</div>
                                        <div style="margin-left: 10px; font-size: 12px;">
                                            25 December 2022
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex-shrink-1 bd-highlight mt-3"><i class="fas fa-ellipsis-h"></i></div>
                        </div>


                        <div class="mt-1">

                            <img src="{{url('/general/img/banner3.png')}}" class="rounded mt-3"  style="width: 100%">

                        </div>

                    </div>





                    <div style="background-color: #c6d4d5; border-radius: 20px;" class="p-3 mt-3">



                        <div class="d-flex bd-highlight">
                            <div class="w-100 bd-highlight">

                                <div class="d-flex flex-row mt-2">
                                    <div class="p-0">
                                        <img src="{{url('/front/img/avatars/12-small.png')}}" class="rounded-circle" style="width: 40px">
                                    </div>
                                    <div class="p-0">
                                        <div style="margin-left: 10px; font-size: 14px; font-weight: bold">Full Name</div>
                                        <div style="margin-left: 10px; font-size: 12px;">
                                            25 December 2022
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex-shrink-1 bd-highlight mt-3"><i class="fas fa-ellipsis-h"></i></div>
                        </div>


                        <div class="mt-1">

                            <img src="{{url('/general/img/banner2.png')}}" class="rounded mt-3"  style="width: 100%">

                        </div>

                    </div>




                </div>


                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2 d-none d-sm-block">




                    <div style="background-color: #c6d4d5; border-radius: 20px;" class="p-3 mt-3">


                        <div class="d-flex bd-highlight">
                            <div class="w-100 bd-highlight">
                                <div class="text-uppercase font-weight-bold">Directory</div>
                            </div>
                            <div class="flex-shrink-1 bd-highlight"><i class="fas fa-ellipsis-h"></i></div>
                        </div>





                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">
                                <img src="{{url('/front/img/avatars/12-small.png')}}" class="rounded-circle" style="width: 60px">
                            </div>
                            <div class="p-0">
                                <div style="margin-left: 10px; font-size: 14px; font-weight: bold">John Smith</div>
                                <div style="margin-left: 10px; font-size: 12px;">
                                    worked on <span><a href="http://127.0.0.1:8000" style="text-decoration: none">Amazon</a></span>
                                </div>

                                <div style="margin-left: 10px; font-size: 12px; color: #919191">
                                    <p>Lorem Ipsum is...</p>
                                </div>
                            </div>
                        </div>




                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">
                                <img src="{{url('/front/img/avatars/11-small.png')}}" class="rounded-circle" style="width: 60px">
                            </div>
                            <div class="p-0">
                                <div style="margin-left: 10px; font-size: 14px; font-weight: bold">John Smith</div>
                                <div style="margin-left: 10px; font-size: 12px;">
                                    worked on <span><a href="http://127.0.0.1:8000" style="text-decoration: none">Amazon</a></span>
                                </div>

                                <div style="margin-left: 10px; font-size: 12px; color: #919191">
                                    <p>Lorem Ipsum is...</p>
                                </div>
                            </div>
                        </div>


                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">
                                <img src="{{url('/front/img/avatars/5-small.png')}}" class="rounded-circle" style="width: 60px">
                            </div>
                            <div class="p-0">
                                <div style="margin-left: 10px; font-size: 14px; font-weight: bold">John Smith</div>
                                <div style="margin-left: 10px; font-size: 12px;">
                                    worked on <span><a href="http://127.0.0.1:8000" style="text-decoration: none">Amazon</a></span>
                                </div>

                                <div style="margin-left: 10px; font-size: 12px; color: #919191">
                                    <p>Lorem Ipsum is...</p>
                                </div>
                            </div>
                        </div>



                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">
                                <img src="{{url('/front/img/avatars/3-small.png')}}" class="rounded-circle" style="width: 60px">
                            </div>
                            <div class="p-0">
                                <div style="margin-left: 10px; font-size: 14px; font-weight: bold">John Smith</div>
                                <div style="margin-left: 10px; font-size: 12px;">
                                    worked on <span><a href="http://127.0.0.1:8000" style="text-decoration: none">Amazon</a></span>
                                </div>

                                <div style="margin-left: 10px; font-size: 12px; color: #919191">
                                    <p>Lorem Ipsum is...</p>
                                </div>
                            </div>
                        </div>


                        <button type="button" class="btn btn-see-more btn-sm mt-3">See More</button>



                    </div>




                    <div style="background-color: #c6d4d5; border-radius: 20px;" class="p-3 mt-3">


                        <div class="d-flex bd-highlight">
                            <div class="w-100 bd-highlight">
                                <div class="text-uppercase font-weight-bold">Award</div>
                            </div>
                            <div class="flex-shrink-1 bd-highlight"><i class="fas fa-ellipsis-h"></i></div>
                        </div>





                        <div class="row">

                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                                <img src="{{url('/general/img/news1.png')}}" class="rounded"  style="width: 100%">
                            </div>


                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                                <img src="{{url('/general/img/news2.png')}}" class="rounded"  style="width: 100%">
                            </div>



                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                                <img src="{{url('/general/img/news2.png')}}" class="rounded"  style="width: 100%">
                            </div>


                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                                <img src="{{url('/general/img/news1.png')}}" class="rounded"  style="width: 100%">
                            </div>




                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <button type="button" class="btn btn-see-more btn-sm mt-3">See More</button>
                            </div>

                        </div>






                    </div>






                    <img src="{{url('/general/img/banner1.png')}}" class="rounded mt-3"  style="width: 100%">




                    <div style="text-align: center; color: #ab4185; font-size: 12px" class="mt-3">
                        Copyright © 2022 IAM Universe.<br>All rights reserved.
                    </div>


                </div>

            </div>
        </div>

    </section>


    @include('.social.general.script')


</body>
</html>
