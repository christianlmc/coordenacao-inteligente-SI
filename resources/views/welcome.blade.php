<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Bem vindo à UnB Inteligente</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Styles -->
  <style>
    html,
    body {
      color: white;
      font-family: 'Nunito', sans-serif;
      font-weight: 300;
      height: 100vh;
      margin: 0;
      z-index: 1;
      position: relative;
      overflow: hidden;
    }

    .bg-image {
      object-fit: cover;
      object-position: bottom center;
      position: absolute;
      height: 100vh;
      width: 100%;
      filter: blur(3px) brightness(0.4) drop-shadow(0px 0px 3px black);
    }

    .full-height {
      height: 100vh;
    }

    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .position-ref {
      position: relative;
    }

    .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
    }

    .content {
      text-align: center;
    }

    .title {
      font-size: 84px;
    }

    .links>a {
      color: white;
      padding: 0 25px;
      font-size: 13px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }

    .m-b-md {
      margin-bottom: 30px;
    }
  </style>
</head>

<body>
  <img class="bg-image" src="{{asset('unb.jpg')}}"></img>
  <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
      @auth
      <a href="{{ url('/home') }}">Home</a>
      @else
      <a href="{{ route('login') }}">Login</a>

      @if (Route::has('register'))
      <a href="{{ route('register') }}">Register</a>
      @endif
      @endauth
    </div>
    @endif

    <div class="content">
      <div class="title m-b-md">
        UnB Inteligente
      </div>

      <h3>Acesse nosso site</h3>
      <div class="links">
        <a href="{{ route('login') }}">Fazer Login</a>
        <a href="{{ route('register') }}">Não possui conta? Registre-se agora</a>
        <a href="https://aprender.unb.br/">Aprender UnB</a>
      </div>

      <h3>Links Externos</h3>
      <div class="links">
        <a href="https://unb.br/">Site da UnB</a>
        <a href="https://matriculaweb.unb.br/">MatriculaWeb</a>
        <a href="https://aprender.unb.br/">Aprender UnB</a>
      </div>
    </div>
  </div>
</body>

</html>
