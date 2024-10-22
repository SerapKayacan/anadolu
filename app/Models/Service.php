<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'meta_description',
        'meta_keywords',
        'category_page_detail',
        'sort_detail',
        'detail',
        'banner_image',
        'category_id',
        'sort_order',
        'is_active'
    ];
}
