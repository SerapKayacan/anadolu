<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'meta_description',
        'meta_keywords',
        'home_page_detail',
        'category_page_detail',
        'icon',
        'type',
        'sort_order',
        'is_show_home_page',
        'is_show_service_page',
        'home_page_colspan',
        'is_active'
    ];

    public static function types()
    {
        return [
            'online' => 'Online',
            'home_office' => 'Evde / İş Yerinde',
            //'online_or_home_office' => 'Online ya da İş Yerinde',
        ];
    }
}
