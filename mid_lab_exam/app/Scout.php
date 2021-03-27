<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $table = 'specialist ';
    public $timestamps = false;
    protected $primaryKey = 'email';
}
