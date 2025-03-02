@extends('layouts.admin')

@section('content')
<div class="card mt-4 mb-4 border-light shadow">

    <div class="card-header hstack gap-2">
        Listar Usuários
        <span class="ms-auto"><a class="btn btn-success btn-sm" href="{{ route('user.create') }}">Cadastrar</a></span>

    </div>

    <div class="card-body">
        <x-alert />

        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-Mail</th>
                <th scope="col" class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            <a class="btn btn-primary btn-sm" href="{{ route('user.show', ['user' => $user->id]) }}">Visualizar</a>
                            <a class="btn btn-warning btn-sm" href="{{ route('user.edit', ['user' => $user->id]) }}">Editar</a>
                            <form class="d-inline" method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Tem certeza que deseja excluir esse registro?')">Apagar</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
