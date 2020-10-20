@extends('layouts.app')

@section('content')
<form action="/room/add" method="post">
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
    <div class="wrap">
        <h1>スタジオ部屋・新規登録</h1>
        <div class="center">
          <label for="studio_id">スタジオ名</label>
              <select name="studio_id" id="studio_id" class="custom-select sources">
                @foreach($studios as $key => $studio)
                <option value="{{ $key }}">{{ $studio->name }}</option>
                @endforeach
              </select>
        </div>
        <div class="center">
            <label for="name">部屋名</label>
            <input type="text" id="name" name="name" required value="{{ old('name') }}">
        </div>
        <div class="center">
          <label for="tatami_mats">部屋の広さ</label>
          <input type="text" id="tatami_mats" name="tatami_mats" required value="{{ old('tatami_mats') }}">
        </div>
        <div class="center">
          <label for="roomsize">部屋人数</label>
          <input type="text" id="roomsize" name="roomsize" required value="{{ old('roomsize') }}">
        </div>
        <div class="center">
          <button class="btn-flat-border" type="submit">新規登録</button>
        </div>
      </div>
</form>
