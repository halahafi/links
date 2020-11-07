<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'u_speed', 'd_speed', 'technology','static_ip','sub_id','images','name','price' ];
}
