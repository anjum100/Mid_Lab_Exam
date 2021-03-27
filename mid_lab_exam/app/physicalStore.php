<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesController extends Model
{
    
    protected $table = 'physical_store';
    protected $primaryKey = 'product_id';

    public $timestamps = false;

}
