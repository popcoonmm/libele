@extends('layouts.front')
@section('content')
        <hr style="color:#c0c0c0;">
          @foreach($menu as $menu)
                    <!--<div class="date">-->
                        <!--{{ $menu->updated_at->format('Y年m月d日') }}-->
                    <!--</div>-->
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
           
                    
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_{{ $menu->id }}">
                      画像表示
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal_{{ $menu->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title1" id="exampleModalLabel">{{ $menu->item }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                <div class="menu-image">
                                @if ($menu->image_path)
                                    <img src="{{ secure_asset('storage/image/' . $menu->image_path) }}"class="aligncenter" style="width:100%;" />
                                @endif
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                            <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
@endsection