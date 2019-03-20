<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
  protected $fillable = [
      'book_id','user_id',
  ];

  protected $dates = [
    'end_date'
  ];
}
