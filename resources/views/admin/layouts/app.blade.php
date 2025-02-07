<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - MindPlan</title>
    
    <!-- CSS deve vir antes do conteúdo -->
    @vite('resources/css/app.css')
    <style>
        html, body, label {
        font-family: 'Roboto', sans-serif;
    }
    </style>
</head>

<body class="min-h-screen flex flex-col">
    <header class="w-full max-w-9/10 mx-auto  top-0">
        <nav class="my-4">
            <ul class="flex flex-row justify-between items-center font-medium text-[#46474E]">
                <li><img class=" cursor-pointer" src="{{ asset('img/logo (2).png') }}" alt=""></li>
                <div class="flex gap-9 font-semibold">
                    <a href="{{ route('home')}}"><li class="hover:text-[#E47F15] cursor-pointer">Home</li></a>
                    @yield('health-topics')
                    <a href="{{ route('home')}}"><li class="hover:text-[#E47F15] cursor-pointer">Sobre</li></a>
                    @yield('logout')
                    <a href="{{ route('register')}}" class="signup w-30 h-7 rounded-lg content-center px-3 bg-orange-400 text-white hover:bg-orange-500">Cadastre-se</a>
                    <a href="{{ route('login')}}"><button class="login w-20 h-7 rounded-lg cursor-pointer bg-[#b3e4f9] text-white hover:bg-[#82d3f6]">Entrar</button></a>
                </div>
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
            <img src="{{ asset('img/separaçãofoot.png') }}" alt="" class="h-max">

            <!-- Menu -->
            <div class="flex flex-col gap-2 min-w-[200px]">
                <p class="text-3xl font-bold mb-2">Menu</p>
                <a href="{{ route('home')}}" class="hover:text-[#e47f15] hover:bg-white rounded-md px-2 py-1 transition-colors">Home</a>
                <a href="#" class="hover:text-[#e47f15] hover:bg-white rounded-md px-2 py-1 transition-colors">Agendamento</a>
                <a href="#" class="hover:text-[#e47f15] hover:bg-white rounded-md px-2 py-1 transition-colors">Consultas</a>
                <a href="#" class="hover:text-[#e47f15] hover:bg-white rounded-md px-2 py-1 transition-colors">Sobre</a>
            </div>

            <!-- Divisor -->
            <img src="{{ asset('img/separaçãofoot.png') }}" alt="" class="h-max">

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
            <img src="{{ asset('img/separaçãofoot.png') }}" alt="" class="h-max">

            <!-- Slogan -->
            <div class="text-center italic font-bold max-w-[300px] ">
                <p class="text-lg text-left">Simplificando a conexão entre pacientes e médicos!</p>
            </div>
        </div>
    </footer>
</body>
</html>