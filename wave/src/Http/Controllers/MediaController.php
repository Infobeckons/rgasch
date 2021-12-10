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
    // use HasTags;
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
    
    // public function rules(){
    //     return [
    //         'name' => 'required', 
    //         'media' => ['required', $this->validateSingleMedia()
    //         ->maxItemSizeInKb(3000),
    //         ],
    //     ];
    // }
    public function store(Request $request){
        $tag = [
            'tags' =>$request->input('Tag1'), 
            'tags' =>$request->input('Tag2'), 
            'tags' =>$request->input('Tag3'),
            'tags' =>$request->input('Tag4'),
            'tags' =>$request->input('Tag5'),  
            'tags' =>$request->input('Tag6'), 
            'tags' =>$request->input('Tag7'),
        ];
        $dataset = [];
        foreach ($tag as $check) {
            $dataset[] = [
            'tags' => $check,
            ];
        }
        // $name=$request->input('Tag1');
        // $tag4=$request->input('Tag4');
        // $tags = implode(",", $request->$tag);
        // $value = array_get($tag, 'products.desk');
        $attribute = [
            'name'      => $request->input('name'),
            'path'      => $request->file('media','fileName'),
            'tags'      => $request->$dataset
        ];
        
        // $tag = Tag::create(['name' => $request->input('Tag4'),
        //                                 'slug' => 'my-tag4']);
        // $yourmodal->attachTags('Tag 1');
        // $taginsert = User_Media::attachTag('Tag4');
        $client = User_Media::insert($attribute);
        if($request->hasFile('media') && $request->file('media')->isValid()){
            $client->addMediaFromRequest('media')->toMediaCollection('media');
        }
        return redirect()->route('wave.dashboard')->with('success','Media Successfully Added');
    }
}
