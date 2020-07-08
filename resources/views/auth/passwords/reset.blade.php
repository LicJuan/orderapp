@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h3>Restablecer Password</h3>
                    <h6 class="text-muted">Rellene el formulario para continuar.</h6>
                    <div class="row align-items-center mt-3">
                        <div class="col-md-6">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group">
                                        <input id="email" placeholder="Ingrese su email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" placeholder="Ingrese su nueva password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password-confirm" placeholder="Por favor, confirmela" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Restaurar Password
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('img/forgot.svg')}}" class="img-fluid" alt="forgot">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
