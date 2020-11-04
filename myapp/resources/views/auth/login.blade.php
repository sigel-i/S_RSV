@extends('layouts.app')
@extends('layouts.nav')


@section('content')
<form method="POST" action="{{ route('login') }}">
  @csrf
  <div class="wrap">
  @if(!auth()->check())
  レビューするにはログインしてください。
@endif
  <h1>ログイン</h1>
  @include('error_card_list')
  <div>
    <label for="email">メールアドレス</label>
    <input type="text" id="email" name="email" required value="{{ old('email') }}">
  </div>
  <div>
    <label for="password">パスワード</label>
    <input type="password" id="password" name="password" required>
  </div>
  <input type="hidden" name="remember" id="remember" value="on">
  <button  class="btn-flat-border" type="submit">ログイン</button>

</form>

@endsection
