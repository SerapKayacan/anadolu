<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Service extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'sort_order',
        'category_page_detail',
        'detail',
        'category_id',
        'is_active'

    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'service_tags');
    }

    public function getCategory()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }
    public function translations()
    {
        return $this->hasMany(ServiceTranslation::class);
    }

    public function translation()
    {
        return $this->hasOne(ServiceTranslation::class)->where('locale', app()->getLocale());
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(300)
            ->sharpen(10);

        $this->addMediaConversion('large') // Adding 'large' conversion
        ->width(1920)
            ->height(1920)
            ->sharpen(10);
    }
}
