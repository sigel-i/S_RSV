@extends('layouts.app')

@section('nav')
@endsection

@section('menubar')
  @parent
@endsection

@section('content')
  <table>
  <tr><th>Data</th></tr>
  @foreach ($reserves as $reserve)
    <tr>
      <td>{{$reserve->room->name}}</td>
      <td>{{$reserve->reserve}}</td>
    </tr>
  @endforeach
  </table>
@endsection
