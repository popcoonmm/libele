<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <!--<link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">-->
    <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
      <title>メニュー</title>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <h1 class="header-top">MENU</h1>
         <div class="header">
           <a href='reserves/index' class="reservation">予約リストへ</a>
           <a href='/' class="top">トップへ</a>
          </div>
        </div>
      </div>
    </header>
      <div class="menu-ground">
          @foreach($menus as $menu)
          <div class="menu">
          <div class="menu-image">
           @if ($menu->image_path)
            <img src="{{ secure_asset('storage/image/' . $menu->image_path) }}"class="aligncenter" style="width:100%;" />
           @endif
          </div> 
                    <div class="date">
                    {{ $menu->updated_at->format('Y年m月d日') }}
                    </div>
                    <div class="item">
                    {{ str_limit($menu->item, 150) }}
                    </div>
                    <div class="price">
                        {{ str_limit($menu->price, 150) }}
                    </div>
                    <div class="allergy">
                        {{ str_limit($menu->allergy, 150) }}
                    </div>
                    <div class="description mt-3">
                        {{ str_limit($menu->description, 300) }}
                    </div>
               <form action="{{ action('ReserveController@create') }}" method="post" enctype="multipart/form-data">   
                      <div class="form-item">個数</div>
                       <select name="quantity">
                          <option value="0">選択してください</option>
                            <?php
                                 for ($i = 1; $i <= 10; $i++){
                                 echo "<option value='{$i}'>{$i}</option>";
                                 }
                                 ?>
                  </select>
                   {{ csrf_field() }}
                   <!--IDのタグをPOSTで一緒に送るためのタグ-->
                   <input type="hidden" name="menu_id" value="{{$menu->id}}">
                   
                    <input type="submit"class="btn-secondary" value="予約リストへ">
                    
                  
                </form>
              </div>
          @endforeach
      </div>
  </body>
</html>
                   