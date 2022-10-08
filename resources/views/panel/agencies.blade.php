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

                        <!-- Users Card -->
                        <div class="col-xl-4 col-md-4 col-12">

                            <div class="card custom-card">
                                <div class="card-body" style="padding: 5px 10px 5px 10px;">



                                    <div class="row">

                                        <div class="col-xl-7 col-md-7 col-7 text-center">
                                            <div class="count">{{$ActiveCount}}</div>
                                            <div class="count-title">Active</div>
                                        </div>


                                        <div class="col-xl-5 col-md-5 col-5 text-center">
                                            <img src="{{url('panel/images/user.svg')}}" alt="" style="max-width: 50px">
                                        </div>

                                    </div>



                                </div>
                            </div>

                        </div>
                        <!--/ Users Card -->


                        <!-- Pending Card -->
                        <div class="col-xl-4 col-md-4 col-12">

                            <div class="card custom-card">
                                <div class="card-body" style="padding: 5px 10px 5px 10px;">



                                    <div class="row">

                                        <div class="col-xl-7 col-md-7 col-7 text-center">
                                            <div class="count">{{$PendingCount}}</div>
                                            <div class="count-title">Pending</div>
                                        </div>


                                        <div class="col-xl-5 col-md-5 col-5 text-center">
                                            <img src="{{url('panel/images/user.svg')}}" alt="" style="max-width: 50px">
                                        </div>

                                    </div>



                                </div>
                            </div>

                        </div>
                        <!--/ Pending Card -->


                        <!-- Block Users Card -->
                        <div class="col-xl-4 col-md-4 col-12">

                            <div class="card custom-card">
                                <div class="card-body" style="padding: 5px 10px 5px 10px;">



                                    <div class="row">

                                        <div class="col-xl-7 col-md-7 col-7 text-center">
                                            <div class="count">{{$BlockedCount}}</div>
                                            <div class="count-title">Blocked</div>
                                        </div>


                                        <div class="col-xl-5 col-md-5 col-5 text-center">
                                            <img src="{{url('panel/images/block-users.svg')}}" alt="" style="max-width: 50px">
                                        </div>

                                    </div>



                                </div>
                            </div>

                        </div>
                        <!--/Block Users Card -->



                    </div>

                </section>
                <!-- Dashboard Ecommerce ends -->




                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Agencies</h4>

                                {{--                                <button type="button" class="btn btn-primary waves-effect waves-float waves-light"  data-toggle="modal" data-target="#exampleModalCenter">Add New User</button>--}}

                            </div>
                            <div class="table-responsive">
                                <table id="example" class="table">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Admin</th>
                                        <th>Picture</th>
                                        <th>Full Name</th>
                                        <th>Email/Number</th>
                                        <th>Agency</th>
                                        <th>Type</th>
                                        @if($User->user_type_slug=='administrator')
                                            <th>Action</th>
                                        @endif
                                        <th>Status</th>
                                        <th>Registered By</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    @foreach($Users as $UsersTemp)
                                        <tr>
                                            <td>{{$UsersTemp->created_at}}</td>
                                            <td>{{$UsersTemp->users2_full_name}}</td>
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
                                            <td>{{$UsersTemp->email}}<br>{{$UsersTemp->country_code_code.' '.$UsersTemp->number}}</td>
                                            <td>{{$UsersTemp->company_title}}</td>
                                            <td>

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

                                            <td>{{$UsersTemp->status}}</td>
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
                                        <th>Admin</th>
                                        <th>Picture</th>
                                        <th>Full Name</th>
                                        <th>Email/Number</th>
                                        <th>Agency</th>
                                        <th>Type</th>
                                        @if($User->user_type_slug=='administrator')
                                            <th>Action</th>
                                        @endif
                                        <th>Status</th>
                                        <th>Registered By</th>
                                    </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->


            </div>



        </div>

    </div>
    <!-- End: Content-->



    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    @include('.panel.general.footer')
    @include('.panel.general.modal')


    <!-- Vehicle Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">User Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">



                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-12">
                            <img src="" alt="" class="img-fluid order-img">
                        </div>


                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" />
                            </div>

                        </div>



                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" />
                            </div>

                        </div>




                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter Username" />
                            </div>

                        </div>



                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="form-group">
                                <label for="email_address">Email</label>
                                <input type="text" class="form-control" id="email_address" placeholder="Enter Email" />
                            </div>

                        </div>



                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="form-group">
                                <label for="phone_number">Contact Number</label>
                                <input type="text" class="form-control" id="phone_number" placeholder="Enter Number" />
                            </div>

                        </div>


                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter Password" />
                            </div>

                        </div>



                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password" placeholder="Enter Confirm Password" />
                            </div>

                        </div>



                        <div class="col-lg-12 col-md-12 col-12 text-center">

                            <div id="alert">

                            </div>

                        </div>

                    </div>





                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>



    @include('.panel.general.script')




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

                            window.location.href= dataAppUrl+'/admin/agencies/list';

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

                            window.location.href= dataAppUrl+'/admin/agencies/list';

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

                            window.location.href= dataAppUrl+'/admin/agencies/list';

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

                            window.location.href= dataAppUrl+'/admin/agencies/list';

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
