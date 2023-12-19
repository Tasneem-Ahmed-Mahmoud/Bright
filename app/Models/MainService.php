<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MainService extends Model
{
    use HasFactory;

    protected $fillable=['name','description'];

function service(){
    return $this->belongsTo(Service::class);
 }
    public function seo() : MorphOne{
        return $this->morphOne(Seo::class, 'seoable'); 
      }

}
