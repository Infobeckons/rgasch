<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Media;
use App\Media;
use App\Tag;
use WaveFacade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


class MediaController extends \App\Http\Controllers\Controller
{
    // use InteractsWithMedia;
    // use HasTags;
    //
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
        // $tag = [
        //     'tags' => $request->input('Tag1'), 'tags' => $request->input('Tag2'), 'tags' => $request->input('Tag3'), 'tags' => $request->input('Tag4'),
        //     'tags' => $request->input('Tag5'), 'tags' => $request->input('Tag6'), 'tags' => $request->input('Tag7'),
        // ];
        // $tags = implode(",", $request->$tag);
        $attribute = [
            'name'      => $request->input('name'),
            'path'      => $request->input('avatar'),
            'tags'      => $request->input('Tag4')
        ];
        // $tag = Tag::create(['name' => $request->input('Tag4'),
        //                                 'slug' => 'my-tag4']);
        // $taginsert = User_Media::attachTag('Tag4');
        $client = User_Media::create($attribute);
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $client->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }
        return redirect()->route('wave.dashboard')->with('success','Media Successfully Added');
    }
}
