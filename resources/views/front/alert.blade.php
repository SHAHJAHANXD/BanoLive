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
<section class="mb-5 mt-5">
    <div class="container">
        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mx-auto text-center">

                <div style="text-align: center; font-size: 100px">
                    <i class="far fa-check-circle"></i>
                </div>


                <div style="font-size: 20px; font-weight: bolder">Your Application as a {{$User->user_type_title}} has been submitted</div>
                <p class="mt-3">Once your Application is approved you will be able to log in.</p>


                <p class="mt-4"><strong>Your {{$User->user_type_title}} ID number is {{$User->id_number}}</strong></p>


                @if($User->user_type_title=='Administrator')


                @elseif($User->user_type_title=='Admin')

                    <p class="mt-3">Click on the link below to share with your agency.</p>

                    <div id="link" style="background-color: #e3e3e3; border-radius: 10px; margin-top: 30px; padding: 20px; font-weight: bolder; cursor: pointer; margin-bottom: 50px;">
                        https://banolive.com/sign-up/agency?admin={{$User->id_number}}
                    </div>

                @elseif($User->user_type_title=='Agency')


                    <p class="mt-3">Click on the link below to share with your host.</p>

                    <div id="link" style="background-color: #e3e3e3; border-radius: 10px; margin-top: 30px; padding: 20px; font-weight: bolder; cursor: pointer; margin-bottom: 50px;">
                        https://banolive.com/sign-up/host?agency={{$User->id_number}}
                    </div>

                @elseif($User->user_type_title=='Host')


                @elseif($User->user_type_title=='Agent')

                @else

                @endif






                <p class="mt-3">Thank you</p>
                <p>BanoLive Team</p>





                <div style="text-align: center"><a href="{{url('/sign-out')}}" class="btn btn-danger rounded-pill">Sign Out from Your Account</a></div>

            </div>



        </div>
    </div>
</section>
<!------------------/ Section----------------------------------------------->


@include('.front.general.footer')

@include('.front.general.script')


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
