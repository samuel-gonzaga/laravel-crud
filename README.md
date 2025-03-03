# Gerenciamento de usuários

**Este projeto é um sistema de gerenciamento de usuários, desenvolvido com Laravel, que permite aos usuários criar, editar, excluir e visualizar usuários de forma eficiente e organizada.**

## Tecnologias Utilizadas

- **Laravel 11**
- **PHP 8.x**
- **MySQL**
- **Composer** (para gerenciar dependências)

## Instalação

Siga os passos abaixo para rodar o projeto localmente.

1. **Clone o repositório**
   ```bash
   git clone https://github.com/samuel-gonzaga/laravel-crud.git
   cd laravel-crud
   ```

2. **Instale as dependências** Certifique-se de ter o Composer instalado e execute:
   ```bash
   composer install
   ```

3. **Configuração do ambiente** Crie um arquivo `.env` a partir do arquivo `.env.example`:
   ```bash
   cp .env.example .env
   ```

4. **Gere a chave de aplicação**
   ```bash
   php artisan key:generate
   ```

5. **Configuração do banco de dados** Certifique-se de que o banco de dados está configurado corretamente no arquivo .env. Depois, rode as migrations:
   ```bash
   php artisan migrate
   ```

6. **Suba o servidor local** Execute o servidor local:
   ```bash
    php artisan serve
   ```

O projeto estará disponível em `http://127.0.0.1:8000`.

## Funcionalidades
- CRUD de Tarefas: Criar, Editar, Excluir e Visualizar tarefas.
- Autenticação de usuários: Registro, login e recuperação de senha.
- Interface intuitiva: Sistema fácil de navegar e responsivo.
- Notificações: Notificações em tempo real para eventos importantes.

## Capturas de Tela
![image](https://github.com/user-attachments/assets/7e4f613b-b014-449c-8880-5f543a54e53d)
![image](https://github.com/user-attachments/assets/15cf7438-8bdb-450f-97a2-1849669762b7)
![image](https://github.com/user-attachments/assets/a33ab79e-7c6e-427b-b413-e00543f3d58e)
![image](https://github.com/user-attachments/assets/6ee74842-7556-4db1-b8f1-453092e34834)
![image](https://github.com/user-attachments/assets/d3c81995-b7f0-4961-8117-10461608bc18)

## Contribuindo
Se você deseja contribuir para o projeto, siga os passos abaixo:
1. Faça um fork deste repositório.
2. Crie uma branch para sua modificação (`git checkout -b minha-modificacao`).
3. Faça suas mudanças e commit (`git commit -am 'Adiciona nova funcionalidade'`).
4. Envie para a branch principal (`git push origin minha-modificacao`).
5. Abra um pull request.
