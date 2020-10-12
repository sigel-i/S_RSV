@extends('layouts.app')
@extends('layouts.nav')


@section('content')
<div class="summary">
  <div class="hit-the-search">検索で一致した、音楽スタジオ情報 </div>
  <div class="top"></div>
  @foreach ($studios as $studio)
  <ul class="s_ul">
      <div><img alt="" src="{{$studio->image_url}}"  class="img_size" ></div>
   <li class="s_li">
      <div class="container">
        <div class="item"><p>{{$studio->name}}</p></div>
        <div class="item">予約受付　TEL：{{$studio->tel}}</div>
        <div class="item">サイト：<a href="{{$studio->url}}">{{$studio->url}}</a></div>
              @if($studio->rooms != null)
                  @foreach ($studio->rooms as $room)
        <div class="item">スタジオ情報：
                      <tr><td>{{$room->name. "：" . $room->tatami_mats . "：" . $room->roomsize}}</td></tr>

                  @endforeach
              @endif
         </div>
     </li>
  </ul>
  @endforeach
 </div>
@endsection

