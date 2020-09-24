@extends('layouts.app')

@section('content')
<div class="add">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <h1 class="text-center"><a class="text-dark" href="/"></a></h1>
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">新規登録</h2>
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card-text">
      <form action="/studio/add" method="post">
        @csrf
        <div class="md-form">
            <label for="name">スタジオ名</label>
            <input class="form-control" type="text" id="name" name="name" required value="{{ old('name') }}">
        </div>
        <div class="md-form">
            <label for="name">メールアドレス</label>
            <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
        </div>
        <div class="md-form">
            <label for="name">都道府県</label>
            <input class="form-control" type="text" id="pref" name="pref" required value="{{ old('pref') }}">
        </div>
        <div class="md-form">
            <label for="name">市区町村</label>
            <input class="form-control" type="text" id="city" name="city" required value="{{ old('city') }}">
        </div>
        <div class="md-form">
            <label for="name">サイトURL</label>
            <input class="form-control" type="text" id="url" name="url" required value="{{ old('url') }}">
        </div>
        <div class="md-form">
            <label for="name">電話番号</label>
            <input class="form-control" type="text" id="tel" name="tel" required value="{{ old('tel') }}">
        </div>
        <div class="md-form">
            <label for="name">トップページ画像URL</label>
            <input class="form-control" type="text" id="image_url" name="image_url" required value="{{ old('image_url') }}">
        </div>
        <button class="btn btn-block heavy-rain-gradient mt-2 mb-2" type="submit">新規登録</button>
        </form>
    </div>
@endsection
