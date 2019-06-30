@extends('layouts.admin')
@section('title', 'Menu')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Menu</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\MenuController@add') }}" role="button" class="btn btn-primary">Newmenu</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\MenuController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">商品名</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-menu col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">タイトル</th>
                                <th width="50%">本文</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $menu)
                                <tr>
                                    <th>{{ $news->id }}</th>
                                    <td>{{ str_limit($menu->title, 100) }}</td>
                                    <td>{{ str_limit($menu->body, 250) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection