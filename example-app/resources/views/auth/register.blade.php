@extends('layouts.app')

@section('content')


<body style="font-family: Poppins, sans-serif;">
    <section class="register-photo" style="background-color: transparent;">
        <div class="form-container" style="margin-top: 40px;">
            <div class="image-holder" style="background: url(&quot;images/IINET-DOSAGE-1.jpg&quot;) left / cover no-repeat;"></div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h2 class="text-center text-white" style="--bs-dark: #090716;--bs-dark-rgb: 9,7,22;"><strong>Crie sua conta</strong></h2>


            <div class="form-group mb-3">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nome" autocomplete="name" autofocus>
            </div>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="form-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <div class="form-group mb-3">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Senha" required autocomplete="new-password">
                </div>

                <div id="passwordsError" style="display: none;margin-bottom: 16.5px;"><span id="errorMessage" class="text-danger" style="font-size:13px;"></span></div>
                <div class="form-group mb-3">
                    <div class="form-check"><label class="form-check-label text-white"><input class="form-check-input" type="checkbox">Estou de acordo com os Termos de Serviço</label></div>
                </div>
                <div class="form-group mb-3">
                    
                    <button type="submit" class="btn btn-warning link-dark d-block w-100">
                        {{ __('Criar Conta') }}
                    </button>
                <a class="link-warning already mt-3" href="{{ route('login') }}">Já tem uma conta? Conecte-se aqui</a>
            </form>
        </div>
    </section>
</html>
@endsection