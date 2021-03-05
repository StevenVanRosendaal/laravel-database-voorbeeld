<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function view() {
        
        $photos = Photo::all();

        return view('photo.view', [
            'photos' => $photos
        ]);
    }

    public function addPhoto() {

        return view('photo.add');
        
    }

    public function processAddPhoto(Request $request) {

        $newPage = Photo::create([
            'photo_url' => $request->input('photo_url'),
        ]);

        return redirect()->route('home');
    }
}
