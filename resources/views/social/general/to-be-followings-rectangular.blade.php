
<!-------------Users Suggestions----------->
<div class=" rounded-15 bg-white pb-2">

    <div class="d-flex bd-highlight p-3">
        <div class="me-auto bd-highlight">
            <div class="ch-2 fb">Users</div>
        </div>
        <div class="bd-highlight">
            <a href="{{url('/search')}}" class="link-secondary text-gray ch-7" style="color: rebeccapurple; text-decoration: none; font-size: 12px; font-weight: bold">See All</a>
        </div>
    </div>


    @foreach($ToBeFollowing as $ToBeFollowingTemp)
        <div  id="to_be_following_item_{{$ToBeFollowingTemp->id}}">
            <div class="d-flex bd-highlight mb-3 mt-3">
                <div class="bd-highlight ps-3">
                    <div class="rounded-circle bg-light socialP-head-icon-box">

                        <a href="{{url('/profile/'.$ToBeFollowingTemp->id)}}" style="color: black;">
                            @if($ToBeFollowingTemp->image!=null)
                                <img src="{{url('/uploads/'.$ToBeFollowingTemp->image)}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">
                            @else
                                <img src="{{url('/general/img/default-user.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box img-fit">
                            @endif
                        </a>

                    </div>
                </div>
                <div class="bd-highlight ps-2">

                    <a href="{{url('/profile/'.$ToBeFollowingTemp->id)}}" style="color: black; text-decoration: none">
                        <div class="ch-7 fb">{{Str::limit($ToBeFollowingTemp->full_name, 30)}}</div>
                        <div class="ch-5 text-danger">Level 03</div>
                    </a>
                </div>
                <div class="ms-auto bd-highlight pe-2 pt-2 buttons">

                    <button type="button" class="btn btn-to-be-follow to-be-following"  id="to_be_following_{{$ToBeFollowingTemp->id}}" style="margin: 0 auto;">Follow</button>

                </div>
            </div>
        </div>
    @endforeach

</div>
<!-------------Users Suggestions----------->
