<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
  protected $fillable = [
    'menu_id','product number','users_number','quantity'
    ];
}
