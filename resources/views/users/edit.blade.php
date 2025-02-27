@extends('layouts.admin')

@section('content')

    <a href="{{ route('user.index') }}">Listar</a><br>
    <a href="{{ route('user.show', ['user' => $user->id]) }}">Visualizar</a><br>

    <h2>Editar Usuário</h2>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p style="color: red">
                {{ $error }}
            </p>
        @endforeach
    @endif

    <form action="{{ route('user-update', ['user' => $user->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label>
        <input type="text" name="name" placeholder="insira seu nome" value="{{ old("name", $user->name) }}"><br><br>

        <label>Email:</label>
        <input type="email" name="email" placeholder="seu melhor E-Mail" value="{{ old("email", $user->email) }}"><br><br>

        <label>Senha:</label>
        <input type="password" name="password" placeholder="Senha com mínimo de 6 caracteres" value="{{ old("password") }}"><br><br>

        <button type="submit">Salvar</button>
    </form>
@endsection
