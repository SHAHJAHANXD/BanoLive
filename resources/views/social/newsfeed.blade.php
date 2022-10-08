<!DOCTYPE html>
<html lang="en" data-textdirection="ltr">
<head>

    @include('.front.general.meta-title')
    @include('.front.general.favicon')
    @include('.front.general.external-css')
    @include('.front.general.style')


</head>

<body class="bg-light">



    @include('.social.general.preloader')

    @include('.social.general.header')



    <!------------------Section------------------------------------------------>
    <section class="mb-3 mt-5">
        <div class="container">
            <div class="row">






                <!-------------Column 1------------>
                <div class=" col-sm-12 col-md-3 col-lg-3  d-none d-sm-block">

                    <!-------------Column--Sub---Section------->
                    <div class="text-center rounded-15 bg-white pb-4">

                        <a href="{{url('/profile')}}">

                            @if($User->image!=null)
                                <img src="{{url('/uploads/'.$User->image)}}" alt="" class="rounded-circle img-fit mt-3" height="100px" width="100px">
                            @else
                                <img src="{{url('/general/img/default-user.jpg')}}" alt="" class="rounded-circle img-fit mt-3" height="100px" width="100px">
                            @endif

                        </a>

                        <div class="ch-2 fb mt-2">

                            <a href="{{url('/profile')}}" style="color: black; text-decoration: none">
                                {{$User->full_name}}
                            </a>

                        </div>

                        <div class="ch-5">

                            <a href="{{url('/profile')}}" style="color: black; text-decoration: none">
                            @if($User->username!=null)
                                {{'@'.$User->username}}
                            @endif
                            </a>
                        </div>

                        <div class="d-flex justify-content-center mt-5">

                            <div class="w-100 border-end border-dark">
                                <div class="d-flex flex-column bd-highlight text-center">
                                    <div class="bd-highlight">
                                        <div class="ch-2 fb">{{$User->count_posts}}</div>
                                    </div>
                                    <div class="bd-highlight">
                                        <div class="ch-5">
                                            Posts
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-100 border-end border-dark ps-2 pe-2">
                                <div class="d-flex flex-column bd-highlight text-center">
                                    <div class="bd-highlight">
                                        <div class="ch-2 fb">{{$User->no_of_followers}}</div>
                                    </div>
                                    <div class="bd-highlight">
                                        <div class="ch-5">
                                            Followers
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-100">
                                <div class="d-flex flex-column bd-highlight text-center ps-2 pe-2">
                                    <div class="bd-highlight">
                                        <div class="ch-2 fb">{{$User->no_of_followings}}</div>
                                    </div>
                                    <div class="bd-highlight">
                                        <div class="ch-5">
                                            Followings
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

{{--                        <div class="w-100 text-center mt-4">--}}
{{--                            <button type="button" class="btn btn-primary ps-3 pe-3 rounded-pill ch-5 text-center btn-sm">EDIT PROFILE</button>--}}
{{--                        </div>--}}

                    </div>


                    <!-------------Column--Sub---Section End------->

                    @if(count($Hosts)>0)

                        <!-------------Column--Sub---Section----------->
                            <div class=" rounded-15 bg-white p-2 mt-3">

                                <div class="d-flex bd-highlight p-3">
                                    <div class="me-auto bd-highlight">
                                        <div class="ch-2 fb">Hosts</div>
                                    </div>
                                    <div class="bd-highlight">
                                        <a href="{{url('/search')}}" class="link-secondary text-gray ch-7" style="color: rebeccapurple; text-decoration: none; font-size: 12px; font-weight: bold">See All</a>
                                    </div>
                                </div>



                                @foreach($Hosts as $HostsTemp)


                                    <div class="d-flex bd-highlight mb-2 p-2 bg-light rounded-10" id="host_item_{{$HostsTemp->id}}">
                                        <div class="bd-highlight ">
                                            <div class="rounded-circle bg-light socialP-head-icon-box">

                                                @if($HostsTemp->image!=null)
                                                    <img src="{{url('/uploads/'.$HostsTemp->image)}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">
                                                @else
                                                    <img src="{{url('/general/img/default-user.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">
                                                @endif

                                            </div>
                                        </div>
                                        <div class="bd-highlight ms-2">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="bd-highlight">
                                                    <div class="ch-5 fb">{{Str::limit($HostsTemp->full_name, 30)}}</div>
                                                </div>
                                                <div class="bd-highlight">
                                                    <div class="ch-5 text-danger">Level 03</div>
                                                </div>
                                                <div class="bd-highlight">
                                                    <div class="ch-5 text-muted">Host</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto bd-highlight ">
                                            <button type="button" class="btn btn-outline-primary btn-sm pt-0 pb-0 ps-3 pe-3 mt-2 rounded-pill">Follow</button>
                                        </div>
                                    </div>

                                @endforeach



                            </div>
                            <!-------------Column--Sub---Section End------->

                    @endif

                    @if(count($Agents)>0)

                        <!-------------Column--Sub---Section----------->
                        <div class=" rounded-15 bg-white p-2 mt-3">

                            <div class="d-flex bd-highlight p-3">
                                <div class="me-auto bd-highlight">
                                    <div class="ch-2 fb">Top Up Agents</div>
                                </div>
                                <div class="bd-highlight">
                                    <a href="{{url('/search')}}" class="link-secondary text-gray ch-7" style="color: rebeccapurple; text-decoration: none; font-size: 12px; font-weight: bold">See All</a>
                                </div>
                            </div>




                            @foreach($Agents as $AgentsTemp)


                                <div class="d-flex bd-highlight mb-2 p-2 bg-light rounded-10" id="agent_item_{{$AgentsTemp->id}}">
                                    <div class="bd-highlight ">
                                        <div class="rounded-circle bg-light socialP-head-icon-box">

                                            @if($AgentsTemp->image!=null)
                                                <img src="{{url('/uploads/'.$AgentsTemp->image)}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">
                                            @else
                                                <img src="{{url('/general/img/default-user.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">
                                            @endif

                                        </div>
                                    </div>
                                    <div class="bd-highlight ms-2">
                                        <div class="d-flex flex-column bd-highlight">
                                            <div class="bd-highlight">
                                                <div class="ch-5 fb">{{Str::limit($AgentsTemp->full_name, 30)}}</div>
                                            </div>
                                            <div class="bd-highlight">
                                                <div class="ch-5 text-danger">Level 03</div>
                                            </div>
                                            <div class="bd-highlight">
                                                <div class="ch-5 text-muted">Agent</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ms-auto bd-highlight ">
                                        <button type="button" class="btn btn-outline-primary btn-sm pt-0 pb-0 ps-3 pe-3 mt-2 rounded-pill">Follow</button>
                                    </div>
                                </div>

                            @endforeach



                        </div>
                        <!-------------Column--Sub---Section End------->

                    @endif


                </div>
                <!------------/Column 1------------>










                <!-------------Column 2------------>
                <div class=" col-sm-12 col-md-6 col-lg-6">



                    <!-------------Story---------->
                    @include('.social.general.story')
                    <!------------/Story---------->

                    <!-------------Create Post---------->
                    @include('.social.general.create-post')
                    <!------------/Create Post---------->


                    <!-------------Create Post---------->
{{--                    @include('.social.general.broadcasts')--}}
                    <!------------/Create Post---------->

                    <!-------------Posts---------->
                    @include('.social.general.post')
                    <!-------------Posts--------->


                </div>
                <!------------/Column 2------------>




















                <!-------------Column 3---------->
                <div class=" col-sm-12 col-md-3 col-lg-3 d-none d-sm-block">

{{--                    <!-------------Ads Section----------->--}}
{{--                    <div class=" mb-3">--}}

{{--                        <div class="d-flex bd-highlight">--}}
{{--                            <div class="">--}}
{{--                                <img src="{{url('/general/img/Add-01.jpg')}}" class="w-100 rounded-10" height="200px">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <!-------------Ads Section End------->--}}


                    <!-------------to-be-followings---------->
                    @include('.social.general.to-be-followings-rectangular')
                    <!-------------to-be-followings--------->




                </div>
                <!------------/Column 3---------->


            </div>
        </div>
    </section>
    <!------------------/ Section----------------------------------------------->




    @include('.social.general.modal')
    @include('.social.general.script')


</body>
</html>
