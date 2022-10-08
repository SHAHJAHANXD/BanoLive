
<div class="row">


@if(count($Followers)>0)


    @foreach($Followers as $FollowersTemp)
        <div class="col-6 col-sm-6 col-md-4 col-lg-4"  id="follower_item_{{$FollowersTemp->id}}">

            <div style="background-color: #c6d4d5; border-radius: 20px;" class="p-3 mt-3">


                <div class="d-flex flex-column flex-row mt-2">
                    <div class="p-0 text-center">


                        <a href="{{url('/profile/'.$FollowersTemp->created_by_user_id)}}" style="color: black; text-decoration: none">

                        @if($FollowersTemp->user_image!=null)
                            <img src="{{url('/uploads/'.$FollowersTemp->user_image)}}" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover">
                        @else
                            <img src="{{url('/general/img/default-user.jpg')}}" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover">
                        @endif
                        </a>

                    </div>
                    <div class="p-0 text-center mt-3">
                        <a href="{{url('/profile/'.$FollowersTemp->created_by_user_id)}}" style="color: black; text-decoration: none">

                        <div style="font-size: 16px; font-weight: bold">{{Str::limit($FollowersTemp->user_full_name, 30)}}</div>
                        </a>
                        <div style="font-size: 12px;">
                            {{Carbon::createFromFormat('Y-m-d H:i:s', $FollowersTemp->created_at)->format('d M Y')}}
                        </div>
                    </div>


                    <div class="p-0 text-center mt-3">

                        @if($FollowersTemp->is_follow_back==true)
                            <button type="button" class="btn btn-followers remove-follower" style="background-color: red" id="remove_follower_{{$FollowersTemp->id}}">Remove</button>
                        @else
                            <button type="button" class="btn btn-followers follow-back mt-2" id="follow_back_{{$FollowersTemp->id}}">Follow Back</button>
                        @endif

                    </div>
                </div>

            </div>

        </div>
    @endforeach

@else

    <div class="col-12 col-sm-12 col-md-12 col-lg-12">

        <div style="background-color: #c6d4d5; border-radius: 20px;" class="p-5 mt-3 text-center">

            <img src="{{url('/general/img/audience.png')}}" style="max-width:150px">

            <div style="font-weight: bolder; color: #239bfa">Followers not found</div>
        </div>

    </div>

    @endif


    </div>
