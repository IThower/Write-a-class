@extends('layouts.app')

@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Perfil - WaC</title>

</head>

<body style="font-family: Poppins, sans-serif;">
 
    <div class="overlay"></div>
    <section class="py-5">
        <div class="container">
            <div class="main-body">
                <nav aria-label="breadcrumb" class="main-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-3.html"><span>Home</span></a></li>
                        <li class="breadcrumb-item"><a><span>Conectado</span></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Perfil de Usuário</span></li>
                    </ol>
                </nav>
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif
                                <div class="text-center d-flex flex-column align-items-center">
                                    <figure class="text-center">
                                    <img class="rounded-circle" src= {{ $user->image ? asset($user->image) : asset('images/default-photo.png') }} alt="Imagem de perfil" style="max-width: 150px; max-height: 150px; width: 150px; height: 150px; object-fit: cover;">
                                    </figure>
                                    <div class="mt-3">
                                        <h4>{{  Auth::user()->name ?? 'N/A' }}</h4>
                                        <p class="text-primary mb-1">{{  Auth::user()->specialty ?? 'N/A' }}</p>
                                        <p class="text-muted font-size-sm">{{  Auth::user()->address ?? 'N/A' }}</p><button class="btn btn-warning">Ver Aulas</button><button class="btn btn-outline-primary">Mensagem</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0">Twitter</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary"><span>{{ $user->social_links['twitter'] ?? 'N/A' }}</span></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0">Linkedin</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary"><span>{{ $user->social_links['linkedin'] ?? 'N/A' }}</span></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0">Instagram</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary"><span>{{ $user->social_links['instagram'] ?? 'N/A' }}</span></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0">Website</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary"><span>{{ $user->social_links['website'] ?? 'N/A' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nome: </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary"><span>{{  Auth::user()->name ?? 'N/A' }}</span></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">E-mail</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary"><span> {{  Auth::user()->email ?? 'N/A' }} </span></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-2">Role: </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <h6 class="mb-3" style="margin-left: -5px;">
                                            @if(Auth::check())
                                                @if(Auth::user()->role == 0)
                                                    <span>Aluno</span>
                                                @elseif(Auth::user()->role == 1)
                                                    <span>Professor</span>
                                                @elseif(Auth::user()->role == 2)
                                                    <span style="color: red;">Admin</span>
                                                @else
                                                    <span>N/A</span>
                                                @endif
                                            @else
                                                <span>N/A</span>
                                            @endif
                                        </h6>
                                    </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Telefone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary"><span> {{  Auth::user()->phone_number ?? 'N/A' }} </span></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Endereço</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary"><span> {{  Auth::user()->address ?? 'N/A' }} </span></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12"><a class="btn btn-warning" role="button" target="" href="{{ route('perfil.edit') }}">Editar</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
@endsection