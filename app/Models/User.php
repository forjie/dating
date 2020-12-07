<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    public function collect(){
        $this->hasMany(collect::class);
    }
    public function district(){
        $this->belongsTo(district::class);
    }
    public function media(){
        $this->belongsTo(media::class);
    }
    public function praise(){
        $this->hasMany(praise::class);
    }
    public function userInfo(){
        $this->hasOne(userInfo::class);
    }
    public function viewed(){
        $this->hasMany(viewed::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
