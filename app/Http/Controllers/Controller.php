<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\News;
use App\Models\Project;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Helpers\Helper;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function success($message = "Başarılı"): JsonResponse
    {
        return response()->json(['success' => true, 'message' => $message, 'status' => 200]);
    }

    public function error($message = 'Bir hata oluştu.', $code = 500): JsonResponse
    {
        return response()->json(['success' => false, 'errors' => $message, 'status' => $code]);
    }
}
