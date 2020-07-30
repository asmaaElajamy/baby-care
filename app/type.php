<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\food;
use App\User;

class type extends Model
{
    protected $table ="types";
    protected $fillable = [
        'category',
        'types',
        'photo',
        'val1',
        'val2',
        'val3',
        'val4',
        'nutrients',
        'Pregnancy',
        'AfterBirth',
        'Breastfeeding',
        'Baby',
        'food_id'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function food(){
        return $this->belongsTo('App\food');
    }
}
