<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends BaseController
{
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
