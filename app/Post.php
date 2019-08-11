<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name default posts
    // for manual setting use below
    protected $table = 'posts';
    //for setting primaryKey
    public $primaryKey = 'id';
    //$timestamps setting
    public $timestamps = 'true';


}
post::all();
