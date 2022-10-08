<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileController extends BaseController
{



    public function index(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $session_user_id=null;
            $User=null;
        }

        // -------------------Basic--------------------------

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        $ChildCategories = $this->GetChildCategories($request, null, 'news', null, null, null, null, null, null, null, null, null, null, 'get');
        $News = $this->GetNewsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);



        return view('mobile.index',[

            'is_session'=>$is_session,
            'User' => $User,


            'page'=>'Home',
            'Settings'=>$Settings,
            'ChildCategories'=>$ChildCategories,
            'News'=>$News,


        ]);



    }

    public function becomeAPartner(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $session_user_id=null;
            $User=null;
        }

        // -------------------Basic--------------------------

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        $ChildCategories = $this->GetChildCategories($request, null, 'news', null, null, null, null, null, null, null, null, null, null, 'get');
        $News = $this->GetNewsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);



        return view('mobile.become-a-partner',[

            'is_session'=>$is_session,
            'User' => $User,


            'page'=>'Home',
            'Settings'=>$Settings,
            'ChildCategories'=>$ChildCategories,
            'News'=>$News,


        ]);



    }





    public function signIn(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        // -------------------Basic--------------------------
        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('mobile.sign-in',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Sign In',
            'Settings'=>$Settings,

        ]);

    }






    public function signUpAdmin(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        // -------------------Basic--------------------------


        $Genders = $this->GetGenders();
        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        $CountryCodes=$this->GetCountryCodesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $Countries=$this->GetCountriesSqlData($request, null, null, null, null, null, null, null, null, null, null, null);
        $Provinces=$this->GetProvincesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $Cities=$this->GetCitiesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('mobile.sign-up-admin',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Sign Up',

            'Countries'=>$Countries,
            'Provinces'=>$Provinces,
            'Cities'=>$Cities,

            'Genders'=>$Genders,
            'Settings'=>$Settings,
            'CountryCodes'=>$CountryCodes,

        ]);

    }

    public function signUpAgency(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        // -------------------Basic--------------------------

        $admin_code=$request->admin;

        $Genders = $this->GetGenders();
        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        $CountryCodes=$this->GetCountryCodesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $Countries=$this->GetCountriesSqlData($request, null, null, null, null, null, null, null, null, null, null, null);
        $Provinces=$this->GetProvincesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $Cities=$this->GetCitiesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('mobile.sign-up-agency',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Sign Up',

            'Countries'=>$Countries,
            'Provinces'=>$Provinces,
            'Cities'=>$Cities,

            'admin_code'=>$admin_code,
            'Genders'=>$Genders,
            'Settings'=>$Settings,
            'CountryCodes'=>$CountryCodes,

        ]);

    }

    public function signUpHost(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        // -------------------Basic--------------------------

        $agency_code=$request->agency;

        $Genders = $this->GetGenders();
        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        $CountryCodes=$this->GetCountryCodesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $Countries=$this->GetCountriesSqlData($request, null, null, null, null, null, null, null, null, null, null, null);
        $Provinces=$this->GetProvincesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $Cities=$this->GetCitiesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('mobile.sign-up-host',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Sign Up',

            'Countries'=>$Countries,
            'Provinces'=>$Provinces,
            'Cities'=>$Cities,

            'agency_code'=>$agency_code,
            'Genders'=>$Genders,
            'Settings'=>$Settings,
            'CountryCodes'=>$CountryCodes,

        ]);

    }

    public function signUpAgent(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        // -------------------Basic--------------------------


        $Genders = $this->GetGenders();
        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        $CountryCodes=$this->GetCountryCodesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $Countries=$this->GetCountriesSqlData($request, null, null, null, null, null, null, null, null, null, null, null);
        $Provinces=$this->GetProvincesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $Cities=$this->GetCitiesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('mobile.sign-up-agent',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Sign Up',

            'Countries'=>$Countries,
            'Provinces'=>$Provinces,
            'Cities'=>$Cities,

            'Genders'=>$Genders,
            'Settings'=>$Settings,
            'CountryCodes'=>$CountryCodes,

        ]);

    }

    public function signUpUser(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        // -------------------Basic--------------------------

        $Genders = $this->GetGenders();
        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $Countries=$this->GetCountriesSqlData($request, null, null, null, null, null, null, null, null, null, null, null);
        $Provinces=$this->GetProvincesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $Cities=$this->GetCitiesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('mobile.sign-up-user',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Sign Up',

            'Countries'=>$Countries,
            'Provinces'=>$Provinces,
            'Cities'=>$Cities,

            'Genders'=>$Genders,
            'Settings'=>$Settings,

        ]);

    }




    public function forgotPassword(Request $request){


        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        // -------------------Basic--------------------------
        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);



        return view('front.forgot-password',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Forgot Password',
            'Settings'=>$Settings,

        ]);


    }

    public function validateCode(Request $request){

        $email=$request->email;


        if($email!=null){

            $PasswordReset=$this->GetPasswordResetSqlData($request, null, $email, null, null, null, 'Active', null, null, null, null);
            if($PasswordReset==1){



                // -------------------Basic--------------------------

                $is_session=$this->GetSession();

                if($is_session){
                    $user_id = $request->session()->get('project')->id;
                    $User=$this->GetUsersSqlData($request, $user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
                }else{
                    $User=null;
                }

                // -------------------Basic--------------------------

                $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


                return view('front.validate-code',[

                    'is_session'=>$is_session,
                    'User' => $User,
                    'page'=>'Validate Code',
                    'email'=>$email,

                    'Settings'=>$Settings,

                ]);



            }else{
                return redirect('forgot-password');
            }


        }else{
            return redirect('forgot-password');
        }

    }

    public function changePassword(Request $request){

        $token=$request->token;

        if($token!=null){

            $PasswordReset=$this->GetPasswordResetSqlData($request, null, null, null, null, $token, 'Active', null, null, null, null);

            if($PasswordReset==1){



                // -------------------Basic--------------------------

                $is_session=$this->GetSession();

                if($is_session){
                    $user_id = $request->session()->get('project')->id;
                    $User=$this->GetUsersSqlData($request, $user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
                }else{
                    $User=null;
                }

                // -------------------Basic--------------------------

                $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


                return view('front.change-password',[

                    'is_session'=>$is_session,
                    'User' => $User,
                    'page'=>'Change Password',
                    'token'=>$token,

                    'Settings'=>$Settings,
                ]);





            }else{
                return redirect('forgot-password');
            }


        }else{
            return redirect('forgot-password');
        }
    }

}
