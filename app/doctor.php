<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class doctor extends Model
{
    protected $table ="doctors";
    protected $fillable = [
        'name',
        'address',
        'rate',
        'specialty',
        'mobile',
        'phone',
        'email',
        'longitude',
        'latitude',
        'photo',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
