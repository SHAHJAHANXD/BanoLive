<?php

namespace App\Http\Controllers\API;

use Facade\FlareClient\Api;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\Gallery;
use App\Models\Story;
use App\Models\StoryViewer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use \Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controllers\BaseController
{


    public function directoryForTemp()
    {
        return 'temp/user';
    }

    public function directoryForFiles()
    {
        return 'user/files';
    }

    public function directoryForImages()
    {
        return 'user/images';
    }

    public function directoryForVideos()
    {
        return 'user/videos';
    }


    public function directoryForAudios()
    {
        return 'user/audios';
    }

    public function moduleName()
    {
        return 'User';
    }



    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */


    public function SignUpAdmin(Request $request)
    {


        $validator = Validator::make($request->all(), [

            'full_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',


        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        $usersData = DB::table('users')
            ->where('email', $request->email)
            ->count();

        if ($usersData == 1) {
            return $this->sendResponse(true, 223, null, 'Email already exist.');
        }
        $input = $request->all(); //Store all request data in variable
        $input['user_type_id'] = 2; //Admin
        $input['country_code_id'] = $request->country_code;

        $input['gender'] = $request->gender;
        $input['image'] = 'user/images/' . $request->profile_picture_details;


        $input['id_front'] = $request->front_gov_id_details;
        $input['id_back'] = $request->back_gov_id_details;
        $input['id_number'] = $request->id_number;

        $input['count_posts'] = 0;
        $input['count_followers'] = 0;
        $input['count_following'] = 0;

        $input['no_of_followings'] = 0;
        $input['no_of_followers'] = 0;

        $nine_digit_code = mt_rand(100000000, 999999999);

        $input['code'] = $nine_digit_code;

        $input['status'] = 'Pending';

        $input['password'] = bcrypt($input['password']); //Encrypt password
        $user = User::create($input); //create user put all information
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['full_name'] =  $user->full_name;
        $user_id = $user->id;

        if ($request->address != null) {

            $address_id = DB::table('addresses')->insertGetId(
                [
                    'reference_id' => $user_id,
                    'reference_type' => 'User',

                    'address' => $request->address,

                    'created_by_user_id' => $user_id,
                    'status' => 'Active',
                ],
                'id'
            );
        }

        if ($request->resume_details != null) {

            $resume_id = DB::table('resumes')->insertGetId(
                [
                    'file' => $request->resume_details,

                    'created_by_user_id' => $user_id,
                    'status' => 'Active',
                ],
                'id'
            );
        }



        if ($request->company_name != null || $request->company_registration_number != null) {

            $company_id = DB::table('companies')->insertGetId(
                [
                    'title' => $request->company_name,
                    'reg_number' => $request->company_registration_number,

                    'created_by_user_id' => $user_id,
                    'status' => 'Active',
                ],
                'id'
            );



            if ($request->company_address != null) {

                $address_id = DB::table('addresses')->insertGetId(
                    [
                        'reference_id' => $company_id,
                        'reference_type' => 'Company',

                        'address' => $request->company_address,

                        'created_by_user_id' => $user_id,
                        'status' => 'Active',
                    ],
                    'id'
                );
            }
        }



        if ($request->bank_name != null || $request->iban != null || $request->swift_bic_code != null || $request->branch_code != null || $request->account_title != null || $request->account_number != null) {

            $payment_method_id = DB::table('payment_methods')->insertGetId(
                [
                    'bank_name' => $request->bank_name,
                    'iban' => $request->iban,
                    'swift_bic' => $request->swift_bic,
                    'branch_code' => $request->branch_code,
                    'account_title' => $request->account_title,
                    'account_number' => $request->account_number,

                    'created_by_user_id' => $user_id,
                    'status' => 'Active',
                ],
                'id'
            );
        }




        $data = [
            'code' => 'https://banolive.com/sign-up/agency?admin=' . $nine_digit_code
        ];

        if ($success == true) {
            return $this->sendResponse(false, 200, $data, 'Admin register successfully.');
        } else {
            return $this->sendResponse(true, 233, null, 'Admin register failed.');
        }
    }

    // Story Viewers
    public function addStoryViewers(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'story_id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, $validator->errors());
        }
        $data = [
            'user_id' => $request->user_id,
            'story_id' => $request->story_id
        ];
        $viewer = StoryViewer::where(['story_id' => $request->story_id, 'user_id' => $request->user_id])->first();
        if ($viewer == null) {
            $story = Story::where('id', $request->story_id)->first();
            if ($story) {
                $user = StoryViewer::create($data);
                $count = $story->viewers + 1;
                $viewers_counter = Story::where('id', $request->story_id)->update(['viewers' => $count]);
                return $this->sendResponse(false, 200, null, 'Viewer Added Successfully');
            } else {
                return $this->sendResponse(true, 223, null, "Story doesn't exist!");
            }
        } else {
            return $this->sendResponse(true, 223, null, 'Viewer Already Exists!');
        }
    }

    public function SignUpAgency(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'full_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',


        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }

        $AdminData = DB::table('users')
            ->where('user_type_id', 2) //Admin
            ->where('code', $request->reference_code)
            ->count();

        if ($AdminData == 0) {
            return $this->sendResponse(true, 223, null, 'Admin reference code not found.');
        }
        $usersData = DB::table('users')
            ->where('email', $request->email)
            ->count();

        if ($usersData == 1) {
            return $this->sendResponse(true, 223, null, 'Email already exist.');
        }
        $input = $request->all(); //Store all request data in variable
        $input['user_type_id'] = 4; //Agency
        $input['country_code_id'] = $request->country_code;

        $input['reference_code'] = $request->reference_code;

        $input['gender'] = $request->gender;
        $input['image'] = 'user/images/' . $request->profile_picture_details;


        $input['id_front'] = $request->front_gov_id_details;
        $input['id_back'] = $request->back_gov_id_details;
        $input['id_number'] = $request->id_number;

        $input['count_posts'] = 0;
        $input['count_followers'] = 0;
        $input['count_following'] = 0;

        $input['no_of_followings'] = 0;
        $input['no_of_followers'] = 0;

        $nine_digit_code = mt_rand(100000000, 999999999);

        $input['code'] = $nine_digit_code;

        $input['status'] = 'Pending';

        $input['password'] = bcrypt($input['password']); //Encrypt password
        $user = User::create($input); //create user put all information
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['full_name'] =  $user->full_name;
        $user_id = $user->id;

        if ($request->address != null) {

            $address_id = DB::table('addresses')->insertGetId(
                [
                    'reference_id' => $user_id,
                    'reference_type' => 'User',

                    'address' => $request->address,

                    'created_by_user_id' => $user_id,
                    'status' => 'Active',
                ],
                'id'
            );
        }

        if ($request->resume_details != null) {

            $resume_id = DB::table('resumes')->insertGetId(
                [
                    'file' => $request->resume_details,

                    'created_by_user_id' => $user_id,
                    'status' => 'Active',
                ],
                'id'
            );
        }



        if ($request->company_name != null || $request->company_registration_number != null) {

            $company_id = DB::table('companies')->insertGetId(
                [
                    'title' => $request->company_name,
                    'reg_number' => $request->company_registration_number,

                    'created_by_user_id' => $user_id,
                    'status' => 'Active',
                ],
                'id'
            );



            if ($request->company_address != null) {

                $address_id = DB::table('addresses')->insertGetId(
                    [
                        'reference_id' => $company_id,
                        'reference_type' => 'Company',

                        'address' => $request->company_address,

                        'created_by_user_id' => $user_id,
                        'status' => 'Active',
                    ],
                    'id'
                );
            }
        }



        if ($request->bank_name != null || $request->iban != null || $request->swift_bic_code != null || $request->branch_code != null || $request->account_title != null || $request->account_number != null) {

            $payment_method_id = DB::table('payment_methods')->insertGetId(
                [
                    'bank_name' => $request->bank_name,
                    'iban' => $request->iban,
                    'swift_bic' => $request->swift_bic,
                    'branch_code' => $request->branch_code,
                    'account_title' => $request->account_title,
                    'account_number' => $request->account_number,

                    'created_by_user_id' => $user_id,
                    'status' => 'Active',
                ],
                'id'
            );
        }




        $data = [
            'code' => 'https://banolive.com/sign-up/host?agency=' . $nine_digit_code
        ];





        if ($success == true) {
            return $this->sendResponse(false, 200, $data, 'Agency register successfully.');
        } else {
            return $this->sendResponse(true, 233, null, 'Agency register failed.');
        }
    }

    public function SignUpHost(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'full_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',


        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }

        $AgencyData = DB::table('users')
            ->where('user_type_id', 4) //Agency
            ->where('code', $request->reference_code)
            ->count();

        if ($AgencyData == 0) {
            return $this->sendResponse(true, 223, null, 'Agency reference code not found.');
        }


        $usersData = DB::table('users')
            ->where('email', $request->email)
            ->count();

        if ($usersData == 1) {
            return $this->sendResponse(true, 223, null, 'Email already exist.');
        }

        $input = $request->all(); //Store all request data in variable
        $input['user_type_id'] = 3; //Host
        $input['country_code_id'] = $request->country_code;

        $input['reference_code'] = $request->reference_code;

        $input['gender'] = $request->gender;
        $input['image'] = 'user/images/' . $request->profile_picture_details;


        $input['id_front'] = $request->front_gov_id_details;
        $input['id_back'] = $request->back_gov_id_details;
        $input['id_number'] = $request->id_number;

        $input['count_posts'] = 0;
        $input['count_followers'] = 0;
        $input['count_following'] = 0;

        $input['no_of_followings'] = 0;
        $input['no_of_followers'] = 0;

        $nine_digit_code = mt_rand(100000000, 999999999);

        $input['code'] = $nine_digit_code;

        $input['status'] = 'Pending';

        $input['password'] = bcrypt($input['password']); //Encrypt password
        $user = User::create($input); //create user put all information
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['full_name'] =  $user->full_name;
        $user_id = $user->id;



        if ($request->address != null) {

            $address_id = DB::table('addresses')->insertGetId(
                [
                    'reference_id' => $user_id,
                    'reference_type' => 'User',

                    'address' => $request->address,

                    'created_by_user_id' => $user_id,
                    'status' => 'Active',
                ],
                'id'
            );
        }






        if ($request->resume_details != null) {

            $resume_id = DB::table('resumes')->insertGetId(
                [
                    'file' => $request->resume_details,

                    'created_by_user_id' => $user_id,
                    'status' => 'Active',
                ],
                'id'
            );
        }



        if ($request->company_name != null || $request->company_registration_number != null) {

            $company_id = DB::table('companies')->insertGetId(
                [
                    'title' => $request->company_name,
                    'reg_number' => $request->company_registration_number,

                    'created_by_user_id' => $user_id,
                    'status' => 'Active',
                ],
                'id'
            );



            if ($request->company_address != null) {

                $address_id = DB::table('addresses')->insertGetId(
                    [
                        'reference_id' => $company_id,
                        'reference_type' => 'Company',

                        'address' => $request->company_address,

                        'created_by_user_id' => $user_id,
                        'status' => 'Active',
                    ],
                    'id'
                );
            }
        }



        if ($request->bank_name != null || $request->iban != null || $request->swift_bic_code != null || $request->branch_code != null || $request->account_title != null || $request->account_number != null) {

            $payment_method_id = DB::table('payment_methods')->insertGetId(
                [
                    'bank_name' => $request->bank_name,
                    'iban' => $request->iban,
                    'swift_bic' => $request->swift_bic,
                    'branch_code' => $request->branch_code,
                    'account_title' => $request->account_title,
                    'account_number' => $request->account_number,

                    'created_by_user_id' => $user_id,
                    'status' => 'Active',
                ],
                'id'
            );
        }




        $data = [
            'code' => 'https://banolive.com/sign-up/host?agency=' . $nine_digit_code
        ];





        if ($success == true) {
            return $this->sendResponse(false, 200, $data, 'Host register successfully.');
        } else {
            return $this->sendResponse(true, 233, null, 'Host register failed.');
        }
    }

    public function SignUpAgent(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'full_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',


        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }

        $usersData = DB::table('users')
            ->where('email', $request->email)
            ->count();

        if ($usersData == 1) {
            return $this->sendResponse(true, 223, null, 'Email already exist.');
        }


        $input = $request->all(); //Store all request data in variable
        $input['user_type_id'] = 5; //Agent
        $input['country_code_id'] = $request->country_code;

        $input['gender'] = $request->gender;
        $input['image'] = 'user/images/' . $request->profile_picture_details;


        $input['id_front'] = $request->front_gov_id_details;
        $input['id_back'] = $request->back_gov_id_details;
        $input['id_number'] = $request->id_number;

        $input['count_posts'] = 0;
        $input['count_followers'] = 0;
        $input['count_following'] = 0;

        $input['no_of_followings'] = 0;
        $input['no_of_followers'] = 0;

        $nine_digit_code = mt_rand(100000000, 999999999);

        $input['code'] = $nine_digit_code;

        $input['status'] = 'Pending';

        $input['password'] = bcrypt($input['password']); //Encrypt password
        $user = User::create($input); //create user put all information
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['full_name'] =  $user->full_name;
        $user_id = $user->id;

        if ($request->address != null) {

            $address_id = DB::table('addresses')->insertGetId(
                [
                    'reference_id' => $user_id,
                    'reference_type' => 'User',

                    'address' => $request->address,

                    'created_by_user_id' => $user_id,
                    'status' => 'Active',
                ],
                'id'
            );
        }
        if ($request->resume_details != null) {

            $resume_id = DB::table('resumes')->insertGetId(
                [
                    'file' => $request->resume_details,

                    'created_by_user_id' => $user_id,
                    'status' => 'Active',
                ],
                'id'
            );
        }
        if ($request->company_name != null || $request->company_registration_number != null) {

            $company_id = DB::table('companies')->insertGetId(
                [
                    'title' => $request->company_name,
                    'reg_number' => $request->company_registration_number,

                    'created_by_user_id' => $user_id,
                    'status' => 'Active',
                ],
                'id'
            );
            if ($request->company_address != null) {

                $address_id = DB::table('addresses')->insertGetId(
                    [
                        'reference_id' => $company_id,
                        'reference_type' => 'Company',

                        'address' => $request->company_address,

                        'created_by_user_id' => $user_id,
                        'status' => 'Active',
                    ],
                    'id'
                );
            }
        }
        if ($request->bank_name != null || $request->iban != null || $request->swift_bic_code != null || $request->branch_code != null || $request->account_title != null || $request->account_number != null) {

            $payment_method_id = DB::table('payment_methods')->insertGetId(
                [
                    'bank_name' => $request->bank_name,
                    'iban' => $request->iban,
                    'swift_bic' => $request->swift_bic,
                    'branch_code' => $request->branch_code,
                    'account_title' => $request->account_title,
                    'account_number' => $request->account_number,

                    'created_by_user_id' => $user_id,
                    'status' => 'Active',
                ],
                'id'
            );
        }
        $data = [
            'code' => 'https://banolive.com/sign-up/agency?admin=' . $nine_digit_code
        ];
        if ($success == true) {
            return $this->sendResponse(false, 200, $data, 'Admin register successfully.');
        } else {
            return $this->sendResponse(true, 233, null, 'Admin register failed.');
        }
    }

    public function resendCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors()]);
        }
        $email = $request->email;
        $nine_digit_code = mt_rand(100000, 999999);
        $email_found = User::where('email', $email)->count();
        if ($email_found == 0) {
            return $this->sendResponse(false, 200, null, 'User not found. Please confirm your email.');
        } else {
            $user = User::where('email', $email)->first();
            $user->code = $nine_digit_code;
            $user->save();
            Mail::send('emails.verifyemail', ['otp' => $nine_digit_code], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Verify Email');
            });
        }
        if ($user == true) {
            return $this->sendResponse(false, 200, null, 'Resend email sent successfuly.');
        } else {
            return $this->sendResponse(true, 233, null, 'Email sending failed.');
        }
    }


    public function SignUpUser(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            //            'number' => 'required',
            'password' => 'required',


        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }

        $usersData = DB::table('users')
            ->where('email', $request->email)
            ->count();

        if ($usersData == 1) {
            return $this->sendResponse(true, 223, null, 'Email already exist.');
        }


        $input = $request->all(); //Store all request data in variable
        // dd($input);
        $input['user_type_id'] = 6; //User
        $input['country_code_id'] = 181;

        $input['count_posts'] = 0;
        $input['count_followers'] = 0;
        $input['count_following'] = 0;

        $input['no_of_followings'] = 0;
        $input['no_of_followers'] = 0;
        //$input['country_code'] = $request->country_code;


        $nine_digit_code = mt_rand(100000, 999999);

        $mail =   Mail::send('emails.verifyemail', ['otp' => $nine_digit_code], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Verify Email');
        });
        if ($mail == false) {
            return $this->sendResponse(true, 233, null, 'User register failed.');
        }
        $input['code'] = $nine_digit_code;


        $input['status'] = 'Active';

        $input['password'] = bcrypt($input['password']); //Encrypt password
        $input['country_code'] = $request->country_code;
        $user = User::create($input); //create user put all information
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['full_name'] =  $user->full_name;
        $user_id = $user->id;

        if ($success == true) {
            return $this->sendResponse(false, 200, null, 'User register successfully.');
        } else {
            return $this->sendResponse(true, 233, null, 'User register failed.');
        }
    }

    public function forgetpassword(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'email' => 'required|email',


        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Emai Field is Required');
        }
        $email = $request->email;
        $user = User::where('email', $email)->first();
        $otp = User::where('email', $email)->value('code');
        if (!$user) {
            return response()->json(['status' => true, 'message' => "email not found"]);
        } else {
            Mail::to($email)->send(new \App\Mail\verifyotp($otp));

            return response()->json(['status' => true, 'message' => "email has been send"]);
        }
    }

    public function verifyotp(Request $request)
    {

        $otp = $request->code;
        $user = User::where('code', $otp, 'email', $request->email)->first();
        if (!$user) {
            return response()->json(['status' => false, 'message' => "OTP not exist"], 200);
        } else {
            return response()->json(['status' => true, 'message' => "VERIFIED"], 200);
        }
    }



    public function SignUpSocialUser(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'email' => 'required',
            'social_login_type' => 'required',
            'social_login_id' => 'required',


        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Emai Field is Required');
        }
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->social_login_id = $request->social_login_id;
        $user->social_login_type = $request->social_login_type;
        if ($request->has('image')) {

            $thumbnailfiles = $request->file('image');

            $thumbnailfile_origninl_name =  $thumbnailfiles->getClientOriginalName();
            $thumbnailfile_name = $thumbnailfile_origninl_name . time() . "." . $thumbnailfiles->getClientOriginalExtension();
            $thumbnailfiles->move('storage/images/', $thumbnailfile_name);
            $thumbnailpath = url('/') . '/' . 'storage/images/' . $thumbnailfile_name;

            $user->image  =  $thumbnailpath;
        }
        // dd($request);
        $user->save();


        $user =  $user;
        $token =  $user->createToken('MyApp')->accessToken;


        return response()->json(['status' => true, 'message' => 'User Login Successfully!', 'data' => $user, 'token' => $token], 200);
    }











    public function userUpdate(Request $request)
    {

        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);

        $is_session = $this->GetSession();

        if ($is_session) {
            $session_user_id = $request->session()->get('project')->id;
            $User = $this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        } else {
            $User = null;
        }


        $validator = Validator::make($request->all(), [

            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required',
            'phone_number' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }


        $query = DB::table('users')
            ->where('id', $session_user_id)
            ->update(
                [
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,

                    'full_name' => $request->first_name . ' ' . $request->last_name,

                    'gender' => $request->gender,
                    'username' => $request->username,
                    'email' => $request->email_address,
                    'number' => $request->phone_number,
                    'about' => $request->about,

                    'address' => $request->address,
                    'facebook' => $request->facebook,
                    'linkedin' => $request->linkedin,
                    'twitter' => $request->twitter,
                    'instagram' => $request->instagram,

                    'status' => 'Active',
                    'updated_at' => date("Y-m-d H:i:s", strtotime('now')),
                    'updated_by_user_id' => $session_user_id,
                ]
            );



        if ($query) {
            return $this->sendResponse(false, 200, null, 'User register successfully.');
        } else {
            return $this->sendResponse(true, 233, null, 'User register failed.');
        }
    }

    public function userDelete(Request $request)
    {


        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        $UserData = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->first();


        $query = DB::table('users')->where('id', '=', $request->id)->delete();

        if ($UserData->user_type_slug == 'agency') {
            $query = DB::table('agencies')->where('created_by_user_id', '=', $request->id)->delete();
        }


        if (true) {
            return $this->sendResponse(false, 200, null, 'Record has been deleted.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }

    public function userBlock(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $query = DB::table('users')
            ->where('id', '=', $request->id)
            ->update(
                [
                    'status' => 'Blocked',
                ]
            );

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'User has been blocked.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }

    public function userUnblocked(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $query = DB::table('users')
            ->where('id', '=', $request->id)
            ->update(
                [
                    'status' => 'Active',
                ]
            );

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'User has been unblocked.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }




    public function userValidateEmail(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'email' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //------------------------------Duplicate check for email----------------------------------------

        $usersData = DB::table('users')
            ->where('email', $request->email)
            ->count();

        if ($usersData >= 1) {
            return $this->sendResponse(true, 223, null, 'Email already exist.');
        }

        //------------------------------Duplicate check for email----------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Great, You can register through this email');
        } else {
            return $this->sendResponse(true, 233, null, 'Something went wrong');
        }

        //-------------------------------------------------------------------------

    }

    public function userValidateNumber(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'country_code' => 'required',
            'number' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //------------------------------Duplicate check for email----------------------------------------

        $usersData = DB::table('users')
            ->where('country_code_id', $request->country_code)
            ->where('number', $request->number)
            ->count();



        if ($usersData >= 1) {
            return $this->sendResponse(true, 223, null, 'Number already exist.');
        }

        //------------------------------Duplicate check for email----------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Great, You can register through this number');
        } else {
            return $this->sendResponse(true, 233, null, 'Something went wrong');
        }

        //-------------------------------------------------------------------------

    }


    public function userValidateAdminCode(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'reference_code' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //------------------------------Duplicate check for email----------------------------------------

        $usersData = DB::table('users')
            ->where('user_type_id', 2) //Admin
            ->where('code', $request->reference_code)
            ->count();



        if ($usersData == 0) {
            return $this->sendResponse(true, 223, null, 'Code is invalid.');
        }

        //------------------------------Duplicate check for email----------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Great, You can register through this number');
        } else {
            return $this->sendResponse(true, 233, null, 'Something went wrong');
        }

        //-------------------------------------------------------------------------

    }

    public function userValidateAgencyCode(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'reference_code' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //------------------------------Duplicate check for email----------------------------------------

        $usersData = DB::table('users')
            ->where('user_type_id', 4) //Agency
            ->where('code', $request->reference_code)
            ->count();



        if ($usersData == 0) {
            return $this->sendResponse(true, 223, null, 'Code is invalid.');
        }

        //------------------------------Duplicate check for email----------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Great, You can register through this number');
        } else {
            return $this->sendResponse(true, 233, null, 'Something went wrong');
        }

        //-------------------------------------------------------------------------

    }


    public function userApprove(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $query = DB::table('users')
            ->where('id', '=', $request->id)
            ->update(
                [
                    'status' => 'Active',
                ]
            );

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'User has been Activated.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }





    public function agencyDelete(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //---------------------------Data-------------------------------------

        $AgencyData = DB::table('agencies')
            ->where('id', $request->id)
            ->first();

        //--------------------------/Data-------------------------------------








        //-------------------------------------Registration-----------------------------------------------

        $query = DB::table('agencies')->where('id', '=', $request->id)->delete();
        $query = DB::table('users')->where('id', '=', $AgencyData->created_by_user_id)->delete();

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Record has been deleted.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }

    public function agencyBlock(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $query = DB::table('agencies')
            ->where('id', '=', $request->id)
            ->update(
                [
                    'status' => 'Blocked',
                ]
            );

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Agency has been blocked.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }

    public function agencyUnblocked(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $query = DB::table('agencies')
            ->where('id', '=', $request->id)
            ->update(
                [
                    'status' => 'Active',
                ]
            );

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Agency has been unblocked.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }

    public function agencyApprove(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $query = DB::table('agencies')
            ->where('id', '=', $request->id)
            ->update(
                [
                    'status' => 'Active',
                ]
            );

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Agency has been Activated.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if ($request->email) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = Auth::user();

                $success['token'] =  $user->createToken('MyApp')->accessToken;

                $success['user'] =  $user;

                $request->session()->put('project', $user);
                if ($user->is_verified == 1) {
                    return $this->sendResponse(false, 200, $success, 'User login successfully.');
                } else {
                    return $this->sendResponse(true, 342, null, 'User is not Verified!');
                }
            } else {
                return $this->sendResponse(true, 342, null, 'Email or password is incorrect.');
            }
        } else {

            if (Auth::attempt(['number' => $request->number, 'password' => $request->password])) {
                $user = Auth::user();
                $success['token'] =  $user->createToken('MyApp')->accessToken;

                $success['user'] =  $user;

                $request->session()->put('project', $user);

                return $this->sendResponse(false, 200, $success, 'User login successfully.');
            } else {
                return $this->sendResponse(true, 342, null, 'Number or password is incorrect.');
            }
        }
    }


    public function forgot(Request $request)
    {

        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //------------------------------Duplicate check for email----------------------------------------

        $usersData = DB::table('users')
            ->where('email', $request->email)
            ->count();

        if ($usersData == 0) {
            return $this->sendResponse(true, 223, null, 'Email not found.');
        }

        //------------------------------Duplicate check for email----------------------------------------



        $six_digit_random_number = mt_rand(100000, 999999);


        //        $details = [
        //            'title' => 'Deal Board Password Reset Code',
        //            'body' => 'You have requested a password reset, your password reset code is '.$six_digit_random_number
        //        ];
        //
        //        \Mail::to($request->email)->send(new \App\Mail\ForgotPasswordMail($details));
        //



        //------------------------------------Email Registration-----------------------------------------------


        $password_reset_id = DB::table('password_resets')->insertGetId(
            [
                'email' => $request->email,
                'code' => $six_digit_random_number,
                'token' => sha1(time()),
                'status' => 'Active',
            ],
            'id'
        );

        //-----------------------------------/Email Registration-----------------------------------------------




        //-------------------------------------------------------------------------

        if (true) {
            return $this->sendResponse(false, 200, null, 'User register successfully.');
        } else {
            return $this->sendResponse(true, 233, null, 'User register failed.');
        }

        //-------------------------------------------------------------------------

    }

    public function validateCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'code' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors()]);
        }

        $user = User::where('email', $request->email)->first();
        //dd($user);
        if ($user) {

            $data = User::where(['email' => $user->email, 'code' => $request->code])->first();

            if ($data) {
                //return response()->json('message', "VERIFIED");
                User::where('id', $data->id)->update(['is_verified' => 1]);
                return $this->sendResponse(false, 200, null, 'VERIFIED');
            } else {
                //return response()->json('message', "I don't know");
                return $this->sendResponse(true, 233, null, "OTP doesn't matched");
            }
        } else
            //return response()->json('message', "email not exist");
            return $this->sendResponse(true, 233, null, 'email not exist');
    }

    public function changePassword(Request $request)
    {

        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'token' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        $passwordResetCount = DB::table('password_resets')
            ->where('token', $request->token)
            ->where('status', 'Active')
            ->count();

        if ($passwordResetCount == 0) {
            return $this->sendResponse(true, 223, null, 'Token expired.');
        }




        $passwordResetData = DB::table('password_resets')
            ->where('token', $request->token)
            ->where('status', 'Active')
            ->first();



        $query = DB::table('users')
            ->where('email', $passwordResetData->email)
            ->update(
                [
                    'password' => bcrypt($request->password),
                ]
            );


        $query = DB::table('password_resets')
            ->where('token', $request->token)
            ->update(
                [
                    'status' => 'Inactive',
                ]
            );


        //-------------------------------------------------------------------------

        if (true) {
            return $this->sendResponse(false, 200, null, 'Password successfully changed.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request failed.');
        }

        //-------------------------------------------------------------------------

    }





    public function contactCreate(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'subject' => 'required',
            'email' => 'required',
            'number' => 'required',
            'message' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $contact_id = DB::table('contacts')->insertGetId(
            [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,

                'status' => 'Active',
            ],
            'id'
        );

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Request has been sent successfully.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }

    public function contactDelete(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------

        $query = DB::table('contacts')->where('id', '=', $request->id)->delete();

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Record has been deleted.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }






    public function onboardAdminCreate(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'title' => 'required',
            'valid_from' => 'required',
            'valid_till' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $onboard_id = DB::table('onboards')->insertGetId(
            [
                'code' => mt_rand(100000000, 999999999),
                'title' => $request->title,
                'description' => $request->description,
                'valid_from' => $request->valid_from,
                'valid_till' => $request->valid_till,
                'type' => 'Admin',

                'status' => 'Active',
            ],
            'id'
        );

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Link has been created.');
        } else {
            return $this->sendResponse(true, 233, null, 'Link has been failed.');
        }

        //-------------------------------------------------------------------------

    }


    public function onboardTopUpAgentCreate(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'title' => 'required',
            'valid_from' => 'required',
            'valid_till' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $onboard_id = DB::table('onboards')->insertGetId(
            [
                'code' => mt_rand(100000000, 999999999),
                'title' => $request->title,
                'description' => $request->description,
                'valid_from' => $request->valid_from,
                'valid_till' => $request->valid_till,
                'type' => 'TopUp Agent',

                'status' => 'Active',
            ],
            'id'
        );

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Link has been created.');
        } else {
            return $this->sendResponse(true, 233, null, 'Link has been failed.');
        }

        //-------------------------------------------------------------------------

    }


    public function onboardDelete(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------

        $query = DB::table('onboards')->where('id', '=', $request->id)->delete();

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Record has been deleted.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }








    public function faqCreate(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'question' => 'required',
            'answer' => 'required',
            'type' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $faq_id = DB::table('faqs')->insertGetId(
            [
                'question' => $request->question,
                'answer' => $request->answer,
                'type' => $request->type,

                'status' => 'Active',
            ],
            'id'
        );

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'FAQ has been saved successfully.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }

    public function faqDelete(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------

        $query = DB::table('faqs')->where('id', '=', $request->id)->delete();

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Record has been deleted.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }













    public function categoryParentCreate(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'title' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $parent_category_id = DB::table('parent_categories')->insertGetId(
            [
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description,

                'status' => 'Active',
            ],
            'id'
        );

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Request has been sent successfully.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }

    public function categoryParentDelete(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------

        $query = DB::table('parent_categories')->where('id', '=', $request->id)->delete();

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Record has been deleted.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }




    public function categoryChildCreate(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'parent_category_id' => 'required',
            'title' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $child_category_id = DB::table('child_categories')->insertGetId(
            [
                'parent_category_id' => $request->parent_category_id,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description,

                'status' => 'Active',
            ],
            'id'
        );

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Request has been sent successfully.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }

    public function categoryChildDelete(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------

        $query = DB::table('child_categories')->where('id', '=', $request->id)->delete();

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Record has been deleted.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }



    public function categorySubChildCreate(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'child_category_id' => 'required',
            'title' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------


        $sub_child_category_id = DB::table('sub_child_categories')->insertGetId(
            [
                'child_category_id' => $request->child_category_id,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description,

                'status' => 'Active',
            ],
            'id'
        );

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Request has been sent successfully.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }


    public function categorySubChildDelete(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------

        $query = DB::table('sub_child_categories')->where('id', '=', $request->id)->delete();

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Record has been deleted.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }






    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

    public function signUpUploadUserPicture(Request $request)
    {




        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);

        $is_session = $this->GetSession();

        if ($is_session) {
            $session_user_id = $request->session()->get('project')->id;
            $User = $this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        } else {
            $User = null;
        }



        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL = URL::to('/');

        $DirectoryPath = $this->directoryForImages();
        $UploadedFile = null;
        $inc = 0;


        if ($request->hasFile('file')) {


            //            if(Storage::makeDirectory('public/'.$DirectoryPath)){ //Old code for storage

            $inc++;
            $RealPath = $request->file('file')->getRealPath(); //Actual Path
            //                $UploadedFile= $request->file('file')->store('public/'.$DirectoryPath); //Uploaded Path //Old code for storage
            $UploadedFile = $request->file('file')->store($DirectoryPath, ['disk' => 'public_uploads']); //Uploaded Path
            $UploadedFile = basename($UploadedFile); //Get File name from URL



            //            }else{ //Old code for storage
            //                $output=['response'=>['code'=>'78', 'status'=>'Failed', 'message'=>'Directory Not Created.']];
            //                return response()->json($output);
            //            } //Old code for storage


        } else {
            $output = ['response' => ['code' => '40', 'status' => 'Failed', 'message' => 'File Not Found.']];
            return response()->json($output);
        }


        if ($inc == 1) {




            $output = ['response' => [
                'code' => '200',
                'status' => 'Success',
                'message' => 'Successfully Uploaded.',
                'fileName' => $UploadedFile
            ]];

            return response()->json($output);
        } else {

            $output = ['response' => [
                'code' => '0',
                'status' => 'Failed',
                'message' => 'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }
    }


    public function signUpUploadUserResume(Request $request)
    {




        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);

        $is_session = $this->GetSession();

        if ($is_session) {
            $session_user_id = $request->session()->get('project')->id;
            $User = $this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        } else {
            $User = null;
        }



        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL = URL::to('/');

        $DirectoryPath = 'user/resume';
        $UploadedFile = null;
        $inc = 0;


        if ($request->hasFile('file')) {


            //            if(Storage::makeDirectory('public/'.$DirectoryPath)){ //Old code for storage

            $inc++;
            $RealPath = $request->file('file')->getRealPath(); //Actual Path
            //                $UploadedFile= $request->file('file')->store('public/'.$DirectoryPath); //Uploaded Path //Old code for storage
            $UploadedFile = $request->file('file')->store($DirectoryPath, ['disk' => 'public_uploads']); //Uploaded Path
            $UploadedFile = basename($UploadedFile); //Get File name from URL



            //            }else{ //Old code for storage
            //                $output=['response'=>['code'=>'78', 'status'=>'Failed', 'message'=>'Directory Not Created.']];
            //                return response()->json($output);
            //            } //Old code for storage


        } else {
            $output = ['response' => ['code' => '40', 'status' => 'Failed', 'message' => 'File Not Found.']];
            return response()->json($output);
        }


        if ($inc == 1) {




            $output = ['response' => [
                'code' => '200',
                'status' => 'Success',
                'message' => 'Successfully Uploaded.',
                'fileName' => $UploadedFile
            ]];

            return response()->json($output);
        } else {

            $output = ['response' => [
                'code' => '0',
                'status' => 'Failed',
                'message' => 'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }
    }


    public function signUpUploadUserIDFront(Request $request)
    {




        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);

        $is_session = $this->GetSession();

        if ($is_session) {
            $session_user_id = $request->session()->get('project')->id;
            $User = $this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        } else {
            $User = null;
        }



        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL = URL::to('/');

        $DirectoryPath = 'user/ids';
        $UploadedFile = null;
        $inc = 0;


        if ($request->hasFile('file')) {


            //            if(Storage::makeDirectory('public/'.$DirectoryPath)){ //Old code for storage

            $inc++;
            $RealPath = $request->file('file')->getRealPath(); //Actual Path
            //                $UploadedFile= $request->file('file')->store('public/'.$DirectoryPath); //Uploaded Path //Old code for storage
            $UploadedFile = $request->file('file')->store($DirectoryPath, ['disk' => 'public_uploads']); //Uploaded Path
            $UploadedFile = basename($UploadedFile); //Get File name from URL



            //            }else{ //Old code for storage
            //                $output=['response'=>['code'=>'78', 'status'=>'Failed', 'message'=>'Directory Not Created.']];
            //                return response()->json($output);
            //            } //Old code for storage


        } else {
            $output = ['response' => ['code' => '40', 'status' => 'Failed', 'message' => 'File Not Found.']];
            return response()->json($output);
        }


        if ($inc == 1) {




            $output = ['response' => [
                'code' => '200',
                'status' => 'Success',
                'message' => 'Successfully Uploaded.',
                'fileName' => $UploadedFile
            ]];

            return response()->json($output);
        } else {

            $output = ['response' => [
                'code' => '0',
                'status' => 'Failed',
                'message' => 'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }
    }


    public function signUpUploadUserIDBack(Request $request)
    {




        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);

        $is_session = $this->GetSession();

        if ($is_session) {
            $session_user_id = $request->session()->get('project')->id;
            $User = $this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        } else {
            $User = null;
        }



        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL = URL::to('/');

        $DirectoryPath = 'user/ids';
        $UploadedFile = null;
        $inc = 0;


        if ($request->hasFile('file')) {


            //            if(Storage::makeDirectory('public/'.$DirectoryPath)){ //Old code for storage

            $inc++;
            $RealPath = $request->file('file')->getRealPath(); //Actual Path
            //                $UploadedFile= $request->file('file')->store('public/'.$DirectoryPath); //Uploaded Path //Old code for storage
            $UploadedFile = $request->file('file')->store($DirectoryPath, ['disk' => 'public_uploads']); //Uploaded Path
            $UploadedFile = basename($UploadedFile); //Get File name from URL



            //            }else{ //Old code for storage
            //                $output=['response'=>['code'=>'78', 'status'=>'Failed', 'message'=>'Directory Not Created.']];
            //                return response()->json($output);
            //            } //Old code for storage


        } else {
            $output = ['response' => ['code' => '40', 'status' => 'Failed', 'message' => 'File Not Found.']];
            return response()->json($output);
        }


        if ($inc == 1) {




            $output = ['response' => [
                'code' => '200',
                'status' => 'Success',
                'message' => 'Successfully Uploaded.',
                'fileName' => $UploadedFile
            ]];

            return response()->json($output);
        } else {

            $output = ['response' => [
                'code' => '0',
                'status' => 'Failed',
                'message' => 'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }
    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -




    // - - - - - - - - - - - - - - - - - - -Update Banner and Picture- - - - - - - - - - - - - - - - - - - - - - - - -

    public function uploadProfilePicture(Request $request)
    {




        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);

        $is_session = $this->GetSession();

        if ($is_session) {
            $session_user_id = $request->session()->get('project')->id;
            $User = $this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        } else {
            $User = null;
        }



        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL = URL::to('/');

        $DirectoryPath = $this->directoryForImages();
        $UploadedFile = null;
        $inc = 0;


        if ($request->hasFile('file')) {


            //            if(Storage::makeDirectory('public/'.$DirectoryPath)){ //Old code for storage

            $inc++;
            $RealPath = $request->file('file')->getRealPath(); //Actual Path
            //                $UploadedFile= $request->file('file')->store('public/'.$DirectoryPath); //Uploaded Path //Old code for storage
            $UploadedFile = $request->file('file')->store($DirectoryPath, ['disk' => 'public_uploads']); //Uploaded Path
            $UploadedFile = basename($UploadedFile); //Get File name from URL



            //            }else{ //Old code for storage
            //                $output=['response'=>['code'=>'78', 'status'=>'Failed', 'message'=>'Directory Not Created.']];
            //                return response()->json($output);
            //            } //Old code for storage


        } else {
            $output = ['response' => ['code' => '40', 'status' => 'Failed', 'message' => 'File Not Found.']];
            return response()->json($output);
        }


        if ($inc == 1) {




            $query = DB::table('users')
                ->where('id', $session_user_id)
                ->update(
                    [
                        'image' => $DirectoryPath . '/' . $UploadedFile,

                        'updated_at' => date("Y-m-d H:i:s", strtotime('now')),
                        'updated_by_user_id' => $session_user_id,
                    ]
                );









            $output = ['response' => [
                'code' => '200',
                'status' => 'Success',
                'message' => 'Successfully Uploaded.',
                'fileName' => $UploadedFile
            ]];

            return response()->json($output);
        } else {

            $output = ['response' => [
                'code' => '0',
                'status' => 'Failed',
                'message' => 'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }
    }



    public function uploadProfileBanner(Request $request)
    {




        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);

        $is_session = $this->GetSession();

        if ($is_session) {
            $session_user_id = $request->session()->get('project')->id;
            $User = $this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        } else {
            $User = null;
        }



        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL = URL::to('/');

        $DirectoryPath = $this->directoryForImages();
        $UploadedFile = null;
        $inc = 0;


        if ($request->hasFile('file')) {


            //            if(Storage::makeDirectory('public/'.$DirectoryPath)){ //Old code for storage

            $inc++;
            $RealPath = $request->file('file')->getRealPath(); //Actual Path
            //                $UploadedFile= $request->file('file')->store('public/'.$DirectoryPath); //Uploaded Path //Old code for storage
            $UploadedFile = $request->file('file')->store($DirectoryPath, ['disk' => 'public_uploads']); //Uploaded Path
            $UploadedFile = basename($UploadedFile); //Get File name from URL



            //            }else{ //Old code for storage
            //                $output=['response'=>['code'=>'78', 'status'=>'Failed', 'message'=>'Directory Not Created.']];
            //                return response()->json($output);
            //            } //Old code for storage


        } else {
            $output = ['response' => ['code' => '40', 'status' => 'Failed', 'message' => 'File Not Found.']];
            return response()->json($output);
        }


        if ($inc == 1) {




            $query = DB::table('users')
                ->where('id', $session_user_id)
                ->update(
                    [
                        'banner' => $DirectoryPath . '/' . $UploadedFile,

                        'updated_at' => date("Y-m-d H:i:s", strtotime('now')),
                        'updated_by_user_id' => $session_user_id,
                    ]
                );









            $output = ['response' => [
                'code' => '200',
                'status' => 'Success',
                'message' => 'Successfully Uploaded.',
                'fileName' => $UploadedFile
            ]];

            return response()->json($output);
        } else {

            $output = ['response' => [
                'code' => '0',
                'status' => 'Failed',
                'message' => 'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }
    }

    // - - - - - - - - - - - - - - - - - - -Update Banner and Picture- - - - - - - - - - - - - - - - - - - - - - - - -





    // - - - - - - - - - - - - - - - - - - - NewsFeed - - - - - - - - - - - - - - - - - - - - - - - - -


    public function NewsFeedCreate(Request $request)
    {



        $galleryImageCount = $request->galleryImageCount;
        $galleryImages = json_decode($request->galleryImages);



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'privacy' => 'required',
            'description' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------




        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);

        $is_session = $this->GetSession();

        if ($is_session) {
            $session_user_id = $request->session()->get('project')->id;
            $User = $this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        } else {
            $User = null;
        }



        //-------------------------------------Registration-----------------------------------------------


        $newsfeed_id = DB::table('newsfeeds')->insertGetId(
            [
                'privacy_id' => $request->privacy,
                'description' => $request->description,
                'type' => 'General',

                'status' => 'Active',
                'created_by_user_id' => $session_user_id,
            ],
            'id'
        );

        //------------------------------------/Registration-----------------------------------------------




        // -------------- For Gallery Insert --------------
        if ($galleryImageCount > 0) {

            $DirectoryTempPath = $this->directoryForTemp();
            $DirectoryImagesPath = $this->directoryForImages();

            foreach ($galleryImages as $key => $dataTemp) {

                $serverResponseImage = $dataTemp->serverResponseFileName;


                if ($key == 0) {

                    $query = DB::table('newsfeeds')
                        ->where('id', '=', $newsfeed_id)
                        ->update(
                            [
                                'thumbnail' => $serverResponseImage,
                            ]
                        );
                }


                //                if($serverResponseImage!=null && $serverResponseImage!='' && $serverResponseImage!=' ' && File::exists(public_path('uploads/'.$DirectoryTempPath.'/'.$serverResponseImage))){
                //
                //
                //                    if (!File::exists(public_path('uploads/'.$DirectoryImagesPath)))
                //                    {
                //
                //                        File::makeDirectory('uploads/'.$DirectoryImagesPath, 0777, true, true);
                //
                //                    }
                //
                //                    File::move(public_path('uploads/'.$DirectoryTempPath.'/'.$serverResponseImage), public_path('uploads/'.$DirectoryImagesPath.'/'.$serverResponseImage));
                //
                //                    $source=$DirectoryImagesPath.'/'.$serverResponseImage;
                //                }else{
                //                    $source=null;
                //                }
                //
                //                if($source!=null){
                //                    $query=DB::table('galleries')->insert(
                //                        [
                //                            'reference_id' => $newsfeed_id,
                //                            'reference_type' => 'Newsfeed',
                //                            'title' => $request->description,
                //                            'caption' => $request->description,
                //                            'alt_text' => $request->description,
                //                            'source' => $source,
                //                            'thumbnail' => $source,
                //                            'status' => 'Active',
                //                        ]
                //                    );
                //                }



            }
        }
        // -------------- For Gallery Insert --------------




        //---------------------Increment---------------------

        //        $postsData=DB::table('posts')
        ////            ->where('created_by_user_id',$session_user_id)
        ////            ->count();
        ////
        ////
        ////        $query=DB::table('users')
        ////            ->where('id', $session_user_id)
        ////            ->update(
        ////                [
        ////                    'count_posts' => $postsData,
        ////                ]
        ////            );


        //---------------------Increment---------------------






        if (true) {
            return $this->sendResponse(false, 200, null, 'Post has been created successfully.');
        } else {
            return $this->sendResponse(true, 233, null, 'Post has been failed.');
        }

        //-------------------------------------------------------------------------

    }

    public function NewsFeedDelete(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------

        $query = DB::table('newsfeeds')->where('id', '=', $request->id)->delete();

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Record has been deleted.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }

    public function NewsFeedReport(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------

        //$query=DB::table('newsfeeds')->where('id', '=', $request->id)->delete();

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Record has been Reported.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }

    public function newsfeedGalleryUpload(Request $request)
    {

        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL = URL::to('/');

        $DirectoryPath = 'newsfeed';
        $UploadedFile = null;
        $inc = 0;


        if ($request->hasFile('file')) {


            //            if(Storage::makeDirectory('public/'.$DirectoryPath)){ //Old code for storage

            $inc++;
            $RealPath = $request->file('file')->getRealPath(); //Actual Path
            //                $UploadedFile= $request->file('file')->store('public/'.$DirectoryPath); //Uploaded Path //Old code for storage
            $UploadedFile = $request->file('file')->store($DirectoryPath, ['disk' => 'public_uploads']); //Uploaded Path
            $UploadedFile = basename($UploadedFile); //Get File name from URL



            //            }else{ //Old code for storage
            //                $output=['response'=>['code'=>'78', 'status'=>'Failed', 'message'=>'Directory Not Created.']];
            //                return response()->json($output);
            //            } //Old code for storage


        } else {
            $output = ['response' => ['code' => '40', 'status' => 'Failed', 'message' => 'File Not Found.']];
            return response()->json($output);
        }


        if ($inc == 1) {
            $output = ['response' => [
                'code' => '200',
                'status' => 'Success',
                'message' => 'Successfully Uploaded.',
                'fileName' => $UploadedFile
            ]];

            return response()->json($output);
        } else {

            $output = ['response' => [
                'code' => '0',
                'status' => 'Failed',
                'message' => 'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }
    }

    public function newsfeedGalleryDelete(Request $request)
    {

        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL = URL::to('/');

        $DirectoryPath = 'newsfeed';
        $inc = 0;


        $rename_name = $request['rename_name'];

        if ($rename_name != '' && $rename_name != null) {
            //            Storage::delete('public/'.$DirectoryPath.'/'.$rename_name); //Old code for storage

            if (File::exists(public_path('uploads/' . $DirectoryPath . '/' . $rename_name))) {
                File::delete(public_path('uploads/' . $DirectoryPath . '/' . $rename_name));
                $inc++;
            } else {
                $output = ['response' => ['code' => '88', 'status' => 'Failed', 'message' => 'File does not exists.']];
                return response()->json($output);
            }
        } else {
            $output = ['response' => ['code' => '88', 'status' => 'Failed', 'message' => 'File ID Not be Null.']];
            return response()->json($output);
        }






        if ($inc == 1) {

            $output = ['response' => [
                'code' => '200',
                'status' => 'Success',
                'message' => 'Successfully Deleted.'
            ]];

            return response()->json($output);
        } else {

            $output = ['response' => [
                'code' => '0',
                'status' => 'Failed',
                'message' => 'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }
    }

    // - - - - - - - - - - - - - - - - - - -/NewsFeed - - - - - - - - - - - - - - - - - - - - - - - - -








    // - - - - - - - - - - - - - - - - - - - Story - - - - - - - - - - - - - - - - - - - - - - - - -

    public function storyView(Request $request)
    {

        $story = Story::with('stories')->get();

        return $this->sendResponse(false, 200, null, $story);
    }

    public function storyCreate(Request $request)
    {
        $story = new Story();
        $story->created_by_user_id = $request->created_by_user_id;

        if ($request->has('thumbnail')) {

            $thumbnailfiles = $request->file('thumbnail');

            $thumbnailfile_origninl_name =  $thumbnailfiles->getClientOriginalName();
            $thumbnailfile_name = $thumbnailfile_origninl_name . time() . "." . $thumbnailfiles->getClientOriginalExtension();
            $thumbnailfiles->move('storage/images/', $thumbnailfile_name);
            $thumbnailpath = url('/') . '/' . 'storage/auction/' . $thumbnailfile_name;

            $story->thumbnail  =  $thumbnailpath;
        }

        $story->save();

        if ($request->has('file')) {
            $image = $request->file('file');
            foreach ($image as $index => $files) {

                $file_origninl_name =  $files->getClientOriginalName();
                $file_name = $file_origninl_name . time() . $index . "." . $files->getClientOriginalExtension();
                $files->move('storage/images/', $file_name);
                $imagepath = url('/') . '/' . 'storage/images/' . $file_name;

                $client = new Gallery();
                $client->reference_id = $story->id;
                $client->source = $imagepath;
                $client->save();
            }
        }

        return $this->sendResponse(false, 200, null, 'Story Added Successfully.');
    }

    public function storyDelete(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------

        $query = DB::table('stories')->where('id', '=', $request->id)->delete();

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Record has been deleted.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }

    public function storyReport(Request $request)
    {



        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------



        //-------------------------------------Registration-----------------------------------------------

        //$query=DB::table('newsfeeds')->where('id', '=', $request->id)->delete();

        //------------------------------------/Registration-----------------------------------------------



        if (true) {
            return $this->sendResponse(false, 200, null, 'Record has been Reported.');
        } else {
            return $this->sendResponse(true, 233, null, 'Request has been failed.');
        }

        //-------------------------------------------------------------------------

    }

    public function storyGalleryUpload(Request $request)
    {

        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL = URL::to('/');

        $DirectoryPath = 'story';
        $UploadedFile = null;
        $inc = 0;


        if ($request->hasFile('file')) {


            //            if(Storage::makeDirectory('public/'.$DirectoryPath)){ //Old code for storage

            $inc++;
            $RealPath = $request->file('file')->getRealPath(); //Actual Path
            //                $UploadedFile= $request->file('file')->store('public/'.$DirectoryPath); //Uploaded Path //Old code for storage
            $UploadedFile = $request->file('file')->store($DirectoryPath, ['disk' => 'public_uploads']); //Uploaded Path
            $UploadedFile = basename($UploadedFile); //Get File name from URL



            //            }else{ //Old code for storage
            //                $output=['response'=>['code'=>'78', 'status'=>'Failed', 'message'=>'Directory Not Created.']];
            //                return response()->json($output);
            //            } //Old code for storage


        } else {
            $output = ['response' => ['code' => '40', 'status' => 'Failed', 'message' => 'File Not Found.']];
            return response()->json($output);
        }


        if ($inc == 1) {
            $output = ['response' => [
                'code' => '200',
                'status' => 'Success',
                'message' => 'Successfully Uploaded.',
                'fileName' => $UploadedFile
            ]];

            return response()->json($output);
        } else {

            $output = ['response' => [
                'code' => '0',
                'status' => 'Failed',
                'message' => 'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }
    }

    public function storyGalleryDelete(Request $request)
    {

        $CurrentDateTime = date('Y-m-d H:i:s');
        $BaseURL = URL::to('/');

        $DirectoryPath = 'story';
        $inc = 0;


        $rename_name = $request['rename_name'];

        if ($rename_name != '' && $rename_name != null) {
            //            Storage::delete('public/'.$DirectoryPath.'/'.$rename_name); //Old code for storage

            if (File::exists(public_path('uploads/' . $DirectoryPath . '/' . $rename_name))) {
                File::delete(public_path('uploads/' . $DirectoryPath . '/' . $rename_name));
                $inc++;
            } else {
                $output = ['response' => ['code' => '88', 'status' => 'Failed', 'message' => 'File does not exists.']];
                return response()->json($output);
            }
        } else {
            $output = ['response' => ['code' => '88', 'status' => 'Failed', 'message' => 'File ID Not be Null.']];
            return response()->json($output);
        }






        if ($inc == 1) {

            $output = ['response' => [
                'code' => '200',
                'status' => 'Success',
                'message' => 'Successfully Deleted.'
            ]];

            return response()->json($output);
        } else {

            $output = ['response' => [
                'code' => '0',
                'status' => 'Failed',
                'message' => 'Operation Failed, Contact System administrator.'
            ]];

            return response()->json($output);
        }
    }

    // - - - - - - - - - - - - - - - - - - -/Story - - - - - - - - - - - - - - - - - - - - - - - - -



















    // - - - - - - - - - - - - - - - - - - - Live - - - - - - - - - - - - - - - - - - - - - - - - -

    public function liveCreate(Request $request)
    {

        //---------------------------Validation-------------------------------------
        $validator = Validator::make($request->all(), [

            'privacy' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendResponse(true, 312, null, 'Validation error, recheck all fields.');
        }
        //---------------------------Validation-------------------------------------




        $timezone = "Asia/Dhaka";
        date_default_timezone_set($timezone);

        $is_session = $this->GetSession();

        if ($is_session) {
            $session_user_id = $request->session()->get('project')->id;
            $User = $this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        } else {
            $User = null;
        }



        //-------------------------------------Registration-----------------------------------------------


        $broadcast_id = DB::table('broadcasts')->insertGetId(
            [
                'privacy_id' => $request->privacy,

                'status' => 'Active',
                'created_by_user_id' => $session_user_id,
            ],
            'id'
        );

        //------------------------------------/Registration-----------------------------------------------






        if (true) {
            return $this->sendResponse(false, 200, null, 'Live has been created successfully.');
        } else {
            return $this->sendResponse(true, 233, null, 'Live has been failed.');
        }

        //-------------------------------------------------------------------------

    }

    // - - - - - - - - - - - - - - - - - - - /Live - - - - - - - - - - - - - - - - - - - - - - - - -
    public function updatepassword(Request $request)
    {
        $this->validate($request, [
            'newpassword' => 'required',
        ]);

        $emails = $request->email;
        $numbers = $request->number;

        $email = User::where('email', $emails)->first();
        $number = User::where('number', $numbers)->first();

        $newpass = $request->newpassword;
        $confirmpass = $request->confirmpassword;

        if ($request->email) {
            if ($email) {
                if ($newpass == $confirmpass) {

                    $users = User::where('email', $email->email)->first();
                    $users->password = Hash::make($request->confirmpassword);
                    $users->save();
                    $response = ['status' => true, 'message' => "Password  Updated Successfully! "];
                    return response($response, 200);
                } else {
                    $response = ['status' => true, 'message' => "New Password and Confirm password does not matched"];
                    return response($response, 200);
                }
            } else {
                $response = ['status' => true, 'message' => "User Does Not Exist"];
                return response($response, 422);
            }
        } else {
            if ($number) {
                if ($newpass == $confirmpass) {

                    $users = User::where('number', $number->number)->first();
                    $users->password = Hash::make($request->confirmpassword);
                    $users->save();
                    $response = ['status' => true, 'message' => "Password  Updated Successfully! "];
                    return response($response, 200);
                } else {
                    $response = ['status' => true, 'message' => "New Password and Confirm password does not matched"];
                    return response($response, 200);
                }
            } else {
                $response = ['status' => true, 'message' => "User Does Not Exist"];
                return response($response, 422);
            }
        }
    }
}
