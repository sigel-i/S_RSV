@extends('layouts.app')
@extends('layouts.nav')

@section('content')
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="wrap_add">
      <h1>ユーザー登録</h1>
      @include('error_card_list')
        <div>
          <h2>あなたは、スタジオのスタッフですか？</h2>
          <input type="radio" id="staff-1" name="staff" value="1">
          <label for="staff-1">YES</label>
          <input type="radio" id="staff-2" name="staff" value="0">
          <label for="staff-2">NO</label>
        </div>
        <div>
          <label for="name">ユーザー名</label>
          <input type="text" id="name" name="name" required value="{{ old('name') }}">
        </div>
        <div>
          <label for="email">メールアドレス</label>
          <input type="text" id="email" name="email" required value="{{ old('email') }}" >
        </div>
        <div>
          <label for="password">パスワード</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div>
          <label for="password_confirmation">パスワード(確認)</label>
          <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <div class="center_add">
        <button class="btn-flat-border"  type="submit">ユーザー登録</button>
        </div>
      </div>
  </form>
@endsection
