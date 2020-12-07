<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// 地区
class district extends Model
{
    use HasFactory;
    protected $table = "district";
    public function user(){
        $this->hasMany(user::class);
    }
}
