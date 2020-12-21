@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('contact.confirm') }}">
    @csrf
    <div class="wrap_add">
    <h1>お問い合わせ</h1>
      <div>
        <label>メールアドレス</label>
        <input
            name="email"
            value="{{ old('email') }}"
            type="text">
        @if ($errors->has('email'))
            <p class="error-message">{{ $errors->first('email') }}</p>
        @endif
      </div>
      <div>
        <label>タイトル</label>
        <input
            name="title"
            value="{{ old('title') }}"
            type="text">
        @if ($errors->has('title'))
            <p class="error-message">{{ $errors->first('title') }}</p>
        @endif
      </div>
      <div>
        <label>お問い合わせ内容</label>
        <textarea class="textarea" name="body">{{ old('body') }}</textarea>
        @if ($errors->has('body'))
            <p class="error-message">{{ $errors->first('body') }}</p>
        @endif
      </div>
      <div>
        <input type="hidden" name="remember" id="remember" value="on">
        <button  class="btn-flat-border" type="submit">入力内容確認</button>
      </div>
    </div>
</form>
@endsection
