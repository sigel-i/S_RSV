@extends('layouts.app')
@extends('layouts.nav')


@section('content')
<div class="summary">
  <div class="hit-the-search">選択した音楽スタジオの評価とレビュー </div>
  <div class="top"></div>
  @foreach ($comments as $comment)
  <ul class="s_ul">
        <div><img alt="" src="{{$comment->studio->image_url}}"  class="img_size" ></div>
    <li class="s_li">
        <div class="container">
          <div class="item"><p>{{$comment->studio->name}}</p></div>
          <div class="item">{{optional($comment->user)->name}}</div>
          <div class="item">{{$comment->content}}</div>
        </div>
    </li>
  </ul>
  @endforeach
</div>
@endsection

