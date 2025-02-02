@extends('admin.layouts.app')

@section('title', 'Detalhes')
@section('content')
    <div class="border-[#E47F15] text-[#46474E] border-2 my-8 mx-17 rounded-2xl">
        <div class="flex justify-center items-center gap-[38.042vw] my-8">
            <div class="flex items-center gap-7">
                <img src="{{ asset('img/velha.png') }}" alt="">
                <div class="font-medium">
                    <p class="text-xl">{{ $patient->first_name }} {{ $patient->last_name }}</p>
                    <p>CPF: {{ $patient->des_regis }}</p>
                    <p>Data de aniversário: {{ $patient->birthdate }}</p>
                    <p>Gênero: {{ $patient->gender }}</p>
                    <p>Nacionalidade: {{ $patient->nacionality }}</p>
                    <p>Tipo sanguíneo: {{ $patient->blood_type }}</p>
                    <p>E-mail: {{ $patient->email }}</p>
                </div>
            </div>

            <div class="mb-25 cursor-pointer group">
                <img class="w-8 h-8 group-hover:hidden" src="{{ asset('img/lapis.svg') }}" alt="">
                <a href="{{ route('patients.edit', $patient->id) }}">
                    <img class="w-8 h-8 hidden group-hover:block" src="{{ asset('img/lapislaranja.svg') }}" alt="">
                </a>
            </div>
        </div>

        <div class="flex justify-center items-center">
            <img src="{{ asset('img/separacao.png') }}" alt="">
        </div>

        <div class="flex justify-center items-center gap-26 py-8">
            <p class="font-medium">Nota do usuário: 4/5</p>
            <img src="{{ asset('img/star.png') }}" alt="">
            <button
                class="flex items-center gap-2 border-[#E47F15] border-2 rounded-2xl py-2 px-5 hover:bg-[#E47F15] hover:text-white cursor-pointer">
                Ver Avaliações</button>
        </div>
    </div>

    <div class="bg-[#E47F15] text-[#46474E] my-8 mx-auto flex justify-center items-center ">
        <div class="my-9 mx-17 rounded-2xl bg-white">
            <div class="my-9">
                <p class="ml-20 font-medium text-xl">Mini-Agenda</p>

                <div class="ml-9">
                    <img src="{{ asset('img/divisãoagend.svg') }}" alt="">
                </div>

                <div class="flex justify-center items-center mt-8 gap-8">
                    <img src="{{ asset('img/goodhealth.png') }}" alt="">

                    <div class="">
                        <p class="font-medium text-3xl pb-4">GoodHealth</p>
                        <p class="text-xl">Data Marcada: 18/01/25</p>
                        <p class="text-xl">Horario: 15h</p>
                        <p class="text-xl">Fisioterapia</p>
                    </div>

                    <div
                        class="ml-96 text-l bg-[#5E669B] px-8 py-15 rounded-3xl text-white cursor-pointer border-[#5E669B] border-2 hover:bg-[#eceef8] hover:text-[#5E669B]">
                        <button class="">Acessar agenda</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center gap-64 mb-6 text-[#46474E]">
        <div class="flex flex-col gap-8 font-medium">
            <div class="flex justify-start items-center gap-2 cursor-pointer hover:text-[#e47f15] group">
                <img class="group-hover:hidden" src="{{ asset('img/config.svg') }}" alt="">
                <img class="hidden group-hover:block" src="{{ asset('img/configlaranja.svg') }}" alt="">
                <p>Configurações</p>
            </div>

            <div class="flex justify-start items-center gap-2 cursor-pointer hover:text-[#e47f15] group">
                <img class="group-hover:hidden" src="{{ asset('img/lock.svg') }}" alt="">
                <img class="hidden group-hover:block" src="{{ asset('img/locklaranja.svg') }}" alt="">
                <p>Privacidade</p>
            </div>

            <div class="flex justify-start items-center gap-2 cursor-pointer hover:text-[#e47f15] group">
                <img class="group-hover:hidden" src="{{ asset('img/terms.svg') }}" alt="">
                <img class="hidden group-hover:block" src="{{ asset('img/termslaranja.svg') }}" alt="">
                <p>Termos de uso</p>
            </div>

            <div class="flex justify-start items-center gap-2 cursor-pointer hover:text-[#e47f15] group">
                <img class="group-hover:hidden" src="{{ asset('img/infoconta.svg') }}" alt="">
                <img class="hidden group-hover:block" src="{{ asset('img/infocontalaranja.svg') }}" alt="">
                <p> Informações da conta</p>
            </div>

            <div class="flex justify-start items-center gap-2 cursor-pointer hover:text-[#e47f15] group">
                <img class="group-hover:hidden" src="{{ asset('img/about.svg') }}" alt="">
                <img class="hidden group-hover:block" src="{{ asset('img/aboutlaranja.svg') }}" alt="">
                <p>Sobre</p>
            </div>
        </div>

        <div class="h-1">
            <img src="./img/divisaotitle.png" alt="">
        </div>

        <div class="flex flex-col gap-3 font-bold italic items-center">
            <p>Compartilhe seu perfil com o código abaixo!</p>
            <img class="h-62 w-62" src="{{ asset('img/qr.png') }}" alt="">
        </div>
    </div>

    </html>
@endsection
