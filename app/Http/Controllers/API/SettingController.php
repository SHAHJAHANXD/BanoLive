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
use PhpParser\Node\Expr\Array_;
use Validator;
use DB;
use \Session;

class SettingController extends Controllers\BaseController
{

    public function directoryForTemp(){
        return 'temp/setting';
    }

    public function directoryForFiles(){
        return 'setting/files';
    }

    public function directoryForImages(){
        return 'setting/images';
    }

    public function directoryForVideos(){
        return 'setting/videos';
    }


    public function directoryForAudios(){
        return 'setting/audios';
    }

    public function moduleName(){
        return 'Setting';
    }


    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request)
    {

        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);

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
            'intro' => 'required',

        ]);

        if($validator->fails()){
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------



        $query=DB::table('settings')
            ->where('id', 1)
            ->update(
                [
                    'title' => $request->title,
                    'intro' => $request->intro,
                    'logo' => $request->logo,
                    'icon' => $request->icon,
                    'about' => $request->about,
                    'about_page' => $request->about_page,
                    'email_address' => $request->email_address,
                    'phone_number' => $request->phone_number,
                    'copyright' => $request->copyright,
                    'meta_title' => $request->meta_title,
                    'meta_description' => $request->meta_description,
                    'meta_keywords' => $request->meta_keywords,
                    'author' => $request->author,
                    'thumbnail' => $request->thumbnail,
                    'url' => $request->url,
                    'admin_terms_and_conditions' => $request->admin_terms_and_conditions,
                    'agency_terms_and_conditions' => $request->agency_terms_and_conditions,
                    'host_terms_and_conditions' => $request->host_terms_and_conditions,
                    'agent_terms_and_conditions' => $request->agent_terms_and_conditions,
                    'user_terms_and_conditions' => $request->user_terms_and_conditions,

                    'facebook_link' => $request->facebook_link,
                    'twitter_link' => $request->twitter_link,
                    'linkedin_link' => $request->linkedin_link,
                    'instagram_link' => $request->instagram_link,

                    'appstore_link' => $request->appstore_link,
                    'playstore_link' => $request->playstore_link,

                    'status' => 'Active',
                    'updated_at' => date("Y-m-d H:i:s", strtotime('now')),
                    'updated_by_user_id' => $session_user_id,
                ]
            );

        //------------------------------------/Registration-----------------------------------------------



        if(true){
            return $this->sendResponse(false, 200, null, 'User register successfully.');
        }else{
            return $this->sendResponse(true, 233, null, 'User register failed.');
        }

        //-------------------------------------------------------------------------

    }


    public function changePassword(Request $request)
    {

        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'old_password' => 'required',
            'new_password' => 'required',

        ]);

        if($validator->fails()){
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------






        $UserData=DB::table('users')
            ->where('id',$session_user_id)
            ->first();




        //------------------------------------------------------------------------------------

        if(password_verify($request->old_password,$UserData->password)){

            if(!password_verify($request->new_password,$UserData->password)){

                $query=DB::table('users')
                    ->where('id', $session_user_id)
                    ->update(
                        [
                            'password' => bcrypt($request->new_password),

                            'updated_at' => date("Y-m-d H:i:s", strtotime('now')),
                            'updated_by_user_id' => $session_user_id,
                        ]
                    );

            }else{

                return $this->sendResponse(true, 233, null, 'Your new password same as old password, Please use different password.');
            }

        }else{

            return $this->sendResponse(true, 233, null, 'Old password does not match.');

        }

        //------------------------------------------------------------------------------------




        if(true){
            return $this->sendResponse(false, 200, null, 'User register successfully.');
        }else{
            return $this->sendResponse(true, 233, null, 'User register failed.');
        }

        //-------------------------------------------------------------------------

    }




    public function loadCountries(Request $request){



        $id=$request['id'];

        $inc=0;


        // ----------ID Check-----------------
        if($id!=' ' && $id!=null){
            $inc++;
        }else{
            $output=['response'=>['code'=>'50', 'status'=>'Failed', 'message'=>'ID Not Found, Contact System Administrator.']];
            return response()->json($output);
        }
        // ---------/ID Check-----------------








        if($inc==1) {

            $CountriesSqlData=$this->GetCountriesSqlData($request, null, null, null, null, null, null, null, null, null, null, null);


            $data='<option value="">Select country</option>';
            foreach ($CountriesSqlData as $value=> $Temp){
                $data.='<option>'.$Temp->name.'</option>';
            }


            $output=['response'=>[
                'code'=>'200',
                'status'=>'Success',
                'message'=>'Operation Successful.',
                'data'=>$data
            ]];



            return response()->json($output);

        }else{
            $output=['response'=>[
                'code'=>'0',
                'status'=>'Failed',
                'message'=>'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }


    }

    public function loadProvinces(Request $request){



        $id=$request['id'];

        $inc=0;


        // ----------ID Check-----------------
        if($id!=' ' && $id!=null){
            $inc++;
        }else{
            $output=['response'=>['code'=>'50', 'status'=>'Failed', 'message'=>'ID Not Found, Contact System Administrator.']];
            return response()->json($output);
        }
        // ---------/ID Check-----------------








        if($inc==1) {

            $ProvincesSqlData=$this->GetProvincesSqlData($request, null, $id, null, null, null, null, null, null, null, null, null, null);


            $data='<option value="">Select province</option>';
            foreach ($ProvincesSqlData as $value=> $Temp){
                $data.='<option>'.$Temp->name.'</option>';
            }


            $output=['response'=>[
                'code'=>'200',
                'status'=>'Success',
                'message'=>'Operation Successful.',
                'data'=>$data
            ]];



            return response()->json($output);

        }else{
            $output=['response'=>[
                'code'=>'0',
                'status'=>'Failed',
                'message'=>'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }


    }

    public function loadCities(Request $request){



        $id=$request['id'];

        $inc=0;


        // ----------ID Check-----------------
        if($id!=' ' && $id!=null){
            $inc++;
        }else{
            $output=['response'=>['code'=>'50', 'status'=>'Failed', 'message'=>'ID Not Found, Contact System Administrator.']];
            return response()->json($output);
        }
        // ---------/ID Check-----------------








        if($inc==1) {

            $CitiesSqlData=$this->GetCitiesSqlData($request, null, null, $id, null, null, null, null, null, null, null, null, null, null);


            $data='<option value="">Select city</option>';
            foreach ($CitiesSqlData as $value=> $Temp){
                $data.='<option value="'.$Temp->id.'">'.$Temp->name.'</option>';
            }


            $output=['response'=>[
                'code'=>'200',
                'status'=>'Success',
                'message'=>'Operation Successful.',
                'data'=>$data
            ]];



            return response()->json($output);

        }else{
            $output=['response'=>[
                'code'=>'0',
                'status'=>'Failed',
                'message'=>'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }


    }

    public function loadAreas(Request $request){



        $id=$request['id'];

        $inc=0;


        // ----------ID Check-----------------
        if($id!=' ' && $id!=null){
            $inc++;
        }else{
            $output=['response'=>['code'=>'50', 'status'=>'Failed', 'message'=>'ID Not Found, Contact System Administrator.']];
            return response()->json($output);
        }
        // ---------/ID Check-----------------








        if($inc==1) {

            $AreasSqlData=$this->GetAreasSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


            $data='<option value="">Select area</option>';
            foreach ($AreasSqlData as $value=> $Temp){
                $data.='<option>'.$Temp->name.'</option>';
            }


            $output=['response'=>[
                'code'=>'200',
                'status'=>'Success',
                'message'=>'Operation Successful.',
                'data'=>$data
            ]];



            return response()->json($output);

        }else{
            $output=['response'=>[
                'code'=>'0',
                'status'=>'Failed',
                'message'=>'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }


    }

    public function loadAreasCheckboxes(Request $request){



        $id=$request['id'];

        $inc=0;


        // ----------ID Check-----------------
        if($id!=' ' && $id!=null){
            $inc++;
        }else{
            $output=['response'=>['code'=>'50', 'status'=>'Failed', 'message'=>'ID Not Found, Contact System Administrator.']];
            return response()->json($output);
        }
        // ---------/ID Check-----------------








        if($inc==1) {

            $AreasSqlData=$this->GetAreasSqlData($request, null, $id, null, null, null, null, null, null, null, null, null, null, null, null);


            $data='';
            foreach ($AreasSqlData as $value=> $Temp){
                $data.='<div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input area" type="checkbox" value="" id="area_'.$Temp->id.'">
                            <label class="form-check-label" for="area_'.$Temp->id.'">'.$Temp->name.'</label>
                        </div>
                    </div>';
            }


            $output=['response'=>[
                'code'=>'200',
                'status'=>'Success',
                'message'=>'Operation Successful.',
                'data'=>$data
            ]];



            return response()->json($output);

        }else{
            $output=['response'=>[
                'code'=>'0',
                'status'=>'Failed',
                'message'=>'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }


    }

    public function loadLocations(Request $request){



        $id=$request['id'];

        $inc=0;


        // ----------ID Check-----------------
        if($id!=' ' && $id!=null){
            $inc++;
        }else{
            $output=['response'=>['code'=>'50', 'status'=>'Failed', 'message'=>'ID Not Found, Contact System Administrator.']];
            return response()->json($output);
        }
        // ---------/ID Check-----------------








        if($inc==1) {

            $LocationsSqlData=$this->GetLocationsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


            $data='<option value="">Select location</option>';
            foreach ($LocationsSqlData as $value=> $Temp){
                $data.='<option value="'.$Temp->id.'">'.$Temp->name.'</option>';
            }


            $output=['response'=>[
                'code'=>'200',
                'status'=>'Success',
                'message'=>'Operation Successful.',
                'data'=>$data
            ]];



            return response()->json($output);

        }else{
            $output=['response'=>[
                'code'=>'0',
                'status'=>'Failed',
                'message'=>'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }


    }






    // - - - - - - - - - - - - - - - - - - - User Picture- - - - - - - - - - - - - - - - - - - - - - - - -

    public function uploadUserPicture(Request $request){

        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL= URL::to('/');

        $DirectoryPath=$this->directoryForTemp();
        $UploadedFile=null;
        $inc=0;


        if($request->hasFile('file')) {


            if(Storage::makeDirectory('public/'.$DirectoryPath)){ //Old code for storage

            $inc++;
            $RealPath = $request->file('file')->getRealPath(); //Actual Path
            $UploadedFile= $request->file('file')->store('public/'.$DirectoryPath); //Uploaded Path //Old code for storage
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

    // - - - - - - - - - - - - - - - - - - -/User Picture- - - - - - - - - - - - - - - - - - - - - - - - -



    // - - - - - - - - - - - - - - - - - - - CNIC Front Picture- - - - - - - - - - - - - - - - - - - - - - - - -

    public function uploadCNICFrontPicture(Request $request){

        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL= URL::to('/');

        $DirectoryPath=$this->directoryForTemp();
        $UploadedFile=null;
        $inc=0;


        if($request->hasFile('file')) {


            if(Storage::makeDirectory('public/'.$DirectoryPath)){ //Old code for storage

                $inc++;
                $RealPath = $request->file('file')->getRealPath(); //Actual Path
                $UploadedFile= $request->file('file')->store('public/'.$DirectoryPath); //Uploaded Path //Old code for storage
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

    // - - - - - - - - - - - - - - - - - - -/CNIC Front Picture- - - - - - - - - - - - - - - - - - - - - - - - -


    // - - - - - - - - - - - - - - - - - - - CNIC Back Picture- - - - - - - - - - - - - - - - - - - - - - - - -

    public function uploadCNICBackPicture(Request $request){

        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL= URL::to('/');

        $DirectoryPath=$this->directoryForTemp();
        $UploadedFile=null;
        $inc=0;


        if($request->hasFile('file')) {


            if(Storage::makeDirectory('public/'.$DirectoryPath)){ //Old code for storage

                $inc++;
                $RealPath = $request->file('file')->getRealPath(); //Actual Path
                $UploadedFile= $request->file('file')->store('public/'.$DirectoryPath); //Uploaded Path //Old code for storage
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

    // - - - - - - - - - - - - - - - - - - -/CNIC Back Picture- - - - - - - - - - - - - - - - - - - - - - - - -




    // - - - - - - - - - - - - - - - - - - - Company Logo - - - - - - - - - - - - - - - - - - - - - - - - -

    public function uploadCompanyLogo(Request $request){

        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL= URL::to('/');

        $DirectoryPath=$this->directoryForTemp();
        $UploadedFile=null;
        $inc=0;


        if($request->hasFile('file')) {


            if(Storage::makeDirectory('public/logo/'.$DirectoryPath)){ //Old code for storage

                $inc++;
                $RealPath = $request->file('file')->getRealPath(); //Actual Path
                $UploadedFile= $request->file('file')->store('public/'.$DirectoryPath); //Uploaded Path //Old code for storage
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

    // - - - - - - - - - - - - - - - - - - -/Company Logo - - - - - - - - - - - - - - - - - - - - - - - - -


    // - - - - - - - - - - - - - - - - - - - Company Banner - - - - - - - - - - - - - - - - - - - - - - - - -

    public function uploadCompanyBanner(Request $request){

        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL= URL::to('/');

        $DirectoryPath=$this->directoryForTemp();
        $UploadedFile=null;
        $inc=0;


        if($request->hasFile('file')) {


            if(Storage::makeDirectory('public/banner/'.$DirectoryPath)){ //Old code for storage

                $inc++;
                $RealPath = $request->file('file')->getRealPath(); //Actual Path
                $UploadedFile= $request->file('file')->store('public/'.$DirectoryPath); //Uploaded Path //Old code for storage
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

    // - - - - - - - - - - - - - - - - - - -/Company Banner - - - - - - - - - - - - - - - - - - - - - - - - -





    public function removeFile(Request $request){

        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL= URL::to('/');

        $DirectoryPath=$this->directoryForTemp();;
        $inc=0;


        $rename_name=$request['rename_name'];

        if($rename_name!='' && $rename_name!=null){
//            Storage::delete('public/'.$DirectoryPath.'/'.$rename_name); //Old code for storage

            if(File::exists(public_path('uploads/'.$DirectoryPath.'/'.$rename_name))){
                File::delete(public_path('uploads/'.$DirectoryPath.'/'.$rename_name));
                $inc++;
            }else{
                $output=['response'=>['code'=>'88', 'status'=>'Failed', 'message'=>'File does not exists.']];
                return response()->json($output);
            }


        }else{
            $output=['response'=>['code'=>'88', 'status'=>'Failed', 'message'=>'File ID Not be Null.']];
            return response()->json($output);
        }






        if($inc==1){

            $output=['response'=>[
                'code'=>'200',
                'status'=>'Success',
                'message'=>'Successfully Deleted.'
            ]];

            return response()->json($output);

        }else{

            $output=['response'=>[
                'code'=>'0',
                'status'=>'Failed',
                'message'=>'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);

        }


    }





    public function loadSubChildCategories(Request $request){



        $id=$request['id'];

        $inc=0;


        // ----------ID Check-----------------
        if($id!=' ' && $id!=null){
            $inc++;
        }else{
            $output=['response'=>['code'=>'50', 'status'=>'Failed', 'message'=>'ID Not Found, Contact System Administrator.']];
            return response()->json($output);
        }
        // ---------/ID Check-----------------








        if($inc==1) {

            $SubChildCategories=$this->GetSubChildCategories($request, null, null, $id, null, null, null, null, null, null, null, null, null, null, 'get');


            $data='<option value="">Select Sub Child</option>';
            foreach ($SubChildCategories as $value=> $Temp){
                $data.='<option value="'.$Temp->id.'">'.$Temp->title.'</option>';
            }


            $output=['response'=>[
                'code'=>'200',
                'status'=>'Success',
                'message'=>'Operation Successful.',
                'data'=>$data
            ]];



            return response()->json($output);

        }else{
            $output=['response'=>[
                'code'=>'0',
                'status'=>'Failed',
                'message'=>'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }


    }



    // - - - - - - - - - - - - - - - - - - - User Picture- - - - - - - - - - - - - - - - - - - - - - - - -

    public function uploadMachineryPicture(Request $request){

        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL= URL::to('/');

        $DirectoryPath=$this->directoryForTemp();
        $UploadedFile=null;
        $inc=0;


        if($request->hasFile('file')) {


            if(Storage::makeDirectory('public/machinery/'.$DirectoryPath)){ //Old code for storage

                $inc++;
                $RealPath = $request->file('file')->getRealPath(); //Actual Path
                $UploadedFile= $request->file('file')->store('public/machinery/'.$DirectoryPath); //Uploaded Path //Old code for storage
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

    // - - - - - - - - - - - - - - - - - - -/User Picture- - - - - - - - - - - - - - - - - - - - - - - - -




    //    --------------------------------------------User follow-------------------------------------------------------

    public function follow(Request $request){


        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }


        $inc=0;
        $id=$request['id'];







        // ----------Check already followed or Not-----------------

        if($session_user_id == $id){

            $data[]=array(
                'error' => 'true',
                'code' => '4545',
                'message' => 'You can not follow yourself'
            );
            $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
            return $jsonData;

        }

        // ----------Check already followed or Not-----------------






        // ----------Check already followed or Not-----------------
        $followingData=DB::table('followers')
            ->where('followed_to_id',$id)
            ->where('created_by_user_id',$session_user_id)
            ->first();

        if(!is_null($followingData)){

            $data[]=array(
                'error' => 'true',
                'code' => '4545',
                'message' => 'Already Followed.'
            );
            $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
            return $jsonData;

        }
        // ----------Check already followed or Not-----------------




        if($inc==0){




            $follower_id=DB::table('followers')->insertGetId(
                [
                    'followed_to_id' => $id,
                    'followed_type' => 'UserToUser',
                    'action_status' => null,

                    'status' => 'Active',
                    'order_by' => null,
                    'created_by_user_id' => $session_user_id
                ]
                , 'id');



            //-----------------Update and Decrement for Own----------------------

            $OwnUser=DB::table('users')
                ->select(
                    'users.id as id',
                    'users.no_of_followings as no_of_followings'
                )
                ->where('users.id',$session_user_id)
                ->first();

            $IncUser=DB::table('users')
                ->where('id', $session_user_id)
                ->update(
                    [
                        'no_of_followings' => $OwnUser->no_of_followings+1,
                    ]
                );

            //-----------------Update and Decrement for Own----------------------



            //-----------------Update and Decrement for Friend----------------------


            $FriendUser=DB::table('users')
                ->select(
                    'users.id as id',
                    'users.no_of_followers as no_of_followers'
                )
                ->where('users.id',$id)
                ->first();

            $IncUser=DB::table('users')
                ->where('id', $id)
                ->update(
                    [
                        'no_of_followers' => $FriendUser->no_of_followers+1,
                    ]
                );

            //-----------------Update and Increment for Friend----------------------


            $html='<button type="button" class="btn btn-unfollow unfollow"  id="unfollow_'.$id.'" style="margin: 0 auto; ">Unfollow</button>';


            if($IncUser){

                $data[]=array(
                    'error' => 'false',
                    'code' => '200',
                    'message' => 'Successfully Followed',
                    'html' => $html,
                );
                $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
                return $jsonData;

            }else{

                $data[]=array(
                    'error' => 'true',
                    'code' => '0',
                    'message' => 'Query Failed, Contact System administrator.'
                );

                $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
                return $jsonData;
            }

        }else{

            $data[]=array(
                'error' => 'true',
                'code' => '0',
                'message' => 'Operation Failed, Contact System administrator.'
            );

            $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
            return $jsonData;

        }

    }

    //    ------------------------------------------/User follow--------------------------------------------------------




    //    ------------------------------------------User unfollow-------------------------------------------------------

    public function unfollow(Request $request){

        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }



        $inc=0;

        $id=$request['id'];



        // ----------Check data in followers table or Not-----------------
        $followerData=DB::table('followers')
            ->where('followed_to_id', $id)
            ->where('created_by_user_id',$session_user_id)
            ->first();

        if(is_null($followerData)){

            $data[]=array(
                'error' => 'true',
                'code' => '4545',
                'message' => 'You can not unfollow because you are not follow.'
            );
            $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
            return $jsonData;

        }
        // ----------Check data in followers table or Not-----------------





        if($inc==0){







            //-----------------Update and Decrement for Own----------------------

            $follower=DB::table('followers')
                ->where('id', '=', $followerData->id)
                ->delete();

            $OwnUser=DB::table('users')
                ->select(
                    'users.id as id',
                    'users.no_of_followings as no_of_followings'
                )
                ->where('users.id',$session_user_id)
                ->first();

            $DecUser=DB::table('users')
                ->where('id', $session_user_id)
                ->update(
                    [
                        'no_of_followings' => $OwnUser->no_of_followings-1,
                    ]
                );

            //-----------------Update and Decrement for Own----------------------



            //-----------------Update and Decrement for Friend----------------------


            $FriendUser=DB::table('users')
                ->select(
                    'users.id as id',
                    'users.no_of_followers as no_of_followers'
                )
                ->where('users.id',$followerData->followed_to_id)
                ->first();

            $DecUser=DB::table('users')
                ->where('id', $followerData->followed_to_id)
                ->update(
                    [
                        'no_of_followers' => $FriendUser->no_of_followers-1,
                    ]
                );

            //-----------------Update and Increment for Friend----------------------

            $html='<button type="button" class="btn btn-followers follow" id="follow_'.$id.'" style="margin: 0 auto;">Follow</button>';


            if($follower){

                $data[]=array(
                    'error' => 'false',
                    'code' => '200',
                    'message' => 'Successfully unfollowed',
                    'html' => $html,
                );
                $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
                return $jsonData;

            }else{

                $data[]=array(
                    'error' => 'true',
                    'code' => '0',
                    'message' => 'Query Failed, Contact System administrator.'
                );

                $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
                return $jsonData;
            }

        }else{

            $data[]=array(
                'error' => 'true',
                'code' => '0',
                'message' => 'Operation Failed, Contact System administrator.'
            );

            $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
            return $jsonData;

        }

    }

    //    -----------------------------------------/User unfollow-------------------------------------------------------










    //    -----------------------------------------------toBeFollowing---------------------------------------------------------

    public function toBeFollowing(Request $request){

        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------




        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }





        $inc=0;

        $id=$request['id'];



        // ----------Check user ID is exist or not-----------------
        if($id!=null){

            $userData=DB::table('users')
                ->where('id',$id)
                ->first();

            if(count((array)$userData)==0){

                $data[]=array(
                    'error' => 'true',
                    'code' => '743',
                    'message' => 'User ID not found, please contact to system administrator.'
                );
                $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
                return $jsonData;

            }

        }else{

            $data[]=array(
                'error' => 'true',
                'code' => '404',
                'message' => 'User ID can not be null.'
            );
            $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
            return $jsonData;

        }
        // ----------Check user ID is exist or not-----------------


        // ----------Check already followed or Not-----------------
        $followingData=DB::table('followers')
            ->where('followed_to_id', $id)
            ->where('created_by_user_id',$session_user_id)
            ->first();



        if(!is_null($followingData)){

            $data[]=array(
                'error' => 'true',
                'code' => '4545',
                'message' => 'Already Followed.'
            );
            $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
            return $jsonData;

        }
        // ----------Check already followed or Not-----------------




        if($inc==0){



            $follower_id=DB::table('followers')->insertGetId(
                [
                    'followed_to_id' => $id,
                    'followed_type' => 'UserToUser',
                    'action_status' => null,

                    'status' => 'Active',
                    'order_by' => null,
                    'created_by_user_id' => $session_user_id
                ]
                , 'id');



            //-----------------Update and Decrement for Own----------------------

            $OwnUser=DB::table('users')
                ->select(
                    'users.id as id',
                    'users.no_of_followings as no_of_followings'
                )
                ->where('users.id',$session_user_id)
                ->first();

            $IncUser=DB::table('users')
                ->where('id', $session_user_id)
                ->update(
                    [
                        'no_of_followings' => $OwnUser->no_of_followings+1,
                    ]
                );

            //-----------------Update and Decrement for Own----------------------



            //-----------------Update and Decrement for Friend----------------------


            $FriendUser=DB::table('users')
                ->select(
                    'users.id as id',
                    'users.no_of_followers as no_of_followers'
                )
                ->where('users.id', $id)
                ->first();

            $IncUser=DB::table('users')
                ->where('id', $id)
                ->update(
                    [
                        'no_of_followers' => $FriendUser->no_of_followers+1,
                    ]
                );

            //-----------------Update and Increment for Friend----------------------









//            $notification_id=DB::table('notifications')->insertGetId(
//                [
//                    'notification_for_user_id' => $id,
//                    'notification_type' => 'Follow',
//                    'reference_type' => 'User',
//                    'reference_id' => $session_user_id,
//                    'read_status' => 'Unread',
//
//                    'status' => 'Active',
//                    'created_by_user_id' => $session_user_id,
//                ]
//                , 'id');





            if($IncUser){

                $data[]=array(
                    'error' => 'false',
                    'code' => '200',
                    'message' => 'Successfully Followed'
                );
                $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
                return $jsonData;

            }else{

                $data[]=array(
                    'error' => 'true',
                    'code' => '0',
                    'message' => 'Query Failed, Contact System administrator.'
                );

                $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
                return $jsonData;
            }

        }else{

            $data[]=array(
                'error' => 'true',
                'code' => '0',
                'message' => 'Operation Failed, Contact System administrator.'
            );

            $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
            return $jsonData;

        }

    }

    //    ----------------------------------------------/toBeFollowing---------------------------------------------------------





    //    -------------------------------------------followRemove-------------------------------------------------------

    public function followerRemove(Request $request){

        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }



        $inc=0;

        $id=$request['id'];




        // ----------Check data in followers table-----------------
        $followerData=DB::table('followers')
            ->where('id',$id)
            ->where('followed_to_id',$session_user_id)
            ->first();

        if(is_null($followerData)){

            $data[]=array(
                'error' => 'true',
                'code' => '4545',
                'message' => 'Record not found.'
            );
            $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
            return $jsonData;

        }
        // ----------Check data in followers table-----------------





        if($inc==0){



            //-----------------Update and Decrement for Own----------------------

            $follower=DB::table('followers')
                ->where('id', '=', $id)
                ->delete();


            $OwnUser=DB::table('users')
                ->select(
                    'users.id as id',
                    'users.no_of_followers as no_of_followers'
                )
                ->where('users.id',$session_user_id)
                ->first();

            $DecUser=DB::table('users')
                ->where('id', $session_user_id)
                ->update(
                    [
                        'no_of_followers' => $OwnUser->no_of_followers-1,
                    ]
                );


            //-----------------Update and Decrement for Own----------------------



            //-----------------Update and Decrement for Friend----------------------

            $FriendUser=DB::table('users')
                ->select(
                    'users.id as id',
                    'users.no_of_followings as no_of_followings'
                )
                ->where('users.id',$followerData->created_by_user_id)
                ->first();

            $DecUser=DB::table('users')
                ->where('id', $followerData->created_by_user_id)
                ->update(
                    [
                        'no_of_followings' => $FriendUser->no_of_followings-1,
                    ]
                );

            //-----------------Update and Increment for Friend----------------------




            if($DecUser){

                $data[]=array(
                    'error' => 'false',
                    'code' => '200',
                    'message' => 'Successfully Removed Follower'
                );
                $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
                return $jsonData;

            }else{

                $data[]=array(
                    'error' => 'true',
                    'code' => '0',
                    'message' => 'Query Failed, Contact System administrator.'
                );

                $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
                return $jsonData;
            }

        }else{

            $data[]=array(
                'error' => 'true',
                'code' => '0',
                'message' => 'Operation Failed, Contact System administrator.'
            );

            $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
            return $jsonData;

        }

    }

    //    ------------------------------------------/followRemove-------------------------------------------------------





    //    ---------------------------------------------followBack-------------------------------------------------------

    public function followBack(Request $request){


        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }



        $inc=0;
        $id=$request['id'];




        // ----------Check data in followers table or Not-----------------
        $followerData=DB::table('followers')
            ->where('id',$id)
            ->where('followed_to_id',$session_user_id)
            ->first();

        if(is_null($followerData)){

            $data[]=array(
                'error' => 'true',
                'code' => '4545',
                'message' => 'Record not found.'
            );
            $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
            return $jsonData;

        }
        // ----------Check data in followers table or Not-----------------




        // ----------Check already followed or Not-----------------
        $followingData=DB::table('followers')
            ->where('followed_to_id',$followerData->created_by_user_id)
            ->where('created_by_user_id',$session_user_id)
            ->first();

        if(!is_null($followingData)){

            $data[]=array(
                'error' => 'true',
                'code' => '4545',
                'message' => 'Already Followed.'
            );
            $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
            return $jsonData;

        }
        // ----------Check already followed or Not-----------------




        if($inc==0){




            $follower_id=DB::table('followers')->insertGetId(
                [
                    'followed_to_id' => $followerData->created_by_user_id,
                    'followed_type' => 'UserToUser',
                    'action_status' => null,

                    'status' => 'Active',
                    'order_by' => null,
                    'created_by_user_id' => $session_user_id
                ]
                , 'id');



            //-----------------Update and Decrement for Own----------------------

            $OwnUser=DB::table('users')
                ->select(
                    'users.id as id',
                    'users.no_of_followings as no_of_followings'
                )
                ->where('users.id',$session_user_id)
                ->first();

            $IncUser=DB::table('users')
                ->where('id', $session_user_id)
                ->update(
                    [
                        'no_of_followings' => $OwnUser->no_of_followings+1,
                    ]
                );

            //-----------------Update and Decrement for Own----------------------



            //-----------------Update and Decrement for Friend----------------------


            $FriendUser=DB::table('users')
                ->select(
                    'users.id as id',
                    'users.no_of_followers as no_of_followers'
                )
                ->where('users.id',$followerData->created_by_user_id)
                ->first();

            $IncUser=DB::table('users')
                ->where('id', $followerData->created_by_user_id)
                ->update(
                    [
                        'no_of_followers' => $FriendUser->no_of_followers+1,
                    ]
                );

            //-----------------Update and Increment for Friend----------------------


//            $notification_id=DB::table('notifications')->insertGetId(
//                [
//                    'notification_for_user_id' => $followerData->created_by_user_id,
//                    'notification_type' => 'Follow',
//                    'reference_type' => 'User',
//                    'reference_id' => $followerData->created_by_user_id,
//                    'read_status' => 'Unread',
//
//                    'status' => 'Active',
//                    'created_by_comp_id' => $session_comp_id,
//                    'created_by_user_id' => $session_user_id,
//                    'created_at' => $CurrentDateTime,
//                ]
//                , 'id');



            if($IncUser){

                $data[]=array(
                    'error' => 'false',
                    'code' => '200',
                    'message' => 'Successfully Followed Back'
                );
                $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
                return $jsonData;

            }else{

                $data[]=array(
                    'error' => 'true',
                    'code' => '0',
                    'message' => 'Query Failed, Contact System administrator.'
                );

                $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
                return $jsonData;
            }

        }else{

            $data[]=array(
                'error' => 'true',
                'code' => '0',
                'message' => 'Operation Failed, Contact System administrator.'
            );

            $jsonData = json_encode($data, JSON_UNESCAPED_SLASHES); // Remove backward slashes from URL and encode
            return $jsonData;

        }

    }

    //    --------------------------------------------/followBack-------------------------------------------------------




}
