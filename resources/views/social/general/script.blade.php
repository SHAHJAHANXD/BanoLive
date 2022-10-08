
<!-----------------------------Script--------------------------------------->

<script src="{{url('/general/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{url('/general/js/popper.min.js')}}"></script>
<script src="{{url('/general/vendors/bootstrap-5.1.3-dist/js/bootstrap.js')}}"></script>
<script src="{{url('/general/vendors/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{url('/general/vendors/slick-1.8.1/slick/slick.js')}}"></script>


<script src="{{url('/general/js/general.js')}}"></script>


<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

<script>
    $(document).ready(function(){

        $('.story-box').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 7,
            slidesToScroll: 7,
            arrows:false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 7,
                        slidesToScroll: 7,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    });
</script>
<script>
    // $(document).ready(function(){
    //
    //     $('.live-box').slick({
    //         dots: false,
    //         infinite: false,
    //         speed: 300,
    //         slidesToShow: 3,
    //         slidesToScroll: 3,
    //         arrows:false,
    //         responsive: [
    //             {
    //                 breakpoint: 1024,
    //                 settings: {
    //                     slidesToShow: 4,
    //                     slidesToScroll: 4,
    //                     infinite: true,
    //                     dots: true
    //                 }
    //             },
    //             {
    //                 breakpoint: 600,
    //                 settings: {
    //                     slidesToShow: 4,
    //                     slidesToScroll: 4
    //                 }
    //             },
    //             {
    //                 breakpoint: 480,
    //                 settings: {
    //                     slidesToShow: 4,
    //                     slidesToScroll: 4
    //                 }
    //             },
    //             {
    //                 breakpoint: 390,
    //                 settings: {
    //                     slidesToShow: 3,
    //                     slidesToScroll: 3
    //                 }
    //             }
    //             // You can unslick at a given breakpoint now by adding:
    //             // settings: "unslick"
    //             // instead of a settings object
    //         ]
    //     });
    //
    // });
</script>
<!----------------------------/Script--------------------------------------->



<script src="{{url('/general/vendors/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>

<script>
    $(document).ready(function(){


        $('.live-box').owlCarousel({
            // rtl:true,
            loop:false,
            margin:10,
            nav:false,
            // autoWidth:true,
            responsive:{
                0:{
                    items:1
                },
                300:{
                    items:4
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        });



        $('.owl-carousel').owlCarousel({
            // rtl:true,
            loop:false,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                300:{
                    items:4
                },
                600:{
                    items:3
                },
                1000:{
                    items:6
                }
            }
        });


        $('.follow-slide').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows:false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    });
</script>

<script>

    function validateImageExtension(data) {
        var re = /\.(jpe?g|png|gif)$/;
        return re.test(data);
    }

    function objectCount(obj) {
        var size = 0, key;
        for (key in obj) {
            if (obj.hasOwnProperty(key)) size++;
        }
        return size;
    }






    // ----------------------------------------------To Be Following-------------------------------------------------------------

    $(document).on( 'click', '.to-be-following', function (e) {
        e.preventDefault();



        var string = jQuery(this).attr("id");
        var array = string.split('_');
        var id=array[3];



        if(id!==null){

            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();


            // if(dataTokenGet.access_token!==''){

            var fdata =new FormData();
            fdata.append('id',id);

            $.ajax({
                url: dataApiUrl+'/social/to-be-following',
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


                    $("#to_be_following_item_"+id).slideUp();

                    if(data[0].error==='true'){
                        alert(data[0].message);
                    }else{
                        //alert(data[0].message);
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

            // }else {
            //     location.reload();
            // }

        }else {
            alert('Something went wrong.');
        }

    });

    // ----------------------------------------------/To Be Following-------------------------------------------------------------







    // -----------------------------------------------Follow Remove---------------------------------------------------------

    $(document).on( 'click', '.remove-follower', function (e) {
        e.preventDefault();

        var string = jQuery(this).attr("id");
        var array = string.split('_');
        var id=array[2];




        if(id!==null){


            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();


            if(dataTokenGet.access_token!==''){

                var fdata =new FormData();
                fdata.append('id',id);

                $.ajax({
                    url: dataApiUrl+'/social/remove-follower',
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


                        $('#follower_item_'+id).fadeOut("fast", function() {
                            $(this).remove();
                        });

                        if(data[0].error==='true'){
                            alert(data[0].message);
                        }else{
                            //alert(data[0].message);
                        }

                        // if(data[0].error==='true'){
                        //     alert(data[0].message);
                        // }else{
                        //     $('.followers_'+id).fadeOut("fast", function() {
                        //         $(this).remove();
                        //     });
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

                    }


                });

            }else {
                location.reload();
            }

        }else {
            alert('Something went wrong.');
        }

    });

    // ----------------------------------------------/Follow Remove---------------------------------------------------------
















    // ------------------------------------------------- Live ----------------------------------------------------------

    $('#go_live').on('click',function (e) {
        e.preventDefault();


        var inc=0;
        var privacy = $('#story_privacy').val();






        if(inc===0){

            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();


            var fdata =new FormData();
            fdata.append('privacy',privacy);

            $.ajax({
                url: dataApiUrl+'/live/create',
                data: fdata,
                type: 'POST',
                timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                dataType:'json',
                processData: false,
                contentType: false,


                beforeSend: function(){

                    $('#go_live').attr('disabled', 'disabled');

                    $("#alert").css("display", "none");
                    $(".load-bar").css("display", "block");

                },


                success:function(data){


                    $(".load-bar").css("display", "none");


                    $('#go_live').removeAttr('disabled');


                    if(data['error']!=true){

                        window.location.href= dataAppUrl+'/newsfeed';

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


                    $('#go_live').removeAttr('disabled');
                }


            });

        }else {
            $("#alert").css("display", "block").text('Valid field required.');
        }




    });

    // -------------------------------------------------/Live ----------------------------------------------------------






    // ------------------------------------------------ Profile --------------------------------------------------------

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

    jQuery("#profile_banner").change(function () {


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
                            url: dataApiUrl+'/user/profile/banner/upload',
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

    // ------------------------------------------------/Profile --------------------------------------------------------
















    // -----------------------------------------------------Story-------------------------------------------------------


    $("#story_media").click(function(){

        $("#story_media_file").toggle();

    });





    $(document).on( 'click', '.story-item', function (e) {
        e.preventDefault();


        var id = $(this).attr("id");




        var config    =  project.Config;
        var dataApiUrl   = config.getApiUrl();
        var dataAppUrl   = config.getAppUrl();
        var dataTokenGet = config.getToken();


        var fdata =new FormData();
        fdata.append('id',id);

        $.ajax({
            url: dataApiUrl+'/story/view',
            data: fdata,
            type: 'POST',
            timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
            dataType:'json',
            processData: false,
            contentType: false,


            beforeSend: function(){

                $("#alert").css("display", "none");
                $(".load-bar").css("display", "block");

            },


            success:function(data){


                $(".load-bar").css("display", "none");

                // $('#storyView').modal('show');




                if(data['error']!=true){

                    $('#storyView').html('').append(data['data']['html']).modal('toggle');

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

            }


        });



    });





    // ---------------Story Gallery------------------


    var config    =  project.Config;
    var dataApiUrl   = config.getApiUrl();
    var dataAppUrl   = config.getAppUrl();
    var dataTokenGet =  config.getToken();

    // Disable the auto init. So we can modify settings first. We will manually initialize it later.
    Dropzone.autoDiscover = false;

    // Manually init dropzone on our element.
    var gallery = new Dropzone("#storyGalleryImages", {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 1, // MB
        parallelUploads: 2, //limits number of files processed to reduce stress on server
        addRemoveLinks: true,
        dictRemoveFile: 'Remove',
        dictFileTooBig: 'Image is bigger than 1MB',

        url: dataApiUrl+'/story/gallery/upload',
        headers: {"Authorization": "Bearer " + dataTokenGet.access_token},
        method: "post",

        withCredentials: false,
        uploadMultiple: false,
        createImageThumbnails: true,
        maxThumbnailFilesize: 10,
        thumbnailWidth: 120,
        thumbnailHeight: 120,
        filesizeBase: 1000,
        maxFiles: 6,
        clickable: true,
        ignoreHiddenFiles: true,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        acceptedMimeTypes: null,
        autoProcessQueue: true,
        autoQueue: true,
        previewsContainer: null,
        hiddenInputContainer: "body",
        capture: null,
        renameFilename: null,
        dictDefaultMessage: "Drop files here to upload",
        dictFallbackMessage: "Your browser does not support drag'n'drop file uploads.",
        dictFallbackText: "Please use the fallback form below to upload your files like in the olden days.",
        dictInvalidFileType: "You can't upload files of this type.",
        dictCancelUpload: "Cancel upload",
        dictCancelUploadConfirmation: "Are you sure you want to cancel this upload?",
        dictRemoveFileConfirmation: null,
        dictMaxFilesExceeded: "You can not upload any more files.",
        init: function() {

            this.on("addedfile", function(file, data) {

            });
            this.on("success", function(file, data) {

                $(".load-bar").css("display", "none");
                if(data.response['code'] == 200){
                    var fileName=data.response['fileName'];
                    // $('.dz-filename span').text(fileName);
                    file.previewElement.id = fileName;
                } else{
                    alert('Error');
                    alert(data.response['message']);
                }

            });
            this.on("error", function(file, data) {
                $(".load-bar").css("display", "none");
            });


        },
        accept: function(file, done) {
            done();
        },
        sending: function(file, xhr, formData) {
            $(".load-bar").css("display", "block");
        },
        removedfile: function(file) {
            var fileStatus=file.status;

            if(fileStatus==='success'){
                var actual_name = file.name;// Calling Actucal Name
                var rename_name = file.previewElement.id; //Calling File Rename


                var jsonData={
                    rename_name:rename_name
                };

                $.ajax({

                    url: dataApiUrl+'/story/gallery/delete',
                    type:'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    data:jsonData ,
                    headers: {"Authorization": "Bearer " + dataTokenGet.access_token},

                    beforeSend: function(){

                        $(".load-bar").css("display", "block");
                    },
                    success: function(data) {

                        $(".load-bar").css("display", "none");

                        if(data.response['code'] == 200){
                            var _ref;
                            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
                        } else{
                            alert(data.response['message'])
                        }

                    },
                    error: function(xmlhttprequest, textstatus, message) {

                        $(".load-bar").css("display", "none");

                        if(textstatus==="timeout") {
                            alert('Timeout Please try again.');
                        }else {
                            if(navigator.onLine) {

                                if(textstatus==="error"){
                                    responseErrorMessage(message);
                                }

                            }else {
                                alert('Check your internet connection then try again later.');
                            }
                        }

                    }
                });
            }else {
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }


        }

    });


    // --------------/Story Gallery------------------


    // -------------Story Create----------------------
    $('#story_create').on('click',function (e) {
        e.preventDefault();


        var inc=0;
        var privacy = $('#story_privacy').val();
        var description = $('#story_description').val();



        if ((description !== '' && description !== null && description !== ' ' && description !== '  ')) {
            inc++;
        } else {
            alert('Write some description.');
            return null;
        }


        //------------------------------Gallery-------------------------------

        var galleryImages= [];
        $("#storyGalleryImages .dz-success").each(function(key){
            var serverResponseFileName = $('#storyGalleryImages .dz-success').eq(key).attr('id');
            var actualFileSize = $('#storyGalleryImages .dz-details .dz-size').eq(key).text();
            var actualFileName = $('#storyGalleryImages .dz-details .dz-filename').eq(key).text();
            galleryImages[key] = {serverResponseFileName: serverResponseFileName, actualFileSize: actualFileSize, actualFileName: actualFileName};
        });
        var galleryImageCount = objectCount(galleryImages);

        //encode object to json
        galleryImages = JSON.stringify(galleryImages);

        //------------------------------Gallery-------------------------------






        if(inc===1){

            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();


            var fdata =new FormData();
            fdata.append('privacy',privacy);
            fdata.append('description',description);

            fdata.append('galleryImageCount',galleryImageCount);
            fdata.append('galleryImages',galleryImages);

            $.ajax({
                url: dataApiUrl+'/story/create',
                data: fdata,
                type: 'POST',
                timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                dataType:'json',
                processData: false,
                contentType: false,


                beforeSend: function(){

                    $('#story_create').attr('disabled', 'disabled');

                    $("#alert").css("display", "none");
                    $(".load-bar").css("display", "block");

                },


                success:function(data){


                    $(".load-bar").css("display", "none");


                    $('#story_create').removeAttr('disabled');


                    if(data['error']!=true){

                        window.location.href= dataAppUrl+'/newsfeed';

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


                    $('#story_create').removeAttr('disabled');
                }


            });

        }else {
            $("#alert").css("display", "block").text('Valid field required.');
        }




    });
    // ------------/Story Create----------------------



    // -------------Story Delete----------------------
    $('.delete-story').on('click',function (e) {
        e.preventDefault();
        var inc=0;

        var string = jQuery(this).attr("id");
        var array = string.split('_');
        var id=array[2];





        if(inc===0){

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

                    $('.delete-post').attr('disabled', 'disabled');

                    $("#alert").css("display", "none");
                    $(".load-bar").css("display", "block");

                },


                success:function(data){


                    $(".load-bar").css("display", "none");


                    $('.delete-post').removeAttr('disabled');




                    if(data['error']!=true){


                        $("#story_"+id).hide();

                    }else{
                        alert('Deletion failed');

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


                    $('.delete-post').removeAttr('disabled');
                }


            });

        }else {
            $("#alert").css("display", "block").text('Valid field required.');
        }


    });
    // ------------/Story Delete----------------------



    // ---------------Story Report--------------------
    $('.report-story').on('click',function (e) {
        e.preventDefault();
        var inc=0;

        var string = jQuery(this).attr("id");
        var array = string.split('_');
        var id=array[2];





        if(inc===0){

            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();


            var fdata =new FormData();
            fdata.append('id',id);

            $.ajax({
                url: dataApiUrl+'/story/report',
                data: fdata,
                type: 'POST',
                timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                dataType:'json',
                processData: false,
                contentType: false,


                beforeSend: function(){

                    $('.report-post').attr('disabled', 'disabled');

                    $("#alert").css("display", "none");
                    $(".load-bar").css("display", "block");

                },


                success:function(data){


                    $(".load-bar").css("display", "none");


                    $('.report-post').removeAttr('disabled');




                    if(data['error']!=true){

                        alert('Post has been Reported');

                    }else{
                        alert('Report Post has been failed');

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


                    $('.report-post').removeAttr('disabled');
                }


            });

        }else {
            $("#alert").css("display", "block").text('Valid field required.');
        }


    });
    // --------------/Story Report--------------------



    // ----------------------------------------------------/Story-------------------------------------------------------























    // --------------------------------------------------------------------------------------------------


    $("#post_media").click(function(){

        $("#post_media_file").toggle();

    });





    // ------------------------------------------------Gallery--------------------------------------------------------------

    var config    =  project.Config;
    var dataApiUrl   = config.getApiUrl();
    var dataAppUrl   = config.getAppUrl();
    var dataTokenGet =  config.getToken();

    // Disable the auto init. So we can modify settings first. We will manually initialize it later.
    Dropzone.autoDiscover = false;

    // Manually init dropzone on our element.
    var gallery = new Dropzone("#galleryImages", {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 1, // MB
        parallelUploads: 2, //limits number of files processed to reduce stress on server
        addRemoveLinks: true,
        dictRemoveFile: 'Remove',
        dictFileTooBig: 'Image is bigger than 1MB',

        url: dataApiUrl+'/newsfeed/gallery/upload',
        headers: {"Authorization": "Bearer " + dataTokenGet.access_token},
        method: "post",

        withCredentials: false,
        uploadMultiple: false,
        createImageThumbnails: true,
        maxThumbnailFilesize: 10,
        thumbnailWidth: 120,
        thumbnailHeight: 120,
        filesizeBase: 1000,
        maxFiles: 6,
        clickable: true,
        ignoreHiddenFiles: true,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        acceptedMimeTypes: null,
        autoProcessQueue: true,
        autoQueue: true,
        previewsContainer: null,
        hiddenInputContainer: "body",
        capture: null,
        renameFilename: null,
        dictDefaultMessage: "Drop files here to upload",
        dictFallbackMessage: "Your browser does not support drag'n'drop file uploads.",
        dictFallbackText: "Please use the fallback form below to upload your files like in the olden days.",
        dictInvalidFileType: "You can't upload files of this type.",
        dictCancelUpload: "Cancel upload",
        dictCancelUploadConfirmation: "Are you sure you want to cancel this upload?",
        dictRemoveFileConfirmation: null,
        dictMaxFilesExceeded: "You can not upload any more files.",
        init: function() {

            this.on("addedfile", function(file, data) {

            });
            this.on("success", function(file, data) {

                $(".load-bar").css("display", "none");
                if(data.response['code'] == 200){
                    var fileName=data.response['fileName'];
                    // $('.dz-filename span').text(fileName);
                    file.previewElement.id = fileName;
                } else{
                    alert('Error');
                    alert(data.response['message']);
                }

            });
            this.on("error", function(file, data) {
                $(".load-bar").css("display", "none");
            });


        },
        accept: function(file, done) {
            done();
        },
        sending: function(file, xhr, formData) {
            $(".load-bar").css("display", "block");
        },
        removedfile: function(file) {
            var fileStatus=file.status;

            if(fileStatus==='success'){
                var actual_name = file.name;// Calling Actucal Name
                var rename_name = file.previewElement.id; //Calling File Rename


                var jsonData={
                    rename_name:rename_name
                };

                $.ajax({

                    url: dataApiUrl+'/newsfeed/gallery/delete',
                    type:'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    data:jsonData ,
                    headers: {"Authorization": "Bearer " + dataTokenGet.access_token},

                    beforeSend: function(){

                        $(".load-bar").css("display", "block");
                    },
                    success: function(data) {

                        $(".load-bar").css("display", "none");

                        if(data.response['code'] == 200){
                            var _ref;
                            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
                        } else{
                            alert(data.response['message'])
                        }

                    },
                    error: function(xmlhttprequest, textstatus, message) {

                        $(".load-bar").css("display", "none");

                        if(textstatus==="timeout") {
                            alert('Timeout Please try again.');
                        }else {
                            if(navigator.onLine) {

                                if(textstatus==="error"){
                                    responseErrorMessage(message);
                                }

                            }else {
                                alert('Check your internet connection then try again later.');
                            }
                        }

                    }
                });
            }else {
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }


        }

    });


    // -----------------------------------------------/Gallery--------------------------------------------------------------




    // --------------------------------------------Newsfeed Create------------------------------------------------------
    $('#post_create').on('click',function (e) {
        e.preventDefault();


        var inc=0;
        var privacy = $('#post_privacy').val();
        var description = $('#post_description').val();


        if ((description !== '' && description !== null && description !== ' ' && description !== '  ')) {
            inc++;
        } else {
            alert('Write some description.');
            return null;
        }


        //------------------------------Gallery-------------------------------

        var galleryImages= [];
        $("#galleryImages .dz-success").each(function(key){
            var serverResponseFileName = $('#galleryImages .dz-success').eq(key).attr('id');
            var actualFileSize = $('#galleryImages .dz-details .dz-size').eq(key).text();
            var actualFileName = $('#galleryImages .dz-details .dz-filename').eq(key).text();
            galleryImages[key] = {serverResponseFileName: serverResponseFileName, actualFileSize: actualFileSize, actualFileName: actualFileName};
        });
        var galleryImageCount = objectCount(galleryImages);

        //encode object to json
        galleryImages = JSON.stringify(galleryImages);

        //------------------------------Gallery-------------------------------






        if(inc===1){

            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();


            var fdata =new FormData();
            fdata.append('privacy',privacy);
            fdata.append('description',description);

            fdata.append('galleryImageCount',galleryImageCount);
            fdata.append('galleryImages',galleryImages);

            $.ajax({
                url: dataApiUrl+'/newsfeed/create',
                data: fdata,
                type: 'POST',
                timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                dataType:'json',
                processData: false,
                contentType: false,


                beforeSend: function(){

                    $('#post_create').attr('disabled', 'disabled');

                    $("#alert").css("display", "none");
                    $(".load-bar").css("display", "block");

                },


                success:function(data){


                    $(".load-bar").css("display", "none");


                    $('#post_create').removeAttr('disabled');


                    if(data['error']!=true){

                        window.location.href= dataAppUrl+'/profile';

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


                    $('#post_create').removeAttr('disabled');
                }


            });

        }else {
            $("#alert").css("display", "block").text('Valid field required.');
        }




    });
    // --------------------------------------------Newsfeed Create------------------------------------------------------




    // --------------------------------------------Newsfeed Delete------------------------------------------------------
    $('.delete-post').on('click',function (e) {
        e.preventDefault();
        var inc=0;

        var string = jQuery(this).attr("id");
        var array = string.split('_');
        var id=array[2];





        if(inc===0){

            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();


            var fdata =new FormData();
            fdata.append('id',id);

            $.ajax({
                url: dataApiUrl+'/newsfeed/delete',
                data: fdata,
                type: 'POST',
                timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                dataType:'json',
                processData: false,
                contentType: false,


                beforeSend: function(){

                    $('.delete-post').attr('disabled', 'disabled');

                    $("#alert").css("display", "none");
                    $(".load-bar").css("display", "block");

                },


                success:function(data){


                    $(".load-bar").css("display", "none");


                    $('.delete-post').removeAttr('disabled');




                    if(data['error']!=true){


                        $("#post_"+id).hide();

                    }else{
                        alert('Deletion failed');

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


                    $('.delete-post').removeAttr('disabled');
                }


            });

        }else {
            $("#alert").css("display", "block").text('Valid field required.');
        }


    });
    // -------------------------------------------/Newsfeed Delete------------------------------------------------------




    // --------------------------------------------Newsfeed Report------------------------------------------------------
    $('.report-post').on('click',function (e) {
        e.preventDefault();
        var inc=0;

        var string = jQuery(this).attr("id");
        var array = string.split('_');
        var id=array[2];





        if(inc===0){

            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();


            var fdata =new FormData();
            fdata.append('id',id);

            $.ajax({
                url: dataApiUrl+'/newsfeed/report',
                data: fdata,
                type: 'POST',
                timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                dataType:'json',
                processData: false,
                contentType: false,


                beforeSend: function(){

                    $('.report-post').attr('disabled', 'disabled');

                    $("#alert").css("display", "none");
                    $(".load-bar").css("display", "block");

                },


                success:function(data){


                    $(".load-bar").css("display", "none");


                    $('.report-post').removeAttr('disabled');




                    if(data['error']!=true){

                        alert('Post has been Reported');

                    }else{
                        alert('Report Post has been failed');

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


                    $('.report-post').removeAttr('disabled');
                }


            });

        }else {
            $("#alert").css("display", "block").text('Valid field required.');
        }


    });
    // -------------------------------------------/Newsfeed Report------------------------------------------------------













</script>


