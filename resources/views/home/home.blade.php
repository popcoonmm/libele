<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
   <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <!--<link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">-->
    <link href="{{ secure_asset('css/home.css') }}" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="container">
        <div class="header-right">
          <a href="#">new</a>
          <a href="#" class="login">login</a>
        </div>
      </div>
    </header>
    <div class="top-wrapper">
      <div class="container">
        <h1>cake library</h1>
       
        <div class="btn-wrapper">
          <a href="home" class="btn signup">welcom</a>
         
        </div>
      </div>
    </div>
  </body>
</html>