<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;

class GalleryController extends Controller
{
    public function index()
    {
        $images = GalleryImage::where('is_active', true)
                             ->orderBy('created_at', 'desc')
                             ->get();
        
        return view('landingpage.galerie', compact('images'));
    }
}