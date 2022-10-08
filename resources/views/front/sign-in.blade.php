<!DOCTYPE html>
<html lang="en" data-textdirection="ltr">
<head>

    @include('.front.general.meta-title')
    @include('.front.general.favicon')
    @include('.front.general.external-css')
    @include('.front.general.style')


</head>

<body>



@include('.front.general.preloader')

@include('.front.general.header')



<!------------------Section---------------------------------------------------->
<section class="mb-3 mt-5">
    <div class="container">
        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mx-auto">

                <div class="ch-1 text-dark text-center">LOGIN ACCOUNT</div>
                <div class="ch-7 text-muted text-dark text-center">Log Back Into Your Account</div>


                <form class="row  mt-4">


                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <input type="text" id="email" class="form-control form-control-lg" placeholder="Email Address">
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <input type="password" id="password" class="form-control form-control-lg mt-4" placeholder="Password">
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label">
                                Remember me
                            </label>
                            <a href="{{url('/forgot-password')}}" class="text-dark float-end">Forgot Password?</a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                        <button type="button" id="submit" class="btn btn-danger w-100 m-auto mt-4 mb-4">SIGN IN</button>
                    </div>

                    <div class="ch-7 text-muted text-dark text-center">Dont have an account yet? <a href="{{url('/sign-up/user')}}" class="text-dark fb">Sign Up</a></div>



                    <div class="mt-3 text-center" id="alert" style="color: black"></div>
                    <div class="mt-3 text-center" id="loading" style="display: none">
                        <img src="{{url('/general/img/loading.gif')}}" alt="">
                    </div>


                </form>

            </div>
        </div>
    </div>
</section>
<!------------------/ Section----------------------------------------------->


@include('.front.general.footer')

@include('.front.general.script')



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
        } else {
            if (validateEmail(email)) {
                inc++;
                $('#email').css("border", "1px solid #ccc");
            } else {
                $('#email').css("border", "1px solid red");
            }
        }

        if (password === '') {
            $('#password').css("border", "1px solid red");

        } else {
            $('#password').css("border", "1px solid #ccc");
            inc++;
        }



        if(inc===2){

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
                            window.location.href= dataAppUrl+'/admin/dashboard';
                        }else {
                            window.location.href= dataAppUrl+'/newsfeed';
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

        }else {
            $("#alert").css("display", "block");
            $("#alert").text('Above valid details required.');
        }


    });
</script>

</body>
</html>
