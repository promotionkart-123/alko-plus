<?php

namespace App\Models;

use GuzzleHttp\Psr7\Message;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //Contact enquiry

    protected $fillable =[
        'name',
        'email',
        'message'
    ];
}
