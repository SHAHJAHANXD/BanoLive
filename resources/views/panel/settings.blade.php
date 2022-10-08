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
{{--                <section id="dashboard-ecommerce">--}}
{{--                    <div class="row match-height">--}}

{{--                        <!-- Medal Card -->--}}
{{--                        <div class="col-xl-4 col-md-4 col-12">--}}
{{--                            <div class="card custom-card">--}}
{{--                                <div class="card-body">--}}

{{--                                    <div class="d-flex flex-row bd-highlight">--}}
{{--                                        <div class="flex-fill bd-highlight">--}}

{{--                                            <img src="{{url('panel/images/mtrs/d-feat-a.png')}}">--}}

{{--                                        </div>--}}
{{--                                        <div class="flex-fill bd-highlight text-center">--}}
{{--                                            <div class="count">15</div>--}}
{{--                                            <div class="count-title">Total</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--/ Medal Card -->--}}


{{--                        <!-- Medal Card -->--}}
{{--                        <div class="col-xl-4 col-md-4 col-12">--}}
{{--                            <div class="card custom-card">--}}
{{--                                <div class="card-body">--}}

{{--                                    <div class="d-flex flex-row bd-highlight">--}}
{{--                                        <div class="flex-fill bd-highlight">--}}

{{--                                            <img src="{{url('panel/images/mtrs/d-feat-b.png')}}">--}}

{{--                                        </div>--}}
{{--                                        <div class="flex-fill bd-highlight text-center">--}}
{{--                                            <div class="count">25</div>--}}
{{--                                            <div class="count-title">Active</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--/ Medal Card -->--}}


{{--                        <!-- Medal Card -->--}}
{{--                        <div class="col-xl-4 col-md-4 col-12">--}}
{{--                            <div class="card custom-card">--}}
{{--                                <div class="card-body">--}}

{{--                                    <div class="d-flex flex-row bd-highlight">--}}
{{--                                        <div class="flex-fill bd-highlight">--}}

{{--                                            <img src="{{url('panel/images/mtrs/d-feat-c.png')}}">--}}

{{--                                        </div>--}}
{{--                                        <div class="flex-fill bd-highlight text-center">--}}
{{--                                            <div class="count">30</div>--}}
{{--                                            <div class="count-title">Inactive</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--/ Medal Card -->--}}




{{--                    </div>--}}

{{--                </section>--}}
                <!-- Dashboard Ecommerce ends -->



                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header">
                                <h4 class="card-title">Settings</h4>
                            </div>



                            <div class="card-body">


                                <a href="{{url('/admin/setting/change-password')}}" style="color: black">

                                    <div class="card" style="background-color: #f4f4f4;">

                                        <div class="d-flex flex-row bd-highlight">
                                            <div class="p-2 bd-highlight">

                                                <img src="{{url('panel/images/change-password.jpg')}}" class="image" style="width: 50px">

                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <div style="font-weight: bolder; font-size: large; margin-top: 10px; color: #1c96fa">
                                                    Change Password
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </a>



                                <a href="{{url('/admin/setting/profile')}}" style="color: black">

                                    <div class="card" style="background-color: #f4f4f4;">

                                        <div class="d-flex flex-row bd-highlight">
                                            <div class="p-2 bd-highlight">

                                                <img src="{{url('panel/images/profile-settings.png')}}" class="image" style="width: 50px">

                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <div style="font-weight: bolder; font-size: large; margin-top: 10px; color: #1c96fa">
                                                    Profile Settings
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </a>



                                <a href="{{url('/admin/setting/website')}}">

                                    <div class="card" style="background-color: #f4f4f4;">

                                        <div class="d-flex flex-row bd-highlight">
                                            <div class="p-2 bd-highlight">

                                                <img src="{{url('panel/images/website-settings.png')}}" class="image" style="width: 50px">

                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <div style="font-weight: bolder; font-size: large; margin-top: 10px;">
                                                    Website Settings
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </a>

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
                    <h5 class="modal-title" id="exampleModalLongTitle">Driver Registration</h5>
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


        $('#submit').on('click',function (e) {
            e.preventDefault();



            var inc=0;
            var username=$('#username').val();
            var first_name=$('#first_name').val();
            var last_name=$('#last_name').val();
            var phone_number=$('#phone_number').val();
            var email_address=$('#email_address').val();
            var password=$('#password').val();
            var confirm_password=$('#confirm_password').val();



            if (first_name !== '') {

                if (validatealpha(first_name)) {
                    inc++;
                    $('#first_name').css("border", "1px solid #ccc");
                } else {
                    $('#first_name').css("border", "1px solid red");
                    $("#alert").css("display", "block").text('Full name is invalid');
                    return null;
                }

            } else {
                $('#first_name').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Full name is required');
                return null;
            }

            if (last_name !== '') {

                if (validatealpha(last_name)) {
                    inc++;
                    $('#last_name').css("border", "1px solid #ccc");
                } else {
                    $('#last_name').css("border", "1px solid red");
                    $("#alert").css("display", "block").text('Last name is invalid');
                    return null;
                }

            } else {
                $('#last_name').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Last name is required');
                return null;
            }


            if (username !== '') {

                inc++;
                $('#username').css("border", "1px solid #ccc");

            } else {
                $('#username').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Username is required');
                return null;
            }

            if (phone_number === '') {

                inc++;
                $('#phone_number').css("border", "1px solid #ccc");
                //$("#alert").css("display", "block").text('Contact number is required');
                //return null;
            } else {
                if (validatenum(phone_number)) {
                    inc++;
                    $('#phone_number').css("border", "1px solid #ccc");
                } else {
                    $('#phone_number').css("border", "1px solid red");
                    $("#alert").css("display", "block").text('Contact number is invalid');
                    return null;
                }
            }

            if (email_address === '') {
                $('#email_address').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Email address is required');
                return null;
            } else {
                if (validateEmail(email_address)) {
                    inc++;
                    $('#email_address').css("border", "1px solid #ccc");
                } else {
                    $('#email_address').css("border", "1px solid red");
                    $("#alert").css("display", "block").text('Email address is invalid');
                    return null;
                }
            }

            if (password !== '' && password !== ' ' && password !== null) {

                if(password.length>=6){
                    inc++;
                    $('#password').css("border", "1px solid #ccc");
                }else {
                    $('#password').css("border", "1px solid red");
                    $("#alert").css("display", "block").text('Use a minimum password length of 6 or more characters');
                    return null;
                }

            }else{
                $('#password').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Password is required');
                return null;
            }

            if (password !== confirm_password) {

                $('#confirm_password').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Confirm Password must be match.');
                return null;

            }else{

                $('#confirm_password').css("border", "1px solid #ccc");

            }




            if(inc===6){

                var config    =  project.Config;
                var dataApiUrl   = config.getApiUrl();
                var dataAppUrl   = config.getAppUrl();
                var dataTokenGet = config.getToken();

                var fdata =new FormData();
                fdata.append('username',username);
                fdata.append('first_name',first_name);
                fdata.append('last_name',last_name);
                fdata.append('number',phone_number);
                fdata.append('email',email_address);
                fdata.append('password',password);

                $.ajax({
                    url: dataApiUrl+'/user/driver',
                    data: fdata,
                    type: 'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    dataType:'json',
                    processData: false,
                    contentType: false,


                    beforeSend: function(){

                        $('#username').attr('disabled', 'disabled');
                        $('#first_name').attr('disabled', 'disabled');
                        $('#last_name').attr('disabled', 'disabled');
                        $('#phone_number').attr('disabled', 'disabled');
                        $('#email_address').attr('disabled', 'disabled');
                        $('#password').attr('disabled', 'disabled');
                        $('#confirm_password').attr('disabled', 'disabled');

                        $('#submit').attr('disabled', 'disabled');

                        $("#alert").css("display", "none");
                        $(".load-bar").css("display", "block");

                    },


                    success:function(data){


                        $(".load-bar").css("display", "none");


                        $('#username').removeAttr('disabled');
                        $('#first_name').removeAttr('disabled');
                        $('#last_name').removeAttr('disabled');
                        $('#phone_number').removeAttr('disabled');
                        $('#email_address').removeAttr('disabled');
                        $('#password').removeAttr('disabled');
                        $('#confirm_password').removeAttr('disabled');

                        $('#submit').removeAttr('disabled');


                        if(data['error']!=true){

                            window.location.href= dataAppUrl+'/drivers';

                        }else{
                            $("#alert").css("display", "block").text(data['message']);
                        }





                        // $("#alert").css("display", "block").text(data[0].message);

                        // if(data[0].error==='false'){
                        //
                        //     //config.setToken(data.response.data.token);
                        //     // window.location.href= 'http://127.0.0.1:8000'+'/';
                        //
                        // }


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


                        $(".load-bar").css("display", "none");

                        $('#username').removeAttr('disabled');
                        $('#first_name').removeAttr('disabled');
                        $('#last_name').removeAttr('disabled');
                        $('#phone_number').removeAttr('disabled');
                        $('#email_address').removeAttr('disabled');
                        $('#password').removeAttr('disabled');
                        $('#confirm_password').removeAttr('disabled');

                        $('#submit').removeAttr('disabled');
                    }


                });

            }else {
                $("#alert").css("display", "block").text('Valid email required.');
            }


        });


    </script>




</body>
</html>
