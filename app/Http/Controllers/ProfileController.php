<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index()
    {
        return view('customer.profile');
    }

    public function update(Request $request)
    {
        $request->validate([
            'cropped_data' => 'required|string'
        ]);

        try {
            // Convert base64 to image
            $image_data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $request->cropped_data));
            
            // Generate filename
            $file_name = 'avatars/' . auth()->id() . '_' . time() . '.png';
            
            // Store image
            Storage::disk('public')->put($file_name, $image_data);

            // Update user avatar
            auth()->user()->update([
                'avatar' => $file_name
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Profilbild wurde aktualisiert'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Fehler beim Speichern des Bildes'
            ], 500);
        }
    }
}