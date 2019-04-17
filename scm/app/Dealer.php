<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Dealer extends Model
{
    protected $fillable = [
        'user_id', 'name','logo', 'landline_no' ,'phno','work_email','bregistration','fyear','history','address','city','province','zip',
    ];
}
