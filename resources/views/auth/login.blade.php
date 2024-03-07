@extends('layouts.app', ['class' => 'fondo'])

@section('content')
<style>
    .fondo{
        background-image:url('img/unefa.webp');
        background-repeat:no-repeat;
        background-size: cover;
    }
</style>
<div class="contenedor">
            <div class="central">
                <div class="login">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <form class="loginform" method="POST" action="{{ route('login') }}">
                        @csrf
                        <input type="text"  placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                         @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                         </span>
                        @enderror
                        
                        <input type="password" placeholder="Contraseña" name="password"  class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Login</button>
               
                    <div class="pie-form">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">¿Perdiste tu contraseña?</a> 
                    </div>
                    @endif
                    </form>
                </div>
            </div>
        </div>
{{--<div class="contenedor">
    <div class="central">
            <div class="login">
            <div class="titulo">
                        Bienvenido
                    </div>
                    <div class="card-body">
                    <form class="loginform" method="POST" action="{{ route('login') }}">
                        @csrf

                        <input type="text"  placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    
                        <input type="password" placeholder="Contraseña" name="password"  class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                               
                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>--}}
@endsection
