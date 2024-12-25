<?php

namespace App\Http\Controllers;

use App\Models\InvoiceProduct;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    function createProduct(Request $request){

        try{
            $id=$request->header('id');
            $pimg=$request->file('pro_img');
            $org_name=$pimg->getClientOriginalName();

            $new_name=time().$org_name;

            $path=public_path('uploads');

            $pimg->move($path,$new_name);
           $img_url='uploads/'.$new_name;

           Product::create([
            'name'=>$request->input('name'),
            'price'=>$request->input('price'),
            'unit'=>$request->input('unit'),
            'img_url'=>$img_url,
            'category_id'=>$request->input('cat_id'),
            'user_id'=>$id
           ]);

           return response()->json([
            'status'=>"success"
        ]);

        }catch(Exception $e){
            return $e;
        }

    }

    function updateProduct(Request $request){
        try{
            $id=$request->header('id');
            $pro_id=$request->input('pro_id');


            $new_img=$request->file('new_img');


            if(file_exists($new_img)){
            $old_img=$request->input('old_img');

                $org_name=$new_img->getClientOriginalName();

                $new_name=time().$org_name;

                $path=public_path('uploads');

                $new_img->move($path,$new_name);
              $new_url='uploads/'.$new_name;

              unlink($old_img);

               Product::where('user_id','=',$id)->where('id','=',$pro_id)->update([
                'name'=>$request->input('name'),
                'price'=>$request->input('price'),
                'unit'=>$request->input('unit'),
                'img_url'=>$new_url,
                // 'id'=>$request->input('pro_id')

               ]);

            // return Product::where('user_id','=',$id)->where('id','=',$pro_id)->get();
        return response()->json([
            'status'=>"success"
        ]);
            }else{
             Product::where('user_id','=',$id)->where('id','=',$pro_id)->update([
                    'name'=>$request->input('name'),
                    'price'=>$request->input('price'),
                    'unit'=>$request->input('unit'),
                    // 'id'=>$request->input('pro_id')

                ]);
                return response()->json([
                    'status'=>"success"
                ]);

            // return "Nooooo";
            }

            // return Product::where('category_id','=',$cat_id)->where('user_id',$id)->get();
        }catch(Exception $e){
            return $e;
        }





    }

    function deleteProduct(Request $request){

        try{
            $id=$request->header('id');
            $pro_id=$request->input('pro_id');

            $old_img=$request->input('old_img');
            unlink($old_img);

            InvoiceProduct::where('user_id','=',$id)->where('product_id','=',$pro_id)->delete();
            return Product::where('user_id','=',$id)->where('id','=',$pro_id)->delete();

        }catch(Exception $e){
            return $e;
        }


    }

    function allProduct(Request $request){
        try{
            $user_id=$request->header('id');

            return Product::where('user_id',$user_id)->get();
        }catch(Exception $e){
            return $e;
        }

    }

    function byidProduct(Request $request){
        $user_id=$request->header('id');
        $pro_id=$request->input('pro_id');
        return Product::where('user_id',$user_id)->where('id',$pro_id)->get();
    }
}
