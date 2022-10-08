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
<section class=" mt-5">
    <div class="container">
        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <div class="ch-1 text-dark">Contact Form</div>

                <form class="row g-3 pb-5">
                    <div class="col-md-12">
                        <input type="text" id="name" class="form-control" placeholder="Name">
                    </div>



                    <div class="col-md-12">
                        <input type="text" id="subject" class="form-control" placeholder="Subject">
                    </div>

                    <div class="col-md-6">
                        <input type="text" id="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="number" class="form-control" placeholder="Phone Number">
                    </div>


                    <div class="col-12">
                        <textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
                    </div>



                    <div class="col-12">
                        <button type="submit" id="submit" class="btn btn-danger btn-cus-1">SUBMIT NOW</button>
                    </div>


                    <div class="col-12">

                        <div id="alert"></div>

                    </div>

                </form>

            </div>
        </div>
    </div>
</section>
<!------------------/ Section----------------------------------------------->
<!------------------Section---------------------------------------------------->
<section>
    <div style="width: 100%; height:400px;"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/marine-gps/">ship tracker</a></iframe></div>
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
        var name=$('#name').val();
        var subject=$('#subject').val();
        var email=$('#email').val();
        var number=$('#number').val();
        var message=$('#message').val();


        if (name === '') {
            $('#name').css("border", "1px solid red");

        } else {
            $('#name').css("border", "1px solid #ccc");
            inc++;
        }

        if (subject === '') {
            $('#subject').css("border", "1px solid red");

        } else {
            $('#subject').css("border", "1px solid #ccc");
            inc++;
        }



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



        if (number === '') {
            $('#number').css("border", "1px solid red");

        } else {
            $('#number').css("border", "1px solid #ccc");
            inc++;
        }


        if (message === '') {
            $('#message').css("border", "1px solid red");

        } else {
            $('#message').css("border", "1px solid #ccc");
            inc++;
        }



        if(inc===5){

            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();



            var fdata =new FormData();
            fdata.append('name',name)
            fdata.append('subject',subject);
            fdata.append('email',email);
            fdata.append('number',number);
            fdata.append('message',message);


            $.ajax({
                url: dataApiUrl+'/contact/create',
                data: fdata,
                type: 'POST',
                timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                dataType:'json',
                processData: false,
                contentType: false,


                beforeSend: function(){

                    $('#name').attr('disabled', 'disabled');
                    $('#subject').attr('disabled', 'disabled');
                    $('#email').attr('disabled', 'disabled');
                    $('#number').attr('disabled', 'disabled');
                    $('#message').attr('disabled', 'disabled');


                    $('#submit').attr('disabled', 'disabled');

                    $("#alert").css("display", "none");
                    $("#loading").css("display", "block");

                },
                success:function(data){


                    $("#loading").css("display", "none");

                    $('#name').removeAttr('disabled');
                    $('#subject').removeAttr('disabled');
                    $('#email').removeAttr('disabled');
                    $('#number').removeAttr('disabled');
                    $('#message').removeAttr('disabled');

                    $('#submit').removeAttr('disabled');

                    if(data['error']==false){

                        $("#alert").css("display", "block").text(data['message']);

                        window.location.href= dataAppUrl+'/';


                    }else{

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

                    $('#name').removeAttr('disabled');
                    $('#subject').removeAttr('disabled');
                    $('#email').removeAttr('disabled');
                    $('#number').removeAttr('disabled');
                    $('#message').removeAttr('disabled');

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
