<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
  protected $fillable = [
    'title',
    'genre',
    'duration',
    'producer',
    'album_id',
  ];

  public function album() {
    return $this->belongsTo('App\Album');
  }
}
