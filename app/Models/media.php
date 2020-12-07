<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// 媒体文件
class media extends Model
{
    use HasFactory;
    protected $table = "media";
    public function user(){
        $this->hasMany(user::class);
    }
}
