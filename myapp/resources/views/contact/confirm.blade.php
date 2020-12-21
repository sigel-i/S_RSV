@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('contact.send') }}">
    @csrf
    <div class="wrap_add">
    <h1>入力内容確認</h1>
      <div>
        <label2>メールアドレス</label><br>
        <h5>{{ $inputs['email'] }}</h5>
        <input
            name="email"
            value="{{ $inputs['email'] }}"
            type="hidden">
      </div>
      <div>
        <label2>タイトル</label>
        <h5>{{ $inputs['title'] }}</h5>
        <input
            name="title"
            value="{{ $inputs['title'] }}"
            type="hidden">
      </div>
      <div>
        <label2>お問い合わせ内容</label>
        <h6>{!! nl2br(e($inputs['body'])) !!}</h6>
        <input
            name="body"
            value="{{ $inputs['body'] }}"
            type="hidden">
        </div>

        <div class="center_add">
        <button  class="btn-flat-border" type="submit" name="action" value="back">入力内修正</button>
      </div>

      <div  class="center_add">
        <button  class="btn-flat-border" type="submit" name="action" value="submit">送信する</button>
      </div>
    </div>
</form>
@endsection
