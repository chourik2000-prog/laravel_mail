<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
   public function index()
    {
        return view('image-form');
    }

   public function storeImage(Request $request)
   {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);
        $imageName = time().'.' .$request->image->extension();
        // Public Folder
        $request->image->move(public_path('images'), $imageName);

        // //Store in Storage Folder
        // $request->image->storeAs('images', $imageName);

        // // Store in S3
        // $request->image->storeAs('images', $imageName, 's3');

        //Store IMage in DB 


        return back()->with('success', 'Image téléchargée avec succès!')
        ->with('image', $imageName);
   }
}
