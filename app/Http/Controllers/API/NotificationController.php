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

class NotificationController extends Controllers\BaseController
{

    public function directoryForTemp(){
        return 'temp/notification';
    }

    public function directoryForFiles(){
        return 'notification/files';
    }

    public function directoryForImages(){
        return 'notification/images';
    }

    public function directoryForVideos(){
        return 'notification/videos';
    }


    public function directoryForAudios(){
        return 'notification/audios';
    }

    public function moduleName(){
        return 'Notification';
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

            'title' => 'required',
            'description' => 'required',

        ]);

        if($validator->fails()){
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $notification_id=DB::table('notifications')->insertGetId(
            [
                'title' => $request->title,
                'description' => $request->description,

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

        $query=DB::table('notifications')->where('id', '=', $request->id)->delete();

        //------------------------------------/Registration-----------------------------------------------



        if(true){
            return $this->sendResponse(false, 200, null, 'Record has been deleted.');
        }else{
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }











    public function transactionCreate(Request $request)
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

            'user_id' => 'required',
            'amount' => 'required',

        ]);

        if($validator->fails()){
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------




        if($User->wallet>=$request->amount){




            $query=DB::table('users')
                ->where('id', $session_user_id)
                ->update(
                    [
                        'wallet' => $User->wallet-$request->amount,
                    ]
                );




            $user2_data = DB::table('users')
                ->select(
                    'users.id as id',
                    'users.wallet as wallet',

                    'users.status as status'
                )
                ->where('users.id',$request->user_id)
                ->first();



            $query=DB::table('users')
                ->where('id', $request->user_id)
                ->update(
                    [
                        'wallet' => $user2_data->wallet+$request->amount,
                    ]
                );


            //-------------------------------------Registration-----------------------------------------------


            $transaction_log_id=DB::table('transaction_logs')->insertGetId(
                [
                    'user_to_id' => $request->user_id,
                    'amount' => $request->amount,
                    'type' => 'Debit',

                    'status' => 'Active',
                    'created_by_user_id' => $session_user_id,
                ]
                , 'id');

            //------------------------------------/Registration-----------------------------------------------



        }else{
            return $this->sendResponse(true, 233, null, 'You have insufficient funds.');
        }







        if(true){
            return $this->sendResponse(false, 200, null, 'User register successfully.');
        }else{
            return $this->sendResponse(true, 233, null, 'User register failed.');
        }

        //-------------------------------------------------------------------------

    }



}
