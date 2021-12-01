<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends \App\Http\Controllers\Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('profile', [$user => Auth::user()]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $user
            ->addFromMediaLibraryRequest($request->avatar)
            ->toMediaCollection('avatar');
    }
}
