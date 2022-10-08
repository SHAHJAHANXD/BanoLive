
@foreach($NewsFeeds as $NewsFeedsTemp)
    <div class="bg-white rounded-15 p-4 mt-4" id="post_{{$NewsFeedsTemp->id}}">

        <div class="d-flex">
            <div class="mr-auto w-100">
                <div class="d-flex flex-row bd-highlight user-box">
                    <div class=" bd-highlight">
                        <div class="rounded-circle bg-light socialP-head-icon-box-extra">

                            <a href="{{url('/profile/'.$NewsFeedsTemp->created_by_user_id)}}" style="color: black;">

                                @if($NewsFeedsTemp->user_image!=null)
                                    <img src="{{url('/uploads/'.$NewsFeedsTemp->user_image)}}" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra img-fit">
                                @else
                                    <img src="{{url('/general/img/default-user.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra img-fit">
                                @endif
                            </a>


                        </div>
                    </div>
                    <div class="ps-2 bd-highlight">

                        <a href="{{url('/profile/')}}" style="color: black; text-decoration: none">
                            <div class="ch-7 fb">{{$NewsFeedsTemp->user_full_name}}</div>
                        </a>
                        <div class="ch-5 text-danger">Level 01</div>

                    </div>
                </div>
            </div>
            {{--                                        <div class="pe-2">--}}
            {{--                                            <button type="button" class="btn btn-primary ps-3  pe-3 rounded-pill ch-5 text-center pt-1 btn-sm">Follow</button>--}}
            {{--                                        </div>--}}
            <div class="social-media">

                <div class="btn-group ">
                    <i class="fas fa-ellipsis-v cursor-p" data-bs-toggle="dropdown" aria-expanded="false"></i>

                    <ul class="dropdown-menu dropdown-menu-end">


                        @if($NewsFeedsTemp->created_by_user_id==$User->id)
                            <li><a class="dropdown-item delete-post" id="delete_post_{{$NewsFeedsTemp->id}}" href="javascript:void(0);">Delete</a></li>
                        @else
                            <li><a class="dropdown-item report-post" id="report_post_{{$NewsFeedsTemp->id}}" href="javascript:void(0);">Report</a></li>
                        @endif

                    </ul>

                </div>


            </div>
        </div>

        <div class="w-100 h-100 mt-3">

            {{$NewsFeedsTemp->description}}



                @if($NewsFeedsTemp->thumbnail!=null)

                    <div class="mt-2">
                        <img src="{{url('/uploads/newsfeed/'.$NewsFeedsTemp->thumbnail)}}" alt="" class="img-fit" style="width: 100%; border-radius: 10px">

                    </div>

                @endif

        </div>

        {{--                                    <div class="d-flex">--}}
        {{--                                        <div class="mt-2">--}}
        {{--                                            <span><img src="{{url('/general/img/icons/social-icon-11.svg')}}" alt="" class="h-100 w-100 img-fit"></span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="mt-2">--}}
        {{--                                            <span><img src="{{url('/general/img/icons/social-icon-12.svg')}}" alt="" class="h-100 w-100 img-fit"></span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="mt-2">--}}
        {{--                                            <span><img src="{{url('/general/img/icons/social-icon-13.svg')}}" alt="" class="h-100 w-100 img-fit"></span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="ml-auto mt-2 w-100">--}}
        {{--                                            <div class="d-flex float-end">--}}
        {{--                                                <div class=""><span><img src="{{url('/general/img/icons/social-icon-14.svg')}}" alt="" class="h-100 w-100 img-fit"></span></div>--}}
        {{--                                                <div class=""><span><img src="{{url('/general/img/icons/social-icon-15.svg')}}" alt="" class="h-100 w-100 img-fit"></span></div>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}

    </div>
@endforeach
