<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Tweet;

class User extends Authenticatable
{
    use Notifiable,Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','avatar','banner','description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getAvatarAttribute($value){
        $path= $this->attributes['avatar'] ? "/storage/".$value : asset('images/download.png');
        return  $path;
    }
    public function getBannerAttribute($value){
        $path = $this->attributes['banner'] ? "/storage/".$value : asset('images/reactlaravel.jpeg');
        return $path;
    }
    // public function getDescriptionAttribute($value){
    //     $description = $this->attributes['description'] ? $value : "N/A";
    //     return $description;
    // }
    // public function setPasswordAttribute($value){
    //     $this->attributes['password'] = bcrypt($value);
    // }
    public function timeline(){
        // include all users tweets
        // include tweets of following users
        // dessending orderr
        $ids = $this->follows()->pluck('id');
        return Tweet::whereIn('user_id',$ids) ->orWhere('user_id',$this->id)->withLikes()->latest()->paginate(50);
    }

   
    public function tweets(){
       return $this->hasMany('App\Tweet')->latest();
    }
    public function likes(){
        return $this->hasMany('App\Like');
}
   
    public function getRouteKeyName(){
        return 'username';
    }

}
