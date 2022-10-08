
<div class="bg-white rounded-15 p-4">

    <div class="d-flex pb-2 bd-highlight border-bottom border-1 border-muted">
        <div class="ch-2 text-black fb">Following</div>
    </div>


    <div class="row mt-3">


        @if(count($Following)>0)

            @foreach($Following as $FollowingTemp)

                <div class=" col-sm-6 col-md-4 col-lg-4 col-6" id="following_item_{{$FollowingTemp->user2_id}}">
                    <div class="follower-box bg-light text-center">

                        <a href="{{url('/profile/'.$FollowingTemp->user2_id)}}" style="color: black; text-decoration: none">

                            @if($FollowingTemp->user2_image!=null)
                                <img src="{{url('/uploads/'.$FollowingTemp->user2_image)}}" alt="" class="rounded-circle avatar img-fit mt-3">
                            @else
                                <img src="{{url('/general/img/default-user.jpg')}}" alt="" class="rounded-circle avatar img-fit mt-3">
                            @endif

                        </a>


                        <div class="ch-7 fb mt-3">{{Str::limit($FollowingTemp->user2_full_name, 10)}}</div>
                        <div class="ch-5 text-danger">Level 03</div>
                        <button type="button" class="btn btn-unfollow btn-sm pt-0 pb-0 ps-4 pe-4 mt-2 rounded-pill unfollow"  id="unfollow_{{$FollowingTemp->user2_id}}">Unfollow</button>



                    </div>
                </div>

            @endforeach

        @else

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">

                <img src="{{url('/general/img/audience.png')}}" style="max-width:150px" alt="">

                <div style="font-weight: bolder; color: #239bfa">Following not found</div>

            </div>

        @endif








    </div>



</div>
