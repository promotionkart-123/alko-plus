<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    protected $fillable = [
        'title',
        'sub_title',
        'category_id',
        'highlight',
        'description',
        'specification',
        'application',
        'image',
        'sub_images',
    ];

    protected $casts = [
        'sub_images' => 'array', 
    ];

    public function category()
    {
        return $this->belongsTo(SubCategory::class, 'category_id');
    }
}
