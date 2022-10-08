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


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mx-auto">

                <div class="ch-1 text-dark text-center">Sign Up</div>
                <div class="ch-7 text-muted text-dark text-center">Create an Account Now and Get The Best Deal</div>

            </div>



            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mx-auto mt-5 mb-5">

                <div class="row">


                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">

                        <a href="{{url('/sign-up/admin')}}" style="text-decoration: none; font-weight: bold; color: red">
                            <div class="card p-4 text-center" style="background-color: #f9f9f9; border: 1px solid #f9f9f9;">

                                <img src="{{url('panel/images/hosts.svg')}}" alt="" title="" style="width: 100px; height: 100px; margin: 0 auto">

                                <div class="mt-3">Sign Up As Admin</div>

                            </div>
                        </a>

                    </div>



                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">

                        <a href="{{url('/sign-up/agency')}}" style="text-decoration: none; font-weight: bold; color: red">
                            <div class="card p-4 text-center" style="background-color: #f9f9f9; border: 1px solid #f9f9f9;">

                                <img src="{{url('panel/images/agencies.svg')}}" alt="" title="" style="width: 100px; height: 100px; margin: 0 auto">

                                <div class="mt-3">Sign Up As Agency</div>

                            </div>
                        </a>

                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">

                        <a href="{{url('/sign-up/host')}}" style="text-decoration: none; font-weight: bold; color: red">
                            <div class="card p-4 text-center" style="background-color: #f9f9f9; border: 1px solid #f9f9f9;">

                                <img src="{{url('panel/images/hosts.svg')}}" alt="" title="" style="width: 100px; height: 100px; margin: 0 auto">

                                <div class="mt-3">Sign Up As Host</div>

                            </div>
                        </a>

                    </div>




                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">

                        <a href="{{url('/sign-up/agent')}}" style="text-decoration: none; font-weight: bold; color: red">
                            <div class="card p-4 text-center" style="background-color: #f9f9f9; border: 1px solid #f9f9f9;">

                                <img src="{{url('panel/images/agents.svg')}}" alt="" title="" style="width: 100px; height: 100px; margin: 0 auto">

                                <div class="mt-3">Sign Up As Agent</div>

                            </div>
                        </a>

                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">

                        <a href="{{url('/sign-up/user')}}" style="text-decoration: none; font-weight: bold; color: red">
                            <div class="card p-4 text-center" style="background-color: #f9f9f9; border: 1px solid #f9f9f9;">

                                <img src="{{url('panel/images/user.svg')}}" alt="" title="" style="width: 100px; height: 100px; margin: 0 auto">

                                <div class="mt-3">Sign Up As User</div>

                            </div>
                        </a>

                    </div>



                </div>
            </div>


        </div>
    </div>
</section>
<!------------------/ Section----------------------------------------------->

@include('.front.general.footer')

@include('.front.general.script')


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


        var full_name=$('#full_name').val();
        var email_address=$('#email_address').val();
        var number=$('#number').val();
        var password=$('#password').val();
        var terms_services = $('#terms_services').prop('checked');



        if (full_name !== '') {

            if (validatealpha(full_name)) {
                inc++;
                $('#full_name').css("border", "1px solid #ccc");
            } else {
                $('#full_name').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Full name is invalid');
                return null;
            }

        } else {
            $('#full_name').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Full name is required');
            return null;
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

        if (number !== '') {

            if (validatenum(number)) {
                inc++;
                $('#number').css("border", "1px solid #ccc");
            } else {
                $('#number').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Number is invalid');
                return null;
            }

        } else {
            $('#number').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Number is required');
            return null;
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




        if(inc===4){

            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();

            var fdata =new FormData();
            fdata.append('full_name',full_name);
            fdata.append('email',email_address);
            fdata.append('number',number);
            fdata.append('password',password);
            fdata.append('terms_services',terms_services);

            $.ajax({
                url: dataApiUrl+'/sign-up/admin',
                data: fdata,
                type: 'POST',
                timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                dataType:'json',
                processData: false,
                contentType: false,


                beforeSend: function(){

                    $('#full_name').attr('disabled', 'disabled');
                    $('#email_address').attr('disabled', 'disabled');
                    $('#number').attr('disabled', 'disabled');
                    $('#password').attr('disabled', 'disabled');
                    $('#confirm_password').attr('disabled', 'disabled');

                    $('#submit').attr('disabled', 'disabled');

                    $("#alert").css("display", "none");
                    $("#loading").css("display", "block");

                },


                success:function(data){


                    $("#loading").css("display", "none");


                    $('#full_name').removeAttr('disabled');
                    $('#email_address').removeAttr('disabled');
                    $('#number').removeAttr('disabled');
                    $('#password').removeAttr('disabled');
                    $('#confirm_password').removeAttr('disabled');

                    $('#submit').removeAttr('disabled');


                    if(data['error']!=true){
                        window.location.href= dataAppUrl+'/sign-in';
                    }else{
                        $("#alert").css("display", "block").text(data['message']);
                    }

                },
                error: function(xmlhttprequest, textstatus, message) {

                    if(textstatus==="timeout") {
                        $("#alert").css("display", "block").text('Timeout Please try again.');
                    }else {
                        if(navigator.onLine) {

                            if(textstatus==="error"){
                                $("#alert").css("display", "block").text(message);
                            }

                        }else {
                            $("#alert").css("display", "block").text('Check your internet connection then try again later.');
                        }
                    }

                    $("#loading").css("display", "none");

                    $('#full_name').removeAttr('disabled');
                    $('#email_address').removeAttr('disabled');
                    $('#number').removeAttr('disabled');
                    $('#password').removeAttr('disabled');
                    $('#confirm_password').removeAttr('disabled');

                    $('#submit').removeAttr('disabled');
                }


            });

        }else {
            $("#alert").css("display", "block").text('Something is wrong.');
        }


    });


</script>


</body>
</html>
