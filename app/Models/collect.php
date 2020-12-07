<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// 收藏
class collect extends Model
{
    use HasFactory;
    protected $table = "collect";
//    protected $fillable = ['title','content'];
    public function user(){
        return $this ->belongsTo(user::class);
    }
}
