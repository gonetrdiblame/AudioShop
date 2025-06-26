<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class ImageController extends Controller
{
    public static function upload($request)
    {
        $image = $request->file('image');
        $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
        $imagePath =  env('PATH_UPLOAD_IMAGE') . '/' . $imageName;
        $image->move(public_path(env('PATH_UPLOAD_IMAGE')), $imageName);
        return $imagePath;
    }

    public static function delete($service){
        if ($service->image && file_exists(public_path($service->image))) {
            unlink(public_path($service->image));
        }
    }
}
