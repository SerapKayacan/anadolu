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
        'sort_order',
        'is_active'
    ];
    public function translations()
    {
        return $this->hasMany(ServiceCategoryTranslation::class);
    }


    public function translation($locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        return $this->translations->where('locale', $locale)->first();
    }
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
