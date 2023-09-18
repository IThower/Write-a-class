@extends('layouts.app')

@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Últimas Salas - WaC</title>
</head>

<body style="font-family: Poppins, sans-serif;">
 
    <section class="py-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fw-bold text-warning mb-2">Seja bem vindo, ADMIN {{ Auth::user()->name }} </p>
                <p>
                    {{ Auth::user()->email }} <br>
                    
                    {{ Auth::user()->role }}
                </p>

                <h2 class="fw-bold">Este é o seu painel dashboard.</h2>
                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                    @endif
            </div>
        </div>
        <div class="container">
            <div>
                <div class="d-flex flex-column" id="content-wrapper">
                    <div id="content">
                        <div class="container-fluid" style="margin-bottom: 50px;">
                            <div class="card" id="TableSorterCard" style="border-style: none;border-radius: 6.5px;">
                                <div class="card-header py-3" style="background-color: #090716;border-radius: 25px;">
                                    <div class="row table-topper align-items-center">
                                        <div class="col-12 col-sm-5 col-md-6 text-start" style="margin: 0px;padding: 5px 15px;">
                                            <p class="m-0 fw-bold" style="color: rgb(255,255,255);">Aulas A Monitorar.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive" style="border-top-style: none;">
                                            <table class="table table-striped dash">
                                                <thead class="thead-dark">
                                                    
                                                    <tr>
                                                        <th class="text-center">ID do Post</th>
                                                        <th class="text-center">ID do User</th>
                                                        <th class="text-center">Nome do usuario</th>
                                                        <th class="text-center">Título do post</th>
                                                        <th class="text-center filter-false sorter-false">Ações</th>
                                                        <th class="text-center filter-false sorter-false">Aprovado?</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center" style="border-top-width: 0px;">
                                                    @foreach ($posts as $post)
                                                    <tr>
                                                        <td>{{ $post->id }}</td>
                                                        <td>{{ $post->user_id }}</td>
                                                        <td>{{ $post->user->name }}</td>
                                                        <td>{{ $post->title }}</td>
                                                        <td class="text-center align-middle d-flex justify-content-center align-items-center">
                                                            <a class="btn btnMaterial" href="{{ route('posts.show', $post->id) }} "style="color: #00bdff;">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                            <form action="{{ route('post.isAproved', $post->id) }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="isAproved" value="{{ $post->isAproved ? '0' : '1' }}">
                                                                <button class="btn btnMaterial" style="color: {{ $post->isAproved ? 'red' : 'green' }}" type="submit">
                                                                    <i class="fa-solid fa-check"></i> {{ $post->isAproved ? 'Desaprovar' : 'Aprovar' }}
                                                                </button>
                                                            </form>
                                                            
                                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                            <button class="btn btnMaterial" type="submit" style="color: red;">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            @if ($post->isAproved == 0)
                                                            <span class="badge bg-danger text-black py-2 px-3">Não</span>
                                                            @elseif ($post->isAproved == 1)
                                                            <span class="badge bg-success text-black py-2 px-3">Sim</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="sidebar">
                <div class="dismiss"></div>
                <div class="text-center brand"><img class="rounded-circle" src="assets/img/profile.jpg" height="50vh" style="margin-bottom: 10px;">
                    <h5>Fabio Carvalho</h5>
                    <p style="opacity: 0.8;">alybaff98@gmail.com</p>
                </div>
                <div class="container">
                    <div class="row gx-0 gy-0 justify-content-center">
                        <div class="col-12 col-md-12 offset-0 align-self-start m-auto" style="text-align: justify;">
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
                            <div class="btn-group-vertical" role="group"><a class="btn btn-dark" role="button" style="--bs-dark: #090716;--bs-dark-rgb: 9,7,22;width: 226px;margin-left: 0px;margin-right: 0px;text-align: justify;padding-right: 20px;padding-left: 20px;margin-top: 5px;border-radius: 12px;" href="new-class.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-5 text-start" style="padding-right: 0px;padding-left: 0px;margin-right: 10px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M464 96h-192l-64-64h-160C21.5 32 0 53.5 0 80v352C0 458.5 21.5 480 48 480h416c26.5 0 48-21.5 48-48v-288C512 117.5 490.5 96 464 96zM336 311.1h-56v56C279.1 381.3 269.3 392 256 392c-13.27 0-23.1-10.74-23.1-23.1V311.1H175.1C162.7 311.1 152 301.3 152 288c0-13.26 10.74-23.1 23.1-23.1h56V207.1C232 194.7 242.7 184 256 184s23.1 10.74 23.1 23.1V264h56C349.3 264 360 274.7 360 288S349.3 311.1 336 311.1z"></path>
                                    </svg>Criar Aula</a><a class="btn btn-dark" role="button" style="--bs-dark: #090716;--bs-dark-rgb: 9,7,22;width: 226px;margin-left: 0px;margin-right: 0px;text-align: justify;padding-right: 20px;padding-left: 20px;margin-top: 10px;border-radius: 12px;margin-bottom: 10px;" href="my-classes.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-5 text-start" style="padding-right: 0px;padding-left: 0px;margin-right: 10px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M512 144v288c0 26.5-21.5 48-48 48h-416C21.5 480 0 458.5 0 432v-352C0 53.5 21.5 32 48 32h160l64 64h192C490.5 96 512 117.5 512 144z"></path>
                                    </svg>Minhas Aulas</a></div>
                        </div>
                        <div class="col-12 col-md-12 m-auto" style="text-align: justify;margin-top: 20px!important;">
                            <h6 class="fw-semibold" style="font-family: Poppins, sans-serif;padding-left: 20px;">Perfil</h6>
                            <div class="btn-group-vertical" role="group"><a class="btn btn-dark" role="button" style="--bs-dark: #090716;--bs-dark-rgb: 9,7,22;width: 226px;margin-left: 0px;margin-right: 0px;text-align: justify;padding-right: 20px;padding-left: 20px;margin-top: 5px;border-radius: 12px;" href="profile.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-5 text-start" style="padding-right: 0px;padding-left: 0px;margin-right: 10px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path>
                                    </svg>Meu Perfil</a><button class="btn btn-dark" type="button" style="--bs-dark: #090716;--bs-dark-rgb: 9,7,22;width: 226px;margin-left: 0px;margin-right: 0px;text-align: justify;padding-right: 20px;padding-left: 20px;margin-top: 10px;border-radius: 12px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-5 text-start" style="padding-right: 0px;padding-left: 0px;margin-right: 10px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M288 256C288 273.7 273.7 288 256 288C238.3 288 224 273.7 224 256V32C224 14.33 238.3 0 256 0C273.7 0 288 14.33 288 32V256zM80 256C80 353.2 158.8 432 256 432C353.2 432 432 353.2 432 256C432 201.6 407.3 152.9 368.5 120.6C354.9 109.3 353 89.13 364.3 75.54C375.6 61.95 395.8 60.1 409.4 71.4C462.2 115.4 496 181.8 496 255.1C496 388.5 388.5 496 256 496C123.5 496 16 388.5 16 255.1C16 181.8 49.75 115.4 102.6 71.4C116.2 60.1 136.4 61.95 147.7 75.54C158.1 89.13 157.1 109.3 143.5 120.6C104.7 152.9 80 201.6 80 256z"></path>
                                    </svg>Desconectar</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
</body>
</html>
@endsection