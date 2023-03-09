@extends('layouts.main')
@section('title','Contact')
@section('content')
    <h1>Hi</h1>
    @for($i = 0;$i < count($contacts); $i++)
        <p>{{$contacts[$i]}} - {{$i}}</p>
    @endfor
    @foreach($pessoas as $pessoa)
        <p>{{$pessoa}}</p>
    @endforeach
@endsection
