<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $guarded=[];
    function invoiceproduct(){
        return $this->hasMany(InvoiceProduct::class);
    }
    function customer(){
        return $this->belongsTo(Customer::class);
    }

    function user(){
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
