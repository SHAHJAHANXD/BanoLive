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


<!------------------------------Section------------------------------------>
<section class="pb-5 pt-5 header-back-img">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8">
                <img src="{{url('/general/img/blog-tag-01.jpg')}}" class="w-100 h-100" alt="...">
                <div class="position-relative">
                    <div class="bottom-0 mb-5 position-absolute ms-2">
                        <div class="ch-6 text-white fb">The Top 10 Live-Streaming Trends in Asia by Bano Live</div>
                        <a class="text-white ch-7">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="row h-100">

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <img src="{{url('/general/img/blog-tag-02.jpg')}}" class="w-100 h-100" alt="...">
                        <div class="position-relative">
                            <div class="bottom-0 mb-5 position-absolute ms-2">
                                <div class="ch-6 text-white fb">The Top 10 Live-Streaming Trends ...</div>
                                <a class="text-white ch-7">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <img src="{{url('/general/img/blog-tag-03.jpg')}}" class="w-100 h-100" alt="...">
                        <div class="position-relative">
                            <div class="bottom-0 mb-5 position-absolute ms-2">
                                <div class="ch-6 text-white fb">The Top 10 Live-Streaming Trends ...</div>
                                <a class="text-white ch-7">Learn More</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
</section>
<!-----------------------------/Section-------------------------------------->

<!------------------------------Section--------------------------------------->
<section class="pt-5 pb-5">
    <div class="container ">
        <div class="row">
            <div class="ch-1">News Releases</div>
            <div class="col-lg-12 col-sm-12 col-md-12">


                <ul class="nav nav-pills mb-3 mt-3 home-tab-box" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">ALL</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Home-tab" data-bs-toggle="pill" data-bs-target="#pills-Home" type="button" role="tab" aria-controls="pills-Home" aria-selected="false">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Download-Talkwee-tab" data-bs-toggle="pill" data-bs-target="#pills-Download-Talkwee" type="button" role="tab" aria-controls="pills-Download-Talkwee" aria-selected="false">Download Bano Live</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Live-Shows-tab" data-bs-toggle="pill" data-bs-target="#pills-Live-Shows" type="button" role="tab" aria-controls="pills-Live-Shows" aria-selected="false">Live Shows</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Live-Games-tab" data-bs-toggle="pill" data-bs-target="#pills-Live-Games" type="button" role="tab" aria-controls="pills-Live-Games" aria-selected="false">Live Games</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!------------------------Tab 1----------------------------->
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                        <div class="row news-letter bg-white">

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-01.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-02.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-03.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-01.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-02.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-03.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!------------------------Tab 2----------------------------->
                    <div class="tab-pane fade" id="pills-Home" role="tabpanel" aria-labelledby="pills-Home-tab">
                        <div class="row">


                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-01.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-02.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-03.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-01.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-02.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-03.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!------------------------Tab 3----------------------------->
                    <div class="tab-pane fade" id="pills-Download-Talkwee" role="tabpanel" aria-labelledby="pills-Download-Talkwee-tab">
                        <div class="row">


                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-01.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-02.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-03.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-01.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-02.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-03.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!------------------------Tab 4----------------------------->
                    <div class="tab-pane fade" id="pills-Live-Shows" role="tabpanel" aria-labelledby="pills-Live-Shows-tab">
                        <div class="row">


                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-01.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-02.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-03.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-01.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-02.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-03.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!------------------------Tab 5----------------------------->
                    <div class="tab-pane fade" id="pills-Live-Games" role="tabpanel" aria-labelledby="pills-Live-Games-tab">
                        <div class="row">


                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-01.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-02.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-03.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-01.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-02.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 c-round mb-2">
                                <img src="{{url('/general/img/news-releas-03.jpg')}}" class="w-100" alt="...">
                                <div class="pt-3">
                                    <div class="text-muted ch-7">2021-04-30</div>
                                    <div class="ch-6 fb">The Top 10 Live-Streaming Trends</div>
                                    <a href="#" class="ch-7 link-danger">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!------------------------Tab 5----------------------------->
                </div>




            </div>
        </div>
    </div>
</section>
<!-----------------------------/Section--------------------------------------->



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




        if(inc===3){

            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();

            var fdata =new FormData();
            fdata.append('full_name',full_name);
            fdata.append('email',email_address);
            fdata.append('password',password);
            fdata.append('terms_services',terms_services);

            $.ajax({
                url: dataApiUrl+'/sign-up',
                data: fdata,
                type: 'POST',
                timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                dataType:'json',
                processData: false,
                contentType: false,


                beforeSend: function(){

                    $('#full_name').attr('disabled', 'disabled');
                    $('#email_address').attr('disabled', 'disabled');
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
