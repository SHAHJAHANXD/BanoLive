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
<section class="background-2">
    <div class="container">
        <div class="row">

            <div class="col-md-5 col-sm-12 col-lg-5 mx-auto mt-3" style="color: #d3d3d3">
                <div class="w-100">
                    <div style="text-align: center">
                        <img src="{{url('/mobile/img/logo-black.svg')}}" height="120px" width="120px">
                    </div>
                    <div class="text-white ch-8 fb-b mb-3 mt-2 text-center">
                        Create an Account Now and Get The Best Deal.
                    </div>

                    <form class="row g-3">



                        <div class="col-12">
                            <label for="full_name">Phone Number*</label>
                            <input type="text" id="full_name" class="form-control border-1 bg-color-31 cus-bor-1 text-white rounded-3 input-focus p-4" placeholder="Enter Full Name" oninput="this.value = this.value.replace(/[^a-zA-Z .]/g, '').replace(/(\..*)\./g, '$1');" maxlength="60">
                            <small id="full_name_alert" style="color: red;"></small>
                        </div>


                        <div class="col-12">
                            <label for="email_address">Email Address*</label>
                            <input type="email" id="email_address" class="form-control border-1 bg-color-31 cus-bor-1 text-white rounded-3 input-focus p-4" placeholder="Enter Email address" maxlength="50">
                            <small id="email_address_alert" style="color: red;"></small>
                        </div>


                        <div class="col-12">
                            <label for="number">Phone Number*</label>
                            <input type="text" id="number" class="form-control border-1 bg-color-31 cus-bor-1 text-white rounded-3 input-focus p-4" placeholder="Enter Phone Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="11">
                            <small id="number_alert" style="color: red;"></small>
                        </div>



                        <div class="col-12  cus-input-group-1">
                            <label for="password">Password*</label>
                            <div class="input-group cus-bor-1 bg-color-31 rounded-3">
                                <input type="password" class="form-control text-white bg-transparent border-0 input-focus" id="password" placeholder="Enter Password" maxlength="30">
                                <span class="input-group-text border-0 bg-transparent"><i class="fas fa-eye txt-color-5" onclick="pass_toggle()" type="button"></i></span>
                            </div>
                            <small id="password_alert" style="color: red;"></small>
                        </div>






                        <div class="col-12">
                            <button type="button" id="submit" class="btn p-2 ch-7 cus-btn-1 w-100 fb-b rounded-3">Sign Up</button>
                            <div class="mt-3 text-center fb-b ch-8" id="alert" style="color: red"></div>
                            <div class="mt-3 text-center" id="loading" style="display: none">
                                <img src="{{url('/general/img/loading.gif')}}" alt="">
                            </div>
                        </div>






                    </form>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-lg-12 col-12 mt-3">

                <div class="text-white fb-b ch-8 text-center">
                    <div class="text-center">Already have an Account? &nbsp;<a href="{{url('mobile/sign-in')}}" class="text-danger fb-b" style="text-decoration: none">Sign In</a></div>

                    <div class="text-center"><a href="{{url('/mobile/become-a-partner')}}" class="text-danger fb-b" style="text-decoration: none">Become a Partner</a></div>
                </div>

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
                $('#full_name').css("border", "1px solid #ccc");
                $("#full_name_alert").css("display", "none");
            } else {
                $('#full_name').css("border", "1px solid red");
                $("#full_name_alert").css("display", "block").text('Full name is invalid');
                return null;
            }

        } else {
            $('#full_name').css("border", "1px solid red");
            $("#full_name_alert").css("display", "block").text('Full name is required');
            return null;
        }

        if (email_address === '') {
            $('#email_address').css("border", "1px solid red");
            $("#email_address_alert").css("display", "block").text('Email address is required');
            return null;
        } else {
            if (validateEmail(email_address)) {

                $('#email_address').css("border", "1px solid #ccc");
                $("#email_address_alert").css("display", "none");

            } else {
                $('#email_address').css("border", "1px solid red");
                $("#email_address_alert").css("display", "block").text('Email address is invalid');
                return null;
            }
        }


        if (number !== '') {

            if (validatenum(number)) {
                $('#number').css("border", "1px solid #ccc");
                $("#number_alert").css("display", "none");
            } else {
                $('#number').css("border", "1px solid red");
                $("#number_alert").css("display", "block").text('Number is invalid');
                return null;
            }

        } else {
            $('#number').css("border", "1px solid red");
            $("#number_alert").css("display", "block").text('Number is required');
            return null;
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
            fdata.append('full_name',full_name);
            fdata.append('email',email_address);
            fdata.append('number',number);
            fdata.append('password',password);
            fdata.append('terms_services',terms_services);

            $.ajax({
                url: dataApiUrl+'/sign-up/user',
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
                        window.location.href= dataAppUrl+'/mobile/sign-in';
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



    });


</script>


</body>
</html>
