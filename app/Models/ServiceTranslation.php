<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['locale','title', 'category_page_detail','detail'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
