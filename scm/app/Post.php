<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    protected $fillable = [

        'user_id','body_style','condition','year','make','model','submodel','trim','mileage','transmission','fuel_type','engine_capacity','highway_mpg','highway_fuel','city_mpg','city_fuel','exterior_colour','owner','price','features','info','location','province','slug',

        

    ];
}
