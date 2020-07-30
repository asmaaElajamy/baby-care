<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use app\baby;
use app\Role;
use app\type;
use app\doctor;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ="users";
    protected $fillable = [
        'name',
        'email',
        'gender',
        'type',
        'role',
        'password',
        'api_token',
        'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','api_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function baby(){
        //return $this->hasMany(baby::class);
        return $this->belongsTo('app\baby');
    }

    public function roles(){
        return $this->belongsToMany('App\Role','roles_users','user_id','role_id');
    }
    public function hasAnyRole($roles){
        if (is_array($roles)){
            foreach ($roles as $role){
                if ($this->hasRole($role)){
                    return true;
                }
            }
        }else{
            if ($this->hasRole($roles)){
                return true;
            }
        }
        return false;
    }

    public function hasRole($role){
        if ($this->roles()->where('name',$role)->first()){
            return true;
        }
        return false;
    }
    public function type(){
        return $this->hasMany('App\type');
    }
    public function doctor(){
        return $this->hasMany('App\doctor');
    }

}
