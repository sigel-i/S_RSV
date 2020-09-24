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
            <label for="name">部屋名</label>
            <input class="form-control" type="text" id="name" name="name" required value="{{ old('name') }}">
        </div>
        <div class="md-form">
            <label for="name">部屋の広さ</label>
            <input class="form-control" type="text" id="tatami_mats" name="tatami_mats" required value="{{ old('tatami_mats') }}">
        </div>
        <button class="btn btn-block heavy-rain-gradient mt-2 mb-2" type="submit">新規登録</button>
        </form>
    </div>
