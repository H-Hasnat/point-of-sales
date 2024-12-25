<?php

namespace App\Http\Controllers;

use App\JWTToken\jwtoken;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class UserController extends Controller
{

     public function Dashboard(Request $request){
        $id=$request->header('id');
        $role= User::where('id','=',$id)->select('role')->first();
        // return redirect()->route('dashboard',['role'=>$role->role]);
        return view('index',[ 'role'=>$role->role]);
    }


    function UserRegistration(Request $request){
        // $pp=$request->file('ppic');
        // $org_name=$pp->getClientOriginalName();

        // $new_name=time().$org_name;

        // $path=public_path('uploads');

        // $pp->move($path,$new_name);

        $role=$request->input('role');
        $user=User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
            'role'=>$role
        ]);

        // $id=$user->id;

        return response()->json([
            'status'=>"success"
        ]);
    }

    function LogIn(Request $request){

            $email=$request->input('email');
            $password=$request->input('password');

           $id=User::where('email',$email)->where('password',$password)->select('id')->first();
           $token= jwtoken::createJWT($email,$id->id);


            if($id!=null){
                return response()->json([
                  'status'=>'success',
                  'token'=>$token
                ])->cookie('token',$token);
            }

    }


    function getRole(Request $request){

    }



    function VerifyToken(Request $request){
        echo $email=$request->header('email');
       echo $id=$request->header('id');

        // return  $id;
    }

    function LogOut(Request $request){
        $id=$request->header('id');
        $email=User::where('id',$id)->select('email')->get();
        $token= jwtoken::createJWT($email,$id);
        // return $token;
        // return response()->cookie('token',$token,-1);
        return redirect()->route('dashboard')
        ->withCookie(cookie('token', '', -1));
    }


    function ProfileInfo(Request $request){
        $id=$request->header('id');
        return  User::where('id',$id)->get();
    }

    function ProfileUpdate(Request $request){
        $id=$request->header('id');
        $name=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');

        User::where('id',$id)->update([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password
        ]);
        return response()->json([
            'status'=>"success"
        ]);
    }




}
