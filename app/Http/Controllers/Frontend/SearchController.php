<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Tag;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Validate the search query
        $query = $request->input('query');

        if (empty($query)) {
            return redirect()->back()->with('error', 'Please enter a search term.');
        }

        $tags = Tag::where('name', 'LIKE', "%{$query}%")->get();
        $tagIds = $tags->pluck('id');


        $services = Service::where('title', 'LIKE', "%{$query}%")
            ->orWhere('detail', 'LIKE', "%{$query}%")
            ->orWhereHas('tags', function ($queryBuilder) use ($tagIds) {
                $queryBuilder->whereIn('tags.id', $tagIds);
            })
            ->get();


        return view('frontend.search-result', compact('services', 'tags', 'query'));



    }


}
