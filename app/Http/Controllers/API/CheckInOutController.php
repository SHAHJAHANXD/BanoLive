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

class CheckInOutController extends Controllers\BaseController
{

    public function directoryForTemp(){
        return 'temp/check-in-out';
    }

    public function directoryForFiles(){
        return 'check-in-out/files';
    }

    public function directoryForImages(){
        return 'check-in-out/images';
    }

    public function directoryForVideos(){
        return 'check-in-out/videos';
    }


    public function directoryForAudios(){
        return 'check-in-out/audios';
    }

    public function moduleName(){
        return 'Check In Out';
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

            'type' => 'required',

        ]);

        if($validator->fails()){
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $checkInOut_id=DB::table('check-in-outs')->insertGetId(
            [
                'type' => $request->type,

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
