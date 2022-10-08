<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends GeneralController
{



    public function alert(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------





        return view('front.alert',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Alert',


            'Settings'=>$Settings,


        ]);

    }








    public function dashboard(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }



        if($User->status!='Active'){
            return redirect('/alert');
        }


        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------





        $AdministratorsCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->orWhere('user_types.slug','administrator')
            ->count();

        $AdminsCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->orWhere('user_types.slug','admin')
            ->count();


        if($User->user_type_slug=='agency'){

        $HostsCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->where('user_types.slug','host')
            ->where('users.reference_code',$User->code)
            ->count();

        }else{

            $HostsCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','host')
                ->count();
        }



        if($User->user_type_slug=='admin'){

            $AgenciesCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->where('users.reference_code',$User->code)
                ->count();
        }else{
            $AgenciesCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->count();
        }




        $AgentsCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->orWhere('user_types.slug','agent')
            ->count();


        $UsersCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->orWhere('user_types.slug','user')
            ->count();


        $BlockUsersCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->orWhere('users.status','Blocked')
            ->count();



        $PostsCount = DB::table('newsfeeds')
            ->count();

        $ContactsCount = DB::table('contacts')
            ->count();

        $SubscribersCount = DB::table('subscribers')
            ->count();


        $NewsCount = DB::table('news')
            ->count();



        if($User->user_type_slug=='administrator'){

            $Users = $this->GetUsersSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }elseif ($User->user_type_slug=='admin'){

            // if admin they can see there agencies
            $Users = $this->GetUsersSqlData($request, null, 'agency', null, null, null, null, null, null, null, null, null, $User->code, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }elseif ($User->user_type_slug=='agency'){

            // if agency they can see there hosts
            $Users = $this->GetUsersSqlData($request, null, 'host', null, null, null, null, null, null, null, null, null, $User->code, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }else{

            $Users = $this->GetUsersSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }




        return view('panel.dashboard',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Dashboard',

            'AdministratorsCount'=>$AdministratorsCount,
            'AdminsCount'=>$AdminsCount,
            'HostsCount'=>$HostsCount,
            'AgenciesCount'=>$AgenciesCount,
            'AgentsCount'=>$AgentsCount,
            'UsersCount'=>$UsersCount,
            'BlockUsersCount'=>$BlockUsersCount,



            'PostsCount'=>$PostsCount,
            'ContactsCount'=>$ContactsCount,
            'SubscribersCount'=>$SubscribersCount,
            'NewsCount'=>$NewsCount,

            'Settings'=>$Settings,
            'Users'=>$Users,




        ]);

    }



    public function administrators(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------



        $UsersCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->where('user_types.slug','administrator')
            ->where('users.status','Active')
            ->count();


        $BlockUsersCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->where('user_types.slug','administrator')
            ->where('users.status','Blocked')
            ->count();










        $Users = $this->GetUsersSqlData($request, null, 'administrator', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);







        return view('panel.administrators',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Users'=>$Users,
            'Settings'=>$Settings,

            'UsersCount'=>$UsersCount,
            'BlockUsersCount'=>$BlockUsersCount,

        ]);

    }

    public function admins(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------





        $ActiveCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->where('user_types.slug','admin')
            ->where('users.status','Active')
            ->count();


        $PendingCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->where('user_types.slug','admin')
            ->where('users.status','pending')
            ->count();


        $BlockedCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->where('user_types.slug','admin')
            ->where('users.status','Blocked')
            ->count();




        $Users = $this->GetUsersSqlData($request, null, 'admin', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.admins',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Users'=>$Users,
            'Settings'=>$Settings,


            'ActiveCount'=>$ActiveCount,
            'PendingCount'=>$PendingCount,
            'BlockedCount'=>$BlockedCount,

        ]);

    }

    public function hosts(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------




        if($User->user_type_slug=='administrator'){

            $ActiveCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','host')
                ->where('users.status','Active')
                ->count();
        }else{

            $ActiveCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','host')
                ->where('users.status','Active')
                ->count();
        }



        if($User->user_type_slug=='administrator'){

            $PendingCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','host')
                ->where('users.status','pending')
                ->count();

        }else{

            $PendingCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','host')
                ->where('users.status','pending')
                ->count();
        }



        if($User->user_type_slug=='administrator'){

            $BlockedCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','host')
                ->where('users.status','Blocked')
                ->count();

        }else{

            $BlockedCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','host')
                ->where('users.status','Blocked')
                ->count();
        }



        if($User->user_type_slug=='administrator'){
            $Users = $this->GetUsersSqlData($request, null, 'host', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }else{
            $Users = $this->GetUsersSqlData($request, null, 'host', null, null, null, null, null, null, null, null, null, $User->code, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }




        return view('panel.hosts',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Users'=>$Users,
            'Settings'=>$Settings,

            'ActiveCount'=>$ActiveCount,
            'PendingCount'=>$PendingCount,
            'BlockedCount'=>$BlockedCount,

        ]);

    }

    public function agents(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------




        $ActiveCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->where('user_types.slug','agent')
            ->where('users.status','Active')
            ->count();


        $PendingCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->where('user_types.slug','agent')
            ->where('users.status','pending')
            ->count();


        $BlockedCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->where('user_types.slug','agent')
            ->where('users.status','Blocked')
            ->count();



        $Users = $this->GetUsersSqlData($request, null, 'agent', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.agents',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Users'=>$Users,
            'Settings'=>$Settings,

            'ActiveCount'=>$ActiveCount,
            'PendingCount'=>$PendingCount,
            'BlockedCount'=>$BlockedCount,

        ]);

    }

    public function users(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------




        $ActiveCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->where('user_types.slug','user')
            ->where('users.status','Active')
            ->count();


        $PendingCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->where('user_types.slug','user')
            ->where('users.status','pending')
            ->count();


        $BlockedCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->where('user_types.slug','user')
            ->where('users.status','Blocked')
            ->count();









        $Users = $this->GetUsersSqlData($request, null, 'user', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);







        return view('panel.users',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Users'=>$Users,
            'Settings'=>$Settings,


            'ActiveCount'=>$ActiveCount,
            'PendingCount'=>$PendingCount,
            'BlockedCount'=>$BlockedCount,

        ]);

    }

    public function blockUsers(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------



        $ActiveCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->where('users.status','Active')
            ->count();




        $BlockedCount = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select(
                'users.id as id',
                'users.user_type_id as user_type_id',
                'user_types.title as user_type_title',
                'user_types.slug as user_type_slug',

                'users.status as status'
            )
            ->where('users.status','Blocked')
            ->count();



        $Users = $this->GetUsersSqlData($request, null, null, null, null, null, null, null, null, 'Blocked', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.block-users',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Users'=>$Users,
            'Settings'=>$Settings,

            'ActiveCount'=>$ActiveCount,
            'BlockedCount'=>$BlockedCount,

        ]);

    }




    public function agencies(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------




        if($User->user_type_slug=='administrator'){

            $ActiveCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->where('users.status','Active')
                ->count();
        }else{

            $ActiveCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','agency')
                ->where('users.status','Active')
                ->count();
        }



        if($User->user_type_slug=='administrator'){

            $PendingCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->where('users.status','pending')
                ->count();

        }else{

            $PendingCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','agency')
                ->where('users.status','pending')
                ->count();
        }



        if($User->user_type_slug=='administrator'){

            $BlockedCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->where('users.status','Blocked')
                ->count();

        }else{

            $BlockedCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','agency')
                ->where('users.status','Blocked')
                ->count();
        }



        if($User->user_type_slug=='administrator'){
            $Users = $this->GetUsersSqlData($request, null, 'agency', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }else{
            $Users = $this->GetUsersSqlData($request, null, 'agency', null, null, null, null, null, null, null, null, null, $User->code, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }





        return view('panel.agencies',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Settings'=>$Settings,

            'Users'=>$Users,

            'ActiveCount'=>$ActiveCount,
            'PendingCount'=>$PendingCount,
            'BlockedCount'=>$BlockedCount,

        ]);

    }

    public function notifications(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------


        $Notifications=$this->GetNotificationsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);



        return view('panel.notifications',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',


            'Notifications'=>$Notifications,

            'Settings'=>$Settings,


        ]);

    }


    public function transactions(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------


        $Transactions=$this->GetTransactionsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        if($User->user_type_slug=='administrator'){

            $Users = $this->GetUsersSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }elseif ($User->user_type_slug=='admin'){

            // if admin they can see there agencies
            $Users = $this->GetUsersSqlData($request, null, 'agency', null, null, null, null, null, null, null, null, null, $User->code, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }elseif ($User->user_type_slug=='agency'){

            // if agency they can see there hosts
            $Users = $this->GetUsersSqlData($request, null, 'host', null, null, null, null, null, null, null, null, null, $User->code, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }else{

            $Users = $this->GetUsersSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }




        return view('panel.transactions',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',


            'Users'=>$Users,
            'Transactions'=>$Transactions,

            'Settings'=>$Settings,


        ]);

    }


    public function advertisements(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------




        if($User->user_type_slug=='administrator'){

            $ActiveCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->where('users.status','Active')
                ->count();
        }else{

            $ActiveCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','agency')
                ->where('users.status','Active')
                ->count();
        }



        if($User->user_type_slug=='administrator'){

            $PendingCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->where('users.status','pending')
                ->count();

        }else{

            $PendingCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','agency')
                ->where('users.status','pending')
                ->count();
        }



        if($User->user_type_slug=='administrator'){

            $BlockedCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->where('users.status','Blocked')
                ->count();

        }else{

            $BlockedCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','agency')
                ->where('users.status','Blocked')
                ->count();
        }



        if($User->user_type_slug=='administrator'){
            $Users = $this->GetUsersSqlData($request, null, 'agency', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }else{
            $Users = $this->GetUsersSqlData($request, null, 'agency', null, null, null, null, null, null, null, null, null, $User->code, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }





        return view('panel.advertisements',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Settings'=>$Settings,

            'Users'=>$Users,

            'ActiveCount'=>$ActiveCount,
            'PendingCount'=>$PendingCount,
            'BlockedCount'=>$BlockedCount,

        ]);

    }

    public function newsfeeds(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------




        $Posts = $this->GetNewsFeedsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);




        return view('panel.newsfeeds',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Settings'=>$Settings,


            'Posts'=>$Posts,

//            'ActiveCount'=>$ActiveCount,
//            'PendingCount'=>$PendingCount,
//            'BlockedCount'=>$BlockedCount,

        ]);

    }

    public function stories(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------



        $Stories=$this->GetStoriesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 15, null, null);



        return view('panel.stories',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Settings'=>$Settings,

            'Stories'=>$Stories,


        ]);

    }

    public function stores(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------




        if($User->user_type_slug=='administrator'){

            $ActiveCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->where('users.status','Active')
                ->count();
        }else{

            $ActiveCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','agency')
                ->where('users.status','Active')
                ->count();
        }



        if($User->user_type_slug=='administrator'){

            $PendingCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->where('users.status','pending')
                ->count();

        }else{

            $PendingCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','agency')
                ->where('users.status','pending')
                ->count();
        }



        if($User->user_type_slug=='administrator'){

            $BlockedCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->where('users.status','Blocked')
                ->count();

        }else{

            $BlockedCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','agency')
                ->where('users.status','Blocked')
                ->count();
        }



        if($User->user_type_slug=='administrator'){
            $Users = $this->GetUsersSqlData($request, null, 'agency', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }else{
            $Users = $this->GetUsersSqlData($request, null, 'agency', null, null, null, null, null, null, null, null, null, $User->code, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }





        return view('panel.stores',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Settings'=>$Settings,

            'Users'=>$Users,

            'ActiveCount'=>$ActiveCount,
            'PendingCount'=>$PendingCount,
            'BlockedCount'=>$BlockedCount,

        ]);

    }




    public function audioStreaming(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------




        if($User->user_type_slug=='administrator'){

            $ActiveCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->where('users.status','Active')
                ->count();
        }else{

            $ActiveCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','agency')
                ->where('users.status','Active')
                ->count();
        }



        if($User->user_type_slug=='administrator'){

            $PendingCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->where('users.status','pending')
                ->count();

        }else{

            $PendingCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','agency')
                ->where('users.status','pending')
                ->count();
        }



        if($User->user_type_slug=='administrator'){

            $BlockedCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->where('users.status','Blocked')
                ->count();

        }else{

            $BlockedCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','agency')
                ->where('users.status','Blocked')
                ->count();
        }



        if($User->user_type_slug=='administrator'){
            $Users = $this->GetUsersSqlData($request, null, 'agency', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }else{
            $Users = $this->GetUsersSqlData($request, null, 'agency', null, null, null, null, null, null, null, null, null, $User->code, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }





        return view('panel.audio-streaming',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Settings'=>$Settings,

            'Users'=>$Users,

            'ActiveCount'=>$ActiveCount,
            'PendingCount'=>$PendingCount,
            'BlockedCount'=>$BlockedCount,

        ]);

    }

    public function videoStreaming(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------




        if($User->user_type_slug=='administrator'){

            $ActiveCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->where('users.status','Active')
                ->count();
        }else{

            $ActiveCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','agency')
                ->where('users.status','Active')
                ->count();
        }



        if($User->user_type_slug=='administrator'){

            $PendingCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->where('users.status','pending')
                ->count();

        }else{

            $PendingCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','agency')
                ->where('users.status','pending')
                ->count();
        }



        if($User->user_type_slug=='administrator'){

            $BlockedCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('user_types.slug','agency')
                ->where('users.status','Blocked')
                ->count();

        }else{

            $BlockedCount = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'users.status as status'
                )
                ->where('users.reference_code',$User->code)
                ->where('user_types.slug','agency')
                ->where('users.status','Blocked')
                ->count();
        }



        if($User->user_type_slug=='administrator'){
            $Users = $this->GetUsersSqlData($request, null, 'agency', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }else{
            $Users = $this->GetUsersSqlData($request, null, 'agency', null, null, null, null, null, null, null, null, null, $User->code, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        }





        return view('panel.video-streaming',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Settings'=>$Settings,

            'Users'=>$Users,

            'ActiveCount'=>$ActiveCount,
            'PendingCount'=>$PendingCount,
            'BlockedCount'=>$BlockedCount,

        ]);

    }



    public function news(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------

        $Users = $this->GetUsersSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $ChildCategories = $this->GetChildCategories($request, null, 'news', null, null, null, null, null, null, null, null, null, null, 'get');
        $News = $this->GetNewsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.news',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'News',

            'Users'=>$Users,
            'ChildCategories'=>$ChildCategories,
            'News'=>$News,

            'Settings'=>$Settings,

        ]);

    }

    public function blog(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------

        $Users = $this->GetUsersSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $ChildCategories = $this->GetChildCategories($request, null, 'news', null, null, null, null, null, null, null, null, null, null, 'get');
        $News = $this->GetNewsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.blog',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'News',

            'Users'=>$Users,
            'ChildCategories'=>$ChildCategories,
            'News'=>$News,

            'Settings'=>$Settings,

        ]);

    }




















    public function subscribers(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        // -------------------Basic--------------------------


        $Subscribers=$this->GetSubscribersSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $CountryCodes=$this->GetCountryCodesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.subscribers',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Subscribers',
            'Subscribers'=>$Subscribers,
            'CountryCodes'=>$CountryCodes,

            'Settings'=>$Settings,

        ]);

    }

    public function contacts(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        // -------------------Basic--------------------------


        $Contacts=$this->GetContactsSqlData($request, null, null, null, null, null,  null, null, null, null, null, null, null, null, null);



        return view('panel.contacts',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Contacts',
            'Contacts'=>$Contacts,

            'Settings'=>$Settings,

        ]);

    }












    public function posts(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        // -------------------Basic--------------------------

        $Users = $this->GetUsersSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $Posts = $this->GetPosts($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.posts',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Posts',

            'Users'=>$Users,
            'Posts'=>$Posts,


            'Settings'=>$Settings,

        ]);

    }




    public function onboardAdmin(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        // -------------------Basic--------------------------


        $Onboards=$this->GetOnboardsSqlData($request, null, null, null, null, 'Admin',  null, null, null, null, null, null, null, null, null);



        return view('panel.onboard-admin',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Onboards',
            'Onboards'=>$Onboards,

            'Settings'=>$Settings,

        ]);

    }

    public function onboardTopUpAgent(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        // -------------------Basic--------------------------


        $Onboards=$this->GetOnboardsSqlData($request, null, null, null, null, 'TopUp Agent',  null, null, null, null, null, null, null, null, null);



        return view('panel.onboard-top-up-agent',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Onboards',
            'Onboards'=>$Onboards,

            'Settings'=>$Settings,

        ]);

    }









    public function faqs(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        // -------------------Basic--------------------------


        $FAQs=$this->GetFAQsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null);



        return view('panel.faqs',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'FAQs',
            'FAQs'=>$FAQs,

            'Settings'=>$Settings,

        ]);

    }


    public function countries(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        // -------------------Basic--------------------------

        $Countries = $this->GetCountriesSqlData($request, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.countries',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Countries'=>$Countries,

            'Settings'=>$Settings,

        ]);

    }

    public function provinces(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        // -------------------Basic--------------------------

        $Provinces = $this->GetProvincesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);
        $Countries = $this->GetCountriesSqlData($request, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.provinces',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Provinces'=>$Provinces,
            'Countries'=>$Countries,

            'Settings'=>$Settings,

        ]);

    }

    public function cities(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        // -------------------Basic--------------------------

        $Cities = $this->GetCitiesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $Provinces = $this->GetProvincesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.cities',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Cities'=>$Cities,
            'Provinces'=>$Provinces,

            'Settings'=>$Settings,

        ]);

    }

    public function areas(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);



        // -------------------Basic--------------------------

        $Areas = $this->GetAreasSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $Cities = $this->GetCitiesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.areas',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Areas'=>$Areas,
            'Cities'=>$Cities,

            'Settings'=>$Settings,

        ]);

    }

    public function locations(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);



        // -------------------Basic--------------------------

        $Locations = $this->GetLocationsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $Areas = $this->GetAreasSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.locations',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'Locations'=>$Locations,
            'Areas'=>$Areas,


            'Settings'=>$Settings,

        ]);

    }


    public function parentCategories(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        // -------------------Basic--------------------------

        $ParentCategories = $this->GetParentCategories($request, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.parent-categories',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'ParentCategories'=>$ParentCategories,


            'Settings'=>$Settings,

        ]);

    }

    public function childCategories(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        // -------------------Basic--------------------------

        $ChildCategories = $this->GetChildCategories($request, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $ParentCategories = $this->GetParentCategories($request, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.child-categories',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'ChildCategories'=>$ChildCategories,
            'ParentCategories'=>$ParentCategories,


            'Settings'=>$Settings,

        ]);

    }

    public function subChildCategories(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        // -------------------Basic--------------------------

        $SubChildCategories = $this->GetSubChildCategories($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $ChildCategories = $this->GetChildCategories($request, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.sub-child-categories',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Users',

            'SubChildCategories'=>$SubChildCategories,
            'ChildCategories'=>$ChildCategories,


            'Settings'=>$Settings,

        ]);

    }

    public function settings(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        // -------------------Basic--------------------------

        return view('panel.settings',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Entrepreneurs',
            'Settings'=>$Settings,

        ]);

    }

    public function profile(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        // -------------------Basic--------------------------

        return view('panel.profile',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Entrepreneurs',


            'Settings'=>$Settings,

        ]);

    }

    public function profileSettings(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        // -------------------Basic--------------------------

        return view('panel.profile-settings',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Entrepreneurs',


            'Settings'=>$Settings,

        ]);

    }

    public function changePassword(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }


        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        // -------------------Basic--------------------------

        return view('panel.change-password',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Entrepreneurs',


            'Settings'=>$Settings,

        ]);

    }

    public function websiteSettings(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }


        // -------------------Basic--------------------------


        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('panel.website-settings',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Entrepreneurs',

            'Settings'=>$Settings,

        ]);

    }

}
