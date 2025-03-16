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
        'meta_description',
        'category_page_detail',
        'sort_detail',
        'detail',
        'category_id',
        'sort_order',
        'can_be_appointment',
        'appointment_start_time',
        'appointment_end_time',
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
//buraya ihtiyac var
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
