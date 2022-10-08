
<div class="row">


    @if(count($Following)>0)


        @foreach($Following as $FollowingTemp)
            <div class="col-6 col-sm-6 col-md-4 col-lg-4" id="following_item_{{$FollowingTemp->id}}">

                <div style="background-color: #c6d4d5; border-radius: 20px;" class="p-3 mt-3">


                    <div class="d-flex flex-column flex-row mt-2">
                        <div class="p-0 text-center">

                            <a href="{{url('/profile/'.$FollowingTemp->user2_id)}}" style="color: black; text-decoration: none">

                            @if($FollowingTemp->user2_image!=null)
                                <img src="{{url('/uploads/'.$FollowingTemp->user2_image)}}" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover">
                            @else
                                <img src="{{url('/general/img/default-user.jpg')}}" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover">
                            @endif
                            </a>

                        </div>
                        <div class="p-0 text-center mt-3">
                            <a href="{{url('/profile/'.$FollowingTemp->user2_id)}}" style="color: black; text-decoration: none">

                            <div style="font-size: 16px; font-weight: bold">{{Str::limit($FollowingTemp->user2_full_name, 30)}}</div>
                            </a>
                            <div style="font-size: 12px;">
                                {{Carbon::createFromFormat('Y-m-d H:i:s', $FollowingTemp->created_at)->format('d M Y')}}
                            </div>
                        </div>


                        <div class="p-0 text-center mt-3">
                            <button type="button" class="btn btn-unfollow unfollow"  id="unfollow_{{$FollowingTemp->id}}">Unfollow</button>
                        </div>
                    </div>

                </div>

            </div>
        @endforeach

    @else

        <div class="col-12 col-sm-12 col-md-12 col-lg-12">

            <div style="background-color: #c6d4d5; border-radius: 20px;" class="p-5 mt-3 text-center">

                <img src="{{url('/general/img/audience.png')}}" style="max-width:150px">

                <div style="font-weight: bolder; color: #239bfa">Following not found</div>
            </div>

        </div>

    @endif




</div>
