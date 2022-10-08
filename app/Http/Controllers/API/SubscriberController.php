<?php

namespace App\Http\Controllers\API;

use Facade\FlareClient\Api;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use \Session;

class SubscriberController extends Controllers\BaseController
{

    public function directoryForTemp(){
        return 'temp/subscriber';
    }

    public function directoryForFiles(){
        return 'subscriber/files';
    }

    public function directoryForImages(){
        return 'subscriber/images';
    }

    public function directoryForVideos(){
        return 'subscriber/videos';
    }


    public function directoryForAudios(){
        return 'subscriber/audios';
    }

    public function moduleName(){
        return 'Subscriber';
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

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'country_code' => 'required',
            'number' => 'required',
            'type' => 'required',

        ]);

        if($validator->fails()){
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $subscriber_id=DB::table('subscribers')->insertGetId(
            [
                'country_code_id' => $request->country_code,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'number' => $request->number,
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


    public function delete(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if($validator->fails()){
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------

        $query=DB::table('subscribers')->where('id', '=', $request->id)->delete();

        //------------------------------------/Registration-----------------------------------------------



        if(true){
            return $this->sendResponse(false, 200, null, 'Record has been deleted.');
        }else{
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }

}
