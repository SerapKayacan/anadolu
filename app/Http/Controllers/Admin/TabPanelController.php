<?php

namespace App\Http\Controllers\Admin;
use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\TabPanel;
use Illuminate\Http\Request;

class TabPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabPanels =TabPanel::orderBy('sort_order','ASC')->get();
        return view('admin.tab-panel.index', [
            "tabPanels" => $tabPanels
        ]);
    }

    public function create()
    {
        return view('admin.tab-panel.create');
    }

    public function store(Request $request)
    {
        $tabPanel = new TabPanel();
        $tabPanel->icon = $request->icon;
        $tabPanel->nav_button_text = $request->nav_button_text ;
        $tabPanel->title = $request->title;
        $tabPanel->description = $request->description ;
        $tabPanel->sort_order = $request->sort_order;
        $tabPanel->button_text = $request->button_text;
        $tabPanel->button_link = $request->button_link;
        $tabPanel->is_active = $request->is_active;
        $tabPanel->save();

        $tags = json_decode($request->tags, true);
        $tagIds = [];
        if (!is_null($tags) && count($tags) > 0) {
            foreach ($tags as $tagName) {
                if (strlen($tagName["value"]) > 2) {
                    $tag = Tag::firstOrCreate(['name' => $tagName["value"]]);
                    $tagIds[] = $tag->id;
                }
            }
        }
        $tabPanel->tags()->sync($tagIds);

        if ($request->hasFile('banner_image')) {
            $tabPanel->clearMediaCollection('banner');
            $tabPanel->addMedia($request->banner_image)->usingFileName(SlugHelper::imageSlugName($request->banner_image))->toMediaCollection('banner');
        }
        return redirect()->to(route('tab-panel.index', $tabPanel->id));

    }


    public function edit(string $id)
    {
        $tabPanel = TabPanel::findOrFail($id);
        $tags = $tabPanel->tags->pluck('name')->toArray();

        return view('admin.tab-panel.edit', [
            "tabPanel" => $tabPanel,
            "tags" => $tags
        ]);
    }

    public function update(Request $request, string $id)
    {
        $tabPanel = TabPanel::findOrFail($id);
        $tabPanel->icon = $request->icon;
        $tabPanel->nav_button_text = $request->nav_button_text ;
        $tabPanel->title = $request->title;
        $tabPanel->description = $request->description ;
        $tabPanel->sort_order = $request->sort_order;
        $tabPanel->button_text = $request->button_text;
        $tabPanel->button_link = $request->button_link;
        $tabPanel->is_active = $request->is_active;
        $tabPanel->update();

        $tags = json_decode($request->tags, true);
        $tagIds = [];
        if (!is_null($tags) && count($tags) > 0) {
            foreach ($tags as $tagName) {
                if (strlen($tagName["value"]) > 2) {
                    $tag = Tag::firstOrCreate(['name' => $tagName["value"]]);
                    $tagIds[] = $tag->id;
                }
            }
        }
        $tabPanel->tags()->sync($tagIds);


        if ($request->hasFile('banner_image')) {
            $tabPanel->clearMediaCollection('banner');
            $tabPanel->addMedia($request->banner_image)
                ->usingFileName(SlugHelper::imageSlugName($request->banner_image))
                ->toMediaCollection('banner');
        }

        return redirect()->to(route('tab-panel.index', $tabPanel->id));
    }

    public function destroy(string $id)
    {
        $tabPanel = TabPanel::findOrFail($id)->delete();
        if ($tabPanel){
            return response()->json(['status' => "success",'message' => 'Silme Başarılı!']);
        } else {
            return response()->json(['status' => "error",'message' => 'Kayıt Silinemedi!']);
        }
    }
}
