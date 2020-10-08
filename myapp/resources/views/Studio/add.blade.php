@extends('layouts.app')
@extends('layouts.nav')

@section('content')
    <form action="/studio/add" method="post">
    @csrf
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="wrap">
        <h1>新規登録</h1>
        <div>
            <label for="name">スタジオ名</label>
            <input type="text" id="name" name="name" required value="{{ old('name') }}">
        </div>
        <div>
            <label for="email">メールアドレス</label>
            <input type="text" id="email" name="email" required value="{{ old('email') }}">
        </div>
        <div>
            <label for="pref">都道府県</label>
            <input type="text" id="pref" name="pref" required value="{{ old('pref') }}">
        </div>
        <div>
            <label for="city">市区町村</label>
            <input type="text" id="city" name="city" required value="{{ old('city') }}">
        </div>
        <div>
            <label for="url">サイトURL</label>
            <input type="text" id="url" name="url" required value="{{ old('url') }}">
        </div>
        <div>
            <label for="tel">電話番号</label>
            <input type="text" id="tel" name="tel" required value="{{ old('tel') }}">
        </div>
        <div>
            <label for="image_url">トップページ画像URL</label>
            <input type="text" id="image_url" name="image_url" required value="{{ old('image_url') }}">
        </div>
        <button class="btn-flat-border" type="submit">新規登録</button>
    </div>
    </form>
</div>
@endsection
