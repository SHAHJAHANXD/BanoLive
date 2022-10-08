<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
<!-- Start Navigation -->
<div class="header header-light head-shadow">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="{{url('')}}">
                    <img src="{{url('front/img/logo.png')}}" class="logo" alt="" />
                </a>
{{--                <div class="nav-toggle"></div>--}}
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
{{--                <ul class="nav-menu">--}}

{{--                    <li><a href="{{url('entrepreneurs')}}">Entrepreneurs</a></li>--}}

{{--                </ul>--}}




                <ul class="nav-menu align-to-right">

                    @if($is_session)

                        <li  class="nav-item dropdown d-none d-sm-block">


                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name font-weight-bolder" style="font-weight: bold">{{$User->first_name}}</span>
                                <span class="user-status">{{$User->user_type_title}}</span>
                            </div>

                            <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 25px 7px 5px;">
                                <img src="{{url('panel/images/portrait/small/avatar-s-11.jpg')}}" width="50" height="50" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink" style="border: 0px solid rgba(0,0,0,.15);">

                                @if($User->user_type_title=='Investor')
                                    <li><a class="dropdown-item" href="{{url('investor/dashboard')}}"><i class="fas fa-tachometer-alt"></i>  Dashboard</a></li>
                                    <li><a class="dropdown-item" href="{{url('investor/my-profile')}}"><i class="fas fa-cog"></i>  Edit Profile</a></li>
                                @endif

                                @if($User->user_type_title=='Entrepreneur')
                                    <li><a class="dropdown-item" href="{{url('entrepreneur/dashboard')}}"><i class="fas fa-tachometer-alt"></i>  Dashboard</a></li>
                                    <li><a class="dropdown-item" href="{{url('alerts')}}"><i class="fas fa-bell"></i>  Alerts</a></li>
                                    <li><a class="dropdown-item" href="{{url('entrepreneur/my-profile')}}"><i class="fas fa-cog"></i>  Account Settings</a></li>
{{--                                    <li><a class="dropdown-item" href="{{url('entrepreneur/country')}}"><i class="fas fa-flag"></i>  Country</a></li>--}}
                                    <li><a class="dropdown-item" href="{{url('invoice/list')}}"><i class="fas fa-file"></i>  Invoices</a></li>
                                @endif

                                @if($User->user_type_title=='Admin')
                                    <li><a class="dropdown-item" href="{{url('admin/dashboard')}}"><i class="fas fa-tachometer-alt"></i>  Dashboard</a></li>
                                        <li><a class="dropdown-item" href="{{url('admin/profile')}}"><i class="fas fa-cog"></i>  Edit Profile</a></li>
                                @endif

                                <li><a class="dropdown-item" href="{{url('sign-out')}}"><i class="fas fa-sign-out-alt"></i>  Log Out</a></li>
                            </ul>

                        </li>

                    @else

                        <li><a href="{{url('sign-in')}}"><div  class="btn btn-success" style="padding: 3px 25px; border-radius: 5px;">Sign In</div></a></li>

                    @endif


                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- End Navigation -->
<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
