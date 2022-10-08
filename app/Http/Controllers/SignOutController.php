<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignOutController extends BaseController
{
    public function signOut(Request $request){


        $request->session()->forget('project');
        return redirect('/sign-in');


    }
}
