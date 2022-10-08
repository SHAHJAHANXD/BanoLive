
@include('.panel.general.head')


<body class="vertical-layout vertical-menu-modern 2-columns navbar-floating menu-expanded footer-static" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="" style="" data-framework="laravel" data-asset-path="index.html">


    @include('.panel.general.left-nav')
    @include('.panel.general.top-nav')

    <!-- END: Header-->



    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        <div class="content-wrapper ">


            <div class="content-body">

                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">



                        <!-- wallet Card -->
                        @if($User->user_type_slug=='administrator' || $User->user_type_slug=='admin' || $User->user_type_slug=='agency' || $User->user_type_slug=='Agent' || $User->user_type_slug=='User')

                            @if($User->user_type_slug=='admin' || $User->user_type_slug=='agency')

                            <div class="col-xl-12 col-md-12 col-12">
                                <div class="card custom-card">

                                    <div style="padding-top: 20px; padding-left: 20px;">

                                        <div style="margin-bottom: 5px">

                                            @if($User->user_type_slug=='admin')
                                                Admin
                                            @endif


                                            @if($User->user_type_slug=='agency')
                                                Agency
                                            @endif

                                            ID is <strong>{{$User->code}}</strong>


                                            @if($User->user_type_slug=='agency')
                                                    | Admin ID is <strong>{{$User->reference_code}}</strong>
                                            @endif

                                        </div>

                                        <p>Click on the link below to share with your

                                            @if($User->user_type_slug=='admin')
                                                agency
                                            @endif


                                            @if($User->user_type_slug=='agency')
                                                host
                                            @endif
                                            .</p>

                                    </div>

                                    <div id="link" class="card-body" style="padding-left: 20px; font-weight: bold; cursor: pointer">



                                        @if($User->user_type_slug=='admin')
                                            https://banolive.com/sign-up/agency?admin={{$User->code}}
                                        @endif


                                        @if($User->user_type_slug=='agency')
                                            https://banolive.com/sign-up/host?agency={{$User->code}}
                                        @endif

                                    </div>

                                </div>
                            </div>

                            @endif




                            <div class="col-xl-3 col-md-3 col-12">

                                <a href="javascript:void(0)">
                                    <div class="card custom-card">
                                        <div class="card-body" style="padding: 5px 10px 5px 10px;">



                                            <div class="row">

                                                <div class="col-xl-7 col-md-7 col-7 text-center">
                                                    <div class="count">{{$User->wallet}}</div>
                                                    <div class="count-title">Wallet</div>
                                                </div>


                                                <div class="col-xl-5 col-md-5 col-5 text-center">
                                                    <img src="{{url('panel/images/administrators.svg')}}" alt="" style="max-width: 50px">
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endif
                        <!--/ wallet Card -->





                        <!-- Notifications Card -->
                        @if($User->user_type_slug=='administrator' || $User->user_type_slug=='admin' || $User->user_type_slug=='agency' || $User->user_type_slug=='Agent' || $User->user_type_slug=='User')
                            <div class="col-xl-3 col-md-3 col-12">

                                <a href="javascript:void(0)">
                                    <div class="card custom-card">
                                        <div class="card-body" style="padding: 5px 10px 5px 10px;">



                                            <div class="row">

                                                <div class="col-xl-7 col-md-7 col-7 text-center">
                                                    <div class="count">0</div>
                                                    <div class="count-title">Notifications</div>
                                                </div>


                                                <div class="col-xl-5 col-md-5 col-5 text-center">
                                                    <img src="{{url('panel/images/agencies.svg')}}" alt="" style="max-width: 50px">
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endif
                        <!--/ Notifications Card -->




                        <!-- Messages Card -->
                        @if($User->user_type_slug=='administrator' || $User->user_type_slug=='admin' || $User->user_type_slug=='agency' || $User->user_type_slug=='Agent' || $User->user_type_slug=='User')
                            <div class="col-xl-3 col-md-3 col-12">

                                <a href="javascript:void(0)">
                                    <div class="card custom-card">
                                        <div class="card-body" style="padding: 5px 10px 5px 10px;">



                                            <div class="row">

                                                <div class="col-xl-7 col-md-7 col-7 text-center">
                                                    <div class="count">0</div>
                                                    <div class="count-title">Messages</div>
                                                </div>


                                                <div class="col-xl-5 col-md-5 col-5 text-center">
                                                    <img src="{{url('panel/images/agencies.svg')}}" alt="" style="max-width: 50px">
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endif
                        <!--/ Messages Card -->




                        <!-- Subscribers Card -->
                        @if($User->user_type_slug=='administrator')
                            <div class="col-xl-3 col-md-3 col-12">

                                <a href="{{url('admin/agencies/list')}}">
                                    <div class="card custom-card">
                                        <div class="card-body" style="padding: 5px 10px 5px 10px;">



                                            <div class="row">

                                                <div class="col-xl-7 col-md-7 col-7 text-center">
                                                    <div class="count">0</div>
                                                    <div class="count-title">Subscribers</div>
                                                </div>


                                                <div class="col-xl-5 col-md-5 col-5 text-center">
                                                    <img src="{{url('panel/images/agencies.svg')}}" alt="" style="max-width: 50px">
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endif
                        <!--/ Subscribers Card -->



                        <div class="col-xl-12 col-md-12 col-12">
                            <hr>
                        </div>


                        <!-- Administrators Card -->
                        @if($User->user_type_slug=='administrator')
                            <div class="col-xl-3 col-md-3 col-12">

                                <a href="{{url('admin/user/administrators/list')}}">
                                    <div class="card custom-card">
                                        <div class="card-body" style="padding: 5px 10px 5px 10px;">



                                            <div class="row">

                                                <div class="col-xl-7 col-md-7 col-7 text-center">
                                                    <div class="count">{{$AdministratorsCount}}</div>
                                                    <div class="count-title">Administrators</div>
                                                </div>


                                                <div class="col-xl-5 col-md-5 col-5 text-center">
                                                    <img src="{{url('panel/images/administrators.svg')}}" alt="" style="max-width: 50px">
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endif
                        <!--/ Administrators Card -->


                        <!-- Admin Card -->
                        @if($User->user_type_slug=='administrator')
                            <div class="col-xl-3 col-md-3 col-12">

                                <a href="{{url('admin/user/admins/list')}}">
                                    <div class="card custom-card">
                                        <div class="card-body" style="padding: 5px 10px 5px 10px;">



                                            <div class="row">

                                                <div class="col-xl-7 col-md-7 col-7 text-center">
                                                    <div class="count">{{$AdminsCount}}</div>
                                                    <div class="count-title">Admin</div>
                                                </div>


                                                <div class="col-xl-5 col-md-5 col-5 text-center">
                                                    <img src="{{url('panel/images/admin.svg')}}" alt="" style="max-width: 50px">
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endif
                        <!--/ Admin Card -->

                        <!-- Agencies Card -->
                        @if($User->user_type_slug=='administrator' || $User->user_type_slug=='admin')
                            <div class="col-xl-3 col-md-3 col-12">

                                <a href="{{url('admin/agencies/list')}}">
                                    <div class="card custom-card">
                                        <div class="card-body" style="padding: 5px 10px 5px 10px;">



                                            <div class="row">

                                                <div class="col-xl-7 col-md-7 col-7 text-center">
                                                    <div class="count">{{$AgenciesCount}}</div>
                                                    <div class="count-title">Agencies</div>
                                                </div>


                                                <div class="col-xl-5 col-md-5 col-5 text-center">
                                                    <img src="{{url('panel/images/agencies.svg')}}" alt="" style="max-width: 50px">
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endif
                        <!--/ Agencies Card -->

                        <!-- hosts Card -->
                        @if($User->user_type_slug=='administrator' || $User->user_type_slug=='agency')
                            <div class="col-xl-3 col-md-3 col-12">

                                <a href="{{url('admin/user/hosts/list')}}">
                                    <div class="card custom-card">
                                        <div class="card-body" style="padding: 5px 10px 5px 10px;">



                                            <div class="row">

                                                <div class="col-xl-7 col-md-7 col-7 text-center">
                                                    <div class="count">{{$HostsCount}}</div>
                                                    <div class="count-title">Hosts</div>
                                                </div>


                                                <div class="col-xl-5 col-md-5 col-5 text-center">
                                                    <img src="{{url('panel/images/hosts.svg')}}" alt="" style="max-width: 50px">
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endif
                        <!--/ hosts Card -->

                        <!-- Agents Card -->
                        @if($User->user_type_slug=='administrator')
                            <div class="col-xl-3 col-md-3 col-12">

                                <a href="{{url('admin/user/agents/list')}}">
                                    <div class="card custom-card">
                                        <div class="card-body" style="padding: 5px 10px 5px 10px;">



                                            <div class="row">

                                                <div class="col-xl-7 col-md-7 col-7 text-center">
                                                    <div class="count">{{$AgentsCount}}</div>
                                                    <div class="count-title">Agents</div>
                                                </div>


                                                <div class="col-xl-5 col-md-5 col-5 text-center">
                                                    <img src="{{url('panel/images/agents.svg')}}" alt="" style="max-width: 50px">
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endif
                        <!--/ Agents Card -->

                        <!-- Users Card -->
                        @if($User->user_type_slug=='administrator')
                            <div class="col-xl-3 col-md-3 col-12">

                                <a href="{{url('admin/user/users/list')}}">
                                    <div class="card custom-card">
                                        <div class="card-body" style="padding: 5px 10px 5px 10px;">



                                            <div class="row">

                                                <div class="col-xl-7 col-md-7 col-7 text-center">
                                                    <div class="count">{{$UsersCount}}</div>
                                                    <div class="count-title">Users</div>
                                                </div>


                                                <div class="col-xl-5 col-md-5 col-5 text-center">
                                                    <img src="{{url('panel/images/user.svg')}}" alt="" style="max-width: 50px">
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endif
                        <!--/ Users Card -->


                        <!-- Block Users Card -->
                        @if($User->user_type_slug=='administrator')
                            <div class="col-xl-3 col-md-3 col-12">

                                <a href="{{url('admin/user/block/list')}}">
                                    <div class="card custom-card">
                                        <div class="card-body" style="padding: 5px 10px 5px 10px;">



                                            <div class="row">

                                                <div class="col-xl-7 col-md-7 col-7 text-center">
                                                    <div class="count">{{$BlockUsersCount}}</div>
                                                    <div class="count-title">Block</div>
                                                </div>


                                                <div class="col-xl-5 col-md-5 col-5 text-center">
                                                    <img src="{{url('panel/images/block-users.svg')}}" alt="" style="max-width: 50px">
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endif
                        <!--/Block Users Card -->



























                    </div>

                </section>
                <!-- Dashboard Ecommerce ends -->




                <!-- Basic Tables start -->
                @if($User->user_type_slug=='administrator' || $User->user_type_slug=='admin' || $User->user_type_slug=='agency')

                    <div class="row" id="basic-table">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        @if($User->user_type_slug=='administrator')
                                           All Accounts
                                        @endif

                                        @if($User->user_type_slug=='admin')
                                            Your Agencies
                                        @endif

                                        @if($User->user_type_slug=='agency')
                                            Your Hosts
                                        @endif

                                    </h4>

                                    {{--                                <button type="button" class="btn btn-primary waves-effect waves-float waves-light"  data-toggle="modal" data-target="#exampleModalCenter">Add New User</button>--}}

                                </div>
                                <div class="table-responsive">



                                    <table id="example" class="table">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Picture</th>
                                            <th>Full Name/Country</th>
                                            <th>Admin/Agency</th>
                                            <th>Email/Number</th>
                                            <th>Type/Status</th>
                                            @if($User->user_type_slug=='administrator')
                                            <th>Action</th>
                                            @endif
                                            <th>Registered By</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        @foreach($Users as $UsersTemp)
                                            <tr>
                                                <td>{{$UsersTemp->created_at}}</td>
                                                <td style="text-align: center">
                                                    @if($UsersTemp->image!=null)
                                                        <img src="{{url('/uploads/'.$UsersTemp->image)}}" class="rounded-circle" style="height: 35px; width: 35px; object-fit: cover; border: 1px solid #010716;" alt="{{$UsersTemp->full_name}}" title="{{$UsersTemp->full_name}}">
                                                    @else
                                                        <img src="{{url('/general/img/default-user.jpg')}}" class="rounded-circle" style="height: 35px; width: 35px; object-fit: cover; border: 1px solid #010716;" alt="{{$UsersTemp->full_name}}" title="{{$UsersTemp->full_name}}">
                                                    @endif

                                                    <br>
                                                    {{$UsersTemp->code}}
                                                </td>
                                                <td>{{$UsersTemp->full_name}}<br>{{$UsersTemp->country_name}}</td>
                                                <td>{{$UsersTemp->company_title}},<br>{{$UsersTemp->users2_full_name}}</td>

                                                <td>{{$UsersTemp->email}}<br>{{$UsersTemp->country_code_code.' '.$UsersTemp->number}}</td>
                                                <td>
                                                    {{$UsersTemp->status}}
                                                    <br>
                                                    @if($UsersTemp->user_type_slug=='administrator')
                                                        <button type="button" class="btn btn-dark btn-sm">{{$UsersTemp->user_type_title}}</button>
                                                    @elseif($UsersTemp->user_type_slug=='admin')
                                                        <button type="button" class="btn btn-warning btn-sm">{{$UsersTemp->user_type_title}}</button>
                                                    @elseif($UsersTemp->user_type_slug=='host')
                                                        <button type="button" class="btn btn-danger btn-sm">{{$UsersTemp->user_type_title}}</button>
                                                    @elseif($UsersTemp->user_type_slug=='agency')
                                                        <button type="button" class="btn btn-secondary btn-sm">{{$UsersTemp->user_type_title}}</button>
                                                    @elseif($UsersTemp->user_type_slug=='agent')
                                                        <button type="button" class="btn btn-success btn-sm">{{$UsersTemp->user_type_title}}</button>
                                                    @elseif($UsersTemp->user_type_slug=='user')
                                                        <button type="button" class="btn btn-primary btn-sm">{{$UsersTemp->user_type_title}}</button>
                                                    @endif

                                                </td>



                                                @if($User->user_type_slug=='administrator')
                                                    <td>
                                                        {{--                                                    <a href="javascript:void(0);" id="view_{{$UsersTemp->id}}" class="view"><i data-feather="eye"></i></a>--}}
                                                        {{--                                                    <a href="javascript:void(0);" id="edit_{{$UsersTemp->id}}" class="edit"><i data-feather="edit-2"></i></a>--}}

                                                        @if($UsersTemp->id!=$User->id)
                                                            <a href="javascript:void(0);" id="delete_{{$UsersTemp->id}}" class="delete" title="Delete"><i data-feather="trash-2"></i></a>
                                                        @endif

                                                        @if($UsersTemp->id!=$User->id && $UsersTemp->status!='Blocked')
                                                            <a href="javascript:void(0);" id="block_{{$UsersTemp->id}}" style="color: red"  class="block" title="Block"><i data-feather="x-square"></i></a>
                                                        @endif



                                                        @if($UsersTemp->id!=$User->id && $UsersTemp->status=='Pending')
                                                            <a href="javascript:void(0);" id="approve_{{$UsersTemp->id}}" style="color: red"  class="approve" title="Approve"><i data-feather="check"></i></a>
                                                        @endif

                                                        @if($UsersTemp->id!=$User->id && $UsersTemp->status=='Blocked')
                                                            <a href="javascript:void(0);" id="unblocked_{{$UsersTemp->id}}" style="color: red"  class="unblocked" title="Unblocked"><i data-feather="check"></i></a>
                                                        @endif

                                                    </td>
                                                @endif

                                                <td>
                                                    @if($UsersTemp->created_by_user_id==null)
                                                        Direct
                                                    @else
                                                        Indirect
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach


                                        </tbody>

                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Picture</th>
                                            <th>Full Name/Country</th>
                                            <th>Admin/Agency</th>
                                            <th>Email/Number</th>
                                            <th>Type/Status</th>
                                            @if($User->user_type_slug=='administrator')
                                                <th>Action</th>
                                            @endif
                                            <th>Registered By</th>
                                        </tr>
                                        </thead>

                                    </table>



                                </div>
                            </div>
                        </div>
                    </div>

                @endif
                <!-- Basic Tables end -->



            </div>
        </div>

    </div>
    <!-- End: Content-->



    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    @include('.panel.general.footer')
    @include('.panel.general.modal')


    @include('.panel.general.script')


    <script>
        $( document ).ready(function() {
            $("#link").click(function(event){
                var range = document.createRange();
                range.selectNode(document.getElementById("link"));
                window.getSelection().removeAllRanges(); // clear current selection
                window.getSelection().addRange(range); // to select text
                document.execCommand("copy");
                window.getSelection().removeAllRanges();// to deselect
                alert('Copied to Clipboard');
            });
        });
    </script>

    <script>


        function validatealpha(alpha) {
            var reno = /^[a-zA-Z\s]+$/;
            return reno.test(alpha);
        }

        function validateEmail(youremail) {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(youremail);
        }


        function validatenum(num) {
            var reno = /^\d+$/;
            return reno.test(num);
        }



        $('.approve').on('click',function (e) {
            e.preventDefault();



            var inc=0;

            var string = jQuery(this).attr("id");
            var array = string.split('_');
            var id=array[1];


            if (id !== '') {

                if (validatenum(id)) {
                    inc++;
                } else {
                    alert('ID is invalid');
                    return null;
                }

            } else {
                alert('ID is required');
                return null;
            }





            if(inc===1){

                var config    =  project.Config;
                var dataApiUrl   = config.getApiUrl();
                var dataAppUrl   = config.getAppUrl();
                var dataTokenGet = config.getToken();

                var fdata =new FormData();
                fdata.append('id',id);

                $.ajax({
                    url: dataApiUrl+'/user/approve',
                    data: fdata,
                    type: 'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    dataType:'json',
                    processData: false,
                    contentType: false,


                    beforeSend: function(){


                        $('.approve').attr('disabled', 'disabled');

                        $("#alert").css("display", "none");
                        $("#loading").css("display", "block");

                    },


                    success:function(data){


                        $("#loading").css("display", "none");


                        $('.approve').removeAttr('disabled');


                        if(data['error']!=true){

                            window.location.href= dataAppUrl+'/admin/dashboard';

                        }else{
                            alert(data['message']);
                        }





                    },
                    error: function(xmlhttprequest, textstatus, message) {

                        if(textstatus==="timeout") {
                            alert('Timeout Please try again.');
                        }else {
                            if(navigator.onLine) {

                                if(textstatus==="error"){
                                    alert(message);
                                }

                            }else {
                                alert('Check your internet connection then try again later.');
                            }
                        }


                        $("#loading").css("display", "none");


                        $('.approve').removeAttr('disabled');
                    }


                });

            }else {
                $("#alert").css("display", "block").text('Valid email required.');
            }


        });

        $('.block').on('click',function (e) {
            e.preventDefault();



            var inc=0;

            var string = jQuery(this).attr("id");
            var array = string.split('_');
            var id=array[1];


            if (id !== '') {

                if (validatenum(id)) {
                    inc++;
                } else {
                    alert('ID is invalid');
                    return null;
                }

            } else {
                alert('ID is required');
                return null;
            }





            if(inc===1){

                var config    =  project.Config;
                var dataApiUrl   = config.getApiUrl();
                var dataAppUrl   = config.getAppUrl();
                var dataTokenGet = config.getToken();

                var fdata =new FormData();
                fdata.append('id',id);

                $.ajax({
                    url: dataApiUrl+'/user/block',
                    data: fdata,
                    type: 'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    dataType:'json',
                    processData: false,
                    contentType: false,


                    beforeSend: function(){


                        $('.block').attr('disabled', 'disabled');

                        $("#alert").css("display", "none");
                        $("#loading").css("display", "block");

                    },


                    success:function(data){


                        $("#loading").css("display", "none");


                        $('.block').removeAttr('disabled');


                        if(data['error']!=true){

                            window.location.href= dataAppUrl+'/admin/dashboard';

                        }else{
                            alert(data['message']);
                        }





                    },
                    error: function(xmlhttprequest, textstatus, message) {

                        if(textstatus==="timeout") {
                            alert('Timeout Please try again.');
                        }else {
                            if(navigator.onLine) {

                                if(textstatus==="error"){
                                    alert(message);
                                }

                            }else {
                                alert('Check your internet connection then try again later.');
                            }
                        }


                        $("#loading").css("display", "none");


                        $('.block').removeAttr('disabled');
                    }


                });

            }else {
                $("#alert").css("display", "block").text('Valid email required.');
            }


        });

        $('.unblocked').on('click',function (e) {
            e.preventDefault();



            var inc=0;

            var string = jQuery(this).attr("id");
            var array = string.split('_');
            var id=array[1];


            if (id !== '') {

                if (validatenum(id)) {
                    inc++;
                } else {
                    alert('ID is invalid');
                    return null;
                }

            } else {
                alert('ID is required');
                return null;
            }





            if(inc===1){

                var config    =  project.Config;
                var dataApiUrl   = config.getApiUrl();
                var dataAppUrl   = config.getAppUrl();
                var dataTokenGet = config.getToken();

                var fdata =new FormData();
                fdata.append('id',id);

                $.ajax({
                    url: dataApiUrl+'/user/unblocked',
                    data: fdata,
                    type: 'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    dataType:'json',
                    processData: false,
                    contentType: false,


                    beforeSend: function(){


                        $('.unblocked').attr('disabled', 'disabled');

                        $("#alert").css("display", "none");
                        $("#loading").css("display", "block");

                    },


                    success:function(data){


                        $("#loading").css("display", "none");


                        $('.unblocked').removeAttr('disabled');


                        if(data['error']!=true){

                            window.location.href= dataAppUrl+'/admin/dashboard';

                        }else{
                            alert(data['message']);
                        }





                    },
                    error: function(xmlhttprequest, textstatus, message) {

                        if(textstatus==="timeout") {
                            alert('Timeout Please try again.');
                        }else {
                            if(navigator.onLine) {

                                if(textstatus==="error"){
                                    alert(message);
                                }

                            }else {
                                alert('Check your internet connection then try again later.');
                            }
                        }


                        $("#loading").css("display", "none");


                        $('.unblocked').removeAttr('disabled');
                    }


                });

            }else {
                $("#alert").css("display", "block").text('Valid email required.');
            }


        });

        $('.delete').on('click',function (e) {
            e.preventDefault();



            var inc=0;

            var string = jQuery(this).attr("id");
            var array = string.split('_');
            var id=array[1];


            if (id !== '') {

                if (validatenum(id)) {
                    inc++;
                } else {
                    alert('ID is invalid');
                    return null;
                }

            } else {
                alert('ID is required');
                return null;
            }





            if(inc===1){

                var config    =  project.Config;
                var dataApiUrl   = config.getApiUrl();
                var dataAppUrl   = config.getAppUrl();
                var dataTokenGet = config.getToken();

                var fdata =new FormData();
                fdata.append('id',id);

                $.ajax({
                    url: dataApiUrl+'/user/delete',
                    data: fdata,
                    type: 'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    dataType:'json',
                    processData: false,
                    contentType: false,


                    beforeSend: function(){


                        $('.delete').attr('disabled', 'disabled');

                        $("#alert").css("display", "none");
                        $("#loading").css("display", "block");

                    },


                    success:function(data){


                        $("#loading").css("display", "none");


                        $('.delete').removeAttr('disabled');


                        if(data['error']!=true){

                            window.location.href= dataAppUrl+'/admin/dashboard';

                        }else{
                            alert(data['message']);
                        }





                    },
                    error: function(xmlhttprequest, textstatus, message) {

                        if(textstatus==="timeout") {
                            alert('Timeout Please try again.');
                        }else {
                            if(navigator.onLine) {

                                if(textstatus==="error"){
                                    alert(message);
                                }

                            }else {
                                alert('Check your internet connection then try again later.');
                            }
                        }


                        $("#loading").css("display", "none");


                        $('.delete').removeAttr('disabled');
                    }


                });

            }else {
                $("#alert").css("display", "block").text('Valid email required.');
            }


        });
      
    </script>



</body>
</html>
