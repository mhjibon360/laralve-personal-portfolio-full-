<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    /**
   * relation ship with user models
   */
  public function user()
  {
    return $this->belongsTo(User::class, 'user_id', 'id');
  }
    /**
   * relation ship with user models
   */
  public function categories()
  {
    return $this->belongsTo(PortfolioCategory::class, 'port_cat_id', 'id');
  }
}
