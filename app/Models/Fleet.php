<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fleet extends Model
{
  use HasFactory;
  const PATH = "images/fleets/";
  protected  $fillable = ['name', 'description', 'photo','alt'];


  public function seo(): MorphOne
  {
    return $this->morphOne(Seo::class, 'seoable');
  }
  public function images(): MorphMany
  {
    return $this->morphMany(Image::class, 'imageable');
  }

  function features()
  {
    return $this->hasMany(Feature::class);
  }


}
