@extends('layouts.admin')

@section('content')

    <a href="{{ route('user.index') }}">Listar</a><br>
    <a href="{{ route('user.edit', ['user' => $user->id]) }}">Editar</a><br>
    <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir esse registro?')">Apagar</button>
    </form>

    <h2>Visualizar Usuário</h2>

    @if(session('success'))
        <p style="color: #086">
            {{session('success')}}
        </p>
    @endif

    ID: {{ $user->id }}<br>
    Nome: {{ $user->name }}<br>
    E-Mail: {{ $user->email }}<br>
    Cadastrado: {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/y H:i') }}<br>
    Editado: {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/y H:i') }}
@endsection

