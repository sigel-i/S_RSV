@extends('layouts.app')

@section('title', 'パスワード再設定')

@section('content')
<div class="site">
  <div class="wrap_add">
            <h1>パスワード再設定</h1>

            @include('error_card_list')

            @if (session('status'))
              <div class="card-text alert alert-success">
                {{ session('status') }}
              </div>
            @endif

            <div class="card-text">
              <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="md-form">
                  <label for="email">メールアドレス</label>
                  <input class="form-control" type="text" id="email" name="email" required>
                </div>
                  <div class="center_add">
                  <button class="btn-flat-border" type="submit">メール送信</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
