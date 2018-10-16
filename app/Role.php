<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=['name','slug','salary','department_id'];
	
	public $with = ['department'];
	
	public function department(){
		return $this->belongsTo('App\Department');
	}
	
	public function employees(){
		return $this->hasMany('App\Employee');
	}
	
}
