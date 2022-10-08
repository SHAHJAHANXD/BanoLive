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
                                <h4 class="card-title">FAQs</h4>

                                <button type="button" class="btn btn-primary waves-effect waves-float waves-light"  data-toggle="modal" data-target="#exampleModalCenter">Add New FAQ</button>

                            </div>
                            <div class="table-responsive">
                                <table id="example" class="table">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    @foreach($FAQs as $FAQsTemp)
                                        <tr>
                                            <td>{{$FAQsTemp->created_at}}</td>
                                            <td>{{$FAQsTemp->question}}</td>
                                            <td>{{$FAQsTemp->answer}}</td>
                                            <td>{{$FAQsTemp->type}}</td>
                                            <td>
                                                {{--                                            <a href="javascript:void(0);" id="view_{{$FAQsTemp->id}}" class="view"><i data-feather="eye"></i></a>--}}
                                                {{--                                            <a href="javascript:void(0);" id="edit_{{$FAQsTemp->id}}" class="edit"><i data-feather="edit-2"></i></a>--}}
                                                <a href="javascript:void(0);" id="delete_{{$FAQsTemp->id}}" class="delete"><i data-feather="trash-2"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>

                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Question</th>
                                        <th>Answer</th>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Question Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">



                    <div class="row">



                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="form-group">
                                <label for="question">Question</label>
                                <input type="text" class="form-control" id="question" placeholder="Enter title" />
                            </div>

                        </div>


                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="form-group">
                                <label for="answer">Answer</label>
                                <textarea class="form-control" id="answer" rows="3" placeholder="Write your answer here"></textarea>
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

                            <div style="color: red; font-size: 12px; padding-top: 10px; display: none; text-align: right;" id="alert"></div>
                            <div style="color: red; font-size: 18px; padding-top: 8px; display: none; text-align: center;" id="loading">
                                <img src="{{url('/front/img/loading.gif')}}">
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
            var question=$('#question').val();
            var answer=$('#answer').val();
            var type=$('#type').val();




            if (question === '') {

                $('#question').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Question is required');
                return null;
            }



            if (answer === '') {

                $('#answer').css("border", "1px solid red");
                $("#answer").css("display", "block").text('Answer is required');
                return null;
            }


            if (type === '') {

                $('#type').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Type is required');
                return null;
            }


            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();

            var fdata =new FormData();
            fdata.append('question',question);
            fdata.append('answer',answer);
            fdata.append('type',type);

            $.ajax({
                url: dataApiUrl+'/faq/create',
                data: fdata,
                type: 'POST',
                timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                dataType:'json',
                processData: false,
                contentType: false,


                beforeSend: function(){

                    $('#question').attr('disabled', 'disabled');
                    $('#answer').attr('disabled', 'disabled');
                    $('#type').attr('disabled', 'disabled');

                    $('#submit').attr('disabled', 'disabled');

                    $("#alert").css("display", "none");
                    $(".load-bar").css("display", "block");

                },


                success:function(data){


                    $(".load-bar").css("display", "none");


                    $('#question').removeAttr('disabled');
                    $('#answer').removeAttr('disabled');
                    $('#type').removeAttr('disabled');

                    $('#submit').removeAttr('disabled');


                    if(data['error']!=true){

                        window.location.href= dataAppUrl+'/admin/faqs/list';

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


                    $('#question').removeAttr('disabled');
                    $('#answer').removeAttr('disabled');
                    $('#type').removeAttr('disabled');

                    $('#submit').removeAttr('disabled');

                }


            });


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
                    url: dataApiUrl+'/faq/delete',
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

                            window.location.href= dataAppUrl+'/admin/faqs/list';

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
