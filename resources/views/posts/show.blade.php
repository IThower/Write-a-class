@extends('layouts.app')

@section('content')
<body>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col mb-4">
                    <div>
                        <h1>Dentro da aula </h1>
                        <h2 class="subheading">{{ $post->title }}</h2>
                        <span class="meta">
                            Posted by
                            @if($post->user)
                                <a href="#!">{{ $post->user->name }}</a>
                            @else
                                Usuario Desconhecido    
                            @endif
                            on
                            @if($post->created_at)
                                {{ $post->created_at->format('Y-m-d') }}
                            @else
                                Data Desconhecida
                            @endif
                        <div class="py-4"><span class="badge bg-warning mb-2" style="color: #090716;margin-left: 0px;margin-right: 10px;">Tecnologia</span><span class="badge bg-warning mb-2" style="color:#090716;">UX Design</span>
                            <h4 class="fw-bold">{{ $post->title }}</h4>
                            <p class="text-muted">{{ $post->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @if ($post->user && $post->user->id == Auth::user()->id)
        <div class="d-flex justify-content-end my-5">
            <div>
                <p class="fw-bold">Você é o dono do post! Deseja editar ou deletar?</p>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-primary px-4" href="{{ route('posts.edit',$post->id) }}">Editar</a>
                    <button type="submit" class="btn btn-danger px-4">Deletar</button>
                </form>
            </div>
        </div>
        @endif
        </div>
        
        <div class="container bg-dark py-5" style="background: var(--bs-dark);--bs-dark: #090716;--bs-dark-rgb: 9,7,22;border-radius: 25px;">
            <div class="row py-3">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-warning mb-2" style="border-color: var(--bs-yellow);color: var(--bs-yellow);">Veja o que os alunos falam</p>
                    <h3 class="fw-bold">Comentários</h3>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-8 mx-auto">
                    <div class="card bg-body card-body">
                        <div class="card-body">
                            <div class="col">
                                <div>
                                    <p class="border-0 border rounded comments p-4">Gostei Mussum.</p>
                                    <div class="d-flex">
                                        <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src={{ asset('images/profile.jpg') }}>
                                        <div><a href="#">
                                                <p class="fw-bold text-primary mb-0">Fabio Carvalho</p>
                                            </a>
                                            <p class="text-muted mb-0">Professor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-body card-body">
                        <div class="card-body">
                            <div class="col">
                                <div>
                                    <p class="border-0 border rounded comments p-4">Gostei Mussum.</p>
                                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src={{ asset('images/profile.jpg') }}>
                                        <div><a href="#">
                                                <p class="fw-bold text-primary mb-0">Fabio Carvalho</p>
                                            </a>
                                            <p class="text-muted mb-0">Professor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-body card-body">
                        <div class="card-body">
                            <div class="col">
                                <div>
                                    <p class="border-0 border rounded comments p-4">Gostei Mussum.</p>
                                    <div class="d-flex">
                                        <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src={{ asset('images/profile.jpg') }}>
                                        <div>
                                            <a href="#">
                                                <p class="fw-bold text-primary mb-0">Fabio Carvalho</p>
                                            </a>
                                            <p class="text-muted mb-0">Professor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="paginas">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item text-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em" height="1em" fill="currentColor">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M137.4 406.6l-128-127.1C3.125 272.4 0 264.2 0 255.1s3.125-16.38 9.375-22.63l128-127.1c9.156-9.156 22.91-11.9 34.88-6.943S192 115.1 192 128v255.1c0 12.94-7.781 24.62-19.75 29.58S146.5 415.8 137.4 406.6z"></path>
                                </svg></li>
                            <li class="list-inline-item text-center">1</li>
                            <li class="list-inline-item text-center">2</li>
                            <li class="list-inline-item text-center">3</li>
                            <li class="list-inline-item text-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em" height="1em" fill="currentColor">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M118.6 105.4l128 127.1C252.9 239.6 256 247.8 256 255.1s-3.125 16.38-9.375 22.63l-128 127.1c-9.156 9.156-22.91 11.9-34.88 6.943S64 396.9 64 383.1V128c0-12.94 7.781-24.62 19.75-29.58S109.5 96.23 118.6 105.4z"></path>
                                </svg></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <p class="fw-bold text-warning mb-2">Deixe sua opinião</p>
                        <h2 class="fw-bold">Comente também</h2>
                    </div>
                </div>
                <div class="row gx-0 gy-0 d-flex justify-content-center">
                    <div class="col-md-6 col-xl-8">
                        <div>
                            <form class="p-3 p-xl-4" method="post">
                                <div class="mb-3"></div>
                                <div class="mb-3"></div>
                                <div class="mb-3"><textarea class="form-control form-control" id="message-1" name="message" rows="6" placeholder="Mensagem"></textarea></div>
                                <div><button class="btn btn-warning shadow d-block w-100" type="submit">Enviar Comentário</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</body>

</html>
@endsection
