
<div class="bg-white rounded-15 p-4">

    <div class="d-flex pb-2 bd-highlight border-bottom border-1 border-muted">
        <div class="ch-2 text-black fb">Followers</div>
    </div>

    <div class="row mt-3">


        @if(count($Followers)>0)

            @foreach($Followers as $FollowersTemp)

                <div class=" col-sm-6 col-md-4 col-lg-4 col-6">
                    <div class="follower-box bg-light text-center">

                        <a href="{{url('/profile/'.$FollowersTemp->created_by_user_id)}}" style="color: black; text-decoration: none">

                            @if($FollowersTemp->user_image!=null)
                                <img src="{{url('/uploads/'.$FollowersTemp->user_image)}}" alt="" class="rounded-circle avatar img-fit mt-3">
                            @else
                                <img src="{{url('/general/img/default-user.jpg')}}" alt="" class="rounded-circle avatar img-fit mt-3">
                            @endif

                        </a>


                        <div class="ch-7 fb mt-3">{{Str::limit($FollowersTemp->user_full_name, 30)}}</div>
                        <div class="ch-5 text-danger">Level 03</div>
                        <div class="ch-5 text-muted">Host</div>
                        <button type="button" class="btn btn-outline-primary btn-sm pt-0 pb-0 ps-4 pe-4 mt-2 rounded-pill">Follow</button>
                    </div>
                </div>

            @endforeach

        @else

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">

                <img src="{{url('/general/img/audience.png')}}" style="max-width:150px">

                <div style="font-weight: bolder; color: #239bfa">Followers not found</div>

            </div>

        @endif








    </div>


</div>
