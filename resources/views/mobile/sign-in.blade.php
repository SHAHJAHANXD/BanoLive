<!DOCTYPE html>
<html lang="en" data-textdirection="ltr">
<head>

    @include('.mobile.general.meta-title')
    @include('.mobile.general.favicon')
    @include('.mobile.general.external-css')
    @include('.mobile.general.style')


</head>
<body>




@include('.mobile.general.preloader')


<!--------------------------Section-------------------------------------->
<section class="background-2 position-relative">
    <div class="container">
        <div class="row">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="col-md-5 col-sm-12 col-lg-5 mx-auto" style="color: #d3d3d3">
                    <div class="w-100">

                        <div class="text-center">
                            <img src="{{url('/mobile/img/logo-black.svg')}}" height="120px" width="120px">
                        </div>

                        <div class="text-white ch-8 fb-b mb-3 mt-2 text-center">
                            Enter Your Phone Number & Password
                        </div>

                        <form class="row g-3">
                            <div class="col-12  ">
                                <label for="email">Email Address*</label>
                                <input type="email" id="email" class="form-control border-1 bg-color-31 cus-bor-1 text-white rounded-3 input-focus p-4" placeholder="Enter Email Address">
                                <small id="email_alert" style="color: red;"></small>
                            </div>



{{--                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" id="remember" type="checkbox" value="" style="  height: 20px; width: 20px;">--}}
{{--                                    <label class="form-check-label ch-8" for="remember">--}}
{{--                                        &nbsp; Remember me--}}
{{--                                    </label>--}}
{{--                                    <a href="{{url('/mobile/forgot-password')}}" class="text-danger ch-8 fb-b float-end" style="text-decoration: none">Forgot Password?</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}





                            <div class="col-12  cus-input-group-1">
                                <label for="password">Password*</label>
                                <div class="input-group cus-bor-1 bg-color-31 rounded-3">
                                    <input type="password" class="form-control text-white bg-transparent border-0 input-focus" id="password" placeholder="Enter Password">
                                    <span class="input-group-text border-0 bg-transparent"><i class="fas fa-eye txt-color-5" onclick="pass_toggle()" type="button"></i></span>
                                </div>
                                <small id="password_alert" style="color: red;"></small>
                            </div>


                            <div class="col-12">
                                <button type="button" id="submit" class="btn p-2 ch-7 cus-btn-1 w-100 fb-b rounded-3">Sign In</button>



                                <div class="mt-3 text-center" id="alert" style="color: #e7e7e7"></div>
                                <div class="mt-3 text-center" id="loading" style="display: none">
                                    <img src="{{url('/general/img/loading.gif')}}" alt="">
                                </div>
                            </div>


{{--                            <div class="col-12 ">--}}
{{--                                <div class="d-flex bd-highlight ">--}}
{{--                                    <div class="me-auto bd-highlight w-100">--}}
{{--                                        <div class="w-100 hr bg-color-30 mt-3"></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex justify-content-center">--}}
{{--                                    <span class="text-white ch-7 mt-1 ms-2 me-2 fb-b">--}}
{{--                                        OR--}}
{{--                                    </span>--}}
{{--                                    </div>--}}
{{--                                    <div class="bd-highlight w-100">--}}
{{--                                        <div class="w-100 hr bg-color-30 mt-3"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                            <div class="d-flex justify-content-center">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="p-2 bd-highlight">--}}
{{--                                        <a href="{{url('/mobile')}}"><img src="{{url('mobile/img/icons/facebook-color.svg')}}" class=""></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="p-2 bd-highlight ">--}}
{{--                                        <a href="{{url('/mobile')}}"><img src="{{url('mobile/img/icons/google-color.svg')}}" class=""></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}



                        </form>
                    </div>
                </div>
            </div>

            <div class="text-white fb-b ch-8 text-center fixed-bottom mb-2">
                <div>Don’t Have an Account? &nbsp;<a href="{{url('mobile/sign-up/user')}}" class="text-danger fb-b" style="text-decoration: none">Sign Up</a></div>

                <div><a href="{{url('/mobile/become-a-partner')}}" class="text-danger fb-b" style="text-decoration: none">Become a Partner</a></div>
            </div>


        </div>
    </div>
</section>
<!-------------------------/Section-------------------------------------->


@include('.mobile.general.script')


<!--------------------------Script--------------------------------------->

<script>

    function pass_toggle() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

</script>
<!-------------------------/Script--------------------------------------->





<script>

    function validateEmail(youremail) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(youremail);
    }

    $('#submit').on('click',function (e) {
        e.preventDefault();




        var inc=0;
        var email=$('#email').val();
        var password=$('#password').val();


        if (email === '') {
            $('#email').css("border", "1px solid red");
            $("#email_alert").css("display", "block").text('Email address is required');
            return null;
        } else {
            if (validateEmail(email)) {

                $('#email').css("border", "1px solid #ccc");
                $("#email_alert").css("display", "none");

            } else {
                $('#email').css("border", "1px solid red");
                $("#email_alert").css("display", "block").text('Email address is invalid');
                return null;
            }
        }




        if (password !== '' && password !== ' ' && password !== null) {

            if(password.length>=6){
                $('#password').css("border", "1px solid #ccc");
                $("#password_alert").css("display", "none");
            }else {
                $('#password').css("border", "1px solid red");
                $("#password_alert").css("display", "block").text('Use a minimum password length of 6 or more characters');
                return null;
            }

        }else{
            $('#password').css("border", "1px solid red");
            $("#password_alert").css("display", "block").text('Password is required');
            return null;
        }


            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();




            var fdata =new FormData();
            fdata.append('email',email)
            fdata.append('password',password);
            fdata.append('grant_type',"password");


            $.ajax({
                url: dataApiUrl+'/login',
                data: fdata,
                type: 'POST',
                timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                dataType:'json',
                processData: false,
                contentType: false,


                beforeSend: function(){

                    $('#email').attr('disabled', 'disabled');
                    $('#password').attr('disabled', 'disabled');

                    $('#submit').attr('disabled', 'disabled');

                    $("#alert").css("display", "none");
                    $("#loading").css("display", "block");

                },
                success:function(data){



                    $('#email').removeAttr('disabled');
                    $('#password').removeAttr('disabled');

                    $('#submit').removeAttr('disabled');

                    if(data['error']==false){


                        if(data['data']['user'].user_type_id===1 || data['data']['user'].user_type_id===2 || data['data']['user'].user_type_id===3 || data['data']['user'].user_type_id===4 || data['data']['user'].user_type_id===5){
                            window.location.href= dataAppUrl+'/mobile/admin/dashboard';
                        }else {
                            window.location.href= dataAppUrl+'/mobile/newsfeed';
                        }


                        config.setToken(data.data.token);

                    }else{
                        $("#loading").css("display", "none");
                        $("#alert").css("display", "block").text(data['message']);
                    }



                },

                error: function() {


                    $("#alert").css("display", "block");

                    if(navigator.onLine) {
                        $("#alert").text('Internal server error.');
                    }else {
                        $("#alert").text('Check your internet connection then try again later.');
                    }

                    $("#loading").css("display", "none");

                    $('#email').removeAttr('disabled');
                    $('#password').removeAttr('disabled');

                    $('#submit').removeAttr('disabled');
                }


            });


    });
</script>

</body>
</html>
