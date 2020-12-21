@extends('layouts.app')


@section('content')
<div class="error">
        @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
<div class="summary">
  <div class="hit-the-search">
    <span class="text">検索で一致した、</span><span class="text">音楽スタジオ情報 </p></span></div>
     <div>
        <select name="link" id="link" class="sort-select link">
          <option value="">並び替え：選択する</option>
          <option value="/studio?city={{ $city }}&sort=desc&column=average_stars&roomsize={{ $roomsize }}">評価の平均値で降順</option>
          <option value="/studio?city={{ $city }}&sort=asc&column=average_stars&roomsize={{ $roomsize }}">評価の平均値で昇順</option>
          <option value="/studio?city={{ $city }}&sort=desc&column=count_stars&roomsize={{ $roomsize }}">コメントの数で降順</option>
          <option value="/studio?city={{ $city }}&sort=asc&column=count_stars&roomsize={{ $roomsize }}">コメントの数で昇順</option>
        </select>
     </div>
  <div class="top"></div>
  @foreach ($studios as $studio)
        <ul class="s_ul">
                <div class="container">
                    <img alt="" src="{{$studio->image_url}}"  class="img_size"><br><br>
                    <div class="item"><a href="studios/{{$studio->id}}">⭐️ {{number_format($studio->averageStars() ,1)}}（{{$studio->countStars()}} 件）</a></div>
                            <div class="item"><p>{{$studio->name}}</p></div>
                            <div class="item">予約受付　TEL：{{$studio->tel}}</div>
                            <div class="item">サイト：<a href="{{$studio->url}}" target="_blank" rel="noopener noreferrer">{{$studio->url}}</a></div>
                </div>
            <li class="s_li">
                <div class="container">
                  <table class="table_box">
                      <tr>
                          <th>部屋名</th>
                          <th>広さ</th>
                          <th>許容人数</th>
                      </tr>
                      @foreach($studio->rooms as $room)
                          @if($room->roomsize >= $roomsize)
                        <tr>
                          <td>{{$room->name}}</td>
                          <td>{{$room->tatami_mats}}</td>
                          <td>{{$room->roomsize}}</td>
                        </tr>
                          @endif
                      @endforeach
                    </table>
              </li>
          </ul>
      @endforeach
 </div>
 {{ $studios->appends(['city' => $city, 'roomsize' => $roomsize,'sort' => $sort, 'column' => $column])->links('pagination::default') }}
 <script>
   function test2() {
     console.log(2000);
   }
 </script>
@endsection

