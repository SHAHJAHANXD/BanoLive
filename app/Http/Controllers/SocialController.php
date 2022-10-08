<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SocialController extends GeneralController
{


    public function newsfeed(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $session_user_id=null;
            $User=null;
        }

        if($User->status!='Active'){
            return redirect('/alert');
        }



        // -------------------Basic--------------------------

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        $NewsFeeds=$this->GetNewsFeedsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, 'get');
        $Privacies=$this->GetPrivaciesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null);


        $ToBeFollowing=$this->GetToBeFollowingSqlData($request, null, $session_user_id, null, 'UserToUser', null, null, null, null, null, null, null, null, null);

        $Hosts=$this->GetUsersSqlData($request, null, 3, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $Agents=$this->GetUsersSqlData($request, null, 5, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        $Stories=$this->GetStoriesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 15, null, null);
        $Broadcasts=$this->GetBroadcastsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);




        return view('social.newsfeed',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Home',
            'Settings'=>$Settings,

            'NewsFeeds'=>$NewsFeeds,
            'Privacies'=>$Privacies,

            'ToBeFollowing'=>$ToBeFollowing,
            'Hosts'=>$Hosts,
            'Agents'=>$Agents,


            'Stories'=>$Stories,
            'Broadcasts'=>$Broadcasts,

        ]);



    }

    public function profile(Request $request){

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





        $ChildCategories=$this->GetChildCategories($request, null, 'post', null, null, null, null, null, null, null, null, null, null, 'get');

        $NewsFeeds=$this->GetNewsFeedsSqlData($request, null, null, null, null, null, null, null, null, null, $session_user_id, null, null, 'get');

        $Following=$this->GetFollowersSqlData($request, null, null, 'UserToUser', null, null, null, null, $session_user_id, null, null, null, null, null);






        $FollowersMerge=[];
        $is_follow_back=false;


        $Followers=$this->GetFollowersSqlData($request, null, $session_user_id, 'UserToUser', null, null, null, null, null, null, null, null, null, null);



        foreach ($Followers as $key => $FollowersTemp) {



            $FollowersCount=$this->GetFollowersSqlData($request, null, $FollowersTemp->created_by_user_id, 'UserToUser', null, null, null, null, null, null, $session_user_id, 15, 1, null);


            if(count($FollowersCount)>0){
                $is_follow_back=true;
            }else{
                $is_follow_back=false;
            }



            $tempMergeData = array (

//            'is_like' => $is_like,
//            'is_save' => $is_save,
//            'is_comment' => $is_comment,
              'is_follow_back' => $is_follow_back,
//            'is_friend' => $is_friend,
//            'is_sent_request' => $is_sent_request,
//            'is_report' => $is_report,
//            'is_mute' => $is_mute,
            );


            $FollowersMerge[$key] = (object) array_merge((array) $FollowersTemp, $tempMergeData);


        }



        $ToBeFollowing=$this->GetToBeFollowingSqlData($request, null, $session_user_id, null, 'UserToUser', null, null, null, null, null, null, null, null, null);

//dd($FollowersMerge);

        $Privacies=$this->GetPrivaciesSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null);



        return view('social.profile',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Home',
            'Settings'=>$Settings,
            'Privacies'=>$Privacies,





            'ChildCategories'=>$ChildCategories,
//            'Posts'=>$Posts,

            'Followers'=>$FollowersMerge,

            'Following'=>$Following,

            'ToBeFollowing'=>$ToBeFollowing,


            'NewsFeeds'=>$NewsFeeds,

        ]);



    }


    public function otherProfile(Request $request, $slug){

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





        $other_is_follow_back=false;

        $OtherUser=$this->GetUsersSqlData($request, $slug, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        $FollowersCount=$this->GetFollowersSqlData($request, null, $OtherUser->id, 'UserToUser', null, null, null, null, null, null, $session_user_id, 15, 1, null);

        if(count($FollowersCount)>0){
            $other_is_follow_back=true;
        }else{
            $other_is_follow_back=false;
        }

        $tempMergeData = array (

//            'is_like' => $is_like,
//            'is_save' => $is_save,
//            'is_comment' => $is_comment,
            'is_follow_back' => $other_is_follow_back,
//            'is_friend' => $is_friend,
//            'is_sent_request' => $is_sent_request,
//            'is_report' => $is_report,
//            'is_mute' => $is_mute,
        );



        $OtherUser = (object) array_merge((array) $OtherUser, $tempMergeData);





        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $ChildCategories=$this->GetChildCategories($request, null, 'post', null, null, null, null, null, null, null, null, null, null, 'get');


        $NewsFeeds=$this->GetNewsFeedsSqlData($request, null, null, null, null, null, null, null, null, null, $OtherUser->id, null, null, 'get');


        $Following=$this->GetFollowersSqlData($request, null, null, 'UserToUser', null, null, null, null, $OtherUser->id, null, null, null, null, null);






        $FollowersMerge=[];
        $is_follow_back=false;


        $Followers=$this->GetFollowersSqlData($request, null, $OtherUser->id, 'UserToUser', null, null, null, null, null, null, null, null, null, null);



        foreach ($Followers as $key => $FollowersTemp) {



            $FollowersCount=$this->GetFollowersSqlData($request, null, $FollowersTemp->created_by_user_id, 'UserToUser', null, null, null, null, null, null, $OtherUser->id, 15, 1, null);


            if(count($FollowersCount)>0){
                $is_follow_back=true;
            }else{
                $is_follow_back=false;
            }



            $tempMergeData = array (

//            'is_like' => $is_like,
//            'is_save' => $is_save,
//            'is_comment' => $is_comment,
                'is_follow_back' => $is_follow_back,
//            'is_friend' => $is_friend,
//            'is_sent_request' => $is_sent_request,
//            'is_report' => $is_report,
//            'is_mute' => $is_mute,
            );


            $FollowersMerge[$key] = (object) array_merge((array) $FollowersTemp, $tempMergeData);


        }




        $ToBeFollowing=$this->GetToBeFollowingSqlData($request, null, $session_user_id, null, 'UserToUser', null, null, null, null, null, null, null, null, null);



        return view('social.other-profile',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Home',
            'Settings'=>$Settings,

            'ChildCategories'=>$ChildCategories,
            'NewsFeeds'=>$NewsFeeds,

            'Followers'=>$FollowersMerge,

            'Following'=>$Following,


            'OtherUser'=>$OtherUser,
            'ToBeFollowing'=>$ToBeFollowing,


        ]);



    }


    public function packages(Request $request){

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
        $ChildCategories=$this->GetChildCategories($request, null, 'post', null, null, null, null, null, null, null, null, null, null, 'get');


        $Posts=$this->GetPosts($request, null, null, null, null, null, null, null, null, null, null, null, null, $session_user_id, null, null, 'get');

        $Following=$this->GetFollowersSqlData($request, null, null, 'UserToUser', null, null, null, null, $session_user_id, null, null, null, null, null);






        $FollowersMerge=[];
        $is_follow_back=false;


        $Followers=$this->GetFollowersSqlData($request, null, $session_user_id, 'UserToUser', null, null, null, null, null, null, null, null, null, null);



        foreach ($Followers as $key => $FollowersTemp) {



            $FollowersCount=$this->GetFollowersSqlData($request, null, $FollowersTemp->created_by_user_id, 'UserToUser', null, null, null, null, null, null, $session_user_id, 15, 1, null);


            if(count($FollowersCount)>0){
                $is_follow_back=true;
            }else{
                $is_follow_back=false;
            }



            $tempMergeData = array (

//            'is_like' => $is_like,
//            'is_save' => $is_save,
//            'is_comment' => $is_comment,
                'is_follow_back' => $is_follow_back,
//            'is_friend' => $is_friend,
//            'is_sent_request' => $is_sent_request,
//            'is_report' => $is_report,
//            'is_mute' => $is_mute,
            );


            $FollowersMerge[$key] = (object) array_merge((array) $FollowersTemp, $tempMergeData);


        }




//dd($FollowersMerge);


        return view('social.packages',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Home',
            'Settings'=>$Settings,

            'ChildCategories'=>$ChildCategories,
            'Posts'=>$Posts,

            'Followers'=>$FollowersMerge,

            'Following'=>$Following,


        ]);



    }


    public function subscribe(Request $request){

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
        $ChildCategories=$this->GetChildCategories($request, null, 'post', null, null, null, null, null, null, null, null, null, null, 'get');


        $Posts=$this->GetPosts($request, null, null, null, null, null, null, null, null, null, null, null, null, $session_user_id, null, null, 'get');

        $Following=$this->GetFollowersSqlData($request, null, null, 'UserToUser', null, null, null, null, $session_user_id, null, null, null, null, null);






        $FollowersMerge=[];
        $is_follow_back=false;


        $Followers=$this->GetFollowersSqlData($request, null, $session_user_id, 'UserToUser', null, null, null, null, null, null, null, null, null, null);



        foreach ($Followers as $key => $FollowersTemp) {



            $FollowersCount=$this->GetFollowersSqlData($request, null, $FollowersTemp->created_by_user_id, 'UserToUser', null, null, null, null, null, null, $session_user_id, 15, 1, null);


            if(count($FollowersCount)>0){
                $is_follow_back=true;
            }else{
                $is_follow_back=false;
            }



            $tempMergeData = array (

//            'is_like' => $is_like,
//            'is_save' => $is_save,
//            'is_comment' => $is_comment,
                'is_follow_back' => $is_follow_back,
//            'is_friend' => $is_friend,
//            'is_sent_request' => $is_sent_request,
//            'is_report' => $is_report,
//            'is_mute' => $is_mute,
            );


            $FollowersMerge[$key] = (object) array_merge((array) $FollowersTemp, $tempMergeData);


        }




//dd($FollowersMerge);


        return view('social.subscribe',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Home',
            'Settings'=>$Settings,

            'ChildCategories'=>$ChildCategories,
            'Posts'=>$Posts,

            'Followers'=>$FollowersMerge,

            'Following'=>$Following,


        ]);



    }








    public function messages(Request $request){

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


        return view('social.messages',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Home',
            'Settings'=>$Settings,

        ]);



    }

    public function notifications(Request $request){

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


        $ToBeFollowing=$this->GetToBeFollowingSqlData($request, null, $session_user_id, null, 'UserToUser', null, null, null, null, null, null, null, null, null);


        return view('social.notifications',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Home',
            'Settings'=>$Settings,

            'ToBeFollowing'=>$ToBeFollowing,

        ]);



    }




    public function settings(Request $request){

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


        return view('social.settings',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Home',
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
            $session_user_id=null;
            $User=null;
        }

        // -------------------Basic--------------------------

        $Settings=$this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);


        return view('social.change-password',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Home',
            'Settings'=>$Settings,

        ]);



    }

    public function search(Request $request){

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


        $UsersMerge=[];
        $is_follow=false;


        $Users=$this->GetUsersSqlData($request, null, null, null, $request->title, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);



        foreach ($Users as $key => $UserTemp) {



            $FollowersCount=$this->GetFollowersSqlData($request, null, $UserTemp->id, 'UserToUser', null, null, null, null, null, null, $session_user_id, 15, 1, null);

            if(count($FollowersCount)>0){
                $is_follow=true;
            }else{
                $is_follow=false;
            }



            $tempMergeData = array (

//            'is_like' => $is_like,
//            'is_save' => $is_save,
//            'is_comment' => $is_comment,
                'is_follow' => $is_follow,
//            'is_friend' => $is_friend,
//            'is_sent_request' => $is_sent_request,
//            'is_report' => $is_report,
//            'is_mute' => $is_mute,
            );


            $UsersMerge[$key] = (object) array_merge((array) $UserTemp, $tempMergeData);


        }








        return view('social.search',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Home',
            'Settings'=>$Settings,


            'Users'=>$UsersMerge,

        ]);



    }




}
