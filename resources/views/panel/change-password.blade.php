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
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header">
                                <h4 class="card-title">Change Password</h4>
                            </div>


                            <div class="card-body">


                                <div class="row">



                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="old_password">Old Password</label>
                                            <input type="password" class="form-control" id="old_password" placeholder="Enter old password" />
                                        </div>

                                    </div>



                                    <div class="col-lg-12 col-md-12 col-12">
                                        <hr>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="new_password">New Password</label>
                                            <input type="password" class="form-control" id="new_password" placeholder="Enter new password" />
                                        </div>

                                    </div>

                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="confirm_password">Confirm Password</label>
                                            <input type="password" class="form-control" id="confirm_password" placeholder="Enter confirm password" />
                                        </div>

                                    </div>

                                </div>



                            </div>


                            <div class="card-footer">


                                <div class="row">


                                    <div class="col-lg-6 col-md-6 col-6">


                                        <div id="alert"></div>
                                        <div id="loading" style="display: none">
                                            <img src="{{url('/front/img/loading.gif')}}" alt="">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-6 text-right">


                                        <button type="button" class="btn btn-primary" id="submit">Update</button>

                                    </div>

                                </div>

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
            var old_password=$('#old_password').val();
            var new_password=$('#new_password').val();
            var confirm_password=$('#confirm_password').val();


            if (old_password !== '') {

                inc++;
                $('#old_password').css("border", "1px solid #ccc");

            } else {
                $('#old_password').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Old password is required');
                return null;
            }


            if (new_password !== '' && new_password !== ' ' && new_password !== null) {

                if(new_password.length>=6){
                    inc++;
                    $('#new_password').css("border", "1px solid #ccc");
                }else {
                    $('#new_password').css("border", "1px solid red");
                    $("#alert").css("display", "block").text('Use a minimum password length of 6 or more characters');
                    return null;
                }

            }else{
                $('#new_password').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Password is required');
                return null;
            }

            if (new_password !== confirm_password) {

                $('#confirm_password').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Confirm Password must be match.');
                return null;

            }else{

                $('#confirm_password').css("border", "1px solid #ccc");

            }



            var old_password=$('#old_password').val();
            var new_password=$('#new_password').val();
            var confirm_password=$('#confirm_password').val();

            if(inc===2){

                var config    =  project.Config;
                var dataApiUrl   = config.getApiUrl();
                var dataAppUrl   = config.getAppUrl();
                var dataTokenGet = config.getToken();

                var fdata =new FormData();
                fdata.append('old_password',old_password);
                fdata.append('new_password',new_password);
                fdata.append('confirm_password',confirm_password);

                $.ajax({
                    url: dataApiUrl+'/setting/change-password',
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

                            window.location.href= dataAppUrl+'/admin/dashboard';

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
