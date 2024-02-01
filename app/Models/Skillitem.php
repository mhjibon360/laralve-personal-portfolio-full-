<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skillitem extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    /**
     * relationship with user model
     */
    public function user(){
      return $this->belongsTo(User::class,'user_id','id');
    }
}
