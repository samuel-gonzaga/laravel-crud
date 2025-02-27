@extends('layouts.admin')

@section('content')
    <a href="{{ route('user.create') }}">Cadastrar</a>

    <h2>Listar Usuários</h2>

    @if(session('success'))
        <p style="color: #086">
            {{session('success')}}
        </p>
    @endif

    @forelse($users as $user)
        ID: {{ $user->id }}<br>
        Nome: {{ $user->name }}<br>
        Email: {{ $user->email }}<br>
        <a href="{{ route('user.show', ['user' => $user->id]) }}">Visualizar</a><br>
        <a href="{{ route('user.edit', ['user' => $user->id]) }}">Editar</a><br>
        {{--        <a href="{{ route('user.destroy', ['user' => $user->id]) }}">Apagar</a><br>--}}
        <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}">
            @csrf
            @method('delete')
            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir esse registro?')">Apagar</button>
        </form>
        <hr>
    @empty
    @endforelse
@endsection

