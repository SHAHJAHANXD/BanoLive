<!DOCTYPE html>
<html lang="en" data-textdirection="ltr">
<head>

    @include('.mobile.general.meta-title')
    @include('.mobile.general.favicon')
    @include('.mobile.general.external-css')
    @include('.mobile.general.style')


</head>
<body>




<!--------------------------Section-------------------------------------->
<section class="screen-1 d-md-none d-lg-none position-relative">
    <div class="container">
        <div class="row">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="text-center">
                        <img src="assets/img/logo-black.svg" class="" height="150px" width="150px">
                        <div class="ch-8 mt-3 mb-5 fb-b text-white">
                            Sign Up To Social Media
                        </div>
                        <div class="txt-color-1 mb-3">
                            <a href="home.html" type="button" class="btn cus-btn-2 w-100 rounded-3"><i class="fab fa-facebook-f"></i> <span class="">Facebook</span></a>
                        </div>
                        <div class="txt-color-2 mb-3">
                            <a  href="home.html" type="button" class="btn cus-btn-1 w-100 rounded-3"><i class="fab fa-google-plus-g text-white pe-2"></i>  <span class="">Google</span></a>
                        </div>
                    </div>

                    <div class="d-flex bd-highlight ">
                        <div class="me-auto bd-highlight w-100">
                            <div class="w-100 hr bg-color-30 mt-3"></div>
                        </div>
                        <div class="d-flex justify-content-center">
                                <span class="text-white ch-7 mt-1 ms-2 me-2 fb-b">
                                    OR
                                </span>
                        </div>
                        <div class="bd-highlight w-100">
                            <div class="w-100 hr bg-color-30 mt-3"></div>
                        </div>
                    </div>
                </div>


                <div class="d-flex justify-content-center">
                    <div class="d-flex bd-highlight">
                        <div class="p-2 bd-highlight">
                            <a href="sign-up-with-number.html"><img src="assets/img/icons/phone-icon-blue.svg" class=""></a>
                        </div>
                        <div class="p-2 bd-highlight ">
                            <a href="sign-up-with-email.html"><img src="assets/img/icons/envluo-icon-red.svg" class=""></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-white fb-b ch-8 text-center fixed-bottom">
                Already Have an Account?<a href="index.html" class="text-danger fb-b"> Sign In</a>
            </div>
        </div>
    </div>
</section>
<!-------------------------/Section-------------------------------------->
<!--------------------------Section-------------------------------------->
<section class="screen-2 d-md-block d-lg-block d-none position-relative">
    <div class="container">
        <div class="row">
            <div class="position-absolute top-50 start-50 translate-middle">

                <div class="col-md-4 col-sm-12 col-lg-4 mx-auto">
                    <div class="text-center">
                        <img src="{{url('/mobile/img/logo-black.svg')}}" class="" height="150px" width="150px">
                        <div class="ch-8 mt-3 mb-5 fb-b text-white">
                            Sign Up To Social Media
                        </div>
                        <div class="txt-color-1 mb-3">
                            <a href="{{url('/mobile/home')}}" type="button" class="btn cus-btn-2 w-100 rounded-3"><i class="fab fa-facebook-f"></i> <span class="">Facebook</span></a>
                        </div>
                        <div class="txt-color-2 mb-3">
                            <a  href="{{url('/mobile/home')}}" type="button" class="btn cus-btn-1 w-100 rounded-3"><i class="fab fa-google-plus-g text-white pe-2"></i>  <span class="">Google</span></a>
                        </div>
                    </div>

                    <div class="d-flex bd-highlight ">
                        <div class="me-auto bd-highlight w-100">
                            <div class="w-100 hr bg-color-30 mt-3"></div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <span class="text-white ch-7 mt-1 ms-2 me-2 fb-b">
                                OR
                            </span>
                        </div>
                        <div class="bd-highlight w-100">
                            <div class="w-100 hr bg-color-30 mt-3"></div>
                        </div>
                    </div>
                </div>


                <div class="d-flex justify-content-center">
                    <div class="d-flex bd-highlight">
                        <div class="p-2 bd-highlight">
                            <a href="{{url('/mobile/home')}}"><img src="{{url('mobile/img/icons/phone-icon-blue.svg')}}" class=""></a>
                        </div>
                        <div class="p-2 bd-highlight ">
                            <a href="{{url('/mobile/home')}}"><img src="{{url('mobile/img/icons/envluo-icon-red.svg')}}" class=""></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="text-white fb-b ch-8 text-center fixed-bottom mb-2">
            <div>Don’t Have an Account? &nbsp;<a href="{{url('mobile/sign-up/user')}}" class="text-danger fb-b" style="text-decoration: none">Sign Up</a></div>

            <div><a href="{{url('/mobile/become-a-partner')}}" class="text-danger fb-b" style="text-decoration: none">Become a Partner</a></div>
        </div>

    </div>
</section>
<!-------------------------/Section-------------------------------------->





@include('.mobile.general.preloader')
@include('.mobile.general.script')






</body>
</html>
