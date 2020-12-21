@extends('layouts.app')

@section('nav')
@endsection

@section('menubar')
  @parent
@endsection

@section('content')
  <table>
  <tr><th>Data</th></tr>
  @foreach ($rooms as $room)
    <tr>
      <td>{{$room->name}}</td>
      <td>{{$room->studio->name}}</td>
    </tr>
  @endforeach
  </table>
@endsection
