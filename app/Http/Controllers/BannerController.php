<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use Illuminate\Http\Request;

class BannerController extends GeneralController
{
    /**
     * Display a listing of the banners.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $is_session = $this->GetSession();

        if ($is_session) {
            $session_user_id = $request->session()->get('project')->id;
            $User = $this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        } else {
            $session_user_id = null;
            $User = null;
        }
        $banners = Banners::where('del_status',0)->orderBy('id', 'desc')
            ->get();
        $Settings = $this->GetSettingsSqlData($request, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

        return view('panel.banners.index', [

            'is_session' => $is_session,
            'User' => $User,
            'banners' => $banners,
            'Settings' => $Settings
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = [
            'banner_number' => $request->banner_number,
            'banner_status' => $request->banner_status,
        ];
        $banners = Banners::create($data);
        if ($request->banner_image) {
            $imageName = 'banner' . time() . '.' . $request->banner_image->getClientOriginalExtension();
            $request->banner_image->move(public_path('storage/images/banners/'), $imageName);
            $thumbnailpath = url('/') . '/' . 'storage/images/banners/' . $imageName;
            $banners->banner_image = $thumbnailpath;
        }
        $banners->save($data);
        return redirect()->route('banner.List');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banners = Banners::where('id', $id)->update(['del_status' => 1]);
        return redirect()->route('banner.List');
    }

 /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateStatus (Request $request)
    {
        $status = false;
        $id = $request->id;
        $status = $request->status;
        if (isset($id) && !empty($id)) {
            if ($status == 0) {
                $status = 1;
            } else {
                $status = 0;
            }
            $change = Banners::where('id', $id)->update(['banner_status' => $status]);
            $status = true;
        }
        return response()->json(['status' => $status]);
    }
}
