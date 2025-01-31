@extends('admin.layouts.app')

@section('title', 'Registrar')
@section('content')
    <h1>Novo usuário</h1>

    <form action="{{ route('users.store')}}" method="POST">
        @include('admin.users.partials.form')
    </form>
</html>
@endsection