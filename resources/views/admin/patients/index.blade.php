@extends('admin.layouts.app')

@section('title', 'Listar')
@section('content')
    <h1>Pacientes</h1>

    <a href="{{ route('patients.create')}}"> Adicionar novo registro</a>

    <x-alert/>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Gênero</th>
                <th>Nacionalidade</th>
                <th>Tipo sanguíneo</th>
                <th>Data de nascimento</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($patients as $patient)
            <tr>
                <td>{{ $patient->first_name}}</td>
                <td>{{ $patient->last_name}}</td>
                <td>{{ $patient->gender}}</td>
                <td>{{ $patient->nacionality}}</td>
                <td>{{ $patient->blood_type}}</td>
                <td>{{ $patient->birthdate}}</td>
                <td>{{ $patient->email}}</td>
                <td>
                    <a href="{{ route('patients.edit', $patient->id)}}">Editar</a>
                    <a href="{{ route('patients.show', $patient->id)}}">Detalhes</a>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="100">Nenhum usuário no banco de dados</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $patients->links()}}
@endsection