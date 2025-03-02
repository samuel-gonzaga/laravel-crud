@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow">

        <div class="card-header hstack gap-2">
            Visualizar Usuário
            <span class="ms-auto d-sm-flex flex-row gap-1">
                <a class="btn btn-info btn-sm" href="{{ route('user.index') }}">Listar</a>
                <a class="btn btn-warning btn-sm" href="{{ route('user.edit', ['user' => $user->id]) }}">Editar</a>
                <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Tem certeza que deseja excluir esse registro?')">Apagar</button>
                </form>
            </span>

        </div>

        <div class="card-body">
            <x-alert />

            <dl class="row">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{ $user->id }}</dd>

                <dt class="col-sm-3">Nome</dt>
                <dd class="col-sm-9">{{ $user->name }}</dd>

                <dt class="col-sm-3">E-Mail</dt>
                <dd class="col-sm-9">{{ $user->email }}</dd>

                <dt class="col-sm-3">Cadastrado</dt>
                <dd class="col-sm-9">{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/y H:i') }}</dd>

                <dt class="col-sm-3">Editado</dt>
                <dd class="col-sm-9">{{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/y H:i') }}</dd>
            </dl>
        </div>
    </div>
@endsection

