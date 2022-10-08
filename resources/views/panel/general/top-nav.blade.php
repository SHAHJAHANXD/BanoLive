<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow ">
    <div class="navbar-container d-flex content">

        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
        </div>


{{--        @if($User->user_type_slug=='agency' || $User->user_type_slug=='host')--}}

{{--            <ul class="nav navbar-nav align-items-center">--}}

{{--                <li class="nav-item dropdown dropdown-user">--}}

{{--                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}

{{--                        @if($is_session)--}}

{{--                            <span class="avatar">--}}

{{--                            @if($User->image!=null)--}}
{{--                                    <img class="round" src="{{url('/uploads/'.$User->image)}}" id="profile_avatar_top" alt="avatar" height="40" width="40" style="object-fit: cover">--}}
{{--                                @else--}}
{{--                                    <img class="round" src="{{url('panel/images/user.png')}}" id="profile_avatar_top" alt="avatar" height="40" width="40">--}}
{{--                                @endif--}}

{{--                            </span>--}}

{{--                            <div class="user-nav d-sm-flex d-none" style="align-items:flex-start; margin-left: 5px">--}}
{{--                                <span class="user-name font-weight-bolder">{{$User->full_name}}</span>--}}
{{--                                <span class="user-status" style="margin-left: 3px">{{$User->user_type_title}}</span>--}}
{{--                            </div>--}}

{{--                        @else--}}


{{--                        @endif--}}

{{--                    </a>--}}

{{--                </li>--}}

{{--            </ul>--}}

{{--        @endif--}}





        <ul class="nav navbar-nav align-items-center ml-auto">




            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    @if($is_session)
                    <div class="user-nav d-sm-flex d-none">
                            <span class="user-name font-weight-bolder">{{$User->full_name}}</span>
                            <span class="user-status">{{$User->user_type_title}}</span>
                    </div>

                    <span class="avatar">

                        @if($User->image!=null)
                            <img class="round" src="{{url('/uploads/'.$User->image)}}" id="profile_avatar_top" alt="avatar" height="40" width="40" style="object-fit: cover">
                        @else
                            <img class="round" src="{{url('panel/images/user.png')}}" id="profile_avatar_top" alt="avatar" height="40" width="40">
                        @endif

                    </span>

                    @else


                    @endif

                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">

                    <a class="dropdown-item" href="{{url('')}}">
                        <i class="mr-50" data-feather="home"></i> Home
                    </a>

                    <a class="dropdown-item" href="{{url('admin/setting/profile')}}">
                        <i class="mr-50" data-feather="user"></i> Profile
                    </a>
                    <a class="dropdown-item" href="{{url('admin/settings')}}">
                        <i class="mr-50" data-feather="settings"></i> Settings
                    </a>
                    <a class="dropdown-item" href="{{url('admin/setting/change-password')}}">
                        <i class="mr-50" data-feather="lock"></i> Change Password
                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="{{url('/sign-out')}}">
                        <i class="mr-50" data-feather="power"></i> Sign Out
                    </a>
                </div>
            </li>

        </ul>

    </div>
</nav>
