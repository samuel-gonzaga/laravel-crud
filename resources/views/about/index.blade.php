@extends('layouts.admin')

@section('content')

    <div class="container d-flex justify-content-center">
        <div class="card mt-4 mb-4 border-light shadow" style="max-width: 800px; width: 100%;">
            <div class="text-center card-body">
                <h1>Sobre o projeto</h1>
                <p>Este é o meu primeiro projeto utilizando Laravel, desenvolvido com base no tutorial do <a class="link-info" href="https://www.youtube.com/watch?v=ZQJdYM1m4q0&t">Celke</a> no YouTube. O desenvolvimento começou em 23 de fevereiro de 2025, e sua parte técnica foi concluída em 2 de março de 2025.</p>

                <h2 class="mt-5">Funcionalidades</h2>
                <p>O sistema conta com diversas funcionalidades essenciais para gestão e organização, incluindo:</p>
                <span class="fw-bold">Gerenciamento de Clientes</span>
                <ul class="list-group">
                    <li class="list-group-item">Registro</li>
                    <li class="list-group-item">Edição </li>
                    <li class="list-group-item">Exclusão</li>
                </ul>

                <h2 class="mt-5">Tecnologias Utilizadas</h2>
                <ul class="list-group">
                    <li class="list-group-item">Backend: Laravel 11 (PHP)</li>
                    <li class="list-group-item">Banco de Dados: MySQL</li>
                    <li class="list-group-item">Frontend: Bootstrap</li>
                    <li class="list-group-item">Gerenciamento de Dependências: Composer e NPM</li>
                </ul>

                <h2 class="mt-5">Público-Alvo</h2>
                <p>Este sistema foi desenvolvido para pequenos empreendedores e autônomos que precisam de uma solução simples e eficiente para gerenciar seus funcionários. O foco inicial é atender qualquer tipo de profissional que precise gerenciar seus funcionários, oferecendo ferramentas que auxiliam na organização e controle do negócio.</p>

                <h2 class="mt-5">Possíveis Atualizações</h2>
                <ul class="list-group">
                    <li class="list-group-item">Mais informações na adição de usuários (como foto, idade, cargo...)</li>
                    <li class="list-group-item">Dashboard mais avançado com métricas detalhadas.</li>
                    <li class="list-group-item">Otimização do design responsivo para melhor experiência em dispositivos móveis.</li>
                </ul>

                <h2 class="mt-5">Considerações Finais</h2>
                <p class="mb-5">Esse projeto foi uma grande oportunidade de aprendizado, permitindo que eu aprofundasse meus conhecimentos em Laravel e no desenvolvimento web em geral. A experiência adquirida aqui será fundamental para meus próximos projetos, e estou animado para continuar evoluindo.</p>
            </div>
        </div>
    </div>

@endsection
