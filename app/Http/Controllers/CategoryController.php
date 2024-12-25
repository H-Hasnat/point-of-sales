<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    function createCategory(Request $request){
        try{
            $id=$request->header('id');
            Category::create([
                'name'=>$request->input('name'),
                'user_id'=>$id
            ]);

            return response()->json([
                'status'=>"success"
            ]);
        }
        catch(Exception $e){
            return $e;
        }


    }
    function allCategory(Request $request){
        $user_id=$request->header('id');
        return Category::where('user_id','=',$user_id)->get();
    }

    function byidCategory(Request $request){
        $user_id=$request->header('id');
        $cate_id=$request->input('cate_id');
        return Category::where('id',$cate_id)->where('user_id',$user_id)->get();

    }

    function updateCategory(Request $request){
        $id=$request->header('id');
        $cate_id=$request->input('cate_id');

        Category::where('user_id',$id)->where('id',$cate_id)->update([
            'name'=>$request->input('name'),
        ]);

        return response()->json([
            'status'=>"success"
        ]);
    }


    function deleteCategory(Request $request){
        try{
            $user_id=$request->header('id');
            $cate_id=$request->input('cate_id');
        //    $pro_id= $request->input('pro_id');
            // $pro= Product::where('user_id','=',$user_id)->where('category_id','=',$cate_id)->pluck('id')->all();

            // foreach($pro as $pro_id){

            // return $pro_id;
            // }

        //   return  $pro;
        //    echo $pro->data['id'];
            // $pro_id=$request->input('pro_id');

        //    InvoiceProduct::where('user_id',$user_id)->whereIn('product_id','=',$pro_id)->delete();
        //     Invoice::where('user_id','=',$user_id)->whereIn('id','=',$pro_id)->delete();
            Product::where('user_id',$user_id)->where('category_id',$cate_id)->delete();
           return  Category::where('user_id',$user_id)->where('id',$cate_id)->delete();
        }catch(Exception $e){
            return $e;
        }

    }


}
