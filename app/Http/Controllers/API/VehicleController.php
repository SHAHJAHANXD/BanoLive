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

class VehicleController extends Controllers\BaseController
{

    public function directoryForTemp(){
        return 'temp/vehicle';
    }

    public function directoryForFiles(){
        return 'vehicle/files';
    }

    public function directoryForImages(){
        return 'vehicle/images';
    }

    public function directoryForVideos(){
        return 'vehicle/videos';
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

            'vehicle_category' => 'required',
            'rego' => 'required',
            'vin' => 'required',
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'fleet_no' => 'required',
            'no_of_axles' => 'required',

        ]);

        if($validator->fails()){
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $vehicle_id=DB::table('vehicles')->insertGetId(
            [
                'category_id' => $request->vehicle_category,
                'rego' => $request->rego,
                'vin' => $request->vin,
                'make_id' => $request->make,
                'model_id' => $request->model,
                'year' => $request->year,

                'fleet_no' => $request->fleet_no,
                'no_of_axles' => $request->no_of_axles,

                'status' => 'Active',
                'created_by_user_id' => $session_user_id,
            ]
            , 'id');

        //------------------------------------/Registration-----------------------------------------------



        if(true){
            return $this->sendResponse(false, 200, null, 'User register successfully.');
        }else{
            return $this->sendResponse(true, 233, null, 'User register failed.');
        }

        //-------------------------------------------------------------------------

    }



}
