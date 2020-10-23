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
        <div class="item">
        @foreach($reviewcount as $review)
            @if($review->studio_id === $studio->id)
              @foreach($staravg as $avg)
                @if($avg->studio_id === $studio->id)
                  <div class="item"><a href="studio/comment">⭐️{{$avg->stars_avg}}（{{$review->stars_count}} 件）</a></div>
                @endif
              @endforeach
            @endif
          @endforeach
        <div class="item"><p>{{$studio->name}}</p></div>
        <div class="item">予約受付　TEL：{{$studio->tel}}</div>
        <div class="item">サイト：<a href="{{$studio->url}}">{{$studio->url}}</a></div>
            @foreach($studio->rooms as $room)
                @if($room->roomsize >= $roomsize)
                    <div class="item">スタジオ情報：
                    <tr><td>{{$room->name. "：" . $room->tatami_mats . "：" . $room->roomsize}}</td></tr><br>
                @endif
            @endforeach
                    </div>
     </li>
  </ul>
  @endforeach
 </div>
@endsection

