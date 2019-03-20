<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payroll extends Model
{
    use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable=['employee_id','over_time','hours','rate','total'];


	public function employee(){
		return $this->belongsTo('App\Employee');
	}

	public function grossPay(){
		$calc = 0;
		if($this->employee->full_time && !$this->over_time){
			return $this->gross = $this->employee->role->salary;
		}
		if($this->employee->full_time && $this->over_time){
			$calc = $this->hours * $this->rate;
			return $this->gross = $calc + $this->employee->role->salary;
		}
		if($this->over_time || !$this->full_time){
			$calc = $this->hours * $this->rate;
			return $this->gross = $calc;
		}
		return $this->gross = 0;
	}


}
