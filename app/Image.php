<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $fillable = [
    'url',
    'album_id'
  ];

  public function album() {
    return $this->belongsTo('App\Album');
  }
}
