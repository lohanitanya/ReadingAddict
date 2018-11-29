<?php

namespace App;

use Illuminate \Database \Eloquent \Model;

class Reader extends Model
{
    protected $connection = "mysql";
    protected $table = "readers";
    // protected $fillable = array("ik");
    public $timestamps = false;

}
