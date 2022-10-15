<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers;
use App\Models\Banners;
use Illuminate\Http\Request;

class ApiBannerController extends Controllers\BaseController
{
    
    public function getListOfbanners(){
        $banners = Banners::where('del_status',0)->select('id','banner_image','banner_number','banner_status')->orderBy('id', 'desc')->get();
        if (!$banners) {
            return $this->sendError('Not Found.', ['error' => 'No Banner found.']);
        }
        foreach($banners as $key => $val){
            $banners[$key]['banner_status'] = (isset($val['banner_status']) && $val['banner_status'] == 1 ? 'Active' : 'Inactive');
        }
        $success = $banners;
        return $this->sendResponse(false,200,$success ?? [], 'Banners found!.');
    }
}
