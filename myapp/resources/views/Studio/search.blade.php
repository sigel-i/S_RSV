@extends('layouts.app')
@extends('layouts.nav')

@section('content')
<form action="/studio" method="get">
  @csrf
  <div class="wrap">
    <h1>音楽スタジオを検索して、<br>利用したい時間を確認しよう！</h1>
      <div class="center">
        <label2 for="city">エリアを選択する</label>
        <select name="city" id="city" class="custom-select sources" placeholder="Source Type">
          @foreach(config('array_area') as $key => $score)
          <option value="{{ $key }}">{{ $score['area'] }}</option>
          @endforeach
        </select>
      </div>
      <div class="center">
        <label2 for="roomsize">利用人数を選択する</label>
        <select name="roomsize" id="roomsize" class="custom-select sources" placeholder="Source Type">
          @foreach(config('array_roomcount') as $key => $score)
            <option value="{{ $key }}">{{ $score['roomcount'] }}</option>
          @endforeach
        </select>
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
