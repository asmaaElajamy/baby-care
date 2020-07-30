<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\baby;

class imageController extends Controller
{
    public function imageSave(Request $request){
        $posts=baby::where('id',$request->id)->get();
        //return response()->json($posts);
        $filename = "images.jpg";
        $path = $request->file('photo')->move(public_path("/photo"),$filename);
        $photoURL= url('/photo'.$filename);
        return response()->json(['url'=>$photoURL],200);

    }
    public function imagedownload(Request $request){
        return response()->download(public_path('photo/images.jpg'),'Baby Image');

    }
}
