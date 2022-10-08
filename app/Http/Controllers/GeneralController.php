<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends BaseController
{

    public function GeneralProperties($request, $is_session, $session_user_id, $session_comp_id, $slug){


        //---------------------------------------------

        $id=$request['id'];
        $privacy=$request['privacy_id'];

        $listing_type=$request['listing_type'];
        $purpose=$request['purpose'];
        $parent_category=$request['parent_category'];
        $child_category=$request['child_category'];
        $sub_child_category=$request['sub_child_category'];

        $unit=$request['unit'];
        $currency=$request['unit'];

        $type=$request['property_type'];
        $approach=$request['property_type'];
        $asset_type=$request['property_type'];


        $title=$request['title'];
        //$slug
        $description=$request['description'];
        $year=$request['year'];

        $baths_full=$request['baths_full'];
        $baths_half=$request['baths_full'];

        $no_of_garage=$request['no_of_garage'];
        $no_of_rooms=$request['no_of_rooms'];

        $no_of_storeys=$request['no_of_storeys'];
        $community=$request['community'];
        $annual_taxes=$request['annual_taxes'];

        $hoa_dues=$request['hoa_dues'];
        $basement_area=$request['basement_area'];
        $garage_area=$request['garage_area'];

        $remodel_year=$request['remodel_year'];
        $furnished_status=$request['furnished_status'];

        $total_rooms=$request['total_rooms'];
        $floor_no=$request['floor_no'];

        $no_of_units=$request['no_of_units'];
        $no_of_stories=$request['no_of_stories'];

        $open_status=$request['open_status'];

        $tags=$request['tags'];
        $keywords=$request['keywords'];

        $audio_recording=$request['audio_recording'];
        $audio_description=$request['audio_description'];

        $published_date=$request['published_date'];
        $expired_date=$request['expired_date'];
        $last_refreshed_date=$request['last_refreshed_date'];
        $last_listing_type_change_date=$request['last_listing_type_change_date'];

        $refresh_count=$request['refresh_count'];
        $save_count=$request['save_count'];
        $image_count=$request['image_count'];
        $video_count=$request['video_count'];
        $file_count=$request['file_count'];


        $visitor=$request['visitor'];
        $no_of_likes=$request['no_of_likes'];
        $no_of_comments=$request['no_of_comments'];
        $no_of_share=$request['no_of_share'];

        $no_of_view_email=$request['no_of_view_email'];
        $no_of_view_number=$request['no_of_view_number'];
        $no_of_send_email=$request['no_of_send_email'];

        $action_status=$request['action_status'];
        $est_resale_value=$request['est_resale_value'];
        $est_rental_value=$request['est_rental_value'];

        $file_number=$request['file_number'];
        $payment_criteria=$request['payment_criteria'];

        $start_date=$request['start_date'];
        $end_date=$request['end_date'];

        $opening_bid=$request['opening_bid'];
        $bid_increment_value=$request['bid_increment_value'];
        $last_bid=$request['last_bid'];
        $no_of_bid=$request['no_of_bid'];

        $no_of_interested=$request['no_of_interested'];
        $is_lock=$request['is_lock'];

        $status=$request['status'];
        $order_by=$request['order_by'];
        $created_by_comp=$request['created_by_comp'];
        $created_by_user=$request['created_by_user'];
        $updated_by_user=$request['updated_by_user'];
        $deleted_by_user=$request['deleted_by_user'];

        $created_at=$request['created_at'];
        $updated_at=$request['updated_at'];
        $deleted_at=$request['deleted_at'];



        //For Searching
        $countries=$request['countries']; //Array
        $provincies=$request['provincies']; //Array
        $cities=$request['cities']; //Array
        $areas=$request['areas']; //Array
        $locations=$request['locations']; //Array

        $sort_by=$request['sort_by'];
        $search_by=$request['search_by'];
        $miles_from=$request['miles_from'];
        $zip_code=$request['zip_code'];
        $latitude=$request['latitude'];
        $longitude=$request['longitude'];

        $min_search_area=$request['min_search_area'];
        $max_search_area=$request['max_search_area'];

        $min_search_price=$request['min_search_price'];
        $max_search_price=$request['max_search_price'];


        $purposes=$request['purposes']; //Array
        $parent_categories=$request['parent_categories']; //Array
        $child_categories=$request['child_categories']; //Array
        $sub_child_categories=$request['sub_child_categories']; //Array

        $bedrooms=$request['bedrooms'];
        $bathrooms=$request['bathrooms'];

        $features=$request['features']; //Array
        $nearby=$request['nearby']; //Array

        $developers=$request['developers']; //Array


        $advertisement_type=$request['advertisement_type'];
        $followed_type=$request['followed_type']; //'UserToUser'



        //$session_user_id
        //$session_comp_id

        $no_of_records=$request['no_of_records'];
        $page_no=$request['page_no'];
        $record_type=$request['record_type'];

        //---------------------------------------------










        $properties=array();
        $PropertiesData=null;

        $PropertiesSqlData=$this->GetPropertiesSqlData($request, $id, $privacy, $listing_type, $purpose, $parent_category, $child_category, $sub_child_category, $unit, $currency, $type, $approach, $asset_type, $title, $slug, $description, $year, $baths_full, $baths_half, $no_of_garage, $no_of_rooms, $no_of_storeys, $community, $annual_taxes, $hoa_dues, $basement_area, $garage_area, $remodel_year, $furnished_status, $total_rooms, $floor_no, $no_of_units, $no_of_stories, $open_status, $tags, $keywords, $audio_recording, $audio_description, $published_date, $expired_date, $last_refreshed_date, $last_listing_type_change_date, $refresh_count, $save_count, $image_count, $video_count, $file_count, $visitor, $no_of_likes, $no_of_comments, $no_of_share, $no_of_view_email, $no_of_view_number, $no_of_send_email, $action_status, $est_resale_value, $est_rental_value, $file_number, $payment_criteria, $start_date, $end_date, $opening_bid, $bid_increment_value, $last_bid, $no_of_bid, $no_of_interested, $is_lock, $status, $order_by, $created_by_comp, $created_by_user, $updated_by_user, $deleted_by_user, $created_at, $updated_at, $deleted_at, $countries, $provincies, $cities, $areas, $locations, $sort_by, $search_by, $miles_from, $zip_code, $latitude, $longitude, $min_search_area, $max_search_area, $purposes, $parent_categories, $child_categories, $sub_child_categories, $bedrooms, $bathrooms, $features, $nearby, $developers, $advertisement_type, $followed_type, $session_user_id, $session_comp_id, $no_of_records, $page_no, $record_type);

        if($id!=null || $slug!=null){

            $Options=$this->GetPropertyOptionsSqlData($request, null, $PropertiesSqlData->id, null, null, null, null, null, null, null, null, null, null, null, null, null, 15, 1, null);
            $GalleriesSqlData=$this->GetGalleriesSqlData($request, null, $PropertiesSqlData->id, 'Property');
            $AddressesSqlData=$this->GetAddressesSqlData($request, null, $PropertiesSqlData->id, 'Property', null);
            $PhoneSqlData=$this->GetPhoneSqlData($request, null, $PropertiesSqlData->id, 'Property', null);
            $EmailSqlData=$this->GetEmailSqlData($request, null, $PropertiesSqlData->id, 'Property', null);
            $SEOSqlData=$this->GetSEOSqlData($request, null, $PropertiesSqlData->id, 'Property');


            if($is_session){

                $LikeProcessData=$this->GetLikesSqlData($request, null, $PropertiesSqlData->id, 'Property', null, null, null, null, null, null, null, null, null, null, $session_user_id, 15, 1);


                if(count($LikeProcessData) > 0){
                    $is_like = true;
                }else{
                    $is_like = false;
                }

                $SaveProcessData=$this->GetSavesSqlData($request, null, $PropertiesSqlData->id, 'Property', null, null, null, null, null, null, null, null, null, $session_user_id, 15, 1);

                if(count($SaveProcessData) > 0){
                    $is_save=true;
                }else{
                    $is_save=false;
                }


                $CommentProcessData=$this->GetCommentsSqlData($request, null, $PropertiesSqlData->id, 'Property', null, null, null, null, null, null, null, null, null, null, null, $session_user_id, 15, 1);

                if(count($CommentProcessData) > 0){
                    $is_comment=true;
                }else{
                    $is_comment=false;
                }


                $InterestProcessData=$this->GetInterestsSqlData($request, null, $PropertiesSqlData->id, 'Property', null, null, null, null, null, null, null, null, null, null, $session_user_id, 15, 1, null);

                if(count($InterestProcessData) > 0){
                    $is_interested=true;
                }else{
                    $is_interested=false;
                }

                $FollowerProcessData=$this->GetFollowersSqlData($request, null, $session_user_id, 'UserToUser', null, null, null, null, null, null, $PropertiesSqlData->created_by_user_id, 15, 1, null);

                if(count($FollowerProcessData) > 0){
                    $is_follower=true;
                }else{
                    $is_follower=false;
                }

                $FollowingProcessData=$this->GetFollowersSqlData($request, null, $PropertiesSqlData->created_by_user_id, 'UserToUser', null, null, null, null, null, null, $session_user_id, 15, 1, null);

                if(count($FollowingProcessData) > 0){
                    $is_following=true;
                }else{
                    $is_following=false;
                }


                //Remaining Work
                $is_register=false;
                $is_friend=false;
                $is_sent_request=false;
                $is_report=false;
                $is_mute=false;


            }else{

                $is_like=false;
                $is_save=false;

                $is_comment=false;

                $is_follower=false;
                $is_following=false;

                $is_register=false;
                $is_interested=false;
                $is_friend=false;
                $is_sent_request=false;
                $is_report=false;

                $is_mute=false;

            }



            $properties = array (

                'is_like' => $is_like,
                'is_save' => $is_save,
                'is_comment' => $is_comment,

                'is_follower' => $is_follower,
                'is_following' => $is_following,

                'is_register' => $is_register,

                'is_interested' => $is_interested,

                'is_friend' => $is_friend,
                'is_sent_request' => $is_sent_request,

                'is_report' => $is_report,

                'is_mute' => $is_mute,

                'Options' => $Options,
                'Phones' => $PhoneSqlData,
                'Emails' => $EmailSqlData,
                'Addresses' => $AddressesSqlData,
                'Seos' => $SEOSqlData,
                'Galleries' => $GalleriesSqlData,

//                'Videos' => $VideosSqlData,
//                'Likes' => $Likes,
//                'Comments' => $Comments,
//                'Saves' => $Saves,

//                'ExternalLinks' => $ExternalLinkSqlData,
//                'Attachments' => $FilesSqlData,
//                'Ratings' => $RatingsSqlData,

//                'Features' => $Features,
//                'FloorPlans' => $FloorPlans,
//                'PaymentPlans' => $PaymentPlans,
//                'NearBys' => $NearBys,
//                'Maps' => $Maps,


//                'Company' => $CompaniesSqlData,
//                'User' => $UsersSqlData,
//                'RelatedProperties' => $RelatedPropertiesSqlData,
            );


            $PropertiesData = (object) array_merge((array) $PropertiesSqlData, $properties);



        }else{

            if(count($PropertiesSqlData)==0){
                $PropertiesData=null;
            }else{
                $PropertiesTemp=array();
                foreach ($PropertiesSqlData as $key => $PropertiesSqlDataTemp) {


                    $Options=$this->GetPropertyOptionsSqlData($request, null, $PropertiesSqlDataTemp->id, null, null, null, null, null, null, null, null, null, null, null, null, null, 15, 1, null);
                    $GalleriesSqlData=$this->GetGalleriesSqlData($request, null, $PropertiesSqlDataTemp->id, 'Property');
                    $AddressesSqlData=$this->GetAddressesSqlData($request, null, $PropertiesSqlDataTemp->id, 'Property', null);
                    $PhoneSqlData=$this->GetPhoneSqlData($request, null, $PropertiesSqlDataTemp->id, 'Property', null);
                    $EmailSqlData=$this->GetEmailSqlData($request, null, $PropertiesSqlDataTemp->id, 'Property', null);
                    $SEOSqlData=$this->GetSEOSqlData($request, null, $PropertiesSqlDataTemp->id, 'Property');


                    if($is_session){

                        $LikeProcessData=$this->GetLikesSqlData($request, null, $PropertiesSqlDataTemp->id, 'Property', null, null, null, null, null, null, null, null, null, null, $session_user_id, 15, 1);


                        if(count($LikeProcessData) > 0){
                            $is_like = true;
                        }else{
                            $is_like = false;
                        }

                        $SaveProcessData=$this->GetSavesSqlData($request, null, $PropertiesSqlDataTemp->id, 'Property', null, null, null, null, null, null, null, null, null, $session_user_id, 15, 1);

                        if(count($SaveProcessData) > 0){
                            $is_save=true;
                        }else{
                            $is_save=false;
                        }


                        $CommentProcessData=$this->GetCommentsSqlData($request, null, $PropertiesSqlDataTemp->id, 'Property', null, null, null, null, null, null, null, null, null, null, null, $session_user_id, 15, 1);

                        if(count($CommentProcessData) > 0){
                            $is_comment=true;
                        }else{
                            $is_comment=false;
                        }


                        $InterestProcessData=$this->GetInterestsSqlData($request, null, $PropertiesSqlDataTemp->id, 'Property', null, null, null, null, null, null, null, null, null, null, $session_user_id, 15, 1, null);

                        if(count($InterestProcessData) > 0){
                            $is_interested=true;
                        }else{
                            $is_interested=false;
                        }

                        $FollowerProcessData=$this->GetFollowersSqlData($request, null, $session_user_id, 'UserToUser', null, null, null, null, null, null, $PropertiesSqlDataTemp->created_by_user_id, 15, 1, null);

                        if(count($FollowerProcessData) > 0){
                            $is_follower=true;
                        }else{
                            $is_follower=false;
                        }

                        $FollowingProcessData=$this->GetFollowersSqlData($request, null, $PropertiesSqlDataTemp->created_by_user_id, 'UserToUser', null, null, null, null, null, null, $session_user_id, 15, 1, null);

                        if(count($FollowingProcessData) > 0){
                            $is_following=true;
                        }else{
                            $is_following=false;
                        }


                        //Remaining Work
                        $is_register=false;
                        $is_friend=false;
                        $is_sent_request=false;
                        $is_report=false;
                        $is_mute=false;


                    }else{

                        $is_like=false;
                        $is_save=false;

                        $is_comment=false;

                        $is_follower=false;
                        $is_following=false;

                        $is_register=false;
                        $is_interested=false;
                        $is_friend=false;
                        $is_sent_request=false;
                        $is_report=false;

                        $is_mute=false;

                    }



                    $properties = array (

                        'is_like' => $is_like,
                        'is_save' => $is_save,
                        'is_comment' => $is_comment,

                        'is_follower' => $is_follower,
                        'is_following' => $is_following,

                        'is_register' => $is_register,
                        'is_interested' => $is_interested,
                        'is_friend' => $is_friend,
                        'is_sent_request' => $is_sent_request,
                        'is_report' => $is_report,

                        'is_mute' => $is_mute,

                        'Options' => $Options,
                        'Phones' => $PhoneSqlData,
                        'Emails' => $EmailSqlData,
                        'Addresses' => $AddressesSqlData,
                        'Seos' => $SEOSqlData,
                        'Galleries' => $GalleriesSqlData,
                    );


                    $PropertiesTemp[$key] = (object) array_merge((array) $PropertiesSqlDataTemp, $properties);


                }


                $PropertiesData = array (
                    'current_page' => $PropertiesSqlData->currentPage(),
                    'data' => $PropertiesTemp,
                    'from' => $PropertiesSqlData->firstItem(),
                    'last_page' => $PropertiesSqlData->lastPage(),
                    'next_page_url' => $PropertiesSqlData->nextPageUrl(),
                    'path' => $PropertiesSqlData->nextPageUrl(),
                    'per_page' => $PropertiesSqlData->perPage(),
                    'prev_page_url' => $PropertiesSqlData->previousPageUrl(),
                    'to' => $PropertiesSqlData->lastItem(),
                    'total' => $PropertiesSqlData->total(),
                );
            }

        }

        return $PropertiesData;
        //---------------Properties--------------

    }

}
