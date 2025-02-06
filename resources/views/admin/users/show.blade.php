<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Usuário</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-lg bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-xl font-bold">Detalhes do usuário - {{ $user->name }}</h1>

    <ul>
        <li class="block text-lg pt-2 font-medium text-gray-700">Nome: {{ $user->name }}</li>
        <li class="block text-lg pt-2 font-medium text-gray-700">E-mail: {{ $user->email }}</li>
        <li class="block text-lg pt-2 font-medium text-gray-700">Criado em: {{ $user->created_at }}</li>
        <li class="block text-lg pt-2 font-medium text-gray-700">Atualizado em: {{ $user->updated_at }}</li>
    </ul>
    <a href="{{ route('users.index') }}" class="w-full block text-center bg-gray-400 text-white p-2 my-2 rounded-lg hover:bg-gray-500">
        Voltar
    </a>
    <x-alert/>

    @can('is_admin')
    <form action="{{route('users.destroy', $user->id)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="w-full block text-center bg-red-400 text-white p-2 my-2 rounded-lg hover:bg-red-500">Deletar</button>
    </form>
    @endcan
    </div>
</html>
</body>

