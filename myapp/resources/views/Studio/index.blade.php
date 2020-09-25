@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('menubar')
  @parent
@endsection

@section('content')
<div class="summary">
  <h2 class="">現在予約が可能な、音楽スタジオ </h2>
  <div class="top"></div>
  @foreach ($studios as $studio)
  <ul class="s_ul">
      <div><img alt="" src="{{$studio->image_url}}"  class="img_size" ></div>
   <li class="s_li">
      <div class="container">
        <div class="item">{{$studio->name}}</div>
        <div class="item">予約受付　TEL：{{$studio->tel}}</div>
        <div class="item">サイト：<a href="{{$studio->url}}">{{$studio->url}}</a></div>
              @if($studio->rooms != null)
                  @foreach ($studio->rooms as $room)
        <div class="item">予約状況：
                      <tr><td>{{$room->name. "：" . $room->tatami_mats}}</td></tr>
                      @if($room->reserves != null)
                          @foreach ($room->reserves as $reserve)
                              <tr><td>{{ "：" . $reserve->reserve->format('Y年m月d日') }}</td></tr><br>
                          @endforeach
                      @endif
                  @endforeach
              @endif
         </div>
     </li>
  </ul>
  @endforeach
 </div>
@endsection

