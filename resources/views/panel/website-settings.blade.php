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
                                <h4 class="card-title">Website Settings</h4>
                            </div>


                            <div class="card-body">


                                <div class="row">



                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" placeholder="Enter website title" value="{{$Settings->title}}" />
                                        </div>

                                    </div>


                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="intro">Short Intro</label>
                                            <textarea class="form-control" id="intro" rows="3" placeholder="Write intro">{{$Settings->intro}}</textarea>
                                        </div>

                                    </div>



                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="about">About</label>
                                            <textarea class="form-control" id="about" rows="3" placeholder="Write about">{{$Settings->about}}</textarea>
                                        </div>

                                    </div>



                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="about_page">About Page</label>
                                            <textarea class="form-control" id="about_page" rows="4" placeholder="Write about">{{$Settings->about_page}}</textarea>
                                        </div>

                                    </div>


                                    <div class="col-lg-6 col-md-6 col-12">

                                        <div class="form-group">
                                            <label for="email_address">Email</label>
                                            <input type="text" class="form-control" id="email_address" placeholder="Enter Email"  value="{{$Settings->email_address}}" />
                                        </div>

                                    </div>



                                    <div class="col-lg-6 col-md-6 col-12">

                                        <div class="form-group">
                                            <label for="phone_number">Contact Number</label>
                                            <input type="text" class="form-control" id="phone_number" placeholder="Enter Number" value="{{$Settings->phone_number}}" />
                                        </div>

                                    </div>


                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="copyright">Copyright</label>
                                            <textarea class="form-control" id="copyright" rows="3" placeholder="Write copyright">{{$Settings->copyright}}</textarea>
                                        </div>

                                    </div>



                                    <div class="col-lg-12 col-md-12 col-12">
                                        <hr>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="meta_title">Meta Title</label>
                                            <input type="text" class="form-control" id="meta_title" placeholder="Enter meta title" value="{{$Settings->meta_title}}" />
                                        </div>

                                    </div>


                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="meta_description">Meta Description</label>
                                            <textarea class="form-control" id="meta_description" rows="3" placeholder="Enter meta description" >{{$Settings->meta_description}}</textarea>
                                        </div>

                                    </div>



                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="meta_keywords">Meta Keywords</label>
                                            <textarea class="form-control" id="meta_keywords" rows="3" placeholder="Enter meta keywords">{{$Settings->meta_keywords}}</textarea>
                                        </div>

                                    </div>



                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="author">Author</label>
                                            <input type="text" class="form-control" id="author" placeholder="Enter author"  value="{{$Settings->author}}"/>
                                        </div>

                                    </div>



                                    <div class="col-lg-12 col-md-12 col-12" style="display: none">

                                            <div class="form-group mt-2">
                                                <label for="thumbnail" class="form-label">Website Thumbnail:</label>
                                                <input class="form-control" type="file" id="thumbnail">
                                            </div>

                                    </div>



                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="url">Website</label>
                                            <input type="text" class="form-control" id="url" placeholder="Enter url"  value="{{$Settings->url}}"/>
                                        </div>

                                    </div>

                                    <div class="col-lg-12 col-md-12 col-12">
                                        <hr>
                                    </div>



                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="user_terms_and_conditions">User Terms and Conditions</label>
                                            <textarea class="form-control" id="user_terms_and_conditions" rows="8" placeholder="Enter User Terms and Conditions" >{{$Settings->user_terms_and_conditions}}</textarea>
                                        </div>

                                    </div>


                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="agent_terms_and_conditions">Agent Terms and Conditions</label>
                                            <textarea class="form-control" id="agent_terms_and_conditions" rows="8" placeholder="Enter Agent Terms and Conditions" >{{$Settings->agent_terms_and_conditions}}</textarea>
                                        </div>

                                    </div>




                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="host_terms_and_conditions">Host Terms and Conditions</label>
                                            <textarea class="form-control" id="host_terms_and_conditions" rows="8" placeholder="Enter Host Terms and Conditions" >{{$Settings->host_terms_and_conditions}}</textarea>
                                        </div>

                                    </div>




                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="agency_terms_and_conditions">Agency Terms and Conditions</label>
                                            <textarea class="form-control" id="agency_terms_and_conditions" rows="8" placeholder="Enter Agency Terms and Conditions" >{{$Settings->agency_terms_and_conditions}}</textarea>
                                        </div>

                                    </div>



                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="admin_terms_and_conditions">Admin Terms and Conditions</label>
                                            <textarea class="form-control" id="admin_terms_and_conditions" rows="8" placeholder="Enter Admin Terms and Conditions" >{{$Settings->admin_terms_and_conditions}}</textarea>
                                        </div>

                                    </div>



                                    <div class="col-lg-12 col-md-12 col-12">
                                        <hr>
                                    </div>



                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="facebook_link">Facebook Link</label>
                                            <input type="text" class="form-control" id="facebook_link" placeholder="Enter Facebook URL" value="{{$Settings->facebook_link}}" />
                                        </div>

                                    </div>



                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="twitter_link">Twitter Link</label>
                                            <input type="text" class="form-control" id="twitter_link" placeholder="Enter Twitter URL" value="{{$Settings->twitter_link}}" />
                                        </div>

                                    </div>




                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="linkedin_link">linkedin Link</label>
                                            <input type="text" class="form-control" id="linkedin_link" placeholder="Enter Linkedin URL" value="{{$Settings->linkedin_link}}" />
                                        </div>

                                    </div>




                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="instagram_link">Instagram Link</label>
                                            <input type="text" class="form-control" id="instagram_link" placeholder="Enter Instagram URL" value="{{$Settings->instagram_link}}" />
                                        </div>

                                    </div>



                                    <div class="col-lg-12 col-md-12 col-12">
                                        <hr>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="appstore_link">Appstore Link</label>
                                            <input type="text" class="form-control" id="appstore_link" placeholder="Enter Appstore URL" value="{{$Settings->appstore_link}}" />
                                        </div>

                                    </div>



                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="playstore_link">Playstore Link</label>
                                            <input type="text" class="form-control" id="playstore_link" placeholder="Enter Playstore URL" value="{{$Settings->playstore_link}}" />
                                        </div>

                                    </div>





                                </div>



                            </div>


                            <div class="card-footer">


                                <div class="row">


                                    <div class="col-lg-6 col-md-6 col-6">


                                        <div class="text-center" id="alert"></div>
                                        <div class="text-center" id="loading" style="display: none">
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
            var title=$('#title').val();
            var intro=$('#intro').val();
            var about=$('#about').val();
            var about_page=$('#about_page').val();
            var email_address=$('#email_address').val();
            var phone_number=$('#phone_number').val();
            var copyright=$('#copyright').val();
            var meta_title=$('#meta_title').val();
            var meta_description=$('#meta_description').val();
            var meta_keywords=$('#meta_keywords').val();
            var author=$('#author').val();
            var thumbnail=$('#thumbnail').val();
            var url=$('#url').val();

            var user_terms_and_conditions=$('#user_terms_and_conditions').val();
            var agent_terms_and_conditions=$('#agent_terms_and_conditions').val();
            var host_terms_and_conditions=$('#host_terms_and_conditions').val();
            var agency_terms_and_conditions=$('#agency_terms_and_conditions').val();
            var admin_terms_and_conditions=$('#admin_terms_and_conditions').val();


            var facebook_link=$('#facebook_link').val();
            var twitter_link=$('#twitter_link').val();
            var linkedin_link=$('#linkedin_link').val();
            var instagram_link=$('#instagram_link').val();

            var appstore_link=$('#appstore_link').val();
            var playstore_link=$('#playstore_link').val();



            if (title !== '') {
                inc++;
                $('#title').css("border", "1px solid #ccc");
            } else {
                $('#title').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Title is required');
                return null;
            }

            if (intro !== '') {
                inc++;
                $('#intro').css("border", "1px solid #ccc");
            } else {
                $('#intro').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Intro is required');
                return null;
            }

            if (about !== '') {
                inc++;
                $('#about').css("border", "1px solid #ccc");
            } else {
                $('#about').css("border", "1px solid red");
                $("#alert").css("display", "block").text('About is required');
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







            if(inc===5){

                var config    =  project.Config;
                var dataApiUrl   = config.getApiUrl();
                var dataAppUrl   = config.getAppUrl();
                var dataTokenGet = config.getToken();

                var fdata =new FormData();
                fdata.append('title',title);
                fdata.append('intro',intro);
                fdata.append('about',about);
                fdata.append('about_page',about_page);
                fdata.append('email_address',email_address);
                fdata.append('phone_number',phone_number);
                fdata.append('copyright',copyright);
                fdata.append('meta_title',meta_title);
                fdata.append('meta_description',meta_description);
                fdata.append('meta_keywords',meta_keywords);
                fdata.append('author',author);
                fdata.append('thumbnail',thumbnail);
                fdata.append('url',url);

                fdata.append('user_terms_and_conditions',user_terms_and_conditions);
                fdata.append('agent_terms_and_conditions',agent_terms_and_conditions);
                fdata.append('host_terms_and_conditions',host_terms_and_conditions);
                fdata.append('agency_terms_and_conditions',agency_terms_and_conditions);
                fdata.append('admin_terms_and_conditions',admin_terms_and_conditions);

                fdata.append('facebook_link',facebook_link);
                fdata.append('twitter_link',twitter_link);
                fdata.append('linkedin_link',linkedin_link);
                fdata.append('instagram_link',instagram_link);

                fdata.append('appstore_link',appstore_link);
                fdata.append('playstore_link',playstore_link);



                $.ajax({
                    url: dataApiUrl+'/setting/website',
                    data: fdata,
                    type: 'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    dataType:'json',
                    processData: false,
                    contentType: false,


                    beforeSend: function(){


                        $('#title').attr('disabled', 'disabled');
                        $('#intro').attr('disabled', 'disabled');
                        $('#about').attr('disabled', 'disabled');
                        $('#email_address').attr('disabled', 'disabled');
                        $('#phone_number').attr('disabled', 'disabled');
                        $('#copyright').attr('disabled', 'disabled');
                        $('#meta_title').attr('disabled', 'disabled');
                        $('#meta_description').attr('disabled', 'disabled');
                        $('#meta_keywords').attr('disabled', 'disabled');
                        $('#author').attr('disabled', 'disabled');
                        $('#thumbnail').attr('disabled', 'disabled');

                        $('#submit').attr('disabled', 'disabled');

                        $("#alert").css("display", "none");
                        $(".load-bar").css("display", "block");

                    },


                    success:function(data){


                        $(".load-bar").css("display", "none");

                        $('#title').removeAttr('disabled');
                        $('#intro').removeAttr('disabled');
                        $('#about').removeAttr('disabled');
                        $('#email_address').removeAttr('disabled');
                        $('#phone_number').removeAttr('disabled');
                        $('#copyright').removeAttr('disabled');
                        $('#meta_title').removeAttr('disabled');
                        $('#meta_description').removeAttr('disabled');
                        $('#meta_keywords').removeAttr('disabled');
                        $('#author').removeAttr('disabled');
                        $('#thumbnail').removeAttr('disabled');

                        $('#submit').removeAttr('disabled');


                        if(data['error']!=true){

                            window.location.href= dataAppUrl+'/admin/setting/website';

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

                        $('#title').removeAttr('disabled');
                        $('#intro').removeAttr('disabled');
                        $('#about').removeAttr('disabled');
                        $('#email_address').removeAttr('disabled');
                        $('#phone_number').removeAttr('disabled');
                        $('#copyright').removeAttr('disabled');
                        $('#meta_title').removeAttr('disabled');
                        $('#meta_description').removeAttr('disabled');
                        $('#meta_keywords').removeAttr('disabled');
                        $('#author').removeAttr('disabled');
                        $('#thumbnail').removeAttr('disabled');

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
