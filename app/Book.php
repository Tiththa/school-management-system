<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $fillable = ['name', 'author', 'category','bookshelf','isbn','summary','shelf','filename','mime','original_filename'];
}
