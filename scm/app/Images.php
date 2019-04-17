<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Images extends Model
{
    protected $fillable = [
        'user_id', 'post_id','image_1','image_2','image_3','image_4','image_5','image_6','image_7','image_8','image_9','image_10',
        'image_11','image_12','image_13','image_14','image_15','image_16','image_17','image_18','image_19','image_20',
        'image_21','image_22','image_23','image_24','image_25',
    ];
}
