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

class NewsController extends Controllers\BaseController
{

    public function directoryForTemp(){
        return 'news';
    }

    public function directoryForFiles(){
        return 'news/files';
    }

    public function directoryForImages(){
        return 'news/images';
    }

    public function directoryForVideos(){
        return 'news/videos';
    }


    public function directoryForAudios(){
        return 'news/audios';
    }

    public function moduleName(){
        return 'News';
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

            'level_2' => 'required',
            'title' => 'required',
            'description' => 'required',

        ]);

        if($validator->fails()){
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $news_id=DB::table('news')->insertGetId(
            [
                'level_1_id' => 14,
                'level_2_id' => $request->level_2,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description,
                'thumbnail' => $request->thumbnail,

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

        $query=DB::table('news')->where('id', '=', $request->id)->delete();

        //------------------------------------/Registration-----------------------------------------------



        if(true){
            return $this->sendResponse(false, 200, null, 'Record has been deleted.');
        }else{
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }


    public function uploadThumbnail(Request $request){

        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL= URL::to('/');

        $DirectoryPath=$this->directoryForTemp();
        $UploadedFile=null;
        $inc=0;


        if($request->hasFile('file')) {


            if(Storage::makeDirectory('public/'.$DirectoryPath)){ //Old code for storage

                $inc++;


                $RealPath = $request->file('file')->getRealPath(); //Actual Path
//                $UploadedFile= $request->file('file')->store('public/'.$DirectoryPath); //Uploaded Path //Old code for storage
                $UploadedFile= $request->file('file')->store($DirectoryPath, ['disk' => 'public_uploads']); //Uploaded Path
                $UploadedFile= basename($UploadedFile); //Get File name from URL





            }else{
                return $this->sendResponse(true, 78, null, 'Directory Not Created.');
            }


        }else{
            return $this->sendResponse(true, 40, null, 'File Not Found.');
        }


        if($inc==1){
            return $this->sendResponse(true, 200, $UploadedFile, 'Successfully Uploaded.');
        }else{

            return $this->sendResponse(true, 233, null, 'Operation Failed, Contact System administrator.');

        }

    }

}
