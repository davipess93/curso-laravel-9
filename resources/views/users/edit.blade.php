@extends("layouts.app")

@section("title", "Editando o usuário {$user->name}")

@section("content")
  <h1>Editando o usuário {{ $user->name }}</h1>

  @include("includes.validations-form")

  <form action="{{ route("users.update", $user->id) }}" method="POST">
    @method("PUT")
    @include("users._partials.form")
  </form>
@endsection