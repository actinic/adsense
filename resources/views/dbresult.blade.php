@extends('layout')

@section('title')

@foreach($results as $result)
	<div>
	{{$result->name}} {{"       "}} {{$result->password}} {{ "     "}} 
	</div>
	<img src="{{URL::asset('uploads/'.$result->image)}}">
	<br>
@endforeach
@stop



