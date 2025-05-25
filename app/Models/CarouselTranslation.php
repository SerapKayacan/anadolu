<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselTranslation extends Model
{
    use HasFactory;
    protected $fillable = [
        'locale',
        'title',
        'description',
    ];

    public function carousel()
    {
        return $this->belongsTo(Carousel::class);
    }

}
