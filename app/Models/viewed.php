<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// 浏览表
class viewed extends Model
{
    use HasFactory;
    protected $table = "viewed";
    public function user(){
        return $this ->belongsTo(user::class);
    }
}
