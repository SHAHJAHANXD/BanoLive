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

        .pricing .card-price {
            font-size: 3rem;
            margin: 0;
        }

        .pricing .card-price .period {
            font-size: 0.8rem;
        }
    </style>


</head>

<body>



    @include('.social.general.preloader')


    <section>

        <div class="container">
            <div class="row">




                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2 mb-4">


                    <h1 style="text-align: center; color: white; margin-top: 40px">Get Started</h1>
                    <p style="text-align: center; color: white; ">Choose the plan that's right for you</p>

                    <section class="pricing py-4">
                        <div class="container">
                            <div class="row">
                                <!-- Free Tier -->
                                <div class="col-lg-4">
                                    <div class="card mb-5 mb-lg-0" style="background-color: #c6d4d5; border-radius: 20px;">
                                        <div class="card-body">
                                            <h5 class="card-title text-muted text-uppercase text-center">For Filmmakers</h5>
                                            <h6 class="card-price text-center">Free</h6>
                                            <hr>
                                            <ul class="fa-ul" style="min-height: 200px">
                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Create Profile</li>
                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Watch Filmmakers Tutorials</li>

{{--                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>--}}
{{--                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>--}}
{{--                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>--}}
{{--                                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited--}}
{{--                                                    Private Projects</li>--}}
{{--                                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated--}}
{{--                                                    Phone Support</li>--}}
{{--                                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain--}}
{{--                                                </li>--}}
{{--                                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status--}}
{{--                                                    Reports</li>--}}


                                            </ul>
                                            <div class="d-grid">
                                                <a href="{{url('/profile')}}" class="btn btn-primary text-uppercase" style="background-color: #0d6efd; color: white; border: 0px; border-radius: 50px;">Start Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Plus Tier -->
                                <div class="col-lg-4">
                                    <div class="card mb-5 mb-lg-0" style="background-color: #c6d4d5; border-radius: 20px;">
                                        <div class="card-body">
                                            <h5 class="card-title text-muted text-uppercase text-center">For Content Creators</h5>
                                            <h6 class="card-price text-center">$79<span class="period">/year</span></h6>
                                            <hr>
                                            <ul class="fa-ul" style="min-height: 200px">
{{--                                                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Filmmakers Package+</strong></li>--}}

                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Filmmakers Package+</li>
                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Watch content creators tutorials</li>
                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Three free entries for IAM festival</li>



{{--                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>--}}
{{--                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>--}}
{{--                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>--}}
{{--                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>--}}
{{--                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Subdomain</li>--}}
{{--                                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status--}}
{{--                                                    Reports</li>--}}
                                            </ul>
                                            <div class="d-grid">
                                                <a href="{{url('/subscribe')}}" class="btn btn-primary text-uppercase" style="background-color: #0d6efd; color: white; border: 0px; border-radius: 50px;">Start Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pro Tier -->
                                <div class="col-lg-4">
                                    <div class="card" style="background-color: #c6d4d5; border-radius: 20px;">
                                        <div class="card-body">
                                            <h5 class="card-title text-muted text-uppercase text-center">For Influencers</h5>
                                            <h6 class="card-price text-center">$159<span class="period">/year</span></h6>
                                            <hr>
                                            <ul class="fa-ul" style="min-height: 200px">
{{--                                                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited Users</strong>--}}
{{--                                                </li>--}}
                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Content Creators Package+</li>
                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Watch all tutorials </li>
                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>10 Free entries for IAM Festival</li>
                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Join IAM Market for networking with sponsors</li>
{{--                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>--}}
{{--                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>--}}
{{--                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>--}}
{{--                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>--}}
{{--                                                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited</strong> Free--}}
{{--                                                    Subdomains</li>--}}
{{--                                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>--}}
                                            </ul>
                                            <div class="d-grid">
                                                <a href="{{url('/subscribe')}}" class="btn btn-primary text-uppercase" style="background-color: #0d6efd; color: white; border: 0px; border-radius: 50px;">Start Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                </div>


            </div>
        </div>

    </section>


    @include('.social.general.script')


</body>
</html>
