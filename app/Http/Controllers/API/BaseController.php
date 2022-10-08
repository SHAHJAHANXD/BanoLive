<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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




}
