@extends('layouts.app')

@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - WaC</title>
    <meta property="og:image" content="assets/img/logo.png">

</head>

<body style="font-family: Poppins, sans-serif;">
    <section class="register-photo" style="background-color: transparent;">
        <div class="form-container" style="margin-top: 40px;border-radius: 8px!important;">
            <div class="image-holder" style="background: url(&quot;images/IINET-DOSAGE-1.jpg&quot;) left / cover no-repeat;"></div>
                <form method="POST" action="{{ route('login') }}" style="height: 525px;--bs-dark: #090716;--bs-dark-rgb: 9,7,22;">
                    @csrf
                <h2 class="text-center text-white" style="--bs-dark: #090716;--bs-dark-rgb: 9,7,22;">
                    <strong>Conecte-se</strong></h2>
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="form-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha" autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-check my-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar Senha') }}
                                    </label>
                                </div>

            <div class="form-group mb-3"><button class="btn btn-warning link-dark d-block w-100" id="submitButton"
                    type="submit"
                    style="color: rgb(255,255,255);--bs-dark: #090716;--bs-dark-rgb: 9,7,22;">Conectar</button>
            </div>
            
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Esqueceu sua senha?') }}
            </a>
        @endif
            <a class="link-warning already" href="{{ route('register')}}">Ainda não possui uma conta? Registre-se </a>
        </form>
    </div>
</section>

</body>

</html>
@endsection