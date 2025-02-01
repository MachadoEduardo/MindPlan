@extends('admin.layouts.app')

@section('title', 'Editar')
@section('content')
    <h1>Editar o usuário - {{ $patient->first_name }} {{ $patient->last_name}}</h1>

    <form action="{{ route('patients.update', $patient->id)}}" method="POST">
        @method('PUT')
        @include('admin.patients.partials.form')
    </form>
</html>
@endsection