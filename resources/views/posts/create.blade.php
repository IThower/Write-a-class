@extends('layouts.app')

@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nova Aula - WaC</title>
</head>
<body style="font-family: Poppins, sans-serif;">
    <section class="py-5">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col">
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
                        @endif
                        </div>
                        <h1 class="display-6">Nova Aula - Professor -  {{Auth::user()->name}}</h1>
                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            <label class="form-label">Nome da Aula</label>
                            <input class="form-control mb-4" name="title" type="text" @error('title') is-invalid @enderror placeholder="Escreva um título que defina bem a aula.">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="message">Descrição</label>
                                <textarea class="form-control mb-4 @error('description') is-invalid @enderror" name="description" placeholder="Enter your post here..." style="height: 12rem" required></textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                    <button class="btn btn-success text-uppercase" type="submit">Publish</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
@endsection