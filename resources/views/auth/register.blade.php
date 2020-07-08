@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h3 class="font-weight-bold">Registro</h3>
                    <h6 class="text-muted">Para tener acceso debe rellenar el siguiente formulario.</h6>
                    <div class="row align-items-center mt-3">
                        <div class="col-md-6 order-2 order-md-1">
                            <img src="{{asset('/img/register.svg')}}" class="img-fluid"  alt="register">
                        </div>
                        <div class="col-md-6 order-1 order-md-2">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                                    placeholder="Ingrese su nombre" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="Ingrese su email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password"
                                    placeholder="Ingrese su password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation"
                                    placeholder="Por favor, confirme su password">
                                </div>
                                <div class="form-group mt-3 pt-2">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Registrarme
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
