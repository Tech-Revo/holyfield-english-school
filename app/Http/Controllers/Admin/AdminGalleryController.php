<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Gallery\GalleryCreateRequest;
use App\Http\Services\MediaService;
use App\Models\Gallery;
use App\Models\Localization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminGalleryController extends Controller
{
    public function index()
    {
        $search_keyword=request()->query('search_keyword');
        $galleries = Gallery::with('media')->
        when($search_keyword,function($query)use($search_keyword){
            $query->where('title','like','%'.$search_keyword.'%');
            
        })->latest()->paginate(10);
        $lang = Localization::where('user_id', auth()->user()->id)->first();
        
        return view('admin.gallery.gallery', compact('galleries','lang'));
    }

    public function addGalleryImageIndex()
    {
        $lang = Localization::where('user_id', auth()->user()->id)->first();
        
        return view('admin.gallery.add_gallery',compact('lang'));
    }

    public function store(GalleryCreateRequest $request)
    {


        try {
            $gallery = DB::transaction(function () use ($request) {

                $gallery = Gallery::create([
                    'published_by' => auth()->user()->name,
                    'title' => $request->title,
                    'tag' => $request->tags,

                ]);
                if ($request->gallery_image) {
                    $filename = $request->gallery_image->getClientOriginalName();
                    $image = MediaService::uploadCompressImage($request->gallery_image);
                    $gallery->addMediaFromStream($image)->usingFileName($filename)->toMediaCollection('gallery_image');
                }

                return $gallery;
            });
            if ($gallery) {
                return back()->with('success', 'Image uploaded successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {

        $gallery = Gallery::find($id);

        try{
            $blog=DB::transaction(function()use($gallery){
                $gallery->clearMediaCollection('gallery_image');
                $gallery->delete();
                
                return $gallery;
            });
            if($gallery){
                return back()->with('success', 'Gallery image deleted successfully!');
            }
            
        }
        catch(\Exception $e){
            return back()->with('error',$e->getMessage());
            
        }

      
        
    }
}