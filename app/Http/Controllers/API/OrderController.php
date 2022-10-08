<?php

namespace App\Http\Controllers\API;

use Facade\FlareClient\Api;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Validator;
use DB;
use \Session;

class OrderController extends Controllers\BaseController
{

    public function directoryForTemp(){
        return 'temp/order';
    }

    public function directoryForFiles(){
        return 'order/files';
    }

    public function directoryForImages(){
        return 'order/images';
    }

    public function directoryForVideos(){
        return 'order/videos';
    }


    public function directoryForAudios(){
        return 'vehicle/audios';
    }

    public function moduleName(){
        return 'Vehicle';
    }


    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request)
    {



        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }




        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'vehicle' => 'required',

        ]);

        if($validator->fails()){
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        $vehicleDefectsCount = $request->vehicleDefectsCount;
        $vehicleDefects = json_decode($request->vehicleDefects);


        //-------------------------------------Registration-----------------------------------------------


        $order_id=DB::table('orders')->insertGetId(
            [
                'vehicle_id' => $request->vehicle,
                'action_type' => $request->type,
                'description' => $request->description,
                'no_of_defects' => $request->vehicleDefectsCount,

                'status' => 'Active',
                'created_by_user_id' => $session_user_id,
            ]
            , 'id');

        //------------------------------------/Registration-----------------------------------------------


        // -------------- For defect Insert --------------
        if($vehicleDefectsCount>0){

            foreach($vehicleDefects as $key=> $dataTemp){

                $defect_id = $dataTemp->defect_id;

                if($defect_id!=null){
                    $query=DB::table('order_defect_relations')->insert(
                        [
                            'order_id' => $order_id,
                            'defect_id' => $defect_id,
                            'status' => 'Active',
                        ]
                    );
                }

            }

        }
        // -------------- For defect Insert --------------




        if(true){
            return $this->sendResponse(false, 200, null, 'User register successfully.');
        }else{
            return $this->sendResponse(true, 233, null, 'User register failed.');
        }

        //-------------------------------------------------------------------------

    }



}
