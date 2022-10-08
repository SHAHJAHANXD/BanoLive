<!DOCTYPE html>
<html lang="en" data-textdirection="ltr">
<head>

    @include('.front.general.meta-title')
    @include('.front.general.favicon')
    @include('.front.general.external-css')
    @include('.front.general.style')



    <style>
        .scroll {
            overflow: scroll;
        }
        .scroll::-webkit-scrollbar {
            width: 12px;
        }

        .scroll::-webkit-scrollbar-track {
            /*-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);*/
            border-radius: 10px;
        }

        .scroll::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
        }




        .dropdown-menu-scroll-box{
            overflow: scroll;
            height: 300px;
            overflow-x: hidden;
            margin-right: 4px;
        }


        .scroll::-webkit-scrollbar {
            width: 8px;
        }

        .scroll::-webkit-scrollbar-track {
            /*-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);*/
            border-radius: 10px;
        }

        /*.scroll::-webkit-scrollbar-thumb {*/
        /*    border-radius: 10px;*/
        /*    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);*/

        /*}*/


        /*!* Handle on hover *!*/
        /*.scroll::-webkit-scrollbar-thumb:hover {*/
        /*    background: rgba(0,0,0,0.2);*/
        /*}*/


        .sign-in {
            background: url(https://malpakistan.thevistech.com/front/img/home-banner.png) center center no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: contain;
            -o-background-size: contain;
            background-size: cover;
            height: 100vh;
        }



        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }



    </style>


</head>

<body>



@include('.front.general.preloader')

@include('.front.general.header')



<!------------------Section---------------------------------------------------->
<section class="mb-3 mt-5">
    <div class="container">
        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">



                {{-- Step 0 --}}
                <div id="step0" style="display: block">

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mx-auto">

                            <div class="ch-1 text-dark text-center">Sign Up for Host</div>


                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                <label for="reference_code">Agency Code*</label>
                                <input type="text" id="reference_code" class="form-control form-control-lg" value="{{$agency_code}}" placeholder="Agency Code*">
                                <small id="reference_code_alert" style="color: red;"></small>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                                <button type="button" id="move_step1" class="btn btn-danger w-100 m-auto mt-4 mb-4">CONTINUE</button>
                            </div>




                            <div class="ch-7 text-muted text-dark text-center mt-2">Already have an Account? <a href="{{url('/sign-in')}}" class="text-dark fb">Sign In</a></div>




                        </div>
                    </div>

                </div>
                {{-- /Step 0 --}}



                {{-- Step 1 --}}
                <div id="step1" style="display: none">

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mx-auto">

                            <div class="ch-1 text-dark text-center">Account Details</div>


                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="email_address">Email Address*</label>
                                    <input type="text" id="email_address" class="form-control form-control-lg" placeholder="Email Address*" maxlength="50">
                                    <small id="email_address_alert" style="color: red;"></small>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">

                                    <label for="country_code">Country Code*</label>

                                    <select class="form-control" id="country_code">

                                        <option value="">Select Country Code*</option>

                                        @foreach($CountryCodes as $CountryCodesTemp)
                                            <option value="{{$CountryCodesTemp->id}}">{{$CountryCodesTemp->country_title}} ({{$CountryCodesTemp->code}})</option>
                                        @endforeach

                                    </select>

                                    <small id="country_code_alert" style="color: red;"></small>


                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">

                                    <label for="number">Phone Number*</label>
                                    <input type="text" id="number" class="form-control form-control-lg" placeholder="Phone Number*" maxlength="15" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                    <small id="number_alert" style="color: red;"></small>

                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="password">Password*</label>
                                    <input type="password" id="password" class="form-control form-control-lg" placeholder="Password*" maxlength="20">
                                    <small id="password_alert" style="color: red;"></small>
                                </div>




                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                                    <button type="button" id="back_step0" class="btn btn-light w-100 m-auto mt-4 mb-4">BACK</button>
                                </div>

                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                                    <button type="button" id="move_step2" class="btn btn-danger w-100 m-auto mt-4 mb-4">CONTINUE</button>
                                </div>

                            </div>




                            <div class="ch-7 text-muted text-dark text-center mt-2">Already have an Account? <a href="{{url('/sign-in')}}" class="text-dark fb">Sign In</a></div>




                        </div>
                    </div>

                </div>
                {{-- /Step 1 --}}



                {{-- Step 2 --}}
                <div id="step2" style="display: none">


                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mx-auto">

                            <div class="ch-1 text-dark text-center">Personal Details</div>

                            <div class="row">


                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2 text-center">


                                    <div style="position: relative; height: 150px; width: 150px; margin: 0 auto">

                                        <img src="{{url('general/img/default-user.jpg')}}" id="profile_avatar" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%">


                                        <div style="position:absolute; bottom: 5px; right: 10px;">

                                            <div class="upload-btn-wrapper" style="position: relative; overflow: hidden;">
                                                <button type="button" style="background-color:#229afa; padding: 5px; border-radius: 50px; height: 35px; width: 35px; color:white; border:0px;"><i class="fas fa-camera"></i></button>
                                                <input type="file" id="profile_picture" onchange="document.getElementById('profile_avatar').src = window.URL.createObjectURL(this.files[0]);" accept=".png,.jpg,.jpeg">
                                                <input type="text" id="profile_picture_details" hidden>
                                            </div>

                                        </div>



                                    </div>

                                    <label class="text-center" for="profile_picture">Select your profile photo*</label>

                                    <div id="profile_picture_alert" style="text-align: center; display: none; margin-top: 10px"></div>

                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="full_name">Full Name*</label>
                                    <input type="text" id="full_name" class="form-control form-control-lg" placeholder="Name*" oninput="this.value = this.value.replace(/[^a-zA-Z .]/g, '').replace(/(\..*)\./g, '$1');" maxlength="60">
                                    <small id="full_name_alert" style="color: red;"></small>
                                </div>





                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">

                                    <label for="gender">Gender*</label>

                                    <select class="form-control" id="gender">
                                        <option value="" selected>Gender*</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>

                                    <small id="gender_alert" style="color: red;"></small>
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-4">
                                    <label for="resume">Your resume (Optional)</label>
                                    <input type="file" id="resume" class="form-control form-control-lg" value="" placeholder="Select Resume" accept=".doc,.docx,.pdf,.xls">
                                    <input type="text" id="resume_details" hidden>

                                    <small id="resume_alert" style="color: red;"></small>
                                </div>




                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">

                                    <label for="country">Country*</label>

                                    <select class="form-control" id="country">

                                        <option value="">Select Country*</option>

                                        @foreach($Countries as $CountriesTemp)
                                            <option value="{{$CountriesTemp->id}}">{{$CountriesTemp->name}}</option>
                                        @endforeach

                                    </select>

                                    <small id="country_alert" style="color: red;"></small>


                                </div>


                                {{--                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">--}}

                                {{--                                    <label for="province">Province or State*</label>--}}

                                {{--                                    <select class="form-control" id="province">--}}

                                {{--                                        <option value="">Select Province*</option>--}}

                                {{--                                        @foreach($Provinces as $ProvincesTemp)--}}
                                {{--                                            <option value="{{$ProvincesTemp->id}}">{{$ProvincesTemp->title}}</option>--}}
                                {{--                                        @endforeach--}}

                                {{--                                    </select>--}}

                                {{--                                    <small id="province_alert" style="color: red;"></small>--}}


                                {{--                                </div>--}}


                                {{--                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">--}}

                                {{--                                    <label for="city">City*</label>--}}

                                {{--                                    <select class="form-control" id="city">--}}

                                {{--                                        <option value="">Select City*</option>--}}

                                {{--                                        @foreach($Cities as $CitiesTemp)--}}
                                {{--                                            <option value="{{$CitiesTemp->id}}">{{$CitiesTemp->name}}</option>--}}
                                {{--                                        @endforeach--}}

                                {{--                                    </select>--}}

                                {{--                                    <small id="city_alert" style="color: red;"></small>--}}


                                {{--                                </div>--}}

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="address_1">Address 1</label>
                                    <input type="text" id="address_1" class="form-control form-control-lg" placeholder="Street Address Line 1" maxlength="40">
                                    <small id="address_1_alert" style="color: red;"></small>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="address_2">Address 2</label>
                                    <input type="text" id="address_2" class="form-control form-control-lg" placeholder="Street Address Line 2" maxlength="40">
                                    <small id="address_2_alert" style="color: red;"></small>
                                </div>

                                {{--                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">--}}
                                {{--                                    <label for="zip">Zip /Postal Code</label>--}}
                                {{--                                    <input type="text" id="zip" class="form-control form-control-lg" placeholder="Zip /Postal Code" maxlength="40">--}}
                                {{--                                    <small id="zip_alert" style="color: red;"></small>--}}
                                {{--                                </div>--}}




                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                                    <button type="button" id="back_step1" class="btn btn-light w-100 m-auto mt-4 mb-4">BACK</button>
                                </div>

                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                                    <button type="button" id="move_step3" class="btn btn-danger w-100 m-auto mt-4 mb-4">CONTINUE</button>
                                </div>
                            </div>




                        </div>
                    </div>

                </div>
                {{-- /Step 2 --}}




                {{-- Step 3 --}}
                <div id="step3" style="display: none">


                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mx-auto">



                            <div class="ch-1 text-dark text-center">Identity Verification</div>

                            <div class="row mt-4">

                                <div class="col-sm-12 col-md-6 col-lg-6 mt-2">

                                    <div class="bg-light text-center account-created-box-2" style=" height: 150px">

                                        <div class="upload-section-front" style="display: block; padding-top: 50px">

                                            <i class="fas fa-camera ch-6 text-muted"> Upload Photo
                                                <input type="file" class="position-absolute" id="front_gov_id" onchange="document.getElementById('front_gov_id_picture').src = window.URL.createObjectURL(this.files[0]);">
                                                <input type="text" id="front_gov_id_details" hidden>
                                            </i>

                                            <div class="ch-7 text-center mt-2">Prove of ID (Front)</div>

                                        </div>
                                        <div class="display-section-front" style="display: none;">

                                            <div style="position: absolute; top: 5px; right: 5px; cursor: pointer">

                                                <div style="background-color: red; color: white; padding: 5px; border-radius: 5px; font-size: 12px; text-align: center; width: 30px; height: 30px" id="delete_front_gov_id">
                                                    <i class="fas fa-trash-alt"></i>
                                                </div>

                                            </div>

                                            <img src="" id="front_gov_id_picture" style="height: 100%; width: 100%; object-fit: cover">

                                        </div>

                                    </div>


                                    <div id="front_gov_id_loading" style="text-align: center; display: none; margin-top: 10px"></div>
                                    <div id="front_gov_id_alert" style="text-align: center; display: none; margin-top: 10px"></div>

                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6 mt-2">

                                    <div class="bg-light text-center account-created-box-2" style=" height: 150px">

                                        <div class="upload-section-back" style="display: block; padding-top: 50px">

                                            <i class="fas fa-camera ch-6 text-muted"> Upload Photo
                                                <input type="file" class="position-absolute" id="back_gov_id" onchange="document.getElementById('back_gov_id_picture').src = window.URL.createObjectURL(this.files[0]);">
                                                <input type="text" id="back_gov_id_details" hidden>

                                            </i>

                                            <div class="ch-7 text-center mt-2">Prove of ID (Back)</div>

                                        </div>
                                        <div class="display-section-back" style="display: none;">

                                            <div style="position: absolute; top: 5px; right: 5px; cursor: pointer">

                                                <div style="background-color: red; color: white; padding: 5px; border-radius: 5px; font-size: 12px; text-align: center; width: 30px; height: 30px" id="delete_back_gov_id">
                                                    <i class="fas fa-trash-alt"></i>
                                                </div>

                                            </div>

                                            <img src="" id="back_gov_id_picture" style="height: 100%; width: 100%; object-fit: cover">

                                        </div>

                                    </div>


                                    <div id="back_gov_id_loading" style="text-align: center; display: none; margin-top: 10px"></div>
                                    <div id="back_gov_id_alert" style="text-align: center; display: none; margin-top: 10px"></div>



                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="id_number">Prove of ID Number</label>
                                    <input type="text" id="id_number" class="form-control form-control-lg" placeholder="Enter Prove of ID Number*">
                                    <small id="id_number_alert" style="color: red;"></small>
                                </div>

                            </div>

                            <div class="ch-7 text-black fb mt-3">Ensure that the document meet all the standard below:</div>

                            <div class="account-created-bullet mt-3 text-muted ch-7">
                                <ul>
                                    <li>
                                        Readable, clear and well-lit
                                    </li>
                                    <li>
                                        Not reflective, not blurry
                                    </li>
                                    <li>
                                        No black and white images, no edited
                                    </li>
                                    <li>
                                        Document is placed against a solid-colored background
                                    </li>

                                </ul>
                            </div>



                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                                    <button type="button" id="back_step2" class="btn btn-light w-100 m-auto mt-4 mb-4">BACK</button>
                                </div>

                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                                    <button type="button" id="move_step4" class="btn btn-danger w-100 m-auto mt-4 mb-4">CONTINUE</button>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                {{-- /Step 3 --}}



                {{-- Step 4 --}}
                <div id="step4" style="display: none">


                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mx-auto">


                            <div class="ch-1 text-dark text-center">Company Details</div>


                            <div class="row">



                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="company_name">Company Name</label>
                                    <input type="text" id="company_name" class="form-control form-control-lg" placeholder="Company Name (Optional)" maxlength="70">
                                    <small id="company_name_alert" style="color: red;"></small>
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="company_registration_number">Company Registration Number</label>
                                    <input type="text" id="company_registration_number" class="form-control form-control-lg" placeholder="Company Registration Number (Optional)" maxlength="40">
                                    <small id="company_registration_number_alert" style="color: red;"></small>
                                </div>




                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">

                                    <label for="company_country">Country</label>

                                    <select class="form-control" id="company_country">

                                        <option value="">Select Country</option>

                                        @foreach($Countries as $CountriesTemp)
                                            <option value="{{$CountriesTemp->id}}">{{$CountriesTemp->name}}</option>
                                        @endforeach

                                    </select>

                                    <small id="company_country_alert" style="color: red;"></small>


                                </div>


                                {{--                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">--}}

                                {{--                                    <label for="company_province">Province or State*</label>--}}

                                {{--                                    <select class="form-control" id="company_province">--}}

                                {{--                                        <option value="">Select Province*</option>--}}

                                {{--                                        @foreach($Provinces as $ProvincesTemp)--}}
                                {{--                                            <option value="{{$ProvincesTemp->id}}">{{$ProvincesTemp->title}}</option>--}}
                                {{--                                        @endforeach--}}

                                {{--                                    </select>--}}

                                {{--                                    <small id="company_province_alert" style="color: red;"></small>--}}


                                {{--                                </div>--}}


                                {{--                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">--}}

                                {{--                                    <label for="company_city">City*</label>--}}

                                {{--                                    <select class="form-control" id="company_city">--}}

                                {{--                                        <option value="">Select City*</option>--}}

                                {{--                                        @foreach($Cities as $CitiesTemp)--}}
                                {{--                                            <option value="{{$CitiesTemp->id}}">{{$CitiesTemp->name}}</option>--}}
                                {{--                                        @endforeach--}}

                                {{--                                    </select>--}}

                                {{--                                    <small id="company_city_alert" style="color: red;"></small>--}}


                                {{--                                </div>--}}

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="company_address_1">Address 1</label>
                                    <input type="text" id="company_address_1" class="form-control form-control-lg" placeholder="Street Address Line 1" maxlength="40">
                                    <small id="company_address_1_alert" style="color: red;"></small>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="company_address_2">Address 2</label>
                                    <input type="text" id="company_address_2" class="form-control form-control-lg" placeholder="Street Address Line 2" maxlength="40">
                                    <small id="company_address_2_alert" style="color: red;"></small>
                                </div>

                                {{--                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">--}}
                                {{--                                    <label for="company_zip">Zip /Postal Code</label>--}}
                                {{--                                    <input type="text" id="company_zip" class="form-control form-control-lg" placeholder="Zip /Postal Code" maxlength="10">--}}
                                {{--                                    <small id="company_zip_alert" style="color: red;"></small>--}}
                                {{--                                </div>--}}


                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                                    <button type="button" id="back_step3" class="btn btn-light w-100 m-auto mt-4 mb-4">BACK</button>
                                </div>

                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                                    <button type="button" id="move_step5" class="btn btn-danger w-100 m-auto mt-4 mb-4">CONTINUE</button>
                                </div>
                            </div>

                        </div>

                    </div>




                </div>




                {{-- Step 5 --}}
                <div id="step5" style="display: none">


                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mx-auto">




                            <div class="ch-1 text-dark text-center">Bank Details</div>


                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="bank_name">Bank Name*</label>
                                    <input type="text" id="bank_name" class="form-control form-control-lg" placeholder="Enter Bank Name*">
                                    <small id="bank_name_alert" style="color: red;"></small>
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="iban">IBAN*</label>
                                    <input type="text" id="iban" class="form-control form-control-lg" placeholder="Enter IBAN*">
                                    <small id="iban_alert" style="color: red;"></small>
                                </div>



                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="swift_bic_code">Swift Code / BIC*</label>
                                    <input type="text" id="swift_bic_code" class="form-control form-control-lg" placeholder="Enter Swift Code / BIC*">
                                    <small id="swift_bic_code_alert" style="color: red;"></small>
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="branch_code">Branch Code (Optional)</label>
                                    <input type="text" id="branch_code" class="form-control form-control-lg" placeholder="Enter Branch Code">
                                    <small id="branch_code_alert" style="color: red;"></small>
                                </div>




                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="account_title">Account Title*</label>
                                    <input type="text" id="account_title" class="form-control form-control-lg" placeholder="Enter Account Title*">
                                    <small id="account_title_alert" style="color: red;"></small>
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="account_number">Account Number*</label>
                                    <input type="text" id="account_number" class="form-control form-control-lg" placeholder="Enter Account Number*">
                                    <small id="account_number_alert" style="color: red;"></small>
                                </div>



                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                                    <button type="button" id="back_step4" class="btn btn-light w-100 m-auto mt-4 mb-4">BACK</button>
                                </div>

                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                                    <button type="button" id="move_step6" class="btn btn-danger w-100 m-auto mt-4 mb-4">CONTINUE</button>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>



                {{-- Step 6 --}}
                <div id="step6" style="display: none">




                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mx-auto">


                            <div class="ch-1 text-dark text-center">Terms and Policies</div>


                            <div style="height: calc(100vh);" class="dropdown-menu-scroll-box scroll mt-4">

                                {!! $Settings->host_terms_and_conditions !!}

                            </div>

                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="terms_and_conditions">
                                        <label class="form-check-label" for="terms_and_conditions">I accept the terms and conditions</label>
                                    </div>
                                </div>



                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                                    <button type="button" id="back_step5" class="btn btn-light w-100 m-auto mt-4 mb-4">BACK</button>
                                </div>

                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-2">
                                    <button type="button" id="submit" class="btn btn-danger w-100 m-auto mt-4 mb-4">Submit</button>
                                </div>


                            </div>

                        </div>

                    </div>

                </div>



                {{-- Step 7 --}}
                <div id="step7" style="display: none">




                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mx-auto text-center">

                            <div style="text-align: center; font-size: 100px">
                                <i class="far fa-check-circle"></i>
                            </div>


                            <div style="font-size: 20px; font-weight: bolder">Thank you for submitting form</div>
                            <p class="mt-3">We have received your application.<br> We will contact you after reviewing your application</p>


                            <div style="text-align: center"><a href="{{url('/sign-in')}}" class="btn btn-danger rounded-pill">Sign In to Your Account</a></div>

{{--                            <div id="link" style="background-color: #e3e3e3; border-radius: 10px; margin-top: 30px; padding: 20px; font-weight: bolder; cursor: pointer; margin-bottom: 50px;">--}}
{{--                                https://banolive.com/sign-up/host--}}
{{--                            </div>--}}

                        </div>

                    </div>

                </div>



                <div class="mt-3 text-center" id="alert" style="color: black"></div>

                <div class="mt-3 text-center" id="loading" style="display: none">
                    <img src="{{url('/general/img/loading.gif')}}" alt="">
                </div>


            </div>


        </div>
    </div>
</section>
<!------------------/ Section----------------------------------------------->

@include('.front.general.footer')

@include('.front.general.script')

<script>
    $( document ).ready(function() {
        $("#link").click(function(event){
            var range = document.createRange();
            range.selectNode(document.getElementById("link"));
            window.getSelection().removeAllRanges(); // clear current selection
            window.getSelection().addRange(range); // to select text
            document.execCommand("copy");
            window.getSelection().removeAllRanges();// to deselect
            alert('Copied to Clipboard');
        });
    });
</script>



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


    function validateFileExtension(data) {
        var re = /\.(xls|pdf|docx|doc)$/;
        return re.test(data);
    }


    function validateVideoExtension(data) {
        var re = /\.(mp4|flv|wmv)$/;
        return re.test(data);
    }











    jQuery("#profile_picture").change(function () {


        var inc = 0;

        var extension = $(this).val().toLowerCase();
        var file = $(this).prop('files').item(0);

        if (file === null) {
            alert('Please select file');
        } else {

            if (validateImageExtension(extension)) {

                if(file.size <= 10000000){



                    var config    =  project.Config;
                    var dataApiUrl   = config.getApiUrl();
                    var dataAppUrl   = config.getAppUrl();



                    var data =new FormData();
                    data.append('file',file);

                    $.ajax({
                        url: dataApiUrl+'/sign-up/upload/user/picture',
                        type:'POST',
                        timeout: 0, //Set your timeout value in milliseconds or 0 for unlimited
                        data: data,
                        dataType:'json',
                        processData: false,
                        contentType: false,
                        //headers: {"Authorization": "Bearer " + dataTokenGet.access_token},

                        beforeSend: function(){
                            $('#move_step3').attr('disabled', 'disabled');
                        },


                        xhr: function () {

                            $("#profile_picture_alert").css("display", "block");

                            var xhr = new window.XMLHttpRequest();
                            xhr.upload.addEventListener("progress", function (evt) {
                                if (evt.lengthComputable) {
                                    var percentComplete = evt.loaded / evt.total;
                                    percentComplete = parseInt(percentComplete * 100);
                                    $('#profile_picture_alert').text(percentComplete + '%');
                                }
                            }, false);
                            return xhr;
                        },

                        success: function(data) {

                            $('#move_step3').removeAttr('disabled');
                            $("#profile_picture_alert").css("display", "none");

                            if(data.response.code == 200){

                                $("#profile_picture_details").val(data.response.fileName);

                            } else{

                                alert(data.response.message);

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

                    alert('Allowed file size exceeded. (Max. 10 MB)');

                }

            } else {

                alert('Only JPG, PNG, GIF File allowed.');

            }

        }


    });



    jQuery("#resume").change(function () {


        var inc = 0;

        var extension = $(this).val().toLowerCase();
        var file = $(this).prop('files').item(0);

        if (file === null) {
            alert('Please select file');
        } else {

            if (validateFileExtension(extension)) {

                if(file.size <= 10000000){



                    var config    =  project.Config;
                    var dataApiUrl   = config.getApiUrl();
                    var dataAppUrl   = config.getAppUrl();



                    var data =new FormData();
                    data.append('file',file);

                    $.ajax({
                        url: dataApiUrl+'/sign-up/upload/user/resume',
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

                            if(data.response.code == 200){

                                $("#resume_details").val(data.response.fileName);

                            } else{

                                alert(data.response.message);

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

                    alert('Allowed file size exceeded. (Max. 10 MB)');

                }

            } else {

                alert('Only xls, pdf, docx, doc File allowed.');

            }

        }


    });





    $('#submit').on('click',function (e) {
        e.preventDefault();



        var inc=0;


        var reference_code=$('#reference_code').val();
        var email_address=$('#email_address').val();
        var country_code=$('#country_code').val();
        var number=$('#number').val();
        var password=$('#password').val();


        var profile_picture_details=$('#profile_picture_details').val();

        var full_name=$('#full_name').val();
        var gender=$('#gender').val();
        var resume_details=$('#resume_details').val();
        var address=$('#address').val();

        var front_gov_id_details=$('#front_gov_id_details').val();
        var back_gov_id_details=$('#back_gov_id_details').val();

        var id_number=$('#id_number').val();




        var company_name=$('#company_name').val();
        var company_registration_number=$('#company_registration_number').val();
        var company_address=$('#company_address').val();


        var bank_name=$('#bank_name').val();
        var iban=$('#iban').val();
        var swift_bic_code=$('#swift_bic_code').val();
        var branch_code=$('#branch_code').val();
        var account_title=$('#account_title').val();
        var account_number=$('#account_number').val();


        var terms_and_conditions = $('#terms_and_conditions').prop('checked');



        if (reference_code === '') {
            $('#reference_code').css("border", "1px solid red");
            $("#reference_code_alert").css("display", "block").text('Reference code is required');
            return null;
        } else {
            if (validatenum(country_code)) {
                $('#reference_code').css("border", "1px solid #ccc");
            } else {
                $('#reference_code').css("border", "1px solid red");
                $("#reference_code_alert").css("display", "block").text('Reference code is invalid');
                return null;
            }
        }


        if (email_address === '') {
            $('#email_address').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Email address is required');
            return null;
        } else {
            if (validateEmail(email_address)) {
                $('#email_address').css("border", "1px solid #ccc");
            } else {
                $('#email_address').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Email address is invalid');
                return null;
            }
        }

        if (country_code === '') {
            $('#country_code').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Country code is required');
            return null;
        } else {
            if (validatenum(country_code)) {
                $('#country_code').css("border", "1px solid #ccc");
            } else {
                $('#country_code').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Country code is invalid');
                return null;
            }
        }

        if (number !== '') {

            if (validatenum(number)) {
                $('#number').css("border", "1px solid #ccc");
            } else {
                $('#number').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Number is invalid');
                return null;
            }

        } else {
            $('#number').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Number is required');
            return null;
        }

        if (password !== '' && password !== ' ' && password !== null) {

            if(password.length>=6){
                $('#password').css("border", "1px solid #ccc");
            }else {
                $('#password').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Use a minimum password length of 6 or more characters');
                return null;
            }

        }else{
            $('#password').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Password is required');
            return null;
        }






        if (profile_picture_details !== '') {

            $('#profile_picture_details').css("border", "1px solid #ccc");

        } else {
            $('#profile_picture_details').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Profile picture is required');
            return null;
        }

        if (full_name !== '') {

            if (validatealpha(full_name)) {
                $('#full_name').css("border", "1px solid #ccc");
            } else {
                $('#full_name').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Full name is invalid');
                return null;
            }

        } else {
            $('#full_name').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Full name is required');
            return null;
        }

        if (gender !== '') {

            if (validatealpha(gender)) {
                $('#gender').css("border", "1px solid #ccc");
            } else {
                $('#gender').css("border", "1px solid red");
                $("#alert").css("display", "block").text('Gender is invalid');
                return null;
            }

        } else {
            $('#gender').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Gender is required');
            return null;
        }

        if (address !== '') {

            $('#address').css("border", "1px solid #ccc");

        } else {
            $('#address').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Address is required');
            return null;
        }



        if (front_gov_id_details !== '') {

            $('#front_gov_id_details').css("border", "1px solid #ccc");

        } else {
            $('#front_gov_id_details').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Front ID is required');
            return null;
        }

        if (back_gov_id_details !== '') {

            $('#back_gov_id_details').css("border", "1px solid #ccc");

        } else {
            $('#back_gov_id_details').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Back ID is required');
            return null;
        }

        if (id_number !== '') {

            $('#id_number').css("border", "1px solid #ccc");

        } else {
            $('#id_number').css("border", "1px solid red");
            $("#alert").css("display", "block").text('ID is required');
            return null;
        }



        if (bank_name !== '') {

            $('#bank_name').css("border", "1px solid #ccc");

        } else {
            $('#bank_name').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Bank Name is required');
            return null;
        }

        if (iban !== '') {

            $('#iban').css("border", "1px solid #ccc");

        } else {
            $('#iban').css("border", "1px solid red");
            $("#alert").css("display", "block").text('IBAN is required');
            return null;
        }

        if (swift_bic_code !== '') {

            $('#swift_bic_code').css("border", "1px solid #ccc");

        } else {
            $('#swift_bic_code').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Swift Code / BIC is required');
            return null;
        }

        // if (branch_code !== '') {
        //
        //     $('#branch_code').css("border", "1px solid #ccc");
        //
        // } else {
        //     $('#branch_code').css("border", "1px solid red");
        //     $("#alert").css("display", "block").text('Branch Code is required');
        //     return null;
        // }

        if (account_title !== '') {

            $('#account_title').css("border", "1px solid #ccc");

        } else {
            $('#account_title').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Account title is required');
            return null;
        }

        if (account_number !== '') {

            $('#account_number').css("border", "1px solid #ccc");

        } else {
            $('#account_number').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Account Number is required');
            return null;
        }





        if(terms_and_conditions===false){

            $('#bank_name').css("border", "1px solid red");
            $("#alert").css("display", "block").text('Please accept terms and conditions is required');
            return null;
        }



        if(inc===0){

            var config    =  project.Config;
            var dataApiUrl   = config.getApiUrl();
            var dataAppUrl   = config.getAppUrl();
            var dataTokenGet = config.getToken();

            var fdata =new FormData();
            fdata.append('reference_code',reference_code);
            fdata.append('email',email_address);
            fdata.append('country_code',country_code);
            fdata.append('number',number);
            fdata.append('password',password);

            fdata.append('profile_picture_details',profile_picture_details);
            fdata.append('full_name',full_name);
            fdata.append('gender',gender);
            fdata.append('resume_details',resume_details);
            fdata.append('address',address);

            fdata.append('front_gov_id_details',front_gov_id_details);
            fdata.append('back_gov_id_details',back_gov_id_details);
            fdata.append('id_number',id_number);

            fdata.append('company_name',company_name);
            fdata.append('company_registration_number',company_registration_number);
            fdata.append('company_address',company_address);

            fdata.append('bank_name',bank_name);
            fdata.append('iban',iban);
            fdata.append('swift_bic_code',swift_bic_code);
            fdata.append('branch_code',branch_code);
            fdata.append('account_title',account_title);
            fdata.append('account_number',account_number);

            fdata.append('terms_and_conditions',terms_and_conditions);



            $.ajax({
                url: dataApiUrl+'/sign-up/host',
                data: fdata,
                type: 'POST',
                timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                dataType:'json',
                processData: false,
                contentType: false,


                beforeSend: function(){

                    $('#full_name').attr('disabled', 'disabled');
                    $('#email_address').attr('disabled', 'disabled');
                    $('#number').attr('disabled', 'disabled');
                    $('#password').attr('disabled', 'disabled');
                    $('#confirm_password').attr('disabled', 'disabled');

                    $('#submit').attr('disabled', 'disabled');

                    $("#alert").css("display", "none");
                    $("#loading").css("display", "block");

                },


                success:function(data){


                    $("#loading").css("display", "none");


                    $('#full_name').removeAttr('disabled');
                    $('#email_address').removeAttr('disabled');
                    $('#number').removeAttr('disabled');
                    $('#password').removeAttr('disabled');
                    $('#confirm_password').removeAttr('disabled');

                    $('#submit').removeAttr('disabled');


                    if(data['error']!=true){



                        $("#step1").hide();
                        $("#step2").hide();
                        $("#step3").hide();
                        $("#step4").hide();
                        $("#step5").hide();
                        $("#step6").hide();

                        $("#step7").show();

                    }else{
                        $("#alert").css("display", "block").text(data['message']);
                    }

                },
                error: function(xmlhttprequest, textstatus, message) {

                    if(textstatus==="timeout") {
                        $("#alert").css("display", "block").text('Timeout Please try again.');
                    }else {
                        if(navigator.onLine) {

                            if(textstatus==="error"){
                                $("#alert").css("display", "block").text(message);
                            }

                        }else {
                            $("#alert").css("display", "block").text('Check your internet connection then try again later.');
                        }
                    }

                    $("#loading").css("display", "none");

                    $('#full_name').removeAttr('disabled');
                    $('#email_address').removeAttr('disabled');
                    $('#number').removeAttr('disabled');
                    $('#password').removeAttr('disabled');
                    $('#confirm_password').removeAttr('disabled');

                    $('#submit').removeAttr('disabled');
                }


            });

        }else {
            $("#alert").css("display", "block").text('Something is wrong.');
        }


    });







    // ------------------------------------------------------------------------------

    $("#front_gov_id").change(function (){


        var inc = 0;

        var extension = $(this).val().toLowerCase();
        var file = $(this).prop('files').item(0);

        if(file!==null && file!==' ' && file!==''){

            $(".upload-section-front").hide();
            $(".display-section-front").show();

        }



        if (file === null) {
            alert('Please select file');
        } else {

            if (validateImageExtension(extension)) {

                if(file.size <= 10000000){



                    var config    =  project.Config;
                    var dataApiUrl   = config.getApiUrl();
                    var dataAppUrl   = config.getAppUrl();




                    var data =new FormData();
                    data.append('file',file);

                    $.ajax({
                        url: dataApiUrl+'/sign-up/upload/user/id/front',
                        type:'POST',
                        timeout: 0, //Set your timeout value in milliseconds or 0 for unlimited
                        data: data,
                        dataType:'json',
                        processData: false,
                        contentType: false,
                        //headers: {"Authorization": "Bearer " + dataTokenGet.access_token},

                        beforeSend: function(){

                            $("#front_gov_id_loading").css("display", "none");
                            $('#move_step4').attr('disabled', 'disabled');
                        },


                        xhr: function () {

                            $("#front_gov_id_loading").css("display", "block");

                            var xhr = new window.XMLHttpRequest();
                            xhr.upload.addEventListener("progress", function (evt) {
                                if (evt.lengthComputable) {
                                    var percentComplete = evt.loaded / evt.total;
                                    percentComplete = parseInt(percentComplete * 100);
                                    $('#front_gov_id_loading').text(percentComplete + '%');
                                }
                            }, false);
                            return xhr;
                        },

                        success: function(data) {

                            $('#move_step4').removeAttr('disabled');
                            $("#front_gov_id_loading").css("display", "none");
                            $("#front_gov_id_alert").css("display", "none");


                            if(data.response.code == 200){

                                $("#front_gov_id_details").val(data.response.fileName);

                            } else{

                                alert(data.response.message);

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

                    alert('Allowed file size exceeded. (Max. 10 MB)');

                }

            } else {

                alert('Only JPG, PNG, GIF File allowed.');

            }

        }

    });

    $("#delete_front_gov_id").click(function(){

        $(".display-section-front").hide();
        $(".upload-section-front").show();

    });


    $("#back_gov_id").change(function (){


        var inc = 0;

        var extension = $(this).val().toLowerCase();
        var file = $(this).prop('files').item(0);

        if(file!==null && file!==' ' && file!==''){

            $(".upload-section-back").hide();
            $(".display-section-back").show();

        }


        if (file === null) {
            alert('Please select file');
        } else {

            if (validateImageExtension(extension)) {

                if(file.size <= 10000000){



                    var config    =  project.Config;
                    var dataApiUrl   = config.getApiUrl();
                    var dataAppUrl   = config.getAppUrl();



                    var data =new FormData();
                    data.append('file',file);

                    $.ajax({
                        url: dataApiUrl+'/sign-up/upload/user/id/back',
                        type:'POST',
                        timeout: 0, //Set your timeout value in milliseconds or 0 for unlimited
                        data: data,
                        dataType:'json',
                        processData: false,
                        contentType: false,
                        //headers: {"Authorization": "Bearer " + dataTokenGet.access_token},

                        beforeSend: function(){
                            $("#back_gov_id_loading").css("display", "none");

                            $('#move_step4').attr('disabled', 'disabled');
                        },


                        xhr: function () {

                            $("#back_gov_id_loading").css("display", "block");

                            var xhr = new window.XMLHttpRequest();
                            xhr.upload.addEventListener("progress", function (evt) {
                                if (evt.lengthComputable) {
                                    var percentComplete = evt.loaded / evt.total;
                                    percentComplete = parseInt(percentComplete * 100);
                                    $('#back_gov_id_loading').text(percentComplete + '%');
                                }
                            }, false);
                            return xhr;
                        },

                        success: function(data) {



                            $('#move_step4').removeAttr('disabled');
                            $("#back_gov_id_loading").css("display", "none");
                            $("#back_gov_id_alert").css("display", "none");

                            if(data.response.code == 200){

                                $("#back_gov_id_details").val(data.response.fileName);


                            } else{

                                alert(data.response.message);

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

                    alert('Allowed file size exceeded. (Max. 10 MB)');

                }

            } else {

                alert('Only JPG, PNG, GIF File allowed.');

            }

        }

    });

    $("#delete_back_gov_id").click(function(){

        $(".display-section-back").hide();
        $(".upload-section-back").show();

    });

    // ------------------------------------------------------------------------------


    $("#move_step1").click(function(){


        var reference_code=$('#reference_code').val();


        if (reference_code === '') {
            $('#reference_code').css("border", "1px solid red");
            $("#reference_code_alert").css("display", "block").text('Reference code is required');
            return null;
        } else {


            if (validatenum(reference_code)) {


                var config    =  project.Config;
                var dataApiUrl   = config.getApiUrl();
                var dataAppUrl   = config.getAppUrl();
                var dataTokenGet = config.getToken();

                var fdata =new FormData();
                fdata.append('reference_code',reference_code);


                $.ajax({
                    url: dataApiUrl+'/user/validate/agency/code',
                    data: fdata,
                    type: 'POST',
                    timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                    dataType:'json',
                    processData: false,
                    contentType: false,


                    beforeSend: function(){

                        $("#loading").css("display", "block");

                    },


                    success:function(data){

                        $("#loading").css("display", "none");


                        if(data['error']!=true){


                            $('#reference_code').css("border", "1px solid #ccc");
                            $("#reference_code_alert").css("display", "none");



                            $("#step0").hide();
                            $("#step2 ").hide();
                            $("#step3 ").hide();
                            $("#step4").hide();
                            $("#step5").hide();
                            $("#step6").hide();
                            $("#step7").hide();

                            $("#step1").show();


                        }else{
                            $("#reference_code_alert").css("display", "block").text(data['message']);
                        }

                    },
                    error: function(xmlhttprequest, textstatus, message) {

                        if(textstatus==="timeout") {
                            $("#alert").css("display", "block").text('Timeout Please try again.');
                        }else {
                            if(navigator.onLine) {

                                if(textstatus==="error"){
                                    $("#alert").css("display", "block").text(message);
                                }

                            }else {
                                $("#alert").css("display", "block").text('Check your internet connection then try again later.');
                            }
                        }

                        $("#loading").css("display", "none");
                    }


                });







            } else {
                $('#reference_code').css("border", "1px solid red");
                $("#reference_code_alert").css("display", "block").text('Reference code is invalid');
                return null;
            }
        }


    });



    $("#move_step2").click(function(){

        var inc=0;

        var email_address=$('#email_address').val();
        var country_code=$('#country_code').val();
        var number=$('#number').val();
        var password=$('#password').val();

        if (email_address === '') {
            $('#email_address').css("border", "1px solid red");
            $("#email_address_alert").css("display", "block").text('Email address is required');
            return null;
        } else {
            if (validateEmail(email_address)) {

                $('#email_address').css("border", "1px solid #ccc");
                $("#email_address_alert").css("display", "none");

            } else {
                $('#email_address').css("border", "1px solid red");
                $("#email_address_alert").css("display", "block").text('Email address is invalid');
                return null;
            }
        }

        if (country_code === '') {
            $('#country_code').css("border", "1px solid red");
            $("#country_code_alert").css("display", "block").text('Country code is required');
            return null;
        } else {
            if (validatenum(country_code)) {
                $('#country_code').css("border", "1px solid #ccc");
                $("#country_code_alert").css("display", "none");
            } else {
                $('#country_code').css("border", "1px solid red");
                $("#country_code_alert").css("display", "block").text('Country code is invalid');
                return null;
            }
        }

        if (number !== '') {

            if (validatenum(number)) {
                $('#number').css("border", "1px solid #ccc");
                $("#number_alert").css("display", "none");
            } else {
                $('#number').css("border", "1px solid red");
                $("#number_alert").css("display", "block").text('Number is invalid');
                return null;
            }

        } else {
            $('#number').css("border", "1px solid red");
            $("#number_alert").css("display", "block").text('Number is required');
            return null;
        }

        if (password !== '' && password !== ' ' && password !== null) {

            if(password.length>=6){
                $('#password').css("border", "1px solid #ccc");
                $("#password_alert").css("display", "none");
            }else {
                $('#password').css("border", "1px solid red");
                $("#password_alert").css("display", "block").text('Use a minimum password length of 6 or more characters');
                return null;
            }

        }else{
            $('#password').css("border", "1px solid red");
            $("#password_alert").css("display", "block").text('Password is required');
            return null;
        }






        var config    =  project.Config;
        var dataApiUrl   = config.getApiUrl();
        var dataAppUrl   = config.getAppUrl();
        var dataTokenGet = config.getToken();

        var fdata =new FormData();
        fdata.append('email',email_address);


        $.ajax({
            url: dataApiUrl+'/user/validate/email',
            data: fdata,
            type: 'POST',
            timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
            dataType:'json',
            processData: false,
            contentType: false,


            beforeSend: function(){

                $("#loading").css("display", "block");

            },


            success:function(data){

                $("#loading").css("display", "none");


                if(data['error']!=true){


                    $('#email_address').css("border", "1px solid #ccc");
                    $("#email_address_alert").css("display", "none");



                    var f2data =new FormData();
                    f2data.append('country_code',country_code);
                    f2data.append('number',number);


                    $.ajax({
                        url: dataApiUrl+'/user/validate/number',
                        data: f2data,
                        type: 'POST',
                        timeout: 300000, //Set your timeout value in milliseconds or 0 for unlimited
                        dataType:'json',
                        processData: false,
                        contentType: false,


                        beforeSend: function(){

                            $("#loading").css("display", "block");

                        },


                        success:function(data){


                            $("#loading").css("display", "none");


                            if(data['error']!=true){

                                $('#number').css("border", "1px solid #ccc");
                                $("#number_alert").css("display", "none");

                                $("#step1").hide();
                                $("#step3 ").hide();
                                $("#step4").hide();

                                $("#step2").show();


                            }else{
                                $("#number_alert").css("display", "block").text(data['message']);
                            }

                        },
                        error: function(xmlhttprequest, textstatus, message) {

                            if(textstatus==="timeout") {
                                $("#alert").css("display", "block").text('Timeout Please try again.');
                            }else {
                                if(navigator.onLine) {

                                    if(textstatus==="error"){
                                        $("#alert").css("display", "block").text(message);
                                    }

                                }else {
                                    $("#alert").css("display", "block").text('Check your internet connection then try again later.');
                                }
                            }

                            $("#loading").css("display", "none");
                        }


                    });






                }else{
                    $("#email_address_alert").css("display", "block").text(data['message']);
                }

            },
            error: function(xmlhttprequest, textstatus, message) {

                if(textstatus==="timeout") {
                    $("#alert").css("display", "block").text('Timeout Please try again.');
                }else {
                    if(navigator.onLine) {

                        if(textstatus==="error"){
                            $("#alert").css("display", "block").text(message);
                        }

                    }else {
                        $("#alert").css("display", "block").text('Check your internet connection then try again later.');
                    }
                }

                $("#loading").css("display", "none");
            }


        });








    });




    $("#move_step3").click(function(){



        var profile_picture_details=$('#profile_picture_details').val();

        var full_name=$('#full_name').val();
        var gender=$('#gender').val();
        var resume_details=$('#resume_details').val();
        var address=$('#address').val();



        if (profile_picture_details !== '') {

            $('#profile_picture_details').css("border", "1px solid #ccc");

        } else {
            $('#profile_picture_details').css("border", "1px solid red");
            $("#profile_picture_alert").css("display", "block").text('Profile picture is required');
            return null;
        }

        if (full_name !== '') {

            if (validatealpha(full_name)) {
                $('#full_name').css("border", "1px solid #ccc");
            } else {
                $('#full_name').css("border", "1px solid red");
                $("#full_name_alert").css("display", "block").text('Full name is invalid');
                return null;
            }

        } else {
            $('#full_name').css("border", "1px solid red");
            $("#full_name_alert").css("display", "block").text('Full name is required');
            return null;
        }

        if (gender !== '') {

            if (validatealpha(gender)) {
                $('#gender').css("border", "1px solid #ccc");
            } else {
                $('#gender').css("border", "1px solid red");
                $("#gender_alert").css("display", "block").text('Gender is invalid');
                return null;
            }

        } else {
            $('#gender').css("border", "1px solid red");
            $("#gender_alert").css("display", "block").text('Gender is required');
            return null;
        }

        if (address !== '') {

            $('#address_1').css("border", "1px solid #ccc");

        } else {
            $('#address_1').css("border", "1px solid red");
            $("#address_1_alert").css("display", "block").text('Address 1 is required');
            return null;
        }

        $("#step1").hide();
        $("#step2 ").hide();
        $("#step4").hide();
        $("#step5").hide();

        $("#step3").show();

    });

    $("#move_step4").click(function(){


        var front_gov_id_details=$('#front_gov_id_details').val();
        var back_gov_id_details=$('#back_gov_id_details').val();

        var id_number=$('#id_number').val();




        if (front_gov_id_details !== '') {

            $('#front_gov_id_details').css("border", "1px solid #ccc");

        } else {
            $('#front_gov_id_details').css("border", "1px solid red");
            $("#front_gov_id_alert").css("display", "block").text('Front ID is required');
            return null;
        }

        if (back_gov_id_details !== '') {

            $('#back_gov_id_details').css("border", "1px solid #ccc");

        } else {
            $('#back_gov_id_details').css("border", "1px solid red");
            $("#back_gov_id_alert").css("display", "block").text('Back ID is required');
            return null;
        }

        if (id_number !== '') {

            $('#id_number').css("border", "1px solid #ccc");
            $("#id_number_alert").css("display", "none");

        } else {
            $('#id_number').css("border", "1px solid red");
            $("#id_number_alert").css("display", "block").text('ID is required');
            return null;
        }



        $("#step1").hide();
        $("#step2").hide();
        $("#step3").hide();
        $("#step5").hide();

        $("#step4").show();

    });

    $("#move_step5").click(function(){


        $("#step1").hide();
        $("#step2").hide();
        $("#step3").hide();
        $("#step4").hide();

        $("#step5").show();

    });

    $("#move_step6").click(function(){



        var bank_name=$('#bank_name').val();
        var iban=$('#iban').val();
        var swift_bic_code=$('#swift_bic_code').val();
        var branch_code=$('#branch_code').val();
        var account_title=$('#account_title').val();
        var account_number=$('#account_number').val();



        if (bank_name !== '') {

            $('#bank_name').css("border", "1px solid #ccc");
            $("#bank_name_alert").css("display", "none");

        } else {
            $('#bank_name').css("border", "1px solid red");
            $("#bank_name_alert").css("display", "block").text('Bank Name is required');
            return null;
        }

        if (iban !== '') {

            $('#iban').css("border", "1px solid #ccc");
            $("#iban_alert").css("display", "none");

        } else {
            $('#iban').css("border", "1px solid red");
            $("#iban_alert").css("display", "block").text('IBAN is required');
            return null;
        }

        if (swift_bic_code !== '') {

            $('#swift_bic_code').css("border", "1px solid #ccc");
            $("#swift_bic_code_alert").css("display", "none");

        } else {
            $('#swift_bic_code').css("border", "1px solid red");
            $("#swift_bic_code_alert").css("display", "block").text('Swift Code / BIC is required');
            return null;
        }

        // if (branch_code !== '') {
        //
        //     $('#branch_code').css("border", "1px solid #ccc");
        //     $("#branch_code_alert").css("display", "none");
        //
        // } else {
        //     $('#branch_code').css("border", "1px solid red");
        //     $("#branch_code_alert").css("display", "block").text('Branch Code is required');
        //     return null;
        // }

        if (account_title !== '') {

            $('#account_title').css("border", "1px solid #ccc");
            $("#account_title_alert").css("display", "none");

        } else {
            $('#account_title').css("border", "1px solid red");
            $("#account_title_alert").css("display", "block").text('Account title is required');
            return null;
        }

        if (account_number !== '') {

            $('#account_number').css("border", "1px solid #ccc");
            $("#account_number_alert").css("display", "none");

        } else {
            $('#account_number').css("border", "1px solid red");
            $("#account_number_alert").css("display", "block").text('Account Number is required');
            return null;
        }



        $("#step1").hide();
        $("#step2").hide();
        $("#step3").hide();
        $("#step4").hide();
        $("#step5").hide();

        $("#step6").show();

    });

    $("#move_step7").click(function(){




        $("#step1").hide();
        $("#step2").hide();
        $("#step3").hide();
        $("#step4").hide();
        $("#step5").hide();
        $("#step6").hide();

        $("#step7").show();

    });




    $("#back_step0").click(function(){

        $("#step1").hide();
        $("#step2").hide();
        $("#step3").hide();
        $("#step4").hide();
        $("#step5").hide();
        $("#step6").hide();
        $("#step7").hide();

        $("#step0").show();

    });


    $("#back_step1").click(function(){

        $("#step2").hide();
        $("#step3").hide();
        $("#step4").hide();
        $("#step5").hide();
        $("#step6").hide();

        $("#step1").show();

    });

    $("#back_step2").click(function(){

        $("#step1").hide();
        $("#step3").hide();
        $("#step4").hide();
        $("#step5").hide();
        $("#step6").hide();

        $("#step2").show();

    });

    $("#back_step3").click(function(){

        $("#step1").hide();
        $("#step2").hide();
        $("#step4").hide();
        $("#step5").hide();
        $("#step6").hide();

        $("#step3").show();

    });

    $("#back_step4").click(function(){

        $("#step1").hide();
        $("#step2").hide();
        $("#step3").hide();
        $("#step5").hide();
        $("#step6").hide();

        $("#step4").show();

    });

    $("#back_step5").click(function(){

        $("#step1").hide();
        $("#step2").hide();
        $("#step3").hide();
        $("#step4").hide();
        $("#step6").hide();

        $("#step5").show();

    });

    $("#back_step6").click(function(){

        $("#step1").hide();
        $("#step2").hide();
        $("#step3").hide();
        $("#step4").hide();
        $("#step5").hide();
        $("#step7").hide();

        $("#step6").show();

    });






</script>


</body>
</html>
