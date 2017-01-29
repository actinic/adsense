@extends('layout')
@section('title')
<h1>Login </h1>
<form method="post" action="loginform">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  First name :<br>
  <input type="text" name="name" value=""><br>
  Password :<br>
  <input type="password" name="password" value=""><br><br>
  <input type="submit" value="Submit">
</form>
@stop