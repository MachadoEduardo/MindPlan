@extends('admin.layouts.app')

@section('title', 'Detalhes')
@section('content')
    <h1>Detalhes do paciente - {{ $patient->id }}</h1>

    <ul>
        <li>CPF: {{ $patient->des_regis }}</li>
        <li>Nome: {{ $patient->name }} {{$patient->last_name}}</li>
        <li>E-mail: {{ $patient->email }}</li>
        <li>Gênero: {{ $patient->gender }}</li>
        <li>Nacionalidade: {{ $patient->nacionality }}</li>
        <li>Data de nascimento: {{ $patient->birthdate }}</li>
        <li>Tipo sanguíneo: {{ $patient->blood_type }}</li>
    </ul>
    <x-alert/>

    @can('is_admin')
    <form action="{{route('patients.destroy', $patient->id)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Deletar</button>
    </form>
    @endcan
</html>
@endsection