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
    <li class="r_li">
        <div class="container">
          <div class="item">{{$recount}}</div>
          <div class="item">{{$staravg}}</div>
          <div class="item">{{optional($studio->user)->name}}</div>
          <div class="item">{{$studio->content}}</div>
        </div>
    </li>
  </ul>
  @endforeach
</div>
@endsection

