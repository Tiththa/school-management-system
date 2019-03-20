<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
  protected $fillable = [
      'userId','name',
  ];

}
