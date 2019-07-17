<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Menu;
class MenuController extends Controller
{
   
    
    public function index(Request $request)
    {
     
    $cond_item = $request->cond_item;
    
        // $cond_title が空白でない場合は、記事を検索して取得する
        // if ($cond_item != '') {
        //     $menu = Menu::where('item', $cond_item).orderBy('updated_at', 'desc')->get();
        // } else {
        
            $menus= Menu::all()->sortBy('updated_at');
        // }

        // if (count($menu) > 0) {
        //     $headline = $menu->shift();
        // } else {
        //     $headline = null;
        // }
         return view('menu.index', [ 'menus' => $menus,'cond_item' => $cond_item]);
      
    }
}
