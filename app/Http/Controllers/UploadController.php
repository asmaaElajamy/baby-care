<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\food;
use App\type;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    public function index(){
        $foods = food::all();
        return view('upload')->with('foods',$foods);
    }
    public function upload(Request $request){
        $this->validate($request,[
            'category'=>'required',
            'types'=>'required',
            'photo'=>'required',
            'val1'=>'required',
            'val2'=>'required',
            'val3'=>'required',
            'val4'=>'required',
            'Pregnancy'=>'required',
            'AfterBirth'=>'required',
            'Breastfeeding'=>'required',
            'Baby'=>'required',
        ]);
        $type = new type();
        $type->category = $request->input('category');
        $type->types = $request->input('types');
        $type->photo = $request->input('photo');
        $type->val1 = $request->input('val1');
        $type->val2 = $request->input('val2');
        $type->val3 = $request->input('val3');
        $type->val4 = $request->input('val4');
        $type->Pregnancy = $request->input('Pregnancy');
        $type->AfterBirth = $request->input('AfterBirth');
        $type->Breastfeeding = $request->input('Breastfeeding');
        $type->Baby = $request->input('Baby');
        $type->user_id = auth()->user()->id;
        $type->food_id = $request->input('food');
        $type->save();
        return redirect(route('upload'))->with('msg','Added OK');
    }
}
