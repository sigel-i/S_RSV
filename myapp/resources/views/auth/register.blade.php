@extends('layouts.app')
@extends('layouts.nav')

@section('content')
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="wrap">
      <h1>ユーザー登録</h1>
      @include('error_card_list')
        <div>
          <input type="checkbox" id="staff" name="staff" value="1">
          <label for="staff">あなたは、スタジオのスタッフですか？</label>
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
        <button class="btn-flat-border"  type="submit">ユーザー登録</button>
      </div>
  </form>
@endsection
