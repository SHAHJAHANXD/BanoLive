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





                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Stories</h4>

{{--                                <button type="button" class="btn btn-primary waves-effect waves-float waves-light"  data-toggle="modal" data-target="#exampleModalCenter">Add Newsfeed</button>--}}

                            </div>
                            <div class="table-responsive">
                                <table id="example" class="table">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Thumbnail</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>



                                    @foreach($Stories as $StoriesTemp)
                                        <tr>
                                            <td>{{$StoriesTemp->created_at}}</td>

                                            <td>
                                                @if($StoriesTemp->thumbnail!=null)
                                                    <img src="{{url('/uploads/story').'/'.$StoriesTemp->thumbnail}}" class="rounded"  style="width: 70px; height: 70px; object-fit: cover;">
                                                @else
                                                    <img src="{{url('/general/img/default.png')}}" class="rounded" style="height: 70px; width: 70px; object-fit: cover;">
                                                @endif
                                            </td>

                                            <td>{{$StoriesTemp->description}}</td>
                                            <td>{{$StoriesTemp->user_full_name}}</td>
                                            <td>
                                                {{--                                                    <a href="javascript:void(0);" id="view_{{$UsersTemp->id}}" class="view"><i data-feather="eye"></i></a>--}}
                                                {{--                                                    <a href="javascript:void(0);" id="edit_{{$UsersTemp->id}}" class="edit"><i data-feather="edit-2"></i></a>--}}

                                                <a href="javascript:void(0);" id="delete_{{$StoriesTemp->id}}" class="delete"><i data-feather="trash-2"></i></a>

                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>

                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Thumbnail</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                        <th>Status</th>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">User Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">



                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-12">
                            <img src="" alt="" class="img-fluid order-img">
                        </div>


                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="form-group">
                                <label for="first_name">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter Title" />
                            </div>

                        </div>









                        <div class="col-lg-12 col-md-12 col-12 text-center">

                            <div id="alert">

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
                    url: dataApiUrl+'/story/delete',
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

                            window.location.href= dataAppUrl+'/admin/stories/list';

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
