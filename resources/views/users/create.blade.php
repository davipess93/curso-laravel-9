@extends("layouts.app")

@section("title", "Novo Usuário")

@section("content")
  <h1>Novo Usuário</h1>

  <form action="{{ route("users.store") }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Enviar</button>
  </form>
@endsection