<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Media;
use App\Media;
use App\Tag;
use App\Media_User_Map;
use WaveFacade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\MediaLibraryPro\Dto;
use Illuminate\Http\UploadedFile;
// use Spatie\MediaLibraryPro\Rules\Concerns\ValidatesMedia;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\MediaLibrary\Conversions\FileManipulator;
use Spatie\MediaLibraryPro\Models\TemporaryUpload;

class MediaController extends \App\Http\Controllers\Controller
{
    // use InteractsWithMedia;
    // use ValidatesMedia;
    public function index()
    {    
        $clients = Media::latest()->get();
        return view('index', compact('media'));
    }

    public function create()
    {
        return view('create');
    }
    

    public function store(Request $request){
        // dd($request);
        // return [
        //     'images' => $this
        //         ->validateMultipleMedia()
        //         ->minItems(1)
        //         ->maxItems(5)
        //         ->extension('png')
        //         ->maxItemSizeInKb(1024)
        //         ->attribute('name', 'required')
        // ];
        $find=$request->media[implode("",array_keys($request->media))]['order'];
        $media = Media::find($find);
        $media->attachTags($request->tag);
        media_user_map::create([
            'user_id' => Auth::user()->name,
            'media_id'=> $find
        ]);
        // return redirect()->route('wave.dashboard')->with(['message' => 'Media Successfully Added', 'message_type' => 'success']);
        // return back()->with(['message' => 'Successfully updated user profile', 'message_type' => 'success']);
        return redirect()->route('wave.dashboard')->with('success','Media Successfully Added');
    }
    public function runtag(){
     
        $media = Media::find(1);
        $media->attachTag('tag 1');
        // $tag = Tag::insert(['name' => 'Tag4',
        // 'slug' => 'my-tag4']);
        return redirect()->route('wave.dashboard')->with('success','Media Successfully Added');
    }
}
