<!DOCTYPE html>
<html lang="en" data-textdirection="ltr">
<head>

    @include('.front.general.meta-title')
    @include('.front.general.favicon')
    @include('.front.general.external-css')
    @include('.front.general.style')



    <style>


        .btn-going {
            background-color: #8e5dec;
            min-width: 50px;
            color: white;
            font-size: 11px;
            padding: 0px;
        }

        .btn-not-going{

            background-color: #c7ecde;
            min-width: 50px;
            color: #131313;
            font-size: 11px;
            padding: 0px;
        }

        .btn-see-more{
            background-color: #c7ecde;
            min-width: 50px;
            color: #131313;
            font-size: 11px;
            padding: 5px;
            width: 100%;
        }



        .btn-followers {
            background-color: #8e5dec;
            min-width: 100px;
            color: white;
            font-size: 14px;
            padding: 4px;
            border-radius: 50px;
        }




        .btn-unfollow {
            background-color: #ec2d1b;
            min-width: 100px;
            color: white;
            font-size: 14px;
            padding: 4px;

            border-radius: 50px;
        }

    </style>


</head>

<body class="bg-light">



    @include('.social.general.preloader')

    @include('.social.general.header')




    <section>

        <div class="container">
            <div class="row">




                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2 mb-4">

                    <div class="row">







                        @if(count($Users)!=0)

                            @foreach($Users as $UsersTemp)
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3"  id="user_item_{{$UsersTemp->id}}">

                                    <div class="rounded-15 bg-white p-3 mt-3">


                                        <div class="d-flex flex-column flex-row mt-2">
                                            <div class="p-0 text-center">

                                                <a href="{{url('/profile/'.$UsersTemp->id)}}" style="color: black; text-decoration: none">

                                                @if($UsersTemp->image!=null)
                                                    <img src="{{url('/uploads/'.$UsersTemp->image)}}" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover">
                                                @else
                                                    <img src="{{url('/general/img/default-user.jpg')}}" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover">
                                                @endif
                                                </a>

                                            </div>
                                            <div class="p-0 text-center mt-3">
                                                <a href="{{url('/profile/'.$UsersTemp->id)}}" style="color: black; text-decoration: none">

                                                <div style="font-size: 16px; font-weight: bold">{{Str::limit($UsersTemp->full_name, 30)}}</div>

                                                </a>
                                                <div style="margin-left: 10px; font-size: 12px;">
                                                    Level 1
                                                </div>
                                            </div>


                                            <div class="p-0 text-center mt-3 buttons">

                                                @if($UsersTemp->is_follow==true)
                                                    <button type="button" class="btn btn-unfollow unfollow"  id="unfollow_{{$UsersTemp->id}}" style="margin: 0 auto; ">Unfollow</button>
                                                @else
                                                    <button type="button" class="btn btn-followers follow" id="follow_{{$UsersTemp->id}}" style="margin: 0 auto;">Follow</button>
                                                @endif

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            @endforeach

                        @else

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">


                                <div style="background-color: #c6d4d5; border-radius: 20px;" class="p-5 mt-3 text-center">

                                    <img src="{{url('/general/img/audience.png')}}" style="max-width:150px">

                                    <div style="font-weight: bolder; color: #239bfa; font-size: 18px ">No results found</div>
                                    <div style="color: #239bfa">We couldn't find what are looking for</div>
                                </div>

                            </div>

                        @endif








                    </div>


                </div>


            </div>
        </div>

    </section>


    @include('.social.general.script')



    <script>

        // --------------------------------------------------Follow-------------------------------------------------------------

        $(document).on( 'click', '.follow', function (e) {
            e.preventDefault();






            var string = jQuery(this).attr("id");
            var array = string.split('_');
            var id=array[1];






            if(id!==null){

                var config    =  project.Config;
                var dataApiUrl   = config.getApiUrl();
                var dataAppUrl   = config.getAppUrl();
                var dataTokenGet = config.getToken();


                // if(dataTokenGet.access_token!==''){

                var fdata =new FormData();
                fdata.append('id',id);

                $.ajax({
                    url: dataApiUrl+'/social/follow',
                    data: fdata,
                    type: 'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    dataType:'json',
                    processData: false,
                    contentType: false,
                    // headers: {"Authorization": "Bearer " + dataTokenGet.access_token},

                    beforeSend: function(){

                    },
                    success:function(data){


                        if(data[0].error==='true'){
                            alert(data[0].message);
                        }else{
                            $('#user_item_'+id+' .buttons').html('').append(data[0].html);
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

                    }


                });

            }else {
                alert('Something went wrong.');
            }

        });

        // -------------------------------------------------/Follow-------------------------------------------------------------


        // -------------------------------------------------Unfollow------------------------------------------------------------

        $(document).on( 'click', '.unfollow', function (e) {
            e.preventDefault();

            var string = jQuery(this).attr("id");
            var array = string.split('_');
            var id=array[1];





            if(id!==null){

                var config    =  project.Config;
                var dataApiUrl   = config.getApiUrl();
                var dataAppUrl   = config.getAppUrl();
                var dataTokenGet = config.getToken();


                if(dataTokenGet.access_token!==''){

                    var fdata =new FormData();
                    fdata.append('id',id);

                    $.ajax({
                        url: dataApiUrl+'/social/unfollow',
                        data: fdata,
                        type: 'POST',
                        timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                        dataType:'json',
                        processData: false,
                        contentType: false,
                        // headers: {"Authorization": "Bearer " + dataTokenGet.access_token},

                        beforeSend: function(){

                        },
                        success:function(data){

                            if(data[0].error==='true'){
                                alert(data[0].message);
                            }else{
                                $('#user_item_'+id+' .buttons').html('').append(data[0].html);
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

                        }


                    });

                }else {
                    location.reload();
                }

            }else {
                alert('Something went wrong.');
            }

        });

        // ------------------------------------------------/Unfollow------------------------------------------------------------

    </script>


</body>
</html>
