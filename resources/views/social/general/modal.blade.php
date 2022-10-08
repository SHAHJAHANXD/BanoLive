

<!-- Modal -Start 3------->
<div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel3" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title ch-6 fb text-black text-center" id="staticBackdropLabel3">Create Live</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">



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

                            <select class="form-select ps-2 ch-2 border-0" aria-label="Default select example" id="story_privacy" style="width: auto">

                                @foreach($Privacies as $PrivaciesTemp)
                                    <option value="{{$PrivaciesTemp->id}}">{{$PrivaciesTemp->title}}</option>
                                @endforeach

                            </select>

                        </div>
                    </div>
                </div>

                <div class="row story pb-3">
                    <div class=" col-sm-12 col-md-12 col-lg-12">
                        <div class=" border-muted border-dashed rounded-15 p-2 bg-light h-100">
                            <div class="bg-white div-8 text-center mt-5 ">
                                <img src="{{url('general/img/icons/social-icon-37.svg')}}" class="mt-3">
                            </div>
                            <div class="ch-7 text-muted text-center mt-2 fb">
                                Go live
                            </div>
                            <div class="ch-5 text-muted mb-5 text-center">
                                Go live by yourself or with others
                            </div>
                        </div>
                    </div>
                </div>



                <button type="button" class="btn btn-primary ps-3  pe-3 rounded-pill ch-5 text-center pt-1 btn-sm" id="go_live">Start Now</button>


            </div>

        </div>
    </div>
</div>
<!-- /Modal -Start 3------->


<!-- Story View------->
<div class="modal fade" id="liveView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="liveViewLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">

                <div class="modal-title ch-6 fb text-black text-center" id="staticBackdropLabel">Live</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body" style="padding: 0px; margin: 0px">

                <video width="100%" controls>
                    <source src="{{url('general/video/mov_bbb.mp4')}}" type="video/mp4">
                    <source src="{{url('general/video/mov_bbb.ogg')}}" type="video/ogg">
                    Your browser does not support HTML video.
                </video>

            </div>

        </div>
    </div>


</div>
<!-- Story View------->
















<!-- Modal -Start 4------->
<div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel4" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-arrow-alt-circle-left fa-2x text-muted"></i>
                <div class="modal-title ch-6 fb text-black" id="staticBackdropLabel4">Search For Location</div>
            </div>
            <div class="modal-body">

                <div class="d-flex justify-content-center">
                    <form class="w-100">
                        <div class="input-group search-bar w-100">
                            <span class="input-group-text bg-light"><i class="fas fa-search"></i></span>
                            <input type="text" class="form-control ch-7 bg-light" placeholder="Search Here" aria-label="Username">
                        </div>
                    </form>
                </div>

                <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                    <div class="ps-2 bd-highlight">
                        <div class="rounded-circle bg-light socialP-head-icon-box">
                            <i class="fas fa-map-marker-alt text-muted mt-2"></i>
                        </div>
                    </div>
                    <div class="ps-1 bd-highlight">
                        <div class="ch-7 fb">Karachi</div>
                        <div class="ch-5 text-muted">Karachi, Sindh, Pakistan.</div>
                    </div>
                </div>

                <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                    <div class="ps-2 bd-highlight">
                        <div class="rounded-circle bg-light socialP-head-icon-box">
                            <i class="fas fa-map-marker-alt text-muted mt-2"></i>
                        </div>
                    </div>
                    <div class="ps-1 bd-highlight">
                        <div class="ch-7 fb">Lahore</div>
                        <div class="ch-5 text-muted">Lahore, Panjab, Pakistan.</div>
                    </div>
                </div>

                <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                    <div class="ps-2 bd-highlight">
                        <div class="rounded-circle bg-light socialP-head-icon-box">
                            <i class="fas fa-map-marker-alt text-muted mt-2"></i>
                        </div>
                    </div>
                    <div class="ps-1 bd-highlight">
                        <div class="ch-7 fb">Islamabad</div>
                        <div class="ch-5 text-muted">Capital City, Islamabad, Pakistan.</div>
                    </div>
                </div>

                <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                    <div class="ps-2 bd-highlight">
                        <div class="rounded-circle bg-light socialP-head-icon-box">
                            <i class="fas fa-map-marker-alt text-muted mt-2"></i>
                        </div>
                    </div>
                    <div class="ps-1 bd-highlight">
                        <div class="ch-7 fb">Karachi</div>
                        <div class="ch-5 text-muted">Karachi, Sindh, Pakistan.</div>
                    </div>
                </div>

                <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                    <div class="ps-2 bd-highlight">
                        <div class="rounded-circle bg-light socialP-head-icon-box">
                            <i class="fas fa-map-marker-alt text-muted mt-2"></i>
                        </div>
                    </div>
                    <div class="ps-1 bd-highlight">
                        <div class="ch-7 fb">Lahore</div>
                        <div class="ch-5 text-muted">Lahore, Panjab, Pakistan.</div>
                    </div>
                </div>


                <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                    <div class="ps-2 bd-highlight">
                        <div class="rounded-circle bg-light socialP-head-icon-box">
                            <i class="fas fa-map-marker-alt text-muted mt-2"></i>
                        </div>
                    </div>
                    <div class="ps-1 bd-highlight">
                        <div class="ch-7 fb">Karachi</div>
                        <div class="ch-5 text-muted">Karachi, Sindh, Pakistan.</div>
                    </div>
                </div>

                <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                    <div class="ps-2 bd-highlight">
                        <div class="rounded-circle bg-light socialP-head-icon-box">
                            <i class="fas fa-map-marker-alt text-muted mt-2"></i>
                        </div>
                    </div>
                    <div class="ps-1 bd-highlight">
                        <div class="ch-7 fb">Islamabad</div>
                        <div class="ch-5 text-muted">Capital City, Islamabad, Pakistan.</div>
                    </div>
                </div>

                <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                    <div class="ps-2 bd-highlight">
                        <div class="rounded-circle bg-light socialP-head-icon-box">
                            <i class="fas fa-map-marker-alt text-muted mt-2"></i>
                        </div>
                    </div>
                    <div class="ps-1 bd-highlight">
                        <div class="ch-7 fb">Karachi</div>
                        <div class="ch-5 text-muted">Karachi, Sindh, Pakistan.</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-----------------------Modal End- 4----------->



<!-- Modal -Start 5------->
<div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel5" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-arrow-alt-circle-left fa-2x text-muted"></i>
                <div class="modal-title ch-6 fb text-black" id="staticBackdropLabel5">How are you feeling?</div>
            </div>
            <div class="modal-body">

                <div class="d-flex justify-content-center">
                    <form class="w-100">
                        <div class="input-group search-bar w-100">
                            <span class="input-group-text bg-light"><i class="fas fa-search"></i></span>
                            <input type="text" class="form-control ch-7 bg-light" placeholder="Search Here" aria-label="Username">
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class=" col-sm-12 col-md-6 col-lg-6">

                        <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                            <div class="ps-2 bd-highlight">
                                <div class="rounded-circle bg-light socialP-head-icon-box">
                                    <div class="ch-2 mt-1">&#128512;</div>
                                </div>
                            </div>
                            <div class="ps-1 bd-highlight">
                                <div class="ch-5 fb text-muted mt-2">GRINNING FACE</div>
                            </div>
                        </div>

                        <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                            <div class="ps-2 bd-highlight">
                                <div class="rounded-circle bg-light socialP-head-icon-box">
                                    <div class="ch-2 mt-1">&#128513;</div>
                                </div>
                            </div>
                            <div class="ps-1 bd-highlight">
                                <div class="ch-5 fb text-muted mt-2">GRINNING FACE WITH SMILING EYES</div>
                            </div>
                        </div>

                        <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                            <div class="ps-2 bd-highlight">
                                <div class="rounded-circle bg-light socialP-head-icon-box">
                                    <div class="ch-2 mt-1">&#128514;</div>
                                </div>
                            </div>
                            <div class="ps-1 bd-highlight">
                                <div class="ch-5 fb text-muted mt-2">FACE WITH TEARS OF JOY</div>
                            </div>
                        </div>

                        <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                            <div class="ps-2 bd-highlight">
                                <div class="rounded-circle bg-light socialP-head-icon-box">
                                    <div class="ch-2 mt-1">&#128515;</div>
                                </div>
                            </div>
                            <div class="ps-1 bd-highlight">
                                <div class="ch-5 fb text-muted mt-2">OPEN MOUTH</div>
                            </div>
                        </div>

                        <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                            <div class="ps-2 bd-highlight">
                                <div class="rounded-circle bg-light socialP-head-icon-box">
                                    <div class="ch-2 mt-1">&#128516;</div>
                                </div>
                            </div>
                            <div class="ps-1 bd-highlight">
                                <div class="ch-5 fb text-muted mt-2">SMILING EYES</div>
                            </div>
                        </div>

                        <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                            <div class="ps-2 bd-highlight">
                                <div class="rounded-circle bg-light socialP-head-icon-box">
                                    <div class="ch-2 mt-1">&#128517;</div>
                                </div>
                            </div>
                            <div class="ps-1 bd-highlight">
                                <div class="ch-5 fb text-muted mt-2">OPEN MOUTH AND COLD SWEAT</div>
                            </div>
                        </div>



                    </div>




                    <div class=" col-sm-12 col-md-6 col-lg-6">

                        <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                            <div class="ps-2 bd-highlight">
                                <div class="rounded-circle bg-light socialP-head-icon-box">
                                    <div class="ch-2 mt-1">&#128519;</div>
                                </div>
                            </div>
                            <div class="ps-1 bd-highlight">
                                <div class="ch-5 fb text-muted mt-2">HALO</div>
                            </div>
                        </div>

                        <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                            <div class="ps-2 bd-highlight">
                                <div class="rounded-circle bg-light socialP-head-icon-box">
                                    <div class="ch-2 mt-1">&#128520;</div>
                                </div>
                            </div>
                            <div class="ps-1 bd-highlight">
                                <div class="ch-5 fb text-muted mt-2">HORNS</div>
                            </div>
                        </div>

                        <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                            <div class="ps-2 bd-highlight">
                                <div class="rounded-circle bg-light socialP-head-icon-box">
                                    <div class="ch-2 mt-1">&#128521;</div>
                                </div>
                            </div>
                            <div class="ps-1 bd-highlight">
                                <div class="ch-5 fb text-muted mt-2">WINKING FACE</div>
                            </div>
                        </div>

                        <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                            <div class="ps-2 bd-highlight">
                                <div class="rounded-circle bg-light socialP-head-icon-box">
                                    <div class="ch-2 mt-1">&#128522;</div>
                                </div>
                            </div>
                            <div class="ps-1 bd-highlight">
                                <div class="ch-5 fb text-muted mt-2">SMILING EYES</div>
                            </div>
                        </div>

                        <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                            <div class="ps-2 bd-highlight">
                                <div class="rounded-circle bg-light socialP-head-icon-box">
                                    <div class="ch-2 mt-1">&#128523;</div>
                                </div>
                            </div>
                            <div class="ps-1 bd-highlight">
                                <div class="ch-5 fb text-muted mt-2">FACE SAVOURING DELICIOUS FOOD</div>
                            </div>
                        </div>

                        <div class="d-flex flex-row bd-highlight mb-3 mt-3 user-box">
                            <div class="ps-2 bd-highlight">
                                <div class="rounded-circle bg-light socialP-head-icon-box">
                                    <div class="ch-2 mt-1">&#128525;</div>
                                </div>
                            </div>
                            <div class="ps-1 bd-highlight">
                                <div class="ch-5 fb text-muted mt-2">HEART SHAPED EYES</div>
                            </div>
                        </div>


                    </div>
                </div>





            </div>

        </div>
    </div>
</div>
<!-----------------------Modal End- 5----------->







































<!-- Story Modal------->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title ch-6 fb text-black text-center" id="staticBackdropLabel">Create Story</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">




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

                            <select class="form-select ps-2 ch-2 border-0" aria-label="Default select example" id="story_privacy" style="width: auto">

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
                            <textarea class="form-control border-0 bg-white" placeholder="What’s On Your Mind {{$User->full_name}}?"  id="story_description" rows="2"></textarea>
                        </div>


                        <div id="story_media_file" class="mt-3" style="display: none">

                            <form action="#" class="dropzone dz-clickable primary-dropzone" id="storyGalleryImages">
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

                                <a href="javascript:void(0)" style="text-decoration: none" id="story_media">
                                    <img src="{{url('/general/img/icons/social-icon-08.svg')}}" alt=""> <span class="ch-2 ms-1 text-muted">Photo</span>
                                </a>

                            </div>

                            <div class="ms-auto bd-highlight">
                                <button type="button" class="btn btn-primary ps-3  pe-3 rounded-pill ch-5 text-center pt-1 btn-sm" id="story_create">Share Now</button>
                            </div>

                        </div>

                    </div>

                </div>




            </div>

        </div>
    </div>
</div>
<!-- Story Modal------->


<!-- Story View------->
<div class="modal fade" id="storyView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="storyViewLabel" aria-hidden="true">

</div>
<!-- Story View------->
























