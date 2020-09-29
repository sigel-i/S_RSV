@extends('layouts.app')
@extends('layouts.nav')

@section('content')
  <form action="/studio/find" method="post">
  @csrf
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" value="find"><br>
  </form>
  @if (isset($studio))
  <table>
  <tr><th>Data</th></tr>
  <tr>
    <td>{{$studio->getData()}}</td>
  </tr>
  </table>
  @endif
@endsection


