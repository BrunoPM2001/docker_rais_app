@extends('layouts.header')
@section('titulo', 'Rais - Login')
<!--  Extra headers -->
@section('extra-headers')
  @vite('resources/css/app.css')
@endsection
@section('cuerpo')
  <p>Login para administradores:</p>
  <form action="{{route('login.post')}}" method="POST">
    @csrf
    <label for="user">Nombre de usuario:</label>
    <input type="text" name="user">
    <label for="passs">Contraseña:</label>
    <input type="password" name="pass">
    <input type="submit">
  </form>
@endsection