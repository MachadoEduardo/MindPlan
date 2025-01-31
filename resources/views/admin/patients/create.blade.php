@extends('admin.layouts.app')

@section('title', 'Registrar')
@section('content')
    <h1>Novo paciente</h1>

    <form action="{{ route('patients.store')}}" method="POST">
        @include('admin.patients.partials.form')
    </form>
</html>
@endsection