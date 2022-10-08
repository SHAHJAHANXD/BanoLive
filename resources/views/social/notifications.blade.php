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

                    @include('.social.general.to-be-followings-rectangular')

                </div>


                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2 mb-4">

                    <div style="background-color: #c6d4d5; border-radius: 20px;" class="p-3 mt-3">
                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">

                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                        <img src="{{url('/general/img/instructor1.png')}}" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover">
                                </a>

                            </div>
                            <div class="p-0">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">

                                    <div style="margin-left: 10px; font-size: 14px;"> <span style="font-weight: bold">Muhazammil Ahmed</span> is following you</div>
                                    <div style="margin-left: 10px; font-size: 10px">12 May 2022</div>

                                </a>

                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">

                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor2.png')}}" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover">
                                </a>

                            </div>
                            <div class="p-0">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">

                                    <div style="margin-left: 10px; font-size: 14px;"> <span style="font-weight: bold">Sara Khan</span> is published the post</div>
                                    <div style="margin-left: 10px; font-size: 10px">12 May 2022</div>

                                </a>

                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">

                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor3.png')}}" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover">
                                </a>

                            </div>
                            <div class="p-0">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">

                                    <div style="margin-left: 10px; font-size: 14px;"> <span style="font-weight: bold">Junaid Khan</span> is published the post</div>
                                    <div style="margin-left: 10px; font-size: 10px">12 May 2022</div>

                                </a>

                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">

                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor1.png')}}" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover">
                                </a>

                            </div>
                            <div class="p-0">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">

                                    <div style="margin-left: 10px; font-size: 14px;"> <span style="font-weight: bold">Muhazammil Ahmed</span> is following you</div>
                                    <div style="margin-left: 10px; font-size: 10px">12 May 2022</div>

                                </a>

                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">

                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor2.png')}}" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover">
                                </a>

                            </div>
                            <div class="p-0">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">

                                    <div style="margin-left: 10px; font-size: 14px;"> <span style="font-weight: bold">Sara Khan</span> is published the post</div>
                                    <div style="margin-left: 10px; font-size: 10px">12 May 2022</div>

                                </a>

                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">

                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor3.png')}}" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover">
                                </a>

                            </div>
                            <div class="p-0">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">

                                    <div style="margin-left: 10px; font-size: 14px;"> <span style="font-weight: bold">Junaid Khan</span> is published the post</div>
                                    <div style="margin-left: 10px; font-size: 10px">12 May 2022</div>

                                </a>

                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">

                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor1.png')}}" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover">
                                </a>

                            </div>
                            <div class="p-0">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">

                                    <div style="margin-left: 10px; font-size: 14px;"> <span style="font-weight: bold">Muhazammil Ahmed</span> is following you</div>
                                    <div style="margin-left: 10px; font-size: 10px">12 May 2022</div>

                                </a>

                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">

                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor2.png')}}" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover">
                                </a>

                            </div>
                            <div class="p-0">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">

                                    <div style="margin-left: 10px; font-size: 14px;"> <span style="font-weight: bold">Sara Khan</span> is published the post</div>
                                    <div style="margin-left: 10px; font-size: 10px">12 May 2022</div>

                                </a>

                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">

                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor3.png')}}" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover">
                                </a>

                            </div>
                            <div class="p-0">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">

                                    <div style="margin-left: 10px; font-size: 14px;"> <span style="font-weight: bold">Junaid Khan</span> is published the post</div>
                                    <div style="margin-left: 10px; font-size: 10px">12 May 2022</div>

                                </a>

                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">

                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor1.png')}}" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover">
                                </a>

                            </div>
                            <div class="p-0">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">

                                    <div style="margin-left: 10px; font-size: 14px;"> <span style="font-weight: bold">Muhazammil Ahmed</span> is following you</div>
                                    <div style="margin-left: 10px; font-size: 10px">12 May 2022</div>

                                </a>

                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">

                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor2.png')}}" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover">
                                </a>

                            </div>
                            <div class="p-0">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">

                                    <div style="margin-left: 10px; font-size: 14px;"> <span style="font-weight: bold">Sara Khan</span> is published the post</div>
                                    <div style="margin-left: 10px; font-size: 10px">12 May 2022</div>

                                </a>

                            </div>
                        </div>

                        <div class="d-flex flex-row mt-2">
                            <div class="p-0">

                                <a href="{{url('/')}}" style="color: black; text-decoration: none">
                                    <img src="{{url('/general/img/instructor3.png')}}" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover">
                                </a>

                            </div>
                            <div class="p-0">
                                <a href="{{url('/')}}" style="color: black; text-decoration: none">

                                    <div style="margin-left: 10px; font-size: 14px;"> <span style="font-weight: bold">Junaid Khan</span> is published the post</div>
                                    <div style="margin-left: 10px; font-size: 10px">12 May 2022</div>

                                </a>

                            </div>
                        </div>

                    </div>

                </div>



                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2 d-none d-sm-block">




                    <img src="{{url('/general/img/banner1.png')}}" class="mt-3"  style="width: 100%; border-radius: 20px">




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
