@extends('layouts.app')
@extends('layouts.nav')


@section('content')
<div class="summary">
  <div class="hit-the-search">音楽スタジオの評価とレビュー </div>
  <div class="top"></div>
  @foreach ($studios as $studio)
  <ul class="r_ul">
        <div class="review_s"><img alt="" src="{{$studio->image_url}}"  class="img_size" >
        <h2><p>{{$studio->name}}</p></h2></div>
        <a href="review"><p>レビューを投稿する</p></a>
    <li class="r_li">
    <div class="container">
          @foreach($reviewcount as $review)
            @if($review->studio_id === $studio->id)
              @foreach($staravg as $avg)
                @if($avg->studio_id === $studio->id)
                  <div class="item">⭐️{{number_format($avg->stars_avg ,1)}}（{{$review->stars_count}} 件）</div>
                @endif
              @endforeach
            @endif
          @endforeach
          @foreach($comments as $comment)
            @if($comment->studio_id === $studio->id)
              <div class="item">{{$comment->user->name}}</div>
              <div class="item">{{$comment->content}}</div>
            @endif
          @endforeach
        </div>
    </li>
  </ul>
  @endforeach
</div>
@endsection

