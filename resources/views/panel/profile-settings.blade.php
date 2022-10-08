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
                                <h4 class="card-title">Profile Settings</h4>
                            </div>


                            <div class="card-body">


                                <div class="row">



                                    <div class="col-lg-12 col-md-12 col-12 mb-3">


                                        <div style="position: relative; height: 150px; width: 150px; margin: 0 auto">

                                            @if($User->image!=null)
                                                <img src="{{url('/uploads/'.$User->image)}}" id="profile_avatar" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%">
                                            @else
                                                <img src="{{url('general/img/default-user.jpg')}}" id="profile_avatar" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%">
                                            @endif


                                            <div style="position:absolute; bottom: 5px; right: 10px;">

                                                <div class="upload-btn-wrapper" style="position: relative; overflow: hidden;">
                                                    <button type="button" style="background-color:#229afa; padding: 5px; border-radius: 50px; height: 35px; width: 35px; color:white; border:0px;"><i data-feather="camera"></i></button>
                                                    <input type="file" id="profile_picture" onchange="document.getElementById('profile_avatar').src = window.URL.createObjectURL(this.files[0]); document.getElementById('profile_avatar_top').src = window.URL.createObjectURL(this.files[0]);" accept=".png,.jpg,.jpeg">
                                                    <input type="text" id="profile_picture_details" hidden>
                                                </div>

                                            </div>



                                        </div>



                                    </div>



                                    <div class="col-lg-6 col-md-6 col-12">

                                        <div class="form-group">
                                            <label for="first_name">First name</label>
                                            <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" value="{{$User->first_name}}" />
                                        </div>

                                    </div>



                                    <div class="col-lg-6 col-md-6 col-12">

                                        <div class="form-group">
                                            <label for="last_name">Last name</label>
                                            <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" value="{{$User->last_name}}" />
                                        </div>

                                    </div>



                                    <div class="col-lg-6 col-md-6 col-12">

                                        <div class="form-group">

                                            <label for="gender">Gender</label>

                                            <select class="select2 form-control" id="gender">

                                                <option value="male">Male</option>
                                                <option value="female">Female</option>

                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-lg-6 col-md-6 col-12">

                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Enter Username"  value="{{$User->username}}" />
                                        </div>

                                    </div>



                                    <div class="col-lg-6 col-md-6 col-12">

                                        <div class="form-group">
                                            <label for="email_address">Email</label>
                                            <input type="text" class="form-control" id="email_address" placeholder="Enter Email"  value="{{$User->email}}" />
                                        </div>

                                    </div>



                                    <div class="col-lg-6 col-md-6 col-12">

                                        <div class="form-group">
                                            <label for="phone_number">Contact Number</label>
                                            <input type="text" class="form-control" id="phone_number" placeholder="Enter Number" value="{{$User->number}}" />
                                        </div>

                                    </div>






                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="about">About</label>
                                            <textarea class="form-control" id="about" rows="3" placeholder="Write about yourself">{{$User->about}}</textarea>
                                        </div>

                                    </div>



                                    <div class="col-lg-12 col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="prove_of_id">Prove of ID</label>
                                            <input type="text" class="form-control" id="prove_of_id" placeholder="Enter prove of ID" value="{{$User->number}}" />
                                        </div>

                                    </div>


{{--                                    <div class="col-lg-6 col-md-6 col-12">--}}



{{--                                        @if($User->id_front!=null)--}}

{{--                                            <img src="{{url('/uploads/'.$User->image)}}" id="front_gov_id_picture" style=" width: 100%;">--}}

{{--                                        @else--}}

{{--                                            <img src="{{url('/general/img/gov_id.jpg')}}" id="front_gov_id_picture" style=" width: 100%;">--}}

{{--                                        @endif--}}



{{--                                    </div>--}}




{{--                                    <div class="col-lg-6 col-md-6 col-12">--}}



{{--                                        --}}{{--                                        @if($User->id_front!=null)--}}

{{--                                        --}}{{--                                            <img src="{{url('/uploads/'.$User->image)}}" id="front_gov_id_picture" style=" width: 100%;">--}}

{{--                                        --}}{{--                                        @else--}}

{{--                                        <img src="{{url('/general/img/gov_id.jpg')}}" id="front_gov_id_picture" style=" width: 100%;">--}}

{{--                                        --}}{{--                                        @endif--}}



{{--                                    </div>--}}



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




        function validateImageExtension(data) {
            var re = /\.(jpe?g|png|gif)$/;
            return re.test(data);
        }


        $('#submit').on('click',function (e) {
            e.preventDefault();



            var inc=0;
            var first_name=$('#first_name').val();
            var last_name=$('#last_name').val();
            var gender=$('#gender').val();

            var username=$('#username').val();
            var email_address=$('#email_address').val();
            var phone_number=$('#phone_number').val();
            var about=$('#about').val();



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




            if(inc===5){

                var config    =  project.Config;
                var dataApiUrl   = config.getApiUrl();
                var dataAppUrl   = config.getAppUrl();
                var dataTokenGet = config.getToken();


                var fdata =new FormData();
                fdata.append('first_name',first_name);
                fdata.append('last_name',last_name);
                fdata.append('gender',gender);
                fdata.append('username',username);
                fdata.append('email_address',email_address);
                fdata.append('phone_number',phone_number);
                fdata.append('about',about);

                $.ajax({
                    url: dataApiUrl+'/user/update',
                    data: fdata,
                    type: 'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    dataType:'json',
                    processData: false,
                    contentType: false,


                    beforeSend: function(){



                        $('#first_name').attr('disabled', 'disabled');
                        $('#last_name').attr('disabled', 'disabled');
                        $('#gender').attr('disabled', 'disabled');
                        $('#username').attr('disabled', 'disabled');
                        $('#email_address').attr('disabled', 'disabled');
                        $('#phone_number').attr('disabled', 'disabled');
                        $('#about').attr('disabled', 'disabled');

                        $('#submit').attr('disabled', 'disabled');

                        $("#alert").css("display", "none");
                        $(".load-bar").css("display", "block");

                    },


                    success:function(data){


                        $(".load-bar").css("display", "none");



                        $('#first_name').removeAttr('disabled');
                        $('#last_name').removeAttr('disabled');
                        $('#gender').removeAttr('disabled');
                        $('#username').removeAttr('disabled');
                        $('#email_address').removeAttr('disabled');
                        $('#phone_number').removeAttr('disabled');
                        $('#about').removeAttr('disabled');

                        $('#submit').removeAttr('disabled');


                        if(data['error']!=true){

                            window.location.href= dataAppUrl+'/admin/setting/profile';

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

                        $('#first_name').removeAttr('disabled');
                        $('#last_name').removeAttr('disabled');
                        $('#gender').removeAttr('disabled');
                        $('#username').removeAttr('disabled');
                        $('#email_address').removeAttr('disabled');
                        $('#phone_number').removeAttr('disabled');
                        $('#about').removeAttr('disabled');

                        $('#submit').removeAttr('disabled');
                    }


                });

            }else {
                $("#alert").css("display", "block").text('Valid field required.');
            }


        });


        jQuery("#profile_picture").change(function () {


            var inc = 0;

            var extension = $(this).val().toLowerCase();
            var file = $(this).prop('files').item(0);

            if (file === null) {
                alert('Please select file');
            } else {

                if (validateImageExtension(extension)) {

                    if(file.size <= 1000000){



                        var config    =  project.Config;
                        var dataApiUrl   = config.getApiUrl();
                        var dataAppUrl   = config.getAppUrl();
                        var dataTokenGet =  config.getToken();

                        if(dataTokenGet.access_token!==''){


                            var data =new FormData();
                            data.append('file',file);

                            $.ajax({
                                url: dataApiUrl+'/user/profile/picture/upload',
                                type:'POST',
                                timeout: 0, //Set your timeout value in milliseconds or 0 for unlimited
                                data: data,
                                dataType:'json',
                                processData: false,
                                contentType: false,
                                //headers: {"Authorization": "Bearer " + dataTokenGet.access_token},

                                beforeSend: function(){

                                },


                                xhr: function () {
                                    var xhr = new window.XMLHttpRequest();
                                    xhr.upload.addEventListener("progress", function (evt) {
                                        if (evt.lengthComputable) {
                                            var percentComplete = evt.loaded / evt.total;
                                            percentComplete = parseInt(percentComplete * 100);
                                            $('#progress-alert-thumbnail').text(percentComplete + '%');
                                        }
                                    }, false);
                                    return xhr;
                                },

                                success: function(data) {



                                    if(data.code == 200){
                                        // $("#cnic_front_picture_details").val(data.data);

                                    } else{

                                        // $('#cnic_front_picture').css("border", "1px solid red").val("");
                                        // $("#cnic_front_picture_details").val(data.data);

                                    }

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
                                            alert('Check your internet connection then try again later');
                                        }
                                    }

                                }

                            });
                        }else {
                            location.reload();
                        }


                    }else {

                        alert('Allowed file size exceeded. (Max. 1 MB)');

                    }

                } else {

                    alert('Only JPG, PNG, GIF File allowed.');

                }

            }


        });





    </script>




</body>
</html>
