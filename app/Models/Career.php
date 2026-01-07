<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
     protected $fillable = [
        'name',
        'email',
        'contact_no',
        'applied_position',
        'current_designation',
        'current_organization',
        'total_experience',
        'expected_salary',
        'highest_qualification',
        'file_path',
    ];
}
