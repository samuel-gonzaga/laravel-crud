@extends('layouts.admin')

@section('content')

<div class="card mt-4 mb-4 border-light shadow">

    <div class="card-header hstack gap-2">
        Editar Usuário
        <span class="ms-auto d-sm-flex flex-row gap-1">
            <a class="btn btn-info btn-sm" href="{{ route('user.index') }}">Listar</a>
            <a class="btn btn-primary btn-sm" href="{{ route('user.show', ['user' => $user->id]) }}">Visualizar</a>
        </span>

    </div>

    <div class="card-body">
        <x-alert />

        <form class="row g-3" action="{{ route('user-update', ['user' => $user->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="col-md-12">
                <label class="form-label" for="name">Nome</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nome Completo" value="{{ old("name", $user->name) }}">
            </div>

            <div class="col-md-6">
                <label class="form-label" for="email">E-Mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Seu Melhor Email" value="{{ old("email", $user->email) }}">
            </div>

            <div class="col-md-6">
                <label class="form-label" for="password">Senha</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Senha com mínimo de 6 caracteres" value="{{ old("password") }}">
            </div>

            <div class="col-12">
                <button class="btn btn-warning btn-sm" type="submit">Salvar</button>
            </div>
        </form>
    </div>
</div>
@endsection
