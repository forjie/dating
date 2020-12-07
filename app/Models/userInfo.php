<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// 用户详情
class userInfo extends Model
{
    use HasFactory;
    protected $table = "userInfo";
    public function user(){
        $this->hasOne(user::class);
    }
}
