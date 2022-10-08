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
<section class="background-2">
    <div class="container">
        <div class="row">

            <div class="col-md-5 col-sm-12 col-lg-5 mx-auto mt-5" style="color: #d3d3d3">
                <div class="w-100">
                    <div style="text-align: center">
                        <img src="{{url('/mobile/img/logo-black.svg')}}" height="120px" width="120px">
                    </div>
                    <div class="text-white ch-8 fb-b mb-3 mt-2 text-center">
                        Create an Account Now and Get The Best Deal.
                    </div>


                    <div class="row">


                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">

                            <a href="{{url('/mobile/sign-up/admin')}}" style="text-decoration: none; font-weight: bold; color: red">
                                <div class="card p-4 text-center" style="background-color: #242937; border: 0;">

                                    <img src="{{url('general/img/admin.svg')}}" alt="" title="" style="width: 60px; height: 60px; margin: 0 auto">

                                    <div class="mt-3 fb-b ch-8">Sign Up As Admin</div>

                                </div>
                            </a>

                        </div>



                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">

                            <a href="{{url('/mobile/sign-up/agency')}}" style="text-decoration: none; font-weight: bold; color: red">
                                <div class="card p-4 text-center" style="background-color: #242937; border: 0;">

                                    <img src="{{url('panel/images/agencies.svg')}}" alt="" title="" style="width: 60px; height: 60px; margin: 0 auto">

                                    <div class="mt-3 fb-b ch-8">Sign Up As Agency</div>

                                </div>
                            </a>

                        </div>


                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">

                            <a href="{{url('/mobile/sign-up/host')}}" style="text-decoration: none; font-weight: bold; color: red">
                                <div class="card p-4 text-center" style="background-color: #242937; border: 0;">

                                    <img src="{{url('panel/images/hosts.svg')}}" alt="" title="" style="width: 60px; height: 60px; margin: 0 auto">

                                    <div class="mt-3 fb-b ch-8">Sign Up As Host</div>

                                </div>
                            </a>

                        </div>




                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">

                            <a href="{{url('/mobile/sign-up/agent')}}" style="text-decoration: none; font-weight: bold; color: red">
                                <div class="card p-4 text-center" style="background-color: #242937; border: 0;">

                                    <img src="{{url('panel/images/agents.svg')}}" alt="" title="" style="width: 60px; height: 60px; margin: 0 auto">

                                    <div class="mt-3 fb-b ch-8">Sign Up As Top Up Agent</div>

                                </div>
                            </a>

                        </div>





                    </div>


                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-lg-12 col-12 mt-3">

                <div class="text-white fb-b ch-8 text-center">
                    <div class="text-center">Already have an Account? &nbsp;<a href="{{url('mobile/sign-in')}}" class="text-danger fb-b" style="text-decoration: none">Sign In</a></div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-------------------------/Section-------------------------------------->





@include('.mobile.general.preloader')
@include('.mobile.general.script')






</body>
</html>
