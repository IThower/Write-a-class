<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bs-theme-overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Forms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Accordion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/TeamMember.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Team.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Testimonials-images.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- cdnjs -->
    <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/suneditor@2.45.0/src/lang/pt_br.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark navbar-expand-md sticky-top text-center py-3" id="mainNav" style="--bs-dark: #090716;--bs-dark-rgb: 9,7,22;--bs-body-bg: #090716;background: var(--bs-dark);">
            <div class="overlay"></div>
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="/"><span><a href="{{ route('home') }}"><img src= {{ asset('images/logo2.png') }} height="50vh"></a></span></a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse text-center" id="navcol-1">
                    <ul class="navbar-nav text-center me-auto">
                        <li class="nav-item"><a class="nav-link text-center active" href={{ route('home') }}>Home</a></li>
                        <li class="nav-item"><a class="nav-link text-center" href={{ route('aboutus')}}>Sobre Nós</a></li>
                        <li class="nav-item"><a class="nav-link text-center" href="#">Salas</a></li>
                        <li class="nav-item"><a class="nav-link text-center" href="{{ route('contato') }}">Contato</a></li>
                        <li class="nav-item"></li>
                        <div class="dropdown">
                        </ul>
                    <ul class="navbar-nav text-center" style="list-style: none">
                    @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="btn btn-warning shadow mx-3" role="button" href="{{ route('login')}}" style="color: var(--bs-dark);background: var(--bs-yellow);">Login</a>
                        </li>
                                @endif
                    @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-warning shadow mx-3" role="button" href="{{ route('register')}}" style="color: var(--bs-dark);background: var(--bs-yellow);">Registre-se</a>
                                </li>
                                @endif
                                @else
                            </ul>

                    <li class="nav-item dropdown me-5" style="list-style: none">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>
                                {{ Auth::user()->name }} - 
                                @if(Auth::user()->role == 0)
                                Aluno
                                @elseif(Auth::user()->role == 1)
                                Professor
                                @elseif(Auth::user()->role == 2)
                                <span style="color: red;">Admin</span></span>
                                @endif
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li class="nav-item dropdown">
                            <a class="dropdown-item" href="{{ route('perfil') }}">Perfil</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                </form>
                            </li> 
                            @if(Auth::check())
                            @if(Auth::user()->role == 2)
                            <li class="nav-item dropdown" style="background-color: rgba(218, 27, 27, 0.774)">
                                <a class="dropdown-item" href="{{ route('dashboard') }}">-----PAINEL DE ADMIN-----</a>
                            </li>
                            @endif
                            @endif  
                        </li>
                    </ul>
                </div>
                @if(Auth::check() && (Auth::user()->role == 1 || Auth::user()->role == 2))
                <a class="btn btn-warning shadow btn-customized open-menu text-center" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-4">
                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"></path>
                </svg>
                </a>
            </div>

                    <div class="sidebar">
                        <div class="dismiss"></div>
                        <div class="text-center brand"><img class="rounded-circle" src="{{ asset('images/profile.jpg') }}" height="50vh" style="margin-bottom: 10px;">
                            <h5>{{ auth::user()->name }} </h5>
                            <p style="opacity: 0.8;">{{ auth::user()->email }}</p>
                        </div>
                        <div class="container">
                            <div class="row gx-0 gy-0 justify-content-center">
                                <div class="col-12 col-md-12 offset-0 align-self-start m-auto justify-content-center" style="text-align: justify;">
                                    @if(Auth::check())
                                    @if(Auth::user()->role == 1)
                                        <p class="text-center">Bem vindo - Professor</p>
                                    @elseif(Auth::user()->role == 2)
                                        <p class="text-center" style="color: red;">Bem vindo - Admin</p>
                                    @else
                                        <p>N/A</p>
                                    @endif
                                @else
                                    <span style="color: red;">N/A</span>
                                @endif
                                    <h6 class="fw-semibold" style="font-family: Poppins, sans-serif;padding-left: 20px;">Aprendizado</h6>
                                    <div class="btn-group-vertical" role="group"><a class="btn btn-dark" role="button" style="--bs-dark: #090716;--bs-dark-rgb: 9,7,22;width: 226px;margin-left: 0px;margin-right: 0px;text-align: justify;padding-right: 20px;padding-left: 20px;margin-top: 5px;border-radius: 12px;color: rgba(255,255,255,0.8);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-5 text-start" style="padding-right: 0px;padding-left: 0px;margin-right: 10px;">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M448 336v-288C448 21.49 426.5 0 400 0H352v191.1c0 13.41-15.52 20.88-25.1 12.49L272 160L217.1 204.5C207.5 212.8 192 205.4 192 191.1V0H96C42.98 0 0 42.98 0 96v320c0 53.02 42.98 96 96 96h320c17.67 0 32-14.33 32-32c0-11.72-6.607-21.52-16-27.1v-81.36C441.8 362.8 448 350.2 448 336zM384 448H96c-17.67 0-32-14.33-32-32c0-17.67 14.33-32 32-32h288V448z"></path>
                                            </svg>Salas de Aula</a><a class="btn btn-dark" role="button" style="--bs-dark: #090716;--bs-dark-rgb: 9,7,22;width: 226px;margin-left: 0px;margin-right: 0px;text-align: justify;padding-right: 20px;padding-left: 20px;margin-top: 10px;margin-bottom: 10px;border-radius: 12px;" href="last-classes.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-5 text-start" style="padding-right: 0px;padding-left: 0px;margin-right: 10px;">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M459.5 71.41l-171.5 142.9v83.45l171.5 142.9C480.1 457.7 512 443.3 512 415.1V96.03C512 68.66 480.1 54.28 459.5 71.41zM203.5 71.41L11.44 231.4c-15.25 12.87-15.25 36.37 0 49.24l192 159.1c20.63 17.12 52.51 2.749 52.51-24.62v-319.9C255.1 68.66 224.1 54.28 203.5 71.41z"></path>
                                            </svg>Últimas Aulas</a></div>
                                </div>
                                <div class="col-12 col-md-12 m-auto" style="text-align: justify;margin-top: 20px!important;">
                                    <h6 class="fw-semibold" style="font-family: Poppins, sans-serif;padding-left: 20px;">Professor</h6>
                                    <div class="btn-group-vertical" role="group"><a class="btn btn-dark" role="button" style="--bs-dark: #090716;--bs-dark-rgb: 9,7,22;width: 226px;margin-left: 0px;margin-right: 0px;text-align: justify;padding-right: 20px;padding-left: 20px;margin-top: 5px;border-radius: 12px;" href="{{ route('newClass') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-5 text-start" style="padding-right: 0px;padding-left: 0px;margin-right: 10px;">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M464 96h-192l-64-64h-160C21.5 32 0 53.5 0 80v352C0 458.5 21.5 480 48 480h416c26.5 0 48-21.5 48-48v-288C512 117.5 490.5 96 464 96zM336 311.1h-56v56C279.1 381.3 269.3 392 256 392c-13.27 0-23.1-10.74-23.1-23.1V311.1H175.1C162.7 311.1 152 301.3 152 288c0-13.26 10.74-23.1 23.1-23.1h56V207.1C232 194.7 242.7 184 256 184s23.1 10.74 23.1 23.1V264h56C349.3 264 360 274.7 360 288S349.3 311.1 336 311.1z"></path>
                                            </svg>Criar Aula</a><a class="btn btn-dark" role="button" style="--bs-dark: #090716;--bs-dark-rgb: 9,7,22;width: 226px;margin-left: 0px;margin-right: 0px;text-align: justify;padding-right: 20px;padding-left: 20px;margin-top: 10px;border-radius: 12px;margin-bottom: 10px;" href="my-classes.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-5 text-start" style="padding-right: 0px;padding-left: 0px;margin-right: 10px;">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M512 144v288c0 26.5-21.5 48-48 48h-416C21.5 480 0 458.5 0 432v-352C0 53.5 21.5 32 48 32h160l64 64h192C490.5 96 512 117.5 512 144z"></path>
                                            </svg>Minhas Aulas</a></div>
                                </div>
                                <div class="col-12 col-md-12 m-auto" style="text-align: justify;margin-top: 20px!important;">
                                    <h6 class="fw-semibold" style="font-family: Poppins, sans-serif;padding-left: 20px;">Perfil</h6>
                                    <div class="btn-group-vertical" role="group"><a class="btn btn-dark" role="button" style="--bs-dark: #090716;--bs-dark-rgb: 9,7,22;width: 226px;margin-left: 0px;margin-right: 0px;text-align: justify;padding-right: 20px;padding-left: 20px;margin-top: 5px;border-radius: 12px;" href="{{ route('perfil') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-5 text-start" style="padding-right: 0px;padding-left: 0px;margin-right: 10px;">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path>
                                            </svg>Meu Perfil</a>


                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn btn-dark" type="button" style="--bs-dark: #090716;--bs-dark-rgb: 9,7,22;width: 226px;margin-left: 0px;margin-right: 0px;text-align: justify;padding-right: 20px;padding-left: 20px;margin-top: 10px;border-radius: 12px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-5 text-start" style="padding-right: 0px;padding-left: 0px;margin-right: 10px;">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M288 256C288 273.7 273.7 288 256 288C238.3 288 224 273.7 224 256V32C224 14.33 238.3 0 256 0C273.7 0 288 14.33 288 32V256zM80 256C80 353.2 158.8 432 256 432C353.2 432 432 353.2 432 256C432 201.6 407.3 152.9 368.5 120.6C354.9 109.3 353 89.13 364.3 75.54C375.6 61.95 395.8 60.1 409.4 71.4C462.2 115.4 496 181.8 496 255.1C496 388.5 388.5 496 256 496C123.5 496 16 388.5 16 255.1C16 181.8 49.75 115.4 102.6 71.4C116.2 60.1 136.4 61.95 147.7 75.54C158.1 89.13 157.1 109.3 143.5 120.6C104.7 152.9 80 201.6 80 256z"></path>
                                            </svg>
                                                {{ __('DESCONECTAR') }} </button></a>
                                            </a></button>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form></div>
                                
                                @endif
                    @endguest
        </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="bg-dark" style="--bs-dark: #090716;--bs-dark-rgb: 9,7,22;">
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
                        <h3 class="fs-6 fw-bold">Página Inicial</h3>
                        <ul class="list-unstyled">
                            <li><a href="index.html">Alunos</a></li>
                            <li><a href="index-3.html">Professores</a></li>
                            <li><a href="register.html">Registrar</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
                        <h3 class="fs-6 fw-bold">Write a Class</h3>
                        <ul class="list-unstyled">
                            <li><a href="about-us.html">Sobre Nós</a></li>
                            <li><a href="#">Nossas Salas</a></li>
                            <li><a href="contacts.html">Contato</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
                        <h3 class="fs-6 fw-bold">Plataforma</h3>
                        <ul class="list-unstyled">
                            <li><a href="new-class.html">Criar uma Sala</a></li>
                            <li><a href="#">Salas de Aula</a></li>
                            <li><a href="last-classes.html">Últimas Aulas</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last">
                        <div class="fw-bold d-flex align-items-center mb-2"><img class="rounded-circle" src="{{ asset('images/logo.png') }}" height="25px"><span>&nbsp;Write a Class</span></div>
                        <p class="text-muted">Plataforma de Ensino e de divulgação de conteúdo educativo diverso e amplo.&nbsp;</p>
                    </div>
                </div>
                <hr>
                <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                    <p class="mb-0">Copyright © 2023 Write a Class</p>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                            </svg></li>
                        <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                            </svg></li>
                        <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                            </svg></li>
                    </ul>
                </div>
            </div>
        </footer>

    </div>
        <!-- Scripts -->
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/Suneditor-WYSIWYG.js') }}"></script>
        <script src="{{ asset('js/bold-and-dark.js') }}"></script>
        <script src="{{ asset('js/Sidebar.js') }}"></script>
        <script src="{{ asset('js/navegaNav.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
