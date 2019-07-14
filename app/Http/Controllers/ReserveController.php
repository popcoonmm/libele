<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;
class ReserveController extends Controller
{
     public function index()
    {
      $reserves = Reserve::all();
      
        return view('reserves.index',['reserves' => $reserves]);
    }
    
     public function create(Request $request)
    {
      
      
      $reserve = new Reserve;
      $form = $request->all();
      
      unset($form['_token']);
   
      
      $reserve->fill($form);
      $reserve->save();
      
       return redirect('/');
    }
}
