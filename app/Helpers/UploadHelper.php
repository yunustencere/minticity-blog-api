<?php


namespace App\Helpers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UploadHelper
{

    public static function uploadFile($formdataImage, $diskPath)
    {
        // $imageName = $formdataImage->getClientOriginalName();
        $imageName = Str::random(30) . '.png';
        error_log('imageName: ' . $imageName);
        $tempPath = $diskPath . '/' . $imageName;
        $tt = Storage::disk('public')->putFileAs($diskPath, $formdataImage, $imageName);
        return Storage::disk('public')->url($tempPath);
    }
}
