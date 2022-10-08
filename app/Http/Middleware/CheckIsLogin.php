<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Session;


class CheckIsLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(Session::has('project')){

            if (Auth::check()) {
                $user = Auth::user();

                try{


                    return $next($request);


                }catch(Exception $e){



                }

            }

        }else{

            return redirect('/sign-in');

            // Generating URLs...
            // $url = route('profile');

            // Generating Redirects...
            // return redirect()->route('profile');
        }

    }
}
