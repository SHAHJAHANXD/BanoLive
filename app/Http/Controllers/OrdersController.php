<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends GeneralController
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
        $Orders=$this->GetOrdersSqlData($request, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.orders',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Orders',

            'Orders'=>$Orders,

        ]);

    }


    public function create(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        // -------------------Basic--------------------------


        $Vehicles=$this->GetVehiclesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $Defects=$this->GetDefectsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);



        return view('panel.create-order',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Orders',

            'Vehicles'=>$Vehicles,
            'Defects'=>$Defects,

        ]);

    }

}
