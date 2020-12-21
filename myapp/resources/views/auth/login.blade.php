@extends('layouts.app')


@section('content')
<form method="POST" action="{{ route('login') }}">
  @csrf
  <div class="wrap_add">
            <!-- フラッシュメッセージ -->
            @if (session('flash_message'))
            <div class="flash_message">
                {{ session('flash_message') }}
            </div>
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
  <div class="center_add">
  <input type="hidden" name="remember" id="remember" value="on">
  <button  class="btn-flat-border" type="submit">ログイン</button>
  </div>

</form>

@endsection
