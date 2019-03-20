<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ExtraCurricular extends Model
{
    public $fillable = ['activity_name', 'user_id', 'position','year','tic'];


}
