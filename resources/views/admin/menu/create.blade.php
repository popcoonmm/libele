<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Newmenu</title>
    </head>
    <body>
        <h1>newmenu</h1>
    </body>
</html>
{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ニュースの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Newmenu</h2>
                <form action="{{ action('Admin\MenuController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form>
                        商品名<br>
                        <input type="text" name="item"><br>
                         値段<br>
                        <select type="price">
                            <option value="1">¥500</option>
                            <option value="2">¥550</option>
                            <option value="3">¥600</option>
                            <option value="4">¥650</option>
                            <option value="5">¥700</option>
                            <option value="6">¥750</option>
                            <option value="7">¥800</option>
                            <option value="8">¥850</option>
                        </select><br>
                         アレルギー<br>
                        <input type="checkbox" name="allergy[]" value="1">鶏卵
                        <input type="checkbox" name="allergy[]" value="2">牛乳
                        <input type="checkbox" name="allergy[]" value="3">小麦
                        <input type="checkbox" name="allergy[]" value="4">ナッツ類
                        <input type="checkbox" name="allergy[]" value="5">果物
                        <br>
                        商品説明<br>
                        <textarea name="description" cols="50" rows="5">
                        </textarea>
                        <br>
                    </form>
                    <br>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">商品画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <br>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                    
                </form>
            </div>
        </div>
    </div>
@endsection