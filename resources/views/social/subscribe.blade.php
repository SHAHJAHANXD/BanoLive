<!DOCTYPE html>
<html lang="en" data-textdirection="ltr">
<head>

    @include('.front.general.meta-title')
    @include('.front.general.favicon')
    @include('.front.general.external-css')
    @include('.front.general.style')



    <style>



    </style>


</head>

<body>



    @include('.social.general.preloader')


    <section>

        <div class="container">
            <div class="row">




                <div class="col-12 col-sm-12 col-md-4 col-lg-4 offset-lg-4 offset-md-4">


                    <div class="text-center mb-2 mt-5 mb-4">

                        <h2 class="font-weight-bold" style="color: white">Subscribe</h2>
                        <p style="text-align: center; color: white; ">Choose the plan that's right for you</p>
                    </div>


                    <form>


                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                            <div class="form-group">


                                <select class="form-control" id="Package">

                                    <option value="">Package</option>
                                    <option value="CONTENT-CREATORS" selected>CONTENT CREATORS</option>
                                    <option value="INFLUENCERS">INFLUENCERS</option>

                                </select>
                            </div>
                        </div>


                        <div class="form-group mt-5">
                            {{--                                    <label for="first_name">First Name</label>--}}
                            <input type="text" class="form-control" id="card_name" aria-describedby="card_name" placeholder="Card Holder's Name">
                        </div>


                        <div class="form-group mt-4">
                            {{--                                    <label for="first_name">First Name</label>--}}
                            <input type="text" class="form-control" id="card_number" aria-describedby="card_number" placeholder="Card Number">
                        </div>



                        <div class="row mt-4">

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">


                                    <select class="form-control" id="month">

                                        <option value="">Month</option>

                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">


                                    <select class="form-control" id="year">

                                        <option value="">Year</option>

                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 ">


                                <div class="form-group">
                                    {{--                                    <label for="first_name">First Name</label>--}}
                                    <input type="text" class="form-control" id="cvc" aria-describedby="card_name" placeholder="CVC">
                                </div>
                            </div>

                        </div>



                        <div class="form-group mt-5">
                            {{--                                    <label for="first_name">First Name</label>--}}
                            <input type="text" class="form-control" id="promo_code" aria-describedby="card_number" placeholder="Promo Code">
                        </div>



                        <button type="submit" id="subscribe" class="btn custom-button mt-5">Subscribe</button>
                    </form>


                    <div class="mt-3 text-center" id="alert" style="color: white"></div>
                    <div class="mt-3 text-center" id="loading" style="display: none">
                        <img src="{{url('/front/img/loading.gif')}}" alt="">
                    </div>


                </div>


            </div>
        </div>

    </section>


    @include('.social.general.script')


</body>
</html>
