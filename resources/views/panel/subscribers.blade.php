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
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Subscribers</h4>

                                <button type="button" class="btn btn-primary waves-effect waves-float waves-light"  data-toggle="modal" data-target="#exampleModalCenter">Add New Subscriber</button>

                            </div>
                            <div class="table-responsive">
                                <table id="example" class="table">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Number</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    @foreach($Subscribers as $SubscribersTemp)
                                        <tr>
                                            <td>{{$SubscribersTemp->created_at}}</td>
                                            <td>{{$SubscribersTemp->first_name}} {{$SubscribersTemp->last_name}}</td>
                                            <td>{{$SubscribersTemp->email}}</td>
                                            <td>{{$SubscribersTemp->code}}{{$SubscribersTemp->number}}</td>
                                            <td>{{$SubscribersTemp->type}}</td>
                                            <td>
                                                {{--                                            <a href="javascript:void(0);" id="view_{{$SubscribersTemp->id}}" class="view"><i data-feather="eye"></i></a>--}}
                                                {{--                                            <a href="javascript:void(0);" id="edit_{{$SubscribersTemp->id}}" class="edit"><i data-feather="edit-2"></i></a>--}}
                                                <a href="javascript:void(0);" id="delete_{{$SubscribersTemp->id}}" class="delete"><i data-feather="trash-2"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>

                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Number</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                </table>
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


    <!-- Vehicle Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Subscriber Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">



                    <div class="row">


                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" placeholder="Enter first Name" />
                            </div>

                        </div>



                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" placeholder="Enter last Name" />
                            </div>

                        </div>





                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter email" />
                            </div>

                        </div>


                        <div class="col-lg-4 col-md-4 col-4">

                            <div class="form-group">

                                <label for="country_code">Code</label>

                                <select class="select2 form-control" id="country_code">


                                    @foreach($CountryCodes as $CountryCodesTemp)
                                        <option value="{{$CountryCodesTemp->id}}">{{$CountryCodesTemp->code}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>


                        <div class="col-lg-8 col-md-8 col-8">

                            <div class="form-group">
                                <label for="number">Number</label>
                                <input type="text" class="form-control" id="number" placeholder="Enter number" />
                            </div>

                        </div>



                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="form-group">

                                <label for="type">Type</label>

                                <select class="select2 form-control" id="type">

                                    <option value="general">General</option>

                                </select>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12 col-12 text-center">

                            <div class="text-center" id="alert"></div>
                            <div class="text-center" id="loading" style="display: none">
                                <img src="{{url('/front/img/loading.gif')}}" alt="">
                            </div>

                        </div>

                    </div>




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>



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
            var first_name=$('#first_name').val();
            var last_name=$('#last_name').val();
            var email=$('#email').val();
            var country_code=$('#country_code').val();
            var number=$('#number').val();
            var type=$('#type').val();



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

            if (email === '') {
                $('#email').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Email address is required');
                return null;
            } else {
                if (validateEmail(email)) {
                    inc++;
                    $('#email').css("border", "1px solid #ccc");
                } else {
                    $('#email').css("border", "1px solid red");
                    $("#alert").css("display", "block").text('Email address is invalid');
                    return null;
                }
            }

            if (country_code === '') {

                inc++;
                $('#country_code').css("border", "1px solid #ccc");
                $("#alert").css("display", "block").text('Country code is required');
                return null;
            } else {
                if (validatenum(country_code)) {
                    inc++;
                    $('#country_code').css("border", "1px solid #ccc");
                } else {
                    $('#country_code').css("border", "1px solid red");
                    $("#alert").css("display", "block").text('Country code is invalid');
                    return null;
                }
            }

            if (number === '') {

                inc++;
                $('#number').css("border", "1px solid #ccc");
                //$("#alert").css("display", "block").text('Contact number is required');
                //return null;
            } else {
                if (validatenum(number)) {
                    inc++;
                    $('#number').css("border", "1px solid #ccc");
                } else {
                    $('#number').css("border", "1px solid red");
                    $("#alert").css("display", "block").text('Contact number is invalid');
                    return null;
                }
            }

            if (type !== '') {

                inc++;
                $('#type').css("border", "1px solid #ccc");

            } else {

                $('#type').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Type is required');
                return null;

            }



            if(inc===6){

                var config    =  project.Config;
                var dataApiUrl   = config.getApiUrl();
                var dataAppUrl   = config.getAppUrl();
                var dataTokenGet = config.getToken();

                var fdata =new FormData();
                fdata.append('first_name',first_name);
                fdata.append('last_name',last_name);
                fdata.append('email',email);
                fdata.append('country_code',country_code);
                fdata.append('number',number);
                fdata.append('type',type);

                $.ajax({

                    url: dataApiUrl+'/subscriber/create',
                    data: fdata,
                    type: 'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    dataType:'json',
                    processData: false,
                    contentType: false,


                    beforeSend: function(){

                        $('#first_name').attr('disabled', 'disabled');
                        $('#last_name').attr('disabled', 'disabled');
                        $('#email').attr('disabled', 'disabled');
                        $('#country_code').attr('disabled', 'disabled');
                        $('#number').attr('disabled', 'disabled');
                        $('#type').attr('disabled', 'disabled');

                        $('#submit').attr('disabled', 'disabled');

                        $("#alert").css("display", "none");
                        $(".load-bar").css("display", "block");

                    },


                    success:function(data){


                        $(".load-bar").css("display", "none");


                        $('#first_name').removeAttr('disabled');
                        $('#last_name').removeAttr('disabled');
                        $('#email').removeAttr('disabled');
                        $('#country_code').removeAttr('disabled');
                        $('#number').removeAttr('disabled');
                        $('#type').removeAttr('disabled');

                        $('#submit').removeAttr('disabled');


                        if(data['error']!=true){

                            window.location.href= dataAppUrl+'/admin/subscribers';

                        }else{
                            $("#alert").css("display", "block").text(data['message']);
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
                                alert('Check your internet connection then try again later.');
                            }
                        }


                        $(".load-bar").css("display", "none");

                        $('#first_name').removeAttr('disabled');
                        $('#last_name').removeAttr('disabled');
                        $('#email').removeAttr('disabled');
                        $('#country_code').removeAttr('disabled');
                        $('#number').removeAttr('disabled');
                        $('#type').removeAttr('disabled');

                        $('#submit').removeAttr('disabled');
                    }


                });

            }else {
                $("#alert").css("display", "block").text('Valid email required.');
            }


        });




        $('.delete').on('click',function (e) {
            e.preventDefault();



            var inc=0;

            var string = jQuery(this).attr("id");
            var array = string.split('_');
            var id=array[1];


            if (id !== '') {

                if (validatenum(id)) {
                    inc++;
                } else {
                    alert('ID is invalid');
                    return null;
                }

            } else {
                alert('ID is required');
                return null;
            }





            if(inc===1){

                var config    =  project.Config;
                var dataApiUrl   = config.getApiUrl();
                var dataAppUrl   = config.getAppUrl();
                var dataTokenGet = config.getToken();

                var fdata =new FormData();
                fdata.append('id',id);

                $.ajax({
                    url: dataApiUrl+'/subscriber/delete',
                    data: fdata,
                    type: 'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    dataType:'json',
                    processData: false,
                    contentType: false,


                    beforeSend: function(){


                        $('.delete').attr('disabled', 'disabled');

                        $("#alert").css("display", "none");
                        $("#loading").css("display", "block");

                    },


                    success:function(data){


                        $("#loading").css("display", "none");


                        $('.delete').removeAttr('disabled');


                        if(data['error']!=true){

                            window.location.href= dataAppUrl+'/admin/subscribers/list';

                        }else{
                            alert(data['message']);
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
                                alert('Check your internet connection then try again later.');
                            }
                        }


                        $("#loading").css("display", "none");


                        $('.delete').removeAttr('disabled');
                    }


                });

            }else {
                $("#alert").css("display", "block").text('Valid email required.');
            }


        });

    </script>




</body>
</html>
