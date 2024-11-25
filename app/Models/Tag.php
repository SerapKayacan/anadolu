<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_tags');
    }
    public function carousels()
    {
        return $this->belongsToMany(Carousel::class, 'carousel_tags');
    }
    public function tab_panels()
    {
        return $this->belongsToMany(TabPanel::class, 'tab_panel_tags');
    }

    public function serviceCategories()
    {
        return $this->belongsToMany(ServiceCategory::class, 'service_category_tags');
    }
}
