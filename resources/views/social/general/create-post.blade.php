
    <!-------------Create Post---------->
    <div class="bg-white rounded-15 p-2">


        <div class="d-flex flex-row bd-highlight mb-3 mt-3 ms-2 user-box">
            <div class=" bd-highlight">
                <div class="rounded-circle bg-light socialP-head-icon-box-extra">


                    @if($User->image!=null)
                        <img src="{{url('/uploads/'.$User->image)}}" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra img-fit">
                    @else
                        <img src="{{url('/general/img/default-user.jpg')}}" alt="" class="rounded-circle bg-light socialP-head-icon-box-extra img-fit">
                    @endif



                    <div class="status-icon" ></div>
                </div>
            </div>
            <div class=" bd-highlight">
                <div class="ch-7 ms-2 fb">{{$User->full_name}}</div>
                <div class="ch-5 text-muted">

                    <select class="form-select ps-2 ch-2 border-0" aria-label="Default select example" id="post_privacy" style="width: auto">

                        @foreach($Privacies as $PrivaciesTemp)
                            <option value="{{$PrivaciesTemp->id}}">{{$PrivaciesTemp->title}}</option>
                        @endforeach

                    </select>

                </div>
            </div>
        </div>

        <div class="d-flex flex-column bd-highlight">
            <div class="p-2 bd-highlight">
                <div class="border-bottom border-gray">
                    <textarea class="form-control border-0 bg-white" placeholder="What’s On Your Mind {{$User->full_name}}?"  id="post_description" rows="2"></textarea>
                </div>


                <div id="post_media_file" class="mt-3" style="display: none">

                    <form action="#" class="dropzone dz-clickable primary-dropzone" id="galleryImages">
                        <div class="dz-default dz-message">
                            <i class="ti-gallery"></i>
                            <span>Drop files here to upload</span>
                        </div>
                    </form>

                </div>

            </div>

            <div class="p-2 bd-highlight">

                <div class="d-flex bd-highlight">

                    <div class="bd-highlight">

                        <a href="javascript:void(0)" style="text-decoration: none" id="post_media">
                            <img src="{{url('/general/img/icons/social-icon-08.svg')}}" alt=""> <span class="ch-2 ms-1 text-muted">Photo</span>
                        </a>

                    </div>

                    <div class="ms-auto bd-highlight">
                        <button type="button" class="btn btn-primary ps-3  pe-3 rounded-pill ch-5 text-center pt-1 btn-sm" id="post_create">Post Now</button>
                    </div>

                </div>

            </div>

        </div>



    </div>
    <!------------/Create Post---------->
