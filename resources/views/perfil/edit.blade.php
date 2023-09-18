@extends('layouts.app')

@section('content')

<body style="font-family: Poppins, sans-serif;">
    <div class="overlay"></div>
    <section class="py-5">
        <form method="POST" action="{{ route('perfil.update') }}" enctype="multipart/form-data">
            @csrf
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
                                    <div class="text-center d-flex flex-column align-items-center">
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <figure class="text-center">
                                        <img class="rounded-circle" src= {{ $user->image ? asset($user->image) : asset('images/default-photo.png') }} alt="Imagem de perfil" style="max-width: 150px; max-height: 150px; width: 150px; height: 150px; object-fit: cover;">
                                        </figure>
                                        <input type="file" name="image" id="imageName" class="form-control">
                                        <div class="my-3">
                                            <h4>{{  Auth::user()->name ?? 'N/A' }}</h4>
                                            <input class="form-control form-control sized" type="text" name="specialty" placeholder="Especialidade" value="{{ $user->specialty ?? '' }}">
                                            <p class="text-muted font-size-sm">Santos - SP, Brasil</p><a class="btn btn-warning">Ver Aulas</a><button class="btn btn-outline-primary">Mensagem</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 align-self-center">
                                            <h6 class="mb-0">Twitter</h6>
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            <input class="form-control form-control sized" type="text" name="social_links[twitter]" placeholder="@Alybaff" value="{{ $user->social_links['twitter'] ?? '' }}">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6 align-self-center">
                                            <h6 class="mb-0">Linkedin</h6>
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            <input class="form-control form-control sized" type="text" name="social_links[linkedin]" placeholder="Fabio Carvalho" value="{{ $user->social_links['linkedin'] ?? '' }}">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6 align-self-center">
                                            <h6 class="mb-0">Instagram</h6>
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            <input class="form-control form-control sized" type="text" name="social_links[instagram]" placeholder="Fabio Carvalho" value="{{ $user->social_links['instagram'] ?? '' }}">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6 align-self-center">
                                            <h6 class="mb-0">Website</h6>
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            <input class="form-control form-control sized" type="text" name="social_links[website]" placeholder="Fabio Carvalho" value="{{ $user->social_links['website'] ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3 align-self-center">
                                            <h6 class="mb-0">Nome: </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input class="form-control form-control sized" type="text" name="name" placeholder="Fabio Carvalho" value="{{ $user->name }}" required>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3 align-self-center">
                                            <h6 class="mb-0">E-mail</h6>
                                        </div>
                                        <div class="col">
                                            <input class="form-control form-control sized" type="email" name="email" placeholder="fabio.carvalho8@fatec.sp.gov.br" value="{{ $user->email }}" required>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3 align-self-center">
                                            <h6 class="mb-0">Telefone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input class="form-control form-control sized" type="tel" name="phone_number" placeholder="+55 13 982081352" value="{{ $user->phone_number }}" required>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3 align-self-center">
                                            <h6 class="mb-0">Endereço</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input class="form-control form-control sized" type="text" name="address" placeholder="Santos - SP, Brasil" value="{{ $user->address }}" required>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12"><button class="btn btn-warning" type="submit">Salvar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
@endsection