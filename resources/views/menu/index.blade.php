@extends('layouts.front')
@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <!--
    @if (!is_null($headline))
            <div class="headline">
                <div class="headline">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="image">
                                    @if ($headline->image_path)
                                        <img src="{{ asset('storage/image/' . $headline->image_path) }}">
                                    @endif
                                </div>
                                <div class="item ">
                                    <h1>{{ str_limit($headline->item, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                         <div class="price p-2">
                                    <h1>{{ str_limit($headline->price, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                         <div class="allergy p-2">
                                    <h1>{{ str_limit($headline->allergy, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="allergy p-2">
                                    <h1>{{ str_limit($headline->allergy, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="allergy p-2">
                                    <h1>{{ str_limit($headline->allergy, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="allergy p-2">
                                    <h1>{{ str_limit($headline->allergy, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="allergy p-2">
                                    <h1>{{ str_limit($headline->allergy, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <p class="description mx-auto">{{ str_limit($headline->description, 350) }}</p>
                        </div>
                    </div>
                </div>
            </div>
            -->
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="col-md-12 mx-auto mt-1">
                @foreach($posts as $post)
                    <div class="menu">
                    
                            <div class="menutext col-md-4">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="item">
                                    {{ str_limit($post->item, 150) }}
                                </div>
                                <div class="price">
                                    {{ str_limit($post->price, 150) }}
                                </div>
                                <div class="allergy_egg">
                                    {{ str_limit($post->allergy_egg, 150) }}
                                </div>
                                <div class="allergy_milk">
                                    {{ str_limit($post->allergy_milk, 150) }}
                                </div>
                                <div class="allergy_wheat">
                                    {{ str_limit($post->allergy_wheat, 150) }}
                                </div>
                                <div class="allergy_nuts">
                                    {{ str_limit($post->allergy_nuts, 150) }}
                                </div>
                                <div class="allergy_fruit">
                                    {{ str_limit($post->allergy_fruit, 150) }}
                                </div>
                                
                                <div class="description mt-3">
                                    {{ str_limit($post->description, 300) }}
                                </div>
                        
                            <div class="menu-image">
                                @if ($post->image_path)
                                    <img src="{{ secure_asset('storage/image/' . $post->image_path) }}"class="aligncenter" />
                                @endif
                                
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection