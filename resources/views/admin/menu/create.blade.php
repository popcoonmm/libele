
{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'メニューの新規作成'を埋め込む --}}
@section('title', 'メニューの新規作成')

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
                    
                     <div class="form-group row">
                        <lable class="col-md-2" for="item">商品名</lable>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="item" value="{{ old('item') }}">
                        </div>
                    </div>
                        <div class="form-group row">
                        <lable class="col-md-2" for="price">値段</lable>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                        </div>
                    </div>
                    
                     <div class="form-group row">
                        <lable class="col-md-2" for="allergy">アレルギー</lable>
                        <div class="col-md-10">
                            <input type="checkbox" name="allergy_egg" value="鶏卵">鶏卵
                            <input type="checkbox" name="allergy_milk" value="乳">乳
                            <input type="checkbox" name="allergy_wheat" value="小麦">小麦
                            <input type="checkbox" name="allergy_nuts" value="ナッツ類">ナッツ類
                           <input type="checkbox" name="allergy_fruit" value="果物">果物
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <lable class="col-md-2" for="description">商品説明</lable>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="description" value="{{ old('description') }}">
                        </div>
                    </div>
                    
 
                    <div class="form-group row">
                        <label class="col-md-2" for="image">商品画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>


                    {{ csrf_field() }}
                    <input type="submit"class="btn-secondary" value="更新">
                    
                    
                </form>
            </div>
        </div>
    </div>
@endsection