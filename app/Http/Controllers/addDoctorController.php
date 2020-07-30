<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;

class addDoctorController extends Controller
{
    public function insert(){
        return view('add');
    }
    public function add(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'address'=>'required',
            'rate'=>'required',
            'specialty'=>'required',
            'mobile'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'longitude'=>'required',
            'latitude'=>'required',
            'photo'=>'required',
        ]);
        $add = new doctor();
        $add->name = $request->input('name');
        $add->address = $request->input('address');
        $add->rate = $request->input('rate');
        $add->specialty = $request->input('specialty');
        $add->mobile = $request->input('mobile');
        $add->phone = $request->input('phone');
        $add->email = $request->input('email');
        $add->longitude = $request->input('longitude');
        $add->latitude = $request->input('latitude');
        $add->photo = $request->input('photo');
        $add->user_id = auth()->user()->id;
        $add->save();
        return redirect(route('add'))->with('msg','Added OK');
    }
    public function index()
    {
        $doctors = doctor::all();
       return view('admin.doctors')->with('doctors',$doctors);
    }
    public function edit($id)
    {
        $doctor = doctor::find($id);
        return view('edit')->with('doctor',$doctor);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'address'=>'required',
            'rate'=>'required',
            'specialty'=>'required',
            'mobile'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'longitude'=>'required',
            'latitude'=>'required',
            'photo'=>'required',
        ]);

        $doctor = doctor::find($id);
        $doctor->name = $request->input('name');
        $doctor->address = $request->input('address');
        $doctor->rate = $request->input('rate');
        $doctor->specialty = $request->input('specialty');
        $doctor->mobile = $request->input('mobile');
        $doctor->phone = $request->input('phone');
        $doctor->email = $request->input('email');
        $doctor->longitude = $request->input('longitude');
        $doctor->latitude = $request->input('latitude');
        $doctor->photo = $request->input('photo');
        $doctor->save();
        return redirect(route('edit',$doctor->id))->with('msg','Edited');
    }
    public function destroy($id)
    {
        $doctor = doctor::find($id);
        $doctor->destroy($id);
        //$doctor->delete();
        return redirect(route('add'))->with('msg','Deleted');
    }
}
