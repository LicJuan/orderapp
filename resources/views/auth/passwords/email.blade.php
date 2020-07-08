@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h3>Restablecer Password</h3>
                    <h6 class="text-muted">Por Favor introduzca su email para continuar</h6>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row mt-3 align-items-center">
                        <div class="col-md-6">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" placeholder="Ingrese su email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Enviar el link de restauracion
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="{{asset('img/reset.svg')}}" class="img-fluid" width="250px" alt="reset">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
