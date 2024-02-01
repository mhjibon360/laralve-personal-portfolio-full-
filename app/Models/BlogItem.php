<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogItem extends Model
{
  use HasFactory;
  protected $guarded = ['id'];

  /**
   * relationship with user model
   */
  public function users()
  {
    return $this->belongsTo(User::class, 'user_id', 'id');
  }
  /**
   * relationship with user model
   */
  public function categories()
  {
    return $this->belongsTo(BlogCategory::class, 'category_id', 'id');
  }
}
