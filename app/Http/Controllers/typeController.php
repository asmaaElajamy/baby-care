<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\type;
use App\food;

class typeController extends Controller
{
    /*public function insert(Request $request){
        $type = new type;
        $type->id=$request->input('id');
        $type->category=$request->input('category');
        $type->types=$request->input('types');
        $type->photo=$request->input('photo');
        $type->val1=$request->input('val1');
        $type->val2=$request->input('val2');
        $type->val3=$request->input('val3');
        $type->val4=$request->input('val4');
        $type->nutrients=$request->input('nutrients');
        $type->Pregnancy=$request->input('Pregnancy');
        $type->AfterBirth=$request->input('AfterBirth');
        $type->Breastfeeding=$request->input('Breastfeeding');
        $type->Baby=$request->input('Baby');
        $type->food_id= $request->input('food_id');
        $result = $type->save();
        /*if($result ==1){
         return "Record is inserted";
        }*/
        //return response()->json('Inserted Successfully', 200);
        //return response()->json($type);
        public function getType(Request $request)
         {
           $posts=type::where('food_id',$request->food_id)->get();
           return response()->json($posts);
         }
}
