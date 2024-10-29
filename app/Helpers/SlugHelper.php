<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class SlugHelper
{
    public static function generateUniqueSlug($model, $title)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while ($model::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    public static function imageSlugName($file)
    {
        $file_full_name = $file->getClientOriginalName();
        $original_extension = $file->getClientOriginalExtension();
        $slug = Str::slug(explode('.', $file_full_name)[0], '-') . '.' . $original_extension;
        return $slug;
    }
}
