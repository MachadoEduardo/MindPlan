@extends('admin.layouts.app')

@section('title', 'Detalhes')
@section('content')
    <h1>Detalhes do usuário - {{ $user->id }}</h1>

    <ul>
        <li>Nome: {{ $user->name }}</li>
        <li>E-mail: {{ $user->email }}</li>
    </ul>
    <x-alert/>

    @can('is_admin')
    <form action="{{route('users.destroy', $user->id)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Deletar</button>
    </form>
    @endcan
</html>
@endsection