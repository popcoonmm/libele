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
        if ($cond_item != '') {
            $posts = Menu::where('item', $cond_item).orderBy('updated_at', 'desc')->get();
        } else {
            $posts = Menu::all()->sortBy('updated_at');
        }

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
         return view('menu.index', ['headline' => $headline, 'posts' => $posts,'cond_item' => $cond_item]);
      
    }
}
