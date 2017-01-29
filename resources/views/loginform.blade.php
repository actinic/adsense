
@extends('layout')

@section('title')

{{"welcome "}} {{$name}} <br>
<img src="{{URL::asset('uploads/'.$img)}}">


@stop


