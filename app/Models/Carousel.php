<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Carousel extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;
    protected $fillable = [
        'carousel_id',
        'title',
        'description',
        'sort_order',
        'button_link',
        'is_active'
    ];
    public function translations()
    {
        return $this->hasMany(CarouselTranslation::class);
    }

    public function translation()
    {
        return $this->hasOne(CarouselTranslation::class)->where('locale', app()->getLocale());
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('large')
            ->fit(Manipulations::FIT_MAX, 1920, 1080);

        $this->addMediaConversion('medium')
            ->fit(Manipulations::FIT_MAX, 1920, 1080);
    }

}
