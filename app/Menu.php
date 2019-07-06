<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'item' => 'required',
        'price' => 'required',
       // 'allergy' => 'required',
        'description' => 'required',
    );
   
}
