<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;

class doctorController extends Controller
{
    public function doctor(){
        $data = doctor::all();
        return $data;
    }
}
