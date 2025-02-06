<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Paciente</title>
    @vite('resources/css/app.css')
</head>
<div class="max-w-6xl mx-auto p-6 bg-white shadow-lg rounded-lg">
    <!-- Logout Button -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-700">Pacientes</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
           <a href="{{ route('dashboard')}}" class="px-4 py-2 bg-gray-400 text-white rounded-lg hover:bg-gray-600 transition">Voltar</a>
            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">LOGOUT</button>
        </form>
    </div>

    <x-alert />

    <!-- patients Table -->
    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300 rounded-lg shadow-md">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="py-3 px-4 border border-gray-300 text-left">Nome</th>
                    <th class="py-3 px-4 border border-gray-300 text-left">E-mail</th>
                    <th class="py-3 px-4 border border-gray-300 text-left">Data de nascimento</th>
                    <th class="py-3 px-4 border border-gray-300 text-left">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($patients as $patient)
                    <tr class="border border-gray-300 hover:bg-gray-100 transition">
                        <td class="py-2 px-4 border border-gray-300">{{ $patient->first_name }} {{ $patient->last_name}}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $patient->email }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $patient->birthdate }}</td>
                        <td class="py-2 px-4 border border-gray-300 flex space-x-2">
                            <a href="{{ route('patients.edit', $patient->id) }}" class="text-blue-500 hover:underline">Editar</a>
                            <a href="{{ route('patients.show', $patient->id) }}" class="text-blue-500 hover:underline">Detalhes</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center py-4 text-gray-500">Nenhum usuário encontrado</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">{{ $patients->links() }}</div>
</div>