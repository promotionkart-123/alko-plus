<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductEnquiry extends Model
{
       protected $fillable = [
        'name',
        'email',
        'phone',
        'product_id',
        'company_name',
        'address',
        'city',
        'state',
        'zip_code',
        'query',
    ];

   
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }

}
