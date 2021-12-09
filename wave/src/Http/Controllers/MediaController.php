<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Media;
use App\Media;
use WaveFacade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibraryPro\Request\UploadRequest;

// Route::get('media/store', function(){
//     Media::create()
//     ->addMedia(storage_path('users/default.png'))
//     ->toMediaCollection();
// });

class MediaController extends \App\Http\Controllers\Controller
{
    use InteractsWithMedia;
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
        $tag = [
            'tags' => $request->input('Tag1'), 'tags' => $request->input('Tag2'), 'tags' => $request->input('Tag3'), 'tags' => $request->input('Tag4'),
            'tags' => $request->input('Tag5'), 'tags' => $request->input('Tag6'), 'tags' => $request->input('Tag7'),
        ];
        $tags = expect(',', $request->$tag);
        $attribute = [
            'name'   => $request->input('name'),
            'path'    => $request->file('avatar'),
            'tags' => $request->$tags
        ];
        $client = User_Media::create($attribute);
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $client->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }
        return redirect()->route('wave.dashboard')->with('success','Media Successfully Added');
    }
}
