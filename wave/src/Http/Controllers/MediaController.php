<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Media;
use App\Media;
use App\Tag;
use App\media_user_map;
use Illuminate\Foundation\Http\FormRequest;
use WaveFacade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\MediaLibraryPro\Dto;
use Illuminate\Http\UploadedFile;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Str;
// use Livewire\FileUploadConfiguration;
// use Livewire\TemporaryUploadedFile;
use Spatie\MediaLibrary\Conversions\FileManipulator;
// use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibraryPro\Models\TemporaryUpload;

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
    

    // protected function createFromLocalLivewireUpload(TemporaryUploadedFile $livewireUpload): Media
    // {
    //     $uploadedFile = new UploadedFile($livewireUpload->path(), $livewireUpload->getClientOriginalName());

    //     $temporaryUploadModelClass = config('media-library.temporary_upload_model');

    //     $livewireUpload = $temporaryUploadModelClass::createForFile(
    //         $uploadedFile,
    //         session()->getId(),
    //         (string)Str::uuid(),
    //         $livewireUpload->getClientOriginalName()
    //     );

    //     return $livewireUpload->getFirstMedia();
    // }

    // TemporaryUploadedFile $livewireUpload): Media
    public function store(Request $request){
        // dd($request);
        $find=$request->media[implode("",array_keys($request->media))]['order'];
        $media = Media::find($find);
        $media->attachTags($request->tag);
        media_user_map::create([
            'user_id' => Auth::user()->id,
            'media_id'=> $find
        ]);
        // $attribute = [
        //     // 'name' => $request->input('name'),
        //     'path'  => $request->file('media','file'), 
        //     'tags'  =>$media
        // ];
        // return $livewireUpload->getFirstMedia();
        // dd($request->all());
        // $media->attachTag('Tag 1');
        // $taginsert = Media::attachTag('Tag4');
        // $client = User_Media::create($attribute);
        // if($request->hasFile('media') && $request->file('media')->isValid()){
        //     $client->addMediaFromRequest('media')->toMediaCollection('media');
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
