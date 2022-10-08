
<!------------------------------Header--------------------------------------->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-top: 0rem; padding-bottom: 0rem;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><div class="logo-header"><img src="{{url('general/img/header-logo.svg')}}"></div></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active fb" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fb" href="{{url('/game')}}">Gaming</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fb" href="{{url('/live')}}">LIVE</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        @if(!$is_session)
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">Connector</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">APP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">Recharge</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">Language</a>
                            </li>
                        @endif

                        @if($is_session)

                            <li class="nav-item dropdown d-none d-sm-block">
                                <a class="nav-link d-sm-flex align-items-sm-center" href="#"  data-bs-toggle="dropdown" style="padding: 0; color: black">

                                    <div class="d-none d-sm-block" style="margin-right: 12px; text-align: right">
                                        <div style="font-size: 14px; font-weight: bolder">{{$User->full_name}}</div>
                                        <div style="font-size: 9px">{{$User->user_type_title}}</div>
                                    </div>

                                    @if($User->image!=null)
                                        <img src="{{url('/uploads/'.$User->image)}}" id="profile_avatar_top" class="rounded-circle" style="height: 35px; width: 35px; object-fit: cover; border: 1px solid #010716;">
                                    @else
                                        <img src="{{url('/general/img/default-user.jpg')}}" id="profile_avatar_top" class="rounded-circle" style="height: 35px; width: 35px; object-fit: cover; border: 1px solid #010716;">
                                    @endif

                                </a>

                                <ul class="dropdown-menu dropdown-menu-end" style="width: 100%; border: 0px;">
                                    <li><a class="dropdown-item" href="{{url('/newsfeed')}}"><i class="fas fa-home fa-sm"></i> Newsfeed</a></li>
                                    <li><a class="dropdown-item" href="{{url('/profile')}}"><i class="fas fa-user fa-sm"></i> Profile</a></li>
                                    <li><a class="dropdown-item" href="{{url('/settings')}}"><i class="fas fa-cog fa-sm"></i> Settings</a></li>
                                    <li><hr class="dropdown-divider" style="border-top: 1px solid lightgray;"></li>
                                    <li><a class="dropdown-item" href="{{url('/sign-out')}}"><i class="fas fa-sign-out-alt fa-sm"></i> Sign Out </a></li>
                                </ul>


                            </li>
                        @else
                            <li class="nav-item d-none d-sm-block">
                                <a href="{{url('/sign-in')}}" class="btn btn-danger rounded-pill">LOGIN</a>
                            </li>
                        @endif


                    </ul>
                </div>
            </div>
        </div>
    </nav>

</header>
<!-----------------------------/Header--------------------------------------->
