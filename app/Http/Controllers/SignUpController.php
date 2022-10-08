<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SignUpController extends BaseController
{

    public function signUp(Request $request){

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


        return view('front.sign-up',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Sign Up',


            'Genders'=>$Genders,
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





        $onboards = DB::table('onboards')
            ->where('onboards.code',$request->code)
            ->where('onboards.type','Admin')
            ->count();



        if($onboards==0){
            return redirect()->route('frontend.home');
        }







        $Genders = $this->GetGenders();
        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        $CountryCodes=$this->GetCountryCodesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $Countries=$this->GetCountriesSqlData($request, null, null, null, null, null, null, null, null, null, null, null);
        $Provinces=$this->GetProvincesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $Cities=$this->GetCitiesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('front.sign-up-admin',[

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


        return view('front.sign-up-agency',[

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


        return view('front.sign-up-host',[

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




        $onboards = DB::table('onboards')
            ->where('onboards.code',$request->code)
            ->where('onboards.type','TopUp Agent')
            ->count();



        if($onboards==0){
            return redirect()->route('frontend.home');
        }



        $Genders = $this->GetGenders();
        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        $CountryCodes=$this->GetCountryCodesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $Countries=$this->GetCountriesSqlData($request, null, null, null, null, null, null, null, null, null, null, null);
        $Provinces=$this->GetProvincesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $Cities=$this->GetCitiesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('front.sign-up-agent',[

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


        return view('front.sign-up-user',[

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
}
