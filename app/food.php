<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\type;

class food extends Model
{
    protected $table ="foods";
    protected $fillable = [
        'foodCategory'
    ];
    public function type(){
        return $this->hasMany('App\type');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
