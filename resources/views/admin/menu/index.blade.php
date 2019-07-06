@extends('layouts.admin')
@section('title', 'Menu')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Menu</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\MenuController@add') }}" role="button" class="btn-outline-dark";>Newmenu</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\MenuController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">商品名</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_item" value="{{ $cond_item }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn-secondary " value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-menu col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-outline-secondary">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="15%">商品名</th>
                                <th width="15%">値段</th>
                                <th width="5%">ア</th>
                                <th width="5%">レ</th>
                                <th width="5%">ル</th>
                                <th width="5%">ギ</th>
                                <th width="5%">ー</th>
                                <th width="20%">商品紹介</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $menu)
                                <tr>
                                    <th>{{ $menu->id }}</th>
                                    <td>{{ str_limit($menu->item, 10) }}</td>
                                    <td>{{ str_limit($menu->price, 10) }}</td>
                                    <td>{{ str_limit($menu->allergy_egg, 5) }}</td>
                                    <td>{{ str_limit($menu->allergy_milk, 5) }}</td>
                                    <td>{{ str_limit($menu->allergy_wheat, 5) }}</td>
                                    <td>{{ str_limit($menu->allergy_nuts, 5) }}</td>
                                    <td>{{ str_limit($menu->allergy_fruit, 5) }}</td>
                                    <td>{{ str_limit($menu->description, 20) }}</td>
                                    
                         <td>
                            <div>
                                <a href="{{ action('Admin\MenuController@edit', ['id' => $menu->id]) }}" role="button" class="btn-secondary">編集</a>
                            </div>
                            <div>
                                <a href="{{ action('Admin\MenuController@delete', ['id' => $menu->id]) }}" role="button" class="btn-secondary">削除</a>
                                        </div>
                         </td>
                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection