<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use Carbon\Carbon;
use Faker\Core\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class ReportController extends Controller
{
    function totalReport(Request $request){
        $id=$request->header('id');
        $start_date=Carbon::parse($request->input('start_date'))->format('Y-m-d');
        $end_date=Carbon::parse($request->input('end_date'))->format('Y-m-d');
        $diff=$request->input('diff_date');
        // $startDate =Date();
        // $endDate =Date(  $request->input('end_date'));
        // $startDate = Carbon::parse($request->input('start_date'));
        // $endDate = Carbon::parse('2024-11-06');
        // Log or output to check the inputs
        // dd($startDateInput, $endDateInput);

        // $differenceInDays = $start_date->diffInDays($end_date);


        // return Customer::get();
        // echo $start_date;
        // echo $end_date;
        // $customer=Customer::where('user_id',$id)->whereDate('created_at','>=',$start_date)->whereDate('created_at','<=',$end_date)->get();
        $total=Invoice::where('user_id',$id)->whereDate('created_at','>=',$start_date)->whereDate('created_at','<=',$end_date)->sum('total');
        $discount=Invoice::where('user_id',$id)->whereDate('created_at','>=',$start_date)->whereDate('created_at','<=',$end_date)->sum('discount');
        $vat=Invoice::where('user_id',$id)->whereDate('created_at','>=',$start_date)->whereDate('created_at','<=',$end_date)->sum('vat');
        $payable=Invoice::where('user_id',$id)->whereDate('created_at','>=',$start_date)->whereDate('created_at','<=',$end_date)->sum('payable');

        return response()->json([
            'total'=>$total,
            'discount'=>$discount,
            'vat'=>$vat,
            'payable'=>$payable
        ]);

}

function detailsReport(Request $request){
    $id=$request->header('id');
    $start_date=Carbon::parse($request->input('start_date'))->format('Y-m-d');
    $end_date=Carbon::parse($request->input('end_date'))->format('Y-m-d');
    $diff=$request->input('diff_date');
    // $startDate =Date();
    // $endDate =Date(  $request->input('end_date'));
    // $startDate = Carbon::parse($request->input('start_date'));
    // $endDate = Carbon::parse('2024-11-06');
    // Log or output to check the inputs
    // dd($startDateInput, $endDateInput);

    // $differenceInDays = $start_date->diffInDays($end_date);


    // return Customer::get();
    // echo $start_date;
    // echo $end_date;
    // $customer=Customer::where('user_id',$id)->whereDate('created_at','>=',$start_date)->whereDate('created_at','<=',$end_date)->get();
    $invoice=Invoice::where('user_id',$id)->whereDate('created_at','>=',$start_date)->whereDate('created_at','<=',$end_date)->with('customer')->with('user')->get();

    return $invoice;

}
}
