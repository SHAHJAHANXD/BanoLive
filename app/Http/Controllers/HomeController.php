<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends GeneralController
{


    public function home(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $session_user_id=null;
            $User=null;
        }

        // -------------------Basic--------------------------

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        $ChildCategories = $this->GetChildCategories($request, null, 'news', null, null, null, null, null, null, null, null, null, null, 'get');
        $News = $this->GetNewsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);



        return view('front.home',[

            'is_session'=>$is_session,
            'User' => $User,


            'page'=>'Home',
            'Settings'=>$Settings,
            'ChildCategories'=>$ChildCategories,
            'News'=>$News,


        ]);



    }

    public function game(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $session_user_id=null;
            $User=null;
        }

        // -------------------Basic--------------------------
        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('front.game',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Contact',
            'Settings'=>$Settings,

        ]);



    }

    public function live(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $session_user_id=null;
            $User=null;
        }

        // -------------------Basic--------------------------
        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);



        return view('front.live',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Contact',
            'Settings'=>$Settings,

        ]);



    }

    public function about(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $session_user_id=null;
            $User=null;
        }

        // -------------------Basic--------------------------

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('front.about',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Contact',
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
            $session_user_id=null;
            $User=null;
        }

        // -------------------Basic--------------------------
        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('front.blog',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Contact',
            'Settings'=>$Settings,
        ]);



    }

    public function download(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $session_user_id=null;
            $User=null;
        }

        // -------------------Basic--------------------------
        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);



        return view('front.download',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Contact',
            'Settings'=>$Settings,

        ]);



    }

    public function explore(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $session_user_id=null;
            $User=null;
        }

        // -------------------Basic--------------------------
        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);



        return view('front.explore',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Contact',
            'Settings'=>$Settings,

        ]);



    }

















    public function news(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $session_user_id=null;
            $User=null;
        }

        // -------------------Basic--------------------------
        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $ChildCategories = $this->GetChildCategories($request, null, 'news', null, null, null, null, null, null, null, null, null, null, 'get');
        $News = $this->GetNews($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);



        return view('front.news',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Contact',
            'Settings'=>$Settings,
            'ChildCategories'=>$ChildCategories,
            'News'=>$News,

        ]);



    }


    public function newsDetails(Request $request, $slug){


        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $session_user_id=null;
            $User=null;
        }

        // -------------------Basic--------------------------
        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $ChildCategories = $this->GetChildCategories($request, null, 'news', null, null, null, null, null, null, null, null, null, null, 'get');


        $News = $this->GetNews($request, null, null, null, null, null, null, $slug, null, null, null, null, null, null, null, null, null, null, 'first');

//        dd($News);



        return view('front.news-details',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Contact',
            'Settings'=>$Settings,
            'ChildCategories'=>$ChildCategories,
            'News'=>$News,

        ]);



    }


    public function contact(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $session_user_id=null;
            $User=null;
        }

        // -------------------Basic--------------------------

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $ChildCategories = $this->GetChildCategories($request, null, 'news', null, null, null, null, null, null, null, null, null, null, 'get');


        return view('front.contact',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Contact',
            'Settings'=>$Settings,
            'ChildCategories'=>$ChildCategories,

        ]);



    }
















}
