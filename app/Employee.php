<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
  use SoftDeletes;

	protected $dates=['deleted_at'];

	protected $fillable=['name','slug','role_id','email','full_time',
		'street','town','city','country'];

	public $with = ['role','payrolls'];

	public function role(){
		return $this->belongsTo('App\Role');
	}

	public function payrolls(){
		return $this->hasMany('App\Payroll');
	}


}
