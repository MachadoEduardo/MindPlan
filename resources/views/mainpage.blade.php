@extends('admin.layouts.app')

@section('title', 'Editar')
@section('logout')
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
@endsection

@section('health-topics')
    <li class="hover:text-[#E47F15] cursor-pointer">Clinicas</li>
    <li class="hover:text-[#E47F15] cursor-pointer">Consultas</li>
@endsection

@section('profile-details')
    @php
    $patient = Auth::user();
    @endphp
    <a href="{{ route('patients.show', $patient->id)}}"><li class="hover:text-[#E47F15] cursor-pointer">Meu perfil</li></a>
    <li><img src="{{ asset('img/velhasm.png') }}" alt=""></li>
    <li class="hover:bg-[#E47F15] cursor-pointer rounded-2xl group"><img
        class="group-hover:invert group-hover:brightness-0" src="{{ asset('img/hamb.svg') }}" alt=""></li>
@endsection