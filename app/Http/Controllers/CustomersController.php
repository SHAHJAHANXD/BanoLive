<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends GeneralController
{


    public function index(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        // -------------------Basic--------------------------

        $Users=$this->GetUsersSqlData($request, null, 1, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);




        return view('panel.customers',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Customers',

            'Users'=>$Users,

        ]);

    }



}
