@extends('layouts.app')

@section('content')

<body style="font-family: Poppins, sans-serif;">
    <div class="overlay"></div>
    <section class="py-5">
        <form id="edit-profile">
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
                                    <div class="text-center d-flex flex-column align-items-center"><img class="rounded-circle" src="images/profile.jpg" alt="Admin" width="150">
                                        <div class="mt-3">
                                            <h4>{{  Auth::user()->name ?? 'N/A' }}</h4>
                                            <p class="text-primary mb-1">UI/UX Designer</p>
                                            <p class="text-muted font-size-sm">Santos - SP, Brasil</p><a class="btn btn-warning" role="button" href="my-classes.html">Ver Aulas</a><button class="btn btn-outline-primary">Mensagem</button>
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
                                        <div class="col-sm-6 text-secondary"><input class="form-control form-control sized" type="text" placeholder="@Alybaff"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6 align-self-center">
                                            <h6 class="mb-0">Linkedin</h6>
                                        </div>
                                        <div class="col-sm-6 text-secondary"><input class="form-control form-control sized" type="text" placeholder="Fabio Carvalho"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6 align-self-center">
                                            <h6 class="mb-0">Instagram</h6>
                                        </div>
                                        <div class="col-sm-6 text-secondary"><input class="form-control form-control sized" type="text" placeholder="Fabio Carvalho"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6 align-self-center">
                                            <h6 class="mb-0">Website</h6>
                                        </div>
                                        <div class="col-sm-6 text-secondary"><input class="form-control form-control sized" type="text" placeholder="Fabio Carvalho"></div>
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
                                        <div class="col-sm-9 text-secondary"><input class="form-control form-control sized" type="text" placeholder="Fabio Carvalho"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3 align-self-center">
                                            <h6 class="mb-0">E-mail</h6>
                                        </div>
                                        <div class="col"><input class="form-control form-control sized" type="email" placeholder="fabio.carvalho8@fatec.sp.gov.br"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3 align-self-center">
                                            <h6 class="mb-0">Telefone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary"><input class="form-control form-control sized" type="tel" placeholder="+55 13 982081352"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3 align-self-center">
                                            <h6 class="mb-0">Endereço</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary"><input class="form-control form-control sized" type="text" placeholder="Santos - SP, Brasil"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12"><button class="btn btn-warning" type="submit" form="edit-profile">Salvar</button></div>
                                    </div>
                                </div>
                            </div><span> aaa!! </span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>
</html>
@endsection