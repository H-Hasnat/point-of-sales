<?php

namespace App\Http\Middleware;

use App\JWTToken\jwtoken;
use Closure;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next):Response
    {
        $token=$request->cookie('token');
        $res=jwtoken::verifyToken($token);

        // return response()->json([
        //     'res'=>$res,
        //     'token'=>$token
        // ]);


            if($res!=='unauthorized'){

              $request->headers->set('id',$res->userid);
            // foreach($res as $val){
            //     $request->headers->set('email',$val);
            // }

            $request->headers->set('email',$res->email);

                // echo $res;
                return $next($request);

            }else{
                return redirect()->route('user-login');

            }

    }
}
