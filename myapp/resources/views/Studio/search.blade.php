@extends('layouts.app')
@extends('layouts.nav')

@section('content')
<form action="/studio" method="get">
  @csrf
  <div class="wrap">
    <h1>音楽スタジオを検索して、<br>利用したい時間を確認しよう！</h1>
    <div>
      <label for="city">エリアを入力する</label>
      <input id="city" type="text" name="city">
    </div>
    <div>
      <label for="roomsize">利用人数を入力する</label>
      <input id="roomsize" type="text" name="roomsize">
    </div>
    <div>
      <label for="rsvday">利用日と時間を選ぶ</label>
      <input id="rsvday" type="text" name="rsvday">
    </div>
    <input class="click-down" type="submit" value="検索">
  </div>
  </form>
@endsection
