<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">      
        <x-alert/>

        <form action="{{ route('users.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm pt-2 font-medium text-gray-700">Nome:</label>
                <input type="text" id="name" name="name" placeholder="Digite o nome" value="{{ $user->name ?? old('name') }}" class="mt-1 p-2 w-full border rounded-lg focus:ring focus:ring-indigo-300">
            </div>
            
            <div>
                <label for="email" class="block text-sm pt-2 font-medium text-gray-700">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite o e-mail" value="{{ $user->email ?? old('email') }}" class="mt-1 p-2 w-full border rounded-lg focus:ring focus:ring-indigo-300">
            </div>
            
            <div>
                <label for="password" class="block text-sm pt-2 font-medium text-gray-700">Senha:</label>
                <input type="password" id="password" name="password" placeholder="Digite a senha" class="mt-1 p-2 w-full border rounded-lg focus:ring focus:ring-indigo-300">
            </div>
            
            <button type="submit" class="w-full bg-indigo-600 text-white p-2 my-2 rounded-lg hover:bg-indigo-700">Salvar</button>
            <a href="{{ route('users.index') }}" class="w-full block text-center bg-gray-400 text-white p-2 my-2 rounded-lg hover:bg-gray-500">
                Voltar
            </a>
    </div>
</body>
</html>
