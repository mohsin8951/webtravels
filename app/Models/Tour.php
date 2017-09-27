<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tour extends Model
{
  protected $fillable = [
   'name', 'image', 'duration', 'description', 'price',
];

public $timestamps = false;

}
