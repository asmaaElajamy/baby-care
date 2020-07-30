<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\baby;
use App\User;

class babyController extends Controller
{
    public function insert(Request $request){
        $user = User::where('api_token', $request->api_token)->first();
        if (!$user) return response()->json('Not found', 404);
        $baby = new baby;
        $baby->id=$request->input('id');
        //$request->input('id');
        $baby->user_id = $user->id;
        $baby->name=$request->input('name');
        $baby->gender=$request->input('gender');
        $baby->birthdate=$request->input('birthdate');
        $baby->weight=$request->input('weight');
        $baby->length=$request->input('length');
        $result = $baby->save();
        /*if($result ==1){
         return "Record is inserted";
        }*/
        if ($user) 
        //return response()->json('Inserted Successfully', 200);
        return response()->json($baby);   
    }
    public function update(Request $request , $id){
        $baby = baby::find($id);
        $baby->name=$request->input('name');
        $baby->gender=$request->input('gender');
        $baby->birthdate=$request->input('birthdate');
        $baby->weight=$request->input('weight');
        $baby->length=$request->input('length');
        $result = $baby->save();
        return response()->json($baby);
    }

    ///////////////////delete//////////////////
    public function deleteBaby(Request $request ,$id){
        $del = baby::find($id);
        $del->delete();
        return response()->json($del);

    }
    //////////////////get info///////////////////
    public function getbabyinfo(Request $request)
         {
           /*$posts=baby::where('id',$request->id)->get();
           return response()->json($posts);*/
           $posts=baby::where('user_id',$request->user_id)->get();
           return response()->json($posts);

         }
}
