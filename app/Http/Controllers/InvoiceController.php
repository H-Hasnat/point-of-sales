<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceProduct;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    function createInvoice(Request $request){
      DB::beginTransaction();
    try{
    $user_id=$request->header('id');


  $invoice=Invoice::create([

        'total'=>$request->input('total'),
        'discount'=>$request->input('discount'),
        'vat'=>$request->input('vat'),
        'payable'=>$request->input('payable'),
        'user_id'=>$user_id,
        'customer_id'=>$request->input('cus_id')

    ]);

    $inv_id=$invoice->id;

    $inv_pro=$request->input('inv_pro');
    // foreach($inv_pro as $each_pro){
    //     InvoiceProduct::create([
    //         'qty'=>$each_pro['qty'],
    //         'sale_price'=>$each_pro['price'],
    //         'user_id'=>$user_id,
    //         'invoice_id'=>$inv_id,
    //         'product_id'=>$request->input('pro_id'),
    //     ]);
    // }


        if(is_array($inv_pro)){
            foreach($inv_pro as $each_pro){
                InvoiceProduct::create([
                    'qty'=>$each_pro['qty'],
                    'sale_price'=>$each_pro['price'],
                    'user_id'=>$user_id,
                    'invoice_id'=>$inv_id,
                    'product_id'=>$each_pro['pro_id'],
                ]);


                // return  $each_pro;

            }
        }





    DB::commit();

    return response()->json([
        'status'=>'success'
    ]);



}



    catch(Exception $e){
        DB::rollBack();
        return $e;
    }
    }




    function updateInvoice(Request $request){
    $user_id=$request->header('id');

        $inv_id=$request->input('inv_id');

        return $invoice=Invoice::where('id',$inv_id)->where('user_id',$user_id)->update([

            'total'=>$request->input('total'),
            'discount'=>$request->input('discount'),
            'vat'=>$request->input('vat'),
            'payable'=>$request->input('payable'),
            'user_id'=>$user_id,

        ]);


    }


    function allInvoice(Request $request){
        try{
            $user_id=$request->header('id');

            return Invoice::where('user_id',$user_id)->get();
        }catch(Exception $e){
            return $e;
        }

    }

    function deleteInvoice(Request $request){
    $user_id=$request->header('id');
        $inv_id=$request->input('inv_id');
       $invoice=InvoiceProduct::where('invoice_id',$inv_id)->where('user_id',$user_id)->delete();
        return $invoice=Invoice::where('id',$inv_id)->where('user_id',$user_id)->delete();
    }

    function byidInvoice(Request $request){
        $user_id=$request->header('id');
        $inv_id=$request->input('inv_id');
          $inv_pro= InvoiceProduct::where('invoice_id',$inv_id)->where('user_id',$user_id)->with('product')->get();
         $inv=Invoice::where('id',$inv_id)->where('user_id',$user_id)->with('invoiceproduct')->with('customer')->get();
        return response()->json([
            'inv_pro'=>$inv_pro,
            'inv'=>$inv
        ]);
    }
}
