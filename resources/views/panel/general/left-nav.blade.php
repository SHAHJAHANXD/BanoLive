<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">


    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto" style="margin: 0 auto;">
                <a class="navbar-brand" href="{{url('/')}}">

                    <img src="{{url('general/img/header-logo.svg')}}" style="width: 200px">

                </a>
            </li>
        </ul>
    </div>


{{--    <div class="shadow-bottom"></div>--}}
    <div class="main-menu-content">


        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">



            {{--Dashboard--}}
            @if($User->user_type_slug=='administrator' || $User->user_type_slug=='admin' || $User->user_type_slug=='host' || $User->user_type_slug=='agency' || $User->user_type_slug=='agent' || $User->user_type_slug=='user' )
                <li class="nav-item">
                    <a href="{{url('admin/dashboard')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather="grid"></i>
                        <span class="menu-title text-truncate">Dashboard</span>
                    </a>
                </li>
            @endif

            {{--Users--}}
            @if($User->user_type_slug=='administrator')
                <li class="nav-item">


                    <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                        <i data-feather='users'></i>
                        <span class="menu-title text-truncate">Users</span>
                    </a>

                    <ul class="menu-content">

                        <li class="">
                            <a href="{{url('/admin/user/administrators/list')}}" class="d-flex align-items-center" target="_self">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate">Administrators</span>
                            </a>
                        </li>

{{--                        <li class="">--}}
{{--                            <a href="{{url('/admin/user/admins/list')}}" class="d-flex align-items-center" target="_self">--}}
{{--                                <i data-feather="circle"></i>--}}
{{--                                <span class="menu-item text-truncate">Regional Admins</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}


                        <li class="">
                            <a href="{{url('/admin/user/admins/list')}}" class="d-flex align-items-center" target="_self">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate">Admins</span>
                            </a>
                        </li>


                        <li class="">
                            <a href="{{url('/admin/user/hosts/list')}}" class="d-flex align-items-center" target="_self">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate">Hosts</span>
                            </a>
                        </li>



                        <li class="">
                            <a href="{{url('/admin/user/agents/list')}}" class="d-flex align-items-center" target="_self">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate">Top Up Agents</span>
                            </a>
                        </li>



                        <li class="">
                            <a href="{{url('/admin/user/users/list')}}" class="d-flex align-items-center" target="_self">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate">users</span>
                            </a>
                        </li>


                        <li class="">
                            <a href="{{url('/admin/user/block/list')}}" class="d-flex align-items-center" target="_self">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate">Blocked Users</span>
                            </a>
                        </li>

                    </ul>


                </li>
            @endif



            {{--host--}}
            @if($User->user_type_slug=='agency')
                <li class="nav-item">
                    <a href="{{url('/admin/user/hosts/list')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather='user'></i>
                        <span class="menu-title text-truncate">Hosts</span>
                    </a>
                </li>
            @endif



            {{--Agencies--}}
            @if($User->user_type_slug=='administrator' || $User->user_type_slug=='admin')
                <li class="nav-item">
                    <a href="{{url('admin/agencies/list')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather='clipboard'></i>
                        <span class="menu-title text-truncate">Agencies</span>
                    </a>
                </li>
            @endif




            {{--Notifications--}}
            @if($User->user_type_slug=='administrator')
                <li class="nav-item">
                    <a href="{{url('admin/notifications/list')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather='bell'></i>
                        <span class="menu-title text-truncate">Notifications</span>
                    </a>
                </li>
            @endif



            {{--Transactions--}}
            @if($User->user_type_slug=='administrator' || $User->user_type_slug=='Agent')
                <li class="nav-item">
                    <a href="{{url('admin/transactions/list')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather='dollar-sign'></i>
                        <span class="menu-title text-truncate">Transactions</span>
                    </a>
                </li>
            @endif


            {{--Advertisements--}}
            @if($User->user_type_slug=='administrator')
                <li class="nav-item">
                    <a href="{{url('admin/advertisements/list')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather='speaker'></i>
                        <span class="menu-title text-truncate">Advertisements</span>
                    </a>
                </li>
            @endif



            {{--Newsfeeds--}}
            @if($User->user_type_slug=='administrator')
                <li class="nav-item">
                    <a href="{{url('admin/newsfeeds/list')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather='file-minus'></i>
                        <span class="menu-title text-truncate">Newsfeeds</span>
                    </a>
                </li>
            @endif



            {{--Stories--}}
            @if($User->user_type_slug=='administrator')
                <li class="nav-item">
                    <a href="{{url('admin/stories/list')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather='aperture'></i>
                        <span class="menu-title text-truncate">Stories</span>
                    </a>
                </li>
            @endif



            {{--Stores--}}
            @if($User->user_type_slug=='administrator')
                <li class="nav-item">
                    <a href="{{url('admin/stores/list')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather='layers'></i>
                        <span class="menu-title text-truncate">Stores</span>
                    </a>
                </li>
            @endif







            {{--Audio Streaming--}}
            @if($User->user_type_slug=='administrator')
                <li class="nav-item">
                    <a href="{{url('admin/streaming/audio/list')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather='activity'></i>
                        <span class="menu-title text-truncate">Audio Streaming</span>
                    </a>
                </li>
            @endif

            {{--Video Streaming--}}
            @if($User->user_type_slug=='administrator')
                <li class="nav-item">
                    <a href="{{url('admin/streaming/video/list')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather='activity'></i>
                        <span class="menu-title text-truncate">Video Streaming</span>
                    </a>
                </li>
            @endif






            {{--News--}}
            @if($User->user_type_slug=='administrator')
                <li class="nav-item">
                    <a href="{{url('admin/news/list')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather='alert-triangle'></i>
                        <span class="menu-title text-truncate">News</span>
                    </a>
                </li>
            @endif



            {{--Blog--}}
            @if($User->user_type_slug=='administrator')
                <li class="nav-item">
                    <a href="{{url('admin/blog/list')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather='file-text'></i>
                        <span class="menu-title text-truncate">Blog</span>
                    </a>
                </li>
            @endif



            {{--Subscribers--}}
            @if($User->user_type_slug=='administrator')
                <li class="nav-item">
                    <a href="{{url('admin/subscribers/list')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather='file-text'></i>
                        <span class="menu-title text-truncate">Subscribers</span>
                    </a>
                </li>
            @endif



            {{--Contacts--}}
            @if($User->user_type_slug=='administrator')
                <li class="nav-item">
                    <a href="{{url('admin/contacts/list')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather='phone'></i>
                        <span class="menu-title text-truncate">Contacts</span>
                    </a>
                </li>
            @endif



            {{--FAQs--}}
            @if($User->user_type_slug=='administrator')
                <li class="nav-item">
                    <a href="{{url('admin/faqs/list')}}" class="d-flex align-items-center" target="_self">
                        <i data-feather='alert-circle'></i>
                        <span class="menu-title text-truncate">FAQs</span>
                    </a>
                </li>
            @endif















            {{--Links--}}
            @if($User->user_type_slug=='administrator')
                <li class="nav-item">

                    <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                        <i data-feather='file'></i>
                        <span class="menu-title text-truncate">Onboard</span>
                    </a>


                    <ul class="menu-content">


                        <li class="">
                            <a href="{{url('/admin/onboard/admin')}}" class="d-flex align-items-center" target="_self">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate">Admin</span>
                            </a>
                        </li>


                        <li class="">
                            <a href="{{url('/admin/onboard/top-up-agent')}}" class="d-flex align-items-center" target="_self">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate">TopUp Agent</span>
                            </a>
                        </li>

                    </ul>


                </li>
            @endif


            {{--Categories--}}
            @if($User->user_type_slug=='administrator')
                <li class="nav-item">
                    <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                        <i data-feather="align-left"></i>
                        <span class="menu-title text-truncate">Categories</span>
                    </a>
                    <ul class="menu-content">
                        <li class="">
                            <a href="{{url('/admin/category/parent')}}" class="d-flex align-items-center" target="_self">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate">Parent Categories</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{url('/admin/category/child')}}" class="d-flex align-items-center" target="_self">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate">Child Categories</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{url('/admin/category/sub-child')}}" class="d-flex align-items-center" target="_self">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate">Sub Child Categories</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif

            {{--Settings--}}
            @if($User->user_type_slug=='administrator')
                <li class="nav-item">
                    <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                        <i data-feather="settings"></i>
                        <span class="menu-title text-truncate">Settings</span>
                    </a>
                    <ul class="menu-content">

                        <li class="">
                            <a href="{{url('/admin/setting/change-password')}}" class="d-flex align-items-center" target="_self">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate">Change Password</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="{{url('/admin/setting/profile')}}" class="d-flex align-items-center" target="_self">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate">Profile Settings</span>
                            </a>
                        </li>


                        <li class="">
                            <a href="{{url('/admin/setting/website')}}" class="d-flex align-items-center" target="_self">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate">Website Settings</span>
                            </a>
                        </li>



                        <li class="">
                            <a href="{{url('/admin/badges')}}" class="d-flex align-items-center" target="_self">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate">Badges</span>
                            </a>
                        </li>

                    </ul>
                </li>
            @endif

            {{--Devider--}}
            <li class="navigation-header" style="margin: 1.286rem">
                <hr />
            </li>

            {{--Sign Out--}}
            <li class="nav-item">
                <a href="{{url('/sign-out')}}" class="d-flex align-items-center" target="_self">
                    <i data-feather='log-out'></i>
                    <span class="menu-title text-truncate">Sign Out</span>
                </a>
            </li>


        </ul>
    </div>
</div>
<!-- END: Main Menu-->
