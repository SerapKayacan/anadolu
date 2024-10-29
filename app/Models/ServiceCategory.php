<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'meta_description',
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

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'service_category_tags');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'category_id');
    }
}
