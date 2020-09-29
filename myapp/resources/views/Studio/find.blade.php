@extends('layouts.app')
@extends('layouts.nav')

@section('content')
  <form action="/studio/find" method="post">
  @csrf
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" value="search"><br>
  </form>
  @if (isset($studio))
  <a href="/studio">

  @endif
@endsection


