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
                            <h4 class="card-title">Cities</h4>

                            <button type="button" class="btn btn-primary waves-effect waves-float waves-light"  data-toggle="modal" data-target="#exampleModalCenter">Add New City</button>

                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Thumbnail</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($Cities as $CitiesTemp)
                                    <tr>
                                        <td>{{$CitiesTemp->id}}</td>
                                        <td>{{$CitiesTemp->created_at}}</td>

                                        @if($CitiesTemp->image!=null)
                                            <td><img src="{{url($CitiesTemp->image)}}" class="image" height="40px" width="40px"></td>
                                        @else
                                            <td><img src="{{url('general/img/default.png')}}" class="image" height="40px" width="40px"></td>
                                        @endif

                                        <td>{{$CitiesTemp->name}}, {{$CitiesTemp->province_title}}</td>
                                        <td>{{$CitiesTemp->about}}</td>
                                        <td>{{$CitiesTemp->status}}</td>
                                        <td>
                                            {{--                                            <a href="javascript:void(0);" id="view_{{$CitiesTemp->id}}" class="view"><i data-feather="eye"></i></a>--}}
                                            {{--                                            <a href="javascript:void(0);" id="edit_{{$CitiesTemp->id}}" class="edit"><i data-feather="edit-2"></i></a>--}}
                                            <a href="javascript:void(0);" id="delete_{{$CitiesTemp->id}}" class="delete"><i data-feather="trash-2"></i></a>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>

                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Thumbnail</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
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
                <h5 class="modal-title" id="exampleModalLongTitle">City Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">



                <div class="row">


                    <div class="col-lg-12 col-md-12 col-12">

                        <div class="form-group">

                            <label for="province_id">Province</label>

                            <select class="select2 form-control" id="province_id">


                                @foreach($Provinces as $ProvincesTemp)
                                    <option value="{{$ProvincesTemp->id}}">{{$ProvincesTemp->title}}</option>
                                @endforeach


                            </select>
                        </div>

                    </div>


                    <div class="col-lg-12 col-md-12 col-12">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter title" />
                        </div>

                    </div>



                    <div class="col-lg-12 col-md-12 col-12">


                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" rows="3" placeholder="Enter description"></textarea>
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
        var province_id=$('#province_id').val();
        var title=$('#title').val();
        var description=$('#description').val();


        if (province_id !== '') {

            if (validatenum(province_id)) {
                inc++;
                $('#province_id').css("border", "1px solid #ccc");
            } else {
                $('#province_id').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Province ID is invalid');
                return null;
            }

        } else {
            $('#country_id').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Province is required');
            return null;
        }



        if (title !== '') {

            if (validatealpha(title)) {
                inc++;
                $('#title').css("border", "1px solid #ccc");
            } else {
                $('#title').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Title is invalid');
                return null;
            }

        } else {
            $('#title').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Title is required');
            return null;
        }





        if(inc===2){

            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();

            var fdata =new FormData();
            fdata.append('province_id',province_id);
            fdata.append('title',title);
            fdata.append('description',description);

            $.ajax({
                url: dataApiUrl+'/city/create',
                data: fdata,
                type: 'POST',
                timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                dataType:'json',
                processData: false,
                contentType: false,


                beforeSend: function(){

                    $('#province_id').attr('disabled', 'disabled');
                    $('#title').attr('disabled', 'disabled');
                    $('#description').attr('disabled', 'disabled');

                    $('#submit').attr('disabled', 'disabled');

                    $("#alert").css("display", "none");
                    $("#loading").css("display", "block");

                },


                success:function(data){


                    $("#loading").css("display", "none");


                    $('#province_id').removeAttr('disabled');
                    $('#title').removeAttr('disabled');
                    $('#description').removeAttr('disabled');

                    $('#submit').removeAttr('disabled');


                    if(data['error']!=true){

                        window.location.href= dataAppUrl+'/admin/cities';

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


                    $("#loading").css("display", "none");

                    $('#province_id').removeAttr('disabled');
                    $('#title').removeAttr('disabled');
                    $('#description').removeAttr('disabled');

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
                url: dataApiUrl+'/city/delete',
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

                        window.location.href= dataAppUrl+'/admin/cities';

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
