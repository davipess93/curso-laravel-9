@extends("layouts.app")

@section("title", "Editando o usuário {$user->name}")

@section("content")
  <h1>Editando o usuário {{ $user->name }}</h1>

  @if ($errors->any())
    <ul class="errors">
      @foreach ($errors->all() as $error)
          <li class="error">{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  <form action="{{ route("users.update", $user->id) }}" method="POST">
    @method("PUT")
    @csrf
    <input type="text" name="name" placeholder="name" value="{{ $user->name }}">
    <input type="email" name="email" placeholder="email" value="{{ $user->email }}">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Enviar</button>
  </form>
@endsection