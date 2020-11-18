@extends('layouts.app')
@extends('layouts.nav')


@section('content')
<form method="post" action="/studio/review">
  @csrf
  <div class="wrap_add">
      <h1>レビュー投稿</h1>
      @include('error_card_list')
      <div class="center">
      <input type="hidden" for="user_id" name="user_id" id="user_id" value="{{ Auth::id() }}">ユーザーID：{{ Auth::id() }}</div>
      <div class="center">
        <label for="studio_id">スタジオ名</label>
        <select name="studio_id" id="studio_id" class="custom-select sources">
              @foreach($studios as $key => $studio)
              <option value="{{ $studio->id }}">{{ $studio->name }}</option>
              @endforeach
            </select>
      </div>
      <div class="center">
        <label for="stars">評価</label>
          <select name="stars" id="stars" class="custom-select sources">
              @foreach(config('array_star') as $key => $score)
              <option value="{{ $key }}">{{ $score['star'] }}</option>
              @endforeach
          </select>
      </div>
      <div class="center">
        <label for="content">コメント</label>
        <textarea class="textarea" row="15" cols="100" id="content" name="content" required value="{{ old('content') }}"></textarea>
      </div>
      <div class="center">
        <input type="hidden" name="remember" id="remember" value="on">
        <button  class="btn-flat-border" type="submit">投稿</button>
      </div>
  </div>
</form>

@endsection
