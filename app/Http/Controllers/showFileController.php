<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showFileController extends Controller
{
    public function image(Request $request){
        $url = $request->input('url');
        return view('general.documentPreview.image',
        [
            'url' => $url
        ]);
    }

    public function pdf(Request $request){
        $url = $request->input('url');
        return view('general.documentPreview.pdf',
        [
            'url' => $url
        ]);
    }
}
