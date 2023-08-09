<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GoogleDriveController extends Controller
{
    public function uploadImageToGDrive($folderpath, $file){
        Storage::disk('google')->put($folderpath.".".$file->extension(), file_get_contents($file));
        return Storage::disk('google')->url($folderpath.".".$file->extension());
    }
}