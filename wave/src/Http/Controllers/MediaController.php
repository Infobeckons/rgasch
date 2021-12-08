<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;
use WaveFacade;
use Illuminate\Support\Facades\Auth;

class MediaController extends \App\Http\Controllers\Controller
{
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
        $input = $request->all();
        $client = Media::create($input);
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $client->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }
        return redirect()->route('dashboard')->with('success');
    }
}
