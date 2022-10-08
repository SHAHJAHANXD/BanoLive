
<!-------------Live Streaming---------->
<div class="bg-white rounded-15 p-4 mt-4">

    <div class="owl-carousel live-box">

        <div class="bg-light" style="height: 170px; width: 100%; text-align: center; padding-top: 30px;  border-radius: 10px" data-bs-toggle="modal" data-bs-target="#staticBackdrop3" >

            <img src="{{url('/general/img/icons/social-icon-10.svg')}}" alt="" style="width: 80px; height: 80px; margin: 0 auto">

            <div class="">
                Go Live
            </div>

        </div>



        @foreach($Broadcasts as $BroadcastsTemp)
            <div class="bg-light" style="height: 170px; width: 100%; text-align: center; position: relative;" data-bs-toggle="modal" data-bs-target="#liveView">
                <img src="{{url('/uploads/'.$BroadcastsTemp->user_image)}}" alt="" style="height: 100%; width: 100%; object-fit: cover; border-radius: 10px">


                <div style="position: absolute; top: 5px; right: 5px;">
                    <div style="background-color: red; color: white; border-radius: 5px; font-size: 10px; padding: 1px 5px 1px 5px">Live</div>
                </div>



                <div style="position: absolute; bottom: 0; left: 0; background: linear-gradient(to top, rgba(0, 0, 0, 0.85), transparent); color: white;  border-radius: 0 0 10px 10px; width: 100%;">

                    <div class="d-flex flex-row bd-highlight" style="padding: 5px">
                        <div class="bd-highlight">

                                @if($BroadcastsTemp->user_image!=null)
                                    <img src="{{url('/uploads/'.$BroadcastsTemp->user_image)}}" alt="" style="height: 30px; width: 30px; object-fit: cover; border-radius: 50px">
                                @else
                                    <img src="{{url('/general/img/default-user.jpg')}}" alt="" style="height: 20px; width: 20px; object-fit: cover; border-radius: 50px">
                                @endif

                        </div>
                        <div class="ps-1 bd-highlight;" style="text-align: left">
                            <div style="font-size: 10px">{{$BroadcastsTemp->user_full_name}}</div>
                        </div>
                    </div>

                </div>

            </div>
        @endforeach






{{--        <div class=" rounded social-live-bar mt-1">--}}
{{--            <div class="bg-light rounded text-center" style="height: 170px;">--}}
{{--                <div class="box-h" style="padding-top: 30px;">--}}
{{--                    <img src="{{url('/general/img/icons/social-icon-10.svg')}}" alt="" class="mar-auto pt-4 cursor-p" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">--}}
{{--                    <div class="ch-7 text-muted">--}}
{{--                        Go Live--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--        @foreach($Broadcasts as $BroadcastsTemp)--}}

{{--        <div class="p-1" style="">--}}
{{--            <div class=" rounded social-live-bar">--}}
{{--                <div class=" bg-light rounded text-center">--}}
{{--                    <div class="position-relative">--}}

{{--                        <img src="{{url('/uploads/'.$BroadcastsTemp->user_image)}}" alt="" class=" img-fit rounded">--}}

{{--                        <div class="ch-7 text-muted" style="position: absolute; bottom:0;">--}}

{{--                        </div>--}}
{{--                        <span class="badge rounded-pill ch-5 bg-danger position-absolute m-2">Live</span>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        @endforeach--}}


    </div>

</div>
<!-------------Live Streaming---------->
