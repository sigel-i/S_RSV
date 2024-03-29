@extends('layouts.app')

@section('content')
<div class="site">
    <form action="/studio/add" method="post">
        @csrf
        <div class="error">
            @if (count($errors) > 0)
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="wrap_add">
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
            <div>
                <label for="station">最寄駅</label>
                <input type="text" id="station" name="station" required value="{{ old('station') }}">
            </div>
            <div class="center_add">
                <button class="btn-flat-border" type="submit">新規登録</button>
            </div>
        </div>
    </form>
</div>
@endsection
