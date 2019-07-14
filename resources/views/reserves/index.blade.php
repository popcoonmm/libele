<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
      <title>予約一覧</title>
  </head>
   <body>
     <header>
       <div class="container">
        <div class="row">
          <h1 class="header-top">Reservation</h1>
        </div>
        </div>
         <div class="header">
           <a href='reserves/create' class="reservation">予約リストへ</a>
           <a href='/' class="top">トップへ</a>
        </div>
     </header>
     <div class="reservation_ground">
      <h1>予約一覧がわーーーー</h1>
      <!--左が全てのデータ(複数系)からひとつ（単数形）だけ取り出す-->
       @foreach($reserves as $reserve)
      <div class="reserve">
          
           <div class="menu_id'">
                    {{ $reserve->menu_id }}
          </div>
          <div class="quantity">
                        {{ $reserve->quantity }}
          </div>
         
          @endforeach
      </div>
   </body>
</html>
