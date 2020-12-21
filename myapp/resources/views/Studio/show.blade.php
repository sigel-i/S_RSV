@extends('layouts.app')


@section('content')
<div class="summary">
  <div class="hit-the-search"><span class="text">音楽スタジオの</span><span class="text">評価とレビュー </span></div>
  <div class="top"></div>
    <ul class="r_ul">
          <div class="review_s"><img alt="" src="{{$studio->image_url}}"  class="img_size" >
          <h2><p>{{$studio->name}}</p></h2><a href="/studios/{{$studio->id}}/review"><p>レビューを投稿する</p></a></div>
        <li class="r_li">
          <div class="container">
                        <div class="item">⭐️{{number_format($studio->averageStars(),1)}}（{{$studio->countStars()}} 件）</a></div>
                <table class="table_box2">
                        <tr>
                            <th>投稿日</th>
                            <th>投稿者</th>
                            <th>コメント</th>
                        </tr>
                    @foreach ($studio->comments as $comment)
                      @if($comment->studio_id === $studio->id)
                        <tr>
                          <td>{{optional($comment->created_at)->format('Y年m月d日')}}</td>
                          <td>{{$comment->user->name}}</td>
                          <td>{{$comment->content}}</td>
                        </tr>
                      @endif
                  @endforeach
                </table>
            </div>
          </li>
      </ul>
</div>
@endsection
