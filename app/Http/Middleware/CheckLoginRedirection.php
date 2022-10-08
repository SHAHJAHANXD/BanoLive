<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Session;

class CheckLoginRedirection
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

                    if($user->status=='Active'){

                        return redirect()->route('social.newsfeed');

                    }else{

                        return redirect()->route('backend.alert');
                    }

                    // use it when redirect to specific route after login

                }catch(Exception $e){

                }
            }
            return $next($request);
        }else{
            return $next($request);
        }
    }
}
