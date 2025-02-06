<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - MindPlan</title>
    
    <!-- CSS deve vir antes do conteúdo -->
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex flex-col">
    <header>
        <nav class="my-4">
            <ul class="flex flex-row justify-center gap-16 items-center font-medium text-[#46474E]">
                <li><img class="mr-55 cursor-pointer" src="{{ asset('img/logo (2).png') }}" alt=""></li>
                <a href="{{ route('home')}}"><li class="hover:text-[#E47F15] cursor-pointer">Home</li></a>
                <li class="hover:text-[#E47F15] cursor-pointer">Clinicas</li>
                <li class="hover:text-[#E47F15] cursor-pointer">Consultas</li>
                <li class="hover:text-[#E47F15] cursor-pointer">Ajuda</li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
                @php
                    $patient = Auth::user();
                @endphp
                <a href="{{ route('patients.show', $patient->id)}}"><li class="hover:text-[#E47F15] cursor-pointer">Meu perfil</li></a>
                <li><img src="{{ asset('img/velhasm.png') }}" alt=""></li>
                <li class="hover:bg-[#E47F15] cursor-pointer rounded-2xl group"><img
                        class="group-hover:invert group-hover:brightness-0" src="{{ asset('img/hamb.svg') }}" alt=""></li>
            </ul>
        </nav>
    </header>

    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Footer corrigido -->
    <footer class="bg-[#E47F15] text-[#fefefe] py-3 px-3">
        <div class="container mx-auto flex flex-wrap justify-center items-center gap-8">
            
            <!-- Logo -->
            <div class="w-32">
                <img src="{{ asset('img/logo branca.png') }}" alt="Logo MindPlan" class="w-full">
            </div>

            <!-- Divisor -->
            <img src="{{ asset('img/separaçãofoot.png') }}" alt="" class="h-40">

            <!-- Menu -->
            <div class="flex flex-col gap-2 min-w-[200px]">
                <p class="text-3xl font-bold mb-2">Menu</p>
                <a href="{{ route('home')}}" class="hover:text-[#e47f15] hover:bg-white rounded-md px-2 py-1 transition-colors">Home</a>
                <a href="#" class="hover:text-[#e47f15] hover:bg-white rounded-md px-2 py-1 transition-colors">Agendamento</a>
                <a href="#" class="hover:text-[#e47f15] hover:bg-white rounded-md px-2 py-1 transition-colors">Consultas</a>
                <a href="#" class="hover:text-[#e47f15] hover:bg-white rounded-md px-2 py-1 transition-colors">Sobre</a>
            </div>

            <!-- Divisor -->
            <img src="{{ asset('img/separaçãofoot.png') }}" alt="" class="h-40">

            <!-- Contatos -->
            <div class="flex flex-col gap-3 min-w-[250px]">
                <p class="text-3xl font-bold mb-2">Contatos</p>
                
                <div class="flex gap-2">
                    <img src="{{ asset('img/iconlocal.svg') }}" alt="">
                    <p>Ponta Grossa, PR - Brasil</p>
                </div>

                <div class="flex gap-2">
                    <img src="{{ asset('img/telefone.svg') }}" alt="">
                    <p>Tel: (42) 9 9999-9999</p>
                </div>

                <div class="flex gap-2">
                    <img src="{{ asset('img/iconzap.svg') }}" alt="">
                    <p>WhatsApp: (42) 9 9999-9999</p>
                </div>

                <div class="flex gap-2">
                    <img src="{{ asset('img/email.svg') }}" alt="">
                    <p>mindplan@gmail.com</p>
                </div>
                
            </div>

            <!-- Divisor -->
            <img src="{{ asset('img/separaçãofoot.png') }}" alt="" class="h-40">

            <!-- Slogan -->
            <div class="text-center italic font-bold max-w-[300px]">
                <p class="text-lg">Simplificando a conexão entre pacientes e médicos!</p>
            </div>
        </div>
    </footer>
</body>
</html>