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
   public function allergies(){
       $allergies = "";
       $split_str = " ,";
       if ($this->allergy_egg){
           $allergies .= $this->allergy_egg . $split_str;
       }
       if ($this->allergy_milk){
           $allergies .= $this->allergy_milk . $split_str;
       }
       if ($this->allergy_wheat){
           $allergies .= $this->allergy_wheat . $split_str;
       }
       if ($this->allergy_nuts){
           $allergies .= $this->allergy_nuts . $split_str;
       }
       if ($this->allergy_fruit){
           $allergies .= $this->allergy_fruit . $split_str;
       }
      $allergies = rtrim($allergies,$split_str);
      return $allergies;
   }
}
