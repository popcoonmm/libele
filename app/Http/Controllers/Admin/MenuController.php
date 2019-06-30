<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
class MenuController extends Controller
{
    public function add()
    {
        return view('admin.menu.create');
    }
    public function create(Request $request)
  {
      $this->validate($request, Menu::$rules);

      $menu = new Menu;
      $form = $request->all();

      // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $menu->image_path = basename($path);
      } else {
          $menu->image_path = null;
      }

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);

      // データベースに保存する
      $menu->fill($form);
      $menu->save();
      
      
      
      return redirect('admin/menu/create');
  }  
}
