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
      <label for="rsvday">利用日を選ぶ</label>
      <input id="rsvday" type="text" name="rsvday">
    </div>
    <div>
      <label for="rsvtime_first">開始時間を選ぶ</label>
      <input id="rsvtime_first" type="text" name="rsvtime_first">
    </div>
    <div>
      <label for="rsvtime_end">終了時間を選ぶ</label>
      <input id="rsvtime_end" type="text" name="rsvtime_end">
    </div>
    <input class="click-down" type="submit" value="検索">
  </div>
  </form>
@endsection
