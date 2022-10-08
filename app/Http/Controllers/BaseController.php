<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \Session;

class BaseController extends Controller
{


    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($error, $code, $data, $message)
    {
        $response = [
            'error' => $error,
            'code' => $code,
            'data'    => $data,
            'message' => $message,
        ];


//        return response()->json($response, 200);
        return response()->json($response, 200, [], JSON_NUMERIC_CHECK);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }


//        return response()->json($response, $code);
//        return response()->json($response, 200, [], JSON_NUMERIC_CHECK);
    }




    public function GetSession(){
        return Session::has('project');
    }



    //--------------------------------Insert------------------------------

    public function InsertEmailAddress($request, $reference_id, $reference_type, $email, $created_by_comp_id, $created_by_user_id, $CurrentDateTime){

        $six_digit_random_number = mt_rand(100000, 999999);

        $contact_email_address_id=DB::table('emails')->insertGetId(
            [
                'reference_id' => $reference_id,
                'reference_type' => $reference_type,
                'email' => addslashes($email),
                'verification_code' => $six_digit_random_number,
                'verification_status' => 'Unverified',
                'status' => 'Active',
            ]
            , 'id');

        return $contact_email_address_id;

    }

    public function InsertPhoneNumber($request, $country_code_id, $reference_id, $reference_type, $number, $created_by_comp_id, $created_by_user_id, $CurrentDateTime){

        $six_digit_random_number = mt_rand(100000, 999999);

        $contact_number_id=DB::table('numbers')->insertGetId(
            [
                'country_code_id' => $country_code_id,
                'reference_id' => $reference_id,
                'reference_type' => $reference_type,
                'number' => addslashes($number),
                'verification_code' => $six_digit_random_number,
                'verification_status' => 'Unverified',
                'status' => 'Active',
            ]
            , 'id');


        return $contact_number_id;

    }

    public function InsertContactAddress($request, $country_id, $provence_id, $city_id, $area_id, $location_id, $reference_id, $reference_type, $address, $postal_code, $latitude, $longitude, $status, $created_by_comp_id, $created_by_user_id, $CurrentDateTime){

        $six_digit_random_number = mt_rand(100000, 999999);

        $contact_address_id=DB::table('addresses')->insertGetId(
            [
                'country_id' => $country_id,
                'province_id' => $provence_id,
                'city_id' => $city_id,
                'area_id' => $area_id,
                'location_id' => $location_id,

                'reference_id' => $reference_id,
                'reference_type' => $reference_type,
                'address' => addslashes($address),

                'postal_code' => addslashes($postal_code),

                'latitude' => $latitude,
                'longitude' => $longitude,

                'status' => $status,

                'verification_status' => 'Unverified',
                'verification_code' => $six_digit_random_number,

            ]
            , 'id');


        return $contact_address_id;
    }

    public function InsertSEO($request, $reference_id, $reference_type, $title, $description, $seo_keywords, $seo_author, $status, $created_by_comp_id, $created_by_user_id, $CurrentDateTime){

        if($title != null || $description != null || $seo_keywords != null || $seo_author != null){

            $seo_id=DB::table('seos')->insertGetId(
                [
                    'reference_id' => $reference_id,
                    'reference_type' => $reference_type,

                    'title' => $title,
                    'description' => $description,
                    'keywords' => $seo_keywords,
                    'author' => $seo_author,

                    'status' => $status,
                ]
                , 'id');

        }

        return $seo_id;

    }


    //-------------------------------/Insert------------------------------




    public function GetGenders(){

        return collect([
            (object) [
                'value' => 'Male',
                'text' => 'Male'
            ],
            (object) [
                'value' => 'Female',
                'text' => 'Female'
            ],
            (object) [
                'value' => 'Other',
                'text' => 'Other'
            ],

        ]);

    }


    public function GetUserTypesSqlData($request, $id, $title, $slug, $status, $order_by, $created_by_comp, $created_by_user, $updated_by_user, $deleted_by_user, $created_at, $updated_at, $deleted_at, $page_no, $no_of_records, $record_type){

        if($id!=null){

            $sqlData = DB::table('user_types')
                ->select(
                    'user_types.id as id',
                    'user_types.title as title',
                    'user_types.slug as slug',
                    'user_types.status as status',
                    'user_types.order_by as order_by',
                    'user_types.created_by_comp_id as created_by_comp_id',
                    'user_types.created_by_user_id as created_by_user_id',
                    'user_types.updated_by_user_id as updated_by_user_id',
                    'user_types.deleted_by_user_id as deleted_by_user_id',
                    'user_types.created_at as created_at',
                    'user_types.updated_at as updated_at',
                    'user_types.deleted_at as deleted_at'
                )
                ->where('user_types.id',$id)
                ->where('user_types.status','Active')
                ->get();

        }else{

            $sqlData = DB::table('user_types')
                ->select(
                    'user_types.id as id',
                    'user_types.title as title',
                    'user_types.slug as slug',
                    'user_types.status as status',
                    'user_types.order_by as order_by',
                    'user_types.created_by_comp_id as created_by_comp_id',
                    'user_types.created_by_user_id as created_by_user_id',
                    'user_types.updated_by_user_id as updated_by_user_id',
                    'user_types.deleted_by_user_id as deleted_by_user_id',
                    'user_types.created_at as created_at',
                    'user_types.updated_at as updated_at',
                    'user_types.deleted_at as deleted_at'
                )
                ->orderBy('user_types.order_by', 'ASC')
                ->where('user_types.status','Active')
                ->get();
        }

        return $sqlData;

    }





    public function GetUsersSqlData($request, $id, $user_type, $country_code, $full_name, $slug, $email, $number, $gender, $status, $order_by, $created_by_comp, $created_by_user, $updated_by_user, $deleted_by_user, $created_at, $updated_at, $deleted_at, $country, $province, $city, $area, $location, $zip_code, $miles_from, $page_no, $no_of_records, $record_type){

        if($id!=null && $user_type==null && $full_name==null && $slug==null && $email==null && $number==null && $status==null && $created_by_user==null){

            //$id!=null

            $sqlData = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->leftJoin('country_codes', 'users.country_code_id', '=', 'country_codes.id')
                ->leftJoin('countries', 'country_codes.country_id', '=', 'countries.id')
                ->leftJoin('agency_hosts_relations', 'users.id', '=', 'agency_hosts_relations.user_id')
                ->leftJoin('agencies', 'agency_hosts_relations.id', '=', 'agencies.id')
                ->leftJoin('users as users2', 'users.reference_code', '=', 'users2.code')
                ->leftJoin('companies', 'users.id', '=', 'companies.created_by_user_id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'agencies.title as agency_title',

                    'users2.full_name as users2_full_name',
                    'companies.title as company_title',

                    'users.country_code_id as country_code_id',
                    'country_codes.code as country_code_code',

                    'countries.name as country_name',

                    'users.first_name as first_name',
                    'users.last_name as last_name',

                    'users.full_name as full_name',
                    'users.email as email',
                    'users.username as username',
                    'users.number as number',
                    'users.gender as gender',
                    'users.image as image',
                    'users.banner as banner',
                    'users.about as about',

                    'users.address as address',
                    'users.facebook as facebook',
                    'users.linkedin as linkedin',
                    'users.twitter as twitter',
                    'users.instagram as instagram',

                    'users.id_front as id_front',
                    'users.id_back as id_back',
                    'users.id_number as id_number',

                    'users.count_posts as count_posts',
                    'users.count_followers as count_followers',
                    'users.count_following as count_following',

                    'users.count_gold_trophies as count_gold_trophies',
                    'users.count_nominations as count_nominations',
                    'users.count_silver_trophies as count_silver_trophies',
                    'users.count_content as count_content',
                    'users.count_engagement as count_engagement',
                    'users.count_judgment as count_judgment',
                    'users.count_listed as count_listed',
                    'users.count_partner as count_partner',
                    'users.count_watch as count_watch',

                    'users.score as score',
                    'users.no_of_sources as no_of_sources',
                    'users.no_of_followings as no_of_followings',
                    'users.no_of_followers as no_of_followers',
                    'users.code as code',
                    'users.reference_code as reference_code',
                    'users.wallet as wallet',

                    'users.status as status',
                    'users.order_by as order_by',
                    'users.created_by_comp_id as created_by_comp_id',
                    'users.created_by_user_id as created_by_user_id',
                    'users.updated_by_user_id as updated_by_user_id',
                    'users.deleted_by_user_id as deleted_by_user_id',
                    'users.created_at as created_at',
                    'users.updated_at as updated_at',
                    'users.deleted_at as deleted_at'
                )
                ->where('users.id',$id)
                ->first();

        }elseif($id==null && $user_type!=null && $full_name==null && $slug==null && $email==null && $number==null && $status==null && $created_by_user==null){

            //$user_type!=null

            $sqlData = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->leftJoin('country_codes', 'users.country_code_id', '=', 'country_codes.id')
                ->leftJoin('countries', 'country_codes.country_id', '=', 'countries.id')
                ->leftJoin('agency_hosts_relations', 'users.id', '=', 'agency_hosts_relations.user_id')
                ->leftJoin('agencies', 'agency_hosts_relations.id', '=', 'agencies.id')
                ->leftJoin('users as users2', 'users.reference_code', '=', 'users2.code')
                ->leftJoin('companies', 'users.id', '=', 'companies.created_by_user_id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'agencies.title as agency_title',

                    'users2.full_name as users2_full_name',
                    'companies.title as company_title',

                    'users.country_code_id as country_code_id',
                    'country_codes.code as country_code_code',

                    'countries.name as country_name',

                    'users.first_name as first_name',
                    'users.last_name as last_name',

                    'users.full_name as full_name',
                    'users.email as email',
                    'users.username as username',
                    'users.number as number',
                    'users.gender as gender',
                    'users.image as image',
                    'users.banner as banner',
                    'users.about as about',

                    'users.address as address',
                    'users.facebook as facebook',
                    'users.linkedin as linkedin',
                    'users.twitter as twitter',
                    'users.instagram as instagram',

                    'users.id_front as id_front',
                    'users.id_back as id_back',
                    'users.id_number as id_number',

                    'users.count_posts as count_posts',
                    'users.count_followers as count_followers',
                    'users.count_following as count_following',

                    'users.count_gold_trophies as count_gold_trophies',
                    'users.count_nominations as count_nominations',
                    'users.count_silver_trophies as count_silver_trophies',
                    'users.count_content as count_content',
                    'users.count_engagement as count_engagement',
                    'users.count_judgment as count_judgment',
                    'users.count_listed as count_listed',
                    'users.count_partner as count_partner',
                    'users.count_watch as count_watch',

                    'users.score as score',
                    'users.no_of_sources as no_of_sources',
                    'users.no_of_followings as no_of_followings',
                    'users.no_of_followers as no_of_followers',
                    'users.code as code',
                    'users.reference_code as reference_code',
                    'users.wallet as wallet',

                    'users.status as status',
                    'users.order_by as order_by',
                    'users.created_by_comp_id as created_by_comp_id',
                    'users.created_by_user_id as created_by_user_id',
                    'users.updated_by_user_id as updated_by_user_id',
                    'users.deleted_by_user_id as deleted_by_user_id',
                    'users.created_at as created_at',
                    'users.updated_at as updated_at',
                    'users.deleted_at as deleted_at'
                )
                ->orWhere('user_types.slug',$user_type)
                ->orderBy('users.created_at', 'DESC')
                ->paginate();

        }elseif($id==null && $user_type!=null && $full_name==null && $slug==null && $email==null && $number==null && $status==null && $created_by_user!=null){


            //$user_type!=null && $created_by_user!=null

            $sqlData = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->leftJoin('country_codes', 'users.country_code_id', '=', 'country_codes.id')
                ->leftJoin('countries', 'country_codes.country_id', '=', 'countries.id')
                ->leftJoin('agency_hosts_relations', 'users.id', '=', 'agency_hosts_relations.user_id')
                ->leftJoin('agencies', 'agency_hosts_relations.id', '=', 'agencies.id')
                ->leftJoin('users as users2', 'users.reference_code', '=', 'users2.code')
                ->leftJoin('companies', 'users.id', '=', 'companies.created_by_user_id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'agencies.title as agency_title',

                    'users2.full_name as users2_full_name',
                    'companies.title as company_title',

                    'users.country_code_id as country_code_id',
                    'country_codes.code as country_code_code',

                    'countries.name as country_name',

                    'users.first_name as first_name',
                    'users.last_name as last_name',

                    'users.full_name as full_name',
                    'users.email as email',
                    'users.username as username',
                    'users.number as number',
                    'users.gender as gender',
                    'users.image as image',
                    'users.banner as banner',
                    'users.about as about',

                    'users.address as address',
                    'users.facebook as facebook',
                    'users.linkedin as linkedin',
                    'users.twitter as twitter',
                    'users.instagram as instagram',

                    'users.id_front as id_front',
                    'users.id_back as id_back',
                    'users.id_number as id_number',

                    'users.count_posts as count_posts',
                    'users.count_followers as count_followers',
                    'users.count_following as count_following',

                    'users.count_gold_trophies as count_gold_trophies',
                    'users.count_nominations as count_nominations',
                    'users.count_silver_trophies as count_silver_trophies',
                    'users.count_content as count_content',
                    'users.count_engagement as count_engagement',
                    'users.count_judgment as count_judgment',
                    'users.count_listed as count_listed',
                    'users.count_partner as count_partner',
                    'users.count_watch as count_watch',

                    'users.score as score',
                    'users.no_of_sources as no_of_sources',
                    'users.no_of_followings as no_of_followings',
                    'users.no_of_followers as no_of_followers',
                    'users.code as code',
                    'users.reference_code as reference_code',
                    'users.wallet as wallet',

                    'users.status as status',
                    'users.order_by as order_by',
                    'users.created_by_comp_id as created_by_comp_id',
                    'users.created_by_user_id as created_by_user_id',
                    'users.updated_by_user_id as updated_by_user_id',
                    'users.deleted_by_user_id as deleted_by_user_id',
                    'users.created_at as created_at',
                    'users.updated_at as updated_at',
                    'users.deleted_at as deleted_at'
                )
                ->where('user_types.slug',$user_type)
                ->where('users.reference_code',$created_by_user)
                ->orderBy('users.created_at', 'DESC')
                ->paginate();

        }elseif($id==null && $user_type==null && $full_name==null && $slug==null && $email==null && $number==null && $status!=null && $created_by_user==null){

            //$user_type!=null

            $sqlData = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->leftJoin('country_codes', 'users.country_code_id', '=', 'country_codes.id')
                ->leftJoin('countries', 'country_codes.country_id', '=', 'countries.id')
                ->leftJoin('agency_hosts_relations', 'users.id', '=', 'agency_hosts_relations.user_id')
                ->leftJoin('agencies', 'agency_hosts_relations.id', '=', 'agencies.id')
                ->leftJoin('users as users2', 'users.reference_code', '=', 'users2.code')
                ->leftJoin('companies', 'users.id', '=', 'companies.created_by_user_id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'agencies.title as agency_title',

                    'users2.full_name as users2_full_name',
                    'companies.title as company_title',

                    'users.country_code_id as country_code_id',
                    'country_codes.code as country_code_code',

                    'countries.name as country_name',

                    'users.first_name as first_name',
                    'users.last_name as last_name',

                    'users.full_name as full_name',
                    'users.email as email',
                    'users.username as username',
                    'users.number as number',
                    'users.gender as gender',
                    'users.image as image',
                    'users.banner as banner',
                    'users.about as about',

                    'users.address as address',
                    'users.facebook as facebook',
                    'users.linkedin as linkedin',
                    'users.twitter as twitter',
                    'users.instagram as instagram',

                    'users.id_front as id_front',
                    'users.id_back as id_back',
                    'users.id_number as id_number',

                    'users.count_posts as count_posts',
                    'users.count_followers as count_followers',
                    'users.count_following as count_following',

                    'users.count_gold_trophies as count_gold_trophies',
                    'users.count_nominations as count_nominations',
                    'users.count_silver_trophies as count_silver_trophies',
                    'users.count_content as count_content',
                    'users.count_engagement as count_engagement',
                    'users.count_judgment as count_judgment',
                    'users.count_listed as count_listed',
                    'users.count_partner as count_partner',
                    'users.count_watch as count_watch',

                    'users.score as score',
                    'users.no_of_sources as no_of_sources',
                    'users.no_of_followings as no_of_followings',
                    'users.no_of_followers as no_of_followers',
                    'users.code as code',
                    'users.reference_code as reference_code',
                    'users.wallet as wallet',

                    'users.status as status',
                    'users.order_by as order_by',
                    'users.created_by_comp_id as created_by_comp_id',
                    'users.created_by_user_id as created_by_user_id',
                    'users.updated_by_user_id as updated_by_user_id',
                    'users.deleted_by_user_id as deleted_by_user_id',
                    'users.created_at as created_at',
                    'users.updated_at as updated_at',
                    'users.deleted_at as deleted_at'
                )
                ->orWhere('users.status',$status)
                ->orderBy('users.created_at', 'DESC')
                ->paginate();

        }elseif($id==null && $user_type==null && $full_name!=null && $slug==null && $email==null && $number==null && $status==null){

            //$full_name!=null

            $sqlData = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->leftJoin('country_codes', 'users.country_code_id', '=', 'country_codes.id')
                ->leftJoin('countries', 'country_codes.country_id', '=', 'countries.id')
                ->leftJoin('agency_hosts_relations', 'users.id', '=', 'agency_hosts_relations.user_id')
                ->leftJoin('agencies', 'agency_hosts_relations.id', '=', 'agencies.id')
                ->leftJoin('users as users2', 'users.reference_code', '=', 'users2.code')
                ->leftJoin('companies', 'users.id', '=', 'companies.created_by_user_id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'agencies.title as agency_title',

                    'users2.full_name as users2_full_name',
                    'companies.title as company_title',

                    'users.country_code_id as country_code_id',
                    'country_codes.code as country_code_code',

                    'countries.name as country_name',

                    'users.first_name as first_name',
                    'users.last_name as last_name',

                    'users.full_name as full_name',
                    'users.email as email',
                    'users.username as username',
                    'users.number as number',
                    'users.gender as gender',
                    'users.image as image',
                    'users.banner as banner',
                    'users.about as about',

                    'users.address as address',
                    'users.facebook as facebook',
                    'users.linkedin as linkedin',
                    'users.twitter as twitter',
                    'users.instagram as instagram',

                    'users.id_front as id_front',
                    'users.id_back as id_back',
                    'users.id_number as id_number',

                    'users.count_posts as count_posts',
                    'users.count_followers as count_followers',
                    'users.count_following as count_following',

                    'users.count_gold_trophies as count_gold_trophies',
                    'users.count_nominations as count_nominations',
                    'users.count_silver_trophies as count_silver_trophies',
                    'users.count_content as count_content',
                    'users.count_engagement as count_engagement',
                    'users.count_judgment as count_judgment',
                    'users.count_listed as count_listed',
                    'users.count_partner as count_partner',
                    'users.count_watch as count_watch',

                    'users.score as score',
                    'users.no_of_sources as no_of_sources',
                    'users.no_of_followings as no_of_followings',
                    'users.no_of_followers as no_of_followers',
                    'users.code as code',
                    'users.reference_code as reference_code',
                    'users.wallet as wallet',

                    'users.status as status',
                    'users.order_by as order_by',
                    'users.created_by_comp_id as created_by_comp_id',
                    'users.created_by_user_id as created_by_user_id',
                    'users.updated_by_user_id as updated_by_user_id',
                    'users.deleted_by_user_id as deleted_by_user_id',
                    'users.created_at as created_at',
                    'users.updated_at as updated_at',
                    'users.deleted_at as deleted_at'
                )
                ->orWhere('users.full_name', 'like', '%' . $full_name . '%')
                ->orWhere('users.first_name', 'like', '%' . $full_name . '%')
                ->orWhere('users.last_name', 'like', '%' . $full_name . '%')
                ->orderBy('users.created_at', 'DESC')
                ->paginate();

        }else{

            $sqlData = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->leftJoin('country_codes', 'users.country_code_id', '=', 'country_codes.id')
                ->leftJoin('countries', 'country_codes.country_id', '=', 'countries.id')
                ->leftJoin('agency_hosts_relations', 'users.id', '=', 'agency_hosts_relations.user_id')
                ->leftJoin('agencies', 'agency_hosts_relations.id', '=', 'agencies.id')
                ->leftJoin('users as users2', 'users.reference_code', '=', 'users2.code')
                ->leftJoin('companies', 'users.id', '=', 'companies.created_by_user_id')
                ->select(
                    'users.id as id',
                    'users.user_type_id as user_type_id',
                    'user_types.title as user_type_title',
                    'user_types.slug as user_type_slug',

                    'agencies.title as agency_title',

                    'users2.full_name as users2_full_name',
                    'companies.title as company_title',

                    'users.country_code_id as country_code_id',
                    'country_codes.code as country_code_code',

                    'countries.name as country_name',

                    'users.first_name as first_name',
                    'users.last_name as last_name',

                    'users.full_name as full_name',
                    'users.email as email',
                    'users.username as username',
                    'users.number as number',
                    'users.gender as gender',
                    'users.image as image',
                    'users.banner as banner',
                    'users.about as about',

                    'users.address as address',
                    'users.facebook as facebook',
                    'users.linkedin as linkedin',
                    'users.twitter as twitter',
                    'users.instagram as instagram',

                    'users.id_front as id_front',
                    'users.id_back as id_back',
                    'users.id_number as id_number',

                    'users.count_posts as count_posts',
                    'users.count_followers as count_followers',
                    'users.count_following as count_following',

                    'users.count_gold_trophies as count_gold_trophies',
                    'users.count_nominations as count_nominations',
                    'users.count_silver_trophies as count_silver_trophies',
                    'users.count_content as count_content',
                    'users.count_engagement as count_engagement',
                    'users.count_judgment as count_judgment',
                    'users.count_listed as count_listed',
                    'users.count_partner as count_partner',
                    'users.count_watch as count_watch',

                    'users.score as score',
                    'users.no_of_sources as no_of_sources',
                    'users.no_of_followings as no_of_followings',
                    'users.no_of_followers as no_of_followers',
                    'users.code as code',
                    'users.reference_code as reference_code',
                    'users.wallet as wallet',

                    'users.status as status',
                    'users.order_by as order_by',
                    'users.created_by_comp_id as created_by_comp_id',
                    'users.created_by_user_id as created_by_user_id',
                    'users.updated_by_user_id as updated_by_user_id',
                    'users.deleted_by_user_id as deleted_by_user_id',
                    'users.created_at as created_at',
                    'users.updated_at as updated_at',
                    'users.deleted_at as deleted_at'
                )
                ->orderBy('users.created_at', 'DESC')
                ->paginate(250);
        }

        return $sqlData;

    }






    public function GetPasswordResetSqlData($request, $id, $email, $number, $code, $token, $status, $created_at, $page_no, $no_of_records, $record_type){

        if($id!=null && $email==null && $number==null && $code==null && $token==null && $status==null && $created_at==null){

            $sqlData = DB::table('password_resets')
                ->select(
                    'password_resets.id as id',
                    'password_resets.email as email',
                    'password_resets.number as number',
                    'password_resets.code as code',
                    'password_resets.token as token',
                    'password_resets.status as status',
                    'password_resets.created_at as created_at'
                )
                ->where('password_resets.id',$id)
                ->where('password_resets.status','Active')
                ->first();

        }elseif($id==null && $email!=null && $number==null && $code==null && $token==null && $status!=null && $created_at==null){

            $sqlData = DB::table('password_resets')
                ->select(
                    'password_resets.id as id',
                    'password_resets.email as email',
                    'password_resets.number as number',
                    'password_resets.code as code',
                    'password_resets.token as token',
                    'password_resets.status as status',
                    'password_resets.created_at as created_at'
                )
                ->where('password_resets.email',$email)
                ->where('password_resets.status',$status)
                ->count();

        }elseif($id==null && $email==null && $number==null && $code==null && $token!=null && $status!=null && $created_at==null){

            $sqlData = DB::table('password_resets')
                ->select(
                    'password_resets.id as id',
                    'password_resets.email as email',
                    'password_resets.number as number',
                    'password_resets.code as code',
                    'password_resets.token as token',
                    'password_resets.status as status',
                    'password_resets.created_at as created_at'
                )
                ->where('password_resets.token',$token)
                ->where('password_resets.status',$status)
                ->count();

        }else{

            $sqlData = DB::table('password_resets')
                ->select(
                    'password_resets.id as id',
                    'password_resets.email as email',
                    'password_resets.number as number',
                    'password_resets.code as code',
                    'password_resets.token as token',
                    'password_resets.status as status',
                    'password_resets.created_at as created_at'
                )
                ->orderBy('password_resets.order_by', 'ASC')
                ->where('password_resets.status','Active')
                ->get();
        }

        return $sqlData;

    }




    public function GetCountriesSqlData($request, $id, $title, $slug, $status, $order_by, $created_by_comp, $created_by_user, $created_at, $page_no, $no_of_records, $record_type){

        if($id!=null){

            $sqlData = DB::table('countries')
                ->select(
                    'countries.id as id',
                    'countries.name as name',
                    'countries.slug as slug',
                    'countries.about as about',
                    'countries.image as image',
                    'countries.two_letter_code as two_letter_code',
                    'countries.three_letter_code as three_letter_code',
                    'countries.flag as flag',

                    'countries.latitude as latitude',
                    'countries.longitude as longitude',
                    'countries.status as status',
                    'countries.order_by as order_by',
                    'countries.created_by_comp_id as created_by_comp_id',
                    'countries.created_by_user_id as created_by_user_id',
                    'countries.updated_by_user_id as updated_by_user_id',
                    'countries.deleted_by_user_id as deleted_by_user_id',
                    'countries.created_at as created_at',
                    'countries.updated_at as updated_at',
                    'countries.deleted_at as deleted_at'
                )
                ->where('countries.id',$id)
                ->orderBy('countries.order_by', 'ASC')
                ->where('countries.status','Active')
                ->get();

        }else{

            $sqlData = DB::table('countries')
                ->select(
                    'countries.id as id',
                    'countries.name as name',
                    'countries.slug as slug',
                    'countries.about as about',
                    'countries.image as image',
                    'countries.two_letter_code as two_letter_code',
                    'countries.three_letter_code as three_letter_code',
                    'countries.flag as flag',

                    'countries.latitude as latitude',
                    'countries.longitude as longitude',
                    'countries.status as status',
                    'countries.order_by as order_by',
                    'countries.created_by_comp_id as created_by_comp_id',
                    'countries.created_by_user_id as created_by_user_id',
                    'countries.updated_by_user_id as updated_by_user_id',
                    'countries.deleted_by_user_id as deleted_by_user_id',
                    'countries.created_at as created_at',
                    'countries.updated_at as updated_at',
                    'countries.deleted_at as deleted_at'
                )
                ->orderBy('countries.order_by', 'ASC')
                ->where('countries.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetProvincesSqlData($request, $id, $country_id, $title, $slug, $status, $order_by, $created_by_comp, $created_by_user, $created_at, $page_no, $no_of_records, $record_type){

        if($id!=null && $country_id==null){

            $sqlData = DB::table('provinces')
                ->join('countries', 'provinces.country_id', '=', 'countries.id')
                ->select(
                    'provinces.id as id',
                    'provinces.country_id as country_id',
                    'countries.name as country_name',

                    'provinces.title as title',
                    'provinces.slug as slug',
                    'provinces.about as about',
                    'provinces.image as image',
                    'provinces.two_letter_code as two_letter_code',

                    'provinces.latitude as latitude',
                    'provinces.longitude as longitude',
                    'provinces.status as status',
                    'provinces.order_by as order_by',
                    'provinces.created_by_comp_id as created_by_comp_id',
                    'provinces.created_by_user_id as created_by_user_id',
                    'provinces.updated_by_user_id as updated_by_user_id',
                    'provinces.deleted_by_user_id as deleted_by_user_id',
                    'provinces.created_at as created_at',
                    'provinces.updated_at as updated_at',
                    'provinces.deleted_at as deleted_at'
                )
                ->where('provinces.id',$id)
                ->orderBy('provinces.order_by', 'ASC')
                ->where('provinces.status','Active')
                ->get();

        }elseif($id==null && $country_id!=null){

            $sqlData = DB::table('provinces')
                ->join('countries', 'provinces.country_id', '=', 'countries.id')
                ->select(
                    'provinces.id as id',
                    'provinces.country_id as country_id',
                    'countries.name as country_name',

                    'provinces.title as title',
                    'provinces.slug as slug',
                    'provinces.about as about',
                    'provinces.image as image',
                    'provinces.two_letter_code as two_letter_code',

                    'provinces.latitude as latitude',
                    'provinces.longitude as longitude',
                    'provinces.status as status',
                    'provinces.order_by as order_by',
                    'provinces.created_by_comp_id as created_by_comp_id',
                    'provinces.created_by_user_id as created_by_user_id',
                    'provinces.updated_by_user_id as updated_by_user_id',
                    'provinces.deleted_by_user_id as deleted_by_user_id',
                    'provinces.created_at as created_at',
                    'provinces.updated_at as updated_at',
                    'provinces.deleted_at as deleted_at'
                )
                ->where('provinces.country_id',$country_id)
                ->orderBy('provinces.order_by', 'ASC')
                ->where('provinces.status','Active')
                ->get();

        }else{

            $sqlData = DB::table('provinces')
                ->join('countries', 'provinces.country_id', '=', 'countries.id')
                ->select(
                    'provinces.id as id',
                    'provinces.country_id as country_id',
                    'countries.name as country_name',

                    'provinces.title as title',
                    'provinces.slug as slug',
                    'provinces.about as about',
                    'provinces.image as image',
                    'provinces.two_letter_code as two_letter_code',

                    'provinces.latitude as latitude',
                    'provinces.longitude as longitude',
                    'provinces.status as status',
                    'provinces.order_by as order_by',
                    'provinces.created_by_comp_id as created_by_comp_id',
                    'provinces.created_by_user_id as created_by_user_id',
                    'provinces.updated_by_user_id as updated_by_user_id',
                    'provinces.deleted_by_user_id as deleted_by_user_id',
                    'provinces.created_at as created_at',
                    'provinces.updated_at as updated_at',
                    'provinces.deleted_at as deleted_at'
                )
                ->orderBy('provinces.order_by', 'ASC')
                ->where('provinces.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetCitiesSqlData($request, $id, $province_id, $country_id, $title, $slug, $status, $order_by, $created_by_comp, $created_by_user, $created_at, $page_no, $no_of_records, $record_type){

        if($id!=null && $province_id==null){

            $sqlData = DB::table('cities')
                ->join('provinces', 'cities.province_id', '=', 'provinces.id')
                ->select(
                    'cities.id as id',
                    'cities.province_id as province_id',
                    'provinces.title as province_title',
                    'provinces.country_id as country_id',

                    'cities.name as name',
                    'cities.slug as slug',
                    'cities.about as about',
                    'cities.image as image',
                    'cities.latitude as latitude',
                    'cities.longitude as longitude',
                    'cities.status as status',
                    'cities.order_by as order_by',
                    'cities.created_by_comp_id as created_by_comp_id',
                    'cities.created_by_user_id as created_by_user_id',
                    'cities.updated_by_user_id as updated_by_user_id',
                    'cities.deleted_by_user_id as deleted_by_user_id',
                    'cities.created_at as created_at',
                    'cities.updated_at as updated_at',
                    'cities.deleted_at as deleted_at'
                )
                ->where('cities.id',$id)
                ->orderBy('cities.order_by', 'ASC')
                ->where('cities.status','Active')
                ->first();

        }elseif($id==null && $province_id!=null){

            $sqlData = DB::table('cities')
                ->join('provinces', 'cities.province_id', '=', 'provinces.id')
                ->select(
                    'cities.id as id',
                    'cities.province_id as province_id',
                    'provinces.title as province_title',
                    'provinces.country_id as country_id',

                    'cities.name as name',
                    'cities.slug as slug',
                    'cities.about as about',
                    'cities.image as image',
                    'cities.latitude as latitude',
                    'cities.longitude as longitude',
                    'cities.status as status',
                    'cities.order_by as order_by',
                    'cities.created_by_comp_id as created_by_comp_id',
                    'cities.created_by_user_id as created_by_user_id',
                    'cities.updated_by_user_id as updated_by_user_id',
                    'cities.deleted_by_user_id as deleted_by_user_id',
                    'cities.created_at as created_at',
                    'cities.updated_at as updated_at',
                    'cities.deleted_at as deleted_at'
                )
                ->where('cities.province_id',$province_id)
                ->orderBy('cities.order_by', 'ASC')
                ->where('cities.status','Active')
                ->get();

        }else{

            $sqlData = DB::table('cities')
                ->join('provinces', 'cities.province_id', '=', 'provinces.id')
                ->select(
                    'cities.id as id',
                    'cities.province_id as province_id',
                    'provinces.title as province_title',
                    'provinces.country_id as country_id',

                    'cities.name as name',
                    'cities.slug as slug',
                    'cities.about as about',
                    'cities.image as image',
                    'cities.latitude as latitude',
                    'cities.longitude as longitude',
                    'cities.status as status',
                    'cities.order_by as order_by',
                    'cities.created_by_comp_id as created_by_comp_id',
                    'cities.created_by_user_id as created_by_user_id',
                    'cities.updated_by_user_id as updated_by_user_id',
                    'cities.deleted_by_user_id as deleted_by_user_id',
                    'cities.created_at as created_at',
                    'cities.updated_at as updated_at',
                    'cities.deleted_at as deleted_at'
                )
                ->orderBy('cities.order_by', 'ASC')
                ->where('cities.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetAreasSqlData($request, $id, $city_id, $province_id, $country_id, $title, $slug, $status, $order_by, $created_by_comp, $created_by_user, $created_at, $page_no, $no_of_records, $record_type){

        if($id!=null && $city_id==null){

            $sqlData = DB::table('areas')
                ->join('cities', 'areas.city_id', '=', 'cities.id')
                ->select(
                    'areas.id as id',
                    'areas.city_id as city_id',
                    'cities.name as city_name',
                    'cities.province_id as province_id',

                    'areas.name as name',
                    'areas.slug as slug',
                    'areas.about as about',
                    'areas.image as image',
                    'areas.code as code',
                    'areas.latitude as latitude',
                    'areas.longitude as longitude',
                    'areas.status as status',
                    'areas.order_by as order_by',
                    'areas.created_by_comp_id as created_by_comp_id',
                    'areas.created_by_user_id as created_by_user_id',
                    'areas.updated_by_user_id as updated_by_user_id',
                    'areas.deleted_by_user_id as deleted_by_user_id',
                    'areas.created_at as created_at',
                    'areas.updated_at as updated_at',
                    'areas.deleted_at as deleted_at'
                )
                ->where('areas.id',$id)
                ->orderBy('areas.order_by', 'ASC')
                ->where('areas.status','Active')
                ->get();

        }elseif($id==null && $city_id!=null){

            $sqlData = DB::table('areas')
                ->join('cities', 'areas.city_id', '=', 'cities.id')
                ->select(
                    'areas.id as id',
                    'areas.city_id as city_id',
                    'cities.name as city_name',
                    'cities.province_id as province_id',

                    'areas.name as name',
                    'areas.slug as slug',
                    'areas.about as about',
                    'areas.image as image',
                    'areas.code as code',
                    'areas.latitude as latitude',
                    'areas.longitude as longitude',
                    'areas.status as status',
                    'areas.order_by as order_by',
                    'areas.created_by_comp_id as created_by_comp_id',
                    'areas.created_by_user_id as created_by_user_id',
                    'areas.updated_by_user_id as updated_by_user_id',
                    'areas.deleted_by_user_id as deleted_by_user_id',
                    'areas.created_at as created_at',
                    'areas.updated_at as updated_at',
                    'areas.deleted_at as deleted_at'
                )
                ->where('areas.city_id',$city_id)
                ->orderBy('areas.order_by', 'ASC')
                ->where('areas.status','Active')
                ->get();

        }else{

            $sqlData = DB::table('areas')
                ->join('cities', 'areas.city_id', '=', 'cities.id')
                ->select(
                    'areas.id as id',
                    'areas.city_id as city_id',
                    'cities.name as city_name',
                    'cities.province_id as province_id',

                    'areas.name as name',
                    'areas.slug as slug',
                    'areas.about as about',
                    'areas.image as image',
                    'areas.code as code',
                    'areas.latitude as latitude',
                    'areas.longitude as longitude',
                    'areas.status as status',
                    'areas.order_by as order_by',
                    'areas.created_by_comp_id as created_by_comp_id',
                    'areas.created_by_user_id as created_by_user_id',
                    'areas.updated_by_user_id as updated_by_user_id',
                    'areas.deleted_by_user_id as deleted_by_user_id',
                    'areas.created_at as created_at',
                    'areas.updated_at as updated_at',
                    'areas.deleted_at as deleted_at'
                )
                ->orderBy('areas.order_by', 'ASC')
                ->where('areas.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetLocationsSqlData($request, $id, $area_id, $city_id, $province_id, $country_id, $title, $slug, $status, $order_by, $created_by_comp, $created_by_user, $created_at, $page_no, $no_of_records, $record_type){

        if($id!=null && $area_id==null){

            $sqlData = DB::table('locations')
                ->join('areas', 'locations.area_id', '=', 'areas.id')
                ->select(
                    'locations.id as id',
                    'locations.area_id as area_id',
                    'areas.name as area_name',
                    'areas.city_id as city_id',

                    'locations.name as name',
                    'locations.slug as slug',
                    'locations.about as about',
                    'locations.image as image',
                    'locations.latitude as latitude',
                    'locations.longitude as longitude',
                    'locations.status as status',
                    'locations.order_by as order_by',
                    'locations.created_by_comp_id as created_by_comp_id',
                    'locations.created_by_user_id as created_by_user_id',
                    'locations.updated_by_user_id as updated_by_user_id',
                    'locations.deleted_by_user_id as deleted_by_user_id',
                    'locations.created_at as created_at',
                    'locations.updated_at as updated_at',
                    'locations.deleted_at as deleted_at'
                )
                ->where('locations.id',$id)
                ->orderBy('locations.order_by', 'ASC')
                ->where('locations.status','Active')
                ->get();

        }elseif($id==null && $area_id!=null){

            $sqlData = DB::table('locations')
                ->join('areas', 'locations.area_id', '=', 'areas.id')
                ->select(
                    'locations.id as id',
                    'locations.area_id as area_id',
                    'areas.name as area_name',
                    'areas.city_id as city_id',

                    'locations.name as name',
                    'locations.slug as slug',
                    'locations.about as about',
                    'locations.image as image',
                    'locations.latitude as latitude',
                    'locations.longitude as longitude',
                    'locations.status as status',
                    'locations.order_by as order_by',
                    'locations.created_by_comp_id as created_by_comp_id',
                    'locations.created_by_user_id as created_by_user_id',
                    'locations.updated_by_user_id as updated_by_user_id',
                    'locations.deleted_by_user_id as deleted_by_user_id',
                    'locations.created_at as created_at',
                    'locations.updated_at as updated_at',
                    'locations.deleted_at as deleted_at'
                )
                ->where('areas.city_id',$area_id)
                ->orderBy('areas.order_by', 'ASC')
                ->where('areas.status','Active')
                ->get();

        }else{

            $sqlData = DB::table('locations')
                ->join('areas', 'locations.area_id', '=', 'areas.id')
                ->select(
                    'locations.id as id',
                    'locations.area_id as area_id',
                    'areas.name as area_name',
                    'areas.city_id as city_id',

                    'locations.name as name',
                    'locations.slug as slug',
                    'locations.about as about',
                    'locations.image as image',
                    'locations.latitude as latitude',
                    'locations.longitude as longitude',
                    'locations.status as status',
                    'locations.order_by as order_by',
                    'locations.created_by_comp_id as created_by_comp_id',
                    'locations.created_by_user_id as created_by_user_id',
                    'locations.updated_by_user_id as updated_by_user_id',
                    'locations.deleted_by_user_id as deleted_by_user_id',
                    'locations.created_at as created_at',
                    'locations.updated_at as updated_at',
                    'locations.deleted_at as deleted_at'
                )
                ->orderBy('locations.order_by', 'ASC')
                ->where('locations.status','Active')
                ->get();
        }

        return $sqlData;

    }




    //----------------------For Select Box------------------------
    public function GetProvinces($request, $id, $country, $title, $slug, $status, $order_by, $created_by_comp, $created_by_user, $created_at, $page_no, $no_of_records, $record_type){


        if($id!=null){
            $queryData = DB::table('provinces')
                ->join('countries', 'provinces.country_id', '=', 'countries.id')
                ->select(
                    'provinces.id as id',
                    'provinces.country_id as country_id',
                    'countries.name as country_title',
                    'provinces.title as title',
                    'provinces.status as status',
                    'provinces.order_by as order_by',
                    'provinces.created_by_comp_id as created_by_comp_id',
                    'provinces.created_by_user_id as created_by_user_id',
                    'provinces.updated_by_user_id as updated_by_user_id',
                    'provinces.deleted_by_user_id as deleted_by_user_id',
                    'provinces.created_at as created_at',
                    'provinces.updated_at as updated_at',
                    'provinces.deleted_at as deleted_at'
                )
                ->where('provinces.status','Active')
                ->where('provinces.country_id',$id)
                ->orderBy('provinces.order_by', 'ASC')
                ->get();
        }else{
            $queryData = DB::table('provinces')
                ->join('countries', 'provinces.country_id', '=', 'countries.id')
                ->select(
                    'provinces.id as id',
                    'provinces.country_id as country_id',
                    'countries.name as country_title',
                    'provinces.title as title',
                    'provinces.status as status',
                    'provinces.order_by as order_by',
                    'provinces.created_by_comp_id as created_by_comp_id',
                    'provinces.created_by_user_id as created_by_user_id',
                    'provinces.updated_by_user_id as updated_by_user_id',
                    'provinces.deleted_by_user_id as deleted_by_user_id',
                    'provinces.created_at as created_at',
                    'provinces.updated_at as updated_at',
                    'provinces.deleted_at as deleted_at'
                )
                ->where('provinces.status','Active')
                ->orderBy('provinces.order_by', 'ASC')
                ->get();
        }


        $data[]=array('id' => ' ', 'text' => 'Select Province', 'country_id' => null, 'order_by' => null, 'status' => null, 'created_by_comp_id' => null, 'created_by_user_id' => null, 'updated_by_user_id' => null, 'deleted_by_user_id' => null, 'created_at' => null, 'updated_at' => null, 'deleted_at' => null, 'reference'=>null);
        foreach ($queryData as $value=> $Temp){
            $data[$value+1]=array('id' => $Temp->id, 'text' => $Temp->title.', '.$Temp->country_title, 'order_by' => $Temp->order_by,  'status' => $Temp->status, 'created_by_comp_id' => $Temp->created_by_comp_id, 'created_by_user_id' => $Temp->created_by_user_id, 'updated_by_user_id' => $Temp->updated_by_user_id, 'deleted_by_user_id' => $Temp->deleted_by_user_id, 'created_at' => $Temp->created_at, 'updated_at' => $Temp->updated_at, 'deleted_at' => $Temp->deleted_at, 'reference'=>'countries');
        }

        return $data;

    }

    public function GetCities($request, $id, $country, $province, $title, $slug, $status, $order_by, $created_by_comp, $created_by_user, $created_at, $page_no, $no_of_records, $record_type){

        if($id!=null){
            $queryData = DB::table('cities')
                ->join('provinces', 'cities.province_id', '=', 'provinces.id')
                ->select(
                    'cities.id as id',
                    'cities.province_id as province_id',
                    'provinces.title as province_title',
                    'cities.name as name',
                    'cities.order_by as order_by',
                    'cities.status as status',
                    'cities.created_by_comp_id as created_by_comp_id',
                    'cities.created_by_user_id as created_by_user_id',
                    'cities.updated_by_user_id as updated_by_user_id',
                    'cities.deleted_by_user_id as deleted_by_user_id',
                    'cities.created_at as created_at',
                    'cities.updated_at as updated_at',
                    'cities.deleted_at as deleted_at'
                )
                ->where('cities.status','Active')
                ->where('cities.province_id',$id)
                ->orderBy('cities.order_by', 'ASC')
                ->get();
        }else{
            $queryData = DB::table('cities')
                ->join('provinces', 'cities.province_id', '=', 'provinces.id')
                ->select(
                    'cities.id as id',
                    'cities.province_id as province_id',
                    'provinces.title as province_title',
                    'cities.name as name',
                    'cities.order_by as order_by',
                    'cities.status as status',
                    'cities.created_by_comp_id as created_by_comp_id',
                    'cities.created_by_user_id as created_by_user_id',
                    'cities.updated_by_user_id as updated_by_user_id',
                    'cities.deleted_by_user_id as deleted_by_user_id',
                    'cities.created_at as created_at',
                    'cities.updated_at as updated_at',
                    'cities.deleted_at as deleted_at'
                )
                ->where('cities.status','Active')
                ->orderBy('cities.order_by', 'ASC')
                ->get();
        }

        $data[]=array('id' => ' ', 'text' => 'Select City', 'province_id' => null, 'order_by' => null, 'status' => null, 'created_by_comp_id' => null, 'created_by_user_id' => null, 'updated_by_user_id' => null, 'deleted_by_user_id' => null, 'created_at' => null, 'updated_at' => null, 'deleted_at' => null, 'reference'=>null);
        foreach ($queryData as $value=> $Temp){
            $data[$value+1]=array('id' => $Temp->id, 'text' => $Temp->name.', '.$Temp->province_title, 'province_id' => null, 'order_by' => $Temp->order_by,  'status' => $Temp->status, 'created_by_comp_id' => $Temp->created_by_comp_id, 'created_by_user_id' => $Temp->created_by_user_id, 'updated_by_user_id' => $Temp->updated_by_user_id, 'deleted_by_user_id' => $Temp->deleted_by_user_id, 'created_at' => $Temp->created_at, 'updated_at' => $Temp->updated_at, 'deleted_at' => $Temp->deleted_at, 'reference'=>'countries');
        }

        return $data;

    }

    public function GetAreas($request, $id, $country, $province, $city, $title, $slug, $status, $order_by, $created_by_comp, $created_by_user, $created_at, $page_no, $no_of_records, $record_type){


        if($id!=null){
            $queryData = DB::table('areas')
                ->join('cities', 'areas.city_id', '=', 'cities.id')
                ->select(
                    'areas.id as id',
                    'areas.city_id as city_id',
                    'cities.name as city_title',
                    'areas.name as name',
                    'areas.latitude as latitude',
                    'areas.longitude as longitude',
                    'areas.order_by as order_by',
                    'areas.status as status',
                    'areas.created_by_comp_id as created_by_comp_id',
                    'areas.created_by_user_id as created_by_user_id',
                    'areas.updated_by_user_id as updated_by_user_id',
                    'areas.deleted_by_user_id as deleted_by_user_id',
                    'areas.created_at as created_at',
                    'areas.updated_at as updated_at',
                    'areas.deleted_at as deleted_at'
                )
                ->where('areas.status','Active')
                ->where('areas.city_id',$id)
                ->orderBy('areas.order_by', 'ASC')
                ->get();
        }else{
            $queryData = DB::table('areas')
                ->join('cities', 'areas.city_id', '=', 'cities.id')
                ->select(
                    'areas.id as id',
                    'areas.city_id as city_id',
                    'cities.name as city_title',
                    'areas.name as name',
                    'areas.latitude as latitude',
                    'areas.longitude as longitude',
                    'areas.order_by as order_by',
                    'areas.status as status',
                    'areas.created_by_comp_id as created_by_comp_id',
                    'areas.created_by_user_id as created_by_user_id',
                    'areas.updated_by_user_id as updated_by_user_id',
                    'areas.deleted_by_user_id as deleted_by_user_id',
                    'areas.created_at as created_at',
                    'areas.updated_at as updated_at',
                    'areas.deleted_at as deleted_at'
                )
                ->where('areas.status','Active')
                ->orderBy('areas.order_by', 'ASC')
                ->get();
        }



        $data=[];
        foreach ($queryData as $value=> $Temp){
            $data[$value]=array('id' => $Temp->id, 'text' => $Temp->name.', '.$Temp->city_title, 'city_id' => null, 'latitude' => $Temp->latitude, 'longitude' => $Temp->longitude, 'order_by' => $Temp->order_by,  'status' => $Temp->status, 'created_by_comp_id' => $Temp->created_by_comp_id, 'created_by_user_id' => $Temp->created_by_user_id, 'updated_by_user_id' => $Temp->updated_by_user_id, 'deleted_by_user_id' => $Temp->deleted_by_user_id, 'created_at' => $Temp->created_at, 'updated_at' => $Temp->updated_at, 'deleted_at' => $Temp->deleted_at, 'reference'=>'countries');
        }

        return $data;

    }

    public function GetLocations($request, $id, $country, $province, $city, $area, $title, $slug, $status, $order_by, $created_by_comp, $created_by_user, $created_at, $page_no, $no_of_records, $record_type){

        if($id!=null){
            $queryData = DB::table('locations')
                ->join('areas', 'locations.area_id', '=', 'areas.id')
                ->select(
                    'locations.id as id',
                    'locations.area_id as area_id',
                    'locations.name as name',
                    'areas.name as area_title',
                    'locations.latitude as latitude',
                    'locations.longitude as longitude',
                    'locations.order_by as order_by',
                    'locations.status as status',
                    'locations.created_by_comp_id as created_by_comp_id',
                    'locations.created_by_user_id as created_by_user_id',
                    'locations.updated_by_user_id as updated_by_user_id',
                    'locations.deleted_by_user_id as deleted_by_user_id',
                    'locations.created_at as created_at',
                    'locations.updated_at as updated_at',
                    'locations.deleted_at as deleted_at'
                )
                ->where('locations.status','Active')
                ->where('locations.area_id',$id)
                ->get();


        }else{
            $queryData = DB::table('locations')
                ->join('areas', 'locations.area_id', '=', 'areas.id')
                ->select(
                    'locations.id as id',
                    'locations.area_id as area_id',
                    'locations.name as name',
                    'areas.name as area_title',
                    'locations.latitude as latitude',
                    'locations.longitude as longitude',
                    'locations.order_by as order_by',
                    'locations.status as status',
                    'locations.created_by_comp_id as created_by_comp_id',
                    'locations.created_by_user_id as created_by_user_id',
                    'locations.updated_by_user_id as updated_by_user_id',
                    'locations.deleted_by_user_id as deleted_by_user_id',
                    'locations.created_at as created_at',
                    'locations.updated_at as updated_at',
                    'locations.deleted_at as deleted_at'
                )
                ->where('locations.status','Active')
                ->get();
        }



        $data=[];
        foreach ($queryData as $value=> $Temp){
            $data[$value]=array('id' => $Temp->id, 'text' => $Temp->name.', '.$Temp->area_title, 'area_id' => null, 'latitude' => $Temp->latitude, 'longitude' => $Temp->longitude, 'order_by' => $Temp->order_by,  'status' => $Temp->status, 'created_by_comp_id' => $Temp->created_by_comp_id, 'created_by_user_id' => $Temp->created_by_user_id, 'updated_by_user_id' => $Temp->updated_by_user_id, 'deleted_by_user_id' => $Temp->deleted_by_user_id, 'created_at' => $Temp->created_at, 'updated_at' => $Temp->updated_at, 'deleted_at' => $Temp->deleted_at, 'reference'=>'countries');
        }

        return $data;

    }



    public function GetPropertyChildCategories($id){

        if($id!=null){

            $sqldata = DB::table('property_child_categories')
                ->select(
                    'property_child_categories.id',
                    'property_child_categories.title',
                    'property_child_categories.status',
                    'property_child_categories.order_by',
                    'property_child_categories.created_by_comp_id',
                    'property_child_categories.created_by_user_id',
                    'property_child_categories.updated_by_user_id',
                    'property_child_categories.deleted_by_user_id',
                    'property_child_categories.created_at',
                    'property_child_categories.updated_at',
                    'property_child_categories.deleted_at'
                )
                ->where('property_child_categories.property_parent_category_id',$id)
                ->where('property_child_categories.status','Active')
                ->orderBy('property_child_categories.order_by', 'ASC')
                ->get();

        }else{
            $sqldata = DB::table('property_child_categories')
                ->select(
                    'property_child_categories.id',
                    'property_child_categories.title',
                    'property_child_categories.status',
                    'property_child_categories.order_by',
                    'property_child_categories.created_by_comp_id',
                    'property_child_categories.created_by_user_id',
                    'property_child_categories.updated_by_user_id',
                    'property_child_categories.deleted_by_user_id',
                    'property_child_categories.created_at',
                    'property_child_categories.updated_at',
                    'property_child_categories.deleted_at'
                )
                ->where('property_child_categories.status','Active')
                ->orderBy('property_child_categories.order_by', 'ASC')
                ->get();
        }

        $data=[];
        //$data[]=array('id' => ' ', 'text' => 'Select Option', 'order_by' => '', 'status' => '', 'created_by_comp_id' => '', 'created_by_user_id' => '', 'updated_by_user_id' => '', 'deleted_by_user_id' => '', 'created_at' => '', 'updated_at' => '', 'deleted_at' => '', 'reference'=>'');
        foreach ($sqldata as $value=> $Temp){
            $data[$value]=array('id' => $Temp->id, 'text' => $Temp->title, 'order_by' => $Temp->order_by, 'status' => $Temp->status, 'created_by_comp_id' => $Temp->created_by_comp_id, 'created_by_user_id' => $Temp->created_by_user_id, 'updated_by_user_id' => $Temp->updated_by_user_id, 'deleted_by_user_id' => $Temp->deleted_by_user_id, 'created_at' => $Temp->created_at, 'updated_at' => $Temp->updated_at, 'deleted_at' => $Temp->deleted_at, 'reference'=>'property_child_categories');
        }

        return $data;


    }

    //----------------------For Select Box------------------------



    public function GetCountryCodesSqlData($request, $id, $country_id, $code, $slug, $status, $order_by, $created_by_comp, $created_by_user, $created_at, $page_no, $no_of_records, $record_type){

        if($id!=null && $country_id==null){

            $sqlData = DB::table('country_codes')
                ->leftJoin('countries', 'country_codes.country_id', '=', 'countries.id')
                ->select(
                    'country_codes.id as id',

                    'country_codes.country_id as country_id',
                    'countries.name as country_title',
                    'countries.slug as country_slug',
                    'countries.two_letter_code as country_two_letter_code',
                    'countries.three_letter_code as country_three_letter_code',
                    'countries.flag as country_flag',
                    'countries.latitude as country_latitude',
                    'countries.longitude as country_longitude',

                    'country_codes.code as code',
                    'country_codes.status as status',
                    'country_codes.order_by as order_by',
                    'country_codes.created_by_comp_id as created_by_comp_id',
                    'country_codes.created_by_user_id as created_by_user_id',
                    'country_codes.updated_by_user_id as updated_by_user_id',
                    'country_codes.deleted_by_user_id as deleted_by_user_id',
                    'country_codes.created_at as created_at',
                    'country_codes.updated_at as updated_at',
                    'country_codes.deleted_at as deleted_at'
                )
                ->where('country_codes.id',$id)
                ->orderBy('country_codes.order_by', 'ASC')
                ->where('country_codes.status','Active')
                ->get();

        }elseif($id==null && $country_id!=null){

            $sqlData = DB::table('country_codes')
                ->leftJoin('countries', 'country_codes.country_id', '=', 'countries.id')
                ->select(
                    'country_codes.id as id',

                    'country_codes.country_id as country_id',
                    'countries.name as country_title',
                    'countries.slug as country_slug',
                    'countries.two_letter_code as country_two_letter_code',
                    'countries.three_letter_code as country_three_letter_code',
                    'countries.flag as country_flag',
                    'countries.latitude as country_latitude',
                    'countries.longitude as country_longitude',

                    'country_codes.code as code',
                    'country_codes.status as status',
                    'country_codes.order_by as order_by',
                    'country_codes.created_by_comp_id as created_by_comp_id',
                    'country_codes.created_by_user_id as created_by_user_id',
                    'country_codes.updated_by_user_id as updated_by_user_id',
                    'country_codes.deleted_by_user_id as deleted_by_user_id',
                    'country_codes.created_at as created_at',
                    'country_codes.updated_at as updated_at',
                    'country_codes.deleted_at as deleted_at'
                )
                ->where('country_codes.country_id',$country_id)
                ->orderBy('country_codes.order_by', 'ASC')
                ->where('country_codes.status','Active')
                ->get();

        }elseif($id==null && $country_id==null){

            $sqlData = DB::table('country_codes')
                ->leftJoin('countries', 'country_codes.country_id', '=', 'countries.id')
                ->select(
                    'country_codes.id as id',

                    'country_codes.country_id as country_id',
                    'countries.name as country_title',
                    'countries.slug as country_slug',
                    'countries.two_letter_code as country_two_letter_code',
                    'countries.three_letter_code as country_three_letter_code',
                    'countries.flag as country_flag',
                    'countries.latitude as country_latitude',
                    'countries.longitude as country_longitude',

                    'country_codes.code as code',
                    'country_codes.status as status',
                    'country_codes.order_by as order_by',
                    'country_codes.created_by_comp_id as created_by_comp_id',
                    'country_codes.created_by_user_id as created_by_user_id',
                    'country_codes.updated_by_user_id as updated_by_user_id',
                    'country_codes.deleted_by_user_id as deleted_by_user_id',
                    'country_codes.created_at as created_at',
                    'country_codes.updated_at as updated_at',
                    'country_codes.deleted_at as deleted_at'
                )
                ->orderBy('country_codes.order_by', 'ASC')
                ->where('country_codes.status','Active')
                ->get();

        }else{

            $sqlData = null;
        }

        return $sqlData;

    }

    public function GetExperiencesSqlData($request, $id, $title, $slug, $status, $order_by, $created_by_comp, $created_by_user, $created_at, $page_no, $no_of_records, $record_type){

        if($id!=null){

            $sqlData = DB::table('experiences')
                ->select(
                    'experiences.id as id',
                    'experiences.title as title',
                    'experiences.slug as slug',
                    'experiences.image as image',
                    'experiences.status as status',
                    'experiences.order_by as order_by',
                    'experiences.created_by_comp_id as created_by_comp_id',
                    'experiences.created_by_user_id as created_by_user_id',
                    'experiences.updated_by_user_id as updated_by_user_id',
                    'experiences.deleted_by_user_id as deleted_by_user_id',
                    'experiences.created_at as created_at',
                    'experiences.updated_at as updated_at',
                    'experiences.deleted_at as deleted_at'
                )
                ->where('experiences.id',$id)
                ->orderBy('experiences.order_by', 'ASC')
                ->where('experiences.status','Active')
                ->first();

        }else{

            $sqlData = DB::table('experiences')
                ->select(
                    'experiences.id as id',
                    'experiences.title as title',
                    'experiences.slug as slug',
                    'experiences.image as image',
                    'experiences.status as status',
                    'experiences.order_by as order_by',
                    'experiences.created_by_comp_id as created_by_comp_id',
                    'experiences.created_by_user_id as created_by_user_id',
                    'experiences.updated_by_user_id as updated_by_user_id',
                    'experiences.deleted_by_user_id as deleted_by_user_id',
                    'experiences.created_at as created_at',
                    'experiences.updated_at as updated_at',
                    'experiences.deleted_at as deleted_at'
                )
                ->orderBy('experiences.order_by', 'ASC')
                ->where('experiences.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetCompanyTypesSqlData($request, $id, $title, $slug, $status, $order_by, $created_by_comp, $created_by_user, $created_at, $page_no, $no_of_records, $record_type){

        if($id!=null){

            $sqlData = DB::table('company_types')
                ->select(
                    'company_types.id as id',
                    'company_types.title as title',
                    'company_types.icon as icon',
                    'company_types.description as description',

                    'company_types.status as status',
                    'company_types.order_by as order_by',
                    'company_types.created_by_comp_id as created_by_comp_id',
                    'company_types.created_by_user_id as created_by_user_id',
                    'company_types.updated_by_user_id as updated_by_user_id',
                    'company_types.deleted_by_user_id as deleted_by_user_id',
                    'company_types.created_at as created_at',
                    'company_types.updated_at as updated_at',
                    'company_types.deleted_at as deleted_at'
                )
                ->where('company_types.id',$id)
                ->orderBy('company_types.order_by', 'ASC')
                ->where('company_types.status','Active')
                ->first();

        }else{

            $sqlData = DB::table('company_types')
                ->select(
                    'company_types.id as id',
                    'company_types.title as title',
                    'company_types.icon as icon',
                    'company_types.description as description',

                    'company_types.status as status',
                    'company_types.order_by as order_by',
                    'company_types.created_by_comp_id as created_by_comp_id',
                    'company_types.created_by_user_id as created_by_user_id',
                    'company_types.updated_by_user_id as updated_by_user_id',
                    'company_types.deleted_by_user_id as deleted_by_user_id',
                    'company_types.created_at as created_at',
                    'company_types.updated_at as updated_at',
                    'company_types.deleted_at as deleted_at'
                )
                ->orderBy('company_types.order_by', 'ASC')
                ->where('company_types.status','Active')
                ->get();
        }

        return $sqlData;

    }




    public function GetCompaniesSqlData($request, $id, $title, $slug, $status, $order_by, $created_by_comp, $created_by_user, $created_at, $page_no, $no_of_records, $record_type){

        if($id!=null){

            $sqlData = DB::table('companies')
                ->select(
                    'companies.id as id',
                    'companies.company_type_id as company_type_id',
                    'companies.title as title',
                    'companies.slug as slug',
                    'companies.about as about',
                    'companies.logo as logo',
                    'companies.banner as banner',

                    'companies.status as status',
                    'companies.order_by as order_by',
                    'companies.created_by_comp_id as created_by_comp_id',
                    'companies.created_by_user_id as created_by_user_id',
                    'companies.updated_by_user_id as updated_by_user_id',
                    'companies.deleted_by_user_id as deleted_by_user_id',
                    'companies.created_at as created_at',
                    'companies.updated_at as updated_at',
                    'companies.deleted_at as deleted_at'
                )
                ->where('companies.id',$id)
                ->first();

        }else{

            $sqlData = DB::table('companies')
                ->select(
                    'companies.id as id',
                    'companies.company_type_id as company_type_id',
                    'companies.title as title',
                    'companies.slug as slug',
                    'companies.about as about',
                    'companies.logo as logo',
                    'companies.banner as banner',

                    'companies.status as status',
                    'companies.order_by as order_by',
                    'companies.created_by_comp_id as created_by_comp_id',
                    'companies.created_by_user_id as created_by_user_id',
                    'companies.updated_by_user_id as updated_by_user_id',
                    'companies.deleted_by_user_id as deleted_by_user_id',
                    'companies.created_at as created_at',
                    'companies.updated_at as updated_at',
                    'companies.deleted_at as deleted_at'
                )
                ->orderBy('companies.order_by', 'ASC')
                ->paginate(20);
        }

        return $sqlData;

    }






















    public function GetPropertiesSqlData($request, $id, $privacy, $listing_type, $purpose, $parent_category, $child_category, $sub_child_category, $unit, $currency, $type, $approach, $asset_type, $title, $slug, $description, $year, $baths_full, $baths_half, $no_of_garage, $no_of_rooms, $no_of_storeys, $community, $annual_taxes, $hoa_dues, $basement_area, $garage_area, $remodel_year, $furnished_status, $total_rooms, $floor_no, $no_of_units, $no_of_stories, $open_status, $tags, $keywords, $audio_recording, $audio_description, $published_date, $expired_date, $last_refreshed_date, $last_listing_type_change_date, $refresh_count, $save_count, $image_count, $video_count, $file_count, $visitor, $no_of_likes, $no_of_comments, $no_of_share, $no_of_view_email, $no_of_view_number, $no_of_send_email, $action_status, $est_resale_value, $est_rental_value, $file_number, $payment_criteria, $start_date, $end_date, $opening_bid, $bid_increment_value, $last_bid, $no_of_bid, $no_of_interested, $is_lock, $status, $order_by, $created_by_comp, $created_by_user, $updated_by_user, $deleted_by_user, $created_at, $updated_at, $deleted_at, $countries, $provincies, $cities, $areas, $locations, $sort_by, $search_by, $miles_from, $zip_code, $latitude, $longitude, $min_search_area, $max_search_area, $purposes, $parent_categories, $child_categories, $sub_child_categories, $bedrooms, $bathrooms, $features, $nearby, $developers, $advertisement_type, $followed_type, $session_user_id, $session_comp_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $privacy==null && $listing_type==null && $purpose==null && $parent_category==null && $child_category==null && $sub_child_category==null && $unit==null && $currency==null && $title==null && $slug==null && $tags==null && $keywords==null && $published_date==null && $expired_date==null && $last_refreshed_date==null && $last_listing_type_change_date==null && $visitor==null && $action_status==null && $created_by_comp==null && $created_by_user==null){

            //$id!=null

            $sqlData = DB::table('properties')
                ->leftJoin('privacies', 'properties.privacy_id', '=', 'privacies.id')
                ->leftJoin('property_listing_types', 'properties.property_listing_type_id', '=', 'property_listing_types.id')
                ->leftJoin('property_purposes', 'properties.property_purpose_id', '=', 'property_purposes.id')
                ->leftJoin('property_parent_categories', 'properties.property_parent_category_id', '=', 'property_parent_categories.id')
                ->leftJoin('property_child_categories', 'properties.property_child_category_id', '=', 'property_child_categories.id')
                ->leftJoin('property_sub_child_categories', 'properties.property_sub_child_category_id', '=', 'property_sub_child_categories.id')
                ->leftJoin('units', 'properties.unit_id', '=', 'units.id')
                ->leftJoin('currencies', 'properties.currency_id', '=', 'currencies.id')

                ->leftJoin('property_types', 'properties.property_type_id', '=', 'property_types.id')
                ->leftJoin('property_approaches', 'properties.property_approach_id', '=', 'property_approaches.id')
                ->leftJoin('property_asset_types', 'properties.property_asset_type_id', '=', 'property_asset_types.id')

                ->leftJoin('users', 'properties.created_by_user_id', '=', 'users.id')
                ->leftJoin('companies', 'properties.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'properties.id as id',

                    'properties.privacy_id as privacy_id',
                    'privacies.title as privacy_title',
                    'privacies.slug as privacy_slug',

                    'properties.property_listing_type_id as property_listing_type_id',
                    'property_listing_types.title as property_listing_type_title',
                    'property_listing_types.slug as property_listing_type_slug',
                    'property_listing_types.image as property_listing_type_image',

                    'properties.property_purpose_id as property_purpose_id',
                    'property_purposes.title as property_purpose_title',
                    'property_purposes.slug as property_purpose_slug',
                    'property_purposes.image as property_purpose_image',

                    'properties.property_parent_category_id as property_parent_category_id',
                    'property_parent_categories.title as property_parent_category_title',
                    'property_parent_categories.slug as property_parent_category_slug',
                    'property_parent_categories.image as property_parent_category_image',

                    'properties.property_child_category_id as property_child_category_id',
                    'property_child_categories.title as property_child_category_title',
                    'property_child_categories.slug as property_child_category_slug',
                    'property_child_categories.image as property_child_category_image',

                    'properties.property_sub_child_category_id as property_sub_child_category_id',
                    'property_sub_child_categories.title as property_sub_child_category_title',
                    'property_sub_child_categories.slug as property_sub_child_category_slug',
                    'property_sub_child_categories.image as property_sub_child_category_image',

                    'properties.unit_id as unit_id',
                    'units.title as unit_title',
                    'units.slug as unit_slug',
                    'units.code as unit_code',

                    'properties.currency_id as currency_id',
                    'currencies.title as currency_title',
                    'currencies.symbol as currency_symbol',
                    'currencies.code as currency_code',


                    'properties.property_type_id as property_type_id',
                    'property_types.title as property_type_title',
                    'property_types.slug as property_type_slug',

                    'properties.property_asset_type_id as property_asset_type_id',
                    'property_asset_types.title as property_asset_type_title',
                    'property_asset_types.slug as property_asset_type_slug',


                    'properties.property_approach_id as property_approach_id',
                    'property_approaches.title as property_approach_title',
                    'property_approaches.slug as property_approach_slug',


                    'properties.title as title',
                    'properties.slug as slug',
                    'properties.description as description',

                    'properties.tags as tags',
                    'properties.keywords as keywords',

                    'properties.audio_recording as audio_recording',
                    'properties.audio_description as audio_description',

                    'properties.thumbnail as thumbnail',
                    'properties.published_date as published_date',
                    'properties.expired_date as expired_date',
                    'properties.last_refreshed_date as last_refreshed_date',
                    'properties.refresh_count as refresh_count',

                    'properties.save_count as save_count',
                    'properties.image_count as image_count',
                    'properties.video_count as video_count',
                    'properties.file_count as file_count',

                    'properties.visitor as visitor',

                    'properties.no_of_likes as no_of_likes',
                    'properties.no_of_comments as no_of_comments',
                    'properties.no_of_share as no_of_share',

                    'properties.no_of_view_email as no_of_view_email',
                    'properties.no_of_view_number as no_of_view_number',
                    'properties.no_of_send_email as no_of_send_email',
                    'properties.action_status as action_status',

                    'properties.est_resale_value as est_resale_value',
                    'properties.est_rental_value as est_rental_value',
                    'properties.file_number as file_number',
                    'properties.payment_criteria as payment_criteria',
                    'properties.start_date as start_date',
                    'properties.end_date as end_date',
                    'properties.opening_bid as opening_bid',
                    'properties.last_bid as last_bid',
                    'properties.no_of_bid as no_of_bid',


                    'properties.status as status',
                    'properties.order_by as order_by',

                    'properties.created_by_comp_id as created_by_comp_id',
//                    'companies.title as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'properties.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',
//                    'users.fcm_token as user_fcm_token',

                    'properties.updated_by_user_id as updated_by_user_id',
                    'properties.deleted_by_user_id as deleted_by_user_id',
                    'properties.created_at as created_at',
                    'properties.updated_at as updated_at',
                    'properties.deleted_at as deleted_at'
                )
                ->where('properties.id',$id)
                ->where('properties.status','Active')
                ->first();

        }elseif($id==null && $privacy==null && $listing_type==null && $purpose==null && $parent_category==null && $child_category==null && $sub_child_category==null && $unit==null && $currency==null && $title==null && $slug!=null && $tags==null && $keywords==null && $published_date==null && $expired_date==null && $last_refreshed_date==null && $last_listing_type_change_date==null && $visitor==null && $action_status==null && $created_by_comp==null && $created_by_user==null){

            //$slug!=null

            $sqlData = DB::table('properties')
                ->leftJoin('privacies', 'properties.privacy_id', '=', 'privacies.id')
                ->leftJoin('property_listing_types', 'properties.property_listing_type_id', '=', 'property_listing_types.id')
                ->leftJoin('property_purposes', 'properties.property_purpose_id', '=', 'property_purposes.id')
                ->leftJoin('property_parent_categories', 'properties.property_parent_category_id', '=', 'property_parent_categories.id')
                ->leftJoin('property_child_categories', 'properties.property_child_category_id', '=', 'property_child_categories.id')
                ->leftJoin('property_sub_child_categories', 'properties.property_sub_child_category_id', '=', 'property_sub_child_categories.id')
                ->leftJoin('units', 'properties.unit_id', '=', 'units.id')
                ->leftJoin('currencies', 'properties.currency_id', '=', 'currencies.id')

                ->leftJoin('property_types', 'properties.property_type_id', '=', 'property_types.id')
                ->leftJoin('property_approaches', 'properties.property_approach_id', '=', 'property_approaches.id')
                ->leftJoin('property_asset_types', 'properties.property_asset_type_id', '=', 'property_asset_types.id')

                ->leftJoin('users', 'properties.created_by_user_id', '=', 'users.id')
                ->leftJoin('companies', 'properties.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'properties.id as id',

                    'properties.privacy_id as privacy_id',
                    'privacies.title as privacy_title',
                    'privacies.slug as privacy_slug',

                    'properties.property_listing_type_id as property_listing_type_id',
                    'property_listing_types.title as property_listing_type_title',
                    'property_listing_types.slug as property_listing_type_slug',
                    'property_listing_types.image as property_listing_type_image',

                    'properties.property_purpose_id as property_purpose_id',
                    'property_purposes.title as property_purpose_title',
                    'property_purposes.slug as property_purpose_slug',
                    'property_purposes.image as property_purpose_image',

                    'properties.property_parent_category_id as property_parent_category_id',
                    'property_parent_categories.title as property_parent_category_title',
                    'property_parent_categories.slug as property_parent_category_slug',
                    'property_parent_categories.image as property_parent_category_image',

                    'properties.property_child_category_id as property_child_category_id',
                    'property_child_categories.title as property_child_category_title',
                    'property_child_categories.slug as property_child_category_slug',
                    'property_child_categories.image as property_child_category_image',

                    'properties.property_sub_child_category_id as property_sub_child_category_id',
                    'property_sub_child_categories.title as property_sub_child_category_title',
                    'property_sub_child_categories.slug as property_sub_child_category_slug',
                    'property_sub_child_categories.image as property_sub_child_category_image',

                    'properties.unit_id as unit_id',
                    'units.title as unit_title',
                    'units.slug as unit_slug',
                    'units.code as unit_code',

                    'properties.currency_id as currency_id',
                    'currencies.title as currency_title',
                    'currencies.symbol as currency_symbol',
                    'currencies.code as currency_code',


                    'properties.property_type_id as property_type_id',
                    'property_types.title as property_type_title',
                    'property_types.slug as property_type_slug',

                    'properties.property_asset_type_id as property_asset_type_id',
                    'property_asset_types.title as property_asset_type_title',
                    'property_asset_types.slug as property_asset_type_slug',


                    'properties.property_approach_id as property_approach_id',
                    'property_approaches.title as property_approach_title',
                    'property_approaches.slug as property_approach_slug',


                    'properties.title as title',
                    'properties.slug as slug',
                    'properties.description as description',

                    'properties.tags as tags',
                    'properties.keywords as keywords',

                    'properties.audio_recording as audio_recording',
                    'properties.audio_description as audio_description',

                    'properties.thumbnail as thumbnail',
                    'properties.published_date as published_date',
                    'properties.expired_date as expired_date',
                    'properties.last_refreshed_date as last_refreshed_date',
                    'properties.refresh_count as refresh_count',

                    'properties.save_count as save_count',
                    'properties.image_count as image_count',
                    'properties.video_count as video_count',
                    'properties.file_count as file_count',

                    'properties.visitor as visitor',

                    'properties.no_of_likes as no_of_likes',
                    'properties.no_of_comments as no_of_comments',
                    'properties.no_of_share as no_of_share',

                    'properties.no_of_view_email as no_of_view_email',
                    'properties.no_of_view_number as no_of_view_number',
                    'properties.no_of_send_email as no_of_send_email',
                    'properties.action_status as action_status',

                    'properties.est_resale_value as est_resale_value',
                    'properties.est_rental_value as est_rental_value',
                    'properties.file_number as file_number',
                    'properties.payment_criteria as payment_criteria',
                    'properties.start_date as start_date',
                    'properties.end_date as end_date',
                    'properties.opening_bid as opening_bid',
                    'properties.last_bid as last_bid',
                    'properties.no_of_bid as no_of_bid',


                    'properties.status as status',
                    'properties.order_by as order_by',

                    'properties.created_by_comp_id as created_by_comp_id',
//                    'companies.title as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'properties.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',
//                    'users.fcm_token as user_fcm_token',

                    'properties.updated_by_user_id as updated_by_user_id',
                    'properties.deleted_by_user_id as deleted_by_user_id',
                    'properties.created_at as created_at',
                    'properties.updated_at as updated_at',
                    'properties.deleted_at as deleted_at'
                )
                ->where('properties.slug',$slug)
                ->where('properties.status','Active')
                ->first();

        }elseif($id==null && $privacy==null && $listing_type==null && $purpose!=null && $parent_category==null && $child_category==null && $sub_child_category==null && $unit==null && $currency==null && $title==null && $slug==null && $tags==null && $keywords==null && $published_date==null && $expired_date==null && $last_refreshed_date==null && $last_listing_type_change_date==null && $visitor==null && $action_status==null && $created_by_comp==null && $created_by_user==null){


            //$purpose!=null

            $sqlData = DB::table('properties')
                ->leftJoin('privacies', 'properties.privacy_id', '=', 'privacies.id')
                ->leftJoin('property_listing_types', 'properties.property_listing_type_id', '=', 'property_listing_types.id')
                ->leftJoin('property_purposes', 'properties.property_purpose_id', '=', 'property_purposes.id')
                ->leftJoin('property_parent_categories', 'properties.property_parent_category_id', '=', 'property_parent_categories.id')
                ->leftJoin('property_child_categories', 'properties.property_child_category_id', '=', 'property_child_categories.id')
                ->leftJoin('property_sub_child_categories', 'properties.property_sub_child_category_id', '=', 'property_sub_child_categories.id')
                ->leftJoin('units', 'properties.unit_id', '=', 'units.id')
                ->leftJoin('currencies', 'properties.currency_id', '=', 'currencies.id')

                ->leftJoin('property_types', 'properties.property_type_id', '=', 'property_types.id')
                ->leftJoin('property_approaches', 'properties.property_approach_id', '=', 'property_approaches.id')
                ->leftJoin('property_asset_types', 'properties.property_asset_type_id', '=', 'property_asset_types.id')

                ->leftJoin('users', 'properties.created_by_user_id', '=', 'users.id')
                ->leftJoin('companies', 'properties.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'properties.id as id',

                    'properties.privacy_id as privacy_id',
                    'privacies.title as privacy_title',
                    'privacies.slug as privacy_slug',

                    'properties.property_listing_type_id as property_listing_type_id',
                    'property_listing_types.title as property_listing_type_title',
                    'property_listing_types.slug as property_listing_type_slug',
                    'property_listing_types.image as property_listing_type_image',

                    'properties.property_purpose_id as property_purpose_id',
                    'property_purposes.title as property_purpose_title',
                    'property_purposes.slug as property_purpose_slug',
                    'property_purposes.image as property_purpose_image',

                    'properties.property_parent_category_id as property_parent_category_id',
                    'property_parent_categories.title as property_parent_category_title',
                    'property_parent_categories.slug as property_parent_category_slug',
                    'property_parent_categories.image as property_parent_category_image',

                    'properties.property_child_category_id as property_child_category_id',
                    'property_child_categories.title as property_child_category_title',
                    'property_child_categories.slug as property_child_category_slug',
                    'property_child_categories.image as property_child_category_image',

                    'properties.property_sub_child_category_id as property_sub_child_category_id',
                    'property_sub_child_categories.title as property_sub_child_category_title',
                    'property_sub_child_categories.slug as property_sub_child_category_slug',
                    'property_sub_child_categories.image as property_sub_child_category_image',

                    'properties.unit_id as unit_id',
                    'units.title as unit_title',
                    'units.slug as unit_slug',
                    'units.code as unit_code',

                    'properties.currency_id as currency_id',
                    'currencies.title as currency_title',
                    'currencies.symbol as currency_symbol',
                    'currencies.code as currency_code',


                    'properties.property_type_id as property_type_id',
                    'property_types.title as property_type_title',
                    'property_types.slug as property_type_slug',

                    'properties.property_asset_type_id as property_asset_type_id',
                    'property_asset_types.title as property_asset_type_title',
                    'property_asset_types.slug as property_asset_type_slug',


                    'properties.property_approach_id as property_approach_id',
                    'property_approaches.title as property_approach_title',
                    'property_approaches.slug as property_approach_slug',


                    'properties.title as title',
                    'properties.slug as slug',
                    'properties.description as description',

                    'properties.tags as tags',
                    'properties.keywords as keywords',

                    'properties.audio_recording as audio_recording',
                    'properties.audio_description as audio_description',

                    'properties.thumbnail as thumbnail',
                    'properties.published_date as published_date',
                    'properties.expired_date as expired_date',
                    'properties.last_refreshed_date as last_refreshed_date',
                    'properties.refresh_count as refresh_count',

                    'properties.save_count as save_count',
                    'properties.image_count as image_count',
                    'properties.video_count as video_count',
                    'properties.file_count as file_count',

                    'properties.visitor as visitor',

                    'properties.no_of_likes as no_of_likes',
                    'properties.no_of_comments as no_of_comments',
                    'properties.no_of_share as no_of_share',

                    'properties.no_of_view_email as no_of_view_email',
                    'properties.no_of_view_number as no_of_view_number',
                    'properties.no_of_send_email as no_of_send_email',
                    'properties.action_status as action_status',

                    'properties.est_resale_value as est_resale_value',
                    'properties.est_rental_value as est_rental_value',
                    'properties.file_number as file_number',
                    'properties.payment_criteria as payment_criteria',
                    'properties.start_date as start_date',
                    'properties.end_date as end_date',
                    'properties.opening_bid as opening_bid',
                    'properties.last_bid as last_bid',
                    'properties.no_of_bid as no_of_bid',


                    'properties.status as status',
                    'properties.order_by as order_by',

                    'properties.created_by_comp_id as created_by_comp_id',
//                    'companies.title as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'properties.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',
//                    'users.fcm_token as user_fcm_token',

                    'properties.updated_by_user_id as updated_by_user_id',
                    'properties.deleted_by_user_id as deleted_by_user_id',
                    'properties.created_at as created_at',
                    'properties.updated_at as updated_at',
                    'properties.deleted_at as deleted_at'
                )
                ->where('property_purposes.slug',$purpose)
                ->orderBy('properties.created_at', 'DESC')
                ->where('properties.status','Active')
                ->paginate(20);

        }elseif($id==null && $privacy==null && $listing_type==null && $purpose==null && $parent_category==null && $child_category==null && $sub_child_category==null && $unit==null && $currency==null && $title!=null && $slug==null && $tags==null && $keywords==null && $published_date==null && $expired_date==null && $last_refreshed_date==null && $last_listing_type_change_date==null && $visitor==null && $action_status==null && $created_by_comp==null && $created_by_user==null && $average_rating==null && $state==null && $city==null && $location==null && $miles_from==null && $zip_code==null && $latitude==null && $longitude==null){

            //$title!=null

            $sqlData = DB::table('properties')
                ->leftJoin('privacies', 'properties.privacy_id', '=', 'privacies.id')
                ->leftJoin('property_listing_types', 'properties.property_listing_type_id', '=', 'property_listing_types.id')
                ->leftJoin('property_purposes', 'properties.property_purpose_id', '=', 'property_purposes.id')
                ->leftJoin('property_parent_categories', 'properties.property_parent_category_id', '=', 'property_parent_categories.id')
                ->leftJoin('property_child_categories', 'properties.property_child_category_id', '=', 'property_child_categories.id')
                ->leftJoin('property_sub_child_categories', 'properties.property_sub_child_category_id', '=', 'property_sub_child_categories.id')
                ->leftJoin('units', 'properties.unit_id', '=', 'units.id')
                ->leftJoin('currencies', 'properties.currency_id', '=', 'currencies.id')

                ->leftJoin('property_types', 'properties.property_type_id', '=', 'property_types.id')
                ->leftJoin('property_approaches', 'properties.property_approach_id', '=', 'property_approaches.id')
                ->leftJoin('property_asset_types', 'properties.property_asset_type_id', '=', 'property_asset_types.id')

                ->leftJoin('users', 'properties.created_by_user_id', '=', 'users.id')
                ->leftJoin('companies', 'properties.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'properties.id as id',

                    'properties.privacy_id as privacy_id',
                    'privacies.title as privacy_title',
                    'privacies.slug as privacy_slug',

                    'properties.property_listing_type_id as property_listing_type_id',
                    'property_listing_types.title as property_listing_type_title',
                    'property_listing_types.slug as property_listing_type_slug',
                    'property_listing_types.image as property_listing_type_image',

                    'properties.property_purpose_id as property_purpose_id',
                    'property_purposes.title as property_purpose_title',
                    'property_purposes.slug as property_purpose_slug',
                    'property_purposes.image as property_purpose_image',

                    'properties.property_parent_category_id as property_parent_category_id',
                    'property_parent_categories.title as property_parent_category_title',
                    'property_parent_categories.slug as property_parent_category_slug',
                    'property_parent_categories.image as property_parent_category_image',

                    'properties.property_child_category_id as property_child_category_id',
                    'property_child_categories.title as property_child_category_title',
                    'property_child_categories.slug as property_child_category_slug',
                    'property_child_categories.image as property_child_category_image',

                    'properties.property_sub_child_category_id as property_sub_child_category_id',
                    'property_sub_child_categories.title as property_sub_child_category_title',
                    'property_sub_child_categories.slug as property_sub_child_category_slug',
                    'property_sub_child_categories.image as property_sub_child_category_image',

                    'properties.unit_id as unit_id',
                    'units.title as unit_title',
                    'units.slug as unit_slug',
                    'units.code as unit_code',

                    'properties.currency_id as currency_id',
                    'currencies.title as currency_title',
                    'currencies.symbol as currency_symbol',
                    'currencies.code as currency_code',


                    'properties.property_type_id as property_type_id',
                    'property_types.title as property_type_title',
                    'property_types.slug as property_type_slug',

                    'properties.property_asset_type_id as property_asset_type_id',
                    'property_asset_types.title as property_asset_type_title',
                    'property_asset_types.slug as property_asset_type_slug',


                    'properties.property_approach_id as property_approach_id',
                    'property_approaches.title as property_approach_title',
                    'property_approaches.slug as property_approach_slug',


                    'properties.title as title',
                    'properties.slug as slug',
                    'properties.description as description',

                    'properties.tags as tags',
                    'properties.keywords as keywords',

                    'properties.audio_recording as audio_recording',
                    'properties.audio_description as audio_description',

                    'properties.thumbnail as thumbnail',
                    'properties.published_date as published_date',
                    'properties.expired_date as expired_date',
                    'properties.last_refreshed_date as last_refreshed_date',
                    'properties.refresh_count as refresh_count',

                    'properties.save_count as save_count',
                    'properties.image_count as image_count',
                    'properties.video_count as video_count',
                    'properties.file_count as file_count',

                    'properties.visitor as visitor',

                    'properties.no_of_likes as no_of_likes',
                    'properties.no_of_comments as no_of_comments',
                    'properties.no_of_share as no_of_share',

                    'properties.no_of_view_email as no_of_view_email',
                    'properties.no_of_view_number as no_of_view_number',
                    'properties.no_of_send_email as no_of_send_email',
                    'properties.action_status as action_status',

                    'properties.est_resale_value as est_resale_value',
                    'properties.est_rental_value as est_rental_value',
                    'properties.file_number as file_number',
                    'properties.payment_criteria as payment_criteria',
                    'properties.start_date as start_date',
                    'properties.end_date as end_date',
                    'properties.opening_bid as opening_bid',
                    'properties.last_bid as last_bid',
                    'properties.no_of_bid as no_of_bid',


                    'properties.status as status',
                    'properties.order_by as order_by',

                    'properties.created_by_comp_id as created_by_comp_id',
//                    'companies.title as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'properties.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',
//                    'users.fcm_token as user_fcm_token',

                    'properties.updated_by_user_id as updated_by_user_id',
                    'properties.deleted_by_user_id as deleted_by_user_id',
                    'properties.created_at as created_at',
                    'properties.updated_at as updated_at',
                    'properties.deleted_at as deleted_at'
                )
                ->where('properties.title', 'like', '%' . $title . '%')
                ->where('properties.status','Active')
                ->orderBy('properties.created_at', 'DESC')
                ->paginate(20);

        }elseif($id==null && $privacy==null && $listing_type==null && $purpose==null && $parent_category==null && $child_category==null && $sub_child_category==null && $unit==null && $currency==null && $title==null && $slug==null && $tags==null && $keywords==null && $published_date==null && $expired_date==null && $last_refreshed_date==null && $last_listing_type_change_date==null && $visitor==null && $action_status==null && $created_by_comp==null && $created_by_user!=null && $average_rating==null && $state==null && $city==null && $location==null && $miles_from==null && $zip_code==null && $latitude==null && $longitude==null){

            //$created_by_user!=null

            $sqlData = DB::table('properties')
                ->leftJoin('privacies', 'properties.privacy_id', '=', 'privacies.id')
                ->leftJoin('property_listing_types', 'properties.property_listing_type_id', '=', 'property_listing_types.id')
                ->leftJoin('property_purposes', 'properties.property_purpose_id', '=', 'property_purposes.id')
                ->leftJoin('property_parent_categories', 'properties.property_parent_category_id', '=', 'property_parent_categories.id')
                ->leftJoin('property_child_categories', 'properties.property_child_category_id', '=', 'property_child_categories.id')
                ->leftJoin('property_sub_child_categories', 'properties.property_sub_child_category_id', '=', 'property_sub_child_categories.id')
                ->leftJoin('units', 'properties.unit_id', '=', 'units.id')
                ->leftJoin('currencies', 'properties.currency_id', '=', 'currencies.id')

                ->leftJoin('property_types', 'properties.property_type_id', '=', 'property_types.id')
                ->leftJoin('property_approaches', 'properties.property_approach_id', '=', 'property_approaches.id')
                ->leftJoin('property_asset_types', 'properties.property_asset_type_id', '=', 'property_asset_types.id')

                ->leftJoin('users', 'properties.created_by_user_id', '=', 'users.id')
                ->leftJoin('companies', 'properties.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'properties.id as id',

                    'properties.privacy_id as privacy_id',
                    'privacies.title as privacy_title',
                    'privacies.slug as privacy_slug',

                    'properties.property_listing_type_id as property_listing_type_id',
                    'property_listing_types.title as property_listing_type_title',
                    'property_listing_types.slug as property_listing_type_slug',
                    'property_listing_types.image as property_listing_type_image',

                    'properties.property_purpose_id as property_purpose_id',
                    'property_purposes.title as property_purpose_title',
                    'property_purposes.slug as property_purpose_slug',
                    'property_purposes.image as property_purpose_image',

                    'properties.property_parent_category_id as property_parent_category_id',
                    'property_parent_categories.title as property_parent_category_title',
                    'property_parent_categories.slug as property_parent_category_slug',
                    'property_parent_categories.image as property_parent_category_image',

                    'properties.property_child_category_id as property_child_category_id',
                    'property_child_categories.title as property_child_category_title',
                    'property_child_categories.slug as property_child_category_slug',
                    'property_child_categories.image as property_child_category_image',

                    'properties.property_sub_child_category_id as property_sub_child_category_id',
                    'property_sub_child_categories.title as property_sub_child_category_title',
                    'property_sub_child_categories.slug as property_sub_child_category_slug',
                    'property_sub_child_categories.image as property_sub_child_category_image',

                    'properties.unit_id as unit_id',
                    'units.title as unit_title',
                    'units.slug as unit_slug',
                    'units.code as unit_code',

                    'properties.currency_id as currency_id',
                    'currencies.title as currency_title',
                    'currencies.symbol as currency_symbol',
                    'currencies.code as currency_code',


                    'properties.property_type_id as property_type_id',
                    'property_types.title as property_type_title',
                    'property_types.slug as property_type_slug',

                    'properties.property_asset_type_id as property_asset_type_id',
                    'property_asset_types.title as property_asset_type_title',
                    'property_asset_types.slug as property_asset_type_slug',


                    'properties.property_approach_id as property_approach_id',
                    'property_approaches.title as property_approach_title',
                    'property_approaches.slug as property_approach_slug',


                    'properties.title as title',
                    'properties.slug as slug',
                    'properties.description as description',

                    'properties.tags as tags',
                    'properties.keywords as keywords',

                    'properties.audio_recording as audio_recording',
                    'properties.audio_description as audio_description',

                    'properties.thumbnail as thumbnail',
                    'properties.published_date as published_date',
                    'properties.expired_date as expired_date',
                    'properties.last_refreshed_date as last_refreshed_date',
                    'properties.refresh_count as refresh_count',

                    'properties.save_count as save_count',
                    'properties.image_count as image_count',
                    'properties.video_count as video_count',
                    'properties.file_count as file_count',

                    'properties.visitor as visitor',

                    'properties.no_of_likes as no_of_likes',
                    'properties.no_of_comments as no_of_comments',
                    'properties.no_of_share as no_of_share',

                    'properties.no_of_view_email as no_of_view_email',
                    'properties.no_of_view_number as no_of_view_number',
                    'properties.no_of_send_email as no_of_send_email',
                    'properties.action_status as action_status',

                    'properties.est_resale_value as est_resale_value',
                    'properties.est_rental_value as est_rental_value',
                    'properties.file_number as file_number',
                    'properties.payment_criteria as payment_criteria',
                    'properties.start_date as start_date',
                    'properties.end_date as end_date',
                    'properties.opening_bid as opening_bid',
                    'properties.last_bid as last_bid',
                    'properties.no_of_bid as no_of_bid',


                    'properties.status as status',
                    'properties.order_by as order_by',

                    'properties.created_by_comp_id as created_by_comp_id',
//                    'companies.title as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'properties.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',
//                    'users.fcm_token as user_fcm_token',

                    'properties.updated_by_user_id as updated_by_user_id',
                    'properties.deleted_by_user_id as deleted_by_user_id',
                    'properties.created_at as created_at',
                    'properties.updated_at as updated_at',
                    'properties.deleted_at as deleted_at'
                )
                ->where('properties.created_by_user_id',$created_by_user)
                ->orderBy('properties.created_at', 'DESC')
                ->where('properties.status','Active')
                ->paginate(20);

        }else{

            $sqlData = DB::table('properties')
                ->leftJoin('privacies', 'properties.privacy_id', '=', 'privacies.id')
                ->leftJoin('property_listing_types', 'properties.property_listing_type_id', '=', 'property_listing_types.id')
                ->leftJoin('property_purposes', 'properties.property_purpose_id', '=', 'property_purposes.id')
                ->leftJoin('property_parent_categories', 'properties.property_parent_category_id', '=', 'property_parent_categories.id')
                ->leftJoin('property_child_categories', 'properties.property_child_category_id', '=', 'property_child_categories.id')
                ->leftJoin('property_sub_child_categories', 'properties.property_sub_child_category_id', '=', 'property_sub_child_categories.id')
                ->leftJoin('units', 'properties.unit_id', '=', 'units.id')
                ->leftJoin('currencies', 'properties.currency_id', '=', 'currencies.id')

                ->leftJoin('property_types', 'properties.property_type_id', '=', 'property_types.id')
                ->leftJoin('property_approaches', 'properties.property_approach_id', '=', 'property_approaches.id')
                ->leftJoin('property_asset_types', 'properties.property_asset_type_id', '=', 'property_asset_types.id')

                ->leftJoin('users', 'properties.created_by_user_id', '=', 'users.id')
                ->leftJoin('companies', 'properties.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'properties.id as id',

                    'properties.privacy_id as privacy_id',
                    'privacies.title as privacy_title',
                    'privacies.slug as privacy_slug',

                    'properties.property_listing_type_id as property_listing_type_id',
                    'property_listing_types.title as property_listing_type_title',
                    'property_listing_types.slug as property_listing_type_slug',
                    'property_listing_types.image as property_listing_type_image',

                    'properties.property_purpose_id as property_purpose_id',
                    'property_purposes.title as property_purpose_title',
                    'property_purposes.slug as property_purpose_slug',
                    'property_purposes.image as property_purpose_image',

                    'properties.property_parent_category_id as property_parent_category_id',
                    'property_parent_categories.title as property_parent_category_title',
                    'property_parent_categories.slug as property_parent_category_slug',
                    'property_parent_categories.image as property_parent_category_image',

                    'properties.property_child_category_id as property_child_category_id',
                    'property_child_categories.title as property_child_category_title',
                    'property_child_categories.slug as property_child_category_slug',
                    'property_child_categories.image as property_child_category_image',

                    'properties.property_sub_child_category_id as property_sub_child_category_id',
                    'property_sub_child_categories.title as property_sub_child_category_title',
                    'property_sub_child_categories.slug as property_sub_child_category_slug',
                    'property_sub_child_categories.image as property_sub_child_category_image',

                    'properties.unit_id as unit_id',
                    'units.title as unit_title',
                    'units.slug as unit_slug',
                    'units.code as unit_code',

                    'properties.currency_id as currency_id',
                    'currencies.title as currency_title',
                    'currencies.symbol as currency_symbol',
                    'currencies.code as currency_code',


                    'properties.property_type_id as property_type_id',
                    'property_types.title as property_type_title',
                    'property_types.slug as property_type_slug',

                    'properties.property_asset_type_id as property_asset_type_id',
                    'property_asset_types.title as property_asset_type_title',
                    'property_asset_types.slug as property_asset_type_slug',


                    'properties.property_approach_id as property_approach_id',
                    'property_approaches.title as property_approach_title',
                    'property_approaches.slug as property_approach_slug',


                    'properties.title as title',
                    'properties.slug as slug',
                    'properties.description as description',

                    'properties.tags as tags',
                    'properties.keywords as keywords',

                    'properties.audio_recording as audio_recording',
                    'properties.audio_description as audio_description',

                    'properties.thumbnail as thumbnail',
                    'properties.published_date as published_date',
                    'properties.expired_date as expired_date',
                    'properties.last_refreshed_date as last_refreshed_date',
                    'properties.refresh_count as refresh_count',

                    'properties.save_count as save_count',
                    'properties.image_count as image_count',
                    'properties.video_count as video_count',
                    'properties.file_count as file_count',

                    'properties.visitor as visitor',

                    'properties.no_of_likes as no_of_likes',
                    'properties.no_of_comments as no_of_comments',
                    'properties.no_of_share as no_of_share',

                    'properties.no_of_view_email as no_of_view_email',
                    'properties.no_of_view_number as no_of_view_number',
                    'properties.no_of_send_email as no_of_send_email',
                    'properties.action_status as action_status',

                    'properties.est_resale_value as est_resale_value',
                    'properties.est_rental_value as est_rental_value',
                    'properties.file_number as file_number',
                    'properties.payment_criteria as payment_criteria',
                    'properties.start_date as start_date',
                    'properties.end_date as end_date',
                    'properties.opening_bid as opening_bid',
                    'properties.last_bid as last_bid',
                    'properties.no_of_bid as no_of_bid',


                    'properties.status as status',
                    'properties.order_by as order_by',

                    'properties.created_by_comp_id as created_by_comp_id',
//                    'companies.title as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'properties.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',
//                    'users.fcm_token as user_fcm_token',

                    'properties.updated_by_user_id as updated_by_user_id',
                    'properties.deleted_by_user_id as deleted_by_user_id',
                    'properties.created_at as created_at',
                    'properties.updated_at as updated_at',
                    'properties.deleted_at as deleted_at'
                )
                ->orderBy('properties.created_at', 'DESC')
                ->where('properties.status','Active')
                ->paginate(9);
        }

        return $sqlData;

    }

    public function GetPropertyOptionsSqlData($request, $id, $property_id, $unit_id, $currency_id, $bed, $bath, $area, $amount, $currency, $unit, $created_by_comp, $created_by_user, $sort_by, $state, $session_user_id, $no_of_records, $page_no, $record_type){

        // $id!=null

        if($id!=null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            $sqlData = DB::table('property_options')
                ->leftJoin('properties', 'property_options.property_id', '=', 'properties.id')
                ->leftJoin('units', 'property_options.unit_id', '=', 'units.id')
                ->leftJoin('currencies', 'property_options.currency_id', '=', 'currencies.id')
//                ->leftJoin('users', 'property_options.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'property_options.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'property_options.id as id',
                    'property_options.property_id as property_id',

                    'property_options.unit_id as unit_id',
                    'units.title as unit_title',
                    'units.slug as unit_slug',
                    'units.code as unit_code',

                    'property_options.currency_id as currency_id',
                    'currencies.title as currency_title',
                    'currencies.symbol as currency_symbol',
                    'currencies.code as currency_code',

                    'property_options.title as title',
                    'property_options.slug as slug',
                    'property_options.bed as bed',
                    'property_options.bath as bath',
                    'property_options.area as area',
                    'property_options.amount as amount',


                    'property_options.status as status',
                    'property_options.order_by as order_by',

                    'property_options.created_by_comp_id as created_by_comp_id',
//                    'companies.title as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'property_options.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'property_options.updated_by_user_id as updated_by_user_id',
                    'property_options.deleted_by_user_id as deleted_by_user_id',
                    'property_options.created_at as created_at',
                    'property_options.updated_at as updated_at',
                    'property_options.deleted_at as deleted_at'
                )
                ->where('property_options.id',$id)
                ->where('property_options.status','Active')
                ->first();

        }elseif($id==null && $property_id!=null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            // $property_id!=null

            $sqlData = DB::table('property_options')
                ->leftJoin('properties', 'property_options.property_id', '=', 'properties.id')
                ->leftJoin('units', 'property_options.unit_id', '=', 'units.id')
                ->leftJoin('currencies', 'property_options.currency_id', '=', 'currencies.id')
//                ->leftJoin('users', 'property_options.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'property_options.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'property_options.id as id',
                    'property_options.property_id as property_id',

                    'property_options.unit_id as unit_id',
                    'units.title as unit_title',
                    'units.slug as unit_slug',
                    'units.code as unit_code',

                    'property_options.currency_id as currency_id',
                    'currencies.title as currency_title',
                    'currencies.symbol as currency_symbol',
                    'currencies.code as currency_code',

                    'property_options.title as title',
                    'property_options.slug as slug',
                    'property_options.bed as bed',
                    'property_options.bath as bath',
                    'property_options.area as area',
                    'property_options.amount as amount',


                    'property_options.status as status',
                    'property_options.order_by as order_by',

                    'property_options.created_by_comp_id as created_by_comp_id',
//                    'companies.title as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'property_options.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'property_options.updated_by_user_id as updated_by_user_id',
                    'property_options.deleted_by_user_id as deleted_by_user_id',
                    'property_options.created_at as created_at',
                    'property_options.updated_at as updated_at',
                    'property_options.deleted_at as deleted_at'
                )
                ->where('property_options.property_id',$property_id)
                ->where('property_options.status','Active')
                ->paginate();

        }elseif($id==null && $property_id!=null && $session_user_id==null && $no_of_records!=null && $page_no==null && $record_type==null){

            // $property_id!=null && $no_of_records!=null

            $sqlData = DB::table('property_options')
                ->leftJoin('properties', 'property_options.property_id', '=', 'properties.id')
                ->leftJoin('units', 'property_options.unit_id', '=', 'units.id')
                ->leftJoin('currencies', 'property_options.currency_id', '=', 'currencies.id')
//                ->leftJoin('users', 'property_options.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'property_options.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'property_options.id as id',
                    'property_options.property_id as property_id',

                    'property_options.unit_id as unit_id',
                    'units.title as unit_title',
                    'units.slug as unit_slug',
                    'units.code as unit_code',

                    'property_options.currency_id as currency_id',
                    'currencies.title as currency_title',
                    'currencies.symbol as currency_symbol',
                    'currencies.code as currency_code',

                    'property_options.title as title',
                    'property_options.slug as slug',
                    'property_options.bed as bed',
                    'property_options.bath as bath',
                    'property_options.area as area',
                    'property_options.amount as amount',


                    'property_options.status as status',
                    'property_options.order_by as order_by',

                    'property_options.created_by_comp_id as created_by_comp_id',
//                    'companies.title as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'property_options.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'property_options.updated_by_user_id as updated_by_user_id',
                    'property_options.deleted_by_user_id as deleted_by_user_id',
                    'property_options.created_at as created_at',
                    'property_options.updated_at as updated_at',
                    'property_options.deleted_at as deleted_at'
                )
                ->where('property_options.property_id',$property_id)
                ->where('property_options.status','Active')
                ->paginate($no_of_records);

        }elseif($id==null && $property_id!=null && $session_user_id==null && $no_of_records!=null && $page_no!=null && $record_type==null){

            // $property_id!=null && $no_of_records!=null && $page_no!=null

            $sqlData = DB::table('property_options')
                ->leftJoin('properties', 'property_options.property_id', '=', 'properties.id')
                ->leftJoin('units', 'property_options.unit_id', '=', 'units.id')
                ->leftJoin('currencies', 'property_options.currency_id', '=', 'currencies.id')
//                ->leftJoin('users', 'property_options.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'property_options.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'property_options.id as id',
                    'property_options.property_id as property_id',

                    'property_options.unit_id as unit_id',
                    'units.title as unit_title',
                    'units.slug as unit_slug',
                    'units.code as unit_code',

                    'property_options.currency_id as currency_id',
                    'currencies.title as currency_title',
                    'currencies.symbol as currency_symbol',
                    'currencies.code as currency_code',

                    'property_options.title as title',
                    'property_options.slug as slug',
                    'property_options.bed as bed',
                    'property_options.bath as bath',
                    'property_options.area as area',
                    'property_options.amount as amount',


                    'property_options.status as status',
                    'property_options.order_by as order_by',

                    'property_options.created_by_comp_id as created_by_comp_id',
//                    'companies.title as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'property_options.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'property_options.updated_by_user_id as updated_by_user_id',
                    'property_options.deleted_by_user_id as deleted_by_user_id',
                    'property_options.created_at as created_at',
                    'property_options.updated_at as updated_at',
                    'property_options.deleted_at as deleted_at'
                )
                ->where('property_options.property_id',$property_id)
                ->where('property_options.status','Active')
                ->paginate($no_of_records, ['*'], 'page', $page_no);

        }else{

            $sqlData = DB::table('property_options')
                ->leftJoin('properties', 'property_options.property_id', '=', 'properties.id')
                ->leftJoin('units', 'property_options.unit_id', '=', 'units.id')
                ->leftJoin('currencies', 'property_options.currency_id', '=', 'currencies.id')
//                ->leftJoin('users', 'property_options.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'property_options.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'property_options.id as id',
                    'property_options.property_id as property_id',

                    'property_options.unit_id as unit_id',
                    'units.title as unit_title',
                    'units.slug as unit_slug',
                    'units.code as unit_code',

                    'property_options.currency_id as currency_id',
                    'currencies.title as currency_title',
                    'currencies.symbol as currency_symbol',
                    'currencies.code as currency_code',

                    'property_options.title as title',
                    'property_options.slug as slug',
                    'property_options.bed as bed',
                    'property_options.bath as bath',
                    'property_options.area as area',
                    'property_options.amount as amount',


                    'property_options.status as status',
                    'property_options.order_by as order_by',

                    'property_options.created_by_comp_id as created_by_comp_id',
//                    'companies.title as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'property_options.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'property_options.updated_by_user_id as updated_by_user_id',
                    'property_options.deleted_by_user_id as deleted_by_user_id',
                    'property_options.created_at as created_at',
                    'property_options.updated_at as updated_at',
                    'property_options.deleted_at as deleted_at'
                )
                ->orderBy('property_options.order_by', 'ASC')
                ->where('property_options.status','Active')
                ->paginate();
        }

        return $sqlData;

    }


    public function GetPropertyListingTypesSqlData($request, $id){

        if($id!=null){

            $sqlData = DB::table('property_listing_types')
                ->select(
                    'property_listing_types.id as id',
                    'property_listing_types.title as title',
                    'property_listing_types.slug as slug',
                    'property_listing_types.icon as icon',
                    'property_listing_types.keyword as keyword',
                    'property_listing_types.image as image',
                    'property_listing_types.status as status',
                    'property_listing_types.order_by as order_by',
                    'property_listing_types.created_by_comp_id as created_by_comp_id',
                    'property_listing_types.created_by_user_id as created_by_user_id',
                    'property_listing_types.updated_by_user_id as updated_by_user_id',
                    'property_listing_types.deleted_by_user_id as deleted_by_user_id',
                    'property_listing_types.created_at as created_at',
                    'property_listing_types.updated_at as updated_at',
                    'property_listing_types.deleted_at as deleted_at'
                )
                ->where('property_listing_types.id',$id)
                ->orderBy('property_listing_types.order_by', 'ASC')
                ->where('property_listing_types.status','Active')
                ->get();

        }else{

            $sqlData = DB::table('property_listing_types')
                ->select(
                    'property_listing_types.id as id',
                    'property_listing_types.title as title',
                    'property_listing_types.slug as slug',
                    'property_listing_types.icon as icon',
                    'property_listing_types.keyword as keyword',
                    'property_listing_types.image as image',
                    'property_listing_types.status as status',
                    'property_listing_types.order_by as order_by',
                    'property_listing_types.created_by_comp_id as created_by_comp_id',
                    'property_listing_types.created_by_user_id as created_by_user_id',
                    'property_listing_types.updated_by_user_id as updated_by_user_id',
                    'property_listing_types.deleted_by_user_id as deleted_by_user_id',
                    'property_listing_types.created_at as created_at',
                    'property_listing_types.updated_at as updated_at',
                    'property_listing_types.deleted_at as deleted_at'
                )
                ->orderBy('property_listing_types.order_by', 'ASC')
                ->where('property_listing_types.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetPropertyPurposesSqlData($request, $id){

        if($id!=null){

            $sqlData = DB::table('property_purposes')
                ->select(
                    'property_purposes.id as id',
                    'property_purposes.title as title',
                    'property_purposes.slug as slug',
                    'property_purposes.slug as slug',
                    'property_purposes.image as image',
                    'property_purposes.status as status',
                    'property_purposes.order_by as order_by',
                    'property_purposes.created_by_comp_id as created_by_comp_id',
                    'property_purposes.created_by_user_id as created_by_user_id',
                    'property_purposes.updated_by_user_id as updated_by_user_id',
                    'property_purposes.deleted_by_user_id as deleted_by_user_id',
                    'property_purposes.created_at as created_at',
                    'property_purposes.updated_at as updated_at',
                    'property_purposes.deleted_at as deleted_at'
                )
                ->where('property_purposes.id',$id)
                ->orderBy('property_purposes.order_by', 'ASC')
                ->where('property_purposes.status','Active')
                ->get();

        }else{

            $sqlData = DB::table('property_purposes')
                ->select(
                    'property_purposes.id as id',
                    'property_purposes.title as title',
                    'property_purposes.slug as slug',
                    'property_purposes.slug as slug',
                    'property_purposes.image as image',
                    'property_purposes.status as status',
                    'property_purposes.order_by as order_by',
                    'property_purposes.created_by_comp_id as created_by_comp_id',
                    'property_purposes.created_by_user_id as created_by_user_id',
                    'property_purposes.updated_by_user_id as updated_by_user_id',
                    'property_purposes.deleted_by_user_id as deleted_by_user_id',
                    'property_purposes.created_at as created_at',
                    'property_purposes.updated_at as updated_at',
                    'property_purposes.deleted_at as deleted_at'
                )
                ->orderBy('property_purposes.order_by', 'ASC')
                ->where('property_purposes.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetPropertyPurposeTypesSqlData($request, $id, $property_purpose_id){

        if($id!=null && $property_purpose_id==null){

            $sqlData = DB::table('property_purpose_types')
                ->leftJoin('property_purposes', 'property_purpose_types.property_purpose_id', '=', 'property_purposes.id')
                ->select(
                    'property_purpose_types.id as id',
                    'property_purpose_types.property_purpose_id as property_purpose_id',
                    'property_purposes.title as property_purpose_title',

                    'property_purpose_types.title as title',
                    'property_purpose_types.slug as slug',
                    'property_purpose_types.status as status',
                    'property_purpose_types.order_by as order_by',
                    'property_purpose_types.created_by_comp_id as created_by_comp_id',
                    'property_purpose_types.created_by_user_id as created_by_user_id',
                    'property_purpose_types.updated_by_user_id as updated_by_user_id',
                    'property_purpose_types.deleted_by_user_id as deleted_by_user_id',
                    'property_purpose_types.created_at as created_at',
                    'property_purpose_types.updated_at as updated_at',
                    'property_purpose_types.deleted_at as deleted_at'
                )
                ->where('property_purpose_types.id',$id)
                ->orderBy('property_purpose_types.order_by', 'ASC')
                ->where('property_purpose_types.status','Active')
                ->first();

        }elseif($id==null && $property_purpose_id!=null){

            $sqlData = DB::table('property_purpose_types')
                ->leftJoin('property_purposes', 'property_purpose_types.property_purpose_id', '=', 'property_purposes.id')
                ->select(
                    'property_purpose_types.id as id',
                    'property_purpose_types.property_purpose_id as property_purpose_id',
                    'property_purposes.title as property_purpose_title',

                    'property_purpose_types.title as title',
                    'property_purpose_types.slug as slug',
                    'property_purpose_types.status as status',
                    'property_purpose_types.order_by as order_by',
                    'property_purpose_types.created_by_comp_id as created_by_comp_id',
                    'property_purpose_types.created_by_user_id as created_by_user_id',
                    'property_purpose_types.updated_by_user_id as updated_by_user_id',
                    'property_purpose_types.deleted_by_user_id as deleted_by_user_id',
                    'property_purpose_types.created_at as created_at',
                    'property_purpose_types.updated_at as updated_at',
                    'property_purpose_types.deleted_at as deleted_at'
                )
                ->where('property_purpose_types.property_purpose_id',$property_purpose_id)
                ->orderBy('property_purpose_types.order_by', 'ASC')
                ->where('property_purpose_types.status','Active')
                ->get();

        }else{

            $sqlData = DB::table('property_purpose_types')
                ->leftJoin('property_purposes', 'property_purpose_types.property_purpose_id', '=', 'property_purposes.id')
                ->select(
                    'property_purpose_types.id as id',
                    'property_purpose_types.property_purpose_id as property_purpose_id',
                    'property_purposes.title as property_purpose_title',

                    'property_purpose_types.title as title',
                    'property_purpose_types.slug as slug',
                    'property_purpose_types.status as status',
                    'property_purpose_types.order_by as order_by',
                    'property_purpose_types.created_by_comp_id as created_by_comp_id',
                    'property_purpose_types.created_by_user_id as created_by_user_id',
                    'property_purpose_types.updated_by_user_id as updated_by_user_id',
                    'property_purpose_types.deleted_by_user_id as deleted_by_user_id',
                    'property_purpose_types.created_at as created_at',
                    'property_purpose_types.updated_at as updated_at',
                    'property_purpose_types.deleted_at as deleted_at'
                )
                ->orderBy('property_purpose_types.order_by', 'ASC')
                ->where('property_purpose_types.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetPropertyParentCategoryBaseSqlData($request, $id){

        if($id!=null){

            $sqlData = DB::table('property_parent_categories')
                ->select(
                    'property_parent_categories.id as id',
                    'property_parent_categories.title as title',
                    'property_parent_categories.slug as slug',
                    'property_parent_categories.image as image',
                    'property_parent_categories.status as status',
                    'property_parent_categories.order_by as order_by',
                    'property_parent_categories.created_by_comp_id as created_by_comp_id',
                    'property_parent_categories.created_by_user_id as created_by_user_id',
                    'property_parent_categories.updated_by_user_id as updated_by_user_id',
                    'property_parent_categories.deleted_by_user_id as deleted_by_user_id',
                    'property_parent_categories.created_at as created_at',
                    'property_parent_categories.updated_at as updated_at',
                    'property_parent_categories.deleted_at as deleted_at'
                )
                ->where('property_parent_categories.id',$id)
                ->orderBy('property_parent_categories.order_by', 'ASC')
                ->where('property_parent_categories.status','Active')
                ->get();

        }else{

            $sqlData = DB::table('property_parent_categories')
                ->select(
                    'property_parent_categories.id as id',
                    'property_parent_categories.title as title',
                    'property_parent_categories.slug as slug',
                    'property_parent_categories.image as image',
                    'property_parent_categories.status as status',
                    'property_parent_categories.order_by as order_by',
                    'property_parent_categories.created_by_comp_id as created_by_comp_id',
                    'property_parent_categories.created_by_user_id as created_by_user_id',
                    'property_parent_categories.updated_by_user_id as updated_by_user_id',
                    'property_parent_categories.deleted_by_user_id as deleted_by_user_id',
                    'property_parent_categories.created_at as created_at',
                    'property_parent_categories.updated_at as updated_at',
                    'property_parent_categories.deleted_at as deleted_at'
                )
                ->orderBy('property_parent_categories.order_by', 'ASC')
                ->where('property_parent_categories.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetPropertyChildCategorySqlData($request, $id, $property_parent_category_id){

        if($id!=null && $property_parent_category_id==null){

            $sqlData = DB::table('property_child_categories')
                ->leftJoin('property_parent_categories', 'property_child_categories.property_parent_category_id', '=', 'property_parent_categories.id')
                ->select(
                    'property_child_categories.id as id',
                    'property_child_categories.property_parent_category_id as property_parent_category_id',
                    'property_parent_categories.title as property_parent_category_title',

                    'property_child_categories.title as title',
                    'property_child_categories.slug as slug',
                    'property_child_categories.image as image',
                    'property_child_categories.status as status',
                    'property_child_categories.order_by as order_by',
                    'property_child_categories.created_by_comp_id as created_by_comp_id',
                    'property_child_categories.created_by_user_id as created_by_user_id',
                    'property_child_categories.updated_by_user_id as updated_by_user_id',
                    'property_child_categories.deleted_by_user_id as deleted_by_user_id',
                    'property_child_categories.created_at as created_at',
                    'property_child_categories.updated_at as updated_at',
                    'property_child_categories.deleted_at as deleted_at'
                )
                ->where('property_child_categories.id',$id)
                ->orderBy('property_child_categories.order_by', 'ASC')
                ->where('property_child_categories.status','Active')
                ->get();

        }elseif($id==null && $property_parent_category_id!=null){

            $sqlData = DB::table('property_child_categories')
                ->leftJoin('property_parent_categories', 'property_child_categories.property_parent_category_id', '=', 'property_parent_categories.id')
                ->select(
                    'property_child_categories.id as id',
                    'property_child_categories.property_parent_category_id as property_parent_category_id',
                    'property_parent_categories.title as property_parent_category_title',

                    'property_child_categories.title as title',
                    'property_child_categories.slug as slug',
                    'property_child_categories.image as image',
                    'property_child_categories.status as status',
                    'property_child_categories.order_by as order_by',
                    'property_child_categories.created_by_comp_id as created_by_comp_id',
                    'property_child_categories.created_by_user_id as created_by_user_id',
                    'property_child_categories.updated_by_user_id as updated_by_user_id',
                    'property_child_categories.deleted_by_user_id as deleted_by_user_id',
                    'property_child_categories.created_at as created_at',
                    'property_child_categories.updated_at as updated_at',
                    'property_child_categories.deleted_at as deleted_at'
                )
                ->where('property_child_categories.property_parent_category_id',$property_parent_category_id)
                ->orderBy('property_child_categories.order_by', 'ASC')
                ->where('property_child_categories.status','Active')
                ->get();

        }else{

            $sqlData = DB::table('property_child_categories')
                ->leftJoin('property_parent_categories', 'property_child_categories.property_parent_category_id', '=', 'property_parent_categories.id')
                ->select(
                    'property_child_categories.id as id',
                    'property_child_categories.property_parent_category_id as property_parent_category_id',
                    'property_parent_categories.title as property_parent_category_title',

                    'property_child_categories.title as title',
                    'property_child_categories.slug as slug',
                    'property_child_categories.image as image',
                    'property_child_categories.status as status',
                    'property_child_categories.order_by as order_by',
                    'property_child_categories.created_by_comp_id as created_by_comp_id',
                    'property_child_categories.created_by_user_id as created_by_user_id',
                    'property_child_categories.updated_by_user_id as updated_by_user_id',
                    'property_child_categories.deleted_by_user_id as deleted_by_user_id',
                    'property_child_categories.created_at as created_at',
                    'property_child_categories.updated_at as updated_at',
                    'property_child_categories.deleted_at as deleted_at'
                )
                ->orderBy('property_child_categories.order_by', 'ASC')
                ->where('property_child_categories.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetPropertySubChildCategorySqlData($request, $id, $property_child_category_id){

        if($id!=null && $property_child_category_id==null){

            $sqlData = DB::table('property_sub_child_categories')
                ->leftJoin('property_child_categories', 'property_sub_child_categories.property_child_category_id', '=', 'property_child_categories.id')
                ->select(
                    'property_sub_child_categories.id as id',
                    'property_sub_child_categories.property_child_category_id as property_child_category_id',
                    'property_child_categories.title as property_child_category_title',

                    'property_sub_child_categories.title as title',
                    'property_sub_child_categories.slug as slug',
                    'property_sub_child_categories.status as status',
                    'property_sub_child_categories.order_by as order_by',
                    'property_sub_child_categories.created_by_comp_id as created_by_comp_id',
                    'property_sub_child_categories.created_by_user_id as created_by_user_id',
                    'property_sub_child_categories.updated_by_user_id as updated_by_user_id',
                    'property_sub_child_categories.deleted_by_user_id as deleted_by_user_id',
                    'property_sub_child_categories.created_at as created_at',
                    'property_sub_child_categories.updated_at as updated_at',
                    'property_sub_child_categories.deleted_at as deleted_at'
                )
                ->where('property_sub_child_categories.id',$id)
                ->orderBy('property_sub_child_categories.order_by', 'ASC')
                ->where('property_sub_child_categories.status','Active')
                ->get();

        }elseif($id==null && $property_child_category_id!=null){

            $sqlData = DB::table('property_sub_child_categories')
                ->leftJoin('property_child_categories', 'property_sub_child_categories.property_child_category_id', '=', 'property_child_categories.id')
                ->select(
                    'property_sub_child_categories.id as id',
                    'property_sub_child_categories.property_child_category_id as property_child_category_id',
                    'property_child_categories.title as property_child_category_title',

                    'property_sub_child_categories.title as title',
                    'property_sub_child_categories.slug as slug',
                    'property_sub_child_categories.status as status',
                    'property_sub_child_categories.order_by as order_by',
                    'property_sub_child_categories.created_by_comp_id as created_by_comp_id',
                    'property_sub_child_categories.created_by_user_id as created_by_user_id',
                    'property_sub_child_categories.updated_by_user_id as updated_by_user_id',
                    'property_sub_child_categories.deleted_by_user_id as deleted_by_user_id',
                    'property_sub_child_categories.created_at as created_at',
                    'property_sub_child_categories.updated_at as updated_at',
                    'property_sub_child_categories.deleted_at as deleted_at'
                )
                ->where('property_sub_child_categories.property_child_category_id',$property_child_category_id)
                ->orderBy('property_sub_child_categories.order_by', 'ASC')
                ->where('property_sub_child_categories.status','Active')
                ->get();

        }else{

            $sqlData = DB::table('property_sub_child_categories')
                ->leftJoin('property_child_categories', 'property_sub_child_categories.property_child_category_id', '=', 'property_child_categories.id')
                ->select(
                    'property_sub_child_categories.id as id',
                    'property_sub_child_categories.property_child_category_id as property_child_category_id',
                    'property_child_categories.title as property_child_category_title',

                    'property_sub_child_categories.title as title',
                    'property_sub_child_categories.slug as slug',
                    'property_sub_child_categories.status as status',
                    'property_sub_child_categories.order_by as order_by',
                    'property_sub_child_categories.created_by_comp_id as created_by_comp_id',
                    'property_sub_child_categories.created_by_user_id as created_by_user_id',
                    'property_sub_child_categories.updated_by_user_id as updated_by_user_id',
                    'property_sub_child_categories.deleted_by_user_id as deleted_by_user_id',
                    'property_sub_child_categories.created_at as created_at',
                    'property_sub_child_categories.updated_at as updated_at',
                    'property_sub_child_categories.deleted_at as deleted_at'
                )
                ->orderBy('property_sub_child_categories.order_by', 'ASC')
                ->where('property_sub_child_categories.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetUnitsSqlData($request, $id){

        if($id!=null){

            $sqlData = DB::table('units')
                ->select(
                    'units.id as id',
                    'units.title as title',
                    'units.slug as slug',
                    'units.code as code',
                    'units.status as status',
                    'units.order_by as order_by',
                    'units.created_by_comp_id as created_by_comp_id',
                    'units.created_by_user_id as created_by_user_id',
                    'units.updated_by_user_id as updated_by_user_id',
                    'units.deleted_by_user_id as deleted_by_user_id',
                    'units.created_at as created_at',
                    'units.updated_at as updated_at',
                    'units.deleted_at as deleted_at'
                )
                ->where('units.id',$id)
                ->orderBy('units.order_by', 'ASC')
                ->where('units.status','Active')
                ->get();

        }else{

            $sqlData = DB::table('units')
                ->select(
                    'units.id as id',
                    'units.title as title',
                    'units.slug as slug',
                    'units.code as code',
                    'units.status as status',
                    'units.order_by as order_by',
                    'units.created_by_comp_id as created_by_comp_id',
                    'units.created_by_user_id as created_by_user_id',
                    'units.updated_by_user_id as updated_by_user_id',
                    'units.deleted_by_user_id as deleted_by_user_id',
                    'units.created_at as created_at',
                    'units.updated_at as updated_at',
                    'units.deleted_at as deleted_at'
                )
                ->orderBy('units.order_by', 'ASC')
                ->where('units.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetCurrenciesSqlData($request, $id){

        if($id!=null){

            $sqlData = DB::table('currencies')
                ->select(
                    'currencies.id as id',
                    'currencies.title as title',
                    'currencies.symbol as symbol',
                    'currencies.code as code',
                    'currencies.exchange_type as exchange_type',
                    'currencies.exchange_rate as exchange_rate',
                    'currencies.status as status',
                    'currencies.order_by as order_by',
                    'currencies.created_by_comp_id as created_by_comp_id',
                    'currencies.created_by_user_id as created_by_user_id',
                    'currencies.updated_by_user_id as updated_by_user_id',
                    'currencies.deleted_by_user_id as deleted_by_user_id',
                    'currencies.created_at as created_at',
                    'currencies.updated_at as updated_at',
                    'currencies.deleted_at as deleted_at'
                )
                ->where('currencies.id',$id)
                ->orderBy('currencies.order_by', 'ASC')
                ->where('currencies.status','Active')
                ->get();

        }else{

            $sqlData = DB::table('currencies')
                ->select(
                    'currencies.id as id',
                    'currencies.title as title',
                    'currencies.symbol as symbol',
                    'currencies.code as code',
                    'currencies.exchange_type as exchange_type',
                    'currencies.exchange_rate as exchange_rate',
                    'currencies.status as status',
                    'currencies.order_by as order_by',
                    'currencies.created_by_comp_id as created_by_comp_id',
                    'currencies.created_by_user_id as created_by_user_id',
                    'currencies.updated_by_user_id as updated_by_user_id',
                    'currencies.deleted_by_user_id as deleted_by_user_id',
                    'currencies.created_at as created_at',
                    'currencies.updated_at as updated_at',
                    'currencies.deleted_at as deleted_at'
                )
                ->orderBy('currencies.order_by', 'ASC')
                ->where('currencies.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetPropertyTypesSqlData($request, $id){

        if($id!=null){

            $sqlData = DB::table('property_types')
                ->select(
                    'property_types.id as id',
                    'property_types.title as title',
                    'property_types.slug as slug',
                    'property_types.icon as icon',
                    'property_types.image as image',

                    'property_types.status as status',
                    'property_types.order_by as order_by',
                    'property_types.created_by_comp_id as created_by_comp_id',
                    'property_types.created_by_user_id as created_by_user_id',
                    'property_types.updated_by_user_id as updated_by_user_id',
                    'property_types.deleted_by_user_id as deleted_by_user_id',
                    'property_types.created_at as created_at',
                    'property_types.updated_at as updated_at',
                    'property_types.deleted_at as deleted_at'
                )
                ->where('property_types.id',$id)
                ->where('property_types.status','Active')
                ->first();

        }else{

            $sqlData = DB::table('property_types')
                ->select(
                    'property_types.id as id',
                    'property_types.title as title',
                    'property_types.slug as slug',
                    'property_types.icon as icon',
                    'property_types.image as image',

                    'property_types.status as status',
                    'property_types.order_by as order_by',
                    'property_types.created_by_comp_id as created_by_comp_id',
                    'property_types.created_by_user_id as created_by_user_id',
                    'property_types.updated_by_user_id as updated_by_user_id',
                    'property_types.deleted_by_user_id as deleted_by_user_id',
                    'property_types.created_at as created_at',
                    'property_types.updated_at as updated_at',
                    'property_types.deleted_at as deleted_at'
                )
                ->orderBy('property_types.order_by', 'ASC')
                ->where('property_types.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetPropertyApproachesSqlData($request, $id){

        if($id!=null){

            $sqlData = DB::table('property_approaches')
                ->select(
                    'property_approaches.id as id',
                    'property_approaches.title as title',
                    'property_approaches.slug as slug',
                    'property_approaches.icon as icon',
                    'property_approaches.image as image',

                    'property_approaches.status as status',
                    'property_approaches.order_by as order_by',
                    'property_approaches.created_by_comp_id as created_by_comp_id',
                    'property_approaches.created_by_user_id as created_by_user_id',
                    'property_approaches.updated_by_user_id as updated_by_user_id',
                    'property_approaches.deleted_by_user_id as deleted_by_user_id',
                    'property_approaches.created_at as created_at',
                    'property_approaches.updated_at as updated_at',
                    'property_approaches.deleted_at as deleted_at'
                )
                ->where('property_approaches.id',$id)
                ->orderBy('property_approaches.order_by', 'ASC')
                ->where('property_approaches.status','Active')
                ->first();

        }else{

            $sqlData = DB::table('property_approaches')
                ->select(
                    'property_approaches.id as id',
                    'property_approaches.title as title',
                    'property_approaches.slug as slug',
                    'property_approaches.icon as icon',
                    'property_approaches.image as image',

                    'property_approaches.status as status',
                    'property_approaches.order_by as order_by',
                    'property_approaches.created_by_comp_id as created_by_comp_id',
                    'property_approaches.created_by_user_id as created_by_user_id',
                    'property_approaches.updated_by_user_id as updated_by_user_id',
                    'property_approaches.deleted_by_user_id as deleted_by_user_id',
                    'property_approaches.created_at as created_at',
                    'property_approaches.updated_at as updated_at',
                    'property_approaches.deleted_at as deleted_at'
                )
                ->orderBy('property_approaches.order_by', 'ASC')
                ->where('property_approaches.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetPropertyAssetTypesSqlData($request, $id){

        if($id!=null){

            $sqlData = DB::table('property_asset_types')
                ->select(
                    'property_asset_types.id as id',
                    'property_asset_types.title as title',
                    'property_asset_types.slug as slug',
                    'property_asset_types.icon as icon',
                    'property_asset_types.image as image',

                    'property_asset_types.status as status',
                    'property_asset_types.order_by as order_by',
                    'property_asset_types.created_by_comp_id as created_by_comp_id',
                    'property_asset_types.created_by_user_id as created_by_user_id',
                    'property_asset_types.updated_by_user_id as updated_by_user_id',
                    'property_asset_types.deleted_by_user_id as deleted_by_user_id',
                    'property_asset_types.created_at as created_at',
                    'property_asset_types.updated_at as updated_at',
                    'property_asset_types.deleted_at as deleted_at'
                )
                ->where('property_asset_types.id',$id)
                ->orderBy('property_asset_types.order_by', 'ASC')
                ->where('property_asset_types.status','Active')
                ->first();

        }else{

            $sqlData = DB::table('property_asset_types')
                ->select(
                    'property_asset_types.id as id',
                    'property_asset_types.title as title',
                    'property_asset_types.slug as slug',
                    'property_asset_types.icon as icon',
                    'property_asset_types.image as image',

                    'property_asset_types.status as status',
                    'property_asset_types.order_by as order_by',
                    'property_asset_types.created_by_comp_id as created_by_comp_id',
                    'property_asset_types.created_by_user_id as created_by_user_id',
                    'property_asset_types.updated_by_user_id as updated_by_user_id',
                    'property_asset_types.deleted_by_user_id as deleted_by_user_id',
                    'property_asset_types.created_at as created_at',
                    'property_asset_types.updated_at as updated_at',
                    'property_asset_types.deleted_at as deleted_at'
                )
                ->orderBy('property_asset_types.order_by', 'ASC')
                ->where('property_asset_types.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetPropertyFeaturesSqlData($request, $id){

        if($id!=null){

            $sqlData = DB::table('property_features')
                ->join('property_feature_types', 'property_features.property_feature_type_id', '=', 'property_feature_types.id')
                ->select(
                    'property_features.id as id',
                    'property_features.property_feature_type_id as property_feature_type_id',
                    'property_feature_types.title as property_feature_type_title',

                    'property_features.title as title',
                    'property_features.slug as slug',
                    'property_features.image as image',
                    'property_features.status as status',
                    'property_features.order_by as order_by',
                    'property_features.created_by_comp_id as created_by_comp_id',
                    'property_features.created_by_user_id as created_by_user_id',
                    'property_features.updated_by_user_id as updated_by_user_id',
                    'property_features.deleted_by_user_id as deleted_by_user_id',
                    'property_features.created_at as created_at',
                    'property_features.updated_at as updated_at',
                    'property_features.deleted_at as deleted_at'
                )
                ->where('property_features.id',$id)
                ->orderBy('property_features.order_by', 'ASC')
                ->where('property_features.status','Active')
                ->get();

        }else{

            $sqlData = DB::table('property_features')
                ->join('property_feature_types', 'property_features.property_feature_type_id', '=', 'property_feature_types.id')
                ->select(
                    'property_features.id as id',
                    'property_features.property_feature_type_id as property_feature_type_id',
                    'property_feature_types.title as property_feature_type_title',

                    'property_features.title as title',
                    'property_features.slug as slug',
                    'property_features.image as image',
                    'property_features.status as status',
                    'property_features.order_by as order_by',
                    'property_features.created_by_comp_id as created_by_comp_id',
                    'property_features.created_by_user_id as created_by_user_id',
                    'property_features.updated_by_user_id as updated_by_user_id',
                    'property_features.deleted_by_user_id as deleted_by_user_id',
                    'property_features.created_at as created_at',
                    'property_features.updated_at as updated_at',
                    'property_features.deleted_at as deleted_at'
                )
                ->orderBy('property_features.order_by', 'ASC')
                ->where('property_features.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetPropertyNearBySqlData($request, $id){

        if($id!=null){

            $sqlData = DB::table('property_nearbys')
                ->select(
                    'property_nearbys.id as id',

                    'property_nearbys.title as title',
                    'property_nearbys.slug as slug',
                    'property_nearbys.image as image',
                    'property_nearbys.status as status',
                    'property_nearbys.order_by as order_by',
                    'property_nearbys.created_by_comp_id as created_by_comp_id',
                    'property_nearbys.created_by_user_id as created_by_user_id',
                    'property_nearbys.updated_by_user_id as updated_by_user_id',
                    'property_nearbys.deleted_by_user_id as deleted_by_user_id',
                    'property_nearbys.created_at as created_at',
                    'property_nearbys.updated_at as updated_at',
                    'property_nearbys.deleted_at as deleted_at'
                )
                ->where('property_nearbys.id',$id)
                ->orderBy('property_nearbys.order_by', 'ASC')
                ->where('property_nearbys.status','Active')
                ->get();

        }else{

            $sqlData = DB::table('property_nearbys')
                ->select(
                    'property_nearbys.id as id',

                    'property_nearbys.title as title',
                    'property_nearbys.slug as slug',
                    'property_nearbys.image as image',
                    'property_nearbys.status as status',
                    'property_nearbys.order_by as order_by',
                    'property_nearbys.created_by_comp_id as created_by_comp_id',
                    'property_nearbys.created_by_user_id as created_by_user_id',
                    'property_nearbys.updated_by_user_id as updated_by_user_id',
                    'property_nearbys.deleted_by_user_id as deleted_by_user_id',
                    'property_nearbys.created_at as created_at',
                    'property_nearbys.updated_at as updated_at',
                    'property_nearbys.deleted_at as deleted_at'
                )
                ->orderBy('property_nearbys.order_by', 'ASC')
                ->where('property_nearbys.status','Active')
                ->get();
        }

        return $sqlData;

    }






    public function getPaymentCriteria(){

        $BedroomRanges = collect([
            (object) [
                'value' => 'Online',
                'text' => 'Online'
            ],
            (object) [
                'value' => 'Cash',
                'text' => 'Cash'
            ],
            (object) [
                'value' => 'Cheque',
                'text' => 'Cheque'
            ],
            (object) [
                'value' => 'Pay Order',
                'text' => 'Pay Order'
            ],
            (object) [
                'value' => 'Demand Draft',
                'text' => 'Demand Draft'
            ],
        ]);

        return $BedroomRanges;
    }

    public function getBedroomRanges(){

        $BedroomRanges = collect([
            (object) [
                'value' => 'any',
                'text' => 'Any'
            ],
            (object) [
                'value' => 'studio',
                'text' => 'Studio'
            ],
            (object) [
                'value' => '1',
                'text' => '1'
            ],
            (object) [
                'value' => '2',
                'text' => '2'
            ],
            (object) [
                'value' => '3',
                'text' => '3'
            ],
            (object) [
                'value' => '4',
                'text' => '4'
            ],
            (object) [
                'value' => '5',
                'text' => '5'
            ],
            (object) [
                'value' => '6',
                'text' => '6'
            ],
            (object) [
                'value' => '7',
                'text' => '7'
            ],
            (object) [
                'value' => '8',
                'text' => '8'
            ],
            (object) [
                'value' => '9',
                'text' => '9'
            ],


        ]);

        return $BedroomRanges;
    }

    public function getBathRanges(){

        $BathRanges = collect([
            (object) [
                'value' => 'any',
                'text' => 'Any'
            ],
            (object) [
                'value' => '1',
                'text' => '1'
            ],
            (object) [
                'value' => '2',
                'text' => '2'
            ],
            (object) [
                'value' => '3',
                'text' => '3'
            ],
            (object) [
                'value' => '4',
                'text' => '4'
            ],
            (object) [
                'value' => '5',
                'text' => '5'
            ],
            (object) [
                'value' => '6',
                'text' => '6'
            ],
            (object) [
                'value' => '7',
                'text' => '7'
            ],
            (object) [
                'value' => '8',
                'text' => '8'
            ],
            (object) [
                'value' => '9',
                'text' => '9'
            ],


        ]);

        return $BathRanges;
    }

    public function getMinPrices(){

        $MinPrices = collect([
            (object) [
                'value' => 'any',
                'text' => 'Any'
            ],
            (object) [
                'value' => '10000',
                'text' => '10,000'
            ],
            (object) [
                'value' => '15000',
                'text' => '15,000'
            ],
            (object) [
                'value' => '20000',
                'text' => '20,000'
            ],
            (object) [
                'value' => '25000',
                'text' => '25,000'
            ],
            (object) [
                'value' => '30000',
                'text' => '30,000'
            ],
            (object) [
                'value' => '35000',
                'text' => '35,000'
            ],
            (object) [
                'value' => '40000',
                'text' => '40,000'
            ],
            (object) [
                'value' => '45000',
                'text' => '45,000'
            ],
            (object) [
                'value' => '50000',
                'text' => '50,000'
            ],
            (object) [
                'value' => '50000',
                'text' => '50,000'
            ],
            (object) [
                'value' => '60000',
                'text' => '60,000'
            ],
            (object) [
                'value' => '70000',
                'text' => '70,000'
            ],
            (object) [
                'value' => '80000',
                'text' => '80,000'
            ],
            (object) [
                'value' => '90000',
                'text' => '90,000'
            ],
            (object) [
                'value' => '100000',
                'text' => '100,000'
            ],
            (object) [
                'value' => '150000',
                'text' => '150,000'
            ],
            (object) [
                'value' => '200000',
                'text' => '200,000'
            ],
            (object) [
                'value' => '250000',
                'text' => '250,000'
            ],
            (object) [
                'value' => '300000',
                'text' => '300,000'
            ],
            (object) [
                'value' => '350000',
                'text' => '350,000'
            ],
            (object) [
                'value' => '400000',
                'text' => '400,000'
            ],

            (object) [
                'value' => '500000',
                'text' => '500,000'
            ],

            (object) [
                'value' => '600000',
                'text' => '600,000'
            ],

            (object) [
                'value' => '700000',
                'text' => '700,000'
            ],

            (object) [
                'value' => '800000',
                'text' => '800,000'
            ],


            (object) [
                'value' => '900000',
                'text' => '900,000'
            ],


            (object) [
                'value' => '1000000',
                'text' => '1,000,000'
            ],

        ]);

        return $MinPrices;
    }

    public function getMaxPrices(){

        $MaxPrices = collect([
            (object) [
                'value' => 'any',
                'text' => 'Any'
            ],
            (object) [
                'value' => '10000',
                'text' => '10,000'
            ],
            (object) [
                'value' => '15000',
                'text' => '15,000'
            ],
            (object) [
                'value' => '20000',
                'text' => '20,000'
            ],
            (object) [
                'value' => '25000',
                'text' => '25,000'
            ],
            (object) [
                'value' => '30000',
                'text' => '30,000'
            ],
            (object) [
                'value' => '35000',
                'text' => '35,000'
            ],
            (object) [
                'value' => '40000',
                'text' => '40,000'
            ],
            (object) [
                'value' => '45000',
                'text' => '45,000'
            ],
            (object) [
                'value' => '50000',
                'text' => '50,000'
            ],
            (object) [
                'value' => '50000',
                'text' => '50,000'
            ],
            (object) [
                'value' => '60000',
                'text' => '60,000'
            ],
            (object) [
                'value' => '70000',
                'text' => '70,000'
            ],
            (object) [
                'value' => '80000',
                'text' => '80,000'
            ],
            (object) [
                'value' => '90000',
                'text' => '90,000'
            ],
            (object) [
                'value' => '100000',
                'text' => '100,000'
            ],
            (object) [
                'value' => '150000',
                'text' => '150,000'
            ],
            (object) [
                'value' => '200000',
                'text' => '200,000'
            ],
            (object) [
                'value' => '250000',
                'text' => '250,000'
            ],
            (object) [
                'value' => '300000',
                'text' => '300,000'
            ],
            (object) [
                'value' => '350000',
                'text' => '350,000'
            ],
            (object) [
                'value' => '400000',
                'text' => '400,000'
            ],

            (object) [
                'value' => '500000',
                'text' => '500,000'
            ],

            (object) [
                'value' => '600000',
                'text' => '600,000'
            ],

            (object) [
                'value' => '700000',
                'text' => '700,000'
            ],

            (object) [
                'value' => '800000',
                'text' => '800,000'
            ],


            (object) [
                'value' => '900000',
                'text' => '900,000'
            ],


            (object) [
                'value' => '1000000',
                'text' => '1,000,000'
            ],

        ]);

        return $MaxPrices;
    }

    public function getMinAreas(){

        $MinAreas = collect([
            (object) [
                'value' => '0',
                'text' => 'Any'
            ],
            (object) [
                'value' => '50',
                'text' => '50'
            ],
            (object) [
                'value' => '80',
                'text' => '80'
            ],
            (object) [
                'value' => '100',
                'text' => '100'
            ],
            (object) [
                'value' => '120',
                'text' => '120'
            ],
            (object) [
                'value' => '120',
                'text' => '120'
            ],
            (object) [
                'value' => '150',
                'text' => '150'
            ],
            (object) [
                'value' => '200',
                'text' => '200'
            ],
            (object) [
                'value' => '220',
                'text' => '220'
            ],
            (object) [
                'value' => '220',
                'text' => '220'
            ],
            (object) [
                'value' => '250',
                'text' => '250'
            ],
            (object) [
                'value' => '300',
                'text' => '300'
            ],
            (object) [
                'value' => '400',
                'text' => '400'
            ],
            (object) [
                'value' => '500',
                'text' => '500'
            ],
            (object) [
                'value' => '600',
                'text' => '600'
            ],
            (object) [
                'value' => '700',
                'text' => '700'
            ],
            (object) [
                'value' => '1000',
                'text' => '1,000'
            ],
            (object) [
                'value' => '1200',
                'text' => '1,200'
            ],
            (object) [
                'value' => '1500',
                'text' => '1,500'
            ],
            (object) [
                'value' => '2000',
                'text' => '2,000'
            ],
            (object) [
                'value' => '2500',
                'text' => '2,500'
            ],
            (object) [
                'value' => '3000',
                'text' => '3,000'
            ],
            (object) [
                'value' => '4000',
                'text' => '4,000'
            ],
            (object) [
                'value' => '4500',
                'text' => '4,500'
            ],
            (object) [
                'value' => '5000',
                'text' => '5,000'
            ],
            (object) [
                'value' => '6000',
                'text' => '6,000'
            ],
            (object) [
                'value' => '10000',
                'text' => '10,000'
            ],
            (object) [
                'value' => '15000',
                'text' => '15,000'
            ],
            (object) [
                'value' => '20000',
                'text' => '20,000'
            ],

        ]);

        return $MinAreas;
    }

    public function getMaxAreas(){

        $MaxAreas = collect([
            (object) [
                'value' => '0',
                'text' => 'Any'
            ],
            (object) [
                'value' => '50',
                'text' => '50'
            ],
            (object) [
                'value' => '80',
                'text' => '80'
            ],
            (object) [
                'value' => '100',
                'text' => '100'
            ],
            (object) [
                'value' => '120',
                'text' => '120'
            ],
            (object) [
                'value' => '120',
                'text' => '120'
            ],
            (object) [
                'value' => '150',
                'text' => '150'
            ],
            (object) [
                'value' => '200',
                'text' => '200'
            ],
            (object) [
                'value' => '220',
                'text' => '220'
            ],
            (object) [
                'value' => '220',
                'text' => '220'
            ],
            (object) [
                'value' => '250',
                'text' => '250'
            ],
            (object) [
                'value' => '300',
                'text' => '300'
            ],
            (object) [
                'value' => '400',
                'text' => '400'
            ],
            (object) [
                'value' => '500',
                'text' => '500'
            ],
            (object) [
                'value' => '600',
                'text' => '600'
            ],
            (object) [
                'value' => '700',
                'text' => '700'
            ],
            (object) [
                'value' => '1000',
                'text' => '1,000'
            ],
            (object) [
                'value' => '1200',
                'text' => '1,200'
            ],
            (object) [
                'value' => '1500',
                'text' => '1,500'
            ],
            (object) [
                'value' => '2000',
                'text' => '2,000'
            ],
            (object) [
                'value' => '2500',
                'text' => '2,500'
            ],
            (object) [
                'value' => '3000',
                'text' => '3,000'
            ],
            (object) [
                'value' => '4000',
                'text' => '4,000'
            ],
            (object) [
                'value' => '4500',
                'text' => '4,500'
            ],
            (object) [
                'value' => '5000',
                'text' => '5,000'
            ],
            (object) [
                'value' => '6000',
                'text' => '6,000'
            ],
            (object) [
                'value' => '10000',
                'text' => '10,000'
            ],
            (object) [
                'value' => '15000',
                'text' => '15,000'
            ],
            (object) [
                'value' => '20000',
                'text' => '20,000'
            ],

        ]);

        return $MaxAreas;
    }

    public function getContractPeriod(){

        $MaxAreas = collect([
            (object) [
                'value' => '1 month',
                'text' => '1 month'
            ],
            (object) [
                'value' => '2 months',
                'text' => '2 Months'
            ],
            (object) [
                'value' => '3 months',
                'text' => '3 Months'
            ],
            (object) [
                'value' => '4 months',
                'text' => '4 Months'
            ],
            (object) [
                'value' => '5 months',
                'text' => '5 Months'
            ],
            (object) [
                'value' => '6 months',
                'text' => '6 Months'
            ],
            (object) [
                'value' => '8 months',
                'text' => '8 Months'
            ],
            (object) [
                'value' => '9 months',
                'text' => '9 Months'
            ],
            (object) [
                'value' => '10 months',
                'text' => '10 Months'
            ],
            (object) [
                'value' => '11 months',
                'text' => '11 months'
            ],
            (object) [
                'value' => '1 year',
                'text' => '1 Year'
            ],
            (object) [
                'value' => '2 years',
                'text' => '2 Years'
            ],
            (object) [
                'value' => '3 years',
                'text' => '3 Years'
            ],
            (object) [
                'value' => '4 years',
                'text' => '4 Years'
            ],
            (object) [
                'value' => '5 years',
                'text' => '5 Years'
            ],
            (object) [
                'value' => '6 years',
                'text' => '6 Years'
            ],
            (object) [
                'value' => '7 years',
                'text' => '7 Years'
            ],
            (object) [
                'value' => '8 years',
                'text' => '8 Years'
            ],
            (object) [
                'value' => '9 years',
                'text' => '9 Years'
            ],
            (object) [
                'value' => '10 years',
                'text' => '10 Years'
            ],

        ]);

        return $MaxAreas;
    }

    public function getWhoWillPayMaintenanceFee(){

        $MaxAreas = collect([
            (object) [
                'value' => 'tenant',
                'text' => 'Tenant'
            ],
            (object) [
                'value' => 'landlord',
                'text' => 'Landlord'
            ],

        ]);

        return $MaxAreas;
    }

    public function getNoOfCheques(){

        $MaxAreas = collect([
            (object) [
                'value' => '1',
                'text' => '1'
            ],
            (object) [
                'value' => '2',
                'text' => '2'
            ],
            (object) [
                'value' => '3',
                'text' => '3'
            ],
            (object) [
                'value' => '4',
                'text' => '4'
            ],
            (object) [
                'value' => '5',
                'text' => '5'
            ],
            (object) [
                'value' => '6',
                'text' => '6'
            ],
            (object) [
                'value' => '7',
                'text' => '7'
            ],
            (object) [
                'value' => '8',
                'text' => '8'
            ],
            (object) [
                'value' => '9',
                'text' => '9'
            ],
            (object) [
                'value' => '10',
                'text' => '10'
            ],
            (object) [
                'value' => '11',
                'text' => '11'
            ],
            (object) [
                'value' => '12',
                'text' => '12'
            ],
            (object) [
                'value' => '13',
                'text' => '13'
            ],
            (object) [
                'value' => '14',
                'text' => '14'
            ],
            (object) [
                'value' => '15',
                'text' => '15'
            ],
            (object) [
                'value' => '16',
                'text' => '16'
            ],
            (object) [
                'value' => '17',
                'text' => '17'
            ],
            (object) [
                'value' => '18',
                'text' => '18'
            ],
            (object) [
                'value' => '19',
                'text' => '19'
            ],
            (object) [
                'value' => '20',
                'text' => '20'
            ],

        ]);

        return $MaxAreas;
    }

    public function getAgeOfProperty(){

        $AgeOfProperty = collect([
            (object) [
                'value' => 'new',
                'text' => 'New'
            ],
            (object) [
                'value' => '6 months old',
                'text' => '6 months old'
            ],
            (object) [
                'value' => '1 year old',
                'text' => '1 year old'
            ],
            (object) [
                'value' => '2 years old',
                'text' => '2 years old'
            ],
            (object) [
                'value' => '3 years old',
                'text' => '3 years old'
            ],
            (object) [
                'value' => '4 years old',
                'text' => '4 years old'
            ],
            (object) [
                'value' => '5 years old',
                'text' => '5 years old'
            ],
            (object) [
                'value' => '6 years old',
                'text' => '6 years old'
            ],
            (object) [
                'value' => '7 years old',
                'text' => '7 years old'
            ],
            (object) [
                'value' => '8 years old',
                'text' => '8 years old'
            ],
            (object) [
                'value' => '9 years old',
                'text' => '9 years old'
            ],
            (object) [
                'value' => '10 years old',
                'text' => '10 years old'
            ],
            (object) [
                'value' => '15 years old',
                'text' => '15 years old'
            ],
            (object) [
                'value' => '20 years old',
                'text' => '20 years old'
            ],
            (object) [
                'value' => '25 years old',
                'text' => '25 years old'
            ],
            (object) [
                'value' => '30 years old',
                'text' => '30 years old'
            ],
            (object) [
                'value' => '35 years old',
                'text' => '35 years old'
            ],
            (object) [
                'value' => '40 years old',
                'text' => '40 years old'
            ],
            (object) [
                'value' => '45 years old',
                'text' => '45 years old'
            ],
            (object) [
                'value' => '50 years old',
                'text' => '50 years old'
            ],
            (object) [
                'value' => '60 years old',
                'text' => '60 years old'
            ],
            (object) [
                'value' => '70 years old',
                'text' => '70 years old'
            ],
            (object) [
                'value' => '80 years old',
                'text' => '80 years old'
            ],
            (object) [
                'value' => '90 years old',
                'text' => '90 years old'
            ],
            (object) [
                'value' => '100 years old',
                'text' => '100 years old'
            ],

        ]);

        return $AgeOfProperty;
    }

    public function getNoticePeriod(){

        $MaxAreas = collect([
            (object) [
                'value' => '1 month',
                'text' => '1 month'
            ],
            (object) [
                'value' => '2 months',
                'text' => '2 Months'
            ],
            (object) [
                'value' => '3 months',
                'text' => '3 Months'
            ],
            (object) [
                'value' => '4 months',
                'text' => '4 Months'
            ],
            (object) [
                'value' => '5 months',
                'text' => '5 Months'
            ],
            (object) [
                'value' => '6 months',
                'text' => '6 Months'
            ],
            (object) [
                'value' => '8 months',
                'text' => '8 Months'
            ],
            (object) [
                'value' => '9 months',
                'text' => '9 Months'
            ],
            (object) [
                'value' => '10 months',
                'text' => '10 Months'
            ],
            (object) [
                'value' => '11 months',
                'text' => '11 months'
            ],
            (object) [
                'value' => '12 months',
                'text' => '12 months'
            ],

        ]);

        return $MaxAreas;
    }


    public function getNoOfGarages(){

        $BathRanges = collect([

            (object) [
                'value' => '1',
                'text' => '1'
            ],
            (object) [
                'value' => '2',
                'text' => '2'
            ],
            (object) [
                'value' => '3',
                'text' => '3'
            ],
            (object) [
                'value' => '4',
                'text' => '4'
            ],
            (object) [
                'value' => '5',
                'text' => '5'
            ],
            (object) [
                'value' => '6',
                'text' => '6'
            ]


        ]);

        return $BathRanges;
    }

    public function getNoOfRooms(){

        $BathRanges = collect([

            (object) [
                'value' => '1',
                'text' => '1'
            ],
            (object) [
                'value' => '2',
                'text' => '2'
            ],
            (object) [
                'value' => '3',
                'text' => '3'
            ],
            (object) [
                'value' => '4',
                'text' => '4'
            ],
            (object) [
                'value' => '5',
                'text' => '5'
            ],
            (object) [
                'value' => '6',
                'text' => '6'
            ],
            (object) [
                'value' => '6',
                'text' => '6'
            ],
            (object) [
                'value' => '7',
                'text' => '7'
            ],
            (object) [
                'value' => '8',
                'text' => '8'
            ],
            (object) [
                'value' => '9',
                'text' => '9'
            ],
            (object) [
                'value' => '10',
                'text' => '10'
            ]


        ]);

        return $BathRanges;
    }





    public function GetGalleriesSqlData($request, $id, $reference_id, $reference_type){

        if($id!=null){

            $sqlData = DB::table('galleries')
                ->select(
                    'galleries.id as id',
                    'galleries.reference_id as reference_id',
                    'galleries.reference_type as reference_type',
                    'galleries.title as title',
                    'galleries.caption as caption',
                    'galleries.alt_text as alt_text',
                    'galleries.source as source',
                    'galleries.thumbnail as thumbnail',
                    'galleries.status',
                    'galleries.order_by',
                    'galleries.created_by_comp_id',
                    'galleries.created_by_user_id',
                    'galleries.updated_by_user_id',
                    'galleries.deleted_by_user_id',
                    'galleries.created_at',
                    'galleries.updated_at',
                    'galleries.deleted_at'
                )
                ->where('galleries.id',$id)
                ->where('galleries.status','Active')
                ->first();

        }elseif ($id==null && $reference_id!=null && $reference_type==null){

            $sqlData = DB::table('galleries')
                ->select(
                    'galleries.id as id',
                    'galleries.reference_id as reference_id',
                    'galleries.reference_type as reference_type',
                    'galleries.title as title',
                    'galleries.caption as caption',
                    'galleries.alt_text as alt_text',
                    'galleries.source as source',
                    'galleries.thumbnail as thumbnail',
                    'galleries.status',
                    'galleries.order_by',
                    'galleries.created_by_comp_id',
                    'galleries.created_by_user_id',
                    'galleries.updated_by_user_id',
                    'galleries.deleted_by_user_id',
                    'galleries.created_at',
                    'galleries.updated_at',
                    'galleries.deleted_at'
                )
                ->where('galleries.reference_id',$reference_id)
                ->orderBy('galleries.created_at', 'DESC')
                ->where('galleries.status','Active')
                ->paginate();

        }elseif ($id==null && $reference_id==null && $reference_type!=null){

            $sqlData = DB::table('galleries')
                ->select(
                    'galleries.id as id',
                    'galleries.reference_id as reference_id',
                    'galleries.reference_type as reference_type',
                    'galleries.title as title',
                    'galleries.caption as caption',
                    'galleries.alt_text as alt_text',
                    'galleries.source as source',
                    'galleries.thumbnail as thumbnail',
                    'galleries.status',
                    'galleries.order_by',
                    'galleries.created_by_comp_id',
                    'galleries.created_by_user_id',
                    'galleries.updated_by_user_id',
                    'galleries.deleted_by_user_id',
                    'galleries.created_at',
                    'galleries.updated_at',
                    'galleries.deleted_at'
                )
                ->where('galleries.reference_type',$reference_type)
                ->orderBy('galleries.created_at', 'DESC')
                ->where('galleries.status','Active')
                ->paginate();

        }elseif ($id==null && $reference_id!=null && $reference_type!=null){

            $sqlData = DB::table('galleries')
                ->select(
                    'galleries.id as id',
                    'galleries.reference_id as reference_id',
                    'galleries.reference_type as reference_type',
                    'galleries.title as title',
                    'galleries.caption as caption',
                    'galleries.alt_text as alt_text',
                    'galleries.source as source',
                    'galleries.thumbnail as thumbnail',
                    'galleries.status',
                    'galleries.order_by',
                    'galleries.created_by_comp_id',
                    'galleries.created_by_user_id',
                    'galleries.updated_by_user_id',
                    'galleries.deleted_by_user_id',
                    'galleries.created_at',
                    'galleries.updated_at',
                    'galleries.deleted_at'
                )
                ->where('galleries.reference_id',$reference_id)
                ->where('galleries.reference_type',$reference_type)
                ->orderBy('galleries.created_at', 'DESC')
                ->where('galleries.status','Active')
                ->paginate();
        }else{

            $sqlData = DB::table('galleries')
                ->select(
                    'galleries.id as id',
                    'galleries.reference_id as reference_id',
                    'galleries.reference_type as reference_type',
                    'galleries.title as title',
                    'galleries.caption as caption',
                    'galleries.alt_text as alt_text',
                    'galleries.source as source',
                    'galleries.thumbnail as thumbnail',
                    'galleries.status',
                    'galleries.order_by',
                    'galleries.created_by_comp_id',
                    'galleries.created_by_user_id',
                    'galleries.updated_by_user_id',
                    'galleries.deleted_by_user_id',
                    'galleries.created_at',
                    'galleries.updated_at',
                    'galleries.deleted_at'
                )
                ->orderBy('galleries.created_at', 'DESC')
                ->where('galleries.status','Active')
                ->paginate();
        }

        return $sqlData;

    }

    public function GetAddressesSqlData($request, $id, $reference_id, $reference_type, $verification_status){


        if($id!=null){

            $sqlData = DB::table('addresses')
                ->leftJoin('countries', 'addresses.country_id', '=', 'countries.id')
                ->leftJoin('provinces', 'addresses.province_id', '=', 'provinces.id')
                ->leftJoin('cities', 'addresses.city_id', '=', 'cities.id')
                ->leftJoin('areas', 'addresses.area_id', '=', 'areas.id')
                ->leftJoin('locations', 'addresses.location_id', '=', 'locations.id')
                ->select(
                    'addresses.id as id',

                    'addresses.country_id as country_id',
                    'countries.name as country_title',
                    'countries.slug as country_slug',
                    'countries.two_letter_code as country_two_letter_code',
                    'countries.three_letter_code as country_three_letter_code',
                    'countries.flag as country_flag',
                    'countries.latitude as country_latitude',
                    'countries.longitude as country_longitude',

                    'addresses.province_id as province_id',
                    'provinces.title as province_title',
                    'provinces.two_letter_code as province_two_letter_code',
                    'provinces.latitude as province_latitude',
                    'provinces.longitude as province_longitude',

                    'addresses.city_id as city_id',
                    'cities.name as city_title',
                    'cities.latitude as city_latitude',
                    'cities.longitude as city_longitude',

                    'addresses.area_id as area_id',
                    'areas.name as area_title',
                    'areas.code as area_code',
                    'areas.latitude as area_latitude',
                    'areas.longitude as area_longitude',

                    'addresses.location_id as location_id',
                    'locations.name as location_title',
                    'locations.latitude as location_latitude',
                    'locations.longitude as location_longitude',

                    'addresses.reference_id as reference_id',
                    'addresses.reference_type as reference_type',
                    'addresses.title as title',
                    'addresses.address as address',
                    'addresses.postal_code as postal_code',
                    'addresses.latitude as latitude',
                    'addresses.longitude as longitude',
                    'addresses.verification_status as verification_status',
                    'addresses.verification_code as verification_code',
                    'addresses.status',
                    'addresses.order_by',
                    'addresses.created_by_comp_id',
                    'addresses.created_by_user_id',
                    'addresses.updated_by_user_id',
                    'addresses.deleted_by_user_id',
                    'addresses.created_at',
                    'addresses.updated_at',
                    'addresses.deleted_at'
                )
                ->where('addresses.id',$id)
                ->where('addresses.status','Active')
                ->first();

        }elseif($verification_status!=null && $reference_type!=null){

            $sqlData = DB::table('addresses')
                ->leftJoin('countries', 'addresses.country_id', '=', 'countries.id')
                ->leftJoin('provinces', 'addresses.province_id', '=', 'provinces.id')
                ->leftJoin('cities', 'addresses.city_id', '=', 'cities.id')
                ->leftJoin('areas', 'addresses.area_id', '=', 'areas.id')
                ->leftJoin('locations', 'addresses.location_id', '=', 'locations.id')
                ->select(
                    'addresses.id as id',

                    'addresses.country_id as country_id',
                    'countries.name as country_title',
                    'countries.slug as country_slug',
                    'countries.two_letter_code as country_two_letter_code',
                    'countries.three_letter_code as country_three_letter_code',
                    'countries.flag as country_flag',
                    'countries.latitude as country_latitude',
                    'countries.longitude as country_longitude',

                    'addresses.province_id as province_id',
                    'provinces.title as province_title',
                    'provinces.two_letter_code as province_two_letter_code',
                    'provinces.latitude as province_latitude',
                    'provinces.longitude as province_longitude',

                    'addresses.city_id as city_id',
                    'cities.name as city_title',
                    'cities.latitude as city_latitude',
                    'cities.longitude as city_longitude',

                    'addresses.area_id as area_id',
                    'areas.name as area_title',
                    'areas.code as area_code',
                    'areas.latitude as area_latitude',
                    'areas.longitude as area_longitude',

                    'addresses.location_id as location_id',
                    'locations.name as location_title',
                    'locations.latitude as location_latitude',
                    'locations.longitude as location_longitude',

                    'addresses.reference_id as reference_id',
                    'addresses.reference_type as reference_type',
                    'addresses.title as title',
                    'addresses.address as address',
                    'addresses.postal_code as postal_code',
                    'addresses.latitude as latitude',
                    'addresses.longitude as longitude',
                    'addresses.verification_status as verification_status',
                    'addresses.verification_code as verification_code',
                    'addresses.status',
                    'addresses.order_by',
                    'addresses.created_by_comp_id',
                    'addresses.created_by_user_id',
                    'addresses.updated_by_user_id',
                    'addresses.deleted_by_user_id',
                    'addresses.created_at',
                    'addresses.updated_at',
                    'addresses.deleted_at'
                )
                ->where('addresses.verification_status',$verification_status)
                ->where('addresses.reference_type',$reference_type)
                ->where('addresses.status','Active')
                ->paginate();

        }elseif($verification_status!=null){

            $sqlData = DB::table('addresses')
                ->leftJoin('countries', 'addresses.country_id', '=', 'countries.id')
                ->leftJoin('provinces', 'addresses.province_id', '=', 'provinces.id')
                ->leftJoin('cities', 'addresses.city_id', '=', 'cities.id')
                ->leftJoin('areas', 'addresses.area_id', '=', 'areas.id')
                ->leftJoin('locations', 'addresses.location_id', '=', 'locations.id')
                ->select(
                    'addresses.id as id',

                    'addresses.country_id as country_id',
                    'countries.name as country_title',
                    'countries.slug as country_slug',
                    'countries.two_letter_code as country_two_letter_code',
                    'countries.three_letter_code as country_three_letter_code',
                    'countries.flag as country_flag',
                    'countries.latitude as country_latitude',
                    'countries.longitude as country_longitude',

                    'addresses.province_id as province_id',
                    'provinces.title as province_title',
                    'provinces.two_letter_code as province_two_letter_code',
                    'provinces.latitude as province_latitude',
                    'provinces.longitude as province_longitude',

                    'addresses.city_id as city_id',
                    'cities.name as city_title',
                    'cities.latitude as city_latitude',
                    'cities.longitude as city_longitude',

                    'addresses.area_id as area_id',
                    'areas.name as area_title',
                    'areas.code as area_code',
                    'areas.latitude as area_latitude',
                    'areas.longitude as area_longitude',

                    'addresses.location_id as location_id',
                    'locations.name as location_title',
                    'locations.latitude as location_latitude',
                    'locations.longitude as location_longitude',

                    'addresses.reference_id as reference_id',
                    'addresses.reference_type as reference_type',
                    'addresses.title as title',
                    'addresses.address as address',
                    'addresses.postal_code as postal_code',
                    'addresses.latitude as latitude',
                    'addresses.longitude as longitude',
                    'addresses.verification_status as verification_status',
                    'addresses.verification_code as verification_code',
                    'addresses.status',
                    'addresses.order_by',
                    'addresses.created_by_comp_id',
                    'addresses.created_by_user_id',
                    'addresses.updated_by_user_id',
                    'addresses.deleted_by_user_id',
                    'addresses.created_at',
                    'addresses.updated_at',
                    'addresses.deleted_at'
                )
                ->where('addresses.verification_status',$verification_status)
                ->where('addresses.status','Active')
                ->paginate();

        }elseif ($id==null && $reference_id!=null && $reference_type==null){

            $sqlData = DB::table('addresses')
                ->leftJoin('countries', 'addresses.country_id', '=', 'countries.id')
                ->leftJoin('provinces', 'addresses.province_id', '=', 'provinces.id')
                ->leftJoin('cities', 'addresses.city_id', '=', 'cities.id')
                ->leftJoin('areas', 'addresses.area_id', '=', 'areas.id')
                ->leftJoin('locations', 'addresses.location_id', '=', 'locations.id')
                ->select(
                    'addresses.id as id',

                    'addresses.country_id as country_id',
                    'countries.name as country_title',
                    'countries.slug as country_slug',
                    'countries.two_letter_code as country_two_letter_code',
                    'countries.three_letter_code as country_three_letter_code',
                    'countries.flag as country_flag',
                    'countries.latitude as country_latitude',
                    'countries.longitude as country_longitude',

                    'addresses.province_id as province_id',
                    'provinces.title as province_title',
                    'provinces.two_letter_code as province_two_letter_code',
                    'provinces.latitude as province_latitude',
                    'provinces.longitude as province_longitude',

                    'addresses.city_id as city_id',
                    'cities.name as city_title',
                    'cities.latitude as city_latitude',
                    'cities.longitude as city_longitude',

                    'addresses.area_id as area_id',
                    'areas.name as area_title',
                    'areas.code as area_code',
                    'areas.latitude as area_latitude',
                    'areas.longitude as area_longitude',

                    'addresses.location_id as location_id',
                    'locations.name as location_title',
                    'locations.latitude as location_latitude',
                    'locations.longitude as location_longitude',

                    'addresses.reference_id as reference_id',
                    'addresses.reference_type as reference_type',
                    'addresses.title as title',
                    'addresses.address as address',
                    'addresses.postal_code as postal_code',
                    'addresses.latitude as latitude',
                    'addresses.longitude as longitude',
                    'addresses.verification_status as verification_status',
                    'addresses.verification_code as verification_code',
                    'addresses.status',
                    'addresses.order_by',
                    'addresses.created_by_comp_id',
                    'addresses.created_by_user_id',
                    'addresses.updated_by_user_id',
                    'addresses.deleted_by_user_id',
                    'addresses.created_at',
                    'addresses.updated_at',
                    'addresses.deleted_at'
                )
                ->where('addresses.reference_id',$reference_id)
                ->orderBy('addresses.order_by', 'ASC')
                ->where('addresses.status','Active')
                ->paginate();

        }elseif ($id==null && $reference_id==null && $reference_type!=null){

            $sqlData = DB::table('addresses')
                ->leftJoin('countries', 'addresses.country_id', '=', 'countries.id')
                ->leftJoin('provinces', 'addresses.province_id', '=', 'provinces.id')
                ->leftJoin('cities', 'addresses.city_id', '=', 'cities.id')
                ->leftJoin('areas', 'addresses.area_id', '=', 'areas.id')
                ->leftJoin('locations', 'addresses.location_id', '=', 'locations.id')
                ->select(
                    'addresses.id as id',

                    'addresses.country_id as country_id',
                    'countries.name as country_title',
                    'countries.slug as country_slug',
                    'countries.two_letter_code as country_two_letter_code',
                    'countries.three_letter_code as country_three_letter_code',
                    'countries.flag as country_flag',
                    'countries.latitude as country_latitude',
                    'countries.longitude as country_longitude',

                    'addresses.province_id as province_id',
                    'provinces.title as province_title',
                    'provinces.two_letter_code as province_two_letter_code',
                    'provinces.latitude as province_latitude',
                    'provinces.longitude as province_longitude',

                    'addresses.city_id as city_id',
                    'cities.name as city_title',
                    'cities.latitude as city_latitude',
                    'cities.longitude as city_longitude',

                    'addresses.area_id as area_id',
                    'areas.name as area_title',
                    'areas.code as area_code',
                    'areas.latitude as area_latitude',
                    'areas.longitude as area_longitude',

                    'addresses.location_id as location_id',
                    'locations.name as location_title',
                    'locations.latitude as location_latitude',
                    'locations.longitude as location_longitude',

                    'addresses.reference_id as reference_id',
                    'addresses.reference_type as reference_type',
                    'addresses.title as title',
                    'addresses.address as address',
                    'addresses.postal_code as postal_code',
                    'addresses.latitude as latitude',
                    'addresses.longitude as longitude',
                    'addresses.verification_status as verification_status',
                    'addresses.verification_code as verification_code',
                    'addresses.status',
                    'addresses.order_by',
                    'addresses.created_by_comp_id',
                    'addresses.created_by_user_id',
                    'addresses.updated_by_user_id',
                    'addresses.deleted_by_user_id',
                    'addresses.created_at',
                    'addresses.updated_at',
                    'addresses.deleted_at'
                )
                ->where('addresses.reference_type',$reference_type)
                ->orderBy('addresses.order_by', 'ASC')
                ->where('addresses.status','Active')
                ->paginate();

        }elseif ($id==null && $reference_id!=null && $reference_type!=null){


            $sqlData = DB::table('addresses')
                ->leftJoin('countries', 'addresses.country_id', '=', 'countries.id')
                ->leftJoin('provinces', 'addresses.province_id', '=', 'provinces.id')
                ->leftJoin('cities', 'addresses.city_id', '=', 'cities.id')
                ->leftJoin('areas', 'addresses.area_id', '=', 'areas.id')
                ->leftJoin('locations', 'addresses.location_id', '=', 'locations.id')
                ->select(
                    'addresses.id as id',

                    'addresses.country_id as country_id',
                    'countries.name as country_title',
                    'countries.slug as country_slug',
                    'countries.two_letter_code as country_two_letter_code',
                    'countries.three_letter_code as country_three_letter_code',
                    'countries.flag as country_flag',
                    'countries.latitude as country_latitude',
                    'countries.longitude as country_longitude',

                    'addresses.province_id as province_id',
                    'provinces.title as province_title',
                    'provinces.two_letter_code as province_two_letter_code',
                    'provinces.latitude as province_latitude',
                    'provinces.longitude as province_longitude',

                    'addresses.city_id as city_id',
                    'cities.name as city_title',
                    'cities.latitude as city_latitude',
                    'cities.longitude as city_longitude',

                    'addresses.area_id as area_id',
                    'areas.name as area_title',
                    'areas.code as area_code',
                    'areas.latitude as area_latitude',
                    'areas.longitude as area_longitude',

                    'addresses.location_id as location_id',
                    'locations.name as location_title',
                    'locations.latitude as location_latitude',
                    'locations.longitude as location_longitude',

                    'addresses.reference_id as reference_id',
                    'addresses.reference_type as reference_type',
                    'addresses.title as title',
                    'addresses.address as address',
                    'addresses.postal_code as postal_code',
                    'addresses.latitude as latitude',
                    'addresses.longitude as longitude',
                    'addresses.verification_status as verification_status',
                    'addresses.verification_code as verification_code',
                    'addresses.status',
                    'addresses.order_by',
                    'addresses.created_by_comp_id',
                    'addresses.created_by_user_id',
                    'addresses.updated_by_user_id',
                    'addresses.deleted_by_user_id',
                    'addresses.created_at',
                    'addresses.updated_at',
                    'addresses.deleted_at'
                )
                ->where('addresses.reference_id',$reference_id)
                ->where('addresses.reference_type',$reference_type)
                ->orderBy('addresses.order_by', 'ASC')
                ->where('addresses.status','Active')
                ->paginate();

        }else{

            $sqlData = DB::table('addresses')
                ->leftJoin('countries', 'addresses.country_id', '=', 'countries.id')
                ->leftJoin('provinces', 'addresses.province_id', '=', 'provinces.id')
                ->leftJoin('cities', 'addresses.city_id', '=', 'cities.id')
                ->leftJoin('areas', 'addresses.area_id', '=', 'areas.id')
                ->leftJoin('locations', 'addresses.location_id', '=', 'locations.id')
                ->select(
                    'addresses.id as id',

                    'addresses.country_id as country_id',
                    'countries.name as country_title',
                    'countries.slug as country_slug',
                    'countries.two_letter_code as country_two_letter_code',
                    'countries.three_letter_code as country_three_letter_code',
                    'countries.flag as country_flag',
                    'countries.latitude as country_latitude',
                    'countries.longitude as country_longitude',

                    'addresses.province_id as province_id',
                    'provinces.title as province_title',
                    'provinces.two_letter_code as province_two_letter_code',
                    'provinces.latitude as province_latitude',
                    'provinces.longitude as province_longitude',

                    'addresses.city_id as city_id',
                    'cities.name as city_title',
                    'cities.latitude as city_latitude',
                    'cities.longitude as city_longitude',

                    'addresses.area_id as area_id',
                    'areas.name as area_title',
                    'areas.code as area_code',
                    'areas.latitude as area_latitude',
                    'areas.longitude as area_longitude',

                    'addresses.location_id as location_id',
                    'locations.name as location_title',
                    'locations.latitude as location_latitude',
                    'locations.longitude as location_longitude',

                    'addresses.reference_id as reference_id',
                    'addresses.reference_type as reference_type',
                    'addresses.title as title',
                    'addresses.address as address',
                    'addresses.postal_code as postal_code',
                    'addresses.latitude as latitude',
                    'addresses.longitude as longitude',
                    'addresses.verification_status as verification_status',
                    'addresses.verification_code as verification_code',
                    'addresses.status',
                    'addresses.order_by',
                    'addresses.created_by_comp_id',
                    'addresses.created_by_user_id',
                    'addresses.updated_by_user_id',
                    'addresses.deleted_by_user_id',
                    'addresses.created_at',
                    'addresses.updated_at',
                    'addresses.deleted_at'
                )
                ->orderBy('addresses.order_by', 'ASC')
                ->where('addresses.status','Active')
                ->paginate();

        }

        return $sqlData;

    }

    public function GetPhoneSqlData($request, $id, $reference_id, $reference_type, $verification_status){


        if($id!=null){

            $sqlData = DB::table('numbers')
                ->join('country_codes', 'numbers.country_code_id', '=', 'country_codes.id')
                ->select(
                    'numbers.id as id',
                    'numbers.country_code_id as country_code_id',
                    'country_codes.country_id as country_id',
                    'country_codes.code as country_code',

                    'numbers.reference_id as reference_id',
                    'numbers.reference_type as reference_type',
                    'numbers.title as title',
                    'numbers.number as number',
                    'numbers.verification_code as verification_code',
                    'numbers.verification_status as verification_status',
                    'numbers.status',
                    'numbers.order_by',
                    'numbers.created_by_comp_id',
                    'numbers.created_by_user_id',
                    'numbers.updated_by_user_id',
                    'numbers.deleted_by_user_id',
                    'numbers.created_at',
                    'numbers.updated_at',
                    'numbers.deleted_at'
                )
                ->where('numbers.id',$id)
                ->where('numbers.status','Active')
                ->first();

        }elseif($verification_status!=null && $reference_type!=null){

            $sqlData = DB::table('numbers')
                ->join('country_codes', 'numbers.country_code_id', '=', 'country_codes.id')
                ->select(
                    'numbers.id as id',
                    'numbers.country_code_id as country_code_id',
                    'country_codes.country_id as country_id',
                    'country_codes.code as country_code',

                    'numbers.reference_id as reference_id',
                    'numbers.reference_type as reference_type',
                    'numbers.title as title',
                    'numbers.number as number',
                    'numbers.verification_code as verification_code',
                    'numbers.verification_status as verification_status',
                    'numbers.status',
                    'numbers.order_by',
                    'numbers.created_by_comp_id',
                    'numbers.created_by_user_id',
                    'numbers.updated_by_user_id',
                    'numbers.deleted_by_user_id',
                    'numbers.created_at',
                    'numbers.updated_at',
                    'numbers.deleted_at'
                )
                ->where('numbers.verification_status',$verification_status)
                ->where('numbers.reference_type',$reference_type)
                ->where('numbers.status','Active')
                ->paginate();

        }elseif($verification_status!=null){

            $sqlData = DB::table('numbers')
                ->join('country_codes', 'numbers.country_code_id', '=', 'country_codes.id')
                ->select(
                    'numbers.id as id',
                    'numbers.country_code_id as country_code_id',
                    'country_codes.country_id as country_id',
                    'country_codes.code as country_code',

                    'numbers.reference_id as reference_id',
                    'numbers.reference_type as reference_type',
                    'numbers.title as title',
                    'numbers.number as number',
                    'numbers.verification_code as verification_code',
                    'numbers.verification_status as verification_status',
                    'numbers.status',
                    'numbers.order_by',
                    'numbers.created_by_comp_id',
                    'numbers.created_by_user_id',
                    'numbers.updated_by_user_id',
                    'numbers.deleted_by_user_id',
                    'numbers.created_at',
                    'numbers.updated_at',
                    'numbers.deleted_at'
                )
                ->where('numbers.verification_status',$verification_status)
                ->where('numbers.status','Active')
                ->paginate();

        }elseif ($id==null && $reference_id!=null && $reference_type==null){

            $sqlData = DB::table('numbers')
                ->join('country_codes', 'numbers.country_code_id', '=', 'country_codes.id')
                ->select(
                    'numbers.id as id',
                    'numbers.country_code_id as country_code_id',
                    'country_codes.country_id as country_id',
                    'country_codes.code as country_code',

                    'numbers.reference_id as reference_id',
                    'numbers.reference_type as reference_type',
                    'numbers.title as title',
                    'numbers.number as number',
                    'numbers.verification_code as verification_code',
                    'numbers.verification_status as verification_status',
                    'numbers.status',
                    'numbers.order_by',
                    'numbers.created_by_comp_id',
                    'numbers.created_by_user_id',
                    'numbers.updated_by_user_id',
                    'numbers.deleted_by_user_id',
                    'numbers.created_at',
                    'numbers.updated_at',
                    'numbers.deleted_at'
                )
                ->where('numbers.reference_id',$reference_id)
                ->orderBy('numbers.order_by', 'ASC')
                ->where('numbers.status','Active')
                ->paginate();

        }elseif ($id==null && $reference_id==null && $reference_type!=null){

            $sqlData = DB::table('numbers')
                ->join('country_codes', 'numbers.country_code_id', '=', 'country_codes.id')
                ->select(
                    'numbers.id as id',
                    'numbers.country_code_id as country_code_id',
                    'country_codes.country_id as country_id',
                    'country_codes.code as country_code',

                    'numbers.reference_id as reference_id',
                    'numbers.reference_type as reference_type',
                    'numbers.title as title',
                    'numbers.number as number',
                    'numbers.verification_code as verification_code',
                    'numbers.verification_status as verification_status',
                    'numbers.status',
                    'numbers.order_by',
                    'numbers.created_by_comp_id',
                    'numbers.created_by_user_id',
                    'numbers.updated_by_user_id',
                    'numbers.deleted_by_user_id',
                    'numbers.created_at',
                    'numbers.updated_at',
                    'numbers.deleted_at'
                )
                ->where('numbers.reference_type',$reference_type)
                ->orderBy('numbers.order_by', 'ASC')
                ->where('numbers.status','Active')
                ->paginate();

        }elseif ($id==null && $reference_id!=null && $reference_type!=null){

            $sqlData = DB::table('numbers')
                ->join('country_codes', 'numbers.country_code_id', '=', 'country_codes.id')
                ->select(
                    'numbers.id as id',
                    'numbers.country_code_id as country_code_id',
                    'country_codes.country_id as country_id',
                    'country_codes.code as country_code',

                    'numbers.reference_id as reference_id',
                    'numbers.reference_type as reference_type',
                    'numbers.title as title',
                    'numbers.number as number',
                    'numbers.verification_code as verification_code',
                    'numbers.verification_status as verification_status',
                    'numbers.status',
                    'numbers.order_by',
                    'numbers.created_by_comp_id',
                    'numbers.created_by_user_id',
                    'numbers.updated_by_user_id',
                    'numbers.deleted_by_user_id',
                    'numbers.created_at',
                    'numbers.updated_at',
                    'numbers.deleted_at'
                )
                ->where('numbers.reference_id',$reference_id)
                ->where('numbers.reference_type',$reference_type)
                ->orderBy('numbers.order_by', 'ASC')
                ->where('numbers.status','Active')
                ->paginate();

        }else{
            $sqlData = DB::table('numbers')
                ->join('country_codes', 'numbers.country_code_id', '=', 'country_codes.id')
                ->select(
                    'numbers.id as id',
                    'numbers.country_code_id as country_code_id',
                    'country_codes.country_id as country_id',
                    'country_codes.code as country_code',

                    'numbers.reference_id as reference_id',
                    'numbers.reference_type as reference_type',
                    'numbers.title as title',
                    'numbers.number as number',
                    'numbers.verification_code as verification_code',
                    'numbers.verification_status as verification_status',
                    'numbers.status',
                    'numbers.order_by',
                    'numbers.created_by_comp_id',
                    'numbers.created_by_user_id',
                    'numbers.updated_by_user_id',
                    'numbers.deleted_by_user_id',
                    'numbers.created_at',
                    'numbers.updated_at',
                    'numbers.deleted_at'
                )
                ->orderBy('numbers.order_by', 'ASC')
                ->where('numbers.status','Active')
                ->paginate();
        }

        return $sqlData;

    }

    public function GetEmailSqlData($request, $id, $reference_id, $reference_type, $verification_status){


        if($id!=null){

            $sqlData = DB::table('emails')
                ->select(
                    'emails.id as id',
                    'emails.reference_id as reference_id',
                    'emails.reference_type as reference_type',
                    'emails.title as title',
                    'emails.email as email',
                    'emails.verification_code as verification_code',
                    'emails.verification_status as verification_status',
                    'emails.status',
                    'emails.order_by',
                    'emails.created_by_comp_id',
                    'emails.created_by_user_id',
                    'emails.updated_by_user_id',
                    'emails.deleted_by_user_id',
                    'emails.created_at',
                    'emails.updated_at',
                    'emails.deleted_at'
                )
                ->where('emails.id',$id)
                ->where('emails.status','Active')
                ->first();

        }elseif($verification_status!=null && $reference_type!=null){

            $sqlData = DB::table('emails')
                ->select(
                    'emails.id as id',
                    'emails.reference_id as reference_id',
                    'emails.reference_type as reference_type',
                    'emails.title as title',
                    'emails.email as email',
                    'emails.verification_code as verification_code',
                    'emails.verification_status as verification_status',
                    'emails.status',
                    'emails.order_by',
                    'emails.created_by_comp_id',
                    'emails.created_by_user_id',
                    'emails.updated_by_user_id',
                    'emails.deleted_by_user_id',
                    'emails.created_at',
                    'emails.updated_at',
                    'emails.deleted_at'
                )
                ->where('emails.verification_status',$verification_status)
                ->where('emails.reference_type',$reference_type)
                ->where('emails.status','Active')
                ->paginate();

        }elseif($verification_status!=null){

            $sqlData = DB::table('emails')
                ->select(
                    'emails.id as id',
                    'emails.reference_id as reference_id',
                    'emails.reference_type as reference_type',
                    'emails.title as title',
                    'emails.email as email',
                    'emails.verification_code as verification_code',
                    'emails.verification_status as verification_status',
                    'emails.status',
                    'emails.order_by',
                    'emails.created_by_comp_id',
                    'emails.created_by_user_id',
                    'emails.updated_by_user_id',
                    'emails.deleted_by_user_id',
                    'emails.created_at',
                    'emails.updated_at',
                    'emails.deleted_at'
                )
                ->where('emails.verification_status',$verification_status)
                ->where('emails.status','Active')
                ->paginate();

        }elseif ($id==null && $reference_id!=null && $reference_type==null){

            $sqlData = DB::table('emails')
                ->select(
                    'emails.id as id',
                    'emails.reference_id as reference_id',
                    'emails.reference_type as reference_type',
                    'emails.title as title',
                    'emails.email as email',
                    'emails.verification_code as verification_code',
                    'emails.verification_status as verification_status',
                    'emails.status',
                    'emails.order_by',
                    'emails.created_by_comp_id',
                    'emails.created_by_user_id',
                    'emails.updated_by_user_id',
                    'emails.deleted_by_user_id',
                    'emails.created_at',
                    'emails.updated_at',
                    'emails.deleted_at'
                )
                ->where('emails.reference_id',$reference_id)
                ->orderBy('emails.order_by', 'ASC')
                ->where('emails.status','Active')
                ->paginate();

        }elseif ($id==null && $reference_id==null && $reference_type!=null){

            $sqlData = DB::table('emails')
                ->select(
                    'emails.id as id',
                    'emails.reference_id as reference_id',
                    'emails.reference_type as reference_type',
                    'emails.title as title',
                    'emails.email as email',
                    'emails.verification_code as verification_code',
                    'emails.verification_status as verification_status',
                    'emails.status',
                    'emails.order_by',
                    'emails.created_by_comp_id',
                    'emails.created_by_user_id',
                    'emails.updated_by_user_id',
                    'emails.deleted_by_user_id',
                    'emails.created_at',
                    'emails.updated_at',
                    'emails.deleted_at'
                )
                ->where('emails.reference_type',$reference_type)
                ->orderBy('emails.order_by', 'ASC')
                ->where('emails.status','Active')
                ->paginate();

        }elseif ($id==null && $reference_id!=null && $reference_type!=null){

            $sqlData = DB::table('emails')
                ->select(
                    'emails.id as id',
                    'emails.reference_id as reference_id',
                    'emails.reference_type as reference_type',
                    'emails.title as title',
                    'emails.email as email',
                    'emails.verification_code as verification_code',
                    'emails.verification_status as verification_status',
                    'emails.status',
                    'emails.order_by',
                    'emails.created_by_comp_id',
                    'emails.created_by_user_id',
                    'emails.updated_by_user_id',
                    'emails.deleted_by_user_id',
                    'emails.created_at',
                    'emails.updated_at',
                    'emails.deleted_at'
                )
                ->where('emails.reference_id',$reference_id)
                ->where('emails.reference_type',$reference_type)
                ->orderBy('emails.order_by', 'ASC')
                ->where('emails.status','Active')
                ->paginate();

        }else{
            $sqlData = DB::table('emails')
                ->select(
                    'emails.id as id',
                    'emails.reference_id as reference_id',
                    'emails.reference_type as reference_type',
                    'emails.title as title',
                    'emails.email as email',
                    'emails.verification_code as verification_code',
                    'emails.verification_status as verification_status',
                    'emails.status',
                    'emails.order_by',
                    'emails.created_by_comp_id',
                    'emails.created_by_user_id',
                    'emails.updated_by_user_id',
                    'emails.deleted_by_user_id',
                    'emails.created_at',
                    'emails.updated_at',
                    'emails.deleted_at'
                )
                ->orderBy('emails.order_by', 'ASC')
                ->where('emails.status','Active')
                ->paginate();
        }


        return $sqlData;

    }

    public function GetSEOSqlData($request, $id, $reference_id, $reference_type){

        if($id!=null && $reference_id==null && $reference_type==null){

            $sqlData = DB::table('seos')
                ->select(
                    'seos.id as id',
                    'seos.reference_id as reference_id',
                    'seos.reference_type as reference_type',
                    'seos.title as title',
                    'seos.description as description',
                    'seos.keywords as keywords',
                    'seos.author as author',
                    'seos.status',
                    'seos.order_by',
                    'seos.created_by_comp_id',
                    'seos.created_by_user_id',
                    'seos.updated_by_user_id',
                    'seos.deleted_by_user_id',
                    'seos.created_at',
                    'seos.updated_at',
                    'seos.deleted_at'
                )
                ->where('seos.id',$id)
                ->where('seos.status','Active')
                ->first();

        }elseif($id!=null){

            $sqlData = DB::table('seos')
                ->select(
                    'seos.id as id',
                    'seos.reference_id as reference_id',
                    'seos.reference_type as reference_type',
                    'seos.title as title',
                    'seos.description as description',
                    'seos.keywords as keywords',
                    'seos.author as author',
                    'seos.status',
                    'seos.order_by',
                    'seos.created_by_comp_id',
                    'seos.created_by_user_id',
                    'seos.updated_by_user_id',
                    'seos.deleted_by_user_id',
                    'seos.created_at',
                    'seos.updated_at',
                    'seos.deleted_at'
                )
                ->where('seos.id',$id)
                ->where('seos.status','Active')
                ->paginate();

        }elseif ($id==null && $reference_id!=null && $reference_type==null){

            $sqlData = DB::table('seos')
                ->select(
                    'seos.id as id',
                    'seos.reference_id as reference_id',
                    'seos.reference_type as reference_type',
                    'seos.title as title',
                    'seos.description as description',
                    'seos.keywords as keywords',
                    'seos.author as author',
                    'seos.status',
                    'seos.order_by',
                    'seos.created_by_comp_id',
                    'seos.created_by_user_id',
                    'seos.updated_by_user_id',
                    'seos.deleted_by_user_id',
                    'seos.created_at',
                    'seos.updated_at',
                    'seos.deleted_at'
                )
                ->where('seos.reference_id',$reference_id)
                ->orderBy('seos.order_by', 'ASC')
                ->where('seos.status','Active')
                ->paginate();

        }elseif ($id==null && $reference_id==null && $reference_type!=null){

            $sqlData = DB::table('seos')
                ->select(
                    'seos.id as id',
                    'seos.reference_id as reference_id',
                    'seos.reference_type as reference_type',
                    'seos.title as title',
                    'seos.description as description',
                    'seos.keywords as keywords',
                    'seos.author as author',
                    'seos.status',
                    'seos.order_by',
                    'seos.created_by_comp_id',
                    'seos.created_by_user_id',
                    'seos.updated_by_user_id',
                    'seos.deleted_by_user_id',
                    'seos.created_at',
                    'seos.updated_at',
                    'seos.deleted_at'
                )
                ->where('seos.reference_type',$reference_type)
                ->orderBy('seos.order_by', 'ASC')
                ->where('seos.status','Active')
                ->paginate();

        }elseif ($id==null && $reference_id!=null && $reference_type!=null){

            $sqlData = DB::table('seos')
                ->select(
                    'seos.id as id',
                    'seos.reference_id as reference_id',
                    'seos.reference_type as reference_type',
                    'seos.title as title',
                    'seos.description as description',
                    'seos.keywords as keywords',
                    'seos.author as author',
                    'seos.status',
                    'seos.order_by',
                    'seos.created_by_comp_id',
                    'seos.created_by_user_id',
                    'seos.updated_by_user_id',
                    'seos.deleted_by_user_id',
                    'seos.created_at',
                    'seos.updated_at',
                    'seos.deleted_at'
                )
                ->where('seos.reference_id',$reference_id)
                ->where('seos.reference_type',$reference_type)
                ->orderBy('seos.order_by', 'ASC')
                ->where('seos.status','Active')
                ->paginate();

        }else{

            $sqlData = DB::table('seos')
                ->select(
                    'seos.id as id',
                    'seos.reference_id as reference_id',
                    'seos.reference_type as reference_type',
                    'seos.title as title',
                    'seos.description as description',
                    'seos.keywords as keywords',
                    'seos.author as author',
                    'seos.status',
                    'seos.order_by',
                    'seos.created_by_comp_id',
                    'seos.created_by_user_id',
                    'seos.updated_by_user_id',
                    'seos.deleted_by_user_id',
                    'seos.created_at',
                    'seos.updated_at',
                    'seos.deleted_at'
                )
                ->orderBy('seos.order_by', 'ASC')
                ->where('seos.status','Active')
                ->paginate();
        }

        return $sqlData;

    }




    public function GetLikesSqlData($request, $id, $reference_id, $reference_type, $like_type, $status, $order_by, $created_by_comp_id, $created_by_user_id, $updated_by_user_id, $deleted_by_user_id, $created_at, $updated_at, $deleted_at, $session_user_id, $no_of_records, $page_no){

        if($id!=null && $reference_id==null && $reference_type==null && $like_type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records==null && $page_no==null){

            //$id!=null

            $sqlData=DB::table('likes')
//                ->leftJoin('users', 'likes.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'likes.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'likes.id as id',
                    'likes.reference_id as reference_id',
                    'likes.reference_type as reference_type',
                    'likes.like_type as like_type',
                    'likes.status as status',
                    'likes.order_by as order_by',

                    'likes.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'likes.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'likes.updated_by_user_id as updated_by_user_id',
                    'likes.deleted_by_user_id as deleted_by_user_id',
                    'likes.created_at as created_at',
                    'likes.updated_at as updated_at',
                    'likes.deleted_at as deleted_at'

                )
                ->where('likes.id',$id)
                ->first();

        }else if($id==null && $reference_id!=null && $reference_type!=null && $like_type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records==null && $page_no==null){

            //$reference_id!=null && $reference_type!=null

            $sqlData=DB::table('likes')
//                ->leftJoin('users', 'likes.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'likes.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'likes.id as id',
                    'likes.reference_id as reference_id',
                    'likes.reference_type as reference_type',
                    'likes.like_type as like_type',
                    'likes.status as status',
                    'likes.order_by as order_by',

                    'likes.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'likes.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'likes.updated_by_user_id as updated_by_user_id',
                    'likes.deleted_by_user_id as deleted_by_user_id',
                    'likes.created_at as created_at',
                    'likes.updated_at as updated_at',
                    'likes.deleted_at as deleted_at'

                )
                ->where('likes.reference_id',$reference_id)
                ->where('likes.reference_type',$reference_type)
                ->orderBy('likes.created_at', 'DESC')
                ->paginate();

        }else if($id==null && $reference_id!=null && $reference_type!=null && $like_type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records!=null && $page_no==null){

            //$reference_id!=null && $reference_type!=null && $no_of_records!=null

            $sqlData=DB::table('likes')
//                ->leftJoin('users', 'likes.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'likes.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'likes.id as id',
                    'likes.reference_id as reference_id',
                    'likes.reference_type as reference_type',
                    'likes.like_type as like_type',
                    'likes.status as status',
                    'likes.order_by as order_by',

                    'likes.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'likes.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'likes.updated_by_user_id as updated_by_user_id',
                    'likes.deleted_by_user_id as deleted_by_user_id',
                    'likes.created_at as created_at',
                    'likes.updated_at as updated_at',
                    'likes.deleted_at as deleted_at'

                )
                ->where('likes.reference_id',$reference_id)
                ->where('likes.reference_type',$reference_type)
                ->orderBy('likes.created_at', 'DESC')
                ->paginate($no_of_records);

        }else if($id==null && $reference_id!=null && $reference_type!=null && $like_type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records!=null && $page_no!=null){

            //$reference_id!=null && $reference_type!=null && $no_of_records!=null &&  && $page_no!=null

            $sqlData=DB::table('likes')
//                ->leftJoin('users', 'likes.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'likes.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'likes.id as id',
                    'likes.reference_id as reference_id',
                    'likes.reference_type as reference_type',
                    'likes.like_type as like_type',
                    'likes.status as status',
                    'likes.order_by as order_by',

                    'likes.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'likes.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'likes.updated_by_user_id as updated_by_user_id',
                    'likes.deleted_by_user_id as deleted_by_user_id',
                    'likes.created_at as created_at',
                    'likes.updated_at as updated_at',
                    'likes.deleted_at as deleted_at'

                )
                ->where('likes.reference_id',$reference_id)
                ->where('likes.reference_type',$reference_type)
                ->orderBy('likes.created_at', 'DESC')
                ->paginate($no_of_records, ['*'], 'page', $page_no);

        }else if($id==null && $reference_id!=null && $reference_type!=null && $like_type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id!=null && $no_of_records!=null && $page_no!=null){

            //$reference_id!=null && $reference_type!=null && $session_user_id!=null && $no_of_records!=null && $page_no!=null

            $sqlData=DB::table('likes')
//                ->leftJoin('users', 'likes.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'likes.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'likes.id as id',
                    'likes.reference_id as reference_id',
                    'likes.reference_type as reference_type',
                    'likes.like_type as like_type',
                    'likes.status as status',
                    'likes.order_by as order_by',

                    'likes.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'likes.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'likes.updated_by_user_id as updated_by_user_id',
                    'likes.deleted_by_user_id as deleted_by_user_id',
                    'likes.created_at as created_at',
                    'likes.updated_at as updated_at',
                    'likes.deleted_at as deleted_at'

                )
                ->where('likes.reference_id',$reference_id)
                ->where('likes.reference_type',$reference_type)
                ->where('likes.created_by_user_id',$session_user_id)
                ->orderBy('likes.created_at', 'DESC')
                ->paginate($no_of_records, ['*'], 'page', $page_no);

        }else{

            $sqlData=DB::table('likes')
//                ->leftJoin('users', 'likes.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'likes.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'likes.id as id',
                    'likes.reference_id as reference_id',
                    'likes.reference_type as reference_type',
                    'likes.like_type as like_type',
                    'likes.status as status',
                    'likes.order_by as order_by',

                    'likes.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'likes.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'likes.updated_by_user_id as updated_by_user_id',
                    'likes.deleted_by_user_id as deleted_by_user_id',
                    'likes.created_at as created_at',
                    'likes.updated_at as updated_at',
                    'likes.deleted_at as deleted_at'

                )
                ->orderBy('likes.created_at', 'DESC')
                ->paginate();

        }

        return $sqlData;

    }

    public function GetSavesSqlData($request, $id, $reference_id, $reference_type, $status, $order_by, $created_by_comp_id, $created_by_user_id, $updated_by_user_id, $deleted_by_user_id, $created_at, $updated_at, $deleted_at, $session_user_id, $no_of_records, $page_no){

        if($id!=null && $reference_id==null && $reference_type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records==null && $page_no==null){

            //$id!=null

            $sqlData=DB::table('saves')
//                ->leftJoin('users', 'saves.created_by_user_id', '=', 'users.id')
                ->select(
                    'saves.id as id',
                    'saves.reference_id as reference_id',
                    'saves.reference_type as reference_type',

                    'saves.status as status',
                    'saves.order_by as order_by',

                    'saves.created_by_comp_id as created_by_comp_id',
                    'saves.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'saves.updated_by_user_id as updated_by_user_id',
                    'saves.deleted_by_user_id as deleted_by_user_id',
                    'saves.created_at as created_at',
                    'saves.updated_at as updated_at',
                    'saves.deleted_at as deleted_at'

                )
                ->where('saves.id',$id)
                ->first();

        }elseif ($id==null && $reference_id!=null && $reference_type!=null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records==null && $page_no==null){

            //$reference_id!=null && $reference_type!=null

            $sqlData=DB::table('saves')
//                ->leftJoin('users', 'saves.created_by_user_id', '=', 'users.id')
                ->select(
                    'saves.id as id',
                    'saves.reference_id as reference_id',
                    'saves.reference_type as reference_type',

                    'saves.status as status',
                    'saves.order_by as order_by',

                    'saves.created_by_comp_id as created_by_comp_id',
                    'saves.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'saves.updated_by_user_id as updated_by_user_id',
                    'saves.deleted_by_user_id as deleted_by_user_id',
                    'saves.created_at as created_at',
                    'saves.updated_at as updated_at',
                    'saves.deleted_at as deleted_at'

                )
                ->where('saves.reference_id',$reference_id)
                ->where('saves.reference_type',$reference_type)
                ->orderBy('saves.created_at', 'DESC')
                ->where('saves.status','Active')
                ->paginate();

        }elseif ($id==null && $reference_id!=null && $reference_type!=null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records!=null && $page_no==null){

            //$reference_id!=null && $reference_type!=null && $no_of_records!=null

            $sqlData=DB::table('saves')
//                ->leftJoin('users', 'saves.created_by_user_id', '=', 'users.id')
                ->select(
                    'saves.id as id',
                    'saves.reference_id as reference_id',
                    'saves.reference_type as reference_type',

                    'saves.status as status',
                    'saves.order_by as order_by',

                    'saves.created_by_comp_id as created_by_comp_id',
                    'saves.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'saves.updated_by_user_id as updated_by_user_id',
                    'saves.deleted_by_user_id as deleted_by_user_id',
                    'saves.created_at as created_at',
                    'saves.updated_at as updated_at',
                    'saves.deleted_at as deleted_at'

                )
                ->where('saves.reference_id',$reference_id)
                ->where('saves.reference_type',$reference_type)
                ->orderBy('saves.created_at', 'DESC')
                ->where('saves.status','Active')
                ->paginate($no_of_records);

        }elseif ($id==null && $reference_id!=null && $reference_type!=null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records!=null && $page_no!=null){

            //$reference_id!=null && $reference_type!=null && $no_of_records!=null &&  && $page_no!=null


            $sqlData=DB::table('saves')
//                ->leftJoin('users', 'saves.created_by_user_id', '=', 'users.id')
                ->select(
                    'saves.id as id',
                    'saves.reference_id as reference_id',
                    'saves.reference_type as reference_type',

                    'saves.status as status',
                    'saves.order_by as order_by',

                    'saves.created_by_comp_id as created_by_comp_id',
                    'saves.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'saves.updated_by_user_id as updated_by_user_id',
                    'saves.deleted_by_user_id as deleted_by_user_id',
                    'saves.created_at as created_at',
                    'saves.updated_at as updated_at',
                    'saves.deleted_at as deleted_at'

                )
                ->where('saves.reference_id',$reference_id)
                ->where('saves.reference_type',$reference_type)
                ->orderBy('saves.created_at', 'DESC')
                ->where('saves.status','Active')
                ->paginate($no_of_records, ['*'], 'page', $page_no);

        }elseif ($id==null && $reference_id!=null && $reference_type!=null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id!=null && $no_of_records!=null && $page_no!=null){

            //$reference_id!=null && $reference_type!=null && $session_user_id!=null && $no_of_records!=null && $page_no!=null


            $sqlData=DB::table('saves')
//                ->leftJoin('users', 'saves.created_by_user_id', '=', 'users.id')
                ->select(
                    'saves.id as id',
                    'saves.reference_id as reference_id',
                    'saves.reference_type as reference_type',

                    'saves.status as status',
                    'saves.order_by as order_by',

                    'saves.created_by_comp_id as created_by_comp_id',
                    'saves.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'saves.updated_by_user_id as updated_by_user_id',
                    'saves.deleted_by_user_id as deleted_by_user_id',
                    'saves.created_at as created_at',
                    'saves.updated_at as updated_at',
                    'saves.deleted_at as deleted_at'

                )
                ->where('saves.reference_id',$reference_id)
                ->where('saves.reference_type',$reference_type)
                ->where('saves.created_by_user_id',$session_user_id)
                ->orderBy('saves.created_at', 'DESC')
                ->where('saves.status','Active')
                ->paginate($no_of_records, ['*'], 'page', $page_no);

        }else{


            $sqlData=DB::table('saves')
//                ->leftJoin('users', 'saves.created_by_user_id', '=', 'users.id')
                ->select(
                    'saves.id as id',
                    'saves.reference_id as reference_id',
                    'saves.reference_type as reference_type',

                    'saves.status as status',
                    'saves.order_by as order_by',

                    'saves.created_by_comp_id as created_by_comp_id',
                    'saves.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'saves.updated_by_user_id as updated_by_user_id',
                    'saves.deleted_by_user_id as deleted_by_user_id',
                    'saves.created_at as created_at',
                    'saves.updated_at as updated_at',
                    'saves.deleted_at as deleted_at'

                )
                ->orderBy('saves.created_at', 'DESC')
                ->where('saves.status','Active')
                ->paginate();

        }


        return $sqlData;

    }

    public function GetCommentsSqlData($request, $id, $reference_id, $reference_type, $parent_comment_id, $text, $status, $order_by, $created_by_comp_id, $created_by_user_id, $updated_by_user_id, $deleted_by_user_id, $created_at, $updated_at, $deleted_at, $session_user_id, $no_of_records, $page_no){

        if($id!=null && $reference_id==null && $reference_type==null && $parent_comment_id==null && $text==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records==null && $page_no==null){

            //$id!=null

            $sqlData=DB::table('comments')
//                ->leftJoin('users', 'comments.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'comments.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'comments.id as id',
                    'comments.reference_id as reference_id',
                    'comments.reference_type as reference_type',
                    'comments.parent_comment_id as parent_comment_id',
                    'comments.text as text',
                    'comments.no_of_like as no_of_like',

                    'comments.status as status',
                    'comments.order_by as order_by',

                    'comments.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'comments.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',
//                    'users.fcm_token as user_fcm_token',

                    'comments.updated_by_user_id as updated_by_user_id',
                    'comments.deleted_by_user_id as deleted_by_user_id',
                    'comments.created_at as created_at',
                    'comments.updated_at as updated_at',
                    'comments.deleted_at as deleted_at'

                )
                ->where('comments.id',$id)
                ->first();

        }else if($id==null && $reference_id!=null && $reference_type!=null && $parent_comment_id==null && $text==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records==null && $page_no==null){

            //$reference_id!=null && $reference_type!=null

            $sqlData=DB::table('comments')
//                ->leftJoin('users', 'comments.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'comments.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'comments.id as id',
                    'comments.reference_id as reference_id',
                    'comments.reference_type as reference_type',
                    'comments.parent_comment_id as parent_comment_id',
                    'comments.text as text',
                    'comments.no_of_like as no_of_like',

                    'comments.status as status',
                    'comments.order_by as order_by',

                    'comments.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'comments.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',
//                    'users.fcm_token as user_fcm_token',

                    'comments.updated_by_user_id as updated_by_user_id',
                    'comments.deleted_by_user_id as deleted_by_user_id',
                    'comments.created_at as created_at',
                    'comments.updated_at as updated_at',
                    'comments.deleted_at as deleted_at'

                )
                ->where('comments.reference_id',$reference_id)
                ->where('comments.reference_type',$reference_type)
                ->paginate();

        }else if($id==null && $reference_id!=null && $reference_type!=null && $parent_comment_id==null && $text==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records!=null && $page_no==null){

            //$reference_id!=null && $reference_type!=null && $no_of_records!=null

            $sqlData=DB::table('comments')
//                ->leftJoin('users', 'comments.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'comments.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'comments.id as id',
                    'comments.reference_id as reference_id',
                    'comments.reference_type as reference_type',
                    'comments.parent_comment_id as parent_comment_id',
                    'comments.text as text',
                    'comments.no_of_like as no_of_like',

                    'comments.status as status',
                    'comments.order_by as order_by',

                    'comments.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'comments.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',
//                    'users.fcm_token as user_fcm_token',

                    'comments.updated_by_user_id as updated_by_user_id',
                    'comments.deleted_by_user_id as deleted_by_user_id',
                    'comments.created_at as created_at',
                    'comments.updated_at as updated_at',
                    'comments.deleted_at as deleted_at'

                )
                ->where('comments.reference_id',$reference_id)
                ->where('comments.reference_type',$reference_type)
                ->paginate($no_of_records);

        }else if($id==null && $reference_id!=null && $reference_type!=null && $parent_comment_id==null && $text==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records!=null && $page_no!=null){

            //$reference_id!=null && $reference_type!=null && $no_of_records!=null &&  && $page_no!=null

            $sqlData=DB::table('comments')
//                ->leftJoin('users', 'comments.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'comments.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'comments.id as id',
                    'comments.reference_id as reference_id',
                    'comments.reference_type as reference_type',
                    'comments.parent_comment_id as parent_comment_id',
                    'comments.text as text',
                    'comments.no_of_like as no_of_like',

                    'comments.status as status',
                    'comments.order_by as order_by',

                    'comments.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'comments.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',
//                    'users.fcm_token as user_fcm_token',

                    'comments.updated_by_user_id as updated_by_user_id',
                    'comments.deleted_by_user_id as deleted_by_user_id',
                    'comments.created_at as created_at',
                    'comments.updated_at as updated_at',
                    'comments.deleted_at as deleted_at'

                )
                ->where('comments.reference_id',$reference_id)
                ->where('comments.reference_type',$reference_type)
                ->paginate($no_of_records, ['*'], 'page', $page_no);

        }else if($id==null && $reference_id!=null && $reference_type!=null && $parent_comment_id==null && $text==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id!=null && $no_of_records!=null && $page_no!=null){

            //$reference_id!=null && $reference_type!=null && $session_user_id!=null && $no_of_records!=null && $page_no!=null

            $sqlData=DB::table('comments')
//                ->leftJoin('users', 'comments.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'comments.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'comments.id as id',
                    'comments.reference_id as reference_id',
                    'comments.reference_type as reference_type',
                    'comments.parent_comment_id as parent_comment_id',
                    'comments.text as text',
                    'comments.no_of_like as no_of_like',

                    'comments.status as status',
                    'comments.order_by as order_by',

                    'comments.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'comments.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',
//                    'users.fcm_token as user_fcm_token',

                    'comments.updated_by_user_id as updated_by_user_id',
                    'comments.deleted_by_user_id as deleted_by_user_id',
                    'comments.created_at as created_at',
                    'comments.updated_at as updated_at',
                    'comments.deleted_at as deleted_at'

                )
                ->where('comments.reference_id',$reference_id)
                ->where('comments.reference_type',$reference_type)
                ->where('comments.created_by_user_id',$session_user_id)
                ->paginate($no_of_records, ['*'], 'page', $page_no);

        }else if($id==null && $reference_id!=null && $reference_type!=null && $parent_comment_id!=null && $text==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records==null && $page_no==null){

            //$reference_id!=null && $reference_type!=null && $parent_comment_id!=null

            $sqlData=DB::table('comments')
//                ->leftJoin('users', 'comments.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'comments.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'comments.id as id',
                    'comments.reference_id as reference_id',
                    'comments.reference_type as reference_type',
                    'comments.parent_comment_id as parent_comment_id',
                    'comments.text as text',
                    'comments.no_of_like as no_of_like',

                    'comments.status as status',
                    'comments.order_by as order_by',

                    'comments.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'comments.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',
//                    'users.fcm_token as user_fcm_token',

                    'comments.updated_by_user_id as updated_by_user_id',
                    'comments.deleted_by_user_id as deleted_by_user_id',
                    'comments.created_at as created_at',
                    'comments.updated_at as updated_at',
                    'comments.deleted_at as deleted_at'

                )
                ->where('comments.reference_id',$reference_id)
                ->where('comments.reference_type',$reference_type)
                ->where('comments.parent_comment_id',$parent_comment_id)
                ->paginate();

        }else{

            $sqlData=DB::table('comments')
//                ->leftJoin('users', 'comments.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'comments.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'comments.id as id',
                    'comments.reference_id as reference_id',
                    'comments.reference_type as reference_type',
                    'comments.parent_comment_id as parent_comment_id',
                    'comments.text as text',
                    'comments.no_of_like as no_of_like',

                    'comments.status as status',
                    'comments.order_by as order_by',

                    'comments.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',

                    'comments.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',
//                    'users.fcm_token as user_fcm_token',

                    'comments.updated_by_user_id as updated_by_user_id',
                    'comments.deleted_by_user_id as deleted_by_user_id',
                    'comments.created_at as created_at',
                    'comments.updated_at as updated_at',
                    'comments.deleted_at as deleted_at'

                )
                ->paginate();

        }

        return $sqlData;

    }

    public function GetInterestsSqlData($request, $id, $reference_id, $reference_type, $type, $status, $order_by, $created_by_comp_id, $created_by_user_id, $updated_by_user_id, $deleted_by_user_id, $created_at, $updated_at, $deleted_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $reference_id==null && $reference_type==null && $type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            //$id!=null

            $sqlData=DB::table('interests')
//                ->leftJoin('users', 'interests.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'interests.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'interests.id as id',
                    'interests.reference_id as reference_id',
                    'interests.reference_type as reference_type',
                    'interests.type as type',

                    'interests.status as status',
                    'interests.order_by as order_by',

                    'interests.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',


                    'interests.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'interests.updated_by_user_id as updated_by_user_id',
                    'interests.deleted_by_user_id as deleted_by_user_id',
                    'interests.created_at as created_at',
                    'interests.updated_at as updated_at',
                    'interests.deleted_at as deleted_at'

                )
                ->where('interests.id',$id)
                ->first();

        }elseif ($id==null && $reference_id!=null && $reference_type!=null && $type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            //$reference_id!=null && $reference_type!=null

            $sqlData=DB::table('interests')
//                ->leftJoin('users', 'interests.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'interests.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'interests.id as id',
                    'interests.reference_id as reference_id',
                    'interests.reference_type as reference_type',
                    'interests.type as type',

                    'interests.status as status',
                    'interests.order_by as order_by',

                    'interests.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',


                    'interests.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'interests.updated_by_user_id as updated_by_user_id',
                    'interests.deleted_by_user_id as deleted_by_user_id',
                    'interests.created_at as created_at',
                    'interests.updated_at as updated_at',
                    'interests.deleted_at as deleted_at'

                )
                ->where('interests.reference_id',$reference_id)
                ->where('interests.reference_type',$reference_type)
                ->orderBy('interests.created_at', 'DESC')
                ->where('interests.status','Active')
                ->paginate();

        }elseif ($id==null && $reference_id!=null && $reference_type!=null && $type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records!=null && $page_no==null && $record_type==null){

            //$reference_id!=null && $reference_type!=null && $no_of_records!=null

            $sqlData=DB::table('interests')
//                ->leftJoin('users', 'interests.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'interests.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'interests.id as id',
                    'interests.reference_id as reference_id',
                    'interests.reference_type as reference_type',
                    'interests.type as type',

                    'interests.status as status',
                    'interests.order_by as order_by',

                    'interests.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',


                    'interests.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'interests.updated_by_user_id as updated_by_user_id',
                    'interests.deleted_by_user_id as deleted_by_user_id',
                    'interests.created_at as created_at',
                    'interests.updated_at as updated_at',
                    'interests.deleted_at as deleted_at'

                )
                ->where('interests.reference_id',$reference_id)
                ->where('interests.reference_type',$reference_type)
                ->orderBy('interests.created_at', 'DESC')
                ->where('interests.status','Active')
                ->paginate($no_of_records);

        }elseif ($id==null && $reference_id!=null && $reference_type!=null && $type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records!=null && $page_no!=null && $record_type==null){

            //$reference_id!=null && $reference_type!=null && $no_of_records!=null &&  && $page_no!=null

            $sqlData=DB::table('interests')
//                ->leftJoin('users', 'interests.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'interests.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'interests.id as id',
                    'interests.reference_id as reference_id',
                    'interests.reference_type as reference_type',
                    'interests.type as type',

                    'interests.status as status',
                    'interests.order_by as order_by',

                    'interests.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',


                    'interests.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'interests.updated_by_user_id as updated_by_user_id',
                    'interests.deleted_by_user_id as deleted_by_user_id',
                    'interests.created_at as created_at',
                    'interests.updated_at as updated_at',
                    'interests.deleted_at as deleted_at'

                )
                ->where('interests.reference_id',$reference_id)
                ->where('interests.reference_type',$reference_type)
                ->orderBy('interests.created_at', 'DESC')
                ->where('interests.status','Active')
                ->paginate($no_of_records, ['*'], 'page', $page_no);

        }elseif ($id==null && $reference_id!=null && $reference_type!=null && $type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id!=null && $no_of_records!=null && $page_no!=null && $record_type==null){

            //$reference_id!=null && $reference_type!=null && $session_user_id!=null && $no_of_records!=null && $page_no!=null

            $sqlData=DB::table('interests')
//                ->leftJoin('users', 'interests.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'interests.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'interests.id as id',
                    'interests.reference_id as reference_id',
                    'interests.reference_type as reference_type',
                    'interests.type as type',

                    'interests.status as status',
                    'interests.order_by as order_by',

                    'interests.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',


                    'interests.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'interests.updated_by_user_id as updated_by_user_id',
                    'interests.deleted_by_user_id as deleted_by_user_id',
                    'interests.created_at as created_at',
                    'interests.updated_at as updated_at',
                    'interests.deleted_at as deleted_at'

                )
                ->where('interests.reference_id',$reference_id)
                ->where('interests.reference_type',$reference_type)
                ->where('interests.created_by_user_id',$session_user_id)
                ->where('interests.status','Active')
                ->orderBy('interests.created_at', 'DESC')
                ->paginate($no_of_records, ['*'], 'page', $page_no);

        }elseif ($id==null && $reference_id!=null && $reference_type!=null && $type!=null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            //$reference_id!=null && $reference_type!=null && $type!=null

            $sqlData=DB::table('interests')
//                ->leftJoin('users', 'interests.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'interests.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'interests.id as id',
                    'interests.reference_id as reference_id',
                    'interests.reference_type as reference_type',
                    'interests.type as type',

                    'interests.status as status',
                    'interests.order_by as order_by',

                    'interests.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',


                    'interests.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'interests.updated_by_user_id as updated_by_user_id',
                    'interests.deleted_by_user_id as deleted_by_user_id',
                    'interests.created_at as created_at',
                    'interests.updated_at as updated_at',
                    'interests.deleted_at as deleted_at'

                )
                ->where('interests.reference_id',$reference_id)
                ->where('interests.reference_type',$reference_type)
                ->where('interests.type',$type)
                ->orderBy('interests.created_at', 'DESC')
                ->where('interests.status','Active')
                ->paginate();

        }else{

            $sqlData=DB::table('interests')
//                ->leftJoin('users', 'interests.created_by_user_id', '=', 'users.id')
//                ->leftJoin('companies', 'interests.created_by_comp_id', '=', 'companies.id')
                ->select(
                    'interests.id as id',
                    'interests.reference_id as reference_id',
                    'interests.reference_type as reference_type',
                    'interests.type as type',

                    'interests.status as status',
                    'interests.order_by as order_by',

                    'interests.created_by_comp_id as created_by_comp_id',
//                    'companies.name as company_title',
//                    'companies.slug as company_slug',
//                    'companies.logo as company_logo',
//                    'companies.about as company_about',
//                    'companies.verification_status as company_verification_status',
//                    'companies.rating as company_rating',
//                    'companies.slogan as company_slogan',
//                    'companies.no_of_reviews as company_no_of_reviews',
//                    'companies.since as company_since',


                    'interests.created_by_user_id as created_by_user_id',
//                    'users.full_name as user_full_name',
//                    'users.display_name as user_display_name',
//                    'users.img as user_img',
//                    'users.timezone as user_timezone',
//                    'users.slug as user_slug',

                    'interests.updated_by_user_id as updated_by_user_id',
                    'interests.deleted_by_user_id as deleted_by_user_id',
                    'interests.created_at as created_at',
                    'interests.updated_at as updated_at',
                    'interests.deleted_at as deleted_at'

                )
                ->orderBy('interests.created_at', 'DESC')
                ->where('interests.status','Active')
                ->paginate();

        }


        return $sqlData;

    }



    public function GetVehicleCategoriesSqlData($request, $id, $title, $slug, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            $sqlData = DB::table('categories')
                ->select(
                    'categories.id as id',
                    'categories.title as title',
                    'categories.slug as slug',
                    'categories.icon as icon',
                    'categories.image as image',

                    'categories.status as status',
                    'categories.order_by as order_by',
                    'categories.created_by_comp_id as created_by_comp_id',
                    'categories.created_by_user_id as created_by_user_id',
                    'categories.updated_by_user_id as updated_by_user_id',
                    'categories.deleted_by_user_id as deleted_by_user_id',
                    'categories.created_at as created_at',
                    'categories.updated_at as updated_at',
                    'categories.deleted_at as deleted_at'
                )
                ->where('categories.id',$id)
                ->where('categories.status','Active')
                ->first();

        }else{

            $sqlData = DB::table('categories')
                ->select(
                    'categories.id as id',
                    'categories.title as title',
                    'categories.slug as slug',
                    'categories.icon as icon',
                    'categories.image as image',

                    'categories.status as status',
                    'categories.order_by as order_by',
                    'categories.created_by_comp_id as created_by_comp_id',
                    'categories.created_by_user_id as created_by_user_id',
                    'categories.updated_by_user_id as updated_by_user_id',
                    'categories.deleted_by_user_id as deleted_by_user_id',
                    'categories.created_at as created_at',
                    'categories.updated_at as updated_at',
                    'categories.deleted_at as deleted_at'
                )
                ->get();

        }

        return $sqlData;

    }




    public function GetVehicleMakesSqlData($request, $id, $title, $slug, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){


            $sqlData = DB::table('makes')
                ->select(
                    'makes.id as id',
                    'makes.title as title',
                    'makes.slug as slug',
                    'makes.logo as logo',

                    'makes.status as status',
                    'makes.order_by as order_by',
                    'makes.created_by_comp_id as created_by_comp_id',
                    'makes.created_by_user_id as created_by_user_id',
                    'makes.updated_by_user_id as updated_by_user_id',
                    'makes.deleted_by_user_id as deleted_by_user_id',
                    'makes.created_at as created_at',
                    'makes.updated_at as updated_at',
                    'makes.deleted_at as deleted_at'
                )
                ->where('makes.id',$id)
                ->where('makes.status','Active')
                ->first();

        }else{

            $sqlData = DB::table('makes')
                ->select(
                    'makes.id as id',
                    'makes.title as title',
                    'makes.slug as slug',
                    'makes.logo as logo',

                    'makes.status as status',
                    'makes.order_by as order_by',
                    'makes.created_by_comp_id as created_by_comp_id',
                    'makes.created_by_user_id as created_by_user_id',
                    'makes.updated_by_user_id as updated_by_user_id',
                    'makes.deleted_by_user_id as deleted_by_user_id',
                    'makes.created_at as created_at',
                    'makes.updated_at as updated_at',
                    'makes.deleted_at as deleted_at'
                )
                ->get();

        }

        return $sqlData;

    }

    public function GetVehicleModelsSqlData($request, $id, $make, $title, $slug, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $make==null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){


            $sqlData = DB::table('models')
                ->select(
                    'models.id as id',
                    'models.make_id as make_id',
                    'models.title as title',
                    'models.slug as slug',

                    'models.status as status',
                    'models.order_by as order_by',
                    'models.created_by_comp_id as created_by_comp_id',
                    'models.created_by_user_id as created_by_user_id',
                    'models.updated_by_user_id as updated_by_user_id',
                    'models.deleted_by_user_id as deleted_by_user_id',
                    'models.created_at as created_at',
                    'models.updated_at as updated_at',
                    'models.deleted_at as deleted_at'
                )
                ->where('models.id',$id)
                ->where('models.status','Active')
                ->first();

        }else{

            $sqlData = DB::table('models')
                ->select(
                    'models.id as id',
                    'models.make_id as make_id',
                    'models.title as title',
                    'models.slug as slug',

                    'models.status as status',
                    'models.order_by as order_by',
                    'models.created_by_comp_id as created_by_comp_id',
                    'models.created_by_user_id as created_by_user_id',
                    'models.updated_by_user_id as updated_by_user_id',
                    'models.deleted_by_user_id as deleted_by_user_id',
                    'models.created_at as created_at',
                    'models.updated_at as updated_at',
                    'models.deleted_at as deleted_at'
                )
                ->get();

        }

        return $sqlData;

    }

    public function getYears(){

        $Years = collect([
            (object) [
                'value' => '2021',
                'text' => '2021'
            ],
            (object) [
                'value' => '2020',
                'text' => '2020'
            ],
            (object) [
                'value' => '2019',
                'text' => '2019'
            ],
            (object) [
                'value' => '2018',
                'text' => '2018'
            ],
            (object) [
                'value' => '2017',
                'text' => '2017'
            ],
            (object) [
                'value' => '2016',
                'text' => '2016'
            ],
            (object) [
                'value' => '2015',
                'text' => '2015'
            ],
            (object) [
                'value' => '2014',
                'text' => '2014'
            ],
            (object) [
                'value' => '2013',
                'text' => '2013'
            ],
            (object) [
                'value' => '2012',
                'text' => '2012'
            ],
            (object) [
                'value' => '2011',
                'text' => '2011'
            ],
            (object) [
                'value' => '2010',
                'text' => '2010'
            ],
            (object) [
                'value' => '2009',
                'text' => '2009'
            ],
            (object) [
                'value' => '2009',
                'text' => '2009'
            ],
            (object) [
                'value' => '2008',
                'text' => '2008'
            ],
            (object) [
                'value' => '2007',
                'text' => '2007'
            ],
            (object) [
                'value' => '2006',
                'text' => '2006'
            ],
            (object) [
                'value' => '2005',
                'text' => '2005'
            ],
            (object) [
                'value' => '2004',
                'text' => '2004'
            ],
            (object) [
                'value' => '2003',
                'text' => '2003'
            ],
            (object) [
                'value' => '2002',
                'text' => '2002'
            ],
            (object) [
                'value' => '2001',
                'text' => '2001'
            ],
            (object) [
                'value' => '2000',
                'text' => '2000'
            ],
            (object) [
                'value' => '1999',
                'text' => '1999'
            ],
            (object) [
                'value' => '1998',
                'text' => '1998'
            ],
            (object) [
                'value' => '1997',
                'text' => '1997'
            ],
            (object) [
                'value' => '1996',
                'text' => '1996'
            ],
            (object) [
                'value' => '1995',
                'text' => '1995'
            ],
            (object) [
                'value' => '1994',
                'text' => '1994'
            ],
            (object) [
                'value' => '1993',
                'text' => '1993'
            ],
            (object) [
                'value' => '1992',
                'text' => '1992'
            ],
            (object) [
                'value' => '1991',
                'text' => '1991'
            ],
            (object) [
                'value' => '1990',
                'text' => '1990'
            ],
            (object) [
                'value' => '1989',
                'text' => '1989'
            ],
            (object) [
                'value' => '1988',
                'text' => '1988'
            ],
            (object) [
                'value' => '1987',
                'text' => '1987'
            ],
        ]);

        return $Years;
    }

    public function getNoOfAxles(){

        $NoOfAxles = collect([
            (object) [
                'value' => '1',
                'text' => '1'
            ],
            (object) [
                'value' => '2',
                'text' => '2'
            ],
            (object) [
                'value' => '3',
                'text' => '3'
            ],
            (object) [
                'value' => '4',
                'text' => '4'
            ],
        ]);

        return $NoOfAxles;
    }


    public function GetVehiclesSqlData($request, $id, $title, $slug, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            $sqlData = DB::table('vehicles')
                ->leftJoin('categories', 'vehicles.category_id', '=', 'categories.id')
                ->leftJoin('makes', 'vehicles.make_id', '=', 'makes.id')
                ->leftJoin('models', 'vehicles.model_id', '=', 'models.id')
                ->select(
                    'vehicles.id as id',
                    'vehicles.listing_type_id as listing_type_id',
                    'vehicles.class_id as class_id',

                    'vehicles.category_id as category_id',
                    'categories.title as category_title',

                    'vehicles.make_id as make_id',
                    'makes.title as make_title',


                    'vehicles.model_id as model_id',
                    'models.title as model_title',

                    'vehicles.trim_id as trim_id',
                    'vehicles.cab_type_id as cab_type_id',
                    'vehicles.tradesman_id as tradesman_id',
                    'vehicles.engine_manufacturer_id as engine_manufacturer_id',
                    'vehicles.fuel_type_id as fuel_type_id',
                    'vehicles.horsepower_range_id as horsepower_range_id',
                    'vehicles.transmission_manufacturer_id as transmission_manufacturer_id',
                    'vehicles.transmission_speed_id as transmission_speed_id',
                    'vehicles.axle_id as axle_id',
                    'vehicles.rear_axle_id as rear_axle_id',
                    'vehicles.suspension_id as suspension_id',
                    'vehicles.brake_type_id as brake_type_id',
                    'vehicles.rego as rego',
                    'vehicles.fleet_no as fleet_no',
                    'vehicles.type as type',
                    'vehicles.title as title',
                    'vehicles.slug as slug',
                    'vehicles.vin as vin',
                    'vehicles.vehicle_condition as vehicle_condition',
                    'vehicles.year as year',
                    'vehicles.price_from as price_from',
                    'vehicles.price_to as price_to',
                    'vehicles.lease_payment as lease_payment',
                    'vehicles.down_payment as down_payment',
                    'vehicles.description as description',
                    'vehicles.note as note',
                    'vehicles.mileage as mileage',
                    'vehicles.weight as weight',
                    'vehicles.exterior_color as exterior_color',
                    'vehicles.interior_color as interior_color',
                    'vehicles.engine_model as engine_model',
                    'vehicles.engine_size as engine_size',
                    'vehicles.fuel_tank_size as fuel_tank_size',
                    'vehicles.max_horsepower as max_horsepower',
                    'vehicles.max_rpm as max_rpm',
                    'vehicles.max_torque as max_torque',
                    'vehicles.wheelbase as wheelbase',
                    'vehicles.front_axle as front_axle',
                    'vehicles.rear_axle as rear_axle',
                    'vehicles.no_of_axles as no_of_axles',
                    'vehicles.number_of_rear_axles as number_of_rear_axles',
                    'vehicles.turning_radius as turning_radius',
                    'vehicles.tread_depth as tread_depth',
                    'vehicles.front_tire_size as front_tire_size',
                    'vehicles.rear_tire_size as rear_tire_size',
                    'vehicles.stock_number as stock_number',
                    'vehicles.drivetrain as drivetrain',
                    'vehicles.doors as doors',
                    'vehicles.upfit_body_type as upfit_body_type',
                    'vehicles.upfit_make as upfit_make',
                    'vehicles.upfit_model as upfit_model',
                    'vehicles.thumbnail as thumbnail',
                    'vehicles.tag as tag',
                    'vehicles.keyword as keyword',
                    'vehicles.audio_recording as audio_recording',
                    'vehicles.audio_description as audio_description',
                    'vehicles.published_date as published_date',
                    'vehicles.expired_date as expired_date',
                    'vehicles.last_refreshed_date as last_refreshed_date',
                    'vehicles.last_listing_type_change_date as last_listing_type_change_date',
                    'vehicles.save_count as save_count',
                    'vehicles.refresh_count as refresh_count',
                    'vehicles.image_count as image_count',
                    'vehicles.video_count as video_count',
                    'vehicles.file_count as file_count',
                    'vehicles.visitor as visitor',
                    'vehicles.no_of_likes as no_of_likes',
                    'vehicles.no_of_comments as no_of_comments',
                    'vehicles.no_of_share as no_of_share',
                    'vehicles.no_of_inquiry as no_of_inquiry',
                    'vehicles.no_of_send_email as no_of_send_email',
                    'vehicles.no_of_view_number as no_of_view_number',
                    'vehicles.no_of_view_email as no_of_view_email',
                    'vehicles.no_of_interested as no_of_interested',

                    'vehicles.status as status',
                    'vehicles.order_by as order_by',
                    'vehicles.created_by_comp_id as created_by_comp_id',
                    'vehicles.created_by_user_id as created_by_user_id',
                    'vehicles.updated_by_user_id as updated_by_user_id',
                    'vehicles.deleted_by_user_id as deleted_by_user_id',
                    'vehicles.created_at as created_at',
                    'vehicles.updated_at as updated_at',
                    'vehicles.deleted_at as deleted_at'
                )
                ->where('vehicles.id',$id)
                ->where('vehicles.status','Active')
                ->first();

        }else{

            $sqlData = DB::table('vehicles')
                ->leftJoin('categories', 'vehicles.category_id', '=', 'categories.id')
                ->leftJoin('makes', 'vehicles.make_id', '=', 'makes.id')
                ->leftJoin('models', 'vehicles.model_id', '=', 'models.id')
                ->select(
                    'vehicles.id as id',
                    'vehicles.listing_type_id as listing_type_id',
                    'vehicles.class_id as class_id',

                    'vehicles.category_id as category_id',
                    'categories.title as category_title',

                    'vehicles.make_id as make_id',
                    'makes.title as make_title',


                    'vehicles.model_id as model_id',
                    'models.title as model_title',

                    'vehicles.trim_id as trim_id',
                    'vehicles.cab_type_id as cab_type_id',
                    'vehicles.tradesman_id as tradesman_id',
                    'vehicles.engine_manufacturer_id as engine_manufacturer_id',
                    'vehicles.fuel_type_id as fuel_type_id',
                    'vehicles.horsepower_range_id as horsepower_range_id',
                    'vehicles.transmission_manufacturer_id as transmission_manufacturer_id',
                    'vehicles.transmission_speed_id as transmission_speed_id',
                    'vehicles.axle_id as axle_id',
                    'vehicles.rear_axle_id as rear_axle_id',
                    'vehicles.suspension_id as suspension_id',
                    'vehicles.brake_type_id as brake_type_id',
                    'vehicles.rego as rego',
                    'vehicles.fleet_no as fleet_no',
                    'vehicles.type as type',
                    'vehicles.title as title',
                    'vehicles.slug as slug',
                    'vehicles.vin as vin',
                    'vehicles.vehicle_condition as vehicle_condition',
                    'vehicles.year as year',
                    'vehicles.price_from as price_from',
                    'vehicles.price_to as price_to',
                    'vehicles.lease_payment as lease_payment',
                    'vehicles.down_payment as down_payment',
                    'vehicles.description as description',
                    'vehicles.note as note',
                    'vehicles.mileage as mileage',
                    'vehicles.weight as weight',
                    'vehicles.exterior_color as exterior_color',
                    'vehicles.interior_color as interior_color',
                    'vehicles.engine_model as engine_model',
                    'vehicles.engine_size as engine_size',
                    'vehicles.fuel_tank_size as fuel_tank_size',
                    'vehicles.max_horsepower as max_horsepower',
                    'vehicles.max_rpm as max_rpm',
                    'vehicles.max_torque as max_torque',
                    'vehicles.wheelbase as wheelbase',
                    'vehicles.front_axle as front_axle',
                    'vehicles.rear_axle as rear_axle',
                    'vehicles.no_of_axles as no_of_axles',
                    'vehicles.number_of_rear_axles as number_of_rear_axles',
                    'vehicles.turning_radius as turning_radius',
                    'vehicles.tread_depth as tread_depth',
                    'vehicles.front_tire_size as front_tire_size',
                    'vehicles.rear_tire_size as rear_tire_size',
                    'vehicles.stock_number as stock_number',
                    'vehicles.drivetrain as drivetrain',
                    'vehicles.doors as doors',
                    'vehicles.upfit_body_type as upfit_body_type',
                    'vehicles.upfit_make as upfit_make',
                    'vehicles.upfit_model as upfit_model',
                    'vehicles.thumbnail as thumbnail',
                    'vehicles.tag as tag',
                    'vehicles.keyword as keyword',
                    'vehicles.audio_recording as audio_recording',
                    'vehicles.audio_description as audio_description',
                    'vehicles.published_date as published_date',
                    'vehicles.expired_date as expired_date',
                    'vehicles.last_refreshed_date as last_refreshed_date',
                    'vehicles.last_listing_type_change_date as last_listing_type_change_date',
                    'vehicles.save_count as save_count',
                    'vehicles.refresh_count as refresh_count',
                    'vehicles.image_count as image_count',
                    'vehicles.video_count as video_count',
                    'vehicles.file_count as file_count',
                    'vehicles.visitor as visitor',
                    'vehicles.no_of_likes as no_of_likes',
                    'vehicles.no_of_comments as no_of_comments',
                    'vehicles.no_of_share as no_of_share',
                    'vehicles.no_of_inquiry as no_of_inquiry',
                    'vehicles.no_of_send_email as no_of_send_email',
                    'vehicles.no_of_view_number as no_of_view_number',
                    'vehicles.no_of_view_email as no_of_view_email',
                    'vehicles.no_of_interested as no_of_interested',

                    'vehicles.status as status',
                    'vehicles.order_by as order_by',
                    'vehicles.created_by_comp_id as created_by_comp_id',
                    'vehicles.created_by_user_id as created_by_user_id',
                    'vehicles.updated_by_user_id as updated_by_user_id',
                    'vehicles.deleted_by_user_id as deleted_by_user_id',
                    'vehicles.created_at as created_at',
                    'vehicles.updated_at as updated_at',
                    'vehicles.deleted_at as deleted_at'
                )
                ->orderBy('vehicles.created_at', 'DESC')
                ->get();

        }

        return $sqlData;

    }





    public function GetDefectsSqlData($request, $id, $title, $slug, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            $sqlData = DB::table('defects')
                ->leftJoin('defect_types', 'defects.defect_type_id', '=', 'defect_types.id')
                ->select(
                    'defects.id as id',

                    'defects.defect_type_id as defect_type_id',
                    'defect_types.title as defect_type_title',

                    'defects.title as title',
                    'defects.slug as slug',
                    'defects.description as description',
                    'defects.image as image',

                    'defects.status as status',
                    'defects.order_by as order_by',
                    'defects.created_by_comp_id as created_by_comp_id',
                    'defects.created_by_user_id as created_by_user_id',
                    'defects.updated_by_user_id as updated_by_user_id',
                    'defects.deleted_by_user_id as deleted_by_user_id',
                    'defects.created_at as created_at',
                    'defects.updated_at as updated_at',
                    'defects.deleted_at as deleted_at'
                )
                ->where('defects.id',$id)
                ->first();

        }else{

            $sqlData = DB::table('defects')
                ->leftJoin('defect_types', 'defects.defect_type_id', '=', 'defect_types.id')
                ->select(
                    'defects.id as id',

                    'defects.defect_type_id as defect_type_id',
                    'defect_types.title as defect_type_title',

                    'defects.title as title',
                    'defects.slug as slug',
                    'defects.description as description',
                    'defects.image as image',

                    'defects.status as status',
                    'defects.order_by as order_by',
                    'defects.created_by_comp_id as created_by_comp_id',
                    'defects.created_by_user_id as created_by_user_id',
                    'defects.updated_by_user_id as updated_by_user_id',
                    'defects.deleted_by_user_id as deleted_by_user_id',
                    'defects.created_at as created_at',
                    'defects.updated_at as updated_at',
                    'defects.deleted_at as deleted_at'
                )
                ->orderBy('defects.created_at', 'DESC')
                ->get();

        }

        return $sqlData;

    }

    public function GetServicesSqlData($request, $id, $title, $slug, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            $sqlData = DB::table('services')
                ->leftJoin('service_types', 'services.service_type_id', '=', 'service_types.id')
                ->select(
                    'services.id as id',

                    'services.service_type_id as service_type_id',
                    'service_types.title as service_type_title',

                    'services.title as title',
                    'services.slug as slug',
                    'services.description as description',
                    'services.image as image',

                    'services.status as status',
                    'services.order_by as order_by',
                    'services.created_by_comp_id as created_by_comp_id',
                    'services.created_by_user_id as created_by_user_id',
                    'services.updated_by_user_id as updated_by_user_id',
                    'services.deleted_by_user_id as deleted_by_user_id',
                    'services.created_at as created_at',
                    'services.updated_at as updated_at',
                    'services.deleted_at as deleted_at'
                )
                ->where('services.id',$id)
                ->first();

        }else{

            $sqlData = DB::table('services')
                ->leftJoin('service_types', 'services.service_type_id', '=', 'service_types.id')
                ->select(
                    'services.id as id',

                    'services.service_type_id as service_type_id',
                    'service_types.title as service_type_title',

                    'services.title as title',
                    'services.slug as slug',
                    'services.description as description',
                    'services.image as image',

                    'services.status as status',
                    'services.order_by as order_by',
                    'services.created_by_comp_id as created_by_comp_id',
                    'services.created_by_user_id as created_by_user_id',
                    'services.updated_by_user_id as updated_by_user_id',
                    'services.deleted_by_user_id as deleted_by_user_id',
                    'services.created_at as created_at',
                    'services.updated_at as updated_at',
                    'services.deleted_at as deleted_at'
                )
                ->orderBy('services.created_at', 'DESC')
                ->get();

        }

        return $sqlData;

    }




    public function GetOrdersSqlData($request, $id, $vehicle, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            $sqlData = DB::table('orders')
                ->leftJoin('vehicles', 'orders.vehicle_id', '=', 'vehicles.id')
                ->select(
                    'orders.id as id',

                    'orders.vehicle_id as vehicle_id',
                    'vehicles.rego as vehicle_rego',


                    'orders.action_type as action_type',
                    'orders.description as description',
                    'orders.no_of_defects as no_of_defects',
                    'orders.reason as reason',
                    'orders.progress_status as progress_status',
                    'orders.durations as durations',
                    'orders.start_date as start_date',
                    'orders.end_date as end_date',
                    'orders.scheduled_date as scheduled_date',

                    'orders.status as status',
                    'orders.order_by as order_by',
                    'orders.created_by_comp_id as created_by_comp_id',
                    'orders.created_by_user_id as created_by_user_id',
                    'orders.updated_by_user_id as updated_by_user_id',
                    'orders.deleted_by_user_id as deleted_by_user_id',
                    'orders.created_at as created_at',
                    'orders.updated_at as updated_at',
                    'orders.deleted_at as deleted_at'
                )
                ->where('orders.id',$id)
                ->first();

        }else{


            $sqlData = DB::table('orders')
                ->leftJoin('vehicles', 'orders.vehicle_id', '=', 'vehicles.id')
                ->select(
                    'orders.id as id',

                    'orders.vehicle_id as vehicle_id',
                    'vehicles.rego as vehicle_rego',


                    'orders.action_type as action_type',
                    'orders.description as description',
                    'orders.no_of_defects as no_of_defects',
                    'orders.reason as reason',
                    'orders.progress_status as progress_status',
                    'orders.durations as durations',
                    'orders.start_date as start_date',
                    'orders.end_date as end_date',
                    'orders.scheduled_date as scheduled_date',

                    'orders.status as status',
                    'orders.order_by as order_by',
                    'orders.created_by_comp_id as created_by_comp_id',
                    'orders.created_by_user_id as created_by_user_id',
                    'orders.updated_by_user_id as updated_by_user_id',
                    'orders.deleted_by_user_id as deleted_by_user_id',
                    'orders.created_at as created_at',
                    'orders.updated_at as updated_at',
                    'orders.deleted_at as deleted_at'
                )
                ->orderBy('orders.created_at', 'DESC')
                ->get();

        }

        return $sqlData;

    }





    public function GetQuotesSqlData($request, $id, $order, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            $sqlData = DB::table('quotes')
                ->leftJoin('orders', 'quotes.order_id', '=', 'orders.id')
                ->leftJoin('vehicles', 'orders.vehicle_id', '=', 'vehicles.id')
                ->select(
                    'quotes.id as id',

                    'quotes.order_id as order_id',
                    'vehicles.rego as vehicle_rego',


                    'quotes.amount as amount',
                    'quotes.duration as duration',
                    'quotes.description as description',


                    'quotes.status as status',
                    'quotes.order_by as order_by',
                    'quotes.created_by_comp_id as created_by_comp_id',
                    'quotes.created_by_user_id as created_by_user_id',
                    'quotes.updated_by_user_id as updated_by_user_id',
                    'quotes.deleted_by_user_id as deleted_by_user_id',
                    'quotes.created_at as created_at',
                    'quotes.updated_at as updated_at',
                    'quotes.deleted_at as deleted_at'
                )
                ->where('quotes.id',$id)
                ->first();

        }else{

            $sqlData = DB::table('quotes')
                ->leftJoin('orders', 'quotes.order_id', '=', 'orders.id')
                ->leftJoin('vehicles', 'orders.vehicle_id', '=', 'vehicles.id')
                ->select(
                    'quotes.id as id',

                    'quotes.order_id as order_id',
                    'vehicles.rego as vehicle_rego',


                    'quotes.amount as amount',
                    'quotes.duration as duration',
                    'quotes.description as description',


                    'quotes.status as status',
                    'quotes.order_by as order_by',
                    'quotes.created_by_comp_id as created_by_comp_id',
                    'quotes.created_by_user_id as created_by_user_id',
                    'quotes.updated_by_user_id as updated_by_user_id',
                    'quotes.deleted_by_user_id as deleted_by_user_id',
                    'quotes.created_at as created_at',
                    'quotes.updated_at as updated_at',
                    'quotes.deleted_at as deleted_at'
                )
                ->orderBy('quotes.created_at', 'DESC')
                ->get();

        }

        return $sqlData;

    }





    public function GetInvoicesSqlData($request, $id, $order, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            $sqlData = DB::table('invoices')
                ->leftJoin('orders', 'invoices.order_id', '=', 'orders.id')
                ->leftJoin('vehicles', 'orders.vehicle_id', '=', 'vehicles.id')
                ->select(
                    'invoices.id as id',

                    'invoices.order_id as order_id',
                    'vehicles.rego as vehicle_rego',


                    'invoices.amount as amount',
                    'invoices.discount as discount',
                    'invoices.description as description',


                    'invoices.status as status',
                    'invoices.order_by as order_by',
                    'invoices.created_by_comp_id as created_by_comp_id',
                    'invoices.created_by_user_id as created_by_user_id',
                    'invoices.updated_by_user_id as updated_by_user_id',
                    'invoices.deleted_by_user_id as deleted_by_user_id',
                    'invoices.created_at as created_at',
                    'invoices.updated_at as updated_at',
                    'invoices.deleted_at as deleted_at'
                )
                ->where('invoices.id',$id)
                ->first();

        }else{

            $sqlData = DB::table('invoices')
                ->leftJoin('orders', 'invoices.order_id', '=', 'orders.id')
                ->leftJoin('vehicles', 'orders.vehicle_id', '=', 'vehicles.id')
                ->select(
                    'invoices.id as id',

                    'invoices.order_id as order_id',
                    'vehicles.rego as vehicle_rego',


                    'invoices.amount as amount',
                    'invoices.discount as discount',
                    'invoices.description as description',


                    'invoices.status as status',
                    'invoices.order_by as order_by',
                    'invoices.created_by_comp_id as created_by_comp_id',
                    'invoices.created_by_user_id as created_by_user_id',
                    'invoices.updated_by_user_id as updated_by_user_id',
                    'invoices.deleted_by_user_id as deleted_by_user_id',
                    'invoices.created_at as created_at',
                    'invoices.updated_at as updated_at',
                    'invoices.deleted_at as deleted_at'
                )
                ->orderBy('invoices.created_at', 'DESC')
                ->get();

        }

        return $sqlData;

    }




    public function GetNotificationsSqlData($request, $id, $notification_for_user_id, $notification_type, $reference_type, $reference_id, $title, $description, $read_status, $status, $order_by, $created_by_comp_id, $created_by_user_id, $updated_by_user_id, $deleted_by_user_id, $created_at, $updated_at, $deleted_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $notification_for_user_id==null && $notification_type==null && $reference_type==null && $reference_id==null && $read_status==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null){

            $sqlData = DB::table('notifications')
                ->select(
                    'notifications.id as id',

                    'notifications.notification_for_user_id as notification_for_user_id',
                    'notifications.notification_type as notification_type',
                    'notifications.reference_type as reference_type',
                    'notifications.reference_id as reference_id',
                    'notifications.title as title',
                    'notifications.description as description',


                    'notifications.read_status as read_status',

                    'notifications.status as status',
                    'notifications.order_by as order_by',

                    'notifications.created_by_comp_id as created_by_comp_id',
                    'notifications.created_by_user_id as created_by_user_id',

                    'notifications.updated_by_user_id as updated_by_user_id',
                    'notifications.deleted_by_user_id as deleted_by_user_id',
                    'notifications.created_at as created_at',
                    'notifications.updated_at as updated_at',
                    'notifications.deleted_at as deleted_at'
                )
                ->where('notifications.id',$id)
                ->first();

        }else if($id==null && $notification_for_user_id!=null && $notification_type==null && $reference_type==null && $reference_id==null && $read_status==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records!=null){


            $sqlData = DB::table('notifications')
                ->select(
                    'notifications.id as id',

                    'notifications.notification_for_user_id as notification_for_user_id',
                    'notifications.notification_type as notification_type',
                    'notifications.reference_type as reference_type',
                    'notifications.reference_id as reference_id',
                    'notifications.title as title',
                    'notifications.description as description',


                    'notifications.read_status as read_status',

                    'notifications.status as status',
                    'notifications.order_by as order_by',

                    'notifications.created_by_comp_id as created_by_comp_id',
                    'notifications.created_by_user_id as created_by_user_id',

                    'notifications.updated_by_user_id as updated_by_user_id',
                    'notifications.deleted_by_user_id as deleted_by_user_id',
                    'notifications.created_at as created_at',
                    'notifications.updated_at as updated_at',
                    'notifications.deleted_at as deleted_at'
                )
                ->where('notifications.notification_for_user_id',$notification_for_user_id)
                ->orderBy('notifications.created_at', 'DESC')
                ->where('notifications.status','Active')
                ->paginate();

        }else{

            $sqlData = DB::table('notifications')
                ->select(
                    'notifications.id as id',

                    'notifications.notification_for_user_id as notification_for_user_id',
                    'notifications.notification_type as notification_type',
                    'notifications.reference_type as reference_type',
                    'notifications.reference_id as reference_id',
                    'notifications.title as title',
                    'notifications.description as description',


                    'notifications.read_status as read_status',

                    'notifications.status as status',
                    'notifications.order_by as order_by',

                    'notifications.created_by_comp_id as created_by_comp_id',
                    'notifications.created_by_user_id as created_by_user_id',

                    'notifications.updated_by_user_id as updated_by_user_id',
                    'notifications.deleted_by_user_id as deleted_by_user_id',
                    'notifications.created_at as created_at',
                    'notifications.updated_at as updated_at',
                    'notifications.deleted_at as deleted_at'
                )
                ->orderBy('notifications.created_at', 'DESC')
                ->where('notifications.status','Active')
                ->paginate();
        }

        return $sqlData;

    }






    public function GetTransactionsSqlData($request, $id, $user_to_id, $amount, $type, $status, $order_by, $created_by_comp_id, $created_by_user_id, $updated_by_user_id, $deleted_by_user_id, $created_at, $updated_at, $deleted_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $user_to_id==null && $amount==null && $type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null){

            $sqlData = DB::table('transaction_logs')
                ->leftJoin('users', 'transaction_logs.created_by_user_id', '=', 'users.id')
                ->leftJoin('users as users2', 'transaction_logs.user_to_id', '=', 'users2.id')
                ->select(
                    'transaction_logs.id as id',

                    'transaction_logs.user_to_id as user_to_id',
                    'users2.full_name as users2_full_name',
                    'users2.code as users2_code',

                    'transaction_logs.amount as amount',
                    'transaction_logs.type as type',

                    'transaction_logs.status as status',
                    'transaction_logs.order_by as order_by',

                    'transaction_logs.created_by_comp_id as created_by_comp_id',

                    'transaction_logs.created_by_user_id as created_by_user_id',
                    'users.full_name as users_full_name',
                    'users.code as users_code',

                    'transaction_logs.updated_by_user_id as updated_by_user_id',
                    'transaction_logs.deleted_by_user_id as deleted_by_user_id',
                    'transaction_logs.created_at as created_at',
                    'transaction_logs.updated_at as updated_at',
                    'transaction_logs.deleted_at as deleted_at'
                )
                ->where('transaction_logs.id',$id)
                ->first();

        }else{

            $sqlData = DB::table('transaction_logs')
                ->leftJoin('users', 'transaction_logs.created_by_user_id', '=', 'users.id')
                ->leftJoin('users as users2', 'transaction_logs.user_to_id', '=', 'users2.id')
                ->select(
                    'transaction_logs.id as id',

                    'transaction_logs.user_to_id as user_to_id',
                    'users2.full_name as users2_full_name',
                    'users2.code as users2_code',

                    'transaction_logs.amount as amount',
                    'transaction_logs.type as type',

                    'transaction_logs.status as status',
                    'transaction_logs.order_by as order_by',

                    'transaction_logs.created_by_comp_id as created_by_comp_id',

                    'transaction_logs.created_by_user_id as created_by_user_id',
                    'users.full_name as users_full_name',
                    'users.code as users_code',

                    'transaction_logs.updated_by_user_id as updated_by_user_id',
                    'transaction_logs.deleted_by_user_id as deleted_by_user_id',
                    'transaction_logs.created_at as created_at',
                    'transaction_logs.updated_at as updated_at',
                    'transaction_logs.deleted_at as deleted_at'
                )
                ->orderBy('transaction_logs.created_at', 'DESC')
                ->where('transaction_logs.status','Active')
                ->paginate();
        }

        return $sqlData;

    }





    public function GetLeaveTypesSqlData($request, $id, $title, $slug, $description, $status, $order_by, $created_by_comp_id, $created_by_user_id, $updated_by_user_id, $deleted_by_user_id, $created_at, $updated_at, $deleted_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null){

            $sqlData = DB::table('leave_types')
                ->select(
                    'leave_types.id as id',

                    'leave_types.title as title',
                    'leave_types.slug as slug',
                    'leave_types.description as description',
                    'leave_types.image as image',

                    'leave_types.status as status',
                    'leave_types.order_by as order_by',

                    'leave_types.created_by_comp_id as created_by_comp_id',
                    'leave_types.created_by_user_id as created_by_user_id',

                    'leave_types.updated_by_user_id as updated_by_user_id',
                    'leave_types.deleted_by_user_id as deleted_by_user_id',
                    'leave_types.created_at as created_at',
                    'leave_types.updated_at as updated_at',
                    'leave_types.deleted_at as deleted_at'
                )
                ->where('leave_types.id',$id)
                ->first();

        }else{

            $sqlData = DB::table('leave_types')
                ->select(
                    'leave_types.id as id',

                    'leave_types.title as title',
                    'leave_types.slug as slug',
                    'leave_types.description as description',
                    'leave_types.image as image',

                    'leave_types.status as status',
                    'leave_types.order_by as order_by',

                    'leave_types.created_by_comp_id as created_by_comp_id',
                    'leave_types.created_by_user_id as created_by_user_id',

                    'leave_types.updated_by_user_id as updated_by_user_id',
                    'leave_types.deleted_by_user_id as deleted_by_user_id',
                    'leave_types.created_at as created_at',
                    'leave_types.updated_at as updated_at',
                    'leave_types.deleted_at as deleted_at'
                )
                ->orderBy('leave_types.created_at', 'DESC')
                ->where('leave_types.status','Active')
                ->paginate();
        }

        return $sqlData;

    }


    public function GetLeavesSqlData($request, $id, $leave_type, $status, $order_by, $created_by_comp_id, $created_by_user_id, $updated_by_user_id, $deleted_by_user_id, $created_at, $updated_at, $deleted_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $leave_type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null){

            $sqlData = DB::table('leaves')
                ->leftJoin('leave_types', 'leaves.leave_type_id', '=', 'leave_types.id')
                ->select(
                    'leaves.id as id',

                    'leaves.leave_type_id as leave_type_id',
                    'leave_types.title as leave_type_title',


                    'leaves.duration as duration',
                    'leaves.from_date as from_date',
                    'leaves.to_date as to_date',
                    'leaves.reason as reason',

                    'leaves.status as status',
                    'leaves.order_by as order_by',

                    'leaves.created_by_comp_id as created_by_comp_id',
                    'leaves.created_by_user_id as created_by_user_id',

                    'leaves.updated_by_user_id as updated_by_user_id',
                    'leaves.deleted_by_user_id as deleted_by_user_id',
                    'leaves.created_at as created_at',
                    'leaves.updated_at as updated_at',
                    'leaves.deleted_at as deleted_at'
                )
                ->where('leaves.id',$id)
                ->first();

        }else{

            $sqlData = DB::table('leaves')
                ->leftJoin('leave_types', 'leaves.leave_type_id', '=', 'leave_types.id')
                ->select(
                    'leaves.id as id',

                    'leaves.leave_type_id as leave_type_id',
                    'leave_types.title as leave_type_title',


                    'leaves.duration as duration',
                    'leaves.from_date as from_date',
                    'leaves.to_date as to_date',
                    'leaves.reason as reason',

                    'leaves.status as status',
                    'leaves.order_by as order_by',

                    'leaves.created_by_comp_id as created_by_comp_id',
                    'leaves.created_by_user_id as created_by_user_id',

                    'leaves.updated_by_user_id as updated_by_user_id',
                    'leaves.deleted_by_user_id as deleted_by_user_id',
                    'leaves.created_at as created_at',
                    'leaves.updated_at as updated_at',
                    'leaves.deleted_at as deleted_at'
                )
                ->orderBy('leaves.created_at', 'DESC')
                ->where('leaves.status','Active')
                ->paginate();
        }

        return $sqlData;

    }





    public function GetCheckInOutSqlData($request, $id, $type, $status, $order_by, $created_by_comp_id, $created_by_user_id, $updated_by_user_id, $deleted_by_user_id, $created_at, $updated_at, $deleted_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null){

            $sqlData = DB::table('check-in-outs')
                ->select(
                    'check-in-outs.id as id',
                    'check-in-outs.type as type',

                    'check-in-outs.status as status',
                    'check-in-outs.order_by as order_by',

                    'check-in-outs.created_by_comp_id as created_by_comp_id',
                    'check-in-outs.created_by_user_id as created_by_user_id',

                    'check-in-outs.updated_by_user_id as updated_by_user_id',
                    'check-in-outs.deleted_by_user_id as deleted_by_user_id',
                    'check-in-outs.created_at as created_at',
                    'check-in-outs.updated_at as updated_at',
                    'check-in-outs.deleted_at as deleted_at'
                )
                ->where('check-in-outs.id',$id)
                ->first();

        }else{

            $sqlData = DB::table('check-in-outs')
                ->select(
                    'check-in-outs.id as id',
                    'check-in-outs.type as type',

                    'check-in-outs.status as status',
                    'check-in-outs.order_by as order_by',

                    'check-in-outs.created_by_comp_id as created_by_comp_id',
                    'check-in-outs.created_by_user_id as created_by_user_id',

                    'check-in-outs.updated_by_user_id as updated_by_user_id',
                    'check-in-outs.deleted_by_user_id as deleted_by_user_id',
                    'check-in-outs.created_at as created_at',
                    'check-in-outs.updated_at as updated_at',
                    'check-in-outs.deleted_at as deleted_at'
                )
                ->orderBy('check-in-outs.created_at', 'DESC')
                ->where('check-in-outs.status','Active')
                ->paginate();
        }

        return $sqlData;

    }






    public function GetSubscribersSqlData($request, $id, $country, $country_code, $full_name, $first_name, $last_name, $email, $mobile, $type, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            $sqlData = DB::table('subscribers')
                ->leftJoin('country_codes', 'subscribers.country_code_id', '=', 'country_codes.id')
                ->select(
                    'subscribers.id as id',

                    'subscribers.country_code_id as country_code_id',
                    'country_codes.code as code',

                    'subscribers.first_name as first_name',
                    'subscribers.last_name as last_name',
                    'subscribers.email as email',
                    'subscribers.number as number',
                    'subscribers.type as type',

                    'subscribers.status as status',
                    'subscribers.order_by as order_by',
                    'subscribers.created_by_comp_id as created_by_comp_id',
                    'subscribers.created_by_user_id as created_by_user_id',
                    'subscribers.updated_by_user_id as updated_by_user_id',
                    'subscribers.deleted_by_user_id as deleted_by_user_id',
                    'subscribers.created_at as created_at',
                    'subscribers.updated_at as updated_at',
                    'subscribers.deleted_at as deleted_at'
                )
                ->where('subscribers.id',$id)
                ->first();

        }elseif($id==null && $type!=null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null) {


            $sqlData = DB::table('subscribers')
                ->leftJoin('country_codes', 'subscribers.country_code_id', '=', 'country_codes.id')
                ->select(
                    'subscribers.id as id',

                    'subscribers.country_code_id as country_code_id',
                    'country_codes.code as code',

                    'subscribers.first_name as first_name',
                    'subscribers.last_name as last_name',
                    'subscribers.email as email',
                    'subscribers.number as number',
                    'subscribers.type as type',

                    'subscribers.status as status',
                    'subscribers.order_by as order_by',
                    'subscribers.created_by_comp_id as created_by_comp_id',
                    'subscribers.created_by_user_id as created_by_user_id',
                    'subscribers.updated_by_user_id as updated_by_user_id',
                    'subscribers.deleted_by_user_id as deleted_by_user_id',
                    'subscribers.created_at as created_at',
                    'subscribers.updated_at as updated_at',
                    'subscribers.deleted_at as deleted_at'
                )
                ->where('type', $type)
                ->orderBy('countries.created_at', 'DESC')
                ->paginate();

        }else{



            $sqlData = DB::table('subscribers')
                ->leftJoin('country_codes', 'subscribers.country_code_id', '=', 'country_codes.id')
                ->select(
                    'subscribers.id as id',

                    'subscribers.country_code_id as country_code_id',
                    'country_codes.code as code',

                    'subscribers.first_name as first_name',
                    'subscribers.last_name as last_name',
                    'subscribers.email as email',
                    'subscribers.number as number',
                    'subscribers.type as type',

                    'subscribers.status as status',
                    'subscribers.order_by as order_by',
                    'subscribers.created_by_comp_id as created_by_comp_id',
                    'subscribers.created_by_user_id as created_by_user_id',
                    'subscribers.updated_by_user_id as updated_by_user_id',
                    'subscribers.deleted_by_user_id as deleted_by_user_id',
                    'subscribers.created_at as created_at',
                    'subscribers.updated_at as updated_at',
                    'subscribers.deleted_at as deleted_at'
                )
                ->orderBy('subscribers.created_at', 'DESC')
                ->paginate();

        }

        return $sqlData;

    }



    public function GetContactsSqlData($request, $id, $name, $email, $subject, $message,  $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $name==null && $email==null && $subject==null && $message==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            $sqlData = DB::table('contacts')
                ->select(
                    'contacts.id as id',
                    'contacts.name as name',
                    'contacts.email as email',
                    'contacts.subject as subject',
                    'contacts.message as message',

                    'contacts.status as status',
                    'contacts.order_by as order_by',
                    'contacts.created_by_comp_id as created_by_comp_id',
                    'contacts.created_by_user_id as created_by_user_id',
                    'contacts.updated_by_user_id as updated_by_user_id',
                    'contacts.deleted_by_user_id as deleted_by_user_id',
                    'contacts.created_at as created_at',
                    'contacts.updated_at as updated_at',
                    'contacts.deleted_at as deleted_at'
                )
                ->where('contacts.id',$id)
                ->first();

        }else{

            $sqlData = DB::table('contacts')
                ->select(
                    'contacts.id as id',
                    'contacts.name as name',
                    'contacts.email as email',
                    'contacts.subject as subject',
                    'contacts.message as message',

                    'contacts.status as status',
                    'contacts.order_by as order_by',
                    'contacts.created_by_comp_id as created_by_comp_id',
                    'contacts.created_by_user_id as created_by_user_id',
                    'contacts.updated_by_user_id as updated_by_user_id',
                    'contacts.deleted_by_user_id as deleted_by_user_id',
                    'contacts.created_at as created_at',
                    'contacts.updated_at as updated_at',
                    'contacts.deleted_at as deleted_at'
                )
                ->orderBy('contacts.created_at', 'DESC')
                ->paginate();

        }

        return $sqlData;

    }




    public function GetOnboardsSqlData($request, $id, $title, $date_from, $date_to, $type,  $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $title==null && $date_from==null && $date_to==null && $type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            $sqlData = DB::table('onboards')
                ->select(
                    'onboards.id as id',
                    'onboards.code as code',
                    'onboards.title as title',
                    'onboards.description as description',
                    'onboards.valid_from as valid_from',
                    'onboards.valid_till as valid_till',
                    'onboards.type as type',

                    'onboards.status as status',
                    'onboards.order_by as order_by',
                    'onboards.created_by_comp_id as created_by_comp_id',
                    'onboards.created_by_user_id as created_by_user_id',
                    'onboards.updated_by_user_id as updated_by_user_id',
                    'onboards.deleted_by_user_id as deleted_by_user_id',
                    'onboards.created_at as created_at',
                    'onboards.updated_at as updated_at',
                    'onboards.deleted_at as deleted_at'
                )
                ->where('onboards.id',$id)
                ->first();

        }elseif($id==null && $title==null && $date_from==null && $date_to==null && $type!=null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){


            $sqlData = DB::table('onboards')
                ->select(
                    'onboards.id as id',
                    'onboards.code as code',
                    'onboards.title as title',
                    'onboards.description as description',
                    'onboards.valid_from as valid_from',
                    'onboards.valid_till as valid_till',
                    'onboards.type as type',

                    'onboards.status as status',
                    'onboards.order_by as order_by',
                    'onboards.created_by_comp_id as created_by_comp_id',
                    'onboards.created_by_user_id as created_by_user_id',
                    'onboards.updated_by_user_id as updated_by_user_id',
                    'onboards.deleted_by_user_id as deleted_by_user_id',
                    'onboards.created_at as created_at',
                    'onboards.updated_at as updated_at',
                    'onboards.deleted_at as deleted_at'
                )
                ->where('onboards.type',$type)
                ->paginate();

        }else{


            $sqlData = DB::table('onboards')
                ->select(
                    'onboards.id as id',
                    'onboards.code as code',
                    'onboards.title as title',
                    'onboards.description as description',
                    'onboards.valid_from as valid_from',
                    'onboards.valid_till as valid_till',
                    'onboards.type as type',

                    'onboards.status as status',
                    'onboards.order_by as order_by',
                    'onboards.created_by_comp_id as created_by_comp_id',
                    'onboards.created_by_user_id as created_by_user_id',
                    'onboards.updated_by_user_id as updated_by_user_id',
                    'onboards.deleted_by_user_id as deleted_by_user_id',
                    'onboards.created_at as created_at',
                    'onboards.updated_at as updated_at',
                    'onboards.deleted_at as deleted_at'
                )
                ->orderBy('onboards.created_at', 'DESC')
                ->paginate();

        }

        return $sqlData;

    }
















    public function GetFAQsSqlData($request, $id, $question, $answer, $type, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $question==null && $answer==null && $type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            $sqlData = DB::table('faqs')
                ->select(
                    'faqs.id as id',
                    'faqs.question as question',
                    'faqs.answer as answer',
                    'faqs.type as type',

                    'faqs.status as status',
                    'faqs.order_by as order_by',
                    'faqs.created_by_comp_id as created_by_comp_id',
                    'faqs.created_by_user_id as created_by_user_id',
                    'faqs.updated_by_user_id as updated_by_user_id',
                    'faqs.deleted_by_user_id as deleted_by_user_id',
                    'faqs.created_at as created_at',
                    'faqs.updated_at as updated_at',
                    'faqs.deleted_at as deleted_at'
                )
                ->where('faqs.id',$id)
                ->first();

        }elseif($id==null && $question==null && $answer==null && $type!=null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            $sqlData = DB::table('faqs')
                ->select(
                    'faqs.id as id',
                    'faqs.question as question',
                    'faqs.answer as answer',
                    'faqs.type as type',

                    'faqs.status as status',
                    'faqs.order_by as order_by',
                    'faqs.created_by_comp_id as created_by_comp_id',
                    'faqs.created_by_user_id as created_by_user_id',
                    'faqs.updated_by_user_id as updated_by_user_id',
                    'faqs.deleted_by_user_id as deleted_by_user_id',
                    'faqs.created_at as created_at',
                    'faqs.updated_at as updated_at',
                    'faqs.deleted_at as deleted_at'
                )
                ->where('faqs.type',$type)
                ->orderBy('faqs.created_at', 'DESC')
                ->paginate();

        }else{

            $sqlData = DB::table('faqs')
                ->select(
                    'faqs.id as id',
                    'faqs.question as question',
                    'faqs.answer as answer',
                    'faqs.type as type',

                    'faqs.status as status',
                    'faqs.order_by as order_by',
                    'faqs.created_by_comp_id as created_by_comp_id',
                    'faqs.created_by_user_id as created_by_user_id',
                    'faqs.updated_by_user_id as updated_by_user_id',
                    'faqs.deleted_by_user_id as deleted_by_user_id',
                    'faqs.created_at as created_at',
                    'faqs.updated_at as updated_at',
                    'faqs.deleted_at as deleted_at'
                )
                ->orderBy('faqs.created_at', 'DESC')
                ->paginate();

        }

        return $sqlData;

    }

    public function GetSettingsSqlData($request, $id, $title, $status, $order_by, $created_by_comp, $created_by_user, $updated_by_user, $deleted_by_user, $created_at, $updated_at, $deleted_at, $page_no, $no_of_records, $record_type){

        if($id!=null){

            $sqlData = DB::table('settings')
                ->select(
                    'settings.id as id',
                    'settings.title as title',
                    'settings.intro as intro',
                    'settings.logo as logo',
                    'settings.icon as icon',
                    'settings.about as about',
                    'settings.about_page as about_page',
                    'settings.email_address as email_address',
                    'settings.phone_number as phone_number',
                    'settings.copyright as copyright',
                    'settings.meta_title as meta_title',
                    'settings.meta_description as meta_description',
                    'settings.meta_keywords as meta_keywords',
                    'settings.author as author',
                    'settings.thumbnail as thumbnail',
                    'settings.url as url',
                    'settings.admin_terms_and_conditions as admin_terms_and_conditions',
                    'settings.agency_terms_and_conditions as agency_terms_and_conditions',
                    'settings.host_terms_and_conditions as host_terms_and_conditions',
                    'settings.agent_terms_and_conditions as agent_terms_and_conditions',
                    'settings.user_terms_and_conditions as user_terms_and_conditions',

                    'settings.facebook_link as facebook_link',
                    'settings.twitter_link as twitter_link',
                    'settings.linkedin_link as linkedin_link',
                    'settings.instagram_link as instagram_link',

                    'settings.appstore_link as appstore_link',
                    'settings.playstore_link as playstore_link',

                    'settings.status as status',
                    'settings.order_by as order_by',
                    'settings.created_by_comp_id as created_by_comp_id',
                    'settings.created_by_user_id as created_by_user_id',
                    'settings.updated_by_user_id as updated_by_user_id',
                    'settings.deleted_by_user_id as deleted_by_user_id',
                    'settings.created_at as created_at',
                    'settings.updated_at as updated_at',
                    'settings.deleted_at as deleted_at'
                )
                ->where('settings.id',$id)
                ->where('settings.status','Active')
                ->first();

        }else{

            $sqlData = DB::table('settings')
                ->select(
                    'settings.id as id',
                    'settings.title as title',
                    'settings.intro as intro',
                    'settings.logo as logo',
                    'settings.icon as icon',
                    'settings.about as about',
                    'settings.about_page as about_page',
                    'settings.email_address as email_address',
                    'settings.phone_number as phone_number',
                    'settings.copyright as copyright',
                    'settings.meta_title as meta_title',
                    'settings.meta_description as meta_description',
                    'settings.meta_keywords as meta_keywords',
                    'settings.author as author',
                    'settings.thumbnail as thumbnail',
                    'settings.url as url',
                    'settings.admin_terms_and_conditions as admin_terms_and_conditions',
                    'settings.agency_terms_and_conditions as agency_terms_and_conditions',
                    'settings.host_terms_and_conditions as host_terms_and_conditions',
                    'settings.agent_terms_and_conditions as agent_terms_and_conditions',
                    'settings.user_terms_and_conditions as user_terms_and_conditions',

                    'settings.facebook_link as facebook_link',
                    'settings.twitter_link as twitter_link',
                    'settings.linkedin_link as linkedin_link',
                    'settings.instagram_link as instagram_link',

                    'settings.appstore_link as appstore_link',
                    'settings.playstore_link as playstore_link',

                    'settings.status as status',
                    'settings.order_by as order_by',
                    'settings.created_by_comp_id as created_by_comp_id',
                    'settings.created_by_user_id as created_by_user_id',
                    'settings.updated_by_user_id as updated_by_user_id',
                    'settings.deleted_by_user_id as deleted_by_user_id',
                    'settings.created_at as created_at',
                    'settings.updated_at as updated_at',
                    'settings.deleted_at as deleted_at'
                )
                ->where('settings.status','Active')
                ->first();
        }

        return $sqlData;

    }




    public function GetParentCategories($request, $id, $title, $slug, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            $sqlData = DB::table('parent_categories')
                ->select(
                    'parent_categories.id as id',
                    'parent_categories.title as title',
                    'parent_categories.slug as slug',
                    'parent_categories.icon as icon',
                    'parent_categories.image as image',
                    'parent_categories.description as description',

                    'parent_categories.status as status',
                    'parent_categories.order_by as order_by',
                    'parent_categories.created_by_comp_id as created_by_comp_id',
                    'parent_categories.created_by_user_id as created_by_user_id',
                    'parent_categories.updated_by_user_id as updated_by_user_id',
                    'parent_categories.deleted_by_user_id as deleted_by_user_id',
                    'parent_categories.created_at as created_at',
                    'parent_categories.updated_at as updated_at',
                    'parent_categories.deleted_at as deleted_at'
                )
                ->where('parent_categories.id',$id)
                ->first();

        }elseif($id!=null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            $sqlData = DB::table('parent_categories')
                ->select(
                    'parent_categories.id as id',
                    'parent_categories.title as title',
                    'parent_categories.slug as slug',
                    'parent_categories.icon as icon',
                    'parent_categories.image as image',
                    'parent_categories.description as description',

                    'parent_categories.status as status',
                    'parent_categories.order_by as order_by',
                    'parent_categories.created_by_comp_id as created_by_comp_id',
                    'parent_categories.created_by_user_id as created_by_user_id',
                    'parent_categories.updated_by_user_id as updated_by_user_id',
                    'parent_categories.deleted_by_user_id as deleted_by_user_id',
                    'parent_categories.created_at as created_at',
                    'parent_categories.updated_at as updated_at',
                    'parent_categories.deleted_at as deleted_at'
                )
                ->where('parent_categories.slug',$slug)
                ->first();

        }elseif($id==null && $title!=null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records!=null && $page_no==null && $record_type=='paginate'){

            $sqlData = DB::table('parent_categories')
                ->select(
                    'parent_categories.id as id',
                    'parent_categories.title as title',
                    'parent_categories.slug as slug',
                    'parent_categories.icon as icon',
                    'parent_categories.image as image',
                    'parent_categories.description as description',

                    'parent_categories.status as status',
                    'parent_categories.order_by as order_by',
                    'parent_categories.created_by_comp_id as created_by_comp_id',
                    'parent_categories.created_by_user_id as created_by_user_id',
                    'parent_categories.updated_by_user_id as updated_by_user_id',
                    'parent_categories.deleted_by_user_id as deleted_by_user_id',
                    'parent_categories.created_at as created_at',
                    'parent_categories.updated_at as updated_at',
                    'parent_categories.deleted_at as deleted_at'
                )
                ->where('parent_categories.title',$title)
                ->orderBy('parent_categories.created_at', 'DESC')
                ->paginate($no_of_records);

        }elseif($id==null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type=='get'){


            $sqlData = DB::table('parent_categories')
                ->select(
                    'parent_categories.id as id',
                    'parent_categories.title as title',
                    'parent_categories.slug as slug',
                    'parent_categories.icon as icon',
                    'parent_categories.image as image',
                    'parent_categories.description as description',

                    'parent_categories.status as status',
                    'parent_categories.order_by as order_by',
                    'parent_categories.created_by_comp_id as created_by_comp_id',
                    'parent_categories.created_by_user_id as created_by_user_id',
                    'parent_categories.updated_by_user_id as updated_by_user_id',
                    'parent_categories.deleted_by_user_id as deleted_by_user_id',
                    'parent_categories.created_at as created_at',
                    'parent_categories.updated_at as updated_at',
                    'parent_categories.deleted_at as deleted_at'
                )
                ->orderBy('parent_categories.id', 'ASC')
                ->get();

        }else{

            $sqlData = DB::table('parent_categories')
                ->select(
                    'parent_categories.id as id',
                    'parent_categories.title as title',
                    'parent_categories.slug as slug',
                    'parent_categories.icon as icon',
                    'parent_categories.image as image',
                    'parent_categories.description as description',

                    'parent_categories.status as status',
                    'parent_categories.order_by as order_by',
                    'parent_categories.created_by_comp_id as created_by_comp_id',
                    'parent_categories.created_by_user_id as created_by_user_id',
                    'parent_categories.updated_by_user_id as updated_by_user_id',
                    'parent_categories.deleted_by_user_id as deleted_by_user_id',
                    'parent_categories.created_at as created_at',
                    'parent_categories.updated_at as updated_at',
                    'parent_categories.deleted_at as deleted_at'
                )
                ->orderBy('parent_categories.id', 'ASC')
                ->paginate();
        }

        return $sqlData;

    }

    public function GetChildCategories($request, $id, $parent_category, $title, $slug, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $parent_category==null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type=='first'){

            $sqlData = DB::table('child_categories')
                ->leftJoin('parent_categories', 'child_categories.parent_category_id', '=', 'parent_categories.id')
                ->select(
                    'child_categories.id as id',

                    'child_categories.parent_category_id as parent_category_id',
                    'parent_categories.title as parent_category_title',
                    'parent_categories.slug as parent_category_slug',


                    'child_categories.title as title',
                    'child_categories.slug as slug',
                    'child_categories.icon as icon',
                    'child_categories.image as image',
                    'child_categories.description as description',

                    'child_categories.status as status',
                    'child_categories.order_by as order_by',
                    'child_categories.created_by_comp_id as created_by_comp_id',
                    'child_categories.created_by_user_id as created_by_user_id',
                    'child_categories.updated_by_user_id as updated_by_user_id',
                    'child_categories.deleted_by_user_id as deleted_by_user_id',
                    'child_categories.created_at as created_at',
                    'child_categories.updated_at as updated_at',
                    'child_categories.deleted_at as deleted_at'
                )
                ->where('child_categories.id',$id)
                ->first();

        }elseif($id==null && $parent_category!=null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type=='get'){

            // $parent_category!=null && $record_type=='get'

            $sqlData = DB::table('child_categories')
                ->leftJoin('parent_categories', 'child_categories.parent_category_id', '=', 'parent_categories.id')
                ->select(
                    'child_categories.id as id',

                    'child_categories.parent_category_id as parent_category_id',
                    'parent_categories.title as parent_category_title',
                    'parent_categories.slug as parent_category_slug',


                    'child_categories.title as title',
                    'child_categories.slug as slug',
                    'child_categories.icon as icon',
                    'child_categories.image as image',
                    'child_categories.description as description',

                    'child_categories.status as status',
                    'child_categories.order_by as order_by',
                    'child_categories.created_by_comp_id as created_by_comp_id',
                    'child_categories.created_by_user_id as created_by_user_id',
                    'child_categories.updated_by_user_id as updated_by_user_id',
                    'child_categories.deleted_by_user_id as deleted_by_user_id',
                    'child_categories.created_at as created_at',
                    'child_categories.updated_at as updated_at',
                    'child_categories.deleted_at as deleted_at'
                )
                ->orWhere('parent_categories.id',$parent_category)
                ->orWhere('parent_categories.slug',$parent_category)
                ->get();

        }elseif($id==null && $parent_category!=null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records!=null && $page_no==null && $record_type=='paginate'){

            //need to modify

            $sqlData = DB::table('child_categories')
                ->leftJoin('parent_categories', 'child_categories.parent_category_id', '=', 'parent_categories.id')
                ->select(
                    'child_categories.id as id',

                    'child_categories.parent_category_id as parent_category_id',
                    'parent_categories.title as parent_category_title',
                    'parent_categories.slug as parent_category_slug',


                    'child_categories.title as title',
                    'child_categories.slug as slug',
                    'child_categories.icon as icon',
                    'child_categories.image as image',
                    'child_categories.description as description',

                    'child_categories.status as status',
                    'child_categories.order_by as order_by',
                    'child_categories.created_by_comp_id as created_by_comp_id',
                    'child_categories.created_by_user_id as created_by_user_id',
                    'child_categories.updated_by_user_id as updated_by_user_id',
                    'child_categories.deleted_by_user_id as deleted_by_user_id',
                    'child_categories.created_at as created_at',
                    'child_categories.updated_at as updated_at',
                    'child_categories.deleted_at as deleted_at'
                )
                ->where('child_categories.parent_category_id',$parent_category)
                ->paginate($no_of_records);

        }elseif($id!=null && $parent_category==null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type=='first'){
            //need to modify
            $sqlData = DB::table('child_categories')
                ->leftJoin('parent_categories', 'child_categories.parent_category_id', '=', 'parent_categories.id')
                ->select(
                    'child_categories.id as id',

                    'child_categories.parent_category_id as parent_category_id',
                    'parent_categories.title as parent_category_title',
                    'parent_categories.slug as parent_category_slug',


                    'child_categories.title as title',
                    'child_categories.slug as slug',
                    'child_categories.icon as icon',
                    'child_categories.image as image',
                    'child_categories.description as description',

                    'child_categories.status as status',
                    'child_categories.order_by as order_by',
                    'child_categories.created_by_comp_id as created_by_comp_id',
                    'child_categories.created_by_user_id as created_by_user_id',
                    'child_categories.updated_by_user_id as updated_by_user_id',
                    'child_categories.deleted_by_user_id as deleted_by_user_id',
                    'child_categories.created_at as created_at',
                    'child_categories.updated_at as updated_at',
                    'child_categories.deleted_at as deleted_at'
                )
                ->where('child_categories.slug',$slug)
                ->first();

        }elseif($id==null && $parent_category==null && $title!=null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records!=null && $page_no==null && $record_type=='paginate'){
            //need to modify
            $sqlData = DB::table('child_categories')
                ->leftJoin('parent_categories', 'child_categories.parent_category_id', '=', 'parent_categories.id')
                ->select(
                    'child_categories.id as id',

                    'child_categories.parent_category_id as parent_category_id',
                    'parent_categories.title as parent_category_title',
                    'parent_categories.slug as parent_category_slug',


                    'child_categories.title as title',
                    'child_categories.slug as slug',
                    'child_categories.icon as icon',
                    'child_categories.image as image',
                    'child_categories.description as description',

                    'child_categories.status as status',
                    'child_categories.order_by as order_by',
                    'child_categories.created_by_comp_id as created_by_comp_id',
                    'child_categories.created_by_user_id as created_by_user_id',
                    'child_categories.updated_by_user_id as updated_by_user_id',
                    'child_categories.deleted_by_user_id as deleted_by_user_id',
                    'child_categories.created_at as created_at',
                    'child_categories.updated_at as updated_at',
                    'child_categories.deleted_at as deleted_at'
                )
                ->where('child_categories.title',$title)
                ->orderBy('child_categories.created_at', 'DESC')
                ->paginate($no_of_records);

        }elseif($id==null && $parent_category==null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type=='get'){
            //need to modify
            $sqlData = DB::table('child_categories')
                ->leftJoin('parent_categories', 'child_categories.parent_category_id', '=', 'parent_categories.id')
                ->select(
                    'child_categories.id as id',

                    'child_categories.parent_category_id as parent_category_id',
                    'parent_categories.title as parent_category_title',
                    'parent_categories.slug as parent_category_slug',


                    'child_categories.title as title',
                    'child_categories.slug as slug',
                    'child_categories.icon as icon',
                    'child_categories.image as image',
                    'child_categories.description as description',

                    'child_categories.status as status',
                    'child_categories.order_by as order_by',
                    'child_categories.created_by_comp_id as created_by_comp_id',
                    'child_categories.created_by_user_id as created_by_user_id',
                    'child_categories.updated_by_user_id as updated_by_user_id',
                    'child_categories.deleted_by_user_id as deleted_by_user_id',
                    'child_categories.created_at as created_at',
                    'child_categories.updated_at as updated_at',
                    'child_categories.deleted_at as deleted_at'
                )
                ->orderBy('child_categories.created_at', 'DESC')
                ->get();

        }else{
            //need to modify
            $sqlData = DB::table('child_categories')
                ->leftJoin('parent_categories', 'child_categories.parent_category_id', '=', 'parent_categories.id')
                ->select(
                    'child_categories.id as id',

                    'child_categories.parent_category_id as parent_category_id',
                    'parent_categories.title as parent_category_title',
                    'parent_categories.slug as parent_category_slug',


                    'child_categories.title as title',
                    'child_categories.slug as slug',
                    'child_categories.icon as icon',
                    'child_categories.image as image',
                    'child_categories.description as description',

                    'child_categories.status as status',
                    'child_categories.order_by as order_by',
                    'child_categories.created_by_comp_id as created_by_comp_id',
                    'child_categories.created_by_user_id as created_by_user_id',
                    'child_categories.updated_by_user_id as updated_by_user_id',
                    'child_categories.deleted_by_user_id as deleted_by_user_id',
                    'child_categories.created_at as created_at',
                    'child_categories.updated_at as updated_at',
                    'child_categories.deleted_at as deleted_at'
                )
                ->orderBy('child_categories.created_at', 'DESC')
                ->get();
        }

        return $sqlData;

    }

    public function GetSubChildCategories($request, $id, $parent_category, $child_category, $title, $slug, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $parent_category==null && $child_category==null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type=='first'){

            $sqlData = DB::table('sub_child_categories')
                ->leftJoin('child_categories', 'sub_child_categories.child_category_id', '=', 'child_categories.id')
                ->select(
                    'sub_child_categories.id as id',
                    'sub_child_categories.child_category_id as child_category_id',
                    'child_categories.title as child_category_title',


                    'sub_child_categories.title as title',
                    'sub_child_categories.slug as slug',
                    'sub_child_categories.icon as icon',
                    'sub_child_categories.image as image',
                    'sub_child_categories.description as description',

                    'sub_child_categories.status as status',
                    'sub_child_categories.order_by as order_by',
                    'sub_child_categories.created_by_comp_id as created_by_comp_id',
                    'sub_child_categories.created_by_user_id as created_by_user_id',
                    'sub_child_categories.updated_by_user_id as updated_by_user_id',
                    'sub_child_categories.deleted_by_user_id as deleted_by_user_id',
                    'sub_child_categories.created_at as created_at',
                    'sub_child_categories.updated_at as updated_at',
                    'sub_child_categories.deleted_at as deleted_at'
                )
                ->where('sub_child_categories.id',$id)
                ->first();

        }elseif($id==null && $parent_category==null && $child_category!=null && $title==null && $slug==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type=='get'){



            // $child_category!=null  && $record_type=='get'

            $sqlData = DB::table('sub_child_categories')
                ->leftJoin('child_categories', 'sub_child_categories.child_category_id', '=', 'child_categories.id')
                ->select(
                    'sub_child_categories.id as id',
                    'sub_child_categories.child_category_id as child_category_id',
                    'child_categories.title as child_category_title',


                    'sub_child_categories.title as title',
                    'sub_child_categories.slug as slug',
                    'sub_child_categories.icon as icon',
                    'sub_child_categories.image as image',
                    'sub_child_categories.description as description',

                    'sub_child_categories.status as status',
                    'sub_child_categories.order_by as order_by',
                    'sub_child_categories.created_by_comp_id as created_by_comp_id',
                    'sub_child_categories.created_by_user_id as created_by_user_id',
                    'sub_child_categories.updated_by_user_id as updated_by_user_id',
                    'sub_child_categories.deleted_by_user_id as deleted_by_user_id',
                    'sub_child_categories.created_at as created_at',
                    'sub_child_categories.updated_at as updated_at',
                    'sub_child_categories.deleted_at as deleted_at'
                )
                ->where('sub_child_categories.child_category_id',$child_category)
                ->get();

        }else{

            $sqlData = DB::table('sub_child_categories')
                ->leftJoin('child_categories', 'sub_child_categories.child_category_id', '=', 'child_categories.id')
                ->select(
                    'sub_child_categories.id as id',
                    'sub_child_categories.child_category_id as child_category_id',
                    'child_categories.title as child_category_title',


                    'sub_child_categories.title as title',
                    'sub_child_categories.slug as slug',
                    'sub_child_categories.icon as icon',
                    'sub_child_categories.image as image',
                    'sub_child_categories.description as description',

                    'sub_child_categories.status as status',
                    'sub_child_categories.order_by as order_by',
                    'sub_child_categories.created_by_comp_id as created_by_comp_id',
                    'sub_child_categories.created_by_user_id as created_by_user_id',
                    'sub_child_categories.updated_by_user_id as updated_by_user_id',
                    'sub_child_categories.deleted_by_user_id as deleted_by_user_id',
                    'sub_child_categories.created_at as created_at',
                    'sub_child_categories.updated_at as updated_at',
                    'sub_child_categories.deleted_at as deleted_at'
                )
                ->orderBy('sub_child_categories.created_at', 'DESC')
                ->get();
        }

        return $sqlData;

    }





    public function GetNewsFeedsSqlData($request, $id, $privacy_id, $description, $type, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $privacy_id==null && $description==null && $type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type=='first'){

            $sqlData = DB::table('newsfeeds')
                ->leftJoin('privacies', 'newsfeeds.privacy_id', '=', 'privacies.id')
                ->leftJoin('users', 'newsfeeds.created_by_user_id', '=', 'users.id')
                ->select(
                    'newsfeeds.id as id',

                    'newsfeeds.privacy_id as privacy_id',
                    'privacies.title as privacy_title',


                    'newsfeeds.description as description',
                    'newsfeeds.thumbnail as thumbnail',
                    'newsfeeds.type as type',

                    'newsfeeds.no_of_likes as no_of_likes',
                    'newsfeeds.no_of_comments as no_of_comments',
                    'newsfeeds.no_of_shares as no_of_shares',

                    'newsfeeds.status as status',
                    'newsfeeds.order_by as order_by',
                    'newsfeeds.created_by_comp_id as created_by_comp_id',

                    'newsfeeds.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',



                    'newsfeeds.updated_by_user_id as updated_by_user_id',
                    'newsfeeds.deleted_by_user_id as deleted_by_user_id',
                    'newsfeeds.created_at as created_at',
                    'newsfeeds.updated_at as updated_at',
                    'newsfeeds.deleted_at as deleted_at'
                )
                ->where('newsfeeds.id',$id)
                ->first();

        }elseif($id==null && $privacy_id==null && $description==null && $type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id!=null && $no_of_records==null && $page_no==null && $record_type=='get'){

            // $session_user_id!=null  && $record_type=='get'


            $sqlData = DB::table('newsfeeds')
                ->leftJoin('privacies', 'newsfeeds.privacy_id', '=', 'privacies.id')
                ->leftJoin('users', 'newsfeeds.created_by_user_id', '=', 'users.id')
                ->select(
                    'newsfeeds.id as id',

                    'newsfeeds.privacy_id as privacy_id',
                    'privacies.title as privacy_title',


                    'newsfeeds.description as description',
                    'newsfeeds.thumbnail as thumbnail',
                    'newsfeeds.type as type',

                    'newsfeeds.no_of_likes as no_of_likes',
                    'newsfeeds.no_of_comments as no_of_comments',
                    'newsfeeds.no_of_shares as no_of_shares',

                    'newsfeeds.status as status',
                    'newsfeeds.order_by as order_by',
                    'newsfeeds.created_by_comp_id as created_by_comp_id',

                    'newsfeeds.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',



                    'newsfeeds.updated_by_user_id as updated_by_user_id',
                    'newsfeeds.deleted_by_user_id as deleted_by_user_id',
                    'newsfeeds.created_at as created_at',
                    'newsfeeds.updated_at as updated_at',
                    'newsfeeds.deleted_at as deleted_at'
                )
                ->where('newsfeeds.created_by_user_id',$session_user_id)
                ->orderBy('newsfeeds.created_at', 'DESC')
                ->get();

        }else{

            $sqlData = DB::table('newsfeeds')
                ->leftJoin('privacies', 'newsfeeds.privacy_id', '=', 'privacies.id')
                ->leftJoin('users', 'newsfeeds.created_by_user_id', '=', 'users.id')
                ->select(
                    'newsfeeds.id as id',

                    'newsfeeds.privacy_id as privacy_id',
                    'privacies.title as privacy_title',


                    'newsfeeds.description as description',
                    'newsfeeds.thumbnail as thumbnail',
                    'newsfeeds.type as type',

                    'newsfeeds.no_of_likes as no_of_likes',
                    'newsfeeds.no_of_comments as no_of_comments',
                    'newsfeeds.no_of_shares as no_of_shares',

                    'newsfeeds.status as status',
                    'newsfeeds.order_by as order_by',
                    'newsfeeds.created_by_comp_id as created_by_comp_id',

                    'newsfeeds.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',



                    'newsfeeds.updated_by_user_id as updated_by_user_id',
                    'newsfeeds.deleted_by_user_id as deleted_by_user_id',
                    'newsfeeds.created_at as created_at',
                    'newsfeeds.updated_at as updated_at',
                    'newsfeeds.deleted_at as deleted_at'
                )
                ->orderBy('newsfeeds.created_at', 'DESC')
                ->get();
        }

        return $sqlData;

    }

    public function GetNewsSqlData($request, $id, $parent_category, $child_category, $sub_child_category, $level_4, $title, $slug, $video_id, $type, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $parent_category==null && $child_category==null && $sub_child_category==null && $title==null && $slug==null && $video_id==null && $type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type=='first'){

            $sqlData = DB::table('news')
                ->leftJoin('child_categories', 'news.level_2_id', '=', 'child_categories.id')
                ->leftJoin('users', 'news.created_by_user_id', '=', 'users.id')
                ->select(
                    'news.id as id',
                    'news.level_2_id as level_2_id',
                    'child_categories.title as child_category_title',

                    'news.title as title',
                    'news.slug as slug',
                    'news.description as description',
                    'news.thumbnail as thumbnail',

                    'news.status as status',
                    'news.order_by as order_by',
                    'news.created_by_comp_id as created_by_comp_id',
                    'news.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',



                    'news.updated_by_user_id as updated_by_user_id',
                    'news.deleted_by_user_id as deleted_by_user_id',
                    'news.created_at as created_at',
                    'news.updated_at as updated_at',
                    'news.deleted_at as deleted_at'
                )
                ->where('news.id',$id)
                ->first();

        }elseif($id==null && $parent_category==null && $child_category==null && $sub_child_category==null && $title==null && $slug!=null && $video_id==null && $type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type=='first'){

            $sqlData = DB::table('news')
                ->leftJoin('child_categories', 'news.level_2_id', '=', 'child_categories.id')
                ->leftJoin('users', 'news.created_by_user_id', '=', 'users.id')
                ->select(
                    'news.id as id',
                    'news.level_2_id as level_2_id',
                    'child_categories.title as child_category_title',

                    'news.title as title',
                    'news.slug as slug',
                    'news.description as description',
                    'news.thumbnail as thumbnail',

                    'news.status as status',
                    'news.order_by as order_by',
                    'news.created_by_comp_id as created_by_comp_id',

                    'news.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',



                    'news.updated_by_user_id as updated_by_user_id',
                    'news.deleted_by_user_id as deleted_by_user_id',
                    'news.created_at as created_at',
                    'news.updated_at as updated_at',
                    'news.deleted_at as deleted_at'
                )
                ->where('news.slug', $slug)
                ->first();


        }elseif($id==null && $parent_category!=null && $child_category==null && $sub_child_category==null && $title==null && $slug==null && $video_id==null && $type==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type=='get'){

            // $child_category!=null  && $record_type=='get'

            $sqlData = DB::table('news')
                ->leftJoin('child_categories', 'news.level_2_id', '=', 'child_categories.id')
                ->leftJoin('users', 'news.created_by_user_id', '=', 'users.id')
                ->select(
                    'news.id as id',
                    'news.level_2_id as level_2_id',
                    'child_categories.title as child_category_title',

                    'news.title as title',
                    'news.slug as slug',
                    'news.description as description',
                    'news.thumbnail as thumbnail',

                    'news.status as status',
                    'news.order_by as order_by',
                    'news.created_by_comp_id as created_by_comp_id',
                    'news.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',



                    'news.updated_by_user_id as updated_by_user_id',
                    'news.deleted_by_user_id as deleted_by_user_id',
                    'news.created_at as created_at',
                    'news.updated_at as updated_at',
                    'news.deleted_at as deleted_at'
                )
                ->where('news.level_1_id',$parent_category)
                ->get();

        }else{

            $sqlData = DB::table('news')
                ->leftJoin('child_categories', 'news.level_2_id', '=', 'child_categories.id')
                ->leftJoin('users', 'news.created_by_user_id', '=', 'users.id')
                ->select(
                    'news.id as id',
                    'news.level_2_id as level_2_id',
                    'child_categories.title as child_category_title',

                    'news.title as title',
                    'news.slug as slug',
                    'news.description as description',
                    'news.thumbnail as thumbnail',

                    'news.status as status',
                    'news.order_by as order_by',
                    'news.created_by_comp_id as created_by_comp_id',
                    'news.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',



                    'news.updated_by_user_id as updated_by_user_id',
                    'news.deleted_by_user_id as deleted_by_user_id',
                    'news.created_at as created_at',
                    'news.updated_at as updated_at',
                    'news.deleted_at as deleted_at'
                )
                ->orderBy('news.created_at', 'DESC')
                ->get();
        }

        return $sqlData;

    }

    public function GetFollowersSqlData($request, $id, $followed_to_id, $followed_type, $action_status, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $followed_to_id==null && $followed_type==null && $action_status==null && $action_status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            //$id!=null

            $sqlData = DB::table('followers')
                ->leftJoin('users', 'followers.created_by_user_id', '=', 'users.id')
                ->leftJoin('users as users2', 'followers.followed_to_id', '=', 'users2.id')
                ->select(
                    'followers.id as id',

                    'followers.followed_to_id as followed_to_id',
                    'users2.id as user2_id',
                    'users2.full_name as user2_full_name',
                    'users2.image as user2_image',
                    'users2.slug as user2_slug',

                    'followers.followed_type as followed_type',
                    'followers.action_status as action_status',

                    'followers.status as status',
                    'followers.order_by as order_by',

                    'followers.created_by_comp_id as created_by_comp_id',

                    'followers.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',


                    'followers.updated_by_user_id as updated_by_user_id',
                    'followers.deleted_by_user_id as deleted_by_user_id',
                    'followers.created_at as created_at',
                    'followers.updated_at as updated_at',
                    'followers.deleted_at as deleted_at'
                )
                ->where('followers.id',$id)
                ->where('followers.status','Active')
                ->first();

        }elseif($id==null && $followed_to_id!=null && $followed_type!=null && $action_status==null && $action_status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            //$followed_to_id!=null && $followed_type!=null


            $sqlData = DB::table('followers')
                ->leftJoin('users', 'followers.created_by_user_id', '=', 'users.id')
                ->leftJoin('users as users2', 'followers.followed_to_id', '=', 'users2.id')
                ->select(
                    'followers.id as id',

                    'followers.followed_to_id as followed_to_id',
                    'users2.id as user2_id',
                    'users2.full_name as user2_full_name',
                    'users2.image as user2_image',
                    'users2.slug as user2_slug',

                    'followers.followed_type as followed_type',
                    'followers.action_status as action_status',

                    'followers.status as status',
                    'followers.order_by as order_by',

                    'followers.created_by_comp_id as created_by_comp_id',

                    'followers.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',


                    'followers.updated_by_user_id as updated_by_user_id',
                    'followers.deleted_by_user_id as deleted_by_user_id',
                    'followers.created_at as created_at',
                    'followers.updated_at as updated_at',
                    'followers.deleted_at as deleted_at'
                )
                ->where('followers.followed_to_id',$followed_to_id)
                ->where('followers.followed_type',$followed_type)
                ->orderBy('followers.order_by', 'DESC')
                ->where('followers.status','Active')
                ->paginate();

        }elseif($id==null && $followed_to_id==null && $followed_type!=null && $action_status==null && $action_status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id!=null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            //$followed_type!=null && $created_by_user_id!=null


            $sqlData = DB::table('followers')
                ->leftJoin('users', 'followers.created_by_user_id', '=', 'users.id')
                ->leftJoin('users as users2', 'followers.followed_to_id', '=', 'users2.id')
                ->select(
                    'followers.id as id',

                    'followers.followed_to_id as followed_to_id',
                    'users2.id as user2_id',
                    'users2.full_name as user2_full_name',
                    'users2.image as user2_image',
                    'users2.slug as user2_slug',

                    'followers.followed_type as followed_type',
                    'followers.action_status as action_status',

                    'followers.status as status',
                    'followers.order_by as order_by',

                    'followers.created_by_comp_id as created_by_comp_id',

                    'followers.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',


                    'followers.updated_by_user_id as updated_by_user_id',
                    'followers.deleted_by_user_id as deleted_by_user_id',
                    'followers.created_at as created_at',
                    'followers.updated_at as updated_at',
                    'followers.deleted_at as deleted_at'
                )
                ->where('followers.followed_type',$followed_type)
                ->where('followers.created_by_user_id',$created_by_user_id)
                ->orderBy('followers.order_by', 'DESC')
                ->where('followers.status','Active')
                ->paginate();

        }elseif($id==null && $followed_to_id!=null && $followed_type!=null && $action_status==null && $action_status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records!=null && $page_no==null && $record_type==null){

            //$followed_to_id!=null && $followed_type!=null && $no_of_records!=null


            $sqlData = DB::table('followers')
                ->leftJoin('users', 'followers.created_by_user_id', '=', 'users.id')
                ->leftJoin('users as users2', 'followers.followed_to_id', '=', 'users2.id')
                ->select(
                    'followers.id as id',

                    'followers.followed_to_id as followed_to_id',
                    'users2.id as user2_id',
                    'users2.full_name as user2_full_name',
                    'users2.image as user2_image',
                    'users2.slug as user2_slug',

                    'followers.followed_type as followed_type',
                    'followers.action_status as action_status',

                    'followers.status as status',
                    'followers.order_by as order_by',

                    'followers.created_by_comp_id as created_by_comp_id',

                    'followers.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',


                    'followers.updated_by_user_id as updated_by_user_id',
                    'followers.deleted_by_user_id as deleted_by_user_id',
                    'followers.created_at as created_at',
                    'followers.updated_at as updated_at',
                    'followers.deleted_at as deleted_at'
                )
                ->where('followers.followed_to_id',$followed_to_id)
                ->where('followers.followed_type',$followed_type)
                ->orderBy('followers.order_by', 'DESC')
                ->where('followers.status','Active')
                ->paginate($no_of_records);

        }elseif($id==null && $followed_to_id!=null && $followed_type!=null && $action_status==null && $action_status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records!=null && $page_no!=null && $record_type==null){

            //$followed_to_id!=null && $followed_type!=null && $no_of_records!=null && $page_no!=null


            $sqlData = DB::table('followers')
                ->leftJoin('users', 'followers.created_by_user_id', '=', 'users.id')
                ->leftJoin('users as users2', 'followers.followed_to_id', '=', 'users2.id')
                ->select(
                    'followers.id as id',

                    'followers.followed_to_id as followed_to_id',
                    'users2.id as user2_id',
                    'users2.full_name as user2_full_name',
                    'users2.image as user2_image',
                    'users2.slug as user2_slug',

                    'followers.followed_type as followed_type',
                    'followers.action_status as action_status',

                    'followers.status as status',
                    'followers.order_by as order_by',

                    'followers.created_by_comp_id as created_by_comp_id',

                    'followers.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',


                    'followers.updated_by_user_id as updated_by_user_id',
                    'followers.deleted_by_user_id as deleted_by_user_id',
                    'followers.created_at as created_at',
                    'followers.updated_at as updated_at',
                    'followers.deleted_at as deleted_at'
                )
                ->where('followers.followed_to_id',$followed_to_id)
                ->where('followers.followed_type',$followed_type)
                ->orderBy('followers.created_at', 'DESC')
                ->where('followers.status','Active')
                ->paginate($no_of_records, ['*'], 'page', $page_no);

        }elseif($id==null && $followed_to_id!=null && $followed_type!=null && $action_status==null && $action_status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id!=null && $no_of_records!=null && $page_no!=null && $record_type==null){

            //$followed_to_id!=null && $followed_type!=null && $session_user_id!=null && $no_of_records!=null && $page_no!=null


            $sqlData = DB::table('followers')
                ->leftJoin('users', 'followers.created_by_user_id', '=', 'users.id')
                ->leftJoin('users as users2', 'followers.followed_to_id', '=', 'users2.id')
                ->select(
                    'followers.id as id',

                    'followers.followed_to_id as followed_to_id',
                    'users2.id as user2_id',
                    'users2.full_name as user2_full_name',
                    'users2.image as user2_image',
                    'users2.slug as user2_slug',

                    'followers.followed_type as followed_type',
                    'followers.action_status as action_status',

                    'followers.status as status',
                    'followers.order_by as order_by',

                    'followers.created_by_comp_id as created_by_comp_id',

                    'followers.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',


                    'followers.updated_by_user_id as updated_by_user_id',
                    'followers.deleted_by_user_id as deleted_by_user_id',
                    'followers.created_at as created_at',
                    'followers.updated_at as updated_at',
                    'followers.deleted_at as deleted_at'
                )
                ->where('followers.followed_to_id',$followed_to_id)
                ->where('followers.followed_type',$followed_type)
                ->where('followers.created_by_user_id',$session_user_id)
                ->orderBy('followers.created_at', 'DESC')
                ->where('followers.status','Active')
                ->paginate($no_of_records, ['*'], 'page', $page_no);

        }else{


            $sqlData = DB::table('followers')
                ->leftJoin('users', 'followers.created_by_user_id', '=', 'users.id')
                ->leftJoin('users as users2', 'followers.followed_to_id', '=', 'users2.id')
                ->select(
                    'followers.id as id',

                    'followers.followed_to_id as followed_to_id',
                    'users2.id as user2_id',
                    'users2.full_name as user2_full_name',
                    'users2.image as user2_image',
                    'users2.slug as user2_slug',

                    'followers.followed_type as followed_type',
                    'followers.action_status as action_status',

                    'followers.status as status',
                    'followers.order_by as order_by',

                    'followers.created_by_comp_id as created_by_comp_id',

                    'followers.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',


                    'followers.updated_by_user_id as updated_by_user_id',
                    'followers.deleted_by_user_id as deleted_by_user_id',
                    'followers.created_at as created_at',
                    'followers.updated_at as updated_at',
                    'followers.deleted_at as deleted_at'
                )
                ->orderBy('followers.order_by', 'DESC')
                ->where('followers.status','Active')
                ->paginate();

        }

        return $sqlData;

    }

    public function GetToBeFollowingSqlData($request, $id, $session_user_id, $session_company_id, $followed_type, $action_status, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $no_of_records, $page_no, $record_type){


        $followersSqlData = DB::table('followers')
            ->leftJoin('users', 'followers.created_by_user_id', '=', 'users.id')
            ->leftJoin('users as users2', 'followers.followed_to_id', '=', 'users2.id')
            ->select(
                'followers.id as id',

                'followers.followed_to_id as followed_to_id',
                'users2.id as user2_id',
                'users2.full_name as user2_full_name',
                'users2.image as user2_image',
                'users2.slug as user2_slug',

                'followers.followed_type as followed_type',
                'followers.action_status as action_status',

                'followers.status as status',
                'followers.order_by as order_by',

                'followers.created_by_comp_id as created_by_comp_id',

                'followers.created_by_user_id as created_by_user_id',
                'users.full_name as user_full_name',
                'users.image as user_image',
                'users.slug as user_slug',


                'followers.updated_by_user_id as updated_by_user_id',
                'followers.deleted_by_user_id as deleted_by_user_id',
                'followers.created_at as created_at',
                'followers.updated_at as updated_at',
                'followers.deleted_at as deleted_at'
            )
            ->where('followers.followed_type',$followed_type)
            ->where('followers.created_by_user_id',$session_user_id)
            //->pluck('user2_id')
            ->pluck('followed_to_id')
            ->toArray();


        if($followed_type=='UserToUser'){

            $sqlData = DB::table('users')
                ->select(
                    'users.id as id',

                    'users.country_code_id as country_code_id',


                    'users.full_name as full_name',
                    'users.gender as gender',
                    'users.username as username',
                    'users.image as image',
                    'users.slug as slug',
                    'users.email as email',
                    'users.remember_token as remember_token',

                    'users.count_following as count_following',
                    'users.count_followers as count_followers',

                    'users.status as status',
                    'users.order_by as order_by',
                    'users.created_by_comp_id as created_by_comp_id',

                    'users.created_by_user_id as created_by_user_id',
                    'users.updated_by_user_id as updated_by_user_id',
                    'users.deleted_by_user_id as deleted_by_user_id',
                    'users.created_at as created_at',
                    'users.updated_at as updated_at',
                    'users.deleted_at as deleted_at'
                )
                ->where('users.id', '!=', $session_user_id)
                ->whereNotIn('users.id', $followersSqlData)
                ->where('users.status','Active')
                ->orderBy('users.order_by', 'ASC')
                ->paginate();

        }else{
            $sqlData=null;
        }

        return $sqlData;

    }

    public function GetAgenciesSqlData($request, $id, $type, $title, $slug, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $type==null && $title==null && $slug==null && $status==null  && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $created_at==null && $session_user_id==null && $no_of_records==null && $page_no==null && $record_type==null){

            //$id!=null

            $sqlData = DB::table('agencies')
                ->leftJoin('users', 'agencies.created_by_user_id', '=', 'users.id')
                ->select(
                    'agencies.id as id',
                    'agencies.title as title',
                    'agencies.slug as slug',
                    'agencies.description as description',
                    'agencies.logo as logo',


                    'agencies.status as status',
                    'agencies.order_by as order_by',

                    'agencies.created_by_comp_id as created_by_comp_id',

                    'agencies.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',


                    'agencies.updated_by_user_id as updated_by_user_id',
                    'agencies.deleted_by_user_id as deleted_by_user_id',
                    'agencies.created_at as created_at',
                    'agencies.updated_at as updated_at',
                    'agencies.deleted_at as deleted_at'
                )
                ->where('agencies.id',$id)
                ->where('agencies.status','Active')
                ->first();

        }else{



            $sqlData = DB::table('agencies')
                ->leftJoin('users', 'agencies.created_by_user_id', '=', 'users.id')
                ->select(
                    'agencies.id as id',
                    'agencies.title as title',
                    'agencies.slug as slug',
                    'agencies.description as description',
                    'agencies.logo as logo',


                    'agencies.status as status',
                    'agencies.order_by as order_by',

                    'agencies.created_by_comp_id as created_by_comp_id',

                    'agencies.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',


                    'agencies.updated_by_user_id as updated_by_user_id',
                    'agencies.deleted_by_user_id as deleted_by_user_id',
                    'agencies.created_at as created_at',
                    'agencies.updated_at as updated_at',
                    'agencies.deleted_at as deleted_at'
                )
                ->orderBy('agencies.order_by', 'DESC')
                ->paginate();

        }

        return $sqlData;

    }




    public function GetPrivaciesSqlData($request, $id, $title, $slug, $type, $status, $order_by, $created_by_comp_id, $created_by_user_id, $created_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null){

            $sqlData = DB::table('privacies')
                ->select(
                    'privacies.id as id',
                    'privacies.title as title',
                    'privacies.slug as slug',
                    'privacies.type as type',
                    'privacies.icon as icon',

                    'privacies.status as status',
                    'privacies.order_by as order_by',
                    'privacies.created_by_comp_id as created_by_comp_id',
                    'privacies.created_by_user_id as created_by_user_id',
                    'privacies.updated_by_user_id as updated_by_user_id',
                    'privacies.deleted_by_user_id as deleted_by_user_id',
                    'privacies.created_at as created_at',
                    'privacies.updated_at as updated_at',
                    'privacies.deleted_at as deleted_at'
                )
                ->where('privacies.id',$id)
                ->orderBy('privacies.order_by', 'ASC')
                ->where('privacies.status','Active')
                ->first();

        }else{


            $sqlData = DB::table('privacies')
                ->select(
                    'privacies.id as id',
                    'privacies.title as title',
                    'privacies.slug as slug',
                    'privacies.type as type',
                    'privacies.icon as icon',

                    'privacies.status as status',
                    'privacies.order_by as order_by',
                    'privacies.created_by_comp_id as created_by_comp_id',
                    'privacies.created_by_user_id as created_by_user_id',
                    'privacies.updated_by_user_id as updated_by_user_id',
                    'privacies.deleted_by_user_id as deleted_by_user_id',
                    'privacies.created_at as created_at',
                    'privacies.updated_at as updated_at',
                    'privacies.deleted_at as deleted_at'
                )
                ->orderBy('privacies.order_by', 'ASC')
                ->where('privacies.status','Active')
                ->get();
        }

        return $sqlData;

    }

    public function GetStoriesSqlData($request, $id, $reference_id, $reference_type, $description, $slug, $published_at, $expires_at, $status, $order_by, $created_by_comp_id, $created_by_user_id, $updated_by_user_id, $deleted_by_user_id, $created_at, $updated_at, $deleted_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $reference_id==null && $reference_type==null && $description==null && $slug==null && $published_at==null && $expires_at==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==nul && $no_of_records==null){

            $sqlData=DB::table('stories')
                ->leftJoin('users', 'stories.created_by_user_id', '=', 'users.id')
                ->select(
                    'stories.id as id',
                    'stories.reference_id as reference_id',
                    'stories.reference_type as reference_type',

                    'stories.slug as slug',
                    'stories.description as description',
                    'stories.thumbnail as thumbnail',
                    'stories.published_at as published_at',
                    'stories.expires_at as expires_at',

                    'stories.status as status',
                    'stories.order_by as order_by',



                    'stories.created_by_comp_id as created_by_comp_id',

                    'stories.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',

                    'stories.updated_by_user_id as updated_by_user_id',
                    'stories.deleted_by_user_id as deleted_by_user_id',
                    'stories.created_at as created_at',
                    'stories.updated_at as updated_at',
                    'stories.deleted_at as deleted_at'

                )
                ->where('stories.id',$id)
                ->where('stories.status','Active')
                ->first();

        }elseif($id==null && $reference_id==null && $reference_type==null && $description!=null && $slug==null && $published_at==null && $expires_at==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id!=null && $no_of_records!=null){

            // $title!=null && $session_user_id!=null && $no_of_records!=null

            $sqlData=DB::table('stories')
                ->leftJoin('users', 'stories.created_by_user_id', '=', 'users.id')
                ->select(
                    'stories.id as id',
                    'stories.reference_id as reference_id',
                    'stories.reference_type as reference_type',

                    'stories.slug as slug',
                    'stories.description as description',
                    'stories.thumbnail as thumbnail',
                    'stories.published_at as published_at',
                    'stories.expires_at as expires_at',

                    'stories.status as status',
                    'stories.order_by as order_by',



                    'stories.created_by_comp_id as created_by_comp_id',

                    'stories.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',

                    'stories.updated_by_user_id as updated_by_user_id',
                    'stories.deleted_by_user_id as deleted_by_user_id',
                    'stories.created_at as created_at',
                    'stories.updated_at as updated_at',
                    'stories.deleted_at as deleted_at'

                )
                ->where('stories.created_at', '>=' , date('Y-m-d H:i:s', strtotime("-1 day")))
                ->whereNotIn('stories.created_by_user_id',[$session_user_id])
                ->where('users.full_name', 'like', '%' . $description . '%')
                ->where('stories.status','Active')
                ->orderBy('stories.created_at', 'DESC')
                ->paginate($no_of_records);

        }elseif($id==null && $reference_id==null && $reference_type==null && $description==null && $slug==null && $published_at==null && $expires_at==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id!=null && $no_of_records!=null){

            //$session_user_id!=null && $no_of_records!=null

            $sqlData=DB::table('stories')
                ->leftJoin('users', 'stories.created_by_user_id', '=', 'users.id')
                ->select(
                    'stories.id as id',
                    'stories.reference_id as reference_id',
                    'stories.reference_type as reference_type',

                    'stories.slug as slug',
                    'stories.description as description',
                    'stories.thumbnail as thumbnail',
                    'stories.published_at as published_at',
                    'stories.expires_at as expires_at',

                    'stories.status as status',
                    'stories.order_by as order_by',



                    'stories.created_by_comp_id as created_by_comp_id',

                    'stories.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',

                    'stories.updated_by_user_id as updated_by_user_id',
                    'stories.deleted_by_user_id as deleted_by_user_id',
                    'stories.created_at as created_at',
                    'stories.updated_at as updated_at',
                    'stories.deleted_at as deleted_at'

                )
                ->where('stories.created_at', '>=' , date('Y-m-d H:i:s', strtotime("-1 day")))
                ->whereNotIn('stories.created_by_user_id',[$session_user_id])
                ->where('stories.status','Active')
                ->orderBy('stories.created_at', 'DESC')
                ->paginate($no_of_records);

        }else{


            $sqlData=DB::table('stories')
                ->leftJoin('users', 'stories.created_by_user_id', '=', 'users.id')
                ->select(
                    'stories.id as id',
                    'stories.reference_id as reference_id',
                    'stories.reference_type as reference_type',

                    'stories.slug as slug',
                    'stories.description as description',
                    'stories.thumbnail as thumbnail',
                    'stories.published_at as published_at',
                    'stories.expires_at as expires_at',

                    'stories.status as status',
                    'stories.order_by as order_by',



                    'stories.created_by_comp_id as created_by_comp_id',

                    'stories.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',

                    'stories.updated_by_user_id as updated_by_user_id',
                    'stories.deleted_by_user_id as deleted_by_user_id',
                    'stories.created_at as created_at',
                    'stories.updated_at as updated_at',
                    'stories.deleted_at as deleted_at'

                )
                ->where('stories.created_at', '>=' , date('Y-m-d H:i:s', strtotime("-1 day")))
                ->where('stories.status','Active')
                ->orderBy('stories.created_at', 'DESC')
                ->paginate($no_of_records);
        }

        return $sqlData;


    }

    public function GetStoryItemsSqlData($request, $id, $story_id, $reference_id, $reference_type, $privacy_id, $title, $slug, $published_at, $expires_at, $tags, $visitor, $status, $order_by, $created_by_comp_id, $created_by_user_id, $updated_by_user_id, $deleted_by_user_id, $created_at, $updated_at, $deleted_at, $session_user_id, $no_of_records){

        if($id!=null && $story_id==null && $reference_id==null && $reference_type==null && $privacy_id==null && $title==null && $slug==null && $published_at==null && $expires_at==null && $tags==null && $visitor==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records==null){

            //$id!=null

            $sqlData=DB::table('story_items')
                ->leftJoin('users', 'story_items.created_by_user_id', '=', 'users.id')
                ->leftJoin('companies', 'story_items.created_by_comp_id', '=', 'companies.id')
                ->leftJoin('bsls', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'bsls.id');
                    $join->where('story_items.reference_type', '=', 'bsl');
                })
                ->leftJoin('jobs', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'jobs.id');
                    $join->where('story_items.reference_type', '=', 'job');
                })
                ->leftJoin('marketplaces', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'marketplaces.id');
                    $join->where('story_items.reference_type', '=', 'marketplace');
                })
                ->leftJoin('companies as companies2', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'companies.id');
                    $join->where('story_items.reference_type', '=', 'company');
                })
                ->leftJoin('qnas', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'qnas.id');
                    $join->where('story_items.reference_type', '=', 'qa');
                })
                ->leftJoin('properties', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'properties.id');
                    $join->orWhere('story_items.reference_type', '=', 'Property');
                    $join->orWhere('story_items.reference_type', '=', 'Project');
                    $join->orWhere('story_items.reference_type', '=', 'Auction');
                })
                ->leftJoin('events', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'events.id');
                    $join->where('story_items.reference_type', '=', 'Event');
                })
                ->leftJoin('blog_posts', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'blog_posts.id');
                    $join->orWhere('story_items.reference_type', '=', 'Blog');
                    $join->orWhere('story_items.reference_type', '=', 'News');
                })
                ->select(
                    'story_items.id as id',
                    'story_items.story_id as story_id',
                    'story_items.reference_id as reference_id',
                    'story_items.reference_type as reference_type',
                    'story_items.privacy_id as privacy_id',

                    'bsls.slug as bsl_slug',
                    'bsls.title as bsl_title',
                    'bsls.description as bsl_description',

                    'jobs.slug as job_slug',
                    'jobs.title as job_title',
                    'jobs.description as job_description',

                    'marketplaces.slug as marketplace_slug',
                    'marketplaces.title as marketplace_title',
                    'marketplaces.description as marketplace_description',

                    'companies2.slug as company2_slug',
                    'companies2.name as company2_title',
                    'companies2.about as company2_about',
                    'companies2.logo as company2_logo',

                    'qnas.slug as qna_slug',
                    'qnas.title as qna_title',
                    'qnas.description as qna_description',

                    'properties.slug as property_slug',
                    'properties.title as property_title',
                    'properties.description as property_description',

                    'events.slug as event_slug',
                    'events.title as event_title',
                    'events.description as event_description',

                    'blog_posts.slug as blog_post_slug',
                    'blog_posts.title as blog_post_title',
                    'blog_posts.description as blog_post_description',


                    'story_items.title as title',
                    'story_items.slug as slug',
                    'story_items.description as description',
                    'story_items.photo_video as photo_video',
                    'story_items.published_at as published_at',
                    'story_items.expires_at as expires_at',
                    'story_items.tags as tags',

                    'story_items.save_count as save_count',
                    'story_items.refresh_count as refresh_count',
                    'story_items.image_count as image_count',
                    'story_items.video_count as video_count',
                    'story_items.file_count as file_count',

                    'story_items.visitor as visitor',

                    'story_items.no_of_likes as no_of_likes',
                    'story_items.no_of_comments as no_of_comments',
                    'story_items.no_of_share as no_of_share',


                    'story_items.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.display_name as user_display_name',
                    'users.img as user_img',
                    'users.timezone as user_timezone',
                    'users.slug as user_slug',

                    'story_items.created_by_comp_id as created_by_comp_id',
                    'companies.name as company_title',
                    'companies.slug as company_slug',
                    'companies.logo as company_logo',
                    'companies.about as company_about',
                    'companies.verification_status as company_verification_status',
                    'companies.rating as company_rating',
                    'companies.slogan as company_slogan',
                    'companies.no_of_reviews as company_no_of_reviews',
                    'companies.since as company_since',

                    'story_items.status as status',
                    'story_items.order_by as order_by',


                    'story_items.updated_by_user_id as updated_by_user_id',
                    'story_items.deleted_by_user_id as deleted_by_user_id',
                    'story_items.created_at as created_at',
                    'story_items.updated_at as updated_at',
                    'story_items.deleted_at as deleted_at'

                )
                ->where('story_items.id',$id)
                ->where('story_items.status','Active')
                ->first();

        }elseif($id==null && $story_id!=null && $reference_id==null && $reference_type==null && $privacy_id==null && $title==null && $slug==null && $published_at==null && $expires_at==null && $tags==null && $visitor==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records==null){

            //$story_id!=null

            $start=date('Y-m-d H:i:s', strtotime("-1 day"));

            $sqlData=DB::table('story_items')
                ->leftJoin('users', 'story_items.created_by_user_id', '=', 'users.id')
                ->leftJoin('companies', 'story_items.created_by_comp_id', '=', 'companies.id')
                ->leftJoin('bsls', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'bsls.id');
                    $join->where('story_items.reference_type', '=', 'bsl');
                })
                ->leftJoin('jobs', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'jobs.id');
                    $join->where('story_items.reference_type', '=', 'job');
                })
                ->leftJoin('marketplaces', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'marketplaces.id');
                    $join->where('story_items.reference_type', '=', 'marketplace');
                })
                ->leftJoin('companies as companies2', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'companies.id');
                    $join->where('story_items.reference_type', '=', 'company');
                })
                ->leftJoin('qnas', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'qnas.id');
                    $join->where('story_items.reference_type', '=', 'qa');
                })
                ->leftJoin('properties', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'properties.id');
                    $join->orWhere('story_items.reference_type', '=', 'Property');
                    $join->orWhere('story_items.reference_type', '=', 'Project');
                    $join->orWhere('story_items.reference_type', '=', 'Auction');
                })
                ->leftJoin('events', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'events.id');
                    $join->where('story_items.reference_type', '=', 'Event');
                })
                ->leftJoin('blog_posts', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'blog_posts.id');
                    $join->orWhere('story_items.reference_type', '=', 'Blog');
                    $join->orWhere('story_items.reference_type', '=', 'News');
                })
                ->select(
                    'story_items.id as id',
                    'story_items.story_id as story_id',
                    'story_items.reference_id as reference_id',
                    'story_items.reference_type as reference_type',
                    'story_items.privacy_id as privacy_id',

                    'bsls.slug as bsl_slug',
                    'bsls.title as bsl_title',
                    'bsls.description as bsl_description',

                    'jobs.slug as job_slug',
                    'jobs.title as job_title',
                    'jobs.description as job_description',

                    'marketplaces.slug as marketplace_slug',
                    'marketplaces.title as marketplace_title',
                    'marketplaces.description as marketplace_description',

                    'companies2.slug as company2_slug',
                    'companies2.name as company2_title',
                    'companies2.about as company2_about',
                    'companies2.logo as company2_logo',

                    'qnas.slug as qna_slug',
                    'qnas.title as qna_title',
                    'qnas.description as qna_description',

                    'properties.slug as property_slug',
                    'properties.title as property_title',
                    'properties.description as property_description',

                    'events.slug as event_slug',
                    'events.title as event_title',
                    'events.description as event_description',

                    'blog_posts.slug as blog_post_slug',
                    'blog_posts.title as blog_post_title',
                    'blog_posts.description as blog_post_description',


                    'story_items.title as title',
                    'story_items.slug as slug',
                    'story_items.description as description',
                    'story_items.photo_video as photo_video',
                    'story_items.published_at as published_at',
                    'story_items.expires_at as expires_at',
                    'story_items.tags as tags',

                    'story_items.save_count as save_count',
                    'story_items.refresh_count as refresh_count',
                    'story_items.image_count as image_count',
                    'story_items.video_count as video_count',
                    'story_items.file_count as file_count',

                    'story_items.visitor as visitor',

                    'story_items.no_of_likes as no_of_likes',
                    'story_items.no_of_comments as no_of_comments',
                    'story_items.no_of_share as no_of_share',


                    'story_items.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.display_name as user_display_name',
                    'users.img as user_img',
                    'users.timezone as user_timezone',
                    'users.slug as user_slug',

                    'story_items.created_by_comp_id as created_by_comp_id',
                    'companies.name as company_title',
                    'companies.slug as company_slug',
                    'companies.logo as company_logo',
                    'companies.about as company_about',
                    'companies.verification_status as company_verification_status',
                    'companies.rating as company_rating',
                    'companies.slogan as company_slogan',
                    'companies.no_of_reviews as company_no_of_reviews',
                    'companies.since as company_since',

                    'story_items.status as status',
                    'story_items.order_by as order_by',


                    'story_items.updated_by_user_id as updated_by_user_id',
                    'story_items.deleted_by_user_id as deleted_by_user_id',
                    'story_items.created_at as created_at',
                    'story_items.updated_at as updated_at',
                    'story_items.deleted_at as deleted_at'

                )
                ->where('story_items.story_id',$story_id)
                ->where('story_items.created_at', '>=' , $start)
                ->where('story_items.status','Active')
                ->get();

        }elseif($id==null && $story_id==null && $reference_id==null && $reference_type==null && $privacy_id==null && $title==null && $slug==null && $published_at==null && $expires_at==null && $tags==null && $visitor==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id!=null && $no_of_records==null){

            //$session_user_id!=null


            $start=date('Y-m-d H:i:s', strtotime("-1 day"));

            $sqlData=DB::table('story_items')
                ->leftJoin('users', 'story_items.created_by_user_id', '=', 'users.id')
                ->leftJoin('companies', 'story_items.created_by_comp_id', '=', 'companies.id')
                ->leftJoin('bsls', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'bsls.id');
                    $join->where('story_items.reference_type', '=', 'bsl');
                })
                ->leftJoin('jobs', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'jobs.id');
                    $join->where('story_items.reference_type', '=', 'job');
                })
                ->leftJoin('marketplaces', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'marketplaces.id');
                    $join->where('story_items.reference_type', '=', 'marketplace');
                })
                ->leftJoin('companies as companies2', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'companies.id');
                    $join->where('story_items.reference_type', '=', 'company');
                })
                ->leftJoin('qnas', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'qnas.id');
                    $join->where('story_items.reference_type', '=', 'qa');
                })
                ->leftJoin('properties', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'properties.id');
                    $join->orWhere('story_items.reference_type', '=', 'Property');
                    $join->orWhere('story_items.reference_type', '=', 'Project');
                    $join->orWhere('story_items.reference_type', '=', 'Auction');
                })
                ->leftJoin('events', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'events.id');
                    $join->where('story_items.reference_type', '=', 'Event');
                })
                ->leftJoin('blog_posts', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'blog_posts.id');
                    $join->orWhere('story_items.reference_type', '=', 'Blog');
                    $join->orWhere('story_items.reference_type', '=', 'News');
                })
                ->select(
                    'story_items.id as id',
                    'story_items.story_id as story_id',
                    'story_items.reference_id as reference_id',
                    'story_items.reference_type as reference_type',
                    'story_items.privacy_id as privacy_id',

                    'bsls.slug as bsl_slug',
                    'bsls.title as bsl_title',
                    'bsls.description as bsl_description',

                    'jobs.slug as job_slug',
                    'jobs.title as job_title',
                    'jobs.description as job_description',

                    'marketplaces.slug as marketplace_slug',
                    'marketplaces.title as marketplace_title',
                    'marketplaces.description as marketplace_description',

                    'companies2.slug as company2_slug',
                    'companies2.name as company2_title',
                    'companies2.about as company2_about',
                    'companies2.logo as company2_logo',

                    'qnas.slug as qna_slug',
                    'qnas.title as qna_title',
                    'qnas.description as qna_description',

                    'properties.slug as property_slug',
                    'properties.title as property_title',
                    'properties.description as property_description',

                    'events.slug as event_slug',
                    'events.title as event_title',
                    'events.description as event_description',

                    'blog_posts.slug as blog_post_slug',
                    'blog_posts.title as blog_post_title',
                    'blog_posts.description as blog_post_description',


                    'story_items.title as title',
                    'story_items.slug as slug',
                    'story_items.description as description',
                    'story_items.photo_video as photo_video',
                    'story_items.published_at as published_at',
                    'story_items.expires_at as expires_at',
                    'story_items.tags as tags',

                    'story_items.save_count as save_count',
                    'story_items.refresh_count as refresh_count',
                    'story_items.image_count as image_count',
                    'story_items.video_count as video_count',
                    'story_items.file_count as file_count',

                    'story_items.visitor as visitor',

                    'story_items.no_of_likes as no_of_likes',
                    'story_items.no_of_comments as no_of_comments',
                    'story_items.no_of_share as no_of_share',


                    'story_items.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.display_name as user_display_name',
                    'users.img as user_img',
                    'users.timezone as user_timezone',
                    'users.slug as user_slug',

                    'story_items.created_by_comp_id as created_by_comp_id',
                    'companies.name as company_title',
                    'companies.slug as company_slug',
                    'companies.logo as company_logo',
                    'companies.about as company_about',
                    'companies.verification_status as company_verification_status',
                    'companies.rating as company_rating',
                    'companies.slogan as company_slogan',
                    'companies.no_of_reviews as company_no_of_reviews',
                    'companies.since as company_since',

                    'story_items.status as status',
                    'story_items.order_by as order_by',


                    'story_items.updated_by_user_id as updated_by_user_id',
                    'story_items.deleted_by_user_id as deleted_by_user_id',
                    'story_items.created_at as created_at',
                    'story_items.updated_at as updated_at',
                    'story_items.deleted_at as deleted_at'

                )
                ->where('story_items.created_at', '>=' , $start)
                ->where('story_items.created_by_user_id',$session_user_id)
                ->where('story_items.status','Active')
                ->get();

        }else{

            $sqlData=DB::table('story_items')
                ->leftJoin('users', 'story_items.created_by_user_id', '=', 'users.id')
                ->leftJoin('companies', 'story_items.created_by_comp_id', '=', 'companies.id')
                ->leftJoin('bsls', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'bsls.id');
                    $join->where('story_items.reference_type', '=', 'bsl');
                })
                ->leftJoin('jobs', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'jobs.id');
                    $join->where('story_items.reference_type', '=', 'job');
                })
                ->leftJoin('marketplaces', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'marketplaces.id');
                    $join->where('story_items.reference_type', '=', 'marketplace');
                })
                ->leftJoin('companies as companies2', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'companies.id');
                    $join->where('story_items.reference_type', '=', 'company');
                })
                ->leftJoin('qnas', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'qnas.id');
                    $join->where('story_items.reference_type', '=', 'qa');
                })
                ->leftJoin('properties', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'properties.id');
                    $join->orWhere('story_items.reference_type', '=', 'Property');
                    $join->orWhere('story_items.reference_type', '=', 'Project');
                    $join->orWhere('story_items.reference_type', '=', 'Auction');
                })
                ->leftJoin('events', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'events.id');
                    $join->where('story_items.reference_type', '=', 'Event');
                })
                ->leftJoin('blog_posts', function($join)
                {
                    $join->on('story_items.reference_id', '=', 'blog_posts.id');
                    $join->orWhere('story_items.reference_type', '=', 'Blog');
                    $join->orWhere('story_items.reference_type', '=', 'News');
                })
                ->select(
                    'story_items.id as id',
                    'story_items.story_id as story_id',
                    'story_items.reference_id as reference_id',
                    'story_items.reference_type as reference_type',
                    'story_items.privacy_id as privacy_id',

                    'bsls.slug as bsl_slug',
                    'bsls.title as bsl_title',
                    'bsls.description as bsl_description',

                    'jobs.slug as job_slug',
                    'jobs.title as job_title',
                    'jobs.description as job_description',

                    'marketplaces.slug as marketplace_slug',
                    'marketplaces.title as marketplace_title',
                    'marketplaces.description as marketplace_description',

                    'companies2.slug as company2_slug',
                    'companies2.name as company2_title',
                    'companies2.about as company2_about',
                    'companies2.logo as company2_logo',

                    'qnas.slug as qna_slug',
                    'qnas.title as qna_title',
                    'qnas.description as qna_description',

                    'properties.slug as property_slug',
                    'properties.title as property_title',
                    'properties.description as property_description',

                    'events.slug as event_slug',
                    'events.title as event_title',
                    'events.description as event_description',

                    'blog_posts.slug as blog_post_slug',
                    'blog_posts.title as blog_post_title',
                    'blog_posts.description as blog_post_description',


                    'story_items.title as title',
                    'story_items.slug as slug',
                    'story_items.description as description',
                    'story_items.photo_video as photo_video',
                    'story_items.published_at as published_at',
                    'story_items.expires_at as expires_at',
                    'story_items.tags as tags',

                    'story_items.save_count as save_count',
                    'story_items.refresh_count as refresh_count',
                    'story_items.image_count as image_count',
                    'story_items.video_count as video_count',
                    'story_items.file_count as file_count',

                    'story_items.visitor as visitor',

                    'story_items.no_of_likes as no_of_likes',
                    'story_items.no_of_comments as no_of_comments',
                    'story_items.no_of_share as no_of_share',


                    'story_items.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.display_name as user_display_name',
                    'users.img as user_img',
                    'users.timezone as user_timezone',
                    'users.slug as user_slug',

                    'story_items.created_by_comp_id as created_by_comp_id',
                    'companies.name as company_title',
                    'companies.slug as company_slug',
                    'companies.logo as company_logo',
                    'companies.about as company_about',
                    'companies.verification_status as company_verification_status',
                    'companies.rating as company_rating',
                    'companies.slogan as company_slogan',
                    'companies.no_of_reviews as company_no_of_reviews',
                    'companies.since as company_since',

                    'story_items.status as status',
                    'story_items.order_by as order_by',


                    'story_items.updated_by_user_id as updated_by_user_id',
                    'story_items.deleted_by_user_id as deleted_by_user_id',
                    'story_items.created_at as created_at',
                    'story_items.updated_at as updated_at',
                    'story_items.deleted_at as deleted_at'

                )
                ->where('story_items.status','Active')
                ->get();
        }

        return $sqlData;


    }



    public function GetBroadcastsSqlData($request, $id, $reference_id, $reference_type, $description, $slug, $published_at, $expires_at, $status, $order_by, $created_by_comp_id, $created_by_user_id, $updated_by_user_id, $deleted_by_user_id, $created_at, $updated_at, $deleted_at, $session_user_id, $no_of_records, $page_no, $record_type){

        if($id!=null && $reference_id==null && $reference_type==null && $description==null && $slug==null && $published_at==null && $expires_at==null && $status==null && $order_by==null && $created_by_comp_id==null && $created_by_user_id==null && $updated_by_user_id==null && $deleted_by_user_id==null && $created_at==null && $updated_at==null && $deleted_at==null && $session_user_id==null && $no_of_records==null){

            $sqlData=DB::table('broadcasts')
                ->leftJoin('users', 'broadcasts.created_by_user_id', '=', 'users.id')
                ->select(
                    'broadcasts.id as id',

                    'broadcasts.slug as slug',
                    'broadcasts.description as description',
                    'broadcasts.thumbnail as thumbnail',
                    'broadcasts.url as url',
                    'broadcasts.type as type',

                    'broadcasts.status as status',
                    'broadcasts.order_by as order_by',



                    'broadcasts.created_by_comp_id as created_by_comp_id',

                    'broadcasts.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',

                    'broadcasts.updated_by_user_id as updated_by_user_id',
                    'broadcasts.deleted_by_user_id as deleted_by_user_id',
                    'broadcasts.created_at as created_at',
                    'broadcasts.updated_at as updated_at',
                    'broadcasts.deleted_at as deleted_at'

                )
                ->where('broadcasts.id',$id)
                ->where('broadcasts.status','Active')
                ->first();

        }else{


            $sqlData=DB::table('broadcasts')
                ->leftJoin('users', 'broadcasts.created_by_user_id', '=', 'users.id')
                ->select(
                    'broadcasts.id as id',

                    'broadcasts.slug as slug',
                    'broadcasts.description as description',
                    'broadcasts.thumbnail as thumbnail',
                    'broadcasts.url as url',
                    'broadcasts.type as type',

                    'broadcasts.status as status',
                    'broadcasts.order_by as order_by',



                    'broadcasts.created_by_comp_id as created_by_comp_id',

                    'broadcasts.created_by_user_id as created_by_user_id',
                    'users.full_name as user_full_name',
                    'users.image as user_image',
                    'users.slug as user_slug',

                    'broadcasts.updated_by_user_id as updated_by_user_id',
                    'broadcasts.deleted_by_user_id as deleted_by_user_id',
                    'broadcasts.created_at as created_at',
                    'broadcasts.updated_at as updated_at',
                    'broadcasts.deleted_at as deleted_at'

                )
                ->where('broadcasts.status','Active')
                ->orderBy('broadcasts.created_at', 'DESC')
                ->paginate(15);
        }

        return $sqlData;


    }




}
