@extends('layouts.admin')

@section('content')
    <a href="{{ route('user.index') }}">Voltar</a>
    <h2>Cadastrar Usuários</h2>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p style="color: red">
            {{ $error }}
            </p>
        @endforeach
    @endif

    <form action="{{ route('user-store') }}" method="POST">
        @csrf
        @method('POST')

        <label>Nome:</label>
        <input type="text" name="name" placeholder="insira seu nome" value="{{ old("name") }}"><br><br>

        <label>Email:</label>
        <input type="email" name="email" placeholder="seu melhor E-Mail" value="{{ old("email") }}"><br><br>

        <label>Senha:</label>
        <input type="password" name="password" placeholder="Senha com mínimo de 6 caracteres" value="{{ old("password") }}"><br><br>

        <button type="submit">Cadastrar</button>
    </form>
@endsection
