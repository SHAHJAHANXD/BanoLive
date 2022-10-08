<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoicesController extends GeneralController
{


    public function index(Request $request){

        // -------------------Basic--------------------------

        $is_session=$this->GetSession();

        if($is_session){
            $session_user_id = $request->session()->get('project')->id;
            $User=$this->GetUsersSqlData($request, $session_user_id, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        }else{
            $User=null;
        }

        // -------------------Basic--------------------------


        $Orders=$this->GetOrdersSqlData($request, null, null, null, null, null, null, null, null, null, null, null);

        $Invoices=$this->GetInvoicesSqlData($request, null, null, null, null, null, null, null, null, null, null, null);





        return view('panel.invoices',[

            'is_session'=>$is_session,
            'User' => $User,
            'page'=>'Dashboard',

            'Orders'=>$Orders,
            'Invoices'=>$Invoices,

        ]);

    }



}
