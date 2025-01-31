<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@400;500;700&display=swap" rel="stylesheet">
    <title>MindPlan</title>
    @vite('resources/css/app.css')
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;     
      }

      body {
        min-height: 100vh;
        background-color: white;  
        font-family: 'IBM Plex Mono', monospace;
      }

      main{
        background-color: #D16344;
        height: 400px;
        margin-top:100px;
        width: 100%;
        position: fixed;
      }

      #main-header{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        padding: 20px 100px;
        background-color: white;  
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 100;
        font-size: 20px;
      }
      .login{
        background-color: #D16344;
        color: white;
        padding: 10px 22px;
        border-radius: 40px;
      }
      #hero-text{
        height: 100px;
        width: 270px;
        margin: 45px 105px;; 
        font-size: 32px;
        color:white;
        font-weight: bold; 
        font-family: 'Arima', sans-serif;
      }
      #hero-sub-text{
        height: 50px;
        width: 300px;
        margin: 60px 105px;; 
        font-size: 16px;
        color:white;
        font-family: 'Arima', sans-serif;
      }
      #schedule-here{
        background-color: white;
        color:#D16344;
        border-radius: 40px;
        margin: 0px 105px;
        height: 50px;
        width: 190px; 
        font-size: 22px
      }
      #main-image{
        margin: -335px 795px;
        height: 350px;
        width: 500px;
      }
    </style>
</head>
<body>
    <header id="main-header">
        <p>MindPlan</p>

        <nav id="central-content">
            <a href="" style="color: #D16344;">Home</a>
            <a href="">Consultas</a>
            <a href="">Sobre</a>
        </nav>

        <div class="profile">
            <a href="{{ route('register')}}" class="signup" style="color: #D16344;">Cadastre-se</a>
            <a href="{{ route('login')}}"><button class="login">LOGIN</button></a>
        </div>
        
    </header>

    <main>
        <p id="hero-text">AGENDE SUA CONSULTA AGORA MESMO</p>
        <p id="hero-sub-text">Rápido, fácil e em apenas alguns cliques!</p>
        <button id="schedule-here">Agende aqui!</button>
        <img src="https://conquisteresultados.com/wp-content/uploads/2024/03/a-importancia-da-saude-preventiva-nas-empresas-investindo-no-bem-estar-dos-colaboradores.webp" id="main-image" alt="">
    </main>
</body>
</html>
