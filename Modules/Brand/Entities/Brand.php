<?php

namespace Modules\Brand\Entities;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [];


public function categories() {
  return  $this->belongsToMany('Modules\Category\Entities\Category');
}

  public function image() {
    return  $this->hasOne('Modules\Image\Entities\Image','type_id');
  }
}
