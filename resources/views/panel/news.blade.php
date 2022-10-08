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
                                <h4 class="card-title">News</h4>

                                <button type="button" class="btn btn-primary waves-effect waves-float waves-light"  data-toggle="modal" data-target="#exampleModalCenter">Add News</button>

                            </div>
                            <div class="table-responsive">
                                <table id="example" class="table">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Thumbnail</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    @foreach($News as $NewsTemp)
                                        <tr>
                                            <td>{{$NewsTemp->created_at}}</td>
                                            <td>
                                                @if($NewsTemp->thumbnail!=null)
                                                    <img src="{{url('/uploads/news').'/'.$NewsTemp->thumbnail}}" class="rounded"  style="width: 70px; height: 70px; object-fit: cover;">
                                                @else
                                                    <img src="{{url('/general/img/default.png')}}" class="rounded" style="height: 70px; width: 70px; object-fit: cover;">
                                                @endif
                                            </td>
                                            <td>{{$NewsTemp->title}}</td>
                                            <td>{{$NewsTemp->description}}</td>
                                            <td>
{{--                                                <a href="javascript:void(0);" id="view_{{$NewsTemp->id}}" class="view"><i data-feather="eye"></i></a>--}}
{{--                                                <a href="javascript:void(0);" id="edit_{{$NewsTemp->id}}" class="edit"><i data-feather="edit-2"></i></a>--}}
                                                <a href="javascript:void(0);" id="delete_{{$NewsTemp->id}}" class="delete"><i data-feather="trash-2"></i></a>

                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>

                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Thumbnail</th>
                                        <th>Title</th>
                                        <th>Description</th>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">List News</h5>
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


                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="form-group">
                                <label for="thumbnail">Thumbnail</label>
                                <input type="file" class="form-control" id="thumbnail"/>
                                <input class="form-control" type="text" id="thumbnail_details" value="" style="display:none">
                            </div>

                        </div>


                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="form-group">

                                <label for="level_2">Category</label>

                                <select class="select2 form-control" id="level_2">

                                    <option value="">Select Category</option>

                                    @foreach($ChildCategories as $ChildCategoriesTemp)
                                        <option value="{{$ChildCategoriesTemp->id}}">{{$ChildCategoriesTemp->title}}</option>
                                    @endforeach


                                </select>
                            </div>
                        </div>



                        <div class="col-lg-12 col-md-12 col-12 text-center">

                            <div id="alert">

                            </div>


                            <div id="loading">

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

        function validateImageExtension(data) {
            var re = /\.(jpe?g|png|gif)$/;
            return re.test(data);
        }


        $('#submit').on('click',function (e) {
            e.preventDefault();



            var inc=0;
            var title=$('#title').val();
            var description=$('#description').val();
            var thumbnail=$('#thumbnail_details').val();
            var level_2=$('#level_2').val();



            if (title !== '') {

                inc++;
                $('#title').css("border", "1px solid #ccc");

            } else {
                $('#title').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Title is required');
                return null;
            }



            if (description !== '') {

                inc++;
                $('#description').css("border", "1px solid #ccc");

            } else {
                $('#description').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Description is required');
                return null;
            }






            if(inc===2){

                var config    =  project.Config;
                var dataApiUrl   = config.getApiUrl();
                var dataAppUrl   = config.getAppUrl();
                var dataTokenGet = config.getToken();


                var fdata =new FormData();
                fdata.append('title',title);
                fdata.append('description',description);
                fdata.append('thumbnail',thumbnail);
                fdata.append('level_2',level_2);

                $.ajax({
                    url: dataApiUrl+'/news/create',
                    data: fdata,
                    type: 'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    dataType:'json',
                    processData: false,
                    contentType: false,


                    beforeSend: function(){


                        $('#title').attr('disabled', 'disabled');
                        $('#description').attr('disabled', 'disabled');
                        $('#thumbnail').attr('disabled', 'disabled');
                        $('#level_2').attr('disabled', 'disabled');

                        $('#submit').attr('disabled', 'disabled');

                        $("#alert").css("display", "none");
                        $(".load-bar").css("display", "block");

                    },


                    success:function(data){


                        $(".load-bar").css("display", "none");


                        $('#title').removeAttr('disabled');
                        $('#description').removeAttr('disabled');
                        $('#thumbnail').removeAttr('disabled');
                        $('#level_2').removeAttr('disabled');

                        $('#submit').removeAttr('disabled');


                        if(data['error']!=true){

                            window.location.href= dataAppUrl+'/admin/news/list';

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
                        $('#description').removeAttr('disabled');
                        $('#thumbnail').removeAttr('disabled');
                        $('#level_2').removeAttr('disabled');

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
                    url: dataApiUrl+'/news/delete',
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

                            window.location.href= dataAppUrl+'/admin/news/list';

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





        jQuery("#thumbnail").change(function () {


            var inc = 0;

            var extension = $(this).val().toLowerCase();
            var file = $('#thumbnail').prop('files').item(0);
            $('#thumbnail_details').val(jQuery(this).val());

            if (file === null) {
                $('#thumbnail').css("border", "1px solid red");
            } else {

                if (validateImageExtension(extension)) {

                    if(file.size <= 1000000){
                        $('#thumbnail').css("border", "1px solid #ccc");



                        var config    =  project.Config;
                        var dataApiUrl   = config.getApiUrl();
                        var dataAppUrl   = config.getAppUrl();
                        var dataTokenGet =  config.getToken();

                        if(dataTokenGet.access_token!==''){


                            var data =new FormData();
                            data.append('file',file);

                            $.ajax({
                                url: dataApiUrl+'/news/upload/thumbnail',
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
                                        $("#thumbnail_details").val(data.data);
                                    } else{

                                        $('#thumbnail').css("border", "1px solid red").val("");
                                        $("#thumbnail_details").val(data.data);

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

                        $('#thumbnail').css("border", "1px solid red").val("");
                        $("#thumbnail_details").val("");
                        alert('Allowed file size exceeded. (Max. 1 MB)');

                    }

                } else {

                    $('#thumbnail').css("border", "1px solid red").val("");
                    $("#thumbnail_details").val("");

                    alert('Only JPG, PNG, GIF File allowed.');

                }

            }


        });



    </script>




</body>
</html>
