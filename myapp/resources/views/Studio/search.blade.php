@extends('layouts.app')


@section('content')
<div class="search-area">
  <form action="/studio" method="get">
    @csrf
     <div class="wrap">
        <div class="overlay">
            <div class="search-title">Studio Search<br><h1>東京都内 音楽スタジオ検索</h1></div>
            <br>
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
     </div>
  </form>
</div>
@endsection
