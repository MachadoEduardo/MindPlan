<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    @vite('resources/css/app.css')
</head>
<h1 class="text-2xl font-bold text-center text-gray-700 mb-4 absolute top-40">Editar Usuário</h1>
    <form action="{{ route('users.update', $user->id)}}" method="POST">
        @method('PUT')
        @include('admin.users.partials.form')
    </form>
</html>