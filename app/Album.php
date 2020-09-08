<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  protected $fillable = [
    'title',
    'artist',
    'year',
    'image_id',
  ];

  public function songs() {
    return $this->hasMany('App\Song');
  }

  public function image() {
    return $this->belongsTo('App\Image');
  }
}
