<?php

namespace App\JWTToken;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class jwtoken{

  public static function createJWT($email,$id){
        $key=env('JWTKEY');
        $payload=[
            'iss'=>"laravel-token",
            'iat'=>time(),
            'iut'=>time()+60*60,
            'email'=>$email,
            'userid'=>$id,

        ];

        return JWT::encode($payload,$key,'HS256');



    }

    public static function verifyToken($token):string|object{
        try{
            if($token===null){
                return "unauthorized";
            }else{
        $key=env('JWTKEY');

                $decode=JWT::decode($token,new Key($key,'HS256'));

               return $decode;
            }

        }catch(Exception $e)
        {
            return "unauthorized";

        }



    }


}




