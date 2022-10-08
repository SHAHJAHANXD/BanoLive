<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiclesController extends GeneralController
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

        $VehicleCategories=$this->GetVehicleCategoriesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $VehicleModels=$this->GetVehicleModelsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $VehicleMakes=$this->GetVehicleMakesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $VehicleYears=$this->getYears();
        $NoOfAxles=$this->getNoOfAxles();
        $Vehicles=$this->GetVehiclesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);




        return view('panel.vehicles',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Vehicles',

            'VehicleCategories'=>$VehicleCategories,
            'VehicleModels'=>$VehicleModels,
            'VehicleMakes'=>$VehicleMakes,
            'VehicleYears'=>$VehicleYears,
            'NoOfAxles'=>$NoOfAxles,
            'Vehicles'=>$Vehicles,

        ]);

    }



}
