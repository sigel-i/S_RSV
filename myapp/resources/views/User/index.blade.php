@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

<style>
.pagination { font-size:10px; }
.pagination li { display:inline-block }
</style>


@section('content')
    @if (Auth::check())
    <p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
    @else
    <p>※ログインしていません。(<a href="/login">ログイン</a>
      <a href="/register">登録</a>)</p>
    @endif
  <table>
  <tr><th>ID</th><th>Name</th><th>Mail</th><th>Staff</th><th>password</th></tr>
  @foreach ($items as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->staff}}</td>
      <td>{{$item->password}}</td>
    </tr>
  @endforeach
 </table>


 @endsection
