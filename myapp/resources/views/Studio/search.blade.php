@extends('layouts.app')
@extends('layouts.nav')


@section('content')
<div class="search-area">
<form action="/studio" method="get">
  @csrf
  <div class="wrap">
  <div class="search-title">音楽スタジオを検索して、<br>利用できるスタジオを確認しよう！</div>
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
</div>
@endsection
