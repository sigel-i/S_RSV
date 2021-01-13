@extends('layouts.app')

@section('title', 'パスワード再設定')

@section('content')
  <div class="wrap_add">
            <h1>新しいパスワードを設定</h1>

            @include('error_card_list')

            <div class="card-text">
              <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="email" value="{{ $email }}">
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="md-form">
                  <label for="password">新しいパスワード</label>
                  <input class="form-control" type="password" id="password" name="password" required>
                </div>

                <div class="md-form">
                  <label for="password_confirmation">新しいパスワード(再入力)</label>
                  <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                </div>

                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">送信</button>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
