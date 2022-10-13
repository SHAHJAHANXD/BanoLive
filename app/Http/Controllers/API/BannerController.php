<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use Illuminate\Http\Request;


class BannerController extends BaseController
{
    public function getListOfbanners(){
        $banners = Banners::where('del_status',0)->select('id','banner_image','banner_number','banner_status')->orderBy('id', 'desc')->get();
        if (!$banners) {
            return $this->sendError('Not Found.', ['error' => 'No Banner found.']);
        }
        foreach($banners as $key => $val){
            $banners[$key]['banner_status'] = (isset($val['banner_status']) && $val['banner_status'] == 1 ? 'Active' : 'Inactive');
        }
        $success['Banners'] = $banners;
        return $this->sendResponse(true,200,$success ?? [], 'Banners found!.');
    }
}
