@extends('layouts.app')
@extends('layouts.nav')


@section('content')
<form method="post" action="/studio/review">
  @csrf
  <div class="wrap_add">
      <h1>レビュー投稿</h1>
      @include('error_card_list')
      <div class="center_id">
        <input type="hidden" for="user_id" name="user_id" id="user_id" value="{{ Auth::id() }}">登録No.：{{ Auth::id() }}
      </div>
      <div class="center_id">
        <input type="hidden" for="studio_id" name="studio_id" id="studio_id" value="{{ $studio->id }}">スタジオ名：{{ $studio->name }}
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
        <textarea class="textarea" rows="3" cols="10" id="content" name="content" required value="{{ old('content') }}"></textarea>
      </div>
      <div class="center">
        <input type="hidden" name="remember" id="remember" value="on">
        <button  class="btn-flat-border" type="submit">投稿</button>
      </div>
  </div>
</form>

@endsection
