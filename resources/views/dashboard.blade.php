<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md">
            <div class="p-6">
                <h2 class="text-2xl font-semibold text-gray-800">Admin</h2>
            </div>
            <nav class="mt-4">
                <a href="{{ route('dashboard') }}" class="block py-2 px-6 text-gray-700 hover:bg-gray-200">Dashboard</a>
                <a href="{{ route('users.index') }}" class="block py-2 px-6 text-gray-700 hover:bg-gray-200">Usuários</a>
                <a href="{{ route('patients.index') }}" class="block py-2 px-6 text-gray-700 hover:bg-gray-200">Pacientes</a>
                <form method="POST" action="{{ route('logout') }}" class="mt-6">
                    @csrf
                    <button type="submit" class="w-full text-left px-6 py-2 text-red-600 hover:bg-red-100">Sair</button>
                </form>
            </nav>
        </aside>

        <!-- Conteúdo Principal -->
        <main class="flex-1 p-6">
            <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold text-gray-700">Usuários Cadastrados</h2>
                    <p class="text-2xl font-bold text-gray-900">{{ $totalUsers ?? '0' }}</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold text-gray-700">Pacientes Registrados</h2>
                    <p class="text-2xl font-bold text-gray-900">{{ $totalPatients ?? '0' }}</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold text-gray-700">Último Cadastro</h2>
                    <p class="text-gray-900">{{ $lastUser->name ?? 'Nenhum usuário' }}</p>
                </div>
            </div>

            <!-- Tabela Resumo -->
            <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Últimos Usuários</h2>
                <table class="w-full border-collapse border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2 text-left">Nome</th>
                            <th class="border p-2 text-left">Email</th>
                            <th class="border p-2 text-left">Criado em</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($latestUsers ?? [] as $user)
                            <tr class="border">
                                <td class="border p-2">{{ $user->name }}</td>
                                <td class="border p-2">{{ $user->email }}</td>
                                <td class="border p-2">{{ $user->created_at->format('d/m/Y') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center p-4">Nenhum usuário recente.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>