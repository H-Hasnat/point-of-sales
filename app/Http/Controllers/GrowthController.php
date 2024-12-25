<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrowthController extends Controller
{
    public function showMap(Request $request){
        $user_id=$request->header('id');
        // Invoice::where('user_id',$user_id)->get()

        /// customer growth
        $customers = Customer::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
        ->where('user_id', $user_id)
        ->groupBy('date')
        ->orderBy('date', 'asc')
        ->get();



        // return $customers;
        $dates1 = $customers->pluck('date');   // Array of dates
        $counts1 = $customers->pluck('count');


        // product growth
        $product = InvoiceProduct::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
        ->where('user_id', $user_id)
        ->groupBy('date')
        ->orderBy('date', 'asc')
        ->get();



        // return $customers;
        $dates2 = $product->pluck('date');   // Array of dates
        $counts2= $product->pluck('count');


        // sales growth

        $product = Invoice::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
        ->where('user_id', $user_id)
        ->groupBy('date')
        ->orderBy('date', 'asc')
        ->get();



        // return $customers;
        $dates3 = $product->pluck('date');   // Array of dates
        $counts3= $product->pluck('count');
        return view('growth', ['dates1' => $dates1, 'counts1' => $counts1,'dates2' => $dates2, 'counts2' => $counts2, 'dates3' => $dates3, 'counts3' => $counts3]);
        // $date = ['Shirts', 'T-Shirt', 'Pants', 'Coat', 'Kurta', 'Pajama'];
        // $price = ['10', '5', '100', '90', '50', '30'];
        // return view('growth',['labels' => $label, 'prices' => $price]);
    }




}
