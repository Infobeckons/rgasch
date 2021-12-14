<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Media;
use App\Media;
use App\Tag;
use Illuminate\Foundation\Http\FormRequest;
use WaveFacade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\MediaLibraryPro\Rules\Concern\ValidatesMedia;

class MediaController extends \App\Http\Controllers\Controller
{
    // use InteractsWithMedia;
    // use ValidateMedia;
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
        $media = Media::find(1);
        $media->attachTag('show1');
        $attribute = [
            // 'name' => $request->input('name'),
            'path'  => $request->input('media'), 
            'tags'  =>$media
        ];
        // dd($request->all());
        // $media->attachTag('Tag 1');
        // $taginsert = Media::attachTag('Tag4');
        $client = User_Media::create($attribute);
        // if($request->hasFile('media') && $request->file('media')->isValid()){
        //     $client->addMediaFromRequest('media')->toMediaCollection('media')->
        //     session()->put('client', $client);
        //     dd($client);
        // }
        return redirect()->route('wave.dashboard')->with(['message' => 'Media Successfully Added', 'message_type' => 'success']);
    }
    public function runtag(){
     
        $media = Media::find(1);
        $media->attachTag('tag 1');
        // $tag = Tag::insert(['name' => 'Tag4',
        // 'slug' => 'my-tag4']);
        return redirect()->route('wave.dashboard')->with('success','Media Successfully Added');
    }
}
