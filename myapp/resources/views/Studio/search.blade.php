@extends('layouts.app')
@extends('layouts.nav')


@section('content')
<form action="/studio" method="get">
  @csrf
  <div class="wrap">
    <h2>音楽スタジオを検索して、<br>利用できるスタジオを確認しよう！</h2>
      <div class="center">
        <label2 for="city">エリアを選択する</label>
        <select name="city" id="city" class="custom-select sources">
          @foreach(config('array_area') as $key => $score)
          <option value="{{ $key }}">{{ $score['area'] }}</option>
          @endforeach
        </select>
      </div>
      <div class="center">
        <label2 for="roomsize">利用人数を選択する</label>
        <select name="roomsize" id="roomsize" class="custom-select sources">
          @foreach(config('array_roomcount') as $key => $score)
            <option value="{{ $key }}">{{ $score['roomcount'] }}</option>
          @endforeach
        </select>
      </div>
      <div class="center">
        <input class="btn-flat-border" type="submit" value="検索">
      </div>
  </div>
  </form>
@endsection
