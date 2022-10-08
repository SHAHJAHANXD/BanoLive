<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignInController extends BaseController
{


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


        return view('front.sign-in',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Sign In',
            'Settings'=>$Settings,

        ]);

    }


    public function verification(Request $request){

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


        return view('front.verification',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Sign In',
            'Settings'=>$Settings,

        ]);

    }

}
