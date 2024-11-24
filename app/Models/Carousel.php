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
        'title',
        'description',
        'sort_order',
        'button_text',
        'button_link',
        'background_color',
        'text_color',
        'border_color',
        'is_active'
    ];
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'carousel_tags');
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('large')
            ->fit(Manipulations::FIT_MAX, 770, 442);

        $this->addMediaConversion('medium')
            ->fit(Manipulations::FIT_MAX, 350, 247);
    }

}
