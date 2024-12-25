<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Exception;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function createCustomer(Request $request){
        $id=$request->header('id');
        Customer::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
            'user_id'=>$id
        ]);

        return response()->json([
            'status'=>"success"
        ]);

    }

    function updateCustomer(Request $request){
        $id=$request->header('id');
        $cus_id=$request->input('cus_id');

        Customer::where('user_id',$id)->where('id',$cus_id)->update([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ]);

        return response()->json([
            'status'=>"success"
        ]);
    }

    function deleteCustomer(Request $request){
        try{
            $user_id=$request->header('id');
            $cus_id=$request->input('cus_id');
           return  Customer::where('user_id',$user_id)->where('id',$cus_id)->delete();
        }catch(Exception $e){
            return $e;
        }

    }

    function allCustomer(Request $request){
        $user_id=$request->header('id');

        return Customer::where('user_id',$user_id)->get();

    }

    function byidCustomer(Request $request){
        $user_id=$request->header('id');
        $cus_id=$request->input('cus_id');

        return Customer::where('user_id',$user_id)->where('id',$cus_id)->get();

    }
}
