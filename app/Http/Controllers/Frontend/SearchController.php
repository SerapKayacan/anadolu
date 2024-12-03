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

        // Perform the search query on your models
        $services = Service::where('title', 'LIKE', "%{$query}%")
            ->orWhere('detail', 'LIKE', "%{$query}%")
            ->get();
        $tags = Tag::where('name', 'LIKE', "%{$query}%")->get();


        // Pass the results to the view
        return view('frontend.search-result', compact('services', 'query' , 'tags'));
    }


}
