<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// 点赞
class praise extends Model
{
    use HasFactory;
    protected $table = "praise";
    public function user(){
        $this->belongsTo(user::class);
    }
}
