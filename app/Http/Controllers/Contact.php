<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public $fillable = ['name','email','street','town','city','country','role_id','full_time'];
}
