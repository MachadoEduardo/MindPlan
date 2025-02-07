@extends('admin.layouts.app')

@section('title', 'Home')
@section('content')
    <div class="bg-[#E47F15] h-100 flex justify-around">
        <div class="my-auto space-y-4">
            <h1 class="font-bold text-white text-[38px]">AGENDE <br> SUA CONSULTA <br> AGORA MESMO</h1>
            <p class="text-white">Rápido, fácil e em apenas alguns cliques!</p>
            <button class="text-[#E47F15] bg-white font-bold h-20 w-50 rounded-full text-[20px] cursor-pointer hover:bg-[#153243] hover:text-[#fefefe]">Agende aqui!</button>
        </div>
        <img class="w-130 h-90 my-auto" src="{{ asset('img/section-2-home.png') }}" alt="Pacientes conversando com médico"></li>
    </div>

    <div class="bg-[##FEFEFE] h-100 flex justify-around">
        <img class="w-130 h-90 my-auto" src="{{ asset('img/section-1-home.png') }}" alt="Pacientes conversando com médico">
        </li>
        <div class="my-auto space-y-4">
            <h1 class="font-semibold text-[#E47F15] text-[28px]">Cadastro de consultas</h1>
            <h1 class="text-black font-semibold text-[28px] text-left">Consultas presenciais e <br> Online de maneira rápida
                e<br> simples.</h1>
            <p class="text-[#46474E]">Atendimento personalizado com opções de <br>consultas presenciais e teleconsultas,
                com<br> cuidado e conveniência para sua saúde</p>
        </div>
    </div>

    <div class="bg-[#E5F5FC] h-100 flex justify-around">
        <h1 class="font-bold my-auto text-[#5E669B] text-[38px]">O QUE VOCÊ <br> DESEJA AGENDAR?</h1>
        <div class="flex gap-35 font-serif">
            <div class="h-70 w-70 my-auto space-y-8 rounded-5xl shadow-md bg-white text-center justify-center flex flex-col items-center">
              <div class="bg-blue-100 w-36 h-36 rounded-full flex items-center justify-center">
                <img class="w-27 h-27" src="{{ asset('img/male-doctor.png') }}">
              </div>
                <p class="flex gap-2 text-[19px]">
                    Consulta presencial<img class="w-6 h-6" src="{{ asset('img/arrow.png') }}"></p>
            </div>
            <div class="h-70 w-70 my-auto space-y-8 rounded-5xl shadow-md bg-white text-center justify-center flex flex-col items-center">
              <div class="bg-orange-100 w-36 h-36 rounded-full flex items-center justify-center">
                <img class="w-20 h-20" src="{{ asset('img/monitor.png') }}">
              </div>
                <p class="flex gap-2 text-[19px]">
                    Teleconsulta <img class="w-6 h-6" src="{{ asset('img/arrow.png') }}">
                </p>
            </div>
        </div>


    </div>
@endsection
