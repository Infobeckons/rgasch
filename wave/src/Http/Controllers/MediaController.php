<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Media;
use WaveFacade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibraryPro\Request\UploadRequest;

Route::get('media/store', function(){
    Media::create()
    ->addMedia(storage_path('users/default.png'))
    ->toMediaCollection();
});

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
        // $input = $request->input('avatar');
        $client = User_Media::insert([
            'name'=>$request->input('name'),
            'path'=>$request->file('avatar')
        ]);
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $client->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }
        return redirect()->route('wave.dashboard')->with('success');
    }
}
